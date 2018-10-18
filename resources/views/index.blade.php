<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Chăn ga nệm DANCO - Sản xuất phân phối trực tiếp đến người tiêu dùng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/app.min41e1.css?v=7e5a5912871416d1a20a009678a8d614')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/list.css')}}" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="salesCamp--magentle salesCamp--pushAlertActive ">
    @include('header')
    @yield('content');
    @include('footer')

    <script type="text/javascript" src="http://nsg.symantec.com/Web/Seal/gjs.aspx?SN=964554951"></script>
    <script src="{{asset('assets/js/app.min4a7d.js?v=dd7c43fda3ba2407cf52ed5a3aa671b6')}}"></script>
    <script type="text/javascript">
        ;
        $(document).ready(function () {
            $('*[data-toggle="tooltip"]').tooltip()
        });
        $('div.menu > ul > li').mouseover(function () {
            $(this).addClass('hover')
        });
        $('div.menu > ul > li').mouseout(function () {
            $(this).removeClass('hover')
        });

    </script>
    <script type="text/javascript">
        ;
        $(document).ready(function () {
            $('.menu-toggle button').click(function () {
                $('body').addClass('menu-open')
            });
            $('.slide-menu .slide-menu-overlay').click(function () {
                $('body').removeClass('menu-open')
            });
            $('.slide-menu .slide-menu-content').append($('div.header div.menu > ul').clone())
        });

    </script>
    <script type="text/javascript">
        ;
        $(document).ready(function () {
            $('#resource-hide').remove()
        });

    </script>
</body>

</html>
