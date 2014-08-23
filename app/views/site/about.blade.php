@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
About {{Config::get('site.company')}}
@stop

{{-- Content --}}
@section('content')

<h1>About {{Config::get('site.company')}}</h1>

<h2>Vision</h2>
<p>{{Config::get('site.company')}}'s vision is to bring a new level of professionalism, usability and design to small business websites.</p>

<h2>Mission</h2>
<p>{{Config::get('site.company')}} is Web Design company dedicated to providing low-cost, high-quality websites to small businesses all over the world. {{Config::get('site.company')}} relies on professional experience and expertise as well as extremely efficient processes based on well-established industry best practices to provide high quality at an affordable price. </p>

<h2>Values</h2>
<ul>
	<li>Honesty</li>
	<li>Respect</li>
	<li>Integrity</li>
	<li>Accountability</li>
	<li>Stewardship</li>
</ul>

@stop
