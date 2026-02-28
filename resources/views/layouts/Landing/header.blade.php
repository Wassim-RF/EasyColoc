<header class="bg-gray-50/50 backdrop-blur-md shadow-sm sticky top-0 z-50 w-full">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="shrink-0 flex items-center">
                <a href="#" class="text-3xl font-extrabold text-orange-500 tracking-tight transition-transform hover:scale-105">
                    EasyColoc
                </a>
            </div>
            <div class="flex items-center gap-8">
                <nav class="hidden md:flex space-x-8">
                    <a href="#features" class="text-base font-medium text-slate-600 hover:text-orange-500 transition-colors duration-200">
                        Fonctionnalités
                    </a>
                    <a href="#" class="text-base font-medium text-slate-600 hover:text-orange-500 transition-colors duration-200">
                        Comment ça marche
                    </a>
                </nav>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('view.auth.login') }}" class="px-5 py-2 text-sm font-semibold text-slate-700 bg-transparent border border-slate-300 rounded-full hover:bg-slate-100 hover:border-slate-400 transition-all duration-200">
                        Connexion
                    </a>
                    <a href="{{ route('view.auth.register') }}" class="px-5 py-2 text-sm font-semibold text-white bg-orange-500 rounded-full shadow-sm hover:bg-orange-600 hover:shadow-md transition-all duration-200 transform hover:-translate-y-0.5">
                        Inscription
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>