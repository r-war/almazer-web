<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;

use App\Album;


class AlbumController extends Controller
{
    //

    protected $aAlbum;

    public function index(){
        $aAlbum = Album::all();
        return view('backend.album.index',[
            'oAlbum' => $aAlbum
        ]);
    }


    public function create(Album $model){
        $view = [
            'model' => $model
        ];

        return view('backend.album.add', $view);
    }

    public function store(Request $request, Album $model){
		# set validation rules
        $rules = [

            'name' => [
                'required'
            ],
            'picture' => [
                'image',
                'required'
            ]
        ];

        # run validator
        $validator = $request->validate($rules);

        $model->index       = $request->index;
        $model->name       = $request->name;
        //$model->content    = $request->content;

        
        // upload and save file path of picture
        $file_path = 'uploads/';

        $model->picture     = $file_path . $request->file('picture')->getClientOriginalName();
        
        if ($model->save()) {
            $request->file('picture')->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
               
            Flash::success('Album added successfully.');

            return redirect(route('album.index'));
        }

    }

    public function destroy($id){

        $Album = Album::find($id);

        if($Album){
           // unlink($Album->picture);
            $Album->delete();
            Flash::success('Album deleted successfully.');

            return redirect(route('album.index'));
        }else{
            Flash::error('Album not found');

            return redirect(route('album.index'));
        }

    }

    public function edit($id){
        
        $Album = Album::find($id);

        return view('backend.album.edit')->with(
            'model', $Album
        );
    }

    public function update($id, Request $request){
        $album = Album::findOrFail($id);

		# set validation rules
        $rules = [

            'name' => [
                'required'
            ],
        ];

        # run validator
        $validator = $request->validate($rules);

        // upload and save file path of picture
        $file_path = 'uploads/';

        $album->index       = $request->index;
        $album->name       = $request->name;
        //$Album->content    = $request->content;

        if($request->hasFile('picture')){
            //unlink($album->picture);
            $album->picture     = $file_path . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
        }

        
        if ($album->save()) {
            Flash::success('Album updated.');

            return redirect('album');
        }
        
    }

}
