<!--
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->
@extends('layouts.app')

@section('content')

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <a href="{{ url('/') }}" class="btn btn-primary"><i class="tf-ion-android-delet"></i>Kembali
                </a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $buku->nama_buku}}</li>
                    </ol>
                </nav>
                <div class="col-md=12 mt-1">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $buku->nama_buku}}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('Novel') }}/{{ $buku->image}}" class="rounded mx-auto
                            d-block" width="400px" alt="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h3>{{ $buku->nama_buku}}</h3>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp {{ number_format($buku->harga) }}</td>
                                        </tr>
                                        <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td><p align="justify">{{ $buku->deskripsi }}</p></td>
                                        </tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td><p align="justify">{{ $buku->stok }}</p></td>
                                        </tr>
                                        <tr>
                                        <td>Jumlah Beli</td>
                                        <td>:</td>
                                        <td>
                                            <form action="{{ url('pesan') }}/{{ $buku->id }}" method="post">
                                            @csrf
                                                <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-3"><i class="tf-ion-android-cart">
                                                </i>Masukkan Keranjang</button>
                                            </form>                                    
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>

@endsection
