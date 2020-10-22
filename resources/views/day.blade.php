@extends('master')
@section('title','Day Tour')
@section('content')

	<h3 class="py-4">DAY TOUR PACKAGES</h3>

	<div class="container my-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/day1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">Yangon Day Tour</h5><br>
						<a href="{{route('yangonpage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/day2.jpg')}}" class="card-img-top">
						<div class="card-body">
						<h5 align="center">Yangon Day Tour with Circular Train ride</h5>
						<button class="btn btn-outline-info btn-block">Details</button>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/day3.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">Yangon Day Return Trip to Pottery village</h5>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container my-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/day4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">Bago Day Tour</h5><br>
						<a href="{{route('bagopage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/day5.jpg')}}" class="card-img-top">
						<div class="card-body">
						<h5 align="center">Mandalay Day Tour</h5><br>
						<button class="btn btn-outline-info btn-block">Details</button>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/day6.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">Innwa (AVA) – Sagaing Day Tour</h5>
						<a href="{{route('innwapage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection