
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin panel</title>
    <link rel="shortcut icon" href="/assets/images/logo/logo2.png">
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/eb7753515e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Source Sans Pro -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <script>
      $(document).ready(function(){
          $('.imgerror').delay(8000).fadeOut(); 
      });
      $(document).ready(function(){
          $('.success-msg').delay(8000).fadeOut(); 
      });
    </script>
    <style>
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
        background: #e31e24;
      }
      .sidebar::-webkit-scrollbar-thumb {
        background: darkgray;
      }

      .sidebar::-webkit-scrollbar-track {
  
      background: transparent;
      }

      .sidebar::-webkit-scrollbar {
        transition: all .5s;
        width: 5px;
        height: 1px;
        border-radius: 20px;
      }

      .sidebar::-webkit-scrollbar-thumb {
        background: #ff3939;
        border-radius: 60px;
      }
      .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
      }
      .btn-primary:hover {
            color: #fff;
            background-color: #e31e24;
        }
        .content-wrapper > .content {
          margin-bottom: 3rem!important;
        }
    </style>
  </head>
