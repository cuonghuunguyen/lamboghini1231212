@extends('user.payment.payment-template')
@section('content')
<div id="content" class="center group responsive-checkout__content">
    <div class="center-container group">
        <div class="group" style="float: left; width: 806px; position: relative;">
            <div class="center-column group" style="position: relative; float: right;">
                <div id="payment-method-page">
                    <ol class="basketbreadcrumb">
                        <li><a href="/cart">Giỏ Hàng</a></li>
                        <li class="active">Phương Thức Thanh Toán</li>
                        <li>Thanh Toán</li>
                        <li>Hóa Đơn</li>
                    </ol>

                    <h1>Phương Thức Thanh Toán</h1>
                    <div id="functionarea" class="">
                        <form id="payment-method-form" class="payment-methods-container" action="/payment-bill">
                            <hr>


                            <div class="input-form">
                                <div class="section">
                                    <p>Xin hãy cung cấp thông tin của quý khách:</p>
                                    <div class="field">
                                        <label for="billing-title">Họ <abbr class="required" title="bắt buộc">*</abbr></label>

                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Tên <abbr class="required" title="bắt buộc">*</abbr></label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Công ty</label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field full-width-textfield"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Số điện thoại <abbr class="required" title="bắt buộc">*</abbr></label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Email <abbr class="required" title="bắt buộc">*</abbr></label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="email" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Địa chỉ <abbr class="required" title="bắt buộc">*</abbr></label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field full-width-textfield"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Địa chỉ nhận hàng</label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field  full-width-text-field"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="payment-method-input-group">
                                <div class="payment-method-item">
                                    <p>Chọn phương thức thanh toán bạn muốn:</p>
                                    <input type="radio" name="payment-method" value="card" id="payment-method-card"
                                        checked="checked">
                                    <label for="payment-method-card">
                                        <span>Chuyển khoản trực tiếp</span>
                                    </label>
                                </div>
                                <div class="payment-method-item">
                                    <input type="radio" name="payment-method" value="nganluong" id="payment-method-nganluong">
                                    <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=(Email chính tài khoản nhận tiền)&product_name=(Mã đơn đặt hàng)&price=(Tổng giá trị)&return_url=(URL thanh toán thành công)&comments=(Ghi chú về đơn hàng)"><img src="https://www.nganluong.vn/css/newhome/img/button/safe-pay-3.png" border="0" /></a>
                                </div>
                            </div>
                            <hr>

                            <div class="consent-input-group">
                                <div class="consent-input-item">
                                    <input type="checkbox" name="tos-privacy" id="tos-privacy" class="consent-input-item__input"
                                        consent-data-item="">
                                    <label class="consent-input-item__label" for="tos-privacy">
                                        Tôi đồng ý với <a href="#">điều khoản mua bán</a> và <a href="#"> điều khoản bảo mật</a>
                                    </label>
                                </div>
                            </div>
                            <button class="cta cta--large" id="payment-method-submit" alt="Proceed to Your Details" type="submit">Xem hóa đơn</button>
                        </form>
                    </div>



                </div>

                <div id="validation-errors" class="dialog">
                    <p>Có lỗi xảy ra, thử lại:</p>
                    <div id="validation-errors-list">

                    </div>
                </div>

                <div class="basket-buttons group">
                    <div class="continue-shopping">
                        <a href="/cart" style="color: #7c7c7c;">Về Giỏ Hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
