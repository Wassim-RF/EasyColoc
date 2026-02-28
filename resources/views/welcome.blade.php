@include('layouts.head')
<body class="w-full">
    @include('layouts.landing.header')
    @include('components.landing.hero')
    @include('components.landing.features')
</body>
{{-- <a href="{{ route('view.auth.login') }}">Login</a>
<a href="{{ route('view.auth.register') }}">Register</a> --}}
<script>
    lucide.createIcons();
</script>