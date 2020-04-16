@extends('admin.master.file')

@section('title')
    Dashboard || Category
@endsection

@section('content')
    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Manage Category &nbsp;
                    <span class="text-success">{{Session::get('success')}}</span>
                    <span class="text-danger"></span>
                </h4>
            </div>
            <div class="col-sm-5 col-6 text-right m-b-30">
                <a class="btn" href="{{url('createCategory')}}" style="border: 1px solid">
                    <i class="fa fa-edit"></i> Create-Category
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">Created Categories</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="d-none">
                                <tr>
                                    <th>Serial No</th>
                                    <th>Category Name</th>
                                    <th>Publication Status/th>
                                    <th>Created On</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i = 1)
                                @php($x = 1)
                                @php($y = 1)
                                @php($m = 1001)
                                @php($n = 1001)

                                @foreach($categories as $category)
                                    <tr>
                                        <td>
                                            <h5 class="time-title p-0">Serial No</h5>
                                            <p>{{$i++}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Category Name</h5>
                                            <p>{{$category->category_name}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Publication Status</h5>
                                            <p>
                                                @if($category->publication_status === 1)
                                                    <span style="color: green">Published</span>
                                                @else
                                                    <span style="color: red">Unpublished</span>
                                                @endif
                                            </p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Created On</h5>
                                            <p>{{$category->created_on}}</p>
                                        </td>
                                        <td class="text-right">
                                            <form method="POST" action="{{ route('categoryProducts') }}">
                                                {{csrf_field()}}
                                                <a href="#modal{{$x++}}"
                                                   class="btn btn-outline-primary take-btn">Update</a>

                                                <a href="#modal{{$m++}}"
                                                   class="btn btn-outline-danger take-btn">Delete</a>

                                                <input type="hidden" name="category_name"
                                                       value="{{ $category->category_name }}">

                                                <button type="submit" class="btn btn-outline-dark take-btn">Products
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="awesome-modal" id="modal{{$y++}}"><a class="close-icon"
                                                                                     href="#close"></a>
                                        <br>
                                        <center>
                                            <form method="POST" action="{{ route('updateCategory') }}">
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="{{$category->id}}"/>

                                                            <input type="hidden" name="pre_name" value="{{ $category->category_name }}"/>

                                                            <label>Category Name<span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" type="text" name="name"
                                                                   value="{{ $category->category_name }}"
                                                                   placeholder="Enter category name"
                                                                   required style="border:1px solid">
                                                            <span
                                                                class="text-danger">{{ $errors -> has('name') ? $errors ->first('name') : '' }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Publication Status<span class="text-danger">*</span></label>
                                                            <select class="form-control" type="text" name="status"
                                                                    required
                                                                    style="border:1px solid">
                                                                <option value="1"
                                                                        @if($category->publication_status === 1) selected @endif>
                                                                    Published
                                                                </option>
                                                                <option value="0"
                                                                        @if($category->publication_status === 0) selected @endif>
                                                                    Unpublished
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Category Description<span
                                                                    class="text-danger">*</span></label>
                                                            <textarea class="form-control" rows="5" cols="30"
                                                                      placeholder="Write something..."
                                                                      name="description" required
                                                                      style="border:1px solid">{{$category->category_description}}</textarea>
                                                            <span
                                                                class="text-danger">{{ $errors -> has('description') ? $errors ->first('description') : '' }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">

                                                        <button class="btn btn-dark form-control" type="submit"
                                                                name="next">Update
                                                        </button>

                                                    </div>
                                                </div>
                                            </form>
                                        </center>
                                    </div>
                                    <div class="awesome-modal" id="modal{{$n++}}"><a class="close-icon"
                                                                                     href="#close"></a>
                                        <center>
                                            <h3 class="modal-title">Are sure to delete this category?</h3>
                                            <br>
                                            <form method="POST" action="{{ route('deleteCategory') }}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="category_name"
                                                       value="{{ $category->category_name }}">
                                                <button class="btn btn-danger" type="submit" style="width:100px">Yes
                                                </button> &emsp; || &emsp;
                                            </form>
                                            <a href="#close">
                                                <button class="btn btn-primary" style="width:100px">No</button>
                                            </a>
                                        </center>
                                    </div>

                                @endforeach

                                @if(Session::has('error-message'))
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <span class="text-danger"> {{ Session::get('error-message') }}</span>
                                        </td>
                                    </tr>
                                @endif

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
