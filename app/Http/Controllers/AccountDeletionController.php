<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountDeletionController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'password.confirm']);
    }

    public function index(){
        return view('auth.account-delete');
    }

    public function destroy(){
        auth()->user()->delete();
        return redirect()->route('home');
    }
}
