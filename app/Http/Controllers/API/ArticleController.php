<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Validator;

class ArticleController extends Controller
{

    public $successStatus = 200;
    

    public function article(Request $request): JsonResponse
    {
        $articles = Article::orderBy('date')
            ->simplePaginate((int) $request->get('limit', 3));

        foreach ($articles->toArray()['data'] as $article) {
            $data[] =[
                'id'        => $article['id'],
                'date'      => $article['date'],
                'name'      => $article['name'],
                'picture'   => secure_asset($article['picture']),
                'content'   => $article['content'],
                ];
        }
        $json= [
            'data'              => $data,
            'path'              => $articles->toArray()['path'],
            'per_page'          => $articles->perPage(),
            'current_page'      => $articles->currentPage(),
            'first_page_url'    => $articles->toArray()['first_page_url'],
            'next_page_url'     => $articles->toArray()['next_page_url'],
            'per_page'          => $articles->toArray()['per_page'],
            'prev_page_url'     => $articles->toArray()['prev_page_url'],
            'from'              => $articles->toArray()['from'],
            'to'                => $articles->toArray()['to']
        ];
        return response()
            ->json(['success'=>$json], $this->successStatus)
            ->withCallback($request->callback);
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
                'picture'   => secure_asset($articles->picture),
                'content'   => $articles->content,
            ];
        //}

        // return $article->picture;
        return response()->json(['success'=>$json], $this->successStatus);
    }

}