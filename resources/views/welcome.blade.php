<html lang="pt">
<head>
    <x-meta />
    <title> PHP Portugal - The PHP and Web Dev Meetup in Portugal </title>
    <link rel="icon" href="https://fav.farm/🇵🇹"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div class="min-h-screen">
    <main>
        <div class="container mx-auto px-5 md:px-12">

            <section class="flex-col md:flex-row flex items-center md:justify-between mt-16 mb-16 md:mb-12">
                <h1 class="text-3xl text-purple-900 font-serif lg:text-7xl font-bold tracking-tighter leading-tight md:pr-8">
                    {!! htmlentities('<?php') !!} Portugal
                </h1>
                <h2 class="text-center font-bold md:text-left text-lg mt-5 md:pl-8">
                    A community of PHP developers in Portugal.
                </h2>
            </section>

            <h2 class="mt-20 mb-8 text-5xl font-serif lg:text-7xl font-bold tracking-tighter leading-tight">
                Next Meetup
            </h2>

            <div class="flex justify-center">
                <img src="/assets/images/executive-director.jpg" />
            </div>
        </div>
    </main>
</div>
</body>
</html>
