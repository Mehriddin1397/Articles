<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ArticleWebController extends Controller
{
    public function show($id)
    {
        $response = Http::get(config('app.api_url') . "/articles/$id");

        $article = $response->json() ?? [];

        return view('pages.article_show', compact('article'));
    }
}
