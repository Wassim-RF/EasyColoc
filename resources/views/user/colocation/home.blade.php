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

<form action="{{ route('colocation.depense.creation') }}" method="post">
    <input type="hidden" name="colocation_id" value="{{ $colocation->id }}">
    <input type="text" name="title" placeholder="title">
    <input type="number" name="amount" placeholder="amount">
    <select name="category_id">
        @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ ucfirst($categorie->name) }}</option>
        @endforeach
    </select>
</form>