<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.edit', compact('user'));
    }

    // vou utilizar o Request padrão, pois o ProfileRequest dá um erro de lógica, na regra de unique:email
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $request->id
        ]);

        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     */
    public function password(PasswordRequest $request)
    {
        // nao preciso fazer a validação aqui, pois o PasswordRequest ja tem a validação
        
        $user = User::findOrFail($request->id);
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        // auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}
