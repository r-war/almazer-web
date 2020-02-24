<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Album;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Validator;

class AlbumController extends Controller
{

    public $successStatus = 200;
    

    public function album(Request $request){
        $album = Album::orderBy('index')
        ->simplePaginate((int) $request->get('limit', 6));
        // "current_page": 1,
        // "first_page_url": "https://almazer-web.dev/api/album?page=1",
        // "from": 1,
        // "next_page_url": "https://almazer-web.dev/api/album?page=2",
        // "path": "https://almazer-web.dev/api/album",
        // "per_page": 1,
        // "prev_page_url": null,
        // "to": 1

        //dump($album->toArray());
        foreach ($album->toArray()['data'] as $article) {
            $data[] =[
                    'id'        => $article['id'],
                    'name'      => $article['name'],
                    'picture'   => secure_asset($article['picture']), 
                ];
        }
        $json= [
            'data'              => $data,
            'path'              => $album->toArray()['path'],
            'per_page'          => $album->perPage(),
            'current_page'      => $album->currentPage(),
            'first_page_url'    => $album->toArray()['first_page_url'],
            'next_page_url'     => $album->toArray()['next_page_url'],
            'per_page'          => $album->toArray()['per_page'],
            'prev_page_url'     => $album->toArray()['prev_page_url'],
            'from'              => $album->toArray()['from'],
            'to'                => $album->toArray()['to']
        ];
        // dump($json);
        
        // die();exit();

        return response()
            ->json(['success'=>$json], $this->successStatus)
            ->withCallback($request->callback);


        //return response()->json(['success'=>$json], $this->successStatus);
    }

    public function detail(Request $request){
        $article = Album::find($request->input('id'));

        $json[] = [
            'id'        => $article->id,
            'name'      => $article->name,
            'picture'   => secure_asset($article->picture),
            'pictures'  => $this->getPicture($request->input('id'))
        ];
        
        return response()->json(['success'=>$json], $this->successStatus);
    }

    public function getPicture($id){
        $albumpicture = Album::find($id)->pictures;

        foreach($albumpicture as $picture ){
            $json[] =[
                'id'            => $picture->id,
                'album_id'      => $picture->album_id,
                'name'          => $picture->name,
                'description'   => $picture->description,
                'picture'       => secure_asset($picture->picture),
                'url'           => $picture->url,
            ];
        }
        return $json;
    }

    public function pictures(Request $request){

        $albumpicture = Album::find($request->input('id'))->pictures;

        foreach($albumpicture as $picture ){
            $json[] =[
                'id'            => $picture->id,
                'album_id'      => $picture->album_id,
                'name'          => $picture->name,
                'description'   => $picture->description,
                'picture'       => secure_asset($picture->picture),
                'url'           => $picture->url,

            ];
        }
        
        return response()->json(['success'=>$json], $this->successStatus);
    }

}