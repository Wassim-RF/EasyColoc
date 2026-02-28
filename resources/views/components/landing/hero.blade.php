<section class="relative bg-gray-50 overflow-hidden py-20">
    <div class="max-w-350 mx-auto px-8">
        <div class="grid grid-cols-12 gap-20 items-center">
            <div class="col-span-5">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-orange-200 bg-orange-50 text-orange-500 text-sm font-medium mb-6">
                    <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                    La nouvelle façon de gérer sa colocation
                </div>

                <h1 class="text-6xl font-extrabold text-slate-800 leading-tight mb-6">
                    Gérez votre <br />
                    colocation <br />
                    <span class="relative inline-block text-orange-500">
                        sans stress
                        <span class="absolute bottom-1 left-0 w-full h-3 bg-orange-200/60 -z-10 rounded-full"></span>
                    </span>
                </h1>

                <p class="text-lg text-slate-500 mb-10 leading-relaxed max-w-xl">
                    Suivez les dépenses, équilibrez les dettes et évitez les conflits. 
                    La plateforme la plus simple pour les colocataires modernes.
                </p>

                <div class="flex gap-4">
                    <a href="{{ route('view.auth.register') }}" class="inline-flex items-center justify-center w-56 h-14 font-semibold text-white bg-orange-500 rounded-full shadow-md hover:bg-orange-600 transition">
                        Créer un compte
                    </a>

                    <a href="#" class="inline-flex items-center justify-center w-64 h-14 font-semibold text-slate-700 bg-white border border-slate-200 rounded-full hover:bg-slate-50 transition">
                        Découvrir comment ça marche
                    </a>
                </div>
            </div>

            <div class="col-span-7 relative">
                <div class="relative bg-white rounded-3xl shadow-xl border border-slate-100 p-6">
                    
                    <img src="https://6b200d23-46dd-499c-a4fc-d8d833536715-00-38vz3v9ursabt.riker.replit.dev/src/assets/images/hero-illustration.png" alt="Colocation Dashboard" class="w-full rounded-2xl"/>

                    <div class="absolute top-16 -left-16 bg-white rounded-2xl shadow-2xl border border-slate-100 p-5 flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center font-bold">
                            YM
                        </div>
                        <div>
                            <p class="text-sm text-slate-500">Ahmed a payé</p>
                            <p class="text-lg font-bold text-slate-800">+ 120 DH</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>