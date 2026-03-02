<div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-100">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">Qui doit à qui</h2>
            <p class="text-sm text-slate-500 font-medium">Récapitulatif des dettes entre colocataires</p>
        </div>
        <a href="{{ route('view.user.payements') }}" class="px-5 py-2.5 text-sm font-bold text-slate-600 bg-slate-50 border border-slate-200 rounded-2xl hover:bg-slate-100 transition-all flex items-center gap-2">
            <i data-lucide="eye" class="w-4 h-4"></i>
            Voir mes Payements
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($payements as $payement)
                <div class="flex items-center justify-between p-5 bg-slate-50 rounded-[1.8rem] border border-slate-100 hover:bg-white hover:shadow-md hover:border-transparent transition-all group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-2xl flex items-center justify-center text-white font-bold shadow-sm shadow-blue-100">
                            {{ ucfirst($payement->receiver->name[0]) }}
                        </div>
                        <div>
                            <p class="text-[13px] font-semibold text-slate-500">{{ ucfirst($payement->receiver->name) }} doit à <span class="text-slate-900">Yassine</span></p>
                            <p class="text-lg font-black text-orange-500">{{ $payement->amount }} <span class="text-xs font-bold uppercase">DH</span></p>
                        </div>
                    </div>
                    @if ($isOwner)
                    <form action="{{ route('payement.tooglePayed') }}" method="post">
                        @csrf
                        <input type="hidden" name="payement_id" value="{{ $payement->id }}">
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white text-xs font-bold rounded-xl hover:bg-green-600 shadow-sm shadow-green-100 transition-colors opacity-0 group-hover:opacity-100 md:opacity-100">
                            Marquer payé
                        </button>
                    </form>
                    @endif
                </div>
            @endforeach

        {{-- <div class="flex items-center justify-between p-5 bg-slate-50 rounded-[1.8rem] border border-slate-100 hover:bg-white hover:shadow-md hover:border-transparent transition-all group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-purple-500 rounded-2xl flex items-center justify-center text-white font-bold shadow-sm shadow-purple-100">
                    S
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-slate-500">Sara doit à <span class="text-slate-900">Ahmed</span></p>
                    <p class="text-lg font-black text-orange-500">80 <span class="text-xs font-bold uppercase">DH</span></p>
                </div>
            </div>
            <button class="px-4 py-2 bg-green-500 text-white text-xs font-bold rounded-xl hover:bg-green-600 shadow-sm shadow-green-100 transition-colors opacity-0 group-hover:opacity-100 md:opacity-100">
                Marquer payé
            </button>
        </div>

        <div class="flex items-center justify-between p-5 bg-slate-50 rounded-[1.8rem] border border-slate-100 hover:bg-white hover:shadow-md hover:border-transparent transition-all group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-green-500 rounded-2xl flex items-center justify-center text-white font-bold shadow-sm shadow-green-100">
                    O
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-slate-500">Omar doit à <span class="text-slate-900">Sara</span></p>
                    <p class="text-lg font-black text-orange-500">45 <span class="text-xs font-bold uppercase">DH</span></p>
                </div>
            </div>
            <button class="px-4 py-2 bg-green-500 text-white text-xs font-bold rounded-xl hover:bg-green-600 shadow-sm shadow-green-100 transition-colors opacity-0 group-hover:opacity-100 md:opacity-100">
                Marquer payé
            </button>
        </div>

        <div class="flex items-center justify-between p-5 bg-slate-50 rounded-[1.8rem] border border-slate-100 hover:bg-white hover:shadow-md hover:border-transparent transition-all group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-500 rounded-2xl flex items-center justify-center text-white font-bold shadow-sm shadow-blue-100">
                    A
                </div>
                <div>
                    <p class="text-[13px] font-semibold text-slate-500">Ahmed doit à <span class="text-slate-900">Omar</span></p>
                    <p class="text-lg font-black text-orange-500">200 <span class="text-xs font-bold uppercase">DH</span></p>
                </div>
            </div>
            <button class="px-4 py-2 bg-green-500 text-white text-xs font-bold rounded-xl hover:bg-green-600 shadow-sm shadow-green-100 transition-colors opacity-0 group-hover:opacity-100 md:opacity-100">
                Marquer payé
            </button>
        </div> --}}

    </div>
</div>