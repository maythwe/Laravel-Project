@extends('master')
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
					<h5>Students Create Form</h5>
					
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
				<form method="post" action="{{route('student.store')}}">
					@csrf
					<div class="form-group row">
						<div class="col-md-6">
							<label>Roll No:</label>
							<input type="text" name="rollno" class="form-control" 
							@error('rollno') is-invalid @enderror value="{{old('rollno')}}" required>
							@error('rollno')
							<span class="invalid-feedback"  role="alert"></span>
    							<strong>{{ $message }}</strong>
    						</span>
							@enderror
						</div>
						<div class="col-md-6">
							<label>Name:</label>
							<input type="text" name="name" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label>Email:</label>
							<input type="email" name="email" class="form-control" @error('email') is-invalid @enderror value="{{old('email')}}">
							@error('email')
							<span class="invalid-feedback"  role="alert"></span>
    							<strong>{{ $message }}</strong>
    						</span>
							@enderror
						</div>
						<div class="col-md-6">
							<label>Phone No:</label>
							<input type="text" name="phoneno" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="btnsubmit" value="save" class="btn btn-info btn-block">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection