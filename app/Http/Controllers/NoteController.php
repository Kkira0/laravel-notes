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
        $note = Note::find($id);
        return view('notes.show', ['notes' => $note]);
    }
 

    public function store(Request $request){
        \Log::debug($request);

        $data = [
            'title' =>$request->title,
            'content' =>$request->content
        ];

        Note::create($data);


        return redirect('/notes');

    }

    public function edit($id){
        $note = Note::find($id);
        return view ('notes.edit', ['note'=>$note]);
    
    }

    public function update(Request $request, $id){
        $note = Note::find($id);
        $data = [
            'title' =>$request->title,
            'content' =>$content->content
        ];

        $note ->update($data);
        return redirect('/notes');
    }

    public function delete($id){
        $note = Note::find($id);

        if ($note) {
            $note->delete();
        }
    
        return redirect('/notes');
    }

}
