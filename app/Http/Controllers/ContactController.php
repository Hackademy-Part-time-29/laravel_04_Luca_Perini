<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function view(){
        return view('contact');
    }

    public function save(Request $request){

        if($request->name==null || $request->surname==null || $request->email==null){
            return redirect()->back()->with(['error'=>'compila correttamente i campi!']);
        }

        return redirect(route('thankYou'));
    }

public function thankYou(){
        return view('thank-you');
}

}
