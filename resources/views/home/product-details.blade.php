@extends('home.master.file')

@section('title')
    @foreach($templateData as $data)
        {{$data->company_name}} Limited
    @endforeach
@endsection

@section('content')

@section('product-content')
    @foreach($products as $data)

        <section>
            <div class="view-item bg-c">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-lg-2">
                        </div>


                        <div class="col-md-6 col-sm-6 col-lg-6 card " style="background: none;margin-top: 3%">
                            <i>
                                <h1>{{$data->product_name }}</h1>
                                <h5>
                                    <span>{{$data->product_weight}},{{$data->product_ccm}}</span><br>
                                    <b>{{$data->fuel_type}}, {{$data->product_color}} • {{$data->product_mileage}}</b>
                                </h5>

                            </i>
                            <div class="view-info " style="margin-top: 5%">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_1}}"
                                                 alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_2}}"
                                                 alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_3}}"
                                                 alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_4}}"
                                                 alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_5}}"
                                                 alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_6}}"
                                                 alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_7}}"
                                                 alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_8}}"
                                                 alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_9}}"
                                                 alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{('')}}{{$data->image_10}}"
                                                 alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <br>
                                <br>
                                <div class="view-content">
                                    <div id="tooplate_sidebar">
                                        <h5><b>VEHICLE INFO</b></h5>
                                        <ul class="tooplate_list">
                                            <i>
                                                <li><b>Name</b>-{{$data->product_name}}</li>
                                                <li><b>Condition</b>-{{$data->product_condition}}</li>
                                                <li><b>KM</b>-{{$data->product_mileage}}</li>
                                                <li><b>Year</b>-{{$data->production_year}}</li>
                                                <li><b>STOCK ID</b>-{{$data->product_id}}</li>
                                                <li><b>EXTERIOR COLOR</b>-{{$data->product_color}}</li>
                                                <li><b>FUEL</b>-{{$data->fuel_type}}</li>
                                                <li><b>{{$data->smoking_status}}</b></li>
                                                <li>{{$data->history_status}}</li>
                                            </i>
                                        </ul>

                                    </div>
                                    <br>
                                    <br>
                                    <div id="tooplate_sidebar">
                                        <h5><b>VEHICLE PRELIMINARY REPORT</b></h5>
                                        <i>
                                            {{$data->pre_description}}
                                            <ul class="tooplate_list">
                                                <i>
                                                    <li>{{$data->accidental_issue}}</li>
                                                    <li>{{$data->mileage_issue}}</li>
                                                    <li>{{$data->service_issue}}</li>
                                                    <li>{{$data->other_issue}}</li>
                                                </i>
                                            </ul>
                                        </i>
                                    </div>
                                    <br>
                                    <br>
                                    <div id="tooplate_sidebar">
                                        <h5><b>VEHICLE DESCRIPTION</b></h5>
                                        <br>
                                        <div style="margin: 3%;height:400px;background: white;padding: 3%;">
                                            <ul class="tooplate_list">
                                                <i>
                                                    <li>{{$data->term_1}}</li>
                                                    <li>{{$data->term_2}}</li>
                                                    <li>{{$data->term_3}}</li>
                                                    <li>{{$data->term_4}}</li>
                                                    <li>{{$data->term_5}}</li>
                                                    <li>{{$data->term_6}}</li>
                                                    <li>{{$data->term_7}}</li>
                                                    <li>{{$data->term_8}}</li>
                                                    <li>{{$data->term_9}}</li>
                                                    <li>{{$data->term_10}}</li>
                                                </i>
                                            </ul>
                                        </div>

                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4" style="background: none;margin-top: 3%;">

                            <div class="card " style="padding: 3%;background: none">
                                <div class="place__booking__w">


		                     <span class="auto-style6">
                                       <span class="text-muted">VEHICLE ID:</span> {{$data->product_id}}

                                    </span>
                                    <div class="fxg1 w66p text-medium">
                                        <strong style="box-sizing: border-box; font-weight: bolder;"><br>
                                            {{$data->product_name}}</strong>
                                        <div class="mt8 mb8"
                                             style="box-sizing: border-box; margin-bottom: 8px; margin-top: 8px;">
                                            <b>{{$data->fuel_type}}, {{$data->product_color}}
                                                • {{$data->product_mileage}}</b>
                                        </div>
                                    </div>

                                    <br>
                                    <span class="auto-style11">&nbsp;</span>
                                    <span class="money">
                                          <span class="auto-style10" style="color: #1f648b">
		                                      {{$data->product_price}}
                                          </span>
                                        <span class="auto-style2"><br>&nbsp;</span>
                                        <span class="auto-style4">Final Price Vat included.</span>

                                    </span>
                                </div>
                            </div>
                            <form method="GET" action="{{route('order')}}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$data->product_id}}">
                                <input type="hidden" name="product_name" value="{{$data->product_name}}">
                                <input type="hidden" name="product_price" value="{{$data->product_price}}">
                                <input type="hidden" name="category_name" value="{{$data->category_name}}">
                                <input type="hidden" name="image_path" value="{{$data->image_1}}">
                                <button type="submit" class="place__booking__submit place__booking__submit_instant">
                                    &nbsp;Buy it Now
                                </button>
                            </form>

                            <style>
                                .place__booking__submit {
                                    font-size: 22px;
                                    padding: 8px 17px;
                                    background: #ff7e00;
                                    border: 0;
                                    border: 1px solid #c5510c;
                                    color: #fff;
                                    text-shadow: 1px 1px 1px #a14900;
                                    cursor: pointer;
                                    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    -o-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    -ms-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    height: 50px;
                                    width: 100%;
                                    padding: 0;
                                    float: left;
                                    -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    -moz-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    -o-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    -ms-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3), inset 0 1px #ffdfbf;
                                }
                            </style>
                            <br>
                            <br>
                            <br>
                            <div>

                                <div id="tooplate_sidebar">
                                    <h2> HOW IT WORKS?</h2>
                                    <ul class="tooplate_list">
                                        <div class="auto-style9">
                                            <li>If you are decided to reserve or to buy a vehicle you need to press the
                                                button Buy it now.
                                            </li>
                                            <li>After you complete all details we need, one of our employers will
                                                contact you by e-Mail or by phone for additional details.
                                            </li>
                                            <li>You need to understand from beginning that we can not make reservations
                                                until a minimum payment amount will reach our account. Minimum payment
                                                for reservation is 50%.
                                            </li>
                                            <li>The vehicle is reserved for maximum 48 hours after you click buy it now
                                                button.
                                            </li>
                                            <div class="button float_r"><a href="{{url('how')}}">More</a></div>
                                        </div>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>

        </section>
    @endforeach

@endsection

@endsection
