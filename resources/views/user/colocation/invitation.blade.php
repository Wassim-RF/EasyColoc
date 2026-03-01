{{ $colocation->name }}
<form action="{{ route('invitation.accept') }}" method="post">
    @csrf
    <input type="hidden" name="invitationID" value="{{ $invitation->id }}">
    <input type="hidden" name="colocationID" value="{{ $colocation->id }}">
    <button type="submit">Accept</button>
</form>
<form action="{{ route('invitation.refuse') }}" method="post">
    @csrf
    <input type="hidden" name="invitationID" value="{{ $invitation->id }}">
    <button type="submit">Refuse</button>
</form>