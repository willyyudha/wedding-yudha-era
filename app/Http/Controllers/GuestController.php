<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
     public function index(){
        $guest = Guest::all();
        return view('admin' , compact('guest' , $guest));
     }

     public function create(){
        return view('createguest');    
     }

     public function store(Request $r){
        Guest::create([
            'name' => $r->name,
            'presence' => 0
        ]);

        return redirect()->route('index.admin');
     }

     public function delete($id){
         Guest::where('id',$id)->delete();
         return redirect()->route('index.admin');
     }

     public function linkedins($name){
        $guest = Guest::where('name',$name)->get();
        return view('home', compact('guest',$guest));
     }
}
