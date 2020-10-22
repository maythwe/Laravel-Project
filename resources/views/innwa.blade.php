@extends('master')
@section('title','Innwa Day Tour')
@section('content')



	<div class="container py-4">
		<div class="row py-4">
			<div class="col-12 py-4">
				<h3 class="py-4">Innwa (AVA) – Sagaing Day Tour</h3><br>
				<p class="lead">This morning, we will visit Ava, 30-minute drives to the south of Mandalay, was known as the Kingdom of Ava in the west. Stop by a tributary and cross it with a ferry. Travel by pony-cart around Ava to Nanmyint leaning tower which gives a birds’ eye view of the mighty Ayeyarwaddy River; Bagaya wooden monastery; Aungmyaybonza Monastery made of brick and stucco. Though the Royal Palace has gone, the Pagodas, Temples and Monasteries still remain. Lunch will be served at the local restaurant. Before driving to Sagaing, see the silversmith work place on our way. Then proceed to Sagaing Hill, which is famous for being covered with about 600 white-washed pagodas and monasteries. The Hill is famous for Buddhism and meditation, a home to over 3000-monks and 100-meditation centers. We will go to visit Soon-Oo-Pon-Nya-Shin & U-Min-Thone-Sae Pagodas while taking in the panoramic view and sunset over the below plains. Return drive to Mandalay.</p>
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
					<img src="{{asset('mytemplateasset/img/nan.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Nanmyint Leaning Tower</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/bagaya.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Bagaya Wooden Monastery</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/soon.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Soon-Oo-Pon-Nya-Shin</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/umin.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>U-Min-Thone-Sae Pagodas</h5>
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
