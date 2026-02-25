<form action="{{ route('colocation.creation') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <button type="submit">Creer</button>
</form>