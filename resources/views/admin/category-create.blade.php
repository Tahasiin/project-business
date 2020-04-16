@extends('admin.master.file')

@section('title')
    Dashboard || Category
@endsection

@section('content')
    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Create Category &nbsp;
                    <span class="text-success">{{Session::get('success')}}</span>
                    <span class="text-danger">{{Session::get('error')}}</span>
                </h4>
            </div>
            <div class="col-sm-5 col-6 text-right m-b-30">
                <a class="btn" href="{{url('manageCategory')}}" style="border: 1px solid">
                    <i class="fa fa-edit"></i> Manage-Category
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="{{ route('createCategory') }}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Category Name<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" placeholder="Enter category name"
                                       required style="border:1px solid">
                                <span
                                    class="text-danger">{{ $errors -> has('name') ? $errors ->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Publication Status<span class="text-danger">*</span></label>
                                <select class="form-control" type="text" name="status" required
                                        style="border:1px solid">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Category Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="5" cols="30" placeholder="Write something..."
                                          name="description" required style="border:1px solid"></textarea>
                                <span
                                    class="text-danger">{{ $errors -> has('description') ? $errors ->first('description') : '' }}</span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-dark form-control" type="submit" name="next">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
