@extends('master')
@section('title','Balloons Over Inle Tour')
@section('content')


	<div class="container py-4">
		<div class="row py-4">
			<div class="col-12 py-4">
				<h3 class="pt-4">Balloons over in Inle</h3><br>
				<h5>Oriental Hot-air balloon</h5>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<img src="{{asset('mytemplateasset/img/ball1.jpg')}}" class="img-fluid py-4">
			</div>
			<div class="col-lg-6 col-md-6">
				<img src="{{asset('mytemplateasset/img/ball2.jpg')}}" class="img-fluid py-4">
			</div>
		</div>
	</div>
	<div class="container py-4">
		<div class="row">
			<div class="col-12">
				<p class="lead">Take to the skies of Myanmar in our small, exclusive balloons and experience the true flavor of this astonishing country from a different perspective! Feel at ease in our traditional wicker basket compartments.</p><br>
				<p class="lead">Nestled between the mountains of the southern Shan State lies one of Myanmar’s top destinations, spectacular Inle Lake, in the Southern Shan Hills, with the scenery providing stunning panoramic views. Flying over stilted villages, leg-rowing fishermen, floating gardens and layered mountains as a backdrop, Inle Lake is probably the most extraordinary place in the world to fly in a hot air balloon.</p>
			</div>
		</div>
	</div>
	<div class="container py-4">
		<div class="row">
			<div class="col-lg-4">
			<img src="{{asset('mytemplateasset/img/ball3.jpg')}}" class="img-fluid py-4">
			</div>
			<div class="col-lg-4">
				<br><br>
				<p class="lead">Rising with the sun in a hot  air balloon was beyond magical. Definitely the best means to take in the scope of this area and all it encompasses!</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<button type="button" class="btn btn-outline-primary">Book Now Here</button>
				<button type="button" class="btn btn-outline-primary">Contact</button>
			</div>
		</div>
	</div>
@endsection