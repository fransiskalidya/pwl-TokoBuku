@extends('layouts.buku')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                    <h3><i class="tf-ion-android-cart"></i> Check Out</h3>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul Buku</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td align="center">{{ $no++ }}</td>
                                <td align="center">
                                    <img src="{{ url('Novel') }}/{{ $pesanan_detail->buku->image }}" width="100" alt="...">
                                </td>
                                <td align="center">{{ $pesanan_detail->buku->nama_buku }}</td>                              
                                <td align="center">{{ $pesanan_detail->jumlah }} buku</td>
                                <td align="center">Rp. {{ number_format($pesanan_detail->buku->harga) }}</td>
                                <td align="center">Rp. {{ number_format($pesanan_detail->subtotal) }}</td>
                                <td align="center">
                                    <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');">
                                        <i class="tf-ion-android-delete"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="center"><strong>Rp. {{ number_format($pesanan->total) }}</strong></td>
                                <td align="center">
                                    <a href="{{ url('checkout_pdf') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                        <i class="tf-ion-android-cart"></i> Check Out
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection