<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Status;
use App\StatusMessages;

use Illuminate\Http\Request;

class SupportController extends Controller {
 
    public function showSupport() {
        return view("support", ['Tickets' => Ticket::orderBy('id', 'desc')->get()]);
    }

    public function showStatus() {
        return view("status", ['services' => Status::all(), 'messages' => StatusMessages::all()]);
    }

    public function createTicket(Request $request) {
        Ticket::create(['user_id'=>1,'text'=>$request->input('text'),'resp'=>'', 'created'=>time(),'updated'=>time(), 'status'=>0]);
        return response()->json([
            'result'=>'success',
            'message'=>'Ticket criado com sucesso. Aguarde a resposta de algum administrador.'
        ]);
    }

    public function updateTicket(Request $request) {
        Ticket::where('id', $request->input('id'))->update(['text' => $request->input('text'), 'updated'=>time(), 'status'=>0]);
        return response()->json([
            'result'=>'success',
            'message'=>'Ticket atualizado com sucesso. Aguarde a resposta de algum administrador. #' . $request->input('id'),
            'updated'=>date('d/m/Y H:i', time())
        ]);
    }
    
}