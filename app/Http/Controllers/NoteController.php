<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function __construct() {

        $this->middleware(['auth']);
         
    }
    
 public function index() 
 {
     return view('notes.index');
 }

 public function store(Request $request) 
 {
     
    $this->validate($request, [
        'title' => 'required',
        'body'=> 'required',
    ]);

    $request->user()->notes()->create([
        'title' => $request->title,
        'body' => $request->body,
    ]);

    return back()->with('success', 'your note saved'); 

}
}
