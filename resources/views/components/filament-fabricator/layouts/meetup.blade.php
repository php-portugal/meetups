@props(['page'])
<html lang="pt">
<head>
    <x-meta/>
    <title> {{  $page->title }} </title>
    <link rel="icon" href="https://fav.farm/🇵🇹"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div class="my-16">
    <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
        <h2 class="text-purple-800 text-2xl font-semibold mb-8">
            <a href="/">
                $home
            </a>
        </h2>
        <div
            class="border border-gray-100 rounded-3xl bg-white px-8 py-12 shadow-2xl shadow-gray-600/10 sm:px-12 lg:px-8">
            <x-filament-fabricator::page-blocks :blocks="$page->blocks"/>
        </div>
    </div>
    <x-footer />
</div>

</body>
</html>
