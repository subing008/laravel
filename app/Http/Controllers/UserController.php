<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserValidator;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function show(User $user) {
        return view('user.show',compact('user'));
    }

    public function store(UserValidator $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        
        return redirect()->route('user.show',[$user]);
    }
}
