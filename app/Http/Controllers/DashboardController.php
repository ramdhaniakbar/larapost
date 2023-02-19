<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $user = \App\Models\User::find($user_id);
        
        return view('pages.dashboard', [
            'posts' => $user->posts
        ]);
    }
}
