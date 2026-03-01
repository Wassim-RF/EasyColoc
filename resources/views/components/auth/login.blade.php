<div class="min-h-screen flex items-center justify-center bg-slate-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white rounded-4xl shadow-sm border border-slate-100 p-8 md:p-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-2">
                Connexion
            </h2>
            <p class="text-slate-500 text-sm font-medium">
                Accédez à votre espace colocation
            </p>
        </div>

        <form class="space-y-6" action="{{ route('auth.login') }}" method="POST">
            <div>
                <label for="email" class="block text-sm font-semibold text-slate-800 mb-2">
                Email
                </label>
                <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" required placeholder="nom@exemple.com" class="appearance-none block w-full px-4 py-3 border border-slate-200 bg-slate-50 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent focus:bg-white transition-all duration-200">
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-slate-800 mb-2">
                    Mot de passe
                </label>
                <div class="mt-1 relative">
                    <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="••••••••" class="appearance-none block w-full px-4 py-3 border border-slate-200 bg-slate-50 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent focus:bg-white transition-all duration-200 pr-12">
                    <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none">
                        <i data-lucide="eye" class="h-5 w-5"></i>
                    </button>
                </div>
            </div>

            <div class="flex items-center justify-start">
                <a href="#" class="text-sm font-medium text-orange-500 hover:text-orange-600 transition-colors">
                    Mot de passe oublié ?
                </a>
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-sm text-base font-bold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition-all duration-200 transform hover:-translate-y-0.5">
                    Se connecter
                </button>
            </div>
        </form>

        <div class="mt-8 text-center">
            <p class="text-sm text-slate-500 font-medium">
                Pas encore de compte ? 
                <a href="{{ route('view.auth.register') }}" class="text-orange-500 hover:text-orange-600 font-semibold transition-colors">
                S'inscrire
                </a>
            </p>
        </div>
    </div>
</div>

<script>
    lucide.createIcons();
</script>