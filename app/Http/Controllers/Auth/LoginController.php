<?php
    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\LoginRequest;
    use App\Services\AuthServices;
    use Auth;
    use Illuminate\Support\Facades\Hash;

    class LoginController extends Controller {
        public function index() {
            return view('auth.login');
        }

        public function login(LoginRequest $loginRequest , AuthServices $authServices) {
            $user = $authServices->existeEmail($loginRequest->email);

            if (!$user) return redirect('register')->with('error' , `Aucun compte n'est associé à cet email.`);

            if (!Hash::check($loginRequest->password , $user->password)) return redirect()->back()->with('error' , "Le mot de passe est incorrect.");

            if ($user->isBanned) return redirect()->back()->with('failed' , 'Vous avez banner');

            Auth::login($user);
            $loginRequest->session()->regenerate();

            if (session()->has('invite_token')) {

                $token = session('invite_token');

                session()->forget('invite_token');

                return redirect()->route('colocation.invitation', [
                    'token' => $token
                ]);
            }

            if ($user->role === 'Admin') {
                return redirect('admin/dashboard')->with('success' , "Bienvenue ! Vous êtes maintenant connecté.");
            } else if ($user->role === 'User') {
                return redirect()->intended('home')->with('success' , "Bienvenue ! Vous êtes maintenant connecté.");
            } else {
                return redirect()->back();
            }
        }
    }