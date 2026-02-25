<form action="{{ route('auth.logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

<form action="#">
    @csrf
    <input type="email" name="userInvitedEmail" placeholder="email">
    <button type="submit">Invite</button>
</form>