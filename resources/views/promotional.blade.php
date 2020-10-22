@extends('master')
@section('title','Promotional')
@section('content')


	<div class="container py-4">
		<a href="" class="navbar-brand">SPECIAL PROMOTION FOR CUSTOMERS</a>
	</div>
	<div class="container my-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/lake.jpeg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">3 Day Yangon StopOver</h5>
						<del><h5 align="center">Before:USD 430</h5></del>
						<h5 align="center">Now:USD 330</h5>
						<h5 align="center">Until:Dec 2020</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/kyaithteeyo.jpg')}}" class="card-img-top">
						<div class="card-body">
						<h5 align="center">4 Day Legend of Golden Rock</h5>
						<del><h5 align="center">Before:USD 585</h5></del>
						<h5 align="center">Now:USD 485</h5>
						<h5 align="center">Until:Dec 2020</h5>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/bagan10.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">5 Day Temples of Bagan</h5>
						<del><h5 align="center">Before:USD 775</h5></del>
						<h5 align="center">Now:USD 675</h5>
						<h5 align="center">Until:Dec 2020</h5>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection