<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome', [
            'open' => true
        ]);
    }

    public function authenticate(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Ingrese un correo electrónico',
                'email.email' => 'Ingrese un correo válido',
                'password.required' => 'Ingrese una contraseña'
            ]
        );

        $remember = false;
        $loginParams = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (\Auth::attempt($loginParams, $remember)) {
            return redirect()->intended('/');
        } else {
            return redirect()->route('login')
                ->withErrors(['email' => 'Correo o contraseña incorrectos'])
                ->withInput($request->all());
        }
    }

    public function signup(CreateUserRequest $request) {
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($user->password);
        $user->fk_id_role = 2;

        if ($user->save()) {
            \Auth::login($user);

            return redirect()->route('web_home');
        }
    }

    public function logout(Request $request)
    {
        \Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
