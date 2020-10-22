@extends('master')
@section('title','Festival')
@section('content')	


	<div>
		<img src="{{asset('mytemplateasset/img/fe2.jpg')}}" class="img">
	</div>
		
	<div class="container my-4">
		<div class="row">
			<div class="col-12">
				<p class="lead py-4 my-4 mx-4 px-4">Discover exciting festivals that represent Myanmar’s rich culture, traditions and customs. Each festival is made memorable and fun by the whole hearted participation of locals. Join them in their celebrations and witness beautiful parades of offerings, lights, hot air balloons and even interesting performances in the festivals of Myanmar.</p>
			</div>
		</div>
	</div>

	<div class="container my-4">
		<div class="row">
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/tabaung.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Shwedagon Pagoda Festival</h5>
						<p>Date:March(Full moon day of Tabaung)</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/thingyan1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Water Festival & New Year</h5>
						<p>Date:April 13 to 17(Water Festival)</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/kason.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Bodhi Tree Watering Festival </h5>
						<p>Date:May(Full Moon Day of Kason)</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/warso.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Warso Full Moon Day of Festival </h5>
						<p>Date:July(Full Moon Day of warso)</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/paungdawoo.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Paung Daw Oo Pagoda Festival</h5>
						<p>Date:September(1st Waxing to 3rd Wanning Day of Thingdingyut)</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/elephant.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Dancing Elephants Festival</h5>
						<p>Date:October(2 days in October before the Full Moon Day)</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/magway.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Magway Mya Tha Lon Pagoda Festival</h5>
						<p>Date:December(Celebrated during Thadingyut)</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/kyaithteeyo.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Kyaik-Htee-Yo Pagoda Festival </h5>
						<p>Date:December(Celebrated on the New Year’s Eve every year)</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection