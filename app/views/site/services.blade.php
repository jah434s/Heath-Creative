@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
Services
@stop

{{-- Content --}}
@section('content')

<h1>Services & Pricing</h1>

<div class="alert info">
	<button type="button" class="alert-close" data-dismiss="alert">&times;</button>
	<h4 class="alert-heading"><i class="fa fa-info-circle"></i>Info</h4>
	Prices are based on the estimated time necessary to complete the work. Actual prices for your project may be higher or lower, depending on complexity. The final cost will be calculated and agreed upon work begins. 
</div>

@foreach ($services as $service)
	<div class="service" data-accordion="container">
		<h2 class="service-name" data-accordion="toggle">{{$service->name}}</h2>
		<p>{{$service->description}}</p>
		<span class="service-price-block">
			<span class="service-price">~${{$service->price}}</span>
			<span class="service-price-unit"> per {{$service->unit}}</span>
		</span>
		<p class="service-promise">{{$service->promise}}</p>
	</div>
@endforeach

@stop
