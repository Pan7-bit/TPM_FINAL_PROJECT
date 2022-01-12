<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class questionController extends Controller
{
    public function getHomePage(){
        return view('index');
    }

    public function createQuestion(Request $request){

        Question::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect(route('getHomePage'));
    }


}
