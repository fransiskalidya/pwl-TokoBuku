<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $buku = Buku::where('id_kategori', 1)->get();
        if ($request->has('search')) {
            $buku = Buku::where("nama_buku", "LIKE", "%" . $request->search . "%");
            $kategori = Kategori::all();
        } else {
            $buku = Buku::paginate(12);
            $kategori = Kategori::all();
        }
        return view('index', compact('buku', 'kategori'));
    }
    public function show($id)
    {
        // berdasarkan kategori
        $buku = DB::table('buku')->where('id_kategori', $id)->get();
        $kategori = Kategori::all();
        return view('kategori', compact('buku', 'kategori'));

        // $buku = Buku::find($id);
        // return view('productSingle', compact('buku'));
    }
}
