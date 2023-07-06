<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store() {
        request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'subject'=> 'required',
            'content'=> 'required'
        ],
        [
            'name.required'=> 'Necesito tu nombre'
        ]);
        return "Datos validados";
    }
}
