{{-- <form action="{{ route('colocation.creation') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <button type="submit">Creer</button>
</form>

<form action="{{ route('auth.logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form> --}}
@include('layouts.head')
<body class="w-full bg-[#F8FAFC]">
    @include('components.user.createColocation.main')
</body>
<script>
    lucide.createIcons();
</script>