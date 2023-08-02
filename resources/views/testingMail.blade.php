<!DOCTYPE html>
<html>
<head>
    <title>AmdaPrints</title>
    {{-- @include('link')
   <link href="{{asset('/css/app.css')}}"> --}}
</head>
<body style="font-family: 'Roboto', sans-serif;color: #131313;font-size: 16px;line-height: 34px;">
    <div class="container">
        <div class="card" style="position: relative;display: block;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: 0.25rem;">
            <div class="card-header" style="padding:10px;background: rgba(255, 255, 255, 0.05);border: 1px solid #443266;">
                <img src="https://amdaprints.com/assets/images/New/logo.png" class="logo-light" alt="" height="34">
            </div>
            <div class="card-body" style="padding:10px">
                <p>Dear {{$details['name'] ?? 'Customer'}},</p>

                <p>
                Thank You for purchasing <strong>{{$details['product'] ?? ''}}</strong> from <span style="font-weight: bold"><a href="//amdaprints.com" style="color:black;text-decoration:none!important" type="button">amdaprints.com</a>.</span>
                <br>
                You can download your invoice by click on this link {!! $details['body'] ?? '' !!}.
                </p>
                <hr>
                <small>For any related query mail us <a href="mailto:info@amdaprints.com" type="button" style="color:#443266;text-decoration:none!important;font-weight: bold">info@amdaprints.com</a>.</small>
            </div>

        </div>
    </div>
    
    {{-- @include('script') --}}
</body>
</html>