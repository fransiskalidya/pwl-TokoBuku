@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Sukses Check Out</h3>
                    <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong> dengan nominal : <strong>Rp. {{ number_format($pesanan->kode+$pesanan->total) }}</strong></h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                    @if(!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('Novel') }}/{{ $pesanan_detail->buku->image }}" width="100" alt="...">
                                </td>
                                <td>{{ $pesanan_detail->barang->nama_buku }}</td>
                                <td>{{ $pesanan_detail->jumlah }} buku</td>
                                <td align="right">Rp. {{ number_format($pesanan_detail->buku->harga) }}</td>
                                <td align="right">Rp. {{ number_format($pesanan_detail->subtotal) }}</td>
                                
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->total) }}</strong></td>
                                
                            </tr>
                             <tr>
                                <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                <td align="right"><strong>Rp. {{ number_format($pesanan->total }}</strong></td>                                
                            </tr>
                        </tbody>
                    </table>
                    </table>
                    <div class="float-right my-2">
                        <a class="btn btn-success mt-3" href="{{ route('pesan.index') }}">Kembali</a>
                    </div>
                    <div class="float-left my-2 text-center">
                        <a class="btn btn-danger mt-3" href="{{ route('pesanan.pdf', $pesanan_detail->id) }}">Cetak ke PDF</a>
                    </div>
                </div>
            </div>
                    @endif
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection