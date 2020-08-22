<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|min:2|max:255',
            'telefone' => 'nullable|min:9',
            'gender' => 'nullable|min:1|max:10',
            'address' => 'nullable|min:1|max:150',
        ]);

        $user = User::find(auth()->id());

        $user->name = $request->name;
        $user->telefone = $request->telefone;
        $user->gender = $request->gender;
        $user->address = $request->address;

        $user->save();

        // dd($request->all(), $user);

        return redirect()->back()->with(['message' => 'Perfil actualizado com sucesso']);

    }

}
