@extends('admin.master.file')

@section('title')
    Dashboard || Product
@endsection

@section('content')
    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Create Product: <span style="color:orangered">Step 1</span> &nbsp;
                    <span class="text-success">{{Session::get('success')}}</span>
                    <span class="text-danger">{{Session::get('error')}}</span>
                </h4>
            </div>
            <div class="col-sm-5 col-6 text-right m-b-30">
                <a class="btn" href="{{url('manageProduct')}}" style="border: 1px solid">
                    <i class="fa fa-edit"></i> Manage-Product
                </a>
            </div>
        </div>
        <form method="POST" action="{{ route('createProduct') }}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Product Basic Info</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Vehicle Name/Model<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="product_name"
                                       placeholder="Enter product name"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('product_name') ? $errors ->first('product_name') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Product/Vehicle Id<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="product_id"
                                       placeholder="Enter product id"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('product_id') ? $errors ->first('product_id') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Product Category<span class="text-danger">*</span></label>
                                <select class="form-control" type="text" name="category_name" required
                                        style="border:1px solid">
                                    <option value="">Select</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->category_name}}#{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Production Date/Year<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="production_year"
                                       placeholder="Enter production year/date"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('production_year') ? $errors ->first('production_year') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Product/Vehicle Weight<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="product_weight"
                                       placeholder="Enter vehicle weight"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('product_weight') ? $errors ->first('product_weight') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mileage<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="product_mileage"
                                       placeholder="Enter vehicle mileage"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('product_mileage') ? $errors ->first('product_mileage') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fuel Type<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="fuel_type"
                                       placeholder="Enter fuel type"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('fuel_type') ? $errors ->first('fuel_type') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Product/Vehicle Color<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="product_color"
                                       placeholder="Enter vehicle color"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('product_color') ? $errors ->first('product_color') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>CCM<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="product_ccm"
                                       placeholder="Enter CCM"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('product_ccm') ? $errors ->first('product_ccm') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Condition<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="product_condition"
                                       placeholder="Enter Condition"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('product_condition') ? $errors ->first('product_condition') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Smoking Status<span class="text-danger">*</span></label>
                                <select class="form-control" type="text" name="smoking_status" required
                                        style="border:1px solid">
                                    <option value="">Select</option>
                                    <option value="Little Smoker">Little Smoker</option>
                                    <option value="Highly Smoker">Highly Smoker</option>
                                    <option value="Non Smoker">Non Smoker</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>History Status<span class="text-danger">*</span></label>
                                <select class="form-control" type="text" name="history_status" required
                                        style="border:1px solid">
                                    <option value="">Select</option>
                                    <option value="History unclear">History unclear.</option>
                                    <option value="History Unknown">History Unknown.</option>
                                    <option value="Full History">Full History.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Product/Vehicle Price<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="product_price"
                                       placeholder="Enter vehicle price"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('product_price') ? $errors ->first('product_price') : '' }}</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Preliminary Report</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Preliminary Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="5" cols="30" placeholder="Write something..."
                                          name="pre_description" required style="border:1px solid"></textarea>
                                <span
                                    class="text-danger">{{ $errors -> has('pre_description') ? $errors ->first('pre_description') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Accidental Issue<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="accidental_issue" value="Accident Free."
                                       placeholder="Enter accidental issue."
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('accidental_issue') ? $errors ->first('accidental_issue') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mileage Issue<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="mileage_issue" value="The mileage is real."
                                       placeholder="Enter mileage issue"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('mileage_issue') ? $errors ->first('mileage_issue') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Servicing Issue/History<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="service_issue"
                                       value="Full Service History."
                                       placeholder="Enter servicing issue"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('service_issue') ? $errors ->first('service_issue') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Any Other Issue</label>
                                <input class="form-control" type="text" name="other_issue"
                                       placeholder="Enter other issue"
                                       style="border:1px solid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Terms And Offers</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 1</label>
                                <input class="form-control" type="text" name="term_1"
                                       placeholder="Enter term"
                                       style="border:1px solid">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 2</label>
                                <input class="form-control" type="text" name="term_2"
                                       placeholder="Enter term"
                                       style="border:1px solid">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 3</label>
                                <input class="form-control" type="text" name="term_3"
                                       placeholder="Enter term"
                                       style="border:1px solid">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 4</label>
                                <input class="form-control" type="text" name="term_4"
                                       placeholder="Enter term"
                                       style="border:1px solid">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 5</label>
                                <input class="form-control" type="text" name="term_5"
                                       placeholder="Enter term"
                                       style="border:1px solid">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 6</label>
                                <input class="form-control" type="text" name="term_6"
                                       placeholder="Enter term"
                                       style="border:1px solid">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 7</label>
                                <input class="form-control" type="text" name="term_7"
                                       placeholder="Enter term"
                                       style="border:1px solid">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 8</label>
                                <input class="form-control" type="text" name="term_8"
                                       placeholder="Enter term"
                                       style="border:1px solid">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 9</label>
                                <input class="form-control" type="text" name="term_9"
                                       placeholder="Enter term"
                                       style="border:1px solid">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Point 10</label>
                                <input class="form-control" type="text" name="term_10"
                                       placeholder="Enter term"
                                       style="border:1px solid">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Publication Status<span class="text-danger">*</span></label>
                                <select class="form-control" type="text" name="publication_status" required
                                        style="border:1px solid">
                                    <option value="">Select</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-dark form-control" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
