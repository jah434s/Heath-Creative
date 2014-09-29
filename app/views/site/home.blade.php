@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
Home
@stop

{{-- Content --}}
@section('content')
<h1>Web Design for Everyone</h1>
<section class='intro' data-accordion="container">
	<h2 data-accordion="toggle" data-accordion-content>What I Do</h2>
	<p data-accordion-content>
		{{Config::get('site.company')}} specializes in creating professional-grade, cost-efficient websites for small businesses. That means I can build you the site you want for less than you'd expect. I understand if you're skeptical. See for yourself!
		<a href="{{{ URL::to('services') }}}" class="intro-cta">Services &amp; Pricing</a>
	</p>
</section>
<section class="intro" data-accordion="container">
	<h2 data-accordion="toggle" data-accordion-content>Examples</h2>
	<ol data-accordion-content>
		<li>Site 1</li>
		<li>Site 2</li>
		<li>Site 3</li>
	</ol>
</section>
<section class="intro" data-accordion="container">
<h2 data-accordion="toggle" data-accordion-content>Who I Am</h2>
<p data-accordion-content>
	Whatever your website needs, {{Config::get('site.company')}} has the experience and expertise to get it done how you want it, when you want it. Take a look at our {{ link_to_route('services', 'services')}} or request a free, no-obligation quote.
</p>
</section>
<section class="intro" data-accordion="container">
<h2 data-accordion="toggle" data-accordion-content>Contact Me</h2>
<p data-accordion-content>
	If you've just got some questions or want to get to know me better, feel free to {{  link_to_route('contact', 'contact me')}}.
</p>
<a href="URL::to('contact')" class="intro-cta">Send me a message</a>
</section>

@stop
