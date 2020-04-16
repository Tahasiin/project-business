@extends('admin.master.file2')

@section('title')
    Dashboard || Template Data
@endsection

@section('content')
    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Update Text &nbsp;
                    <span class="text-success">{{Session::get('success')}}</span>
                    <span class="text-danger">{{Session::get('error')}}</span>
                </h4>
            </div>
            <div class="col-sm-5 col-6 text-right m-b-30">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="{{ route('updateText') }}">
                    {{csrf_field()}}
                    <div class="row">
                        @foreach($data as $text)
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Company Name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="company_name" value="{{$text->company_name}}" placeholder="Enter company name"
                                       required style="border:1px solid">
                                <span class="text-danger">{{ $errors -> has('company_name') ? $errors ->first('company_name') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Welcome Text<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="5" cols="30" placeholder="Write something..."
                                          name="welcome_text" required style="border:1px solid">{{$text->welcome_text}}</textarea>
                                <span class="text-danger">{{ $errors -> has('welcome_text') ? $errors ->first('welcome_text') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Introductory Text<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="5" cols="30" placeholder="Write something..."
                                          name="introductory_text" required style="border:1px solid">{{$text->introductory_text}}</textarea>
                                <span class="text-danger">{{ $errors -> has('introductory_text') ? $errors ->first('introductory_text') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-dark form-control" type="submit" name="next">Update</button>
                        </div>
                            @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
