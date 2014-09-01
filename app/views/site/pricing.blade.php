@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
Pricing
@stop

{{-- Content --}}
@section('content')

<h1>Pricing</h1>

<h2>Page Creation &amp; Re-creation</h2>
<span class="service-price">~$99</span><span class="service-price-unit"> per page</span>
<h2>On-Page SEO</h2>
<span class="service-price">~$49</span><span class="service-price-unit"> per page</span>
<h2>Regular Site Updates &amp; Maintenance</h2>
<span class="service-price">~$29</span><span class="service-price-unit"> per month</span>


@stop
