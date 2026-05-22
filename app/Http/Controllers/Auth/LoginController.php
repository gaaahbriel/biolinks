<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MakeLoginRequest;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request){
        if($request->attemptLogin()){
            return to_route('dashboard');
        };   

        return back()->with(['message' => 'Invalid credentials']);
    }
}
