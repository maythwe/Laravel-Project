<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplateasset/css/index.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplateasset/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplateasset/fontawesome/css/all.min.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="{{asset('mytemplateasset/img/favicon (6).ico')}}" type="image/x-icon">
	<script type="text/javascript" src="{{asset('mytemplateasset/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('mytemplateasset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	{{-- navigation --}}
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top menu ">
		<div class="container">
			<img src="{{asset('mytemplateasset/img/logo.png')}}" class="img-fluid">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="myNav" class="collapse navbar-collapse">
				
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Highlights</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{route('festivalpage')}}">Festivals</a>
							<a class="dropdown-item" href="{{route('ecotorismpage')}}">Ecotourism</a>
							<a class="dropdown-item" href="{{route('communitypage')}}">Community Based Tourism</a>
						</div>
					</li>
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tour Package</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{route('packagepage')}}">Package Tours</a>
							<a class="dropdown-item" href="{{route('daypage')}}">Day Tours</a>
							<a class="dropdown-item" href="{{route('optionalpage')}}">Optional Tours</a>
						</div>
					</li>
					<li class="nav-item"><a href="{{route('promotionalpage')}}" class="nav-link">Promotional</a></li>
					<li class="nav-item"><a href="{{route('carrentalpage')}}" class="nav-link">Car Rental</a></li>
					<li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">AboutUs</a></li>
					<li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link pr-0">Contact</a></li>
					<li class="nav-item"><a href="{{route('student.index')}}" class="nav-link pr-0">Student List</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	{{-- footer --}}
	<footer class="footer my-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 ">
					<div class="footer-left">
						<span style="font-size: 3em;">
						<i class="fab fa-medium"></i><h5>May Travel & Tour</h5>
						</span>
						<p>Discover Myanmar holidays and travel ideas. It's a new and exciting time for this beautiful Asian land and immense culture that is just waiting to be shared and explored with the whole world.</p>
						<div class="socials">
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-youtube"></i></a>
							<a href="#"><i class="fab fa-dribbble"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 text-left ">
					<div class="footer-right">
						<li>
							<h2>Recent Tour</h2>
							<ul class="box text-left">
								<a href="{{route('threedaypage')}}" class="nav-link"><li>3 Day Yangon Stopover</li></a>
								<a href="{{route('fourdaypage')}}" class="nav-link"><li>4 Day of Golden Rock</li></a>
								<a href="{{route('fivedaypage')}}" class="nav-link"><li>5 Day Temple of Bagan</li></a>
								<a href="{{route('mountainpage')}}" class="nav-link"><li>RedMountain Tour</li></a>
								<a href="{{route('inlepage')}}" class="nav-link"><li>Balloons of Inle</li></a>
								<a href="{{route('yangonpage')}}" class="nav-link"><li>Yangon Day Tour</li></a>
								
							</ul>
						</li>
					</div>
				</div>
				<div class="col-lg-3 text-left">
					<li class="features">
						<h2>Highlight</h2>
						<ul class="box text-left">
							<a href="{{route('festivalpage')}}" class="nav-link"><li>Festival</li></a>
							<a href="{{route('ecotorismpage')}}" class="nav-link"><li>Ecotorisum</li></a>
							<a href="{{route('communitypage')}}" class="nav-link"><li>Community Based</li></a>
							
						</ul>
					</li>
				</div>

				<div class="col-lg-3">
					<li>
						<h2>Address</h2>
						<ul class="box text-left">
							<li>Contact Us</li>
							<li>Building No. 109, 1st Floor, Sin-Oh-Dan Street
							Lathar Township, Yangon, Myanmar.</li>
							<li>Email: info@MayTravelandTour.com</li>
							<li>Phone Number</li>
							<li>+95-1-371105, 373270, 381213</li>
						</ul>
					</li>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="footer-bottom">
								<p>Made with love All Right reserved by 2020</p>
							</div>
						</div>
					</div>
				</div>
		
				</div>
			</div>
		</div>
		
	</footer>
</body>
</html>