<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ScientistWebController extends Controller
{
    public function index()
    {
        $response = Http::get(config('app.api_url') . "/scientists");

        if (!$response->successful()) {
            return abort(500, "API bilan bog‘lanib bo‘lmadi");
        }

        $scientists = $response->json()['data'] ?? [];

        return view('pages.main', compact('scientists'));
    }

    public function show($id)
    {
        $response = Http::get(config('app.api_url') ."/scientists/$id/articles");

        if (!$response->successful()) {
            return abort(500, "API bilan bog‘lanib bo‘lmadi");
        }

        $articles = $response->json()['articles'] ?? [];
        $scientist = $response->json()['scientist'] ?? [];



        return view('pages.articles', compact('articles', 'id', 'scientist'));
    }
}
