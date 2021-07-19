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
                                                                <label>Event Name</label>
                                                                <input name="eventName" type="text" class="form-control" value="{{$data ? $data->eventName: ''}}" placeholder="Enter Event Name ..." >
                                                            </div>
                                                            @error('eventName')
                                                            <div class="errorMsg ">{{ $message }}</div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label>End Date</label>
                                                                <input type="text" name="bandNames" value="{{$data ? $data->bandNames: ''}}" class="form-control" placeholder="Enter Band Names ..." >
                                                            </div>
                                                            @error('bandNames')
                                                            <div class="errorMsg ">{{ $message }}</div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label>Start Date</label>
                                                                <input type="date" id="StartDate" name="startDate" value="{{$data ? $data->startDate: ''}}" min="{{$date}}" class="form-control" placeholder="Start Date" >
                                                            </div>
                                                            @error('startDate')
                                                            <div class=" errorMsg ">{{ $message }}</div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label>End Date</label>
                                                                <input type="date" id="EndDate" name="endDate" value="{{$data ? $data->endDate: ''}}" min="{{$date}}" class="form-control" placeholder="End Date" >
                                                            </div>
                                                            @error('endDate')
                                                            <div class=" errorMsg ">{{ $message }}</div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label>Portfolio</label>
                                                                <input type="text" name="portfolio"  value="{{$data ? $data->portfolio: ''}}"  class="form-control" placeholder="Enter Portfolio ..." >
                                                            </div>
                                                            @error('portfolio')
                                                            <div class="  errorMsg ">{{ $message }}</div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input type="number" name="ticketPrice" value="{{$data ? $data->ticketPrice: ''}}" class="form-control" placeholder="Price" >
                                                            </div>
                                                            @error('ticketPrice')
                                                            <div class="  errorMsg ">{{ $message }}</div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                @error('status')
                                                                <div class="  errorMsg ">{{ $message }}</div>
                                                                @enderror
                                                                <select name="status" class="form-control">
                                                                    <option disabled selected hidden></option>

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
        jQuery.validator.addMethod("greaterThan",
            function(value, element, params) {

                if (!/Invalid|NaN/.test(new Date(value))) {
                    return new Date(value) > new Date($(params).val());
                }

                return isNaN(value) && isNaN($(params).val())
                    || (Number(value) > Number($(params).val()));
            },'Must be greater than {0}.');
        $(function () {
            $('#demo1-upload').validate({
                rules: {
                    eventName: {
                        required: true,
                        maxlength: 255,
                        minlength: 20,
                    },
                    bandNames: {
                        required: true,
                        maxlength: 255,
                    },
                    startDate: {
                        required:true
                    },
                    endDate: {
                        greaterThan: "#StartDate"
                    },
                    portfolio: {
                        required: true
                    },
                    ticketPrice: {
                        required: true,
                        min: 1
                    },
                    status: {
                        required: true,
                        min:0,
                        max:3
                    },
                },
                messages: {
                    eventName: {
                        required: 'Please enter name',
                        maxlength: 'Name is limited to 255 characters',
                        minlength: 'name must be at least 20 characters',
                    },
                    bandNames: {
                        required: 'Please enter band names',
                    },
                    startDate: {
                        required: 'Please select a start date'
                    },
                    endDate: {
                        greaterThan: 'end day must be after start date',
                        required: 'Please select a end date'
                    },
                    portfolio: {
                        required: 'Please enter portfolio',
                    },
                    ticketPrice: {
                        required: 'Please enter ticket price',
                    },
                    status: {
                        required: 'Please select a status',

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





