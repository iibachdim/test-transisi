<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController
{
    public function index(Request $request)
    {
        if ($request->user()->hasRole('User')) {
            return redirect('profil');
        }

        if ($request->user()->hasRole('Admin')){
            return view('home');
        }
    }
}
