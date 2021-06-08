<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Buku;
use App\Models\Pesanan;
use App\Models\pesananDetail;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id) {
        $buku = Buku::where('id', $id)->first();

        return view('pesan.index', compact('buku'));
    }

    public function pesan(Request $request, $id) {
        $buku = Buku::where('id', $id)->first();
        $tanggal = Carbon::now();

        if($request->jumlah_pesan > $buku->stok) {
            return redirect('pesan/'.$id);
        }

        $cek_pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();

        if(empty($cek_pesanan)){
            $pesanan = new Pesanan;
            $pesanan->id_user = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->total =  0;
            $pesanan->save();
        }

        $pesanan_baru = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();

        //cek pesanan detail
        $cek_pesanan_detail = pesananDetail::where('id_buku', $buku->id)->where('id_pesanan', 
        $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
        {
            $pesanan_detail = new pesananDetail;
            $pesanan_detail->id_buku = $buku->id;
            $pesanan_detail->id_pesanan = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->subtotal = $buku->harga*$request->jumlah_pesan;
            $pesanan_detail->save();
        } else{
            $pesanan_detail = pesananDetail::where('id_buku', $buku->id)->where('id_pesanan', 
            $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

            //harga sekarang
            $harga_pesanan_detail_baru = $buku->harga*$request->jumlah_pesan;
            $pesanan_detail->subtotal = $pesanan_detail->subtotal+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        //jumlah total
        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        $pesanan->total = $pesanan->total+$buku->harga*$request->jumlah_pesan;
        $pesanan->update();

        Alert::success('Buku berhasil masuk keranjang pesanan', 'Success');
        return redirect('/');
        //$pesanan_baru->total = $buku->harga*$request->jumlah_pesan;
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
 	    $pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = pesananDetail::where('id_pesanan', $pesanan->id)->get();

        }
        
        return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
    }

    public function delete($id)
    {
        $pesanan_detail = pesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->id_pesanan)->first();
        $pesanan->total = $pesanan->total-$pesanan_detail->subtotal;
        $pesanan->update();

        $pesanan_detail->delete();

        Alert::error('Pesanan Anda Sukses Dihapus', 'Hapus');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->image))
        {
            //Alert::error('Identitas Harap dilengkapi', 'Error');
            return redirect('/profile');
        }

        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = pesananDetail::where('id_pesanan', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $buku = Buku::where('id', $pesanan_detail->id_buku)->first();
            $buku->stok = $buku->stok-$pesanan_detail->jumlah;
            $buku->update();
        }

        Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$pesanan_id);

    }
}
