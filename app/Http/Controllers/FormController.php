<?php

namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function Diplayform(){
        return view("forms");
    }

    function SaveFrom(Request $request){
        $email = $request->post('email');
        $name = $request->post('name');        

        $person = new People();
        $person->name = $name;
        $person->email = $email;
        $person->save();
        return redirect()->route("form.create");
    }
}
