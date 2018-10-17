@extends('index')
@section('content')
    <div class="x____wrapper clearfix frame-full-width">
    @include('left_sidebar')
    <div class="content">
            <div class="x____container">
               
            </div>
            <div class="x----v3">
               <ol class="basketbreadcrumb">
                  <li class="active">Giỏ Hàng</li>
                  <li>Phương Thức Thanh Toán</li>
                  <li>Đơn Hàng</li>
                  <li>Thanh Toán</li>
               </ol>
            </div>
            <div commersive-basket="" commersive-sync="true" class="x____basket-container">
               <form id="basket" method="POST" action="#">
                  <div class="x____basket-rows">
                     <div class="x----v3">
                        <div class="x____basket-rows-header cleafix">
                           <div class="x____basket-rows-wrapper">
                              <div class="x____basket-rows-header__item">Sản Phẩm</div>
                              <div class="x____basket-rows-header__price">Đơn Giá</div>
                              <div class="x____basket-rows-header__quantity">Số Lượng</div>
                              <div class="x____basket-rows-header__total">Tổng cộng</div>
                           </div>
                        </div>
                     </div>
                     <!--mobile top / header-->
                     <div class="top row visible-xs">
                        <h1>Giỏ hàng của bạn: 1 Sản Phẩm</h1>
                     </div>
                     <div class="basket-item row" commersive-item="1444;size=size-uk-single">
                        <div class="image"><img src="{{asset('assests/content/products/280x175/sealy-pearl-luxury-mattress-full.jpg')}}"></div>
                        <div class="details">
                                <h5><a href="/Product/Sealy-Posturepedic-Pearl-Luxury-Mattress-P1444#size=size-uk-single">DIAMOND LUXURY (Nệm cao su biết đi)</a></h5>
                                <div class="x----v3">160*195*7F</div>
                        </div>
                        <div class="options pull-right">
                           <div class="options pull-right">
                              <div class="option col-sm-3 x----v3 x____option--green x____option-price"><span>1,537,000₫</span></div>
                              <div class="option col-sm-3 x____option-quantity">
                                 <p class="x----v5">Quantity</p>
                                 <input class="x----v3 fancy-textbox" value="1" type="text" commersive-quantity="" mo-id="basket item quantity input" mo-type="control" mo-value="1" mo-subject="1444" mo-action="Update basket item count">
                                 <div class="x____dropdown-container x----v5">
                                    <select name="basketQuantity" class="quantity form-control x----v5" commersive-quantity="">
                                       <option value="1" selected="">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                    </select>
                                    <div data-dropdown="basketQuantity" class="fancy-dropdown x----v3">
                                       <div class="fancy-dropdown__selected">1</div>
                                       <ul>
                                          <li data-value="1" class="active">1</li>
                                          <li data-value="2" class="">2</li>
                                          <li data-value="3" class="">3</li>
                                          <li data-value="4" class="">4</li>
                                          <li data-value="5" class="">5</li>
                                          <li data-value="6" class="">6</li>
                                          <li data-value="7" class="">7</li>
                                          <li data-value="8" class="">8</li>
                                          <li data-value="9" class="">9</li>
                                          <li data-value="10" class="">10</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="option col-sm-3 x____option--green x____option-subtotal">
                                 <p class="x----v5">Subtotal</p>
                                 <span>1,537,000₫</span>
                              </div>
                              <div class="option remove col-sm-2">
                                 <p class="x----v5">Remove</p>
                                 <a href="#" commersive-remove="" mo-type="control" mo-subject="1444" mo-action="Remove basket item">X</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="delivery-totals row">
                        <div class="x____basket-options x----v3"><a href="" class="btn btn-primary x____btn" commersive-update-quantities="">Làm Mới</a><a href="/" class="btn btn-primary x____btn">Tiếp Tục Mua Hàng</a></div>
                        
                        <ul class="totals clearfix">
                           <li>
                              <h4 class="x----v5">Tổng kết đơn hàng</h4>
                           </li>
                           
                           <li class="x----v5">Trước khuyến mãi: 1,990,000₫</li>
                           <li class="x----v5">Bạn tiết kiệm: <span class="savings">400,000₫</span></li>
                           <li class="x____price-summary ">
                              <span class="colour--primary">Tổng tiền<span class="x----v5-inline">&nbsp;bạn chỉ phải trả</span>:</span>
                              <div class="x____basket-total h1">1,537,000₫</div>
                           </li>
                        </ul>
                        <div class="mobile-totals row x----v5">
                           <button mo-id="checkout button (mobile)" mo-type="navigation" type="button" class="btn btn-primary" onclick="$(this).prop('disabled', true); $('input[name=\'method\']').val(''); $('#basket').submit(); return false;">Tiến hành thanh toán</button>
                           
                           
                        </div>
                        <div class="_GUARANTEE_Kicker_Container" style="text-align: center;"><span id="Kicker Custom 2_1" name="Kicker Custom 2" type="Kicker Custom 2" style="margin: 10px 0px 5px; display: none;"></span></div>
                     </div>
                  </div>
                  <button mo-id="checkout button (desktop)" mo-type="navigation" type="button" class="btn btn-success pull-right x____btn x____btn--lg x____btn--neat x----v3" onclick="$(this).prop('disabled', true); $('input[name=\'method\']').val(''); $('#basket').submit(); return false;"><span class="glyphicon glyphicon-chevron-right"></span> Tiến hành thanh toán</button>
                  
               </form>
            </div>
         </div>
</div>
@endsection