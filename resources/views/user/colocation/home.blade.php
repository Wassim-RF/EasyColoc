<form action="{{ route('auth.logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

<form action="{{ route('colocation.invite') }}" method="post">
    @csrf
    <input type="email" name="userInvitedEmail" placeholder="email">
    <button type="submit">Invite</button>
</form>