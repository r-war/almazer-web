<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\albumPicture;
use Flash;

class AlbumPictureController extends Controller
{
    //
    private $id;

    public function __construct(Request $request){
        
        $this->id = $request->query('album_id');
    }

    public function index(Request $request){
       $id = $request->query('album_id');
        
        $aPicture = albumPicture::all()->where('album_id', $id)->sortBy('index');

        //dump($aPicture);

        return view('backend.album-picture.index', [
            'oPicture' => $aPicture,
            'id'        => $this->id
        ]);
    }

    public function create(albumPicture $model){

        $view= [
            'model' => $model,
            'id'    => $this->id
        ];

        return view('backend.album-picture.add', $view);
    }

    public function store(Request $request, albumPicture $model){
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

        $model->index           = $request->index;
        $model->album_id        = $this->id;
        $model->name            = $request->name;
        $model->description     = $request->description;

        
        // upload and save file path of picture
        $file_path = 'uploads/';

        $model->picture     = $file_path . $request->file('picture')->getClientOriginalName();
        
        if ($model->save()) {
            $request->file('picture')->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
            
            Flash::success('Album picture added successfully.');

            return redirect(route('album-picture.index',['album_id'=>$this->id]));
        }
    }

    public function edit($id){
        $album = albumPicture::find($id);

        return view('backend.album-picture.edit')->with(
            ['model' => $album,
            'id'    => $this->id]
        );
    }

    public function update($id, Request $request){
        $album = AlbumPicture::findOrFail($id);

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

        $album->index           = $request->index;
        $album->album_id        = $this->id;
        $album->name            = $request->name;
        $album->description     = $request->description;

        if($request->hasFile('picture')){
            //unlink($album->picture);
            $album->picture     = $file_path . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
        }

        
        if ($album->save()) {
            Flash::success('album updated.');

            return redirect(route('album-picture.index',['album_id'=>$this->id]));
        }
        
    }

    public function destroy($id){
        $album = albumPicture::find($id);

        if($album){
            //unlink($album->picture);
            $album->delete();
            Flash::success('album deleted successfully.');

            return redirect(route('album-picture.index',['album_id'=>$this->id]));
        }else{
            Flash::error('album not found');

            return redirect(route('album-picture.index',['album_id'=>$this->id]));
        }

    }
}
