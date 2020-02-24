<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;
use Flash;

class BannerController extends Controller
{
    //
    protected $aArtArtiicle;
    
    public function index(){
        $aBanner = Banner::All()->sortByDesc('date');  
        
        return view('backend.banner.index')->with(
            'model', $aBanner
        );
    }

    public function create(Banner $model){
        $view = [
            'model' => $model
        ];

        return view('backend.banner.add', $view);
    }

    public function store(Request $request, Banner $model){
		# set validation rules
        $rules = [
            // 'date' => [
            //     'required',
            //     'date'
            // ],
            // 'name' => [
            //     'required'
            // ],
            'picture' => [
                'image',
                'required'
            ]
        ];

        # run validator
        $validator = $request->validate($rules);

        $model->index       = $request->index;
        $model->name       = $request->name;
        $model->url_link    = $request->url_link;
        $model->url_link_2    = $request->url_link_2;

        
        // upload and save file path of picture
        $file_path = 'uploads/';

        $model->picture     = $file_path . $request->file('picture')->getClientOriginalName();
        
        if ($model->save()) {
            $request->file('picture')->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
            return $this->saved();
        }

    }

    public function destroy($id){

        $Banner = Banner::find($id);

        if($Banner){
            //unlink($Banner->picture);
            $Banner->delete();
            Flash::success('Banner deleted successfully.');

            return redirect(route('banner.index'));
        }else{
            Flash::error('Banner not found');

            return redirect(route('banner.index'));
        }

    }

    public function edit($id){
        
        $Banner = Banner::find($id);

        return view('backend.banner.edit')->with(
            'model', $Banner
        );
    }

    public function update($id, Request $request){
        $Banner = Banner::findOrFail($id);

		// # set validation rules
        // $rules = [
        //     'date' => [
        //         'required',
        //         'date'
        //     ],
        //     'picture' => [
        //         'required'
        //     ],
        // ];

        // # run validator
        // $validator = $request->validate($rules);

        // upload and save file path of picture
        $file_path = 'uploads/';

        $Banner->index       = $request->index;
        $Banner->name       = $request->name;
        $Banner->url_link    = $request->url_link;
        $Banner->url_link_2    = $request->url_link_2;

        if($request->hasFile('picture')){
            //unlink($Banner->picture);
            $file = $request->file('picture');
            $Banner->picture     = $file_path . $this->renamed($file->getClientOriginalName());
            $file->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
        }

        
        if ($Banner->save()) {
            Flash::success('Banner updated.');

            return redirect('banner');
        }
        
    }

    public function show ($id){
        $Banner = Banner::find($id);

        return view('backend.banner.index')->with(
            'model', $Banner
        );
    }


}