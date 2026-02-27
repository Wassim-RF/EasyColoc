@foreach ($payements as $payement)
    <p>{{ $payement->amount }}</p>
    <form action="{{ route('payement.tooglePayed') }}" method="post">
        <input type="hidden" name="payement_id" value="{{ $payement->id }}">
        <button type="submit">Toggle Payed</button>
    </form>
@endforeach