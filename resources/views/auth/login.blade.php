<p>login</p>
<form action="{{ route('auth.login') }}" method="post">
    @csrf
    <input type="email" name="email" id="" placeholder="email">
    <input type="password" name="password" id="" placeholder="password">
    <button type="submit">Entre</button>
</form>

<a href="{{ route('view.auth.register') }}">Register</a>