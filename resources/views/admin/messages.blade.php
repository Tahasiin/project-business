@extends('admin.master.file')

@section('title')
    Dashboard || Home
@endsection

@section('content')
    <div class="content">
        <div class="row" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">
                    <u>Mails From People</u>
                </h4>
            </div>
            <div class="col-sm-5 col-6 text-right m-b-30">

                </a>
            </div>
        </div>
        <div class="row">
            @foreach($messages as $data)
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <div class="dash-widget">
                        <div style="padding: 3%">
                            @if($data->is_seen == 0)
                                <form method="POST" action="{{route('seenMessage')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="status" value="1"/>
                                    <input type="hidden" name="message_id" value="{{$data->message_id}}"/>
                                    <button type="submit" class="btn btn-primary" style="float: right">Make as read
                                    </button>
                                </form>
                            @endif
                            <h3>
                                {{$data->name}}
                                @if($data->is_seen == 0)
                                    <i class="fa fa-check-circle text-danger"></i>
                                @else
                                    <i class="fa fa-check-circle text-success"></i>
                                @endif
                            </h3>
                            <small>{{$data->time}}</small><br><br>
                            <p>" {{$data->message}} "</p>
                            <br>
                            <br>
                            <table>
                                <tr>
                                    <td style="color:blueviolet">Priority Level</td>
                                    <td style="color:red"> {{$data->priority_level}}</td>
                                </tr>
                                <tr>
                                    <td style="color:blueviolet">Country:</td>
                                    <td>{{$data->country}}</td>
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
                                    <td style="color:blueviolet">Customer Type:</td>
                                    <td>{{$data->customer_type}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
