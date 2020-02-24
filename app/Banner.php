<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $table = 'banner';

    public static $rule = [
        'picture'   => 'required',
        //'url_link'  => 'required'
    ];
}
