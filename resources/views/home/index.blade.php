@extends('home.master.file')

@section('title')
    @foreach($templateData as $data)
        {{$data->company_name}} Limited
    @endforeach
@endsection

@section('left-section1')
    @include('home.master.parts.categories')
@endsection

@section('left-section2')
    @include('home.master.parts.reviews')
@endsection



@section('content')

    <div class="intro">
        <div id="tooplate_content" style="padding-right: 5%;padding-left: 5%">

            @foreach($templateData as $data)
                <h2>Welcome to {{$data->company_name}} Ltd.</h2>
                <div class="image_wrapper fl_img">
                    <img src="{{('')}}{{$data->banner}}" alt="Aeon" height="306" width="350"/>
                </div>
                <p>&nbsp;</p>
                <div class="auto-style12">
                        <span class="auto-style9">
                        <p> {{$data->introductory_text}}</p>
                        </span>
                    <div class="button float_r"><a href="{{url('')}}">More</a></div>
                </div>
            @endforeach
            <div class="cleaner_h30 horizon_divider">
            </div>
        </div>

    </div>

    <div class="visited" style="padding-right: 5%;padding-left: 5%">
        <br>
        <span class="auto-style3" style="">Recently Viewed Items</span>

        <br>
        <br>
        <div class="row" style="padding-left: 2%;">
            @foreach( $products as $data)
                <div class="col-sm-4" onClick="document.forms['search-form'].submit();">
                    <div class="gallery">
                        <div class="auto-style13">
                            <center>
                            <span class="auto-style15">
                            <a target="_blank" href="">
                            <strong>{{$data->product_name}}</strong>
                            <br/>
                            <br/>
                            <img src="{{$data->image_1}}">
                             </a>
                          </span>
                                <div class="desc" style="height: 30px">
                                    <small style="color:red">{{$data->product_price}}</small><br/>
                                </div>
                                <br>
                            </center>
                        </div>
                    </div>
                </div>
                <form method="GET" id="search-form" action="{{route('productInfo')}}">
                    <input type="hidden" name="product_id" value="{{$data->product_id}}">
                </form>
            @endforeach
            <div class="cleaner_h30 horizon_divider">
            </div>
        </div>
    </div>




@endsection
