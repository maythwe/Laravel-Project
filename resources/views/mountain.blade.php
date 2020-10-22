@extends('master')
@section('title','Red Mountain Tour')
@section('content')	

	<div class="container py-4">
		<div class="row py-4">
			<div class="col-lg-6 col-md-6 py-4">
				<h3 class="py-4">Red Mountain Tour</h3>
				<h5>Blossoming vineyards</h5>
				<img src="{{asset('mytemplateasset/img/red.jpg')}}" class="img-fluid py-4">
				<p>Located on the side of the famous Inle Lake, in the southern Shan State of the Union of Myanmar, the Red Mountain Estate produces the best wines of the country. Since the beginning, the wines are produced with locally grown grapes. All of the 400,000 plants have been imported from France and Spain, and the variety chosen after experimentation.</p>
			</div>
			<div class="col-lg-6 col-md-6 py-4">
				<h3 class="py-4">Tasting Wine</h3>
				<h5>Enjoying Sunset</h5>
				<img src="{{asset('mytemplateasset/img/wine.jpg')}}" class="img-fluid py-4">
				<p>One of the main reasons that makes people make the Red Mountain tours is the need to taste the various Washington wine that are prepared by the world’s leading wineries. Everyone loves wine tasting at the Red Mountain because a variety of experiences shall be enjoyed.</p>
			</div>
		</div>
	</div>
	<div class="container py-4">
		<h3 class="">More Attraction</h3>
		<p class="lead">Do you think summer is the best time to travel? Just think again. Off season also offers you the most peaceful destinations with fewer crowds and best deals to explore the nature itself. So here you can experience Myanmar’s most attractive sites for less.</p>
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