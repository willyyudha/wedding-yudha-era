<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Session;

class ComentController extends Controller
{

    public function index(){
        $comment = Comment::all();
        return view('viewcoment', compact('comment',$comment));
    }

    public function store(Request $r, $name){
        if(is_null($r->comment)){
            return redirect()->route('guest.name.linkedins' , ['name'=>$name]);
        }else{
            Comment::create([
                'comment' => $r -> comment,
                'by' => $name
            ]);
            session::flash('success' , 'Comment succesfully sended');
            return redirect()->route('guest.name.linkedins' , ['name'=>$name]);
        }
    }
}
