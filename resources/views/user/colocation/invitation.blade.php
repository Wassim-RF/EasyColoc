@include('layouts.head')
<body class="w-full bg-[#F8FAFC]">
    @include('layouts.header')
    <main class="max-w-3xl mx-auto px-4 py-12">
    
    <div class="mb-10 text-center md:text-left">
        <h1 class="text-3xl font-black text-slate-900 tracking-tighter italic">Invitations</h1>
        <p class="text-slate-500 text-sm font-medium mt-1">Gérez vos invitations pour rejoindre une colocation.</p>
    </div>

    <div class="space-y-4">
        
        <div class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-sm border border-slate-100 hover:shadow-md transition-all duration-300">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                
                <div class="flex items-center gap-5">
                    <div class="w-16 h-16 bg-orange-50 rounded-[1.5rem] flex items-center justify-center text-orange-500 shadow-sm border border-orange-100">
                        <i data-lucide="home" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-black text-slate-900 tracking-tight italic">Coloc des Amis</h3>
                        <p class="text-sm text-slate-500 font-medium">Invitée par <span class="text-slate-900 font-bold underline decoration-orange-200 italic">Ahmed</span></p>
                    </div>
                </div>

                <div class="flex items-center gap-3 w-full md:w-auto">
                    
                    <form action="{{ route('invitation.accept') }}" method="post" class="flex-1 md:flex-none">
                        @csrf
                        <input type="hidden" name="invitationID" value="{{ $invitation->id }}">
                        <input type="hidden" name="colocationID" value="{{ $colocation->id }}">
                        <button type="submit" class="w-full px-8 py-3 bg-green-500 text-white font-black text-sm rounded-2xl hover:bg-green-600 shadow-lg shadow-green-100 transition-all transform hover:-translate-y-1 italic uppercase tracking-wider">
                            Accepter
                        </button>
                    </form>

                    <form action="{{ route('invitation.refuse') }}" method="post" class="flex-1 md:flex-none">
                        @csrf
                        <input type="hidden" name="invitationID" value="{{ $invitation->id }}">
                        <button type="submit" class="w-full px-8 py-3 bg-white border border-slate-200 text-slate-400 font-bold text-sm rounded-2xl hover:bg-red-50 hover:text-red-500 hover:border-red-100 transition-all italic uppercase tracking-wider">
                            Refuser
                        </button>
                    </form>

                </div>
            </div>
        </div>
        </div>
</main>
</body>
<script>
    lucide.createIcons();
</script>