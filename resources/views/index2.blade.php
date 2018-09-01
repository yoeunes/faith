<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="font-sans font-normal antialiased">

	<nav class="p-4 flex items-center border-b bg-white" style="opacity: 0.85">
		<img src="{{ asset("images/faith.png") }}" class="h-16">

		<ul class="list-reset flex ml-auto text-2xl">
			<li class="mx-2">
				<a href="#" class="no-underline">About</a>
			</li>
			<li class="mx-2">
				<a href="#" class="no-underline">Visit</a>
			</li>
			<li class="mx-2">
				<a href="#" class="no-underline">Ministries</a>
			</li>
			<li class="mx-2">
				<a href="#" class="no-underline">Sermons</a>
			</li>
		</ul>
	</nav>

	<main>
		<div class="w-full h-screen flex items-center">
			<div class="w-1/2 h-full flex items-center justify-center">
				<div class="px-12 font-bold text-5xl font-serif leading-normal">Serving God with Reverance, Awe, and Joy</div>
			</div>
			<div class="w-1/2 h-full">
				Right
			</div>
		</div>
	</main>

</body>
</html>
