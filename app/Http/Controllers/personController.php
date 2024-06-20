<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personController extends Controller
{
    public function index(){
        $data = [
            'name' => 'emerson',
            'age' => '12',
            'hobby' => 'watching documentary'
        ];
        return view('person',['details'=>$data]);
    }
}
