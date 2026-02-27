@foreach ($payements as $payement)
    <p>{{ $payement->amount }}</p>
    <form action="" method="post">
        <input type="hidden" name="payement_id" value="{{ $payement->id }}">
        <button type="submit">Toggle Payed</button>
    </form>
@endforeach