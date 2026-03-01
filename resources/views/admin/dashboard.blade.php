@include('layouts.head');
<body class="w-full bg-[#F8FAFC]">
    <main class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-10">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
        <div>
            <h1 class="text-4xl font-black text-slate-900 tracking-tighter italic uppercase">Admin Control</h1>
            <p class="text-slate-500 text-sm font-medium mt-1">Gestion globale de la plateforme EasyColoc.</p>
        </div>
        
        <div class="flex items-center gap-3">
            <div class="bg-white border border-slate-200 px-5 py-2.5 rounded-2xl flex items-center gap-3 shadow-sm">
                <span class="relative flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                </span>
                <span class="text-sm font-black text-slate-700 uppercase tracking-tight">System Online</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <div class="bg-white rounded-[2.5rem] p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-orange-500/5 transition-all group">
            <div class="w-12 h-12 bg-orange-50 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="users" class="w-6 h-6 text-orange-500"></i>
            </div>
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em]">Utilisateurs</p>
            <h3 class="text-3xl font-black text-slate-900 tracking-tighter italic">1,240</h3>
        </div>

        <div class="bg-white rounded-[2.5rem] p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-blue-500/5 transition-all group">
            <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="home" class="w-6 h-6 text-blue-500"></i>
            </div>
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em]">Colocations</p>
            <h3 class="text-3xl font-black text-slate-900 tracking-tighter italic">312</h3>
        </div>

        <div class="bg-white rounded-[2.5rem] p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-green-500/5 transition-all group">
            <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="banknote" class="w-6 h-6 text-green-500"></i>
            </div>
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em]">Flux d'argent</p>
            <h3 class="text-3xl font-black text-slate-900 tracking-tighter italic">45,800 <span class="text-sm not-italic">DH</span></h3>
        </div>

        <div class="bg-white rounded-[2.5rem] p-6 border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-red-500/5 transition-all group">
            <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <i data-lucide="alert-circle" class="w-6 h-6 text-red-500"></i>
            </div>
            <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em]">Invitations en attente</p>
            <h3 class="text-3xl font-black text-slate-900 tracking-tighter italic">12</h3>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <div class="lg:col-span-2 bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-8 border-b border-slate-50 flex items-center justify-between">
                <h2 class="text-xl font-black text-slate-900 italic uppercase tracking-tight">Dernières Colocations</h2>
                <button class="text-xs font-black text-orange-500 hover:underline tracking-widest uppercase">Voir tout</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/50">
                            <th class="px-8 py-4 text-[10px] font-black uppercase tracking-widest text-slate-400">Nom / Owner</th>
                            <th class="px-8 py-4 text-[10px] font-black uppercase tracking-widest text-slate-400">Membres</th>
                            <th class="px-8 py-4 text-[10px] font-black uppercase tracking-widest text-slate-400">Statut</th>
                            <th class="px-8 py-4 text-[10px] font-black uppercase tracking-widest text-slate-400">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-8 py-5">
                                <p class="font-bold text-slate-900 text-sm italic">Coloc des Amis</p>
                                <p class="text-xs text-slate-400">by Ahmed</p>
                            </td>
                            <td class="px-8 py-5 text-sm font-black text-slate-700">4</td>
                            <td class="px-8 py-5">
                                <span class="px-2.5 py-1 bg-green-50 text-green-600 text-[10px] font-black uppercase rounded-lg border border-green-100">Actif</span>
                            </td>
                            <td class="px-8 py-5">
                                <button class="p-2 text-slate-300 hover:text-orange-500 transition-colors"><i data-lucide="more-horizontal" class="w-5 h-5"></i></button>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8">
            <h2 class="text-xl font-black text-slate-900 italic uppercase tracking-tight mb-8">System Activity</h2>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <div class="w-1 h-12 bg-orange-500 rounded-full"></div>
                    <div>
                        <p class="text-sm font-bold text-slate-900 italic">Nouvel utilisateur inscrit</p>
                        <p class="text-xs text-slate-400">Il y a 2 minutes • <span class="text-orange-500">Yassine</span></p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-1 h-12 bg-blue-500 rounded-full"></div>
                    <div>
                        <p class="text-sm font-bold text-slate-900 italic">Colocation créée</p>
                        <p class="text-xs text-slate-400">Il y a 15 minutes • <span class="text-blue-500">L'Appart 22</span></p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-1 h-12 bg-green-500 rounded-full"></div>
                    <div>
                        <p class="text-sm font-bold text-slate-900 italic">Paiement confirmé</p>
                        <p class="text-xs text-slate-400">Il y a 1 heure • 450 DH</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
</body>