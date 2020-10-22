@extends('master')
@section('title','Home')
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
					<h5>Let the Journey Begin</h5>
					<h2>Golden Myanmar</h2>
					<p>Never Stop Exploring</p>
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

	<div class="container py-4">
		<div class="row text-center">
			<div class="col-lg-3 col-md-6 py-4">
				<img src="{{asset('mytemplateasset/img/icon1.png')}}" class="img-fluid py-4">
				<h4 class="text-center">LAND OF WONDROUS NATURE</h4>
				<p>Flush with lush forests decorating green mountains, and magnificent bodies of water teeming with endemic species, the country is perfect for nature lovers.</p>
			</div>
			<div class="col-lg-3 col-md-6 py-4">
				<img src="{{asset('mytemplateasset/img/icon2.png')}}" class="img-fluid py-4">
				<h4 class="text-center">SPLENDID CULTURE & TRADITIONS</h4>
				<p>It is an impressive list of culture and traditions that mark the life of the Myanmarese. The months are packed with exciting festivals, delicious food, and beautiful traditional crafts</p>
			</div>
			<div class="col-lg-3 col-md-6 py-4">
				<img src="{{asset('mytemplateasset/img/icon3.png')}}" class="img-fluid py-4">
				<h4 class="text-center">SIGNIFICANT RELIGIOUS SITES</h4>
				<p>The country is home to important religious sites for Buddhists worldwide. Experience the spiritual and the supernatural in temples, pagodas and monasteries across the lush landscape.</p>
			</div>
			<div class="col-lg-3 col-md-6 py-4">
				<img src="{{asset('mytemplateasset/img/icon4.png')}}" class="img-fluid py-4">
				<h4 class="text-center">RICH IN<br>ANCIENT HISTORY</h4>
				<p>More than its rich recent historical past, Myanmar is home to the ancient Pyu cities as well as rare archaeological finds dating back to the Neolithic period.</p>
			</div>
		</div>
	</div>
	
	<h3 align="center">A Fantastic Introduction to Myanmar</h3>
	<h2 align="center">Yours to Explore</h2>

	<div class="container my-4">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
							<img src="{{asset('mytemplateasset/img/yangon2.jpg')}}" class="card-img-top">
							<div class="card-body">
								<h5 align="center">Yangon</h5>
								<p>Lively, Bustling city with Hub of Commercial Activities</p><br>
								<button class="btn btn-outline-info btn-block">Details</button>
							</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
							<img src="{{asset('mytemplateasset/img/mdy1.jpg')}}" class="card-img-top">
							<div class="card-body">
								<h5 align="center">Mandalay</h5>
								<p>The Last Burmese Royal Dynasty, famous for its enrichment of culture and religion</p>
								<button class="btn btn-outline-info btn-block">Details</button>
							</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
							<img src="{{asset('mytemplateasset/img/bagan7.jpg')}}" class="card-img-top">
							<div class="card-body">
								<h5 align="center">Bagan</h5>
								<p>Archaeological Treasure House in Asia,founded in 1044 A.D </p><br>
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
					<img src="{{asset('mytemplateasset/img/inle1.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5 align="center">Inle Lake</h5>
						<p>Archaeological Treasure House in Asia</p>
						<button class="btn btn-outline-info btn-block">Details</button>
					</div>
				</div>
			</div>
				<div class="col-md-4">
					<div class="card">
						<img src="{{asset('mytemplateasset/img/kyaikhtiyo.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 align="center">Kyaikhtiyo</h5>
							<p>Touristy, Mysterious Rock on the Cliff </p>
							<button class="btn btn-outline-info btn-block">Details</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="{{asset('mytemplateasset/img/napali.jpg')}}" class="card-img-top">
						<div class="card-body">
							<h5 align="center">Ngapali Beach</h5>
							<p>Beautiful Sunset at the Bay of Bengal </p>
							<button class="btn btn-outline-info btn-block">Details</button>
						</div>
					</div>
				</div>
			</div>
	</div>
@endsection