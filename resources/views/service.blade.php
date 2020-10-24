@extends('master')
@section('content')
	<div class="container py-4">
		<a href="" class="navbar-brand">CONTACT US</a>
	</div>

	<div class="container py-4">
		<div class="row">
			<div class="col-lg-3">
				<div class="row">
					<div class="col-12">
						<h5>Address</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p>No(272),Parami Road,Yangon</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-12">
						<h5>Telephone</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p>01-55555/+959756855424</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-12">
						<h5>Email</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p>maytravelandtour@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-12">
						<h5>Skype</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p>May Travel and Tour</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- maincontent --}}
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				{{-- <h1>{{$name}}</h1> --}}
				@foreach($students as $row)
				<p>Name:{{$row['name']}}</p>
				<p>Age:{{$row['age']}}</p>
				@endforeach
			</div>
		</div>
	</div>

@endsection