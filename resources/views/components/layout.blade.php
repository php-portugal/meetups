@props([
    'title'
])
<html lang="pt">
<head>
    <x-meta/>
    <title>{{ $title ?? 'PHP Portugal' }}</title>
    <link rel="icon" href="https://fav.farm/🇵🇹"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <x-ui.header/>
    {{ $slot }}
    <x-ui.footer/>

    <x-plausible-analytics />
</body>
</html>
