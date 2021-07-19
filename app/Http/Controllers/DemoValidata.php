<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventDemoRequest;
use Illuminate\Http\Request;

class DemoValidata extends Controller
{
    public function create(){
        return view('admin/demo/form',[
            'title'=>'test demo validate'
        ]);
    }
    public function store (EventDemoRequest $eventDemoRequest){
        $data = $eventDemoRequest->validated();
        dd($data);
    }
}
