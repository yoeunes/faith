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

		<nav class="absolute pin-t pin-x p-4 flex items-center border-b bg-white" style="opacity: 0.85">
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
			<div class="w-full h-screen flex items-center bg-grey bg-cover" style='background-image: url({{ asset("images/hero.jpg") }}); background-blend-mode: multiply'>
				<div class="container">
					<div class="w-1/2 p-8 border-4 border-gold text-black bg-white" style="opacity: 0.85">
						<h2 class="text-3xl text-black font-serif">Worshipping God in Reverance, Awe, and Joy</h2>

						<p class="mt-4 pt-4 border-t-2 border-gold text-black text-xl">
							Here is where some additional text will go that helps tell the story of how we believe God uses Faith to honor and glorify himself.
						</p>
					</div>
				</div>
			</div>
			<div class="container mt-8 flex">
				<div class="flex -mx-3">
					<div class="w-1/3 px-3">
						<p class="border-t-2 border-blue p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, cupiditate atque, aperiam cumque id fuga in iusto porro eos neque, omnis odit illum voluptates quia culpa. Rerum dolor nisi doloribus.</p>
					</div>
					<div class="w-1/3 px-3">
						<p class="border-t-2 border-blue p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea officiis nisi tenetur repellat quos magni, praesentium soluta a tempore autem deleniti optio ad velit architecto at unde eum! Dolores, et.</p>
					</div>
					<div class="w-1/3 px-3">
						<p class="border-t-2 border-blue p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid fugit labore fuga adipisci, rerum neque distinctio cumque libero ratione repudiandae voluptatibus nisi doloremque recusandae repellat atque tempore aperiam earum voluptatem?</p>
					</div>
				</div>
			</div>
		</main>

</body>
</html>
