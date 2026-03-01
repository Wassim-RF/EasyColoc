@include('layouts.head')
<body class="w-full bg-[#F8FAFC]">
    @include('layouts.header')
    <main class="max-w-2xl mx-auto px-4 py-12">
        <div class="flex items-center gap-4 mb-10">
            <a href="{{ route('view.user.returnToHome') }}" class="w-10 h-10 bg-white border border-slate-200 rounded-xl flex items-center justify-center shadow-sm hover:bg-slate-50 transition-all">
                <i data-lucide="chevron-left" class="w-5 h-5 text-slate-400"></i>
            </a>
            <div>
                <h1 class="text-2xl font-black text-slate-900 tracking-tighter italic">Inviter un membre</h1>
                <p class="text-sm text-slate-500 font-medium italic">Ajoutez un nouveau colocataire à "{{ $colocation->name }}".</p>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-sm border border-slate-100 relative overflow-hidden">
            <div class="absolute -right-8 -top-8 w-32 h-32 bg-orange-50 rounded-full flex items-center justify-center opacity-50">
                <i data-lucide="user-plus" class="w-12 h-12 text-orange-200 mt-6 mr-6"></i>
            </div>

            <form action="{{ route('colocation.invite') }}" method="POST" class="relative space-y-8">
                @csrf
                
                <input type="hidden" name="colocationId" value="{{ $colocation->id }}">

                <div>
                    <label for="userInvitedEmail" class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-4 ml-1">
                        Adresse Email du colocataire
                    </label>
                    <div class="relative group">
                        <div class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-300 group-focus-within:text-orange-500 transition-colors">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <input type="email" 
                            name="userInvitedEmail" 
                            id="userInvitedEmail" 
                            placeholder="exemple@email.com" 
                            required
                            class="w-full pl-14 pr-6 py-5 bg-slate-50 border border-slate-200 rounded-2xl text-slate-900 font-bold placeholder-slate-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:bg-white transition-all shadow-sm">
                    </div>
                    <p class="mt-3 text-[11px] text-slate-400 font-medium ml-1">
                        * Un email d'invitation sera envoyé à cette adresse pour rejoindre la colocation.
                    </p>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-5 bg-orange-500 text-white rounded-3xl font-black text-lg tracking-tight hover:bg-orange-600 shadow-xl shadow-orange-200 transition-all transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-3">
                        <i data-lucide="send" class="w-5 h-5"></i>
                        ENVOYER L'INVITATION
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-8 bg-blue-50/50 border border-blue-100 rounded-3xl p-6 flex gap-4">
            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                <i data-lucide="info" class="w-5 h-5 text-blue-600"></i>
            </div>
            <p class="text-sm text-blue-700 font-medium leading-relaxed">
                Le nouveau membre pourra voir l'historique des dépenses و يشارك في المصاريف بمجرد قبول الدعوة.
            </p>
        </div>
    </main>
</body>
<script>
    lucide.createIcons();
</script>