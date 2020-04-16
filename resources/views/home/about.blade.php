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
    <blockquote>
        <h2 class="auto-style16">HOW IT WORKS ?</h2>
        <blockquote>
			<span class="auto-style9">Terms of sale are agreed by our company with our partners (banks or
			lease companies) and cannot be negotiated. The terms were set in the
			task book of the public auction organized by our partners that
			granted us the right to become official sellers of their fleet.</span><br/>

            <div class="button float_r"><a href="{{url('how')}}">More</a></div>

        </blockquote>
        @endsection

        @section('content')
            @foreach($templateData as $data)
                <div id="tooplate_content" style="padding-right: 5%;padding-left: 5%">
                    <h2 class="auto-style3">
                    <span class="auto-style10">
                        <strong>About {{$data->company_name}} Ltd. </strong>
                    </span>
                    </h2>
                    <span class="auto-style9">

                      {!! $data->about_us !!}

		           </span>
                    <div class="cleaner_h30 horizon_divider">
                    </div>

                    <p class="auto-style8"><strong>WHY TO CHOOSE US?</strong></p>
                    <span class="auto-style9">
                        {!! $data->why_to_choose !!}
                    </span>
                    <div class="cleaner_h30 horizon_divider">
                    </div>
                    <span class="auto-style3">
		               <strong>Buy it Now</strong>
                    </span>
                    <span class="auto-style9">
		            <p>We have a passion for shopping. We believe shopping for your next
		               ride should be fun, not stressful.</p>
		             <p>Our agency is dedicated to providing an efficient and easy platform
		             for buying vehicles. With over 1000 vehicles for sale our goal is to
		             help buyers feel confident in their next vehicle purchase.</p>
		            <p>After selecting a vehicle on our website the customer must initiate
		             the buying process by clicking on the "<strong>Buy it Now</strong>"
		            button. Please read
                    </span>
                    <a href="{{url('how')}}">
                        <span class="auto-style18">How it works </span> </a>

                    <div class="button float_r">
                    </div>
                </div>
    @endforeach
@endsection
