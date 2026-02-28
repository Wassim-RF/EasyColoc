<p align="center"> <img src="https://img.icons8.com/fluency/240/home.png" width="120" alt="EasyColoc Logo"> </p> <h1 align="center">🏠 EasyColoc</h1> <p align="center"> 💸 Plateforme Web Moderne de Gestion de Colocation </p> <p align="center"> <a href="#"><img src="https://img.shields.io/badge/Laravel-12-red" alt="Laravel Version"></a> <a href="#"><img src="https://img.shields.io/badge/PHP-8.3-blue" alt="PHP Version"></a> <a href="#"><img src="https://img.shields.io/badge/TailwindCSS-3.x-38B2AC" alt="Tailwind"></a> <a href="#"><img src="https://img.shields.io/badge/License-MIT-green" alt="License"></a> </p>
🚀 À propos du projet

EasyColoc est une application web développée avec Laravel qui simplifie la gestion financière d’une colocation.

🎯 Objectif :
Éviter les conflits entre colocataires en automatisant les calculs et en affichant clairement :

💬 « Qui doit quoi à qui »

✨ Fonctionnalités Principales
🔐 Authentification & Utilisateurs

✅ Inscription / Connexion sécurisée

👤 Gestion du profil

👑 Premier utilisateur promu Admin Global

🚫 Bannissement / Débannissement

🏠 Gestion des colocations

➕ Création d’une colocation (Owner automatique)

📩 Invitation via email avec token sécurisé

🔒 Une seule colocation active par utilisateur

🚪 Départ volontaire d’un membre

❌ Retrait d’un membre par l’Owner

🛑 Annulation d’une colocation

💰 Gestion des dépenses

📝 Ajout d’une dépense (titre, montant, date, catégorie, payeur)

📊 Historique des dépenses

📅 Filtrage par mois

📈 Statistiques par catégorie

⚖️ Calcul automatique des soldes

💵 Total payé par membre

🧮 Part individuelle calculée automatiquement

📉 Solde créditeur / débiteur

🔄 Vue simplifiée : Qui doit à qui

💳 Paiements simplifiés

🔘 Bouton “Marquer payé”

🔄 Mise à jour automatique des balances

⭐ Système de réputation

➕ +1 si départ sans dette

➖ -1 si départ avec dette

⚠️ Règle spéciale : dette transférée à l’Owner si retrait forcé

👑 Dashboard Admin Global

📊 Statistiques globales

👥 Gestion des utilisateurs

🚫 Modération (ban / unban)

🏗 Architecture

Le projet respecte strictement l’architecture MVC :

🧠 Models → Logique métier & relations Eloquent

🎮 Controllers → Gestion des requêtes

🎨 Views → Blade + Tailwind CSS

⚙️ Services → Calcul des balances

🔐 Policies → Gestion des autorisations

🛡 Sécurité

🔒 Protection CSRF

✅ Validation côté serveur (Form Requests)

🧼 Protection contre les attaques XSS

🗄 Relations avec clés étrangères

👮 Gestion des rôles (Admin / Owner / Member)

🛠 Stack Technique

⚡ Laravel 12

🐘 PHP 8.3

🗄 MySQL / PostgreSQL

🎨 Blade + Tailwind CSS

🔑 Laravel Breeze

🗂 Git & GitHub

⚙️ Installation
1️⃣ Cloner le projet
git clone https://github.com/your-username/easycoloc.git
cd easycoloc
2️⃣ Installer les dépendances
composer install
npm install
3️⃣ Configurer l’environnement
cp .env.example .env
php artisan key:generate

Configurer la base de données dans le fichier .env

4️⃣ Lancer les migrations
php artisan migrate
5️⃣ Démarrer le serveur
php artisan serve
👥 Rôles
🎭 Rôle	🔑 Permissions
Member	Ajouter dépense, voir solde, quitter colocation
Owner	Gérer membres, catégories, annuler colocation
Global Admin	Voir statistiques, bannir utilisateurs
📚 Objectif Pédagogique

Ce projet démontre :

💡 Maîtrise de Laravel MVC

🔗 Utilisation correcte d’Eloquent ORM

🧱 Bonne modélisation relationnelle

🛡 Sécurité web

📱 Interface moderne & responsive

📸 Screenshots

(Ajouter ici des captures d’écran du projet)

📜 Licence

Projet réalisé dans un cadre pédagogique 🎓
Licence MIT.