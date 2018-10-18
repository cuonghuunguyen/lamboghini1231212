<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Chăn ga nệm DANCO - Sản xuất phân phối trực tiếp đến người tiêu dùng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<base href="{{asset('/')}}">
    <link rel="stylesheet" href="assets/css/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.min41e1.css?v=7e5a5912871416d1a20a009678a8d614" />
    <link rel="stylesheet" href="assets/css/list.css" />
    <script src="js/jquerymin.js"></script>
</head>

<body>
    @include('header')
    @yield('content');
    @include('footer')
    <script src="assets/js/app.min4a7d.js?v=dd7c43fda3ba2407cf52ed5a3aa671b6"></script>
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
