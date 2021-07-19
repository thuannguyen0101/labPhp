@extends('admin.layout.master')
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
                                                                <input name="name" type="text" class="form-control" placeholder=" Name" >
                                                            </div>
                                                            @error('name')
                                                            <div class="text-danger alert alert-danger">{{ $message }}</div>
                                                            @enderror

                                                            <div class="form-group">
                                                                <input type="text" name="email"  class="form-control" placeholder="Email" >
                                                            </div>
                                                            @error('email')
                                                            <div class="text-danger alert alert-danger">{{ $message }}</div>
                                                            @enderror
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



