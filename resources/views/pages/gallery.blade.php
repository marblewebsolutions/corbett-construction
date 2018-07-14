@extends('app', ['page_class' => 'gallery'])


@section('modal')
	@include('partials.modal')
@stop


@section('content')
	<div class="block header">
		<div class="content">
			<h1>{{ $title }}</h1>
		</div>
	</div>
	<div class="block gal">
		<div class="content">
			<div class="gallery-filter">
				<p class="font-oc">Filter by Service:</p>
				<ul class="clearfix">
					@foreach($services as $service)
						<li class="btn {{ strtolower($interest) == str_replace(' ', '-', strtolower($service)) ? 'active' : '' }}">{{ strtoupper($service) }}</li>
					@endforeach
					<li class="btn">OTHER</li>
				</ul>
			</div>
			
			<ul class="gal-items mt-m">
				<!-- Kitchen Photos -->
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-0"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-1"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-2"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-3"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-4"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-5"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-6"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-7"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-8"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-9"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-10"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-11"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-12"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-13"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-14"></li>
				<li class="gal-item filter-ktn"><img src="../images/kitchen-10.jpg" alt="kitchen-15"></li>
				
				<!-- Addition Photos -->
				<li class="gal-item filter-add">Additions</li>
				
				<!-- Bath Photos -->
				<li class="gal-item filter-bth">Baths</li>
				
				<!-- Basement Photos -->
				<li class="gal-item filter-bst">Basement</li>
				
				<!-- Deck Photos -->
				<li class="gal-item filter-dck">Deck</li>
				
				<!-- Four Seasons Rooms Photos -->
				<li class="gal-item filter-fsr">Four Seasons Rooms</li>
				
				<!-- Other Photos -->
				<li class="gal-item filter-otr">Other</li>
			</ul>
		</div>
	</div>
@stop

@section('pagejs')
	<script src="{{ asset('js/modal.js') }}"></script>
	<script src="{{ asset('js/gallery.js') }}"></script>
@stop