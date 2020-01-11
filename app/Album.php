<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Album extends Model
{
    //
    protected $table = "album";    
    
    //public $timestamps = false;


    public function pictures(){
        return $this->hasMany('App\albumPicture', 'album_id', 'id');
    }
}
