<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regisLeaderController extends Controller
{
    public function createLeader(HeroRequest $request){
        Hero::create([
            'leaderName' => $request->leaderName,
            'email' => $request->email,
            'num' => $request->num,
            'idLine' => $request->idLine,
            'gitId' => $request->gitId,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'uploadCV' => $request->uploadCV,
        ]);

        return redirect(route('index'));
    }

}
