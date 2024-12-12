<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            [
                'loc' => url('/konferencija-i-seminari'),
            ],
            [
                'loc' => url('/spa'),

            ],
            [
                'loc' => url('/visina-snega'),
            ],
            // Dodajte ostale rute
        ];

        $xml = view('sitemap', compact('urls'))->render();

        return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
    }

}
