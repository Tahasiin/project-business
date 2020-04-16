@extends('home.master.file')

@section('title')
    @foreach($templateData as $data)
        {{$data->company_name}} Limited
    @endforeach
@endsection

@section('content')

@section('product-content')

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;;
            border: 1px solid;
        }

        #cssTable td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-color: #1f648b;
            text-align: center;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="margin-top: 5%">
            <center>
                <h3>Search #{{Request()->category_name}} in our STOCK:</h3>
                <br>
                <input id="myInput" type="text" placeholder="Search for name.." style="height: 40px;width: 50%">
            </center>
            <br><br>
            <table class="table table-bordered table-info" id="cssTable">
                <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Item Image</th>
                    <th>Item Price</th>
                    <th>Item Details</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="myTable">
                @foreach($products as $data)
                    <tr>
                        <td>{{$data->product_name}}</td>
                        <td>
                            <img src="{{$data->image_1}}" style="height: 150px;width: 200px"/>
                        </td>
                        <td>{{$data->product_price}}</td>
                        <td>
                            {{$data->product_weight}}
                            <br>
                            {{$data->product_mileage}}
                        </td>
                        <td>
                            <form method="GET" action="{{url('productInfo')}}">
                                <input type="hidden" name="product_id" value="{{$data->product_id}}">
                                <button class="btn btn-dark buttonx"
                                        style="background: url({{('home/')}}/images/tooplate_button.png) no-repeat; ">
                                    Buy It Now
                                </button>
                            </form>
                         </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <style>

                .buttonx {
                    font-family: "Lucida Grande", sans-serif;
                    border: none;
                    background-color: transparent;
                    background-repeat: no-repeat;
                    outline: none;
                    clear: both;
                    display: block;
                    width: 100%;
                    padding: 5px 0 0 15px;
                    margin-top: 15px;
                    background: url({{('home')}}/images/tooplate_button.png) no-repeat;
                    background-size: cover;
                    background-position: center;
                    color: #fff;
                    font-weight: bold;
                    text-align: center;
                    text-decoration: none;
                }

                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #dddddd;
                }
            </style>
        </div>
        <div class="col-sm-2"></div>

    </div>

@endsection

@endsection
