<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;


class GalleryController extends Controller
{
    //

    public function index(){
        $aGallery = Gallery::all();
        return view('gallery.index')->with(
            'oGallery', $aGallery
        );
    }

    public function album(){
        return view('gallery.index');
    }

    public function destroy($id){

    }
}
