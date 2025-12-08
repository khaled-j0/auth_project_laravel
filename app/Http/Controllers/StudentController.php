<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function createStudent(Request $request){
        $student = new StudentModel(
            $request->input('name'),
            $request->input('age'),
            $request->input('major'),
        );

        return response()->json(['message'=>"This student created successfully",
        'name' => $student->getName(),
        'age' => $student->getAge(),
        'major' => $student->getMajor()
    ]);
    }

    public function updateMajor(Request $request){
        $student = new StudentModel("aseel",23,'Software engineering');
        $student->setMajor($request->input('major'));

        return response()->json(['message' => 'Major updated',
        'new_major'=>$student->getMajor()
    ]);
}
}
