@extends('admin.master.file2')

@section('title')
Dashboard || Category
@endsection

@section('content')
<div class="content">
    <div class="row" style="font-family: 'Titillium Web', sans-serif;">
        <div class="col-sm-7 col-6">
            <h4 class="page-title">Upload banner<span style="color:orangered"></span> &nbsp;
                <span class="text-success">{{Session::get('success')}}</span>
                <span class="text-danger">{{Session::get('error')}}</span>
            </h4>
        </div>
        <div class="col-sm-5 col-6 text-right m-b-30">

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="chart-title">
                        <h4>Product/Vehicle Preview Images</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Active banner</h4>
                            <div class="" style="height: 300px;border: 1px solid">
                                @foreach($banners as $banner)
                                <img src="{{('')}}{{$banner->banner}}" onerror="this.onerror=null;this.src='';"
                                     style="height: 300px;width: 100%"/>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h4>Update banner</h4>
                            <div class="background" style="height: 300px">
                                <img id="preview" onerror="this.onerror=null;this.src='';"
                                     style="height: 300px"/>
                            </div>
                            <form method="POST" action="{{route('uploadBanner')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="file" name="banner" required accept="image/x-png,image/jpeg"
                                       onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
                                <input type="submit" value="Update"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
