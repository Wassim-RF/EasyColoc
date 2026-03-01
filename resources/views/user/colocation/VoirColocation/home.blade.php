@include('layouts.head')
<body class="w-full bg-[#F8FAFC]">
    @include('layouts.header')
    @include('components.user.colocation.view.main')
</body>
<script src="{{ asset('js/change.js') }}"></script>
<script>
    lucide.createIcons();
</script>