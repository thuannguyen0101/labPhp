@extends('admin/layout.master')
@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                @if(session()->get('status'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> {{ session()->get( 'event' ) }}
                        {{ session()->get( 'status' ) }}
                    </div>
                @endif
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Library List</h4>
                        <div class="add-product">
                            <a href="{{route('event_create')}}">Add Event</a>
                        </div>
                        <div class="">
                            <table id="example" class="display" style="width: 100%">
                                <thead>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Band Name</th>
                                    <th>Start Event</th>
                                    <th>End Event</th>
                                    <th>Portfolio</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $event)
                                    <div class="modal fade" id="DeleteEVENT{{$event->id}}" tabindex="-1"
                                         role="dialog" aria-labelledby="deleteUser"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete
                                                        <b>Event {{$event->eventName}}</b>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-primary"
                                                            data-dismiss="modal">Cancel
                                                    </button>
                                                    <a href="{{route('event_delete',$event->id)}}"
                                                       class="btn btn-primary">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <tr>
                                        <td>{{$event->eventName}}</td>
                                        <td>{{$event->bandNames}}</td>
                                        <td>{{$event->startDate}}</td>
                                        <td>
                                            {{$event->endDate}}
                                        </td>
                                        <td>{{$event->portfolio}}</td>
                                        <td>{{$event->ticketPrice}}</td>
                                        @switch($event->status)
                                            @case($event->status ==1)
                                            <td>The event is happening</td>
                                            @break
                                            @case($event->status ==2)
                                            <td>Upcoming events</td>
                                            @break
                                            @case($event->status ==3)
                                            <td>The event took place</td>
                                            @break
                                            @case($event->status ==0)
                                            <td>The event has been postponed</td>
                                            @break
                                        @endswitch

                                        <td>
                                            <a href="{{route('event_update',$event->id)}}"
                                               class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                            <a type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                               data-target="#DeleteEVENT{{$event->id}}"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            <a href="{{route('event_detail',$event->id)}}" type="button" class="btn btn-sm btn-primary" ><i
                                                    class="fa fa-info" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extraJs')
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endsection
