@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
About ::
@parent
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
<script src="{{asset('assets/js/velocity.min.js')}}"></script>

<p>
	<img src="{{asset('assets/img/me.jpg')}}" class="me" />
	My name is Joshua Heath, and I have a passion for building websites. I started {{Config::get('site.company')}} for several reasons. First and foremost, I recognized a need for small businesses to gain access to professional quality Web Design. Because most professional Web Design firms are priced out of reach for many small businesses, the only alternative is to use cheap services that auto-generate websites. These sites often lack attention to usability and professionalism, and can turn Customers off or even confuse them. I think the small business community can do better.
</p>

<p>
	My goal is to use my professional experience and expertise to create efficient, cost-effective Web Design processes that enable small businesses to serve and satisfy their Customers better than ever before. Call me a geek, but the idea of creating a better web for everyone is incredibly exciting to me.
</p>

<p>
	If you'd like to know more about me, feel free to check me out on <a href="https://www.linkedin.com/profile/view?id=123200386" target="_blank">LinkedIn</a>, or just send me a {{link_to_route('contact', 'message')}}.
</p>
@stop
