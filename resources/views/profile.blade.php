@extends('layouts.buku')

@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Profile Customer</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Profile Customer</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
            <img src="{{asset('storage/'.$user->image)}}" alt="Gambar" style="width: 200px;height: 200px;border-radius: 50%; justify-content:center"></img>
               <div class="block billing-details">
                  <h4 class="widget-title">Profile Customer</h4>
                  <form class="checkout-form" action="/profile/{{$user->id}}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                    @csrf
                     <div class="form-group">
                        <label for="nama"></label>
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="" value="{{$user->name}}">
                     </div>
                     <div class="form-group">
                        <label for="email"></label>
                        <input name="email" type="text" class="form-control" id="email" placeholder="" value="{{$user->email}}">
                     </div>
                     <div class="form-group" >
                        <label for="image"></label>
                        <input name="image" type="file" class="form-control" id="image" value="{{$user->image}}">
                     </div>
                     <button class="btn btn-main mt-20 offset-mx-4" type="submit" name="submit">Submit</button>
                  </form>
               </div>

        @endsection
