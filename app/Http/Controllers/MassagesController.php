<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MassagesController extends Controller{

 public function store (){

    request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subjet' => 'required',
        'mensaje' => 'required|min:10'
    ],
    [
        'name.required'=>'Necesito tu nombre puto'


    ]);

    Mail::to('efraindeleon12@outlook.com');
    return 'Datos validados';
 }
}
