<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donante;

class TestController extends Controller
{
    public function view($id)
    {
        $donante = Donante::find($id);
        dd($donante);
    }
}
