<?php

namespace App\Http\Controllers;

use DB;
use App\Notification;
use Illuminate\Http\Request;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function mail_page(){

        $message = DB::table('messages')
            ->orderBy('id','DESC')
            ->get();

        return view('admin.messages',[
            'messages' =>$message
        ]);
    }

    public function is_seen(Request $request){

        $message_id = $request->message_id;

        $affected = DB::table('messages')
            ->where('message_id', $message_id)
            ->update([
                'is_ssen'  => $request->status
            ]);

        if($affected){

            $message = DB::table('messages')->get();

            return redirect('/mails');
        }
    }


    public function new_notification(){

    }

}
