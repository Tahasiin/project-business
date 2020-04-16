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
                <div id="tooplate_content" class="auto-style9" style="margin-top: 8%;padding-left: 5%;padding-right: 5%">
                    {!! $data->solution !!}
                </div>
    @endforeach
@endsection
