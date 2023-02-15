@props(['page'])
<html lang="pt">
<head>
    <x-meta />
    <title> {{  $page->title }} </title>
    <link rel="icon" href="https://fav.farm/🇵🇹"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="py-16">
        <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
            <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-1">
                <div class="border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 px-8 py-12 shadow-2xl shadow-gray-600/10 dark:shadow-none sm:px-12 lg:px-8">
                    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
                </div>
            </div>
        </div>
    </div>
</body>
</html>
