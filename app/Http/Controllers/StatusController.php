<?php

namespace App\Http\Controllers;

use App\Status;
use App\StatusMessages;

class StatusController extends Controller {

    public function showStatus() {
        return view("status", ['services' => Status::all(), 'messages' => StatusMessages::all()]);
    }

}