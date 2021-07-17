@extends('admin/layout.master')
@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Library List</h4>
                        <div class="add-product">
                            <a href="/admin/event/">Back</a>
                        </div>
                        <div class="asset-inner">
                            <table id="data-tables">
                                <tr>
                                    <th>Event Name:</th>
                                    <td>{{$event->eventName}}</td>
                                </tr>
                                <tr>
                                    <th>Band Name</th>
                                    <td>{{$event->bandNames}}</td>
                                </tr>
                                <tr>
                                    <th>Start Event:</th>
                                    <td>{{$event->startDate}}</td>
                                </tr>
                                <tr>
                                    <th>End Event:</th>
                                    <td>{{$event->endDate}}</td>
                                </tr>

                                <tr>
                                    <th>Portfolio:</th>
                                    <td>{{$event->portfolio}}</td>
                                </tr>

                                <tr>
                                    <th>Price:</th>
                                    <td>{{$event->ticketPrice}}</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
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
                                </tr>
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
            $('#myTable').DataTable();
        });
    </script>
@endsection

