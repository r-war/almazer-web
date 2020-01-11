<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class albumPicture extends Model
{
    //
    protected $table = "album_picture";

    protected $fillable = ['name', 'picture'];


    
    /*
    * Validation rules
    *
    * @var array
    */
   public static $rules = [
       'name' => 'required',
       'description' => 'required',
       //'url'        => 'required',
       'picture' => 'required',
   ];

   public function picture()
   {
       return $this->belongsTo(Album::class);
   }

}
