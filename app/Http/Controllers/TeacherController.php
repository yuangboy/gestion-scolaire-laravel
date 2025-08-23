<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
    public function createTeacher(Request $request){
        // creation d'un professeur

        $subject=Subject::find(1);
        $user=User::find(1);
        $teacher=new Teacher();
        $teacher->phone="068562015";
        $teacher->address="451 rue okoyo";
        $teacher->subject_id=$subject->id;
        $teacher->user_id=$user->id;
        $teacher->save();
        return response()->json($teacher);


    }
}
