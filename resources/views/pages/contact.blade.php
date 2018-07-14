@extends('app', ['page_class' => 'contact'])

@section('content')
	<div class="block header">
		<div class="content">
			<h1>{{ $title }}</h1>
		</div>
	</div>
	<div class="block">
		<div class="content">
			<div class="col-2 pr-s">
				<p class="font-oc color-primary edit">Please contact us with your inquiries and we will get back to you as soon as possible. We look forward to hearing from you!</p>
				<p class="mt-m edit"><span class="font-oc color-primary">Hours of Opperation:</span> <br> Monday - Friday <br> 8:00 am - 5:00 pm </p>
				<p class="mt-m email"><a href="mailto:corbett.construction@outlook.com"><i class="material-icons">email</i> corbett.construction@outlook.com</a></p>
				<p><a href="tel:5178969630"><i class="material-icons">phone</i> 517.896.9630</a></p>
			</div>
			<div class="col-2 p-s">

			</div>
		</div>
	</div>	
@stop