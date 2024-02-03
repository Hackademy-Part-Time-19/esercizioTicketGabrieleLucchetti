<?php

namespace App\Http\Controllers;

use App\Mail\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketsController extends Controller
{

    private $tickets = [
        ['id' => '0', 'name' => 'Geronimo Stilton', 'email' => 'geronimo@gmail.com', 'status' => 'Aperto', 'description' => 'Tickets di prova'],
        ['id' => '1', 'name' => 'Naruto', 'email' => 'sasuke@gmail.com', 'status' => 'Aperto', 'description' => 'Tickets di prova2'],
        ['id' => '2', 'name' => 'Sasuke', 'email' => 'naruto@gmail.com', 'status' => 'Aperto', 'description' => 'Tickets di prova3'],
        ['id' => '3', 'name' => 'Kurama', 'email' => 'imagod@gmail.com', 'status' => 'Aperto', 'description' => 'Tickets di prova4'],
        ['id' => '4', 'name' => 'Luffy', 'email' => 'hofame@gmail.com', 'status' => 'Aperto', 'description' => 'Tickets di prova5'],
        ['id' => '5', 'name' => 'Zoro', 'email' => 'katana@gmail.com', 'status' => 'Aperto', 'description' => 'Tickets di prova6'],
    ];
    public function index()
    {
        return view('tickets', ['tickets' => $this->tickets]);
    }

    public function show($id){
        return view('show', ['ticket' => $this->tickets[$id],['id' => $id]]);
    }

    public function send(Request $request){
        $ticket=$this->tickets[$request->id];
        
        Mail::to($ticket['email'])->send(new Answer($ticket['name'], $request->answer));
      
       
    }
}
    
