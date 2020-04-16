<?php echo
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html');
?>
<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{('admin/assets')}}/img/clock.png">
    <link rel="stylesheet" href="{{('home')}}/css/style.css">
    <link rel="stylesheet" href="{{('home')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{('home')}}/css/fontawesome.all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>@yield('title')</title>
    <style>
        html {
            overflow: scroll;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0px; /* Remove scrollbar space */
            background: transparent; /* Optional: just make scrollbar invisible */
        }

        /* Optional: show position indicator in red */
        ::-webkit-scrollbar-thumb {
            background: #FF0000;
        }
    </style>
</head>

<body>
<section>
    @include('home.master.parts.header')
</section>


<section class="bg-c">
    <div class="container" style="padding-left: 7%;padding-right: 7%">
        <div class="row">
            <div class="  col-3 ">
                <div id="tooplate_sidebar">

                    @yield('left-section1')

                    @yield('left-section2')
                </div>
            </div>

            <div class="col-9">

                @yield('content')

            </div>
        </div>
    </div>
    @yield('product-content')

</section>

<section>
    @include('home.master.parts.footer')
</section>


<script src="{{('home')}}/js/jquery-2.1.3.min.js"></script>
<script src="{{('home')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{('home')}}/js/product-table.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    $('img').bind('contextmenu', function (e) {
        return false;
    });


    document.onkeyup = function (e) {

        if (e.ctrlKey && e.altKey && e.which == 65) {
            window.location = "{{url('login')}}";
        }
    };


</script>

</body>

</html>
