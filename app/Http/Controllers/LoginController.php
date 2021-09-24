<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'login'
        ]);
    }
}
