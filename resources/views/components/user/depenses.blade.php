<main class="max-w-3xl mx-auto px-4 py-12">
    <div class="flex items-center gap-4 mb-10">
        <a href="{{ route('view.user.returnToHome') }}" class="w-10 h-10 bg-white border border-slate-200 rounded-xl flex items-center justify-center shadow-sm hover:bg-slate-50 transition-all">
            <i data-lucide="chevron-left" class="w-5 h-5 text-slate-400"></i>
        </a>
        <div>
            <h1 class="text-2xl font-black text-slate-900 tracking-tighter italic">Ajouter une dépense</h1>
            <p class="text-sm text-slate-500 font-medium">Remplissez les détails du nouveau frais.</p>
        </div>
    </div>

    <div class="max-w-2xl mx-auto mt-10">
    <div class="bg-white rounded-[2.5rem] p-8 shadow-sm border border-slate-100">
        
        <h2 class="text-2xl font-black text-slate-900 mb-8 italic tracking-tighter">Détails de la dépense</h2>

        <form action="{{ route('depense.creation') }}" method="POST" class="space-y-6">
            @csrf
            
            <input type="hidden" name="colocation_id" value="{{ $id }}">

            <div>
                <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2 ml-1">Titre</label>
                <input type="text" name="title" placeholder="Ex: Courses Marjane" required
                    class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl text-slate-900 font-bold placeholder-slate-300 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-all">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2 ml-1">Montant (DH)</label>
                    <div class="relative">
                        <input type="number" name="amount" placeholder="0.00" step="0.01" required
                            class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl text-slate-900 font-black italic text-xl focus:outline-none focus:ring-2 focus:ring-orange-500 transition-all">
                        <span class="absolute right-5 top-1/2 -translate-y-1/2 font-bold text-slate-300">DH</span>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2 ml-1">Catégorie</label>
                    <select name="category_id" required
                        class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-2xl text-slate-700 font-bold focus:outline-none focus:ring-2 focus:ring-orange-500 transition-all appearance-none cursor-pointer">
                        <option value="" selected disabled>Choisir...</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ ucfirst($categorie->name) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="w-full py-5 bg-orange-500 text-white rounded-[1.5rem] font-black text-lg hover:bg-orange-600 shadow-xl shadow-orange-200 transition-all transform hover:-translate-y-1">
                AJOUTER LA DÉPENSE
            </button>
        </form>
    </div>
</div>
</main>