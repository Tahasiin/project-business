<div id="tooplate_header_wrapper">

    <div id="tooplate_header">

        <div class="row">
            <div class="col-md-8 col-sm-8 col-lg-8">

                <div id="site_title">

                    <h1>
                        @foreach($templateData as $data)
                        <a href="#">
                            <img src="{{('')}}{{$data->logo}}" alt="{{$data->company_name}} Limited " height="50"
                                 width="218"/>
                            <span class="auto-style4"><strong>{{$data->company_name}} LIMITED</strong></span>
                        </a>
                            @endforeach
                    </h1>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 clo-lg-4">
                <div class="l-f" style="float: right;margin-right: 50px">
                    <div id="google_translate_element"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">

                <div id="tooplate_menu" style="width: 100%">

                    <div id="home_menu"><a href="#"></a></div>

                    <ul>
                        <li>
                            <a href="{{url('/')}}" class="{{ Request::is('/') ? 'current' : '' }}" >Home</a>
                        </li>
                        <li>
                            <a href="{{url('about')}}" class="{{ Request::is('about') ? 'current' : '' }}" >About</a>
                        </li>
                        <li>
                            <a href="{{url('buy')}}" class="{{ Request::is('buy') ? 'current' : '' }}" >Buy</a>
                        </li>
                        <li>
                            <a href="{{url('solution')}}" class="{{ Request::is('solution') ? 'current' : '' }}">Solutions</a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}" class="{{ Request::is('contact') ? 'current' : '' }}">Contact</a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>


        <!-- end of tooplate_menu -->
    </div>
</div>
<!-- end of header_wrapper -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div id="tooplate_middle_wrapper1">
            <div id="tooplate_middle_wrapper2">
                <div id="tooplate_middle">
                    @foreach($templateData as $data)

                        <h1>WELCOME TO<span class="auto-style1"> # {{$data->company_name}} Ltd.</span><span> </span>
                        </h1>

                        <p>
                            {{$data->welcome_text}}
                        </p>
                    @endforeach
                    &nbsp;
                </div>
            </div>
        </div>

    </div>
</div>
