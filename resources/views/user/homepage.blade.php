@extends('index')
@section('content')
<div class="viewport">
        <div class="x____wrapper clearfix frame-full-width">

            @include('left_sidebar')
            <div class="content">
                <div class="x----v5 x____wrapper home__nav">
                    <div class="category-list-phone home-nav"><a class="category-list-link col-xs-1 home-nav__link"
                            href="list">Bán</span></a><a
                            class="category-list-link col-xs-1 home-nav__link" 
                            href="list">Đệm</a><a class="category-list-link col-xs-1 home-nav__link"
                            href="list">Giường</a><a
                            class="category-list-link col-xs-1 home-nav__link" 
                            href="list">Phụ kiện</a></div>
                </div>
                <div class="basic-item-container clearfix">
                    <h2>Thương Hiệu Lớn Hạ Giá - Sản Phẩm Bán Chạy</h2>
                    <div class="x____basic-item " >
                        <div class="x____basic-item__header"><span class="x____basic-item__man"><img src=assets/icons/1x1.png
                                    data-lazy-src="{{asset('assets/content/manufacturers/120x70/sealy.png')}}"></span><span
                                class="x____basic-item__upto-percent">Giảm  <span class="x____basic-item__savings">55%</span>
                                </span></div>
                        <div class="x____basic-item__img">
                            <div class="product-overlay product-overlay--category" style=" background-color: #0f4b5f; color: #ffffff; ">BIG
                                BRAND <strong>SALE</strong></div><a href="/product-detail"
                                title="View full details about the Sealy Posturepedic Pearl Luxury Mattress" ><img
                                    width="194" height="121" src=assets/icons/1x1.png data-lazy-src="{{asset('assets/content/products/280x175/sealy-pearl-luxury-mattress-full.jpg')}}"></a>
                        </div>
                        <div class="x____basic-item__main" mo-impression>
                            <div class="x____basic-item__title"><a href="/product-detail"
                                    title="View full details about the Sealy Posturepedic Pearl Luxury Mattress" >Sealy
                                    Posturepedic Pearl Luxury Mattress</a></div>
                            <div class="x____basic-item__prices clearfix">
                                <div class="price" href="/product-detail">
                                    <div class="x____basic-item__from-price"><span>Chỉ từ:</span> 300.70 VNĐ
                                    </div>
                                    <div class="x____basic-item__savings-price hidden-xs"> Đáng giá: 1,234.20 VNĐ<br><span>Tiết kiệm: 684.25 VNĐ</span></div>
                                </div>
                            </div>
                            <div class="x____basic-item__footer clearfix">
                                <div class="x____basic-item__type visible-xs"><strong>Type:</strong> Single-Sided
                                    Mattress </div>
                                <div class="x____basic-item__firmness visible-xs"><strong>Firmness:</strong><span class="firmness-rating">3</span>
                                    Medium </div>
                                <a class="btn x____btn--square hidden-xs"
                                    href="/product-detail" id="featured-product-view-button"
                                    >Xem</a>
                            </div>
                        </div>
                    </div>
                    <div class="x____basic-item " >
                        <div class="x____basic-item__header"><span class="x____basic-item__man"><img src=assets/icons/1x1.png
                                    data-lazy-src="{{asset('assets/content/manufacturers/120x70/layezee-made-by-silentnight.png')}}"></span><span
                                class="x____basic-item__upto-percent">Giảm <span class="x____basic-item__savings">45%</span>
                                </span></div>
                        <div class="x____basic-item__img">
                            <div class="product-overlay product-overlay--category" style=" background-color: #0f4b5f; color: #ffffff; ">Chi nhánh lớn <strong>Bán</strong></div><a href="/product-detail"
                                title="View full details about the Layezee Comfort Memory Pillow Top Mattress" ><img
                                    width="194" height="121" src=assets/icons/1x1.png data-lazy-src="{{asset('assets/content/products/280x175/layezee-comfort-memory-pillow-top-full.jpg')}}"></a>
                        </div>
                        <div class="x____basic-item__main" mo-impression>
                                <div class="x____basic-item__title"><a href="/product-detail"
                                        title="View full details about the Layezee Comfort Memory Pillow Top Mattress"
                                        >Layezee Comfort Memory Pillow Top Mattress</a></div>
                                <div class="x____basic-item__prices clearfix">
                                    <div class="price" href="/product-detail">
                                        <div class="x____basic-item__from-price"><span>Chỉ từ:</span>160.65 VNĐ
                                    </div>
                                    <div class="x____basic-item__savings-price hidden-xs"> Đáng giá: 459.00 VNĐ<br><span>Tiết kiệm: 218.97 VNĐ</span></div>
                                </div>
                            </div>
                            <div class="x____basic-item__footer clearfix">
                                <div class="x____basic-item__type visible-xs"><strong>Type:</strong> Single-Sided
                                    Mattress </div>
                                <div class="x____basic-item__firmness visible-xs"><strong>Firmness:</strong><span class="firmness-rating">4</span>
                                    Medium to Firm </div>
                                <a class="btn x____btn--square hidden-xs"
                                    href="/product-detail" id="featured-product-view-button"
                                    >Xem</a>
                            </div>
                        </div>
                    </div>
                    <div class="x____basic-item " >
                        <div class="x____basic-item__header"><span class="x____basic-item__man"><img src=assets/icons/1x1.png
                                    data-lazy-src="{{asset('assets/content/manufacturers/120x70/silentnight.png')}}"></span><span
                                class="x____basic-item__upto-percent">Giảm <span class="x____basic-item__savings">30%</span>
                                </span></div>
                        <div class="x____basic-item__img">
                            <div class="product-overlay product-overlay--category" style=" background-color: #0f4b5f; color: #ffffff; ">BIG
                                BRAND <strong>SALE</strong></div><a href="/product-detail"
                                title="View full details about the Silentnight Sofia 1200 Mirapocket Mattress" ><img
                                    width="194" height="121" src=assets/icons/1x1.png data-lazy-src="{{asset('assets/content/products/280x175/silentnight-sofia-mattress-full-2018-overlay.jpg')}}"></a>
                        </div>
                        <div class="x____basic-item__main" mo-impression>
                            <div class="x____basic-item__title"><a href="/product-detail"
                                    title="View full details about the Silentnight Sofia 1200 Mirapocket Mattress"
                                    >Silentnight Sofia 1200 Mirapocket Mattress</a></div>
                            <div class="x____basic-item__prices clearfix">
                                <div class="price" href="/product-detail">
                                    <div class="x____basic-item__from-price"><span>Chỉ từ:</span> 260.63 VNĐ
                                    </div>
                                    <div class="x____basic-item__savings-price hidden-xs"> Đáng giá: 669.00 VNĐ<br><span>Tiết kiệm: 187.82 VNĐ</span></div>
                                </div>
                            </div>
                            <div class="x____basic-item__footer clearfix">
                                <div class="x____basic-item__type visible-xs"><strong>Type:</strong> Double-Sided
                                    Mattress </div>
                                <div class="x____basic-item__firmness visible-xs"><strong>Firmness:</strong><span class="firmness-rating">4</span>
                                    Medium to Firm </div>
                                <a class="btn x____btn--square hidden-xs"
                                    href="/product-detail" id="featured-product-view-button"
                                    >Xem</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basic-item-container clearfix">
                    <h2>Thương Hiệu Lớn Hạ Giá - Kim Cương</h2>
                    <div class="x____basic-item " >
                        <div class="x____basic-item__header"><span class="x____basic-item__man"><img src=assets/icons/1x1.png
                                    data-lazy-src="{{asset('assets/content/manufacturers/120x70/luna.png')}}"></span><span
                                class="x____basic-item__upto-percent">Giảm <span class="x____basic-item__savings">45%</span>
                                </span></div>
                        <div class="x____basic-item__img">
                            <div class="product-overlay product-overlay--category" style=" background-color: #0f4b5f; color: #ffffff; ">BIG
                                BRAND <strong>SALE</strong></div><a href="/product-detail"
                                title="View full details about the Luna Memory 2000 Pocket Mattress" ><img
                                    width="194" height="121" src=assets/icons/1x1.png data-lazy-src="{{asset('assets/content/products/280x175/luna-memory-1000-pocket-mattress-4.jpg')}}"></a>
                        </div>
                        <div class="x____basic-item__main" mo-impression>
                            <div class="x____basic-item__title"><a href="/product-detail"
                                    title="View full details about the Luna Memory 2000 Pocket Mattress" >Luna
                                    Memory 2000 Pocket Mattress</a></div>
                            <div class="x____basic-item__prices clearfix">
                                <div class="price" href="/product-detail">
                                    <div class="x____basic-item__from-price"><span>Chỉ từ:</span> 276.00 VNĐ
                                    </div>
                                    <div class="x____basic-item__savings-price hidden-xs"> Đáng giá: 825.00 VNĐ<br><span>Tiết kiệm: 374.00 VNĐ</span></div>
                                </div>
                            </div>
                            <div class="x____basic-item__footer clearfix">
                                <div class="x____basic-item__type visible-xs"><strong>Type:</strong> Single-Sided
                                    Mattress </div>
                                <div class="x____basic-item__firmness visible-xs"><strong>Firmness:</strong><span class="firmness-rating">4</span>
                                    Medium to Firm </div>
                                <a class="btn x____btn--square hidden-xs"
                                    href="/product-detail" id="featured-product-view-button"
                                    >Xem</a>
                            </div>
                        </div>
                    </div>
                    <div class="x____basic-item " >
                        <div class="x____basic-item__header"><span class="x____basic-item__man"><img src=assets/icons/1x1.png
                                    data-lazy-src="{{asset('assets/content/manufacturers/120x70/silentnight.png')}}"></span><span
                                class="x____basic-item__upto-percent">Giảm <span class="x____basic-item__savings">30%</span>
                                </span></div>
                        <div class="x____basic-item__img">
                            <div class="product-overlay product-overlay--category" style=" background-color: #0f4b5f; color: #ffffff; ">BIG
                                BRAND <strong>SALE</strong></div><a href="/product-detail"
                                title="View full details about the Silentnight London 2000 Mirapocket Memory Mattress"
                                src=assets/icons/1x1.png
                                    data-lazy-src="{{asset('assets/content/products/280x175/silentnight-london-mattress-corner-update.jpg')}}"></a>
                        </div>
                        <div class="x____basic-item__main" mo-impression>
                            <div class="x____basic-item__title"><a href="/product-detail"
                                    title="View full details about the Silentnight London 2000 Mirapocket Memory Mattress"
                                    >Silentnight London 2000 Mirapocket Memory Mattress</a></div>
                            <div class="x____basic-item__prices clearfix">
                                <div class="price" href="/product-detail">
                                    <div class="x____basic-item__from-price"><span>Chỉ từ:</span> 318.54 VNĐ
                                    </div>
                                    <div class="x____basic-item__savings-price hidden-xs"> Đáng giá: 869.00 VNĐ<br><span>Tiết kiệm: 273.99 VNĐ</span></div>
                                </div>
                            </div>
                            <div class="x____basic-item__footer clearfix">
                                <div class="x____basic-item__type visible-xs"><strong>Type:</strong> Single-Sided
                                    Mattress </div>
                                <div class="x____basic-item__firmness visible-xs"><strong>Firmness:</strong><span class="firmness-rating">3</span>
                                    Medium </div>
                                <a class="btn x____btn--square hidden-xs"
                                    href="/product-detail" id="featured-product-view-button"
                                    >Xem</a>
                            </div>
                        </div>
                    </div>
                    <div class="x____basic-item " >
                        <div class="x____basic-item__header"><span class="x____basic-item__man"><img src=assets/icons/1x1.png
                                    data-lazy-src="{{asset('assets/content/manufacturers/120x70/mol.png')}}"></span><span
                                class="x____basic-item__upto-percent">Giảm <span class="x____basic-item__savings">65%</span>
                                </span></div>
                        <div class="x____basic-item__img">
                            <div class="product-overlay product-overlay--category" style=" background-color: #0f4b5f; color: #ffffff; ">BIG
                                BRAND <strong>SALE</strong></div><a href="/product-detail"
                                title="View full details about the Memory Zone Pocket 2000 Mattress" ><img
                                    width="194" height="121" src=assets/icons/1x1.png data-lazy-src="{{asset('assets/content/products/280x175/memory-zone-pocket-2000-mattress-new.jpg')}}"></a>
                        </div>
                        <div class="x____basic-item__main" mo-impression>
                            <div class="x____basic-item__title"><a href="/product-detail"
                                    title="View full details about the Memory Zone Pocket 2000 Mattress" >Memory
                                    Zone Pocket 2000 Mattress</a></div>
                            <div class="x____basic-item__prices clearfix">
                                <div class="price" href="/product-detail">
                                    <div class="x____basic-item__from-price"><span>Chỉ từ:</span> 260.40 VNĐ
                                    </div>
                                    <div class="x____basic-item__savings-price hidden-xs"> Đáng giá: 1,199.95 VNĐ<br><span>Tiết kiệm: 765.25 VNĐ</span></div>
                                </div>
                            </div>
                            <div class="x____basic-item__footer clearfix">
                                <div class="x____basic-item__type visible-xs"><strong>Type:</strong> Single-Sided
                                    Mattress </div>
                                <div class="x____basic-item__firmness visible-xs"><strong>Firmness:</strong><span class="firmness-rating">3</span>
                                    Medium </div>
                                <a class="btn x____btn--square hidden-xs"
                                    href="/product-detail" id="featured-product-view-button"
                                    >Xem</a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="homepage-static-content">
                    <h1>Đệm, giường và hơn thế nữa, hiện tại đang có chương trình giảm giá 70%</h1>
                    <p>Chúng tôi hiểu rằng khi nói đến giấc ngủ, không có sự thỏa hiệp nào. Chúng tôi tin tưởng vào kinh nghiệm khách hàng đặc biệt, tư vấn chuyên gia và chất lượng vượt trội. Đó là lý do chúng tôi <a href="Awards.html">Bed Retailer of the Year 2016-17</a>!</p>
                    <p>Khám phá kho tàng khổng lồ <a href="list">đệm</a>, giường
                        và nhiều hơn nữa - từ các thương hiệu lớn <a href="list">Silentnight</a>,
                        <a href="list">Rest
                            Đảm bảo</a>, and <a href="list">Chất lượng giấc ngủ</a>.
                            Chúng tôi có một phạm vi cho phù hợp với tất cả ngân sách. Cho dù bạn đang tìm kiếm một chiếc đệm sang trọng, nệm chỉnh hình - hoặc chỉ đơn giản là một tấm nệm rẻ tiền cho phòng của bạn.</p>
                    <p>Cần một giấc ngủ ngon ngay lập tức? Không vấn đề gì! Chúng tôi giữ hàng ngàn sản phẩm của chúng tôi trong kho để họ sẵn sàng cho Giao hàng miễn phí vào ngày tiếp theo hoặc bạn có thể chọn ngày tốt nhất cho mình.</p>
                    <p>Với hơn 30 năm kinh nghiệm, chúng tôi là nhà bán lẻ giường và nệm hàng đầu của Việt Nam. Vì vậy, hãy để chúng tôi giúp bạn chọn nệm hoặc giường hoàn hảo, sau đó tận hưởng giấc ngủ ngon nhất - bao giờ hết!</p>
                </div>
            </div>
            <div class="footer-toolbar hidden-md hidden-lg"><a href="index.html"><i class="glyphicon glyphicon-home"></i>
                    Trang chủ</a><a href="index.html"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</a><a href="index.html"><i
                        class="glyphicon glyphicon-heart"></i> Yêu thích</a><a href="Basket.html"><i class="glyphicon glyphicon-shopping-cart"></i>
                    Giỏ hàng</a><a href="Advice.html"><i class="glyphicon glyphicon-thumbs-up"></i> Lời khuyên</a></div>
        </div>
    </div>
@endsection
