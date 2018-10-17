<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="{{asset('assets/css/payment.min.css')}}">

</head>
<body class="responsive-checkout">
    <div id="header" class="center">
            <div class="center-container group">
                <div class="logo">
                    <a href="/" title="Return to homepage">
                        <img src="{{asset('assets/img/logo/logo(265x120).png')}}" height="54" alt="MattressOnline - helping your and your family sleep better">
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
                <span>Hỗ trợ 24/24</span>
            </div>
                    </div>
        </div>
    @yield('content')
</body>
</html>
