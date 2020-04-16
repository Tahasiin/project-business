@extends('admin.master.file')

@section('title')
    Dashboard || Home
@endsection

@section('content')
    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">
                    <u>Orders From People</u>
                </h4>
            </div>
            <div class="col-sm-5 col-6 text-right m-b-30">


            </div>
        </div>
        <div class="row">
            @foreach($orders as $data)
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <div class="dash-widget">
                        <div style="padding: 3%">
                            @if($data->is_checked == 0)
                                <form method="POST" action="{{route('checkedOrder')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="status" value="1"/>
                                    <input type="hidden" name="order_id" value="{{$data->order_id}}"/>
                                    <button type="submit" class="btn btn-primary" style="float: right">Make as checked
                                    </button>
                                </form>
                            @endif
                            <h3>
                                {{$data->customer_name}}
                                @if($data->is_checked == 0)
                                    <i class="fa fa-check-circle text-danger"></i>
                                @else
                                    <i class="fa fa-check-circle text-success"></i>
                                @endif
                            </h3>
                            <small>{{$data->time}}</small><br><br>
                                <p>" {{$data->how_found}} "</p>
                            <table>
                                <tr>
                                    <td style="color:blueviolet">Order Id</td>
                                    <td style="color:red"> {{$data->order_id}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Country:</td>
                                    <td>{{$data->country}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Address:</td>
                                    <td>{{$data->address}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Zip Code:</td>
                                    <td>{{$data->zip_code}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Phone:</td>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Email:</td>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Ordered For:</td>
                                    <td>{{$data->product_name}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Product ID:</td>
                                    <td>{{$data->product_id}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Category Name:</td>
                                    <td>{{$data->category_name}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
