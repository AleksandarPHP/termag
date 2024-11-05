<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    private $allowedLangs;

    public function __construct()
    {
        $this->allowedLangs = ['sr', 'en'];
    }
    public function index()
    {
        return view('cms.menu.list');
    }
}
