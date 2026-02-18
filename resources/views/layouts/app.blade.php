<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMK Trading (Pvt) Ltd - Zimbabwe's Trusted Mining & Industrial Chemical Partner</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <meta name="description" content="JMK Trading (Pvt) Ltd is Zimbabwe's trusted supplier of mining, industrial, agricultural and cleaning chemicals. Strategically located in Gweru.">
    <meta name="keywords" content="Mining chemicals Zimbabwe, Industrial chemicals Zimbabwe, Water treatment chemicals, Agricultural chemicals, JMK Trading">
    <meta name="author" content="JMK Trading (Pvt) Ltd">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo/logo05.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('logo/logo04.svg') }}">
    <link rel="shortcut icon" href="{{ asset('logo/logo04.svg') }}">

    <!-- Theme Color -->
    <meta name="theme-color" content="#1a9847">

    <!-- Open Graph (Facebook / LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="JMK Trading (Pvt) Ltd | Zimbabwe Mining & Industrial Chemicals">
    <meta property="og:description" content="Zimbabwe's trusted mining and industrial chemical partner. Serving businesses nationwide since 2014.">
    <meta property="og:image" content="{{ asset('logo/logo04.svg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="JMK Trading">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="JMK Trading (Pvt) Ltd">
    <meta name="twitter:description" content="Zimbabwe's trusted mining & industrial chemical supplier.">
    <meta name="twitter:image" content="{{ asset('logo/logo04.svg') }}">
</head>
<body>

    @include('components.navbar')

    <main class="main-content">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
