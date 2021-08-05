<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function createView(){
        return view('create_article');
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'articleImage' => 'required|mimes:jpg,jpeg,png'
        ]);

        $image = $request->file('articleImage');
        $image->move('img/', $request->articleImage->getClientOriginalName());

        DB::table('articles')->insert([
            'UserId' => $user->id,
            'CategoriesId' => $request->categoryId,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->articleImage->getClientOriginalName()
        ]);

        return redirect('/');
    }

    public function blogsView()
    {
        $articles = Articles::all();

        return view('blog_menu')->with('articles', $articles);
    }

    public function delete($articleId)
    {
        DB::table('articles')->where('id', $articleId)->delete();

        return redirect('/');
    }
}
