@extends('master')
@section('title','Optional Tours')
@section('content')

	<div class="container py-4">
		<a href="" class="navbar-brand">OPTIONAL TOUR PACKAGES</a>
	</div>

	<div class="container my-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/op1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">Red Mountain Tour</h5><br>
						<a href="{{route('mountainpage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/op2.jpg')}}" class="card-img-top">
						<div class="card-body">
						<h5 align="center">Trekking in Pindaya</h5><br>
						<a href="{{route('trekkingpage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/op3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">Balloons over Inle</h5><br>
						<a href="{{route('inlepage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection