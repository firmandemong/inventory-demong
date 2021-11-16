<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(){
        return view('person.index');
    }

    private $code = '190313012';
    private $name = 'Silver Farhanny Syifa';

    public function sendData() {
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));

       
    }
    public function add()
    {
        return view('person.add');
    }

    public function addProcess(Request $request)
    {
        $this->validate($request,[
            'person_name' =>''
        ])
    }
}
