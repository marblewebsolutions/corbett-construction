@extends('app', ['page_class' => 'services'])

@section('content')
	<div class="block header">
		<div class="content">
			<h1>{{ $title }}</h1>
		</div>
	</div>
	<div class="block">
		<div class="content">
			<h3 class="text-center edit">Corbett Construction specializes in residential construction. 
			Take a look at our services listed below, and you are welcome to contact us for a free quote or with any questions.</h3>
		</div>
	</div>
	<div class="block">
		<div class="content my-xl">
			<div class="offset-bg offset-bg-back"></div>
			<div class="offset-bg offset-bg-front"></div>
			<ul class="service-list">
				<li class="service-item ">
					<div class="service-item-title"><p class="font-oc">KITCHENS</p></div>
					<div class="img"><img src="../images/kitchen-10.jpg" alt="kitchen"></div>
					<div class="info">
						<p>Price Range: $10,000 - $30,000</p>
						<p>Duration: 3 - 6 weeks</p>
					</div>
					<i class="material-icons">keyboard_arrow_down</i>
				</li>
				<li class="service-item my-s">
					<div class="service-item-title"><p>ADDITIONS</p></div>
					<div class="img"></div>
					<i class="material-icons">keyboard_arrow_down</i>
				</li>
				<li class="service-item my-s">
					<div class="service-item-title"><p>BATHS</p></div>
					<div class="img"></div>
					<i class="material-icons">keyboard_arrow_down</i>
				</li>
				<li class="service-item my-s">
					<div class="service-item-title"><p>BASEMENT REMODELING</p></div>
					<div class="img"></div>
					<i class="material-icons">keyboard_arrow_down</i>
				</li>
				<li class="service-item my-s">
					<div class="service-item-title"><p>DECKS</p></div>
					<div class="img"></div>
					<i class="material-icons">keyboard_arrow_down</i>
				</li>
				<li class="service-item my-s">
					<div class="service-item-title"><p>FOUR SEASONS ROOMS</p></div>
					<div class="img"></div>
					<i class="material-icons">keyboard_arrow_down</i>
				</li>
				<li class="service-item">
					<div class="service-item-title"><p>GARAGES</p></div>
					<div class="img"></div>
					<i class="material-icons">keyboard_arrow_down</i>
				</li>
			</ul>
		</div>
	</div>
	<div class="block">
		<div class="content text-center">
			<h3 class="text-center mb-s edit">Contact us if you have any questions or for a free quote, or take a look at our gallery if you would like to see more of our work.</h3>
			<div class="btn-group">
				<a href="{{ url('contact') }}"><button class="btn mb-s mx-s">Contact Us</button></a>
				<a href="{{ url('gallery') }}"><button class="btn mb-s mx-s">Gallery</button></a>
			</div>
		</div>
	</div>
@stop

@section('pagejs')
	<script src="{{ asset('js/services.js') }}"></script>
@stop