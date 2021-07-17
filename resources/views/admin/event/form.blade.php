@extends('admin/layout.master')
@section('content')
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Create Event</a></li>

                        </ul>
                        <div class="add-product">
                            <a href="{{route('event_list')}}">Back</a>
                        </div>
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
                                                <form method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                    @csrf
                                                    <div class="row">

                                                        <div >
                                                            <div class="form-group">
                                                                <input name="eventName" type="text" class="form-control" value="{{$data ? $data->eventName: ''}}" placeholder="Even Name" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="bandNames" value="{{$data ? $data->bandNames: ''}}" class="form-control" placeholder="Band Names" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="date" name="startDate" value="{{$data ? $data->startDate: ''}}" class="form-control" placeholder="Start Date" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="date" name="endDate" value="{{$data ? $data->endDate: ''}}" class="form-control" placeholder="End Date" >
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="portfolio" value="{{$data ? $data->portfolio: ''}}" class="form-control" placeholder="Portfolio" value="01962067309">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" name="ticketPrice" value="{{$data ? $data->ticketPrice: ''}}" class="form-control" placeholder="Price" >
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="status" class="form-control">
                                                                    <option disabled selected hidden>Status</option>

                                                                    <option value="1" {{ $data && $data->status == 1 ? 'selected' : ''}}  >The event is happening</option>
                                                                    <option value="2" {{ $data && $data->status == 2 ? 'selected' : ''}}>Upcoming events</option>
                                                                    <option value="3" {{ $data && $data->status == 3 ? 'selected' : ''}}>The event took place</option>
                                                                    <option value="0" {{ $data && $data->status == 0 ? 'selected' : ''}}>The event has been postponed</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
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
@section('extraJs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script>
        $(function () {
            $('#demo1-upload').validate({
                rules: {
                    eventName: {
                        required: true,
                        maxlength: 255,
                    },
                    bandNames: {
                        required: true,
                        maxlength: 255,
                    },
                    startDate: {
                        required: true
                    },
                    endDate: {
                        required: true
                    },
                    portfolio: {
                        required: true
                    },
                    ticketPrice: {
                        required: true
                    },
                    status: {
                        required: true,
                    },
                },
                messages: {
                    eventName: {
                        required: 'Please enter name',
                        maxlength: 'Name is limited to 255 characters',
                    },
                    bandNames: {
                        required: 'Please enter band names',
                    },
                    startDate: {
                        required: 'Please select a start date'
                    },
                    endDate: {
                        required: 'Please select a end date'
                    },
                    portfolio: {
                        required: 'Please enter portfolio',
                    },
                    ticketPrice: {
                        required: 'Please enter ticket price',
                    },
                    code: {
                        required: 'Please enter Code',
                    },
                    status: {
                        required: 'Please select a status'
                    },
                },
                errorClass: 'errorMsg',
                errorPlacement: function (error, element) {
                    error.appendTo(element.parents('.form-group'));
                }
            })
        })
    </script>
@endsection



