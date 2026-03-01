<main class="max-w-350 mx-auto px-4 py-12">
    <div class="flex items-center justify-between mb-10">
        <div class="flex items-center gap-5">
            <a href="{{ route('view.user.returnToHome') }}" class="group w-12 h-12 bg-white border border-slate-100 rounded-2xl flex items-center justify-center shadow-sm hover:bg-slate-50 transition-all">
                <i data-lucide="chevron-left" class="w-6 h-6 text-slate-400 group-hover:text-orange-500 transition-colors"></i>
            </a>
            <div>
                <h1 class="text-3xl font-black text-slate-900 tracking-tighter italic">Mes Paiements</h1>
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mt-1">Historique & Actions</p>
            </div>
        </div>
    </div>

    <div class="space-y-4">
        @foreach ($payements as $payement)
            @if (!$payement->isPayed)
                <div class="group bg-white rounded-4xl p-6 shadow-sm border-2 border-transparent hover:border-orange-500/20 transition-all duration-300">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 bg-orange-50 rounded-[1.2rem] flex items-center justify-center text-orange-500 group-hover:scale-110 transition-transform">
                                <i data-lucide="clock" class="w-7 h-7"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-black text-slate-900 tracking-tight">Dépense : <span class="text-orange-500 italic">Courses Carrefour</span></h3>
                                <p class="text-sm text-slate-500 font-medium">Dû à <span class="font-bold text-slate-700 underline decoration-orange-200">Yassine</span> • Il y a 2 jours</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between sm:justify-end gap-6 border-t sm:border-t-0 pt-4 sm:pt-0 border-slate-50">
                            <div class="text-left sm:text-right">
                                <p class="text-2xl font-black text-slate-900 italic tracking-tighter">{{ $payement->amount }} <span class="text-sm not-italic text-slate-300 font-bold uppercase">DH</span></p>
                                <span class="text-[10px] font-black uppercase text-orange-400">En attente</span>
                            </div>
                            <form action="{{ route('payement.tooglePayed') }}" method="post">
                                @csrf
                                <input type="hidden" name="payement_id" value="{{ $payement->id }}">
                                <button type="submit" class="flex items-center gap-2 bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-xl font-black text-sm transition-all shadow-md shadow-orange-100 transform hover:-translate-y-1">
                                    PAYER
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="bg-white/60 rounded-4xl p-6 shadow-sm border border-slate-100 opacity-80 hover:opacity-100 transition-opacity">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 bg-green-50 rounded-[1.2rem] flex items-center justify-center text-green-500">
                                <i data-lucide="check-circle" class="w-7 h-7"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-black text-slate-900 tracking-tight">Loyer Février</h3>
                                <p class="text-sm text-slate-500 font-medium italic">Peye le {{ $payement->payed_at }}</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between sm:justify-end gap-6">
                            <div class="text-left sm:text-right">
                                <p class="text-2xl font-black text-slate-400 italic tracking-tighter line-through">{{ $payement->amount }} <span class="text-sm not-italic font-bold uppercase">DH</span></p>
                                <span class="text-[10px] font-black uppercase text-green-500 tracking-widest">Payé & Confirmé</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

    </div>

    <div class="mt-12 text-center">
        <p class="text-slate-400 text-sm font-medium">Vous avez atteint la fin de votre historique.</p>
    </div>
</main>