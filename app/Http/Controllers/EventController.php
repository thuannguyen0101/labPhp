<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class EventController extends Controller
{

    public function index()
    {
        $data = Event::all();
        return view('admin/event/list',[
            'title'=>'List Events',
            'data'=>$data
        ]);
    }


    public function create()
    {
        $date = Carbon::now()->addDays(+1)->format("Y-m-d");
        return view('admin.event.form',[
            'title'=>'Create Event Form',
            'data'=>null,
            'date'=>$date
            ]);
    }


    public function store(EventRequest $request)
    {
        $data = $request->validated();
        $event = new Event();
        $event->fill($data);
        $event->save();
        return redirect()->route('event_list')->with(['status' => 'Create event success', 'title'=>'List Events','event' => $event->eventName]);
    }


    public function show($id)
    {
        $event = Event::find($id);
        return view('admin.event.detail',[
            'title'=>'Event Detail',
            'event'=>$event
        ]);
    }


    public function save(Request $request ,$id)
    {
        $data =  $request->input();
        $event = Event::find($id);
        $event->update($data);
        $event->save();
        return redirect()->route('event_list')->with(['status' => 'Update event success', 'title'=>'List Event','event' => $event->eventName]);


    }


    public function update($id)
    {
        $data = Event::find($id);
        return view('admin.event.form',[
            'title'=>'Create Event Form',
            'data'=>$data
        ]);
    }


    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('event_list')->with(['status' => 'Delete event success', 'title'=>'List Event',  'event' => $event->eventName]);
    }
}
