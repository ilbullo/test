<?php

namespace Ilbullo\Test\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index() {
        return response()->json(['message' => "ciao"]);
    }

    public function contact() {}
}
