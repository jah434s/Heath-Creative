@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
{{{ Lang::get('site.contact') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')

<h1>{{{ Lang::get('site.contact') }}}</h1>

{{ Form::open(array('url' => 'contact')) }}
	<label>
		Your Email Address:
		<input type="email" name="email" required autofocus />
	</label>
	<label>
		Message:
		<textarea name="message" required></textarea>
	</label>
	<button type="Submit">Send Message</button>
{{ Form::close() }}

@stop
