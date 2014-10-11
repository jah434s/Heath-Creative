@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
Home
@stop

{{-- Content --}}
@section('content')
<h1>Web Design for Everyone</h1>
<section id="work" class='intro' data-accordion="container">
	<h2 data-accordion="toggle">What I Do</h2>
	<p>
		{{Config::get('site.company')}} specializes in creating professional-grade, cost-efficient websites for small businesses. That means I can build you the site you want for less than you'd expect. Not sure? See for yourself!
	</p>
	<a href="{{{ URL::to('services') }}}" class="intro-cta button secondary-button">Services &amp; Pricing</a>
</section>
<section id="examples" class="intro" data-accordion="container">
	<h2 data-accordion="toggle">Examples</h2>
	<ol>
		<li>Site 1</li>
		<li>Site 2</li>
		<li>Site 3</li>
	</ol>
	<a href="{{{ URL::to('examples') }}}" class="intro-cta button secondary-button">More Examples</a>
</section>
<section id="me" class="intro" data-accordion="container">
<h2 data-accordion="toggle">Who I Am</h2>
<p>
	My name is Josh, and I invented the internet. OK, not really, but I do know a lot about the web and how to build successful websites. I bring a ton of experience to the table that allows me to get things done, and get them done right.
</p>
<a href="{{URL::to('about')}}" class="intro-cta button secondary-button">More about me</a>
</section>

@stop
