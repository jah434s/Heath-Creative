@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
Services
@stop

{{-- Content --}}
@section('content')

<h1>Services & Pricing</h1>

@foreach ($services as $service)
	<div class="service">
		<h2>{{$service->name}}</h2>
		<p>{{$service->description}}</p>
		<span class="service-price-block">
			<span class="service-price">~${{$service->price}}</span>
			<span class="service-price-unit"> per {{$service->unit}}</span>
		</span>
		<p class="service-promise">{{$service->promise}}</p>
	</div>
@endforeach

@stop
