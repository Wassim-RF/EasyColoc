{{-- <form action="{{ route('auth.logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

@if ($isOwner)
    <form action="{{ route('colocation.invite') }}" method="post">
        @csrf
        <input type="hidden" name="colocationId" value="{{ $colocation->id }}">
        <input type="email" name="userInvitedEmail" placeholder="email">
        <button type="submit">Invite</button>
    </form>
@endif

@if ($isOwner)
    <form action="{{ route('colocation.desactive') }}" method="post">
        @csrf
        <input type="hidden" name="colocation_id" value="{{ $colocation->id }}">
        <button type="submit">Desctive</button>
    </form>
@endif

<a href="{{ route('view.user.payements') }}">Voir Payements</a> --}}
@include('layouts.head')
<body class="w-full bg-[#F8FAFC]">
    @include('layouts.header')
    @include('components.user.colocation.home.main')
</body>
<script>
    lucide.createIcons();
</script>