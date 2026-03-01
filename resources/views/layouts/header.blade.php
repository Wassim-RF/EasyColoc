<header class="bg-white border-b border-slate-100 sticky top-0 z-50">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
        <div class="shrink-0 flex items-center gap-2.5">
            <span class="text-3xl font-extrabold text-orange-500 tracking-tight transition-transform hover:scale-105">
                EasyColoc
            </span>
            <div class="h-6 w-px bg-slate-200 mx-1 hidden sm:block"></div>
            @if ($hasActiveColocation)
                <div class="bg-slate-100 text-slate-600 px-4 py-1.5 rounded-xl text-sm font-semibold flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-slate-400"></span>
                    Coloc des Amis
                </div>
            @endif
        </div>
        

        <div class="flex items-center gap-3">
            @if (!$hasActiveColocation)
                <a href="{{ route('view.user.addColocation') }}" class="hidden md:flex items-center gap-2 px-5 py-2 text-sm font-bold text-slate-700 bg-white border border-slate-200 rounded-2xl hover:bg-slate-50 transition-all">
                    <i data-lucide="plus" class="w-4 h-4"></i>
                    Créer une colocation
                </a>
            @endif

            <div class="relative ml-2">
                <button id="user-menu-button" class="flex items-center gap-3 p-1.5 pr-4 bg-slate-50 hover:bg-slate-100 border border-slate-100 rounded-2xl transition-all focus:outline-none">
                    <div class="w-8 h-8 bg-orange-500 rounded-xl flex items-center justify-center text-white font-bold text-sm">
                        {{ ucfirst(auth()->user()->name[0]) }}
                    </div>
                        <span class="text-sm font-bold text-slate-700 hidden sm:block">{{ ucfirst(auth()->user()->name) }}</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 transition-transform" id="chevron-icon"></i>
                </button>

                <div id="user-menu" class="hidden absolute right-0 mt-3 w-52 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50 origin-top-right">
                    <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-orange-500 transition-colors">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        Mon Profil
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-orange-500 transition-colors">
                        <i data-lucide="settings" class="w-4 h-4"></i>
                        Paramètres
                    </a>
                    <hr class="my-1 border-slate-50">
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center gap-3 px-4 py-2 text-sm text-red-500 hover:bg-red-50 w-full text-left transition-colors font-semibold">
                            <i data-lucide="log-out" class="w-4 h-4"></i>
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</header>

<script>
    lucide.createIcons();
</script>