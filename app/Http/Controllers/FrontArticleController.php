<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Article;


class FrontArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::where('article.deleted', 'false')
        ->get();
        
        return view('article', compact('articles'));
    }

   
    public function showArticle($id)
    {
        $user = auth()->user();
        $article = Article::find($id);
       
        return view('coursedetail', compact('article'));
    }

    public function search(Request $request)
    {
      
        $query = $request->input('query');
        $courses = Course::where('deleted', 'false')
                         ->where('status','=','active')
                         ->where('title', 'like', '%' . $query . '%')
                         ->get();
                        
        return view('course-list', compact('courses'));
    }

   
}
