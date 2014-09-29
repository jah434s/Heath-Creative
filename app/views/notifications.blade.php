@if (count($errors->all()) > 0)
<div class="alert error">
	<button type="button" class="alert-close" data-dismiss="alert">&times;</button>
	<h4 class="alert-heading"><i class="fa fa-times-circle"></i>Error</h4>
	<p>Please check the form below for errors</p>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert success">
	<button type="button" class="alert-close" data-dismiss="alert">&times;</button>
	<h4 class="alert-heading"><i class="fa fa-check-circle"></i>Success</h4>
    @if(is_array($message))
        <ul>
        @foreach ($message as $m)
            <li>{{ $m }}</li>
        @endforeach
        </ul>
    @else
        <p> {{ $message }} </p>
    @endif
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert error">
	<button type="button" class="alert-close" data-dismiss="alert">&times;</button>
	<h4 class="alert-heading"><i class="fa fa-times-circle"></i>Error</h4>
    @if(is_array($message))
        <ul>
        @foreach ($message as $m)
            <li>{{ $m }}</li>
        @endforeach
        </ul>
    @else
        <p> {{ $message }} </p>
    @endif
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert warning">
	<button type="button" class="alert-close" data-dismiss="alert">&times;</button>
	<h4 class="alert-heading"><i class="fa fa-warning"></i>Warning</h4>
    @if(is_array($message))
        <ul>
        @foreach ($message as $m)
            <li>{{ $m }}</li>
        @endforeach
        </ul>
    @else
        <p> {{ $message }} </p>
    @endif
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert info">
	<button type="button" class="alert-close" data-dismiss="alert">&times;</button>
	<h4 class="alert-heading"><i class="fa fa-info-circle"></i>Info</h4>
    @if(is_array($message))
        <ul>
        @foreach ($message as $m)
            <li>{{ $m }}</li>
        @endforeach
        </ul>
    @else
        <p> {{ $message }} </p>
    @endif
</div>
@endif
