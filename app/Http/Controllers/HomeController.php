<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blog()
    {
        $blogs = Blog::where('is_active', 1)->orderBy('id', 'DESC')->get();

        return view('blog', ['blogs' => $blogs]);
    }

    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog-detalji', ['blog' => $blog]);
    }
}
