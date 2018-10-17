<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh toán thành công</title>
    <link rel="stylesheet" href="https://unpkg.com/antd/dist/antd.css">
</head>

<body>
    <style>
        .invoice {
            width: 580px;
            margin: 20px auto;
            padding: 20px 0 30px 0;
            box-shadow: 0 0 300px 0 lightgrey;
            border-radius: 5px;
        }

        .invoice-content {
            max-width: 520px;
            margin: 0 auto;
        }

        .invoice-header {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 520px;
            height: 30px;
            margin: 0 auto 10px;
            background: #4A90E2;
            border-radius: 6px;
        }

        .invoice-header-text {
            margin: 0;
            font-size: 20px;
            color: white;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 7.64px;
            line-height: 23px;
        }

        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin: 7px 0 10px;
            font-weight: 100;
            color: lightgrey;
        }

        .invoice-company {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
        }

        .invoice-company-info {
            display: flex;
            flex-direction: column;
        }

        .invoice-month-header {
            width: 150px;
            margin-bottom: 25px;
            border-bottom: #e4e4e4 1px solid;
        }

        .invoice-table {
            margin-bottom: 25px;
        }

        .invoice-total {
            display: flex;
            justify-content: space-between;
            padding: 5px 10px;
            margin-bottom: 20px;
            background: #00A5FF;
            border-radius: 10px;
        }

        .invoice-total h2 {
            margin-bottom: 0;
            color: white;
        }

        footer {
            text-align: center;
        }

        footer span {
            display: block;
            font-weight: 100;
        }
    </style>
    <div id="container">
        <div data-reactroot="" class="invoice">
            <div class="invoice-content">
                <div class="invoice-header">
                    <h1 class="invoice-header-text">HÓA ĐƠN</h1>
                </div>
                <div class="invoice-info">
                    <div>Đơn hàng #005938210</div>
                    <div>Ngày 20 Tháng 3 Năm 2018</div>
                </div>
                <div class="invoice-company">
                    <div class="invoice-company-info"><span>Họ Tên Khách Hàng: Nguyễn Hữu Cường</span><span>Công Ty: Khách sạn Mekong</span><span>Địa Chỉ: 101B Lê Hữu Trác</span><span>Số Điện Thoại: 01682844666</span><span>Email: cuongcot7a@gmail.com</span></div>
                <div class="invoice-company-logo"><img src="{{asset('assets\img\logo\logo(265x120).png')}}" width="200px"></div>
                </div>

                <div class="ant-table-wrapper invoice-table">
                    <div class="ant-spin-nested-loading">
                        <div class="ant-spin-container">
                            <div class="ant-table ant-table-middle ant-table-bordered ant-table-scroll-position-left">
                                <div class="ant-table-content">
                                    <div class="ant-table-body">
                                        <table class="">
                                            <colgroup>
                                                <col>
                                                <col>
                                                <col>
                                                <col>
                                            </colgroup>
                                            <thead class="ant-table-thead">
                                                <tr>
                                                    <th class=""><span>Mặt hàng</span></th>
                                                    <th class=""><span>Đơn giá</span></th>
                                                    <th class=""><span>Số lượng</span></th>
                                                    <th class=""><span>Tổng</span></th>
                                                </tr>
                                            </thead>
                                            <tbody class="ant-table-tbody">
                                                <tr class="ant-table-row  ant-table-row-level-0">
                                                    <td class=""><span class="ant-table-row-indent indent-level-0" style="padding-left: 0px;"></span>
                                                        Đệm kim cương co dãn</td>
                                                    <td class="">
                                                        1,000,000 vnđ</td>
                                                    <td class="">1</td>
                                                    <td class="">1,000,000 vnđ</td>
                                                </tr>
                                                <tr class="ant-table-row  ant-table-row-level-0">
                                                    <td class=""><span class="ant-table-row-indent indent-level-0" style="padding-left: 0px;"></span>
                                                        Gối mát xa</td>
                                                    <td class="">
                                                        5,990,000 vnđ</td>
                                                    <td class="">1</td>
                                                    <td class="">5,990,000 vnđ</td>
                                                </tr><tr class="ant-table-row  ant-table-row-level-0">
                                                    <td class=""><span class="ant-table-row-indent indent-level-0" style="padding-left: 0px;"></span>
                                                        Giường gỗ nhập khẩu</td>
                                                    <td class="">
                                                        1,000,000 vnđ</td>
                                                    <td class="">3</td>
                                                    <td class="">3,000,000 vnđ</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="invoice-total">
                    <h2>Total</h2>
                    <h2>6,300,000 vnđ</h2>
                </div>
                <footer>
                    <h3><span>Cảm ơn quý khách đã mua hàng tại công ty chúng tôi,</span><span>Chúc quý khách sức khỏe và may mắn</span></h3>
                </footer>
            </div>
        </div>
    </div>

</body>

</html>
