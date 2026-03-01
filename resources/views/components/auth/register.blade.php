<div class="min-h-screen flex items-center justify-center bg-slate-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white rounded-4xl shadow-sm border border-slate-100 p-8 md:p-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-2">
                Inscription
            </h2>
            <p class="text-slate-500 text-sm font-medium">
                Créez votre compte EasyColoc
            </p>
        </div>

        <form action="{{ route('auth.register') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-sm font-semibold text-slate-800 mb-2">Nom complet</label>
                <input type="text" name="name" id="name" placeholder="Votre nom" require class="appearance-none block w-full px-4 py-3 border border-slate-200 bg-slate-50 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent focus:bg-white transition-all duration-200">
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-slate-800 mb-2">Email</label>
                <input type="email" name="email" id="email" placeholder="nom@exemple.com" required class="appearance-none block w-full px-4 py-3 border border-slate-200 bg-slate-50 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent focus:bg-white transition-all duration-200">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-slate-800 mb-2">Mot de passe</label>
                <div class="relative">
                    <input type="password" name="password" id="password" placeholder="••••••••" required    class="appearance-none block w-full px-4 py-3 border border-slate-200 bg-slate-50 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent focus:bg-white transition-all duration-200 pr-12">
                    <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600">
                        <i data-lucide="eye" class="h-5 w-5"></i>
                    </button>
                </div>
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-semibold text-slate-800 mb-2">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" required class="appearance-none block w-full px-4 py-3 border border-slate-200 bg-slate-50 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent focus:bg-white transition-all duration-200">
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-sm text-base font-bold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition-all duration-200 transform hover:-translate-y-0.5">
                    S'inscrire
                </button>
            </div>
        </form>

        <div class="mt-8 text-center border-t border-slate-100 pt-6">
            <p class="text-sm text-slate-500 font-medium">
                Déjà un compte ? 
                <a href="{{ route('view.auth.login') }}" class="text-orange-500 hover:text-orange-600 font-semibold transition-colors">
                    Se connecter
                </a>
            </p>
        </div>
    </div>
</div>

<script>
    lucide.createIcons();
</script>