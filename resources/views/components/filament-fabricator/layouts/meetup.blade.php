@props(['page'])
<html lang="pt">
<head>
    <x-meta/>
    <title> {{  $page->title }} </title>
    <link rel="icon" href="https://fav.farm/🇵🇹"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>

    <x-ui.header />
    <x-filament-fabricator::page-blocks :blocks="$page->blocks"/>
    <x-ui.footer />

</body>
</html>
