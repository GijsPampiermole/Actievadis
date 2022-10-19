<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return redirect('/inloggen')->with('error', 'Het opgegeven wachtwoord komt niet overeen met het emailadres');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/account')->with('success', 'U heeft uw account geupdated');
    }

    public function adminUpdate(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->isAdmin = $request->admin === 'on' ? 1 : 0;
        $user->save();
        return redirect('/admin/accounts')->with('success', 'Account is succesvol geupdated');
    }

    public function adminDelete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect('/admin/accounts')->with('success', 'Account is succesvol verwijderd');
    }
}
