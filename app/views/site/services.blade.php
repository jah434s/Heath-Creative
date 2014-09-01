@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
Services
@stop

{{-- Content --}}
@section('content')

<h1>Services</h1>

@foreach ($services as $service)
	<h2>{{$service->name}}</h2>
	<p>{{$service->description}}</p>
	<p>
		Estimated Price:
		<span class="service-price">~${{$service->price}}</span>
		<span class="service-price-unit"> per {{$service->unit}}</span>
	</p>
	<p>{{$service->promise}}</p>
@endforeach

@stop
