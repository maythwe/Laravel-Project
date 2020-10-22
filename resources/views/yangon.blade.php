@extends('master')
@section('title','Yangon Day Tour')
@section('content')

	<div class="container py-4">
		<div class="row py-4">
			<div class="col-12 py-4">
				<h3 class="py-4">Yangon Day Tour</h3><br>
				<p class="lead">In the morning around 8:30 am, you will be picked up by your English Speaking local Tour Guide to spend the day exploring Yangon. For starters, you will enjoy a walk through downtown Yangon where most of the colonial buildings such as city hall, Mahabandoola park, high court and telegraphic office still holding an elegant beauty of Yangon. We will also stop by at the Strand Hotel to feel the warmth and atmosphere of British era. Continue to visit the grand synagogue with its soaring ceiling and graceful columns in the centre of the downtown Yangon. Enjoy lunch at local restaurant where you can taste variety of real home cook Burmese food. After lunch, we head to Chaukhtetgyi Reclining Buddha Image and there you see the sparse pilgrims in silence. Also we will stop by at nearby monastery to learn about the life of Buddhist monk in Myanmar. This evening, visit to the magnificent Shwedagon Pagoda of Rudyard Kipling fame and one of Myanmar’s most sacred places. The massive bell shaped stupa is plated with gold and the tip of the stupa is set with diamonds and rubies, sapphires and topaz – a stunning sight as the sun sets and a most fitting place to begin our trip in this “Golden Land”. After visiting Shwedagon pagoda, transfer to you hotel and overnight at the hotel in Yangon.</p>
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
					<img src="{{asset('mytemplateasset/img/strand.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Strand Hotel</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/shwe.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>ShweDagon Pagoda</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/maha.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Mahabandoola Park</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/tele.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Telegraphic Office</h5>
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