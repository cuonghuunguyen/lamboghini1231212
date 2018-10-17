<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="{{asset('assets/css/payment.min.css')}}">

</head>
<body>
    <div id="header" class="center">
            <div class="center-container group">
                <div class="logo">
                    <a href="http://www.mattressonline.co.uk/" title="Return to homepage">
                        <img src="https://secure.mattressonline.co.uk/theme/mattressonline-v5/content/images/mattressonline-logo-2.png" width="278" height="54" alt="MattressOnline - helping your and your family sleep better">
                    </a>
                </div>
                <!--<div class="top-banner"> //Turned off at this point for less distraction
                            </div>-->
                        <div class="contact">
                <span>Cần trợ giúp? Gọi cho chúng tôi</span>
                <!-- Add call tracking as per ED ticket 81 -->
                            <strong>01709 780 881</strong>
                <!-- original -->
                <!-- <strong>01709 780 881</strong> -->
                <span>24/24 h</span>
            </div>
                    </div>
        </div>
    @yield('content')
</body>
</html>