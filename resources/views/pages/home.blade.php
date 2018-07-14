@extends('app', ['page_class' => 'home'])


@section('content')
	<div class="block">
		<div class="content">
			<h1><img src="{{ url('graphics/logo-nbg.png') }}" alt="Corbett Construction Co., Inc."></h1>
		</div>
	</div>
	<div class="block">
		<div class="content">
			<h2 class="text-center color-primary">"You'll be glad when we're done!"</h2>
			<h3 class="text-center mt-s edit">CONSTRUCTION Lorem ipsum dolor sit amet, quo et deleniti appellantur, ne usu accusam phaedrum. Quas equidem intellegam et has, vis cu affert consul. 
			Ea est quidam omnesque, per vocent nostrud prodesset te.</h3>
		</div>
	</div>
	<div class="block services">
		<div class="content text-center my-xl">
			<div class="offset-bg offset-bg-back"></div>
			<div class="offset-bg offset-bg-front"></div>
			<ul class="services-list">
				@foreach($services as $service)
				<li class="services-item">
					<a href="{{ url('gallery/' . str_replace(' ', '-', strtolower($service))) }}">
						<div class="services-bg {{ str_replace(' ', '-', strtolower($service)) }}"></div>
						<div class="services-item-title">
							<p>{{ strtoupper($service)}}</p>
						</div>
					</a>
				</li>
				@endforeach
			</ul>
			<a href="{{ url('services') }}"><button class="btn">View All Services</button></a>
		</div>
	</div>
	<div class="block contact">
		<div class="content">
			<div class="text">
				<p class="edit">Lorem ipsum dolor sit amet, quo et deleniti appellantur, ne usu accusam phaedrum. Quas equidem intellegam et has, vis cu affert consul. 
				Ea est quidam omnesque, per vocent nostrud prodesset te.</p>
				<a href="{{ url('contact') }}"><button class="btn mt-m">Free Quote</button></a>
			</div>
			<div class="img"><img src="../images/kitchen-10.jpg" alt="picture"></div>
		</div>
	</div>
@stop

@section('pagejs')
	<script src="js/home.js"></script>
@stop
