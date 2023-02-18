<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To Laravel!';
        // return view('pages.index', compact('title'));
        // return view('pages.index')->with('title', $title);
        return view('pages.index', ['title' => $title]);
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about', compact('title'));
    }

    public function services()
    {
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Data Analyst']
        ];
        return view('pages.services')->with($data);
    }
}
