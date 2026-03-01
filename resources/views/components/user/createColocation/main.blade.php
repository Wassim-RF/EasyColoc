<main class="min-h-[calc(100vh-64px)] flex items-center justify-center bg-slate-50/50 px-4 py-12">
    <div class="max-w-xl w-full">
        <a href="{{ route('view.user.returnToHome') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-orange-500 mb-8 transition-colors font-medium">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            Retour
        </a>

        <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-sm border border-slate-100 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-24 h-24 bg-orange-50 rounded-full -mr-12 -mt-12"></div>

            <div class="relative">
                <div class="flex flex-col items-center text-center mb-10">
                    <div class="w-16 h-16 bg-orange-100 text-orange-500 rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="home" class="w-8 h-8"></i>
                    </div>
                    <h1 class="text-3xl font-extrabold text-slate-900 mb-3">Nouvelle Colocation</h1>
                    <p class="text-slate-500 leading-relaxed">
                        Donnez un nom sympa à votre espace pour commencer à inviter vos colocataires.
                    </p>
                </div>

                <form action="{{ route('colocation.creation') }}" method="POST" class="space-y-8">
                    @csrf
                    
                    <div>
                        <label for="coloc_name" class="block text-sm font-bold text-slate-700 mb-3 ml-1">
                            Nom de la colocation
                        </label>
                        <input 
                            type="text" 
                            name="name" 
                            id="coloc_name" 
                            placeholder="Ex: La Villa des Amis, Appart 402..." 
                            required
                            class="w-full px-6 py-4 bg-slate-50 border border-slate-200 rounded-2xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent focus:bg-white transition-all duration-200 shadow-sm"
                        >
                    </div>

                    <button type="submit" class="w-full py-4 bg-orange-500 text-white rounded-2xl font-bold text-lg hover:bg-orange-600 transition-all duration-200 shadow-lg shadow-orange-200 transform hover:-translate-y-1">
                        Créer l'espace
                    </button>
                </form>

                <div class="mt-8 p-4 bg-blue-50 rounded-2xl border border-blue-100 flex gap-4 items-start">
                    <i data-lucide="info" class="w-5 h-5 text-blue-500 mt-0.5 shrink-0"></i>
                    <p class="text-sm text-blue-700 leading-relaxed">
                        Vous pourrez changer le nom et ajouter une photo plus tard dans les paramètres.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>