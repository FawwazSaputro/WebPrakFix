<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }
    public function submitRegister(Request $request)
    {
        $formFields = $request->validate([
            'nim' => ['required', 'min:3'],
            'email'=> ['required'],
            'password' => ['required',  'min:6'],
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // also Login
        // auth()->login($user);
        Auth::login($user);
        return redirect('/products');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function submitLogin(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'nim' => ['required', 'min:3'],
            'password' => ['required']
        ]);
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/products');
        }
        return back();
    }
    public function logout(Request $request)
    {
        // dd($request);
        auth()->logout();
        // destroy user session and create new (tamu/guest) session

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}