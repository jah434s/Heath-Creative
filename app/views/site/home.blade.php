@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
Home
@stop

{{-- Content --}}
@section('content')

<h1>Welcome!</h1>
<p>
	{{Config::get('site.company')}} is a web design company specialized in creating professional-grade, cost-efficient websites for small businesses. I can help you <strong>create</strong> a new website, <strong>update</strong> your existing one, or help you add improvements like <strong>on-site SEO</strong> and <strong>analytics</strong>. I can also manage hosting and regular site content updates for you!
</p>
<p>Whatever your website needs, {{Config::get('site.company')}} has the experience and expertise to get it done how you want it, when you want it. Take a look at our {{ link_to_route('services', 'services')}} or request a free, no-obligation quote.</p>
<p>If you've just got some questions or want to get to know me better, feel free contact me.</p>
@stop
