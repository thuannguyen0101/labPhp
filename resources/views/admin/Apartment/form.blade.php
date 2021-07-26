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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
                                                                <label>Apartment Name</label>
                                                                <input name="apartmentName" type="text" class="form-control"  placeholder="Enter Apartment Name..." >
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" name="address"  class="form-control" placeholder="Enter Address ..." >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input type="number" name="price" class="form-control" placeholder="Price Apartment" >
                                                            </div>

                                                            <div class="form-group">
                                                                <label>General information</label>
                                                                <input type="text" name="general_information"  class="form-control" placeholder="general information ...." >
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Detailed information</label>
                                                                <input type="text" name="detailed_information" class="form-control" placeholder="detailed information ..." >
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Avatar</label>
                                                                <input type="text" name="avatar"  class="form-control" placeholder="avatar ..." >
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                <select name="status" class="form-control">
                                                                    <option disabled selected hidden></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
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
