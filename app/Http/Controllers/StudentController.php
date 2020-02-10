<?php

namespace App\Http\Controllers;

use App\Student;
use Dotenv\Validator;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function addStudent()
    {
        return view('student.addstudent');
    }

    public function saveStudent(Request $request)
    {
        $validation  = $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phone' => 'required|numeric',
            'department' => 'required'
        ]);

        $data = array(
          'firstname' => $request->input('firstname'),
          'lastname' => $request->input('lastname'),
          'phone' => $request->input('phone'),
          'department' => $request->input('department'),
        );

        $student = new Student();
        $student->firstname =  $request->input('firstname');
        $student->lastname =  $request->input('lastname');
        $student->phone =  $request->input('phone');
        $student->department =  $request->input('department');
        $student->save();


    }

    public function viewStudent()
    {
        return view('student.viewstudent');
    }
}
