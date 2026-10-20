@props(['title' => 'Indian food in Markham', 'description' => 'Discover tandoori dishes, Indian curries, street food and Hakka favourites at Tandoori Junction in Markham. Dine-in, takeout and catering.'])
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="{{ $description }}">
    <title>{{ $title }} — Tandoori Junction</title>
    <link rel="icon" href="{{ asset('images/tandoori-junction-logo.svg') }}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="top" x-data="siteNavigation">
    <a class="skip-link" href="#main-content">Skip to content</a>
    {{ $slot }}
</body>
</html>
