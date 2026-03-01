<main class="min-h-[calc(100vh-64px)] flex items-center justify-center bg-slate-50/50 px-4 py-12">
    <div class="max-w-4xl w-full">
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4 tracking-tight">
                Bienvenue Ahmed ! 👋
            </h1>
            <p class="text-slate-500 text-lg max-w-md mx-auto leading-relaxed">
                Vous n'avez pas encore de colocation. Que souhaitez-vous faire aujourd'hui ?
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="group relative bg-white rounded-[2.5rem] p-10 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-orange-100/50 hover:-translate-y-2 transition-all duration-300 overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-orange-50 rounded-full -mr-16 -mt-16 transition-transform group-hover:scale-110"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center text-white mb-8 shadow-lg shadow-orange-200">
                        <i data-lucide="plus-circle" class="w-8 h-8"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Créer une colocation</h2>
                    <p class="text-slate-500 mb-8 leading-relaxed">
                        Commencez une nouvelle aventure ! Créez un groupe, invitez vos amis et commencez à gérer vos dépenses.
                    </p>
                    <a href="{{ route('view.user.addColocation') }}" class="w-full inline-block text-center py-4 bg-orange-500 text-white rounded-2xl font-bold hover:bg-orange-600 transition-colors shadow-md">
                        C'est parti
                    </a>
                </div>
            </div>

            <div class="group relative bg-white rounded-[2.5rem] p-10 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-blue-100/50 hover:-translate-y-2 transition-all duration-300 overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-slate-50 rounded-full -mr-16 -mt-16 transition-transform group-hover:scale-110"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-slate-800 rounded-2xl flex items-center justify-center text-white mb-8 shadow-lg shadow-slate-200">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Rejoindre une colocation</h2>
                    <p class="text-slate-500 mb-8 leading-relaxed">
                        Vos amis sont déjà là ? Entrez le code d'invitation que vous avez reçu pour les rejoindre.
                    </p>
                    <button class="w-full py-4 bg-slate-800 text-white rounded-2xl font-bold hover:bg-slate-900 transition-colors shadow-md">
                        Saisir le code
                    </button>
                </div>
            </div>
        </div>

        <p class="text-center mt-12 text-slate-400 text-sm">
            Besoin d'aide ? <a href="#" class="text-orange-500 hover:underline font-semibold">Consultez notre guide</a>
        </p>
    </div>
</main>