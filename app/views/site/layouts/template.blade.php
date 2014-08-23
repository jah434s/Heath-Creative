<!DOCTYPE html>
<html lang="en">
	<head>
		{{-- Basic Page Needs
		================================================== --}}
		<meta charset="utf-8" />
		<title>
			@section('title')
			{{ Config::get('site.company') }}
			@show
		</title>
		<meta name="keywords" content="" />
		<meta name="author" content="Josh Heath" />
		<meta name="description" content="Heath Creative provides expert quality custome websites at affordable prices." />

		{{-- Mobile Specific Metas
		================================================== --}}
		<meta name="viewport" content="width=device-width, initial-scalwe=1.0">

		{{-- CSS
		================================================== --}}
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">

		{{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body>
		<header>
			<a href="{{{ URL::to('') }}}" title="Home">
				<img src="{{{ asset('assets/img/logo.svg') }}}" alt="{{ Config::get('site.company') }} Logo" />
			</a>
		</header>
		<main>
			
		</main>
		<footer>
			
		</footer>
	</body>
</html>