<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{

    public function index(){

        $notes = Note::all();


        return view('notes.index', ['allNotes' => $notes]);
    }

    public function create(){
        return view('notes.create');
    }

    public function show($id){
        $notes = Note::find($id);
        return view('notes.show', ['notes' => $notes]);
    }
 

    public function store(Request $request){
        

        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        Note::create($data);


        return redirect('/notes');

    }

}
