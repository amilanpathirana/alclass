<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request){
        $data=$request->validate([
            'issued_at'=>'required',
            'qrcode'=>'required',
            'subject'=>'required',
            'teacher'=>'required',
            'month'=>'required',
            'year'=>'required',
            'uses'=>'required',
            'usestoday'=>'required',
        ]);

        $newStudent=student::create($data);
        return redirect(route('student.index'));

}

}

