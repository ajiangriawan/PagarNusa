<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IDCardController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('idcard', compact('user'));
    }

    public function showIdCard($id)
    {
        $user = Auth::user();
        return view('user.idcard', compact('user'));
    }
}
