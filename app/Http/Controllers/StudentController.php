<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolClass;
use App\Models\User;
use App\Models\Guardian;
use App\Models\Student;

class StudentController extends Controller
{
    //

    public function createStudent(Request $request){
        // creation d'un etudiant
        // $class=SchoolClass::find(3);
        // $user=User::find(11);
        // $guardian=Guardian::find(1);

        // $student= new Student();
        // $student->matricule="M001";
        // $student->gender="male";
        // $student->date_of_birth="2028-06-06";
        // $student->class_id=$class->id;
        // $student->user_id=$user->id;
        // $student->guardian_id=$guardian->id;
        // $student->save();

        // return response()->json($student);


         $class=SchoolClass::find(3);
        $user=User::find(11);
        $guardian=Guardian::find(1);

        $student= new Student();
        $student->matricule="M00" . rand(2, 15);
        $student->gender="male";
        $student->date_of_birth="2028-06-06";
        $student->class_id=$class->id;
        $student->user_id=$user->id;
        $student->guardian_id=$guardian->id;
        $student->save();

        return response()->json($student);

      

    }
}
