<main class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight italic">Tableau de bord</h1>
            <p class="text-slate-500 text-sm font-medium mt-1">Bienvenue dans votre espace de colocation.</p>
        </div>

        <div class="flex flex-col sm:flex-row items-center gap-3">
            <a href="colocation/{{ $colocation->id }}/addDepeses" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-orange-500 text-white font-black text-sm rounded-2xl hover:bg-orange-600 transition-all shadow-lg shadow-orange-200 group transform hover:-translate-y-0.5">
                <i data-lucide="plus-circle" class="w-4 h-4 text-white/80 group-hover:text-white transition-colors"></i>
                AJOUTER UNE DÉPENSE
            </a>

            @if ($isOwner)
                <a href="colocation/{{ $colocation->id }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-white border border-slate-200 text-slate-700 font-black text-sm rounded-2xl hover:bg-slate-50 hover:border-orange-200 hover:text-orange-500 transition-all shadow-sm group">
                    <i data-lucide="layout-grid" class="w-4 h-4 text-slate-400 group-hover:text-orange-500 transition-colors"></i>
                    VOIR LA COLOCATION
                </a>
            @endif
        </div>
    </div>

    @include('components.user.colocation.home.KPICart')
    @include('components.user.colocation.home.quiDoitAqui')
</main>