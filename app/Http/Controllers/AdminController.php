<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function signIn(Request $request){

        $adminTable=new Admin();
        $adminTable->email=$request->email;
        $hashed_password=sha1($request->password);

        return $request->email;
        

    }

    public function signUp(Request $request){

        $adminTable=new Admin();

        $adminTable->first_name=$request->first_name;
        $adminTable->last_name=$request->last_name;
        $adminTable->email=$request->email;
        $hashed_password=sha1($request->password);
        $adminTable->password=$hashed_password;
        $adminTable->save();

        return redirect()->route('home-page')->with('success', 'Sign Up success !');

        
        
        

    }


}
