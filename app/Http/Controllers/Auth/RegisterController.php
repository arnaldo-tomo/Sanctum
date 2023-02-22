<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\teste;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $user->save();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function Teste(Request $request)
    {
        $Teste = new teste();
        $Teste->name = $request->name;
        $Teste->email = $request->email;
        $Teste->password = $request->password;
        $Teste->save();

        $token = $Teste->createToken('auth_token')->plainTextToken;

        return response()->jason([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}