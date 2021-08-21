<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel!';
       // return view('pages.index', compact('title'));
       return view('pages.index') ->with('title', $title);
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about') ->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'CEO']
        );
        return view('pages.services')->with($data);
    }
}
