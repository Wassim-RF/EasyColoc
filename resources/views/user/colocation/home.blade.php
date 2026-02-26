<form action="{{ route('auth.logout') }}" method="post">
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