<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    // validasi data orang yg akan buat akun (register akun)
    public function store(Request $request ){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'Username' => 'required|min:5|max:255',
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255'

        ]);

        // enkripsi password
        $validatedData['password'] = bcrypt($validatedData['password']);

        //akun dibuat
        User::create($validatedData);

        $request->session()->flash('status', 'Registration was successful!');
        return redirect('/login');
    }
}
