@extends('admin.layout.master')
@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Create Apartment</a></li>

                        </ul>

                        <style>
                            .errorMsg{
                                color: red;
                            }
                        </style>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <table id="example" class="display" style="width: 100%">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Address</th>
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
                                                            <td>{{$event->ticketPrice}}$</td>
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
                                                @foreach($data as $list)
                                                <div class="card" style="width: 200px">
                                                    <img class="card-img-top" src="{{$list->avatar}}" width="180" height="120" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$list->apartmentName}}}</h5>
                                                        <p class="card-text">{{$list->general_information}}<br>
                                                            {{$list->detailed_information}}<br>
                                                            {{$list->status}}<br>
                                                        </p>
                                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
