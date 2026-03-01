@include('layouts.head')
<body class="w-full bg-[#F8FAFC] antialiased text-slate-900">
    <header class="bg-white/90 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20"> <div class="shrink-0 flex items-center gap-3">
                    <span class="text-3xl font-black text-orange-500 tracking-tighter transition-transform hover:scale-105 italic">
                        EasyColoc
                    </span>
                    <div class="h-8 w-px bg-slate-200 mx-2 hidden sm:block"></div>
                    <span class="hidden sm:block text-sm font-bold text-slate-400 uppercase tracking-widest mt-1">Admin</span>
                </div>
                
                <div class="flex items-center gap-4">
                    <button id="user-menu-button" class="flex items-center gap-3 p-1.5 pr-4 bg-white hover:bg-slate-50 border border-slate-200 rounded-[1rem] transition-all focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-sm">
                        <div class="w-9 h-9 bg-orange-100 rounded-xl flex items-center justify-center text-orange-600 font-black text-sm">
                            {{ ucfirst(auth()->user()->name[0]) }}
                        </div>
                        <span class="text-sm font-bold text-slate-700 hidden sm:block">{{ ucfirst(auth()->user()->name) }}</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 transition-transform" id="chevron-icon"></i>
                    </button>

                    <form action="{{ route('auth.logout') }}" method="POST" class="hidden sm:flex m-0">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 px-5 py-2.5 text-sm text-red-500 bg-white border border-red-100 rounded-[1rem] hover:bg-red-50 hover:border-red-200 font-bold transition-all shadow-sm">
                            <i data-lucide="log-out" class="w-4 h-4"></i>
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-10 min-h-screen">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-bold text-slate-900 tracking-tight">Administration globale</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center mb-4 border border-red-100">
                    <i data-lucide="users" class="w-6 h-6 text-red-500"></i>
                </div>
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Utilisateurs totaux</p>
                    <h3 class="text-3xl font-black text-slate-900 tracking-tight">{{ $totalUser }}</h3>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center mb-4 border border-red-100">
                    <i data-lucide="home" class="w-6 h-6 text-red-500"></i>
                </div>
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Colocations totales</p>
                    <h3 class="text-3xl font-black text-slate-900 tracking-tight">{{ $colocationNumber }}</h3>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center mb-4 border border-red-100">
                    <i data-lucide="wallet" class="w-6 h-6 text-red-500"></i>
                </div>
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Total des dépenses</p>
                    <h3 class="text-3xl font-black text-slate-900 tracking-tight">{{ $totalDepenses }} DH</h3>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center mb-4 border border-red-100">
                    <i data-lucide="shield-alert" class="w-6 h-6 text-red-500"></i>
                </div>
                <div>
                    <p class="text-slate-500 text-sm font-medium mb-1">Utilisateurs bannis</p>
                    <h3 class="text-3xl font-black text-slate-900 tracking-tight">{{ $userBannedTotal }}</h3>
                </div>
            </div>

        </div>

        <h2 class="text-xl font-bold text-slate-900 mb-6 tracking-tight">Gestion des utilisateurs</h2>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse whitespace-nowrap">
                    <thead>
                        <tr class="bg-slate-50/80">
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200">Nom</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200">Email</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200 text-center">Colocations</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200">Statut</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest border-b border-slate-200 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach ($allUSers as $user)
                            @if (!$user->isBanned)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="px-6 py-5 text-sm font-bold text-slate-900">{{ $user->name }}</td>
                                    <td class="px-6 py-5 text-sm text-slate-500 font-medium">{{ $user->email }}</td>
                                    <td class="px-6 py-5 text-sm font-bold text-slate-700 text-center">{{ $user->colocations->count() }}</td>
                                    <td class="px-6 py-5">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-[11px] font-black tracking-wide bg-green-50 text-green-600 border border-green-100">ACTIF</span>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <form action="{{ route('admin.banUser') }}" method="POST" class="inline-block m-0">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 text-red-600 border border-red-100 text-sm font-bold rounded-xl hover:bg-red-500 hover:text-white transition-all">
                                                <i data-lucide="ban" class="w-4 h-4"></i> Bannir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <tr class="bg-slate-50/50 hover:bg-slate-50/80 transition-colors opacity-75 hover:opacity-100">
                                    <td class="px-6 py-5 text-sm font-bold text-slate-900">{{ $user->name }}</td>
                                    <td class="px-6 py-5 text-sm text-slate-500 font-medium">{{ $user->email }}</td>
                                    <td class="px-6 py-5 text-sm font-bold text-slate-700 text-center">{{ $user->colocations->count() }}</td>
                                    <td class="px-6 py-5">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-[11px] font-black tracking-wide bg-red-50 text-red-600 border border-red-100">BANNI</span>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <form action="{{ route('admin.banUser') }}" method="POST" class="inline-block m-0">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-200 text-slate-700 text-sm font-bold rounded-xl hover:bg-slate-100 transition-all shadow-sm">
                                                <i data-lucide="check-circle" class="w-4 h-4"></i> Débannir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>
<script>
    lucide.createIcons();
</script>