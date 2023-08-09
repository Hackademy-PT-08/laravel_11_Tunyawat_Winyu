<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AddpostController extends Controller
{

    // Views all Articles
    public function index(){

        $articles = Article::all();

        return view('article.index',[
            'articles' => $articles
        ]);
    }


    public function create(){
        return view('addpost.addnewpost');
    }


    public function store(Request $request){
        $imageId = uniqid();

        $article = new Article;

        $article->title = $request->title;
        $article->content = $request->content;

        if($request->file('image')){
            $article->image = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
            $article->image_Id = $imageId;
            $filename = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
            $image = $request->file('image')->storeAs('public', $filename);
        }
        else{
            $article->image = '';
            $article->image_Id = '';
        }

        $article->save();

       

        return redirect()->route('homepage');
    }


    public function edit($id){

        $article = Article::find($id);

        return view('article.edit', [
            'article' => $article
        ]);
    }

    //Updating article on database
    public function update(Request $request, $id){
        $imageId = uniqid();

        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;

        if($request->file('image')){
            $article->image = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
            $article->image_Id = $imageId;
            $filename = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
            $image = $request->file('image')->storeAs('public', $filename);
        }

        $article->save();
        
        return redirect()->route('article.edit', $id);
    }

    public function destroy($id){

        $article = Article::find($id);
        
        $article->delete();

        return redirect()->route('allArticle.index');
    }
}
