
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>AmdaPrints | {{ Route::currentRouteName() }}</title>

<link rel="shortcut icon" href="/assets/images/logo/logo2.png">

<!-- fraimwork - css include -->
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

<!-- icon - css include -->
<link rel="stylesheet" type="text/css" href="/assets/css/flaticon.css">
<link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css">

<!-- animation - css include -->
<link rel="stylesheet" type="text/css" href="/assets/css/animate.css">

<!-- carousel - css include -->
<link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/owl.theme.default.min.css">

<!-- nice select - css include -->
<link rel="stylesheet" type="text/css" href="/assets/css/nice-select.css">

<!-- magnific popup - css include -->
<link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">

<!-- custom - css include -->
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
<style>
    {{--  select {
        height: 40px!important;
        line-height: 40px!important;
        padding-left: 18px!important;
        padding-right: 30px!important;
        outline: none!important;
        font-size: 14px!important;
        font-weight: 400!important;
        transition: all 0.2s!important;
    }
    select > option {
        cursor: pointer!important;
        font-weight: 400!important;
        line-height: 40px!important;
        list-style: none!important;
        min-height: 40px!important;
        outline: none!important;
        text-align: left!important;
        transition: all 0.2s!important;
    }
    select > option:hover {
        background-color: rgb(238, 238, 238)!important;
        color: #e31e24!important;
    }  --}}
    #productList {
        position: absolute;
        top: 20%;
        left: 34.9%;
    }
    .bg-lights {
        background-color: rgb(245, 245, 245);
    }
    .side_scroll{
        top: 14%;
        z-index: 1000;
        width: 225px;
        overflow-y: auto;
        height: 80%;
    }
    @media screen and (max-width: 991px) {
        .side_scroll{
            position: unset!important;
            width: 100%;
            overflow: hidden;
        }
    }
</style>
<script src='//in.fw-cdn.com/30905141/480747.js' chat='true'></script>