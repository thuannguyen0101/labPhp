<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function list(){
        $data = Apartment::where('status', '>', 0)->paginate(6);
        return view('admin/Apartment/list',[
            'title'=> 'List Apartment',
            'data'=>$data
        ]);
    }
    public function create(){
        return view('admin/Apartment/form',[
            'title'=> 'Create ApartmentRequest'
        ]);
    }
    public function store(ApartmentRequest $request){
        $data = $request->validated();
        $apartment = new Apartment();
        $apartment->fill($data);
        $apartment->save();
        return redirect('admin/apartment/list')->with('title','List Apartment');

    }
}
