<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index(){
        $students = student::all();
        return view('student.index', ['student' => $students]);
        
    }
    public function create(){
        return view('student.create');
    }
    public function stores(Request $request){
        $data=$request->validate([
            'qrcode'=>'required',
            'subject'=>'required',
            'teacher'=>'required',
            'month'=>'required',
            'year'=>'required',
            'uses'=>'nullable',
            'usestoday'=>'nullable',
        ]);

        $newStudent=student::create($data);
        return redirect(route('student.index'));

}
public function edit(student $student){
    return view('student.edit', ['student' => $student]);
}
public function update(student $student, Request $request){
    $data = $request->validate([
        'qrcode'=>'required',
        'subject'=>'required',
        'teacher'=>'required',
        'month'=>'required',
        'year'=>'required',
        'uses'=>'nullable',
        'usestoday'=>'nullable',
       ]);

    $student->update($data);

    return redirect(route('student.index'))->with('success', 'student Updated Succesffully');

}


public function destroy(student $student){
    $student->delete();
    return redirect(route('student.index'))->with('success', 'student deleted Succesffully');
}
}

