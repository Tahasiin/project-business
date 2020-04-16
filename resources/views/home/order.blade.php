<!DOCTYPE html>
<html lang="en">
<head>
    <title>Complete Order</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{('admin/assets')}}/img/clock.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Merriweather', serif;
            background-color: whitesmoke;
        }

        .navbar {
            height: 100px;
        }

        table {
            border-spacing: 2em;
            border-collapse: separate;
        }

        input {
            height: 30px;
            width: 200px;
        }

        select {
            height: 30px;
            width: 200px;
        }
    </style>
</head>
<body>
@foreach($templateData as $data)
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('')}}{{$data->logo}}" style="height: 60px;width: 100px"/>
                </a>
            </div>
            <h3>
                <mark>
                    <a href="{{url('/')}}" style="float:right">
                        <i class="fa fa-home"></i>Home
                    </a>
                </mark>
            </h3>

        </div>
    </nav>



    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
                <form method="POST" action="{{route('makeOrder')}}">
                    {{csrf_field()}}
                    <table style="">
                        <tr>
                            <td colspan="2">
                                <h3>
                                    <img src="{{asset('')}}/home/images/Users-512.webp"
                                         style="height: 100px;width: 100px"/>
                                    <b>Personal Details</b>
                                </h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>How did you find us?<span class="text-danger">*</span></label><br>
                                <textarea name="how_found" style="width: 100%;height: 150px" required
                                          placeholder="Write something...."></textarea>
                                <span class="text-danger">
                                    {{ $errors -> has('how_found') ? $errors ->first('how_found') : '' }}
                                </span>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Name/Company Name<span class="text-danger">*</span></label><br>
                                <input type="text" name="customer_name" placeholder="Enter Name" required/>
                                <span class="text-danger">
                                    {{ $errors -> has('customer_name') ? $errors ->first('customer_name') : '' }}
                                </span>
                            </td>
                            <td>
                                <label>Country/Region<span class="text-danger">*</span></label></label><br>
                                <select name="country" required>
                                    <option value="">Select Country</option>
                                    @include('home.master.parts.countries')
                                </select>
                                <span class="text-danger">
                                    {{ $errors -> has('country') ? $errors ->first('country') : '' }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Address<span class="text-danger">*</span></label><br>
                                <input type="text" name="address" placeholder="Enter Name" required/>
                                <span class="text-danger">
                                    {{ $errors -> has('address') ? $errors ->first('address') : '' }}
                                </span>
                            </td>
                            <td>
                                <label>Zip Code<span class="text-danger">*</span></label><br>
                                <input type="text" name="zip_code" placeholder="Enter Name" required/>
                                <span class="text-danger">
                                    {{ $errors -> has('zip_code') ? $errors ->first('zip_code') : '' }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Phone<span class="text-danger">*</span></label><br>
                                <input type="text" name="phone" placeholder="Enter phone number" required/>
                                <span class="text-danger">
                                    {{ $errors -> has('phone') ? $errors ->first('phone') : '' }}
                                </span>
                            </td>
                            <td>
                                <label>Email<span class="text-danger">*</span></label><br>
                                <input type="text" name="email" placeholder="Enter email address" required/>
                                <span class="text-danger">
                                    {{ $errors -> has('email') ? $errors ->first('email') : '' }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>Payment Method<span class="text-danger">*</span></label><br>
                                <select style="width: 100%" name="payment_method" required>
                                    <option value="">Select Payment Method</option>
                                    <option value="bank_transfer">-Invoice (Bank Transfer )</option>
                                    <option value="hand_cash">-Hand Cash</option>
                                    <option value="credit_card">-Credit Card</option>
                                </select>
                                <span class="text-danger">
                                    {{ $errors -> has('payment_method') ? $errors ->first('payment_method') : '' }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                @if(Request()->product_id)
                                <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
                                    @endif
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="product_id" value="{{Request()->product_id}}">
                    <input type="hidden" name="product_name" value="{{Request()->product_name}}">
                    <input type="hidden" name="category_name" value="{{Request()->category_name}}">
                </form>
            </div>

            <div class="col-sm-4">
                <span class="text-success">{{Session::get('success')}}<br>
                     @if(Session::get('success'))
                        <label>Note that:</label>This is your order id
                        <mark style="color:red">
                        {{Session::get('order_id')}}
                        </mark>
                    @endif
                </span>
                <span class="text-danger">{{Session::get('error')}}</span>
                <table class="table table-dark" style="width: 100%;margin-top: 40%" border="1">
                    <tr>
                        <td class="text-center">
                            @if(Request()->product_id)
                                <h3 class="text-success">
                                    <b>AVAILABLE</b>
                                </h3>
                                <small>( Last update: Today &emsp; {{date('h:i:s a')}} )</small>
                            @else
                                <h3 class="text-danger">
                                    <b>No Product Selected!</b>
                                </h3>
                            @endif

                        </td>
                    </tr>
                    <tr>
                        <td><label>Vehicle Name:</label> {{Request()->product_name}}</td>
                    </tr>
                    <tr>
                        <td><label>Vehicle Price:</label> {{Request()->product_price}}</td>
                    </tr>

                    <tr>
                        <td>
                            <img src="{{asset('')}}/{{Request()->image_path}}" style="height: 200px;width: 100%"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Your Ip address:</label>{{$_SERVER['REMOTE_ADDR']}}
                        </td>
                    </tr>
                </table>
                <br>


            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endforeach
</body>
</html>
