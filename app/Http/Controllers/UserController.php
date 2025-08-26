<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller

// Premire methode
{



    











    // public function getAllUsers(Request $request) {

    //     $users = User::all();
    //     dd($users);
    //     return response()->json($users);
    // }

    // Deuxieme methode (injection de dependance)

    public function getAllUsers(Request $request,User $users) {

        $users = $users->all();
        // dd($users);
        return response()->json($users);

    }

    public function createUser(Request $request) {
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);
        $user = User::create([
            'name' => "itoua serge",
            'email' => "itoua@gmaiL.com",
            'password' =>"1234"
        ]);
         return response()->json($user);
    }

    //parametre de route
    //exemple: http://localhost:8000/api/users/1

    public function getUserById(Request $request,$id) {
        $user = User::find($id);
        return response()->json($user);
        // dd($user);
    }

    public function deleteUser(Request $request,$id) {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'message' => 'User deleted successfully',
            'data' => $user
        ]);
    }

    public function updateUser(Request $request,$id) {
        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;

        $user = User::find($id);
        $user->name = "Bradley Barcola";
        $user->email = "barcola@gmaiL.com";
        $user->password ="1234";
        $user->save();
        return response()->json($user);
    }




    public function searchGuardian(){

     // Rechercher un parent associer a un utilisateur  (affiche les informations du parent)
       $user=User::findOrFail(15);
    //    $guardian=$user->guardian;
    
       //equivaut à cette recherche
       //$guardian=Guardian::find(2);


//Rechercher un utilisateur associer a un parent (affiche les informations de l'utilisateur associer au parent)
      
$guardian = User::with('guardian')->find(10);

       return response()->json($guardian);
    }


}
