<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function view(){
        return view('contact');
    }

    public function save(Request $request){

        if($request->name==null || $request->surname==null || $request->email==null){
            return redirect()->back()->with(['error'=>'compila correttamente i campi!']);
        }

        $mail= new ContactMail($request->name,$request->surname, $request->surname);
        Mail::to('mail@mail.it')->send($mail);
        return $mail->render();

        return redirect(route('thank-you'));
    }

public function thankYou(){
        return view('thank-you');
}

}
