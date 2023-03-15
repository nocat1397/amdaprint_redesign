<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop with Anokha Dhaga</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <!-- CSS 
        ========================= -->
        <!--bootstrap min css-->
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <!--owl carousel min css-->
        <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
        <!--slick min css-->
        <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
        <!--magnific popup min css-->
        <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
        <!--font awesome css-->
        <link rel="stylesheet" href="{{asset('/css/font.awesome.css')}}">
        <!--ionicons css-->
        <link rel="stylesheet" href="{{asset('/css/ionicons.min.css')}}">
        <!--linearicons css-->
        <link rel="stylesheet" href="{{asset('/css/linearicons.css')}}">
        <!--animate css-->
        <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
        <!--jquery ui min css-->
        <link rel="stylesheet" href="{{asset('/css/jquery-ui.min.css')}}">
        <!--slinky menu css-->
        <link rel="stylesheet" href="{{asset('/css/slinky.menu.css')}}">
        <!--plugins css-->
        <link rel="stylesheet" href="{{asset('/css/plugins.css')}}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <style scoped>
            #preloder {
       position: fixed;
       width: 100%;
       height: 100%;
       top: 0;
       left: 0;
       z-index: 999999;
       background: #fff;
   }
   .loader {
       width: 30px;
       height: 30px;
       border: 3px solid #419eaa;
       position: absolute;
       top: 50%;
       left: 50%;
       margin-top: -13px;
       margin-left: -13px;
       border-radius: 60px;
       border-left-color: transparent;
       animation: loader 0.8s linear infinite;
       -webkit-animation: loader 0.8s linear infinite;
       }
   @keyframes loader {
       0% {
           transform: rotate(0deg);
       }
       50% {
           transform: rotate(180deg);
       }
       100% {
           transform: rotate(360deg);
       }
   }
   @-webkit-keyframes loader {
       0% {
           -webkit-transform: rotate(0deg);
       }
       50% {
           -webkit-transform: rotate(180deg);
       }
       100% {
           -webkit-transform: rotate(360deg);
       }
   }
   body::-webkit-scrollbar-thumb {
        background: darkgray;
      }

      body::-webkit-scrollbar-track {
  
      background: transparent;
      }

      body::-webkit-scrollbar {
        transition: all .5s;
        width: 5px;
        height: 1px;
        border-radius: 20px;
      }

      body::-webkit-scrollbar-thumb {
        background: #a23f25;
      }
       .fade-enter-active,
   .fade-leave-active {
     transition-duration: 0.1s;
     transition-property: opacity;
     transition-timing-function: ease;
   }
   
   .fade-enter-active {
     /* transition-delay: .1s; */
   }
   
   .fade-enter,
   .fade-leave-active {
     opacity: 0;
   }
   .owl-theme .owl-nav .owl-prev, .owl-theme .owl-nav .owl-next {
     visibility: hidden;
   }
  .owl-theme .owl-nav .owl-prev:after {
    visibility: visible;
    content: "\f0a9";
    width: 30px!important;
    height: 30px!important;
    position: absolute!important;
    bottom: 50%!important;
    right: 0!important;
    border-radius: 20px!important;
    display: block !important;
    color: #fff!important;
    background: #a23f25!important;
    outline: none!important;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    text-transform: capitalize!important;
    font-family: "FontAwesome";
    font-size: 35px;
}

.owl-theme .owl-nav .owl-next:after {
  visibility: visible;
  content: "\f0a8";
    width: 30px!important;
    height: 30px!important;
    position: absolute!important;
    bottom: 50%!important;
    left: 0!important;
    border-radius: 20px!important;
    display: block !important;
    color: #fff!important;
    background: #a23f25!important;
    outline: none!important;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    text-transform: capitalize!important;
    font-family: "FontAwesome";
    font-size: 35px;
}  
.fb-social {
  padding: 6px 13px 5px 13px;
  border-radius: 50%;
  background: #4267B2;
  color: white;
  transition: 0.1s ease-in-out;
  margin-right: 3px!important;
}
.fb-social a {
  font-size: 20px!important;
  color: white!important;
}
.insta-social {
  padding: 6px 10px 5px 10px;
  background: #f09433; 
  background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
  background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
  background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
  color: white;
  border-radius: 50%;
  transition: 0.2s ease-in-out;
}
.insta-social a {
  font-size: 20px!important;
  color: white!important;
}
.insta-social:hover {
  filter: drop-shadow(1px 1px 2px black);
}
.fb-social:hover {
  filter: drop-shadow(1px 1px 2px black);
}
@if(sizeof($banners))
  @foreach($banners as $banner)
    #banner{{$banner->id}} {
      background-image:url('/images/banners/{{$banner->home}}');
    }
  @endforeach
@endif

       </style>
</head>
<body>
    <div id="app">

    </div>
    <script src="{{mix('/js/app.js')}}"></script>
    <!-- JS
        ============================================ -->
        <!--jquery min js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script src="{{asset('/js/vendor/jquery-3.4.1.min.js')}}"></script>
        <!--popper min js-->
        <script src="{{asset('/js/popper.js')}}"></script>
        <!--bootstrap min js-->
        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
        <!--owl carousel min js-->
        <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
        <!--slick min js-->
        <script src="{{asset('/js/slick.min.js')}}"></script>
        <!--magnific popup min js-->
        <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
        <!--counterup min js-->
        <script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
        <!--jquery countdown min js-->
        <script src="{{asset('/js/jquery.countdown.js')}}"></script>
        <!--jquery ui min js-->
        <script src="{{asset('/js/jquery.ui.js')}}"></script>
        <!--jquery elevatezoom min js-->
        <script src="{{asset('/js/jquery.elevatezoom.js')}}"></script>
        <!--isotope packaged min js-->
        <script src="{{asset('/js/isotope.pkgd.min.js')}}"></script>
        <!--slinky menu js-->
        <script src="{{asset('/js/slinky.menu.js')}}"></script>
        <!--instagramfeed menu js-->
        {{-- <script src="{{asset('/js/jquery.instagramFeed.min.js')}}"></script> --}}
        <!-- Plugins JS -->
        <script src="{{asset('/js/plugins.js')}}"></script>
        
        <!-- Main JS -->
        <script src="{{asset('/js/main.js')}}"></script>
        <script>

            $(document).ready(function(){
                
                $(".loader").fadeOut(); 
                $("#preloder").delay(400).fadeOut("slow");
            });
        </script>
</body>

</html>