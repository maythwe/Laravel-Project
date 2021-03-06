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
					<h5>All Students</h5>
					
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
			<div class="col-md-12">
				<a href="{{route('student.create')}}" class="btn btn-info">Add New</a>
			</div>
			<div class="col-lg-8 col-md-10 mx-auto">
				<table border="1" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone No</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@php
							$i=1;
						@endphp
						@foreach($students as $row)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->email}}</td>
							<td>{{$row->phoneno}}</td>
							<td>
								<a href="{{route('student.edit',$row->id)}}" class="btn btn-warning">Edit</a>
								<form method="post" action="{{route('student.destroy',$row->id)}}" onsubmit="return confirm('Are you sure to delete?')" class="d-inline-block">
								@csrf
								@method('DELETE')
								<input type="submit" name="btnsubmit" class="btn btn-danger" value="Delete">
								</form>
								<a href="{{route('student.show',$row->id)}}" class="btn btn-primary">Detail</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection