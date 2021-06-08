<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\pesananDetail;
use Auth;
use Alert;
use PDF;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pesanans = Pesanan::where('id_user', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('pesanans'));
    }

    public function detail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('id_pesanan', $pesanan->id)->get();

     	return view('history.detail', compact('pesanan','pesanan_details'));
    }

    public function cetak_pdf($id) {
        set_time_limit(0);
        $pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('id_pesanan', $pesanan->id)->get();
        $pdf = PDF::loadview('history.pesanan_pdf', compact('pesanan','pesanan_details'));
        //return $pdf->stream();
        return $pdf->stream();
    }
}