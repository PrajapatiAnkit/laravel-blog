<?php

namespace App\Http\Controllers;

use App\Student;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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



        $student = new Student();
        $student->firstname =  $request->input('firstname');
        $student->lastname =  $request->input('lastname');
        $student->phone =  $request->input('phone');
        $student->department =  $request->input('department');
        $student->save();

       // $request->session()->flash('message','success');
        return redirect()->route('addStudent');
    }

    public function editStudent($id)
    {
        $studentDetail = Student::find($id);
        //print_r($studentDetail);
        return view('student.editstudent',['studentDetail' => $studentDetail]);
    }

    public function updateStudent(Request $request)
    {
        $validation  = $request->validate([
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phone' => 'required|numeric',
            'department' => 'required'
        ]);


        /*$student = new Student();

        $student->firstname =  $request->input('firstname');
        $student->lastname =  $request->input('lastname');
        $student->phone =  $request->input('phone');
        $student->department =  $request->input('department');
        $student->editId =  $request->input('editId');*/

        $updateData = array(
          'firstName' => $request->input('firstname'),
          'lastName' => $request->input('lastname'),
          'phone' => $request->input('phone'),
          'department' => $request->input('department'),
        );


        DB::table('blog_students')
            ->where(['id'=>$request->input('editId')] )
            ->update($updateData);

       // $request->session()->flash('message','success');
        return redirect()->route('viewStudent');
    }

    public function viewStudent()
    {
        $student = new Student();
        $studentList = Student::all();
        return view('student.viewstudent',['studentList'=>$studentList]);
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();

      //  $_SESSION['message'] = 'Student deleted !';
        return redirect()->route('viewStudent');
    }
}
