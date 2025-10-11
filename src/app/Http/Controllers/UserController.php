<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $form = $request->all();
        //model名
        User::create($form);
        return redirect('/');
    }
}
