<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Broadcast;
use Flash;
use App\Libraries\Firebase;
use App\Libraries\Push;
use App\User;
use Illuminate\Support\Facades\DB;
class BroadcastController extends Controller
{
    //
    protected $aArtArtiicle;
    
    public function index(){
        $aBroadcast = Broadcast::All();  

        return view('backend.broadcast.index')->with(
            'model', $aBroadcast
        );
    }

    public function create(Broadcast $model){
        $view = [
            'model' => $model
        ];

        return view('backend.broadcast.add', $view);
    }

    public function store(Request $request, Broadcast $model){
		# set validation rules
        $rules = [
            // 'date' => [
            //     'required',
            //     'date'
            // ],
            // 'name' => [
            //     'required'
            // ],
            // 'picture' => [
            //     'image',
            //     'required'
            // ]
        ];

        # run validator
        $validator = $request->validate($rules);

        $model->title           = $request->title;
        $model->image_url       = $request->picture;
        $model->url_link        = $request->url_link;
        $model->short_message   = $request->short_message;

        
        // upload and save file path of picture
        $file_path = 'uploads/';

        if($request->picture)
        {    $model->picture = $file_path . $request->file('picture')->getClientOriginalName();
            $request->file('picture')->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
        }

        $user = User::where('firebase_token', '<>','')
        ->whereNotNull('firebase_token')
        ->get();

        $tokens =array();
        foreach($user as $token){
            $tokens[] = $token->firebase_token;
        } 

        
        $message = array (
            "title"     => $request->title,
            "body"      => $request->short_message,
            "badge"     => 1,
            "show_in_foreground"    => true
        );
        
        $notifData = [];
        if ($request->url_link) {
            $notifData['target_link'] = $request->link;
        }
        
        if ($request->image_url) {
            $notifData['image_link'] = $request->image_url;
        }else{
            $notifData['image_link'] = secure_asset('logo.png');
        }
        
        if (count($notifData)) {
            $message['data'] = $notifData;
        }

        if ($model->save()) {
            $this->send($tokens, $message);
            return $this->saved();
        }

    }

    public function sendNotif(Request $request){
        $user = User::where('firebase_token', '<>','')
        ->whereNotNull('firebase_token')
        ->get();

        $tokens =array();
        foreach($user as $token){
            $tokens[] = $token->firebase_token;
        } 

        
        $message = array (
            "title"     => $request->title,
            "body"      => $request->short_message,
            "badge"     => 1
        );
        
        $notifData = [];
        if ($request->url_link) {
            $notifData['target_link'] = $notif->link;
        }
        
        if ($request->image_url) {
            $notifData['image_link'] = $notif->image_url;
        }
        
        if (count($notifData)) {
            $message['data'] = $notifData;
        }
        
        //dump($tokens, $message);
        $this->send($tokens, $message);

    }

    public function send($tokens, $message){
        $url = 'https://fcm.googleapis.com/fcm/send';

        $key="AAAAy-1vrrQ:APA91bEtrpGFEhyXVyKaTIS3DxM_WZe9ja1KiJtkuHEFp-YEIxn_5J2cAtKg5Cbd06oPCX441RzEWrmiYpzzOExZ16pldAUyRN3y7fM44mfcxCSvT6ZTbqISoqhVUcmGyMhXEvqUQaiG";
        
        $fields = array (
            'registration_ids'  => $tokens,
            'notification'     => $message
        );

        $headers = array (
            'Authorization:key= ' . $key,
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        $result = curl_exec($ch);
        if($result === FALSE)
            die('Curl failed: ' . curl_error($ch));
            
        curl_close($ch);
        
        return $result;
    }

    public function destroy($id){

        $Broadcast = Broadcast::find($id);

        if($Broadcast){
            //unlink($Broadcast->picture);
            $Broadcast->delete();
            Flash::success('Broadcast deleted successfully.');

            return redirect(route('broadcast.index'));
        }else{
            Flash::error('Broadcast not found');

            return redirect(route('broadcast.index'));
        }

    }

    public function edit($id){
        
        $Broadcast = Broadcast::find($id);

        return view('backend.broadcast.edit')->with(
            'model', $Broadcast
        );
    }

    public function update($id, Request $request){
        $Broadcast = Broadcast::findOrFail($id);

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

        $Broadcast->index       = $request->index;
        $Broadcast->name       = $request->name;
        $Broadcast->url_link    = $request->url_link;
        $Broadcast->url_link_2    = $request->url_link_2;

        if($request->hasFile('picture')){
            //unlink($Broadcast->picture);
            $file = $request->file('picture');
            $Broadcast->picture     = $file_path . $this->renamed($file->getClientOriginalName());
            $file->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
        }

        
        if ($Broadcast->save()) {
            Flash::success('Broadcast updated.');

            return redirect('Broadcast');
        }
        
    }

    public function show ($id){
        $Broadcast = Broadcast::find($id);

        return view('backend.Broadcast.index')->with(
            'model', $Broadcast
        );
    }


}