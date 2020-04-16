@extends('admin.master.file')

@section('title')
    Dashboard || Home
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="{{url('manageCategory')}}">
                    <div class="dash-widget">
                        <span class="dash-widget-bg1"><i class="fa fa-cube" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>{{$total_category}}</h3>
                            <span class="widget-title1">Category <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="{{url('manageProduct')}}">
                    <div class="dash-widget">
                        <span class="dash-widget-bg2"><i class="fa fa-cubes"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>{{$total_product}}</h3>
                            <span class="widget-title2">Product <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="{{url('orders')}}">
                    <div class="dash-widget">
                        <span class="dash-widget-bg3"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>{{$total_order}}</h3>
                            <span class="widget-title3">Orders <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <a href="{{url('mails')}}">
                    <div class="dash-widget">
                        <span class="dash-widget-bg4"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>{{$total_message}}</h3>
                            <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-inline-block">New Orders</h4> <a href="{{url('orders')}}"
                                                                                 class="btn btn-primary float-right">View
                            all</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="d-none">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="text-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($orders as $data)
                                    <tr>
                                        <td>
                                            <h5 class="time-title p-0">Serial No</h5>
                                            <p>{{$i++}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Ordered By</h5>
                                            <p>{{$data->customer_name}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Order For</h5>
                                            <p>{{$data->product_name}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Product Id</h5>
                                            <p>{{$data->product_id}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Category Name</h5>
                                            <p>{{$data->category_name}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>{{$data->time}}</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="{{url('orders')}}" class="btn btn-outline-primary take-btn">Take
                                                up</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
