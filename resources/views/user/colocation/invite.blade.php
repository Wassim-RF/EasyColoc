{{ $colocation->name }}
<form action="#" method="post">
    <input type="hidden" name="invitationID" value="{{ $invitation->id }}">
    <input type="hidden" name="colocationID" value="{{ $colocation->id }}">
    <button type="submit">Accept</button>
</form>
<form action="#" method="post">
    <button type="submit">Refuse</button>
</form>