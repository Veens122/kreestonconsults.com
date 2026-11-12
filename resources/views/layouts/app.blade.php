
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="msvalidate.01" content="35EC2631777D5BFCB1C16601991EF95D" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO Title --}}
<title>@yield('title', 'Kreeston Consulting Services | Business & Financial Solutions')</title>

{{-- SEO Description --}}

<meta name="description" content="@yield('meta_description', 'Kreeston Consulting Services provides professional accounting, auditing, tax advisory, CAC registration, business consulting and financial services in Nigeria.')">

{{-- Search Engine Instructions --}}
<meta name="robots" content="@yield('meta_robots', 'index, follow')">

{{-- Canonical URL --}}
<link rel="canonical" href="@yield('canonical_url', url()->current())">

{{-- Social Sharing Metadata --}}
<meta property="og:type" content="website">
<meta property="og:site_name" content="Kreeston Consulting Services">
<meta property="og:title" content="@yield('og_title', 'Kreeston Consulting Services')">
<meta property="og:description" content="@yield('og_description', 'Professional business, management and financial solutions in Nigeria.')">
<meta property="og:url" content="@yield('canonical_url', url()->current())">
<meta property="og:image" content="@yield('og_image', asset('assets/images/Kreeston-Logo-2.png'))">

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://kreestonconsults.com/#organization",
    "name": "Kreeston Consulting Services",
    "url": "https://kreestonconsults.com/"
}
</script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/bootstrap.min.css') }}">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/revolution/css/settings.css') }}">

    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/fancybox.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/style.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/colors/color1.css') }}" id="colors">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/responsive.css') }}">

    <!-- Animations -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheet/animate.css') }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/apple-touch-icon-48-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/apple-touch-icon-32-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.png') }}">

    @stack('styles')
</head>

<body>

    <div class="boxed">

        @include('partials.preloader')

        @include('partials.topbar')

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer-top')

        @include('partials.footer')

        @include('partials.footer-bottom')

        @include('partials.back-to-top')

    </div>

    <!-- JavaScript -->
    <script src="{{ asset('assets/javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/tether.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/javascript/parallax.js') }}"></script>
    <script src="{{ asset('assets/javascript/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/javascript/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/javascript/switcher.js') }}"></script>
    <script src="{{ asset('assets/javascript/kinetic.js') }}"></script>
    <script src="{{ asset('assets/javascript/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/javascript/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/javascript/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/javascript/jquery-validate.js') }}"></script>
    <script src="{{ asset('assets/javascript/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/slider_v1.js') }}"></script>

    <!-- Revolution Slider Extensions -->
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    @stack('scripts')

</body>
</html>
