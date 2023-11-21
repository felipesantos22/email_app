<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        Mail::to('felipevs2018@gmail.com')->send(new Contact([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'mensagem' => $request->input('mensagem'),
        ]));
        var_dump('email sent');
    }

   
}
