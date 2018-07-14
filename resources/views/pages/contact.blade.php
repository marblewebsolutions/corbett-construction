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
				<div class="offset-bg offset-bg-back"></div>
				@if ($errors->any())
					<div class="alert alert-danger mb-s p-s">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				@if (session()->has('data'))
					<div class="alert alert-success mb-s p-s">
						<p>Your email has been sent! We will get back to you as soon as possible.</p>
					</div>
				@endif
				{!! Form::open(['url' => 'contact']) !!}
					<div class="form-group">
						{!! Form::label('name', 'Your Name') !!}
						{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'First&nbsp;&nbsp;Last', 'autofocus']) !!}
					</div>

					<div class="form-group mt-s">
						{!! Form::label('email', 'Your E-mail Address') !!}
						{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'email@example.com']) !!}
					</div>
					
					<div class="form-group mt-s">
						{!! Form::label('phone', 'Your Phone') !!}
						{!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'555-555-5555']) !!}
					</div>

					<div class="form-group mt-s">
						{!! Form::label('message', 'Your Message') !!}
						{!! Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'How can we help?']) !!}
					</div>

					<div class="form-group mt-s">
						{!! Form::submit('Send', ['class'=>'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>	
@stop