@extends('master')
@section('title','Car Rental')
@section('content')

	<div class="container my-4 py-4">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Our Car Rental Services</h3>
				<p class="lead py-4 my-2 mx-2">Don’t need to rush to Taxi kiosk for transportation to your lodging. We are delivering our rental service on your demands of vehicle with in stock at reasonable price .All the cars introduced by us will be cautions of safe driving and your comfort at all times. Please click on each type of motors and choose type of service we should deliver.</p>
			</div>
		
		</div>
	</div>
	
	<div class="container my-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/saloon.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 class="text-center text-dark">Saloon(1-2Pax)</h5>
							<button class="btn btn-outline-info btn-block">Details</button>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/alphard.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 class="text-center text-dark">Alphard(3-4Pax)</h5>
							<button class="btn btn-outline-info btn-block">Details</button>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/hiace.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 class="text-center text-dark">Hi-Ace(5-7Pax)</h5>
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
					<img src="{{asset('mytemplateasset/img/Toyota-Grand-Cabin.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center text-dark">14 Seaters (8-11 Pax)</h5>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
				<div class="col-md-4">
					<div class="card">
						<img src="{{asset('mytemplateasset/img/24-seaters.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 class="text-center text-dark">24 Seaters (12-21 Pax)</h5>
							<button class="btn btn-outline-info btn-block">Details</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="{{asset('mytemplateasset/img/33-seaters.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 class="text-center text-dark">33 Seaters (22-30 Pax)</h5>
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
					<img src="{{asset('mytemplateasset/img/45-seaters4.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center text-dark">45 Seaters (25-28 Pax)</h5>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container my-4">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Terms and Conditions</h3>
				<p class="lead py-4 my-2 mx-2">We are at your disposal of arranging and pick-up to fill your needs on your show-up. Our pre-booking system eases you and wipe out your trouble of transportation while you are busy with your luggage on arrival and visits.We do not hold any booking at this stage:</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Type of Services</h3>
				<ul type="circle disk py-4 my-4 mx-2">
					<li>12 hours per day( For city tour/full day tour)</li>
					<li>Car will pick up/drop off from your hotel/Airport (for transfer)</li>
					<li>10 hours per day(For business and personal tour)</li>
					<li>6 hours per day(For half day city tour)</li>
					<li>5 hours per day ( For business and personal tour)</li>
				</ul>
				<p class="ml-4">Note: There will be 10% surcharge for every extra per hour</p>
			</div>
		</div>
	</div>
	<div class="container my-4">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Our services included</h3>
				<ul type="circle disk py-4 my-2 mx-2">
					<li>Water Bottle and refreshing towel</li>
					<li>Car driver, fuel and Parking fees</li>
					<li>Air-conditioned , modern and comfortable seat</li>
					<li>Toll gate fees</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container my-4">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Our services Excluded</h3>
				<ul type="circle disk py-4 my-2 mx-2">
					<li>Entrance fees</li>
					<li>Items/ Services not mention in inclusion.</li>
				</ul>
			</div>
		</div>
	</div>

@endsection