<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;
use App\Models\Note;

class NoteController extends Controller
{

    public function index(){

        $notes = Note::all();


        return view('notes.index', ['allNotes' => $notes]);
    }
}
