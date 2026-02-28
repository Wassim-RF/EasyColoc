@include('layouts.head')
<body class="w-full">
    @include('layouts.landing.header')
    @include('components.landing.hero')
    @include('components.landing.features')
    @include('components.landing.howItWork')
    @include('components.landing.footer')
</body>
{{-- <a href="{{ route('view.auth.login') }}">Login</a>
<a href="{{ route('view.auth.register') }}">Register</a> --}}
<script>
    lucide.createIcons();
</script>