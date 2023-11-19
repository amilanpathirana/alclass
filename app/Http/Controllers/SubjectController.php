<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;

class SubjectController extends Controller
{
    //
    public function index(){
        return view('subject.index');
    }

    public function create(){
        return view('subject.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'teachersname'=>'required',
            'subject'=>'required',
        ]);

        $newSubject=subject::create($data);
        return redirect(route('subject.index'));
    }
}
