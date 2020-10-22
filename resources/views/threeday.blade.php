@extends('master')
@section('title','3 Day Tour')
@section('content')

	

	<div class="container py-4">
		<div class="row py-4">
			<div class="col-lg-6 py-4">
				<h3 class="py-4">3 DAY YANGON STOPOVER</h3>
				<p class=" lead pt-4">Day 01: Yangon arrival</p>
				<p class="lead">Day 02: Yangon sightseeing</p>
				<p class="lead">Day 03: Yangon departure</p>
			</div>
			<div class="col-lg-6 py-4">
				<div class="detail py-4" data-toggle="modal" data-target="#myModal">
					<img src="{{asset('mytemplateasset/img/enquiry.jpg')}}" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<div class="container py-4">
		<div class="row">
			<div class="col-lg-6">
				<h3 class="">Included</h3>
				<ul type="circle disk py-4 my-4 mx-2">
					<li><p class="lead">2 nights accommodation on twin shared basic with daily breakfast</p></li>
					<li><p class="lead">Sightseeing with English speaking local tour guide</p></li>
					<li><p class="lead">All transfers and sightseeing with private air-conditioned vehicles with drivers</p></li>
					<li><p class="lead">Entrance fees for the visits mentioned in the program</p></li>
					<li><p class="lead">Drinking water and towel during excursion</p></li>
				</ul>
			</div>
			<div class="col-lg-6">
				<h3 class="">Not Included</h3>
				<ul type="circle disk py-4 my-4 mx-2">
					<li><p class="lead">International air ticket</p></li>
					<li><p class="lead">Camera fees</p></li>
					<li><p class="lead">Meals (Lunch and dinner)</p></li>
					<li><p class="lead">Visits not mentioned in the program</p></li>
					<li><p class="lead">Drinks and personal expenses</p></li>
					<li><p class="lead">Any other items not mentioned in the program</p></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container shadow p-3 mb-5 bg-white rounded">
		<h3 class="">Price Validity</h3>
		<p class="lead">All prices are quoted net in USD and valid as stated. The prices quoted are based on the current contracted rate of local suppliers and if price changes become necessary, prior notice will be given.</p>
	</div>
	<div class="container py-4">
		<div class="row">
			<div class="col-12 py-4">
				<h3>Day 1   Yangon Arrival & Sightseeing</h3><br>
				<p class="lead">Arrive at Yangon international airport where you will be welcomed by your English speaking local tour guide and transferred to your hotel. (If the room is not ready, proceed for Yangon sightseeing.) After refreshment at hotel, enjoy a walk through downtown Yangon where most of the colonial buildings such as city hall, Mahabandoola Park, high court and telegraphic office are holding an elegant beauty of Yangon. Stopover at the Strand Hotel and feel the warmth and atmosphere of British era. Continue visit to Pansoedan jetty serving locals living across the Yangon River. This evening visit to the magnificent Shwedagon Pagoda of Rudyard Kipling fame and one of Myanmar’s most sacred places. The massive bell shaped stupa is plated with gold and the tip of the stupa is set with diamonds and rubies, sapphires and topaz – a stunning sight as the sun sets and a most fitting place to begin our trip in this “Golden Land”. After visiting Shwedagon pagoda, transfer to you hotel and overnight at the hotel in Yangon.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h3 class="py-4">Meals included: None</h3>
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
		<div class="row">
			<div class="col-12 py-4">
				<h3>Day 2   Yangon Full Day Sightseeing</h3><br>
				<p class="lead">After breakfast at hotel, visit by car to Karaweik, a royal barge for fantastic photo shot along the “pilgrims” causeway across the Royal Lake with stunning views of Shwedagon Pagoda and proceed to visit Chaukhtutgyi Reclining Buddha Image and there you see the sparse pilgrims in silence. Also we will stop by at nearby monastery to learn about the life of Buddhist monk in Myanmar. Continue to National Museum where much of collections are displayed showcasing the culture, the people and glorious history of Myanmar including the Lion Throne. This afternoon, visit Bogyoke Aung San (Scott) market famous for its colonial architecture and inner cobblestone streets. It is one of the major bazaars in Yangon and built in 1926 by the British. You can buy from a simple Myanmar slipper to a jewelry crown there. This evening take a walk to Yangon’s China Town for its lively market with many vendors along the sidewalk & you may enjoy ice cold beer at famous 19th St BBQ. Overnight at the hotel in Yangon.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h3 class="py-4">Meals included:Breakfast</h3>
			</div>
		</div>
	</div>
	<div class="container my-4">
		<div class="row">
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/bo.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Bogyoke Aung San (Scott) Market</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/kara.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Karaweik</h5><br>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/chauk.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>Chaukhtutgyi Reclining Buddha</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<img src="{{asset('mytemplateasset/img/tabaung.jpg')}}" class="card-img-top">
					<div class="card-body">
						<h5>ShweDagon Pagoda</h5><br>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="container py-4">
		<div class="row">
			<div class="col-12 py-4">
				<h3>Day 3 Yangon Departure</h3><br>
				<p class="lead">After breakfast at hotel, you will be picked up by your guide and transferred to Yangon International airport for your return international departure flight. (OR free morning until your departure time.)</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h3 class="py-4">Meals included:Breakfast</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h3 class="py-4 text-center">Tour Price Details</h3>
			</div>
		</div>
	</div>

	<table class="table" border="1">
  		<thead class="thead-dark">
    		<tr>
      			<th scope="col">0-1pax</th>
      			<th scope="col">2 pax</th>
      			<th scope="col">3-4pax</th>
      			<th scope="col">5-6pax</th>
      			<th scope="col">7-10pax</th>
      			<th scope="col">11-15pax</th>
      			<th scope="col">16-20pax</th>
      			<th scope="col">Over 20pax</th>
    		</tr>
  		</thead>
  		<tbody>
    		<tr>
      			<td>USD 430</td>
      			<td>USD 235</td>
      			<td>USD 215</td>
      			<td>USD 215</td>
      			<td>USD 215</td>
      			<td>USD 215</td>
      			<td>USD 215</td>
      			<td>USD 215</td>
    		</tr>
  		</tbody>
	</table>

	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				
			</div>
		</div>
	</div>
	
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">3 Day Yangon Stopover</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-6">
        			<div class="form-group py-4">
        				<input type="text" placeholder="Name" name="" class="form-control"><br>
        				<input type="text" placeholder="Nationality" name="" class="form-control">
        			</div>
        		</div>
        		<div class="col-lg-6">
        			<div class="form-group py-4">
        				<input type="text" placeholder="Passport" name="" class="form-control"><br>
        				<input type="text" placeholder="Number of Pax" name="" class="form-control">
        			</div>
        		</div>
        	</div>
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-lg-6">
        			<label for="hotel">Choose Hotel</label><br>
        			<select name="hotel" id="hotels" class="w-75">
        				<option>5 stars</option>
        				<option>4 stars</option>
        				<option>3 stars</option>
        			</select>
        		</div>
        		<div class="col-lg-6">
        			<label for="guide">Language Guide</label><br>
        			<select name="guide" id="guides" class="w-75">
        				<option>English</option>
        				<option>Myanmar</option>
        				<option>Japan</option>
        			</select>
        		</div>
        	</div>
        </div>
        <div class="container py-4">
        	<div class="row">
        		<div class="col-12">
        			<label>Visa on Arrival</label><br>
        			<input type="radio" name=""><label>Yes</label>
        			<input type="radio" name=""><label>No</label><br>
        			<button class="btn btn-outline-info w-25">Submit</button>
        		</div>
        	</div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection