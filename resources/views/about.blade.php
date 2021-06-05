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
@extends('layouts.buku')

@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">About Us</h1>
					<ol class="breadcrumb">
						<li><a href="{{url ('/') }}">Home</a></li>
						<li class="active">about us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="img-responsive" src="images/about/about.jpg">
			</div>
			<div class="col-md-6">
				<h2 class="mt-40">ERFOLG BOOK STORE</h2>
				<p align="justify">Toko buku ini kami dirikan dengan proses transaksi secara online. Yang mana tujuan utamanya ialah, membantu masyarakat yang 
							       memiliki hobi membaca, namun terkendala oleh jarak.Dengan adanya toko ini "ERFOLG", kami berharap masyarakat yang terkendala 
								   untuk berkunjung ke toko buku, bisa memesan melalui website kami dengan proses transaksi yang mudah, aman, dan tidak terhalang 
								   oleh jarak.</p>
				<a href="{{ url('/contact') }}" class="btn btn-main mt-20">Unduh Profil Perusahaan</a>
			</div>
		</div>
		<div class="row mt-40">
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
		</div>
	</div>
</section>

<div class="section video-testimonial bg-1 overly-white text-center mt-50">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><b>Buku Adalah Jendela Dunia</b></h2>
				<a class="play-icon" href="https://youtu.be/x2CgTVNmRRI" data-toggle="lightbox">
					<i class="tf-ion-ios-play"></i>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
