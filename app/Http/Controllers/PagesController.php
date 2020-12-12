<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('guest.about');
    }

    public function faq()
    {
        return view('guest.faq');
    }    

    public function login()
    {
        return view('guest.login');
    }

    public function index()
    {
        $role = Auth::user()->role;
        $checkrole = explode(',', $role);
        if (in_array('admin', $checkrole)) {
            return redirect('guest.index');
        } else {
            return redirect('user.login');
        }

    }

}
