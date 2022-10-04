<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function create(Request $request) {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'confirmed', Password::min(8)]
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->isAdmin = $request->isAdmin ?? 0;
        $user->save();
        return redirect('/admin/users')->with('success', 'Account is succesvol aangemaakt');
    }

    public function update(Request $request) {
        $user = User::where('id', $request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'isAdmin' => $request->isAdmin
        ]);
        return redirect('/admin/users')->with('success', 'Account is succesvol geupdatet');
    }

    public function delete(Request $request) {
        User::where('id', $request->id)->delete();
        return redirect('/admin/users')->with('success', 'Account is succesvol verwijderd');
    }
}
