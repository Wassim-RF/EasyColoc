<div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
    <div class="flex items-start gap-4">
        <a href="{{ route('view.user.returnToHome') }}" class="mt-1 group w-10 h-10 bg-white border border-slate-200 rounded-xl flex items-center justify-center shadow-sm hover:border-orange-200 hover:bg-orange-50 transition-all duration-200">
            <i data-lucide="chevron-left" class="w-5 h-5 text-slate-400 group-hover:text-orange-500"></i>
        </a>

        <div>
            <div class="flex items-center gap-3 mb-2">
                <h1 class="text-3xl font-black text-slate-900 tracking-tighter italic">Coloc des Amis</h1>
                <span class="px-2.5 py-0.5 bg-green-50 text-green-600 text-[10px] font-black uppercase tracking-widest rounded-md border border-green-100">Active</span>
            </div>
            <p class="text-slate-500 text-sm font-medium">Gérez les membres et les dépenses de cette colocation.</p>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button class="flex items-center gap-2 px-5 py-2.5 bg-white border border-slate-200 rounded-2xl text-slate-700 font-bold text-sm hover:bg-slate-50 transition-all shadow-sm">
            <i data-lucide="user-plus" class="w-4 h-4 text-orange-500"></i>
            Inviter
        </button>
        <button class="flex items-center gap-2 px-5 py-2.5 bg-white border border-slate-200 rounded-2xl text-slate-700 font-bold text-sm hover:bg-slate-50 transition-all shadow-sm">
            <i data-lucide="settings" class="w-4 h-4 text-slate-400"></i>
            Paramètres
        </button>
    </div>
</div>