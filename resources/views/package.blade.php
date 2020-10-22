@extends('master')
@section('title','Package Tours')
@section('content')

	<div class="container py-4">
		<h2>SPECIAL TOUR PACKAGES</h2>
	</div>
	<div class="container my-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/lake.jpeg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">3 Day Yangon StopOver</h5>
						<h5 align="center">Yangon</h5><br>
						<a href="{{route('threedaypage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/kyaithteeyo.jpg')}}" class="card-img-top">
						<div class="card-body">
						<h5 align="center">4 Day Legend of Golden Rock</h5>
						<h5 align="center">Yangon-Bago-Kyaikhtiyo-Yangon</h5>
						<a href="{{route('fourdaypage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/bagan10.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">5 Day Temples of Bagan</h5>
						<h5 align="center">Yangon- Bagan- Yangon</h5><br>
						<a href="{{route('fivedaypage')}}" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container my-4">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img src="{{asset('mytemplateasset/img/mrauk.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 align="center">7 Day Kingdom of Rakhine</h5>
							<h5 align="center">Yangon-Mrauk U-Sittwe-Yangon</h5><br>
							<a href="7day.html" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="{{asset('mytemplateasset/img/lake2.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 align="center">8Day Compact Tour of Myanmar</h5>
							<h5 align="center">Yangon-Bagan-Mt.Popa-Mandalay-Heho–Yangon</h5>
							<a href="8day.html" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="{{asset('mytemplateasset/img/heho.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 align="center">Myanmar Fam Trip</h5>
							<h5 align="center">Yangon-Heho-Inle Lake-Bagan-Mt.Popa-Mandalay-Yangon</h5>
							<a href="fam.html" class="nav-link"><button class="btn btn-outline-info btn-block">Details</button></a>
						</div>
					</div>
				</div>
			</div>
	</div>