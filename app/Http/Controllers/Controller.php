<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function saved($param = null, $message = 'Data saved')
    {
        if ($param == null)
            return redirect()->route(Route::currentRouteName())->with('success', $message);

        return redirect()->route(Route::currentRouteName(), $param)->with('success', $message);
    }

    protected function renamed($text){
        
        $converted = strtolower(Str::kebab($text));

        return $converted;
        //return preg_replace('/[^A-Za-z0-9\-]/', '', $converted); 

        // $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        // $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     
        // return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
    }
}
