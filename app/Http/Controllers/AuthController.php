<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            $user = Auth::user();
            $user['token'] = Str::random(10);
            $user->save();

            return response()->json(['message' => 'Berhasil login', 'user' => $user]);
        }

        return response()->json(['message' => 'Gagal login']);
    }

    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        if($user){
            $query = User::where('id', $user->id);
            $query->update([
                'token' => Str::random(10)
            ]);
            $user = $query->first();

            return response()->json(['message' => 'Berhasil register', 'data' => $user]);
        }

        return response()->json(['message' => 'Gagal register']);
    }
}
