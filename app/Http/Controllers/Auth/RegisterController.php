<?php
    namespace App\Http\Controllers\Auth;
    
    use App\Services\AuthServices;
    use App\Services\RegisterServices;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\RegisterRequest;

    class RegisterController extends Controller {
        public function index() {
            return view('auth.register');
        }

        public function register(RegisterRequest $registerRequest , AuthServices $authServices , RegisterServices $registerServices) {
            $user = $authServices->existeEmail($registerRequest->email);

            if ($user) return redirect()->back()->with('error', 'Cette adresse e-mail est déjà utilisée.');

            $data = [
                'name' => $registerRequest->name,
                'email' => $registerRequest->email,
                'password' => $registerRequest->password,
                'role' => "User"
            ];

            $newUser = $registerServices->create($data);

            Auth::login($newUser);
            $registerRequest->session()->regenerate();

            return redirect()->intended('home')->with('success' , "Votre compte a été créé avec succès.");
        }
    }