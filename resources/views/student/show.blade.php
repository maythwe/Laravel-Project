@extends('master')
@section('title','Detail')
@section('content')
	{{-- carousel --}}
	<div id="carouselExampleCaptions" class="carousel slide py-4" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{asset('mytemplateasset/img/cover.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Student Detail</h5>
					
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('mytemplateasset/img/cover2.jpeg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Let the Journey Begin</h5>
					<h2>Golden Myanmar</h2>
					<p>Never Stop Exploring</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('mytemplateasset/img/cover3.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Let the Journey Begin</h5>
					<h2>Golden Myanmar</h2>
					<p>Never Stop Exploring</p>
				</div>
			</div>
		</div>
	</div>

	{{-- Main Content --}}
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<p>Name:<span>{{$student->name}}</span></p>
				<p>Email:<span>{{$student->email}}</span></p>
				<p>Phone No:<span>{{$student->phoneno}}</span></p>
				<p>Address:<span>{{$student->address}}</span></p>
			</div>
		</div>
	</div>

@endsection