@extends('admin.master.file2')

@section('title')
    Dashboard || Template Data
@endsection

@section('content')
    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Update About &nbsp;
                    <span class="text-success">{{Session::get('success')}}</span>
                    <span class="text-danger">{{Session::get('error')}}</span>
                </h4>
            </div>
            <div class="col-sm-5 col-6 text-right m-b-30">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                <script src="{{('ckeditor')}}/ckeditor.js"></script>

                <form method="POST" action="{{ route('updateAbout') }}">
                    {{csrf_field()}}
                    <div class="row">
                         @foreach($data as $text)
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>About Us<span class="text-danger">*</span></label>
                                <textarea name="about_us" id="editor1">{{$text->about_us}}</textarea>
                                <span
                                    class="text-danger">{{ $errors -> has('about_us') ? $errors ->first('about_us') : '' }}</span>

                               <script>
                                    CKEDITOR.replace('editor1');
                                </script>

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Why to choose us?<span class="text-danger">*</span></label>
                                <textarea name="why_to_choose" id="editor2">{{$text->why_to_choose}}</textarea>
                                <span
                                    class="text-danger">{{ $errors -> has('why_to_choose') ? $errors ->first('why_to_choose') : '' }}</span>
                                <script>
                                    CKEDITOR.replace('editor2');
                                </script>

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
