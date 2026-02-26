{{ $colocation->name }}
<form action="{{ route('invitation.accept') }}" method="post">
    @csrf
    <input type="hidden" name="invitationID" value="{{ $invitation->id }}">
    <input type="hidden" name="colocationID" value="{{ $colocation->id }}">
    <button type="submit">Accept</button>
</form>
<form action="#" method="post">
    <button type="submit">Refuse</button>
</form>