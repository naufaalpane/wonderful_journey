<?php

namespace App\Http\Controllers;

use App\Articles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Articles::all();

        return view('home')->with('articles', $articles);
    }

    public function about()
    {
        return view('about_us');
    }

    public function detail($articleId)
    {
        $articles = Articles::find($articleId);

        return view('detail')->with('articles', $articles);
    }

    public function categorySort($categoryId)
    {
        $articles = DB::table('articles')->where('CategoriesId', 'like', $categoryId)->paginate(3);

        return view('home', ['articles' => $articles]);
    }
}
