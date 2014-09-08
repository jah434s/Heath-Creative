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

<h2>About Me</h2>
<p>My name is Joshua Heath, and I have a passion for building websites. I started {{Config::get('site.company')}} for several reasons. First and foremost, I recognized a need for small businesses to gain access to professional quality Web Design. Web technology has advanced past the point where most businesses can reasonably compete with a self-made or auto-generated website, but professional Web Design firms are priced out of reach for many small businesses.</p>

<p>My goal is to use my professional experience and expertise to create efficient, cost-effective Web Design processes that enable small businesses to serve and satisfy their Customers better than ever before. Call me a geek, but the idea of creating a better web for everyone is incredibly exciting to me.</p>

<p>If you'd like to know more about me, feel free to check me out on linkedin, or just {{link_to_route('contact', 'send me a message')}}.</p>
@stop
