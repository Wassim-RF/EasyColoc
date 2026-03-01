{{-- @foreach ($payements as $payement)
    <p>{{ $payement->amount }}</p>
    <form action="{{ route('payement.tooglePayed') }}" method="post">
        @csrf
        <input type="hidden" name="payement_id" value="{{ $payement->id }}">
        <button type="submit">Toggle Payed</button>
    </form>
@endforeach --}}

@include('layouts.head')
<body class="w-full bg-[#F8FAFC]">
    @include('layouts.header')
    @include('components.user.colocation.payements.main')
</body>
<script>
    lucide.createIcons();
</script>