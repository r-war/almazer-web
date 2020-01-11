<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Validator;

class ArticleController extends Controller
{

    public $successStatus = 200;
    

    public function article(){
        $articles = Article::all()->sortByDesc('date')->values();

        foreach($articles as $article){
            $json[]= [
                'id'        => $article->id,
                'date'      => $article->date,
                'name'      => $article->name,
                'picture'   => asset($article->picture),
                'content'   => $article->content,
            ];
        }
        return response()->json(['success'=>$json], $this->successStatus);
    }

    public function detail(Request $request){

        $id= $request->input('id');

        $articles = Article::find($id);
        // foreach($article AS $post){
        //     foreach($post->picture AS $index => $image){
        //       $posts->picture[$index] = url("/images/".$image);
        //     }
        //   }

        //foreach($articles as $article){
            $json[] =[
                'id'        => $articles->id,
                'date'      => $articles->date,
                'name'      => $articles->name,
                'picture'   => asset($articles->picture),
                'content'   => $articles->content,
            ];
        //}

        // return $article->picture;
        return response()->json(['success'=>$json], $this->successStatus);
    }

}