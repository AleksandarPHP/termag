<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Services\WatherForecast;
use Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected WatherForecast $watherForecast
    ){}

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

    public function weatherForecast()
    {
        $current =  Cache::tags(['current'])->remember('current', 3600, function() {
            return $this->watherForecast->getResults();
        });
        
        return view('prognoza', ['current'=>$current]);
    }
}
