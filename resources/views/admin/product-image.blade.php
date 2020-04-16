@extends('admin.master.file')

@section('title')
    Dashboard || Product
@endsection

@section('content')
    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Create Product: <span style="color:orangered">Step 2</span> &nbsp;
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
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <form method="POST" action="{{route('uploadImage')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-title">
                                <h4>Product/Vehicle Preview Images</h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Product/Vehicle Name<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="product_name"
                                                       value="{{Request()->product_name}}"
                                                       required style="border:1px solid" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Product/Vehicle ID<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="product_id"
                                                      value="{{Request()->product_id}}"
                                                       required style="border:1px solid" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Category Name<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="category_name"
                                                      value="{{Request()->category_name}}"
                                                       required style="border:1px solid" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn-dark form-control" type="submit" name="Save">Upload
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="background" style="height: 300px">
                                        <img id="preview" onerror="this.onerror=null;this.src='';"
                                             style="height: 300px"/>
                                    </div>
                                    <input type="file" name="image_1" required accept="image/x-png,image/jpeg"
                                           onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                            </div>
                            <div class="row">
                                @php($x=2)
                                @php($y=2)
                                @php($z=2)
                                @for($i=1;$i <= 9;$i++)
                                    <div class="col-sm-4">
                                        <div class="background">
                                            <img id="preview{{$y++}}" onerror="this.onerror=null;this.src='';"/>
                                        </div>
                                        <input type="file" name="image_{{$x++}}" required accept="image/x-png,image/jpeg"
                                               onchange="document.getElementById('preview{{$z++}}').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                @endfor
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
