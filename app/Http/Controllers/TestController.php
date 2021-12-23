<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required',
        ]);
        return $request;
    }
}
