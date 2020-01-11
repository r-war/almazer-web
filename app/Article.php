<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = "article";

//     protected $fillable = ['name', 'picture'];
//     /*
//     * Validation rules
//     *
//     * @var array
//     */
//    public static $rules = [
//        'name' => 'required',
//        'picture' => 'required',
//    ];
    public function hasPicture(){
        return  (empty($this->picture)) ? true : false;
    }
}
