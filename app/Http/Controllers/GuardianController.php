<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Guardian;
use App\Models\User;

class GuardianController extends Controller
{
    // Creation d'un parent


    public function createGuardian(Request $request) {

        // Methode 1 (creation d'un parent)

        // $guardian = Guardian::create([
            
        // ]);

        // Methode 2  (creation d'un parent)


        // phone relation_to_student	user_id	

        $user=User::find(10);

        $guardian=new Guardian();
        $guardian->phone="067896356";
        $guardian->relation_to_student="maman";
        $guardian->user_id=$user->id;

        $guardian->save();

        return response()->json($guardian);
        
    }





}
