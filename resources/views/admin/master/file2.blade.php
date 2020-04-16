<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{('admin/assets')}}/img/clock.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{('admin/assets')}}/img/clock.png">

    <title>@yield('title')</title>

    @include('admin.master.parts.css-links')
    <style>
        html {
            overflow: scroll;
            overflow-x: hidden;
        }
        ::-webkit-scrollbar {
            width: 0px;  /* Remove scrollbar space */
            background: transparent;  /* Optional: just make scrollbar invisible */
        }
        /* Optional: show position indicator in red */
        ::-webkit-scrollbar-thumb {
            background: #FF0000;
        }
        .background{
            background-image: url('{{('admin/assets')}}/img/car.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height:200px ;
            width: 100%;
            border: 1px solid;
        }

        .background img{
            height:200px ;
            width: 100%;
        }

        table input{
            width: 100% !important;
        }

    </style>
</head>

<body>

<div class="main-wrapper">

    @include('admin.master.parts.header')

    @include('admin.master.parts.sidebar2')

    <div class="page-wrapper">

        @yield('content')

    </div>

</div>

@include('admin.master.parts.js-links')

</body>
</html>
