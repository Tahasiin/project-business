@extends('admin.master.file')

@section('title')
    Dashboard || Category
@endsection

@section('content')

    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Product Id: <span style="color:orangered">{{Request()->product_id}}</span> &nbsp;
                    <span class="text-success">{{Session::get('success')}}</span>
                    <span class="text-danger">{{Session::get('error')}}</span>
                </h4>
            </div>
            <div class="col-sm-5 col-6 text-right m-b-30">
                <a class="btn" href="{{url('manageProduct')}}" style="border: 1px solid">
                    <i class="fa fa-cubes"></i> All-Products
                </a>
            </div>
        </div>
        @foreach($products as $product)
            <form method="POST" action="{{route('updateInfo')}}">
                {{csrf_field()}}
                <div class="row" style="font-family: 'Titillium Web', sans-serif;">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <h4>Basic Info</h4>
                            <table style="width: 100% !important">
                                <tr>
                                    <td>Product Name</td>
                                    <td><input name="product_name" value="{{$product->product_name}}"/></td>
                                </tr>
                                <tr>
                                    <td>Product Id</td>
                                    <td><input name="product_id" value="{{$product->product_id}}" readonly/></td>
                                </tr>
                                <tr>
                                    <td>Category Name</td>
                                    <td><input  value="{{$product->category_name}}" readonly/></td>
                                </tr>
                                <tr>
                                    <td>Year/Date</td>
                                    <td><input name="production_year" value="{{$product->production_year}}"/></td>
                                </tr>
                                <tr>
                                    <td>Vehicle Weight</td>
                                    <td><input name="product_weight" value="{{$product->product_weight}}"/></td>
                                </tr>
                                <tr>
                                    <td>Vehicle Mileage</td>
                                    <td><input name="product_mileage" value="{{$product->product_mileage}}"/></td>
                                </tr>
                                <tr>
                                    <td>Fuel Type</td>
                                    <td><input name="fuel_type" value="{{$product->fuel_type}}"/></td>
                                </tr>
                                <tr>
                                    <td>Vehicle Color</td>
                                    <td><input name="product_color" value="{{$product->product_color}}"/></td>
                                </tr>
                                <tr>
                                    <td>Smoking Status</td>
                                    <td><input name="smoking_status" value="{{$product->smoking_status}}"/></td>
                                </tr>
                                <tr>
                                    <td>History Status</td>
                                    <td><input name="history_status" value="{{$product->history_status}}"/></td>
                                </tr>
                                <tr>
                                    <td>Vehicle Price</td>
                                    <td><input name="product_price" value="{{$product->product_price}}"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <h4>Preliminary Info</h4>
                            <table style="width: 100% !important">
                                <tr>
                                    <td colspan="2">Preliminary Description</td>
                                </tr>
                                <tr style="width: 100% !important">
                                    <td colspan="2">
                                    <textarea name="pre_description"
                                              style="width: 100%;height: 170px">{{$product->pre_description}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Accidental Issue</td>
                                    <td><input name="accidental_issue" value="{{$product->accidental_issue}}"/></td>
                                </tr>
                                <tr>
                                    <td>Mileage Issue</td>
                                    <td><input name="mileage_issue" value="{{$product->mileage_issue}}"/></td>
                                </tr>
                                <tr>
                                    <td>Servicing History</td>
                                    <td><input name="service_issue" value="{{$product->service_issue}}"/></td>
                                </tr>
                                <tr>
                                    <td>Any Other Issue</td>
                                    <td><input name="other_issue" value="{{$product->other_issue}}"/></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <h4>Terms and Offers</h4>
                            <table style="width: 100% !important">
                                <tr>
                                    <td>Term 1</td>
                                    <td><input name="term_1" value="{{$product->term_1}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 2</td>
                                    <td><input name="term_2" value="{{$product->term_2}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 3</td>
                                    <td><input name="term_3" value="{{$product->term_3}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 4</td>
                                    <td><input name="term_4" value="{{$product->term_4}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 5</td>
                                    <td><input name="term_5" value="{{$product->term_5}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 6</td>
                                    <td><input name="term_6" value="{{$product->term_6}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 7</td>
                                    <td><input name="term_7" value="{{$product->term_7}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 8</td>
                                    <td><input name="term_8" value="{{$product->term_8}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 9</td>
                                    <td><input name="term_9" value="{{$product->term_9}}"/></td>
                                </tr>
                                <tr>
                                    <td>Term 10</td>
                                    <td><input name="term_10" value="{{$product->term_10}}"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </table>
                            <br>

                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                        <button type="submit" class="btn btn-dark" style="width:100%">Update Info</button>
                    </div>
                </div>
            </form>
            <br>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 1</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_1}} " style="width: 100%;height: 300px;padding: 10px" id="preview1"/>
                            <form method="POST" action="{{route('updateImage')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_1" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview1').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 2</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_2}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview2"/>
                            <form method="POST" action="{{route('updateImage2')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_2" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview2').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 3</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_3}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview3"/>
                            <form method="POST" action="{{route('updateImage3')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_3" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview3').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 4</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_4}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview4"/>
                            <form method="POST" action="{{route('updateImage4')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_4" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview4').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 5</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_5}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview5"/>
                            <form method="POST" action="{{route('updateImage5')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_5" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview5').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 6</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_6}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview6"/>
                            <form method="POST" action="{{route('updateImage6')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_6" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview6').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 7</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_7}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview7"/>
                            <form method="POST" action="{{route('updateImage7')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_7" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview7').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 8</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_8}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview8"/>
                            <form method="POST" action="{{route('updateImage8')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_8" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview8').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 9</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_9}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview9"/>
                            <form method="POST" action="{{route('updateImage9')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_9" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview9').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Preview Image 10</h4>
                        </div>
                        <div class="card-body p-0">
                            <img src="{{asset('')}}{{$product->image_10}} "
                                 style="width: 100%;height: 300px;padding: 10px" id="preview10"/>
                            <form method="POST" action="{{route('updateImage10')}}"
                                  enctype="multipart/form-data"> {{csrf_field()}}
                                <table style="width: 100% !important">
                                    <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                                    <input type="hidden" name="category_name" value="{{$product->category_name}}"
                                           required>
                                    <tr>
                                        <td><input type="file" name="image_10" required accept="image/x-png,image/jpeg"
                                                   onchange="document.getElementById('preview10').src = window.URL.createObjectURL(this.files[0])"/>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">update &nbsp;<i
                                                    class="fa fa-pencil" title="Update"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
