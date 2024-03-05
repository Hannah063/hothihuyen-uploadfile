<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function getStudents(){
        $students = Student::all();
        return $students;
    }
    function showStudents(){
        $students = Student::all();
        return view('students')->with(['students'=>$students]);;
    }
    function getStudentById($id){
        $students = Student::all();
        $student = null;
        for ($i=0; $i < count($students); $i++) { 
            if ($students[$i]['id'] == $id) {
                $student = $students[$i];
                return $student;
            }
        }
        return '<h1>Student not found</h1>';
    }
}
