<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Album;
use Illuminate\Support\Facades\Auth;
use Validator;

class AlbumController extends Controller
{

    public $successStatus = 200;
    

    public function album(){
        $album = Album::all()->sortBy('index')->values();

        foreach ($album as $article) {
            $json[] =[
                'id'        => $article->id,
                'name'      => $article->name,
                'picture'   => asset($article->picture), 
            ];
        }

        return response()->json(['success'=>$json], $this->successStatus);
    }

    public function detail(Request $request){
        $article = Album::find($request->input('id'));

        $json[] = [
            'id'        => $article->id,
            'name'      => $article->name,
            'picture'   => asset($article->picture),
            'pictures'  => getPicture($request->input('id'))
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
                'descroption'   => $picture->description,
                'picture'       => asset($picture->picture),
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
                'descroption'   => $picture->description,
                'picture'       => asset($picture->picture),
                'url'           => $picture->url,

            ];
        }
        
        return response()->json(['success'=>$json], $this->successStatus);
    }

}