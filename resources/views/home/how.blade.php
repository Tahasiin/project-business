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

    @foreach($templateData as $data)
        <div id="tooplate_content" class="auto-style9" style="padding-right: 5%;padding-left: 5%">
            {!! $data->how_it_works !!}
        </div>
    @endforeach


@endsection
