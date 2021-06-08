@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Kategori </h3>

                    @foreach ($buku as $Buku)
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <div class="card" style="width: 18rem;">
                                <img src="{{url('Novel')}}/{{$Buku->image}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4><a href="{{ url('pesan') }}/{{ $Buku->id }}">{{$Buku->nama_buku}}</a></h4>
                                    <p class="price">Rp {{ number_format($Buku->harga) }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
