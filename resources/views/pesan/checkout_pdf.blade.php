<!DOCTYPE html>
<html>
<head>
    <title>Print Data Pemesanan Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
        crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2 align="center">ERFOLG BOOK STORE</h2>
                <br>
                <h1 align="center">Data PesananCustomer</h1>
            </div>
            <br><br>
            <div class="float-left my-2">
                <p><strong>Nama :</strong> {{ $Checkout1->id_user->name }}</p>
                <p><strong>Email :</strong> {{ $Checkout1->id_user->email }}</p>
            </div>
    <br><br><br><br><br><br>
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
                                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                        <i class="tf-ion-android-cart"></i> Check Out
                                    </a>
                                </td>
                                </table>
                            <div class="float-right my-2">
                                <a class="btn btn-success mt-3" href="{{ route('pesan.index') }}">Kembali</a>
                            </div>
                            <div class="float-left my-2 text-center">
                                <a class="btn btn-danger mt-3" href="{{ route('mahasiswa.pdf', $Mahasiswa->Nim) }}">Cetak ke PDF</a>
                            </div>
                        </div>
                    </div>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </table>
            </div>
        </div>
    </body>
</html>