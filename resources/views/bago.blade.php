@extends('master')
@section('title','Bago Day Tour')
@section('content')

	<div class="container py-4">
		<div class="row py-4">
			<div class="col-12 py-4">
				<h3 class="py-4">Bago Day Tour</h3><br>
				<p class="lead">This morning, we will hit the road to Bago. En route, we can pause our drive for a short visit to the Taukkyan War Cemetery which is a cemetery for Allied soldiers from the British Commonwealth who died in battle in Burma during the Second World War. The cemetery is in Taukkyan town, about 25 kilometres north of Yangon on Pyay Road. Then, we will proceed our excursion to the ancient capital of Bago (formerly known as Pegu). Its classical name is Hamsawaddy and lasted about 300yrs from 1365AD to 1635AD. The golden period reached during the time of King Bayinnaung when he twice conquered Ayutthaya, but unable to sustain it long. On the way, see the Four-seated Buddha Image (Kyaikpun) & pottery work place. Upon arrival, take a look around the town including a visit to the local market, Shwetharlyaung – a 55 meters long reclining Buddha Image, Shwemawdaw Pagoda – a spire that is even taller than that of the great Shwedagon Pagoda and the renew Grand Palace (the Kanbawzathadi Palace), built by King Bayintnaung, the founder of the second Myanmar Empire. This evening, drive back to Yangon.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h3 class="py-4">Meals included: Lunch</h3>
			</div>
		</div>
	</div>
	<div class="container my-4">
		<div class="row">
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/shwemaw.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Shwe Maw Daw Pagoda</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/kyaitpan.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Kyaikpun Buddha Image</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/shwethar.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Shwetharlyaung Pagoda</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/kanbaw.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Kanbawzathadi Palace</h5>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="container py-4">
		<h3 class="">Our Services Include:</h3>
		<ul type="circle disk py-4 my-2 mx-2">
			<li>Sightseeing with professional English speaking local tour guide</li>
			<li>Private air-conditioned vehicles with driver for transfers and excursion as mentioned in program</li>
			<li>Entrance fees and zone fees for the visits mentioned in the program</li>
			<li>Meals included lunch as mentioned in the program</li>
		</ul>
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