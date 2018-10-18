@extends('index')
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
@section('content')
<div class="viewport">
    <div class="x____wrapper clearfix frame-full-width">
        @include('left_sidebar')
        <div class="content">
            <div class="x____container">

            </div>
            <div class="product full x____product x____container">
                <div class="header">
                    <div class="logo"><a href="../Shop/Mattress-Online-Mattresses-and-Beds-C195/index.html" mo-type="navigation"
                            mo-id="product manufacturer badge" mo-value="Mattress Online" mo-subject="68" title="Shop for more products by Mattress Online"><img
                                src="http://localhost:8000/content/manufacturers/120x70/mol.png" alt="Mattress Online"
                                data-mo-processing="true"></a></div>
                    <div class="title">
                        <h1>ĐỆM LÒ XO DAIHAN 6 SAO</h1>
                    </div>
                </div>
                <div class="cols product__top-section">
                    <div class="col">
                        <div class="x____product__gallery" mo-id="Product gallery" mo-subject="68" mo-type="control">
                            <div class="images">
                                <div class="main" mo-value="featured image"><a class="fancybox-thumb" rel="main-image-thumbnails"
                                        title="Aloe Vera Memory Foam Pillow" href="/assets/content/products/full/aloe-vera-memory-foam-pillow.jpg"
                                        target="_blank"><img src=../assets/icons/1x1.png data-src="/assets/content/products/full/aloe-vera-memory-foam-pillow.jpg"></a></div>
                                <div class="gallery"><a class="fancybox-thumb" rel="product-images" mo-value="gallery thumbnail (position: 1)"
                                        title="Aloe Vera Memory Foam Pillow" href="/assets/content/products/full/aloe-vera-memory-foam-pillow.jpg"
                                        target="_blank"><img height="42" src=../assets/icons/1x1.png data-lazy-src="/assets/content/products/65x40/aloe-vera-memory-foam-pillow.jpg"></a><a
                                        class="fancybox-thumb" rel="product-images" mo-value="gallery thumbnail (position: 2)"
                                        title="Aloe Vera Memory Foam Pillow" href="/assets/content/products/full/aloe-vera-memory-foam-pillow-top.jpg"
                                        target="_blank"><img height="42" src=../assets/icons/1x1.png data-lazy-src="/assets/content/products/65x40/aloe-vera-memory-foam-pillow-top.jpg"></a><a
                                        class="fancybox-thumb" rel="product-images" mo-value="gallery thumbnail (position: 3)"
                                        title="Aloe Vera Memory Foam Pillow" href="/assets/content/products/full/aloe-vera-memory-foam-pillow-side.jpg"
                                        target="_blank"><img height="42" src=../assets/icons/1x1.png data-lazy-src="/assets/content/products/65x40/aloe-vera-memory-foam-pillow-side.jpg"></a><a
                                        class="fancybox-thumb hidden" rel="main-image-thumbnails" title="Aloe Vera Memory Foam Pillow"
                                        href="/assets/content/products/full/aloe-vera-memory-foam-pillow-top.jpg"
                                        target="_blank"><img height="42" src="../assets/icons/1x1.png" data-lazy-src="/assets/content/products/65x40/aloe-vera-memory-foam-pillow-top.jpg"></a><a
                                        class="fancybox-thumb hidden" rel="main-image-thumbnails" title="Aloe Vera Memory Foam Pillow"
                                        href="/assets/content/products/full/aloe-vera-memory-foam-pillow-side.jpg"
                                        target="_blank"><img height="42" src="../assets/icons/1x1.png" data-lazy-src="/assets/content/products/65x40/aloe-vera-memory-foam-pillow-side.jpg"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col x____product__details">
                        <div class="overview-purchase">
                            <div class="purchase">
                                <div class="commersive-product" commersive-item="68">
                                    <div class="options x----v5"><span>Product options:</span><select class="form-control"
                                            name="size" commersive-variation="true">
                                            <option value="">Size...</option>
                                            <option value=""></option>
                                            <option value="size-uk-single"></option>
                                        </select></div>
                                    <div class="price clearfix">
                                        <div class="x____percentage-discount">
                                            <div class="percent">Giảm tới <span>20%</span></div>
                                        </div>
                                        <div class="x____price-point">
                                            <div class="sale"><span>Chỉ từ&nbsp; </span><span class="price">16.720.000 VNĐ</span></div>
                                            <div class="saving x----v5"> Khuyến mãi: <span>4.180.000 VNĐ</span></div>
                                            <div class="saving x----v5"> Tiết kiệm: 4.180.000 VNĐ </div>
                                        </div>
                                    </div>
                                    <div class="x----v5">
                                        <div class="availability">
                                            <div class="in-stock"> Còn hàng
                                            </div>
                                        </div><a onclick="$('#no-options, #mobile-no-options').css('display', 'block');"
                                            class="btn bottom btn-success btn-lg btn-block">Thêm vào giỏ hàng</a>
                                        <div id="no-options" style="display: none; color: #f6585d;">Chọn tùy chọn kèm
                                            theo để thêm vào giỏ hàng</div>
                                    </div>
                                </div><!-- mock product variation modal -->
                                <div class="x____dialogue x----v3" id="purchase-options-dialogue"><span class="x____dialogue__text">Chọn
                                        tùy chọn và nhấn vào thêm vào giỏ hàng để thêm sản phẩm vào giỏ hàng</span>
                                    <div class="x____dialogue__colwrap"></div><!-- end -->
                                    <div class="actions">
                                        <!-- Buy --><input onclick="" class="btn btn-success x____btn" value="Mua ngay" type="button"><!-- Cancel --><input
                                            onclick="" class="btn btn-cancel x____btn" value="Hủy bỏ" type="button"></div>
                                </div>
                                <div class="x____dialogue-underlay x----v3"></div>
                            </div><span class="hide-v3"></span>
                            <div class="overview">
                                <h4 class="x----v5">Tóm tắt</h4>
                                <div class="short-description">
                                    <p>Có sẵn những lựa chọn thú vị vềmàu sắc. Đệm này là một bổ sung tuyệt vời cho phòng ngủ của bạn. <a href="#description" class="read-more no-wrap"
                                            mo-type="control" mo-id="product more info link" mo-subject="68">Nhiều hơn nữa</a></p>
                                </div>
                                <div class="mini-benefits">
                                    <div class="benefits">
                                        <ul class="top">
                                            <li>Còn hàng</li>
                                            <li>Loại: Gối mềm</li>
                                            <li>Dày: 20cm</li>
                                            <li>Bảo hành: 1 năm</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="guides x----v5">
                                    <ul>
                                        <li><a href="../Advice%23buying-advice.html#size-guide">Hướng dẫn về chọn kích
                                                cỡ đệm</a></li>
                                        <li><a href="../Delivery.html">Thông tin chuyển giao</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><span class="hide-v5"></span>
                <div class="hidden">
                    <div class="options"><span>Tùy chọn của sản phẩm:</span> size Size... size-uk-single Single (3' x
                        6'3") Size...<br><br><br>label: Size <br> Single<br> (3' x 6'3")<br></div>
                    <div class="availability">
                        <div class="delivery" data-toggle="tooltip" data-placement="top" title="" data-original-title="Please select from the product options above before choosing a delivery date.">
                            <h4>Choose your Delivery Date:</h4><select class="form-control" disabled=""
                                commersive-delivery-date="">
                                <option value="2018-10-13"> Sat, 13th Oct 2018 (+£17.50) </option>
                                <option value="2018-10-15" selected=""> Mon, 15th Oct 2018 (Free) </option>
                                <option value="2018-10-16"> Tue, 16th Oct 2018 (Free) </option>
                                <option value="2018-10-17"> Wed, 17th Oct 2018 (Free) </option>
                                <option value="2018-10-18"> Thu, 18th Oct 2018 (Free) </option>
                                <option value="2018-10-19"> Fri, 19th Oct 2018 (Free) </option>
                                <option value="2018-10-20"> Sat, 20th Oct 2018 (+£17.50) </option>
                                <option value="2018-10-22"> Mon, 22nd Oct 2018 (Free) </option>
                                <option value="2018-10-23"> Tue, 23rd Oct 2018 (Free) </option>
                                <option value="2018-10-24"> Wed, 24th Oct 2018 (Free) </option>
                                <option value="2018-10-25"> Thu, 25th Oct 2018 (Free) </option>
                                <option value="2018-10-26"> Fri, 26th Oct 2018 (Free) </option>
                                <option value="2018-10-27"> Sat, 27th Oct 2018 (+£17.50) </option>
                                <option value="2018-10-29"> Mon, 29th Oct 2018 (Free) </option>
                                <option value="2018-10-30"> Tue, 30th Oct 2018 (Free) </option>
                                <option value="2018-10-31"> Wed, 31st Oct 2018 (Free) </option>
                                <option value="2018-11-01"> Thu, 1st Nov 2018 (Free) </option>
                                <option value="2018-11-02"> Fri, 2nd Nov 2018 (Free) </option>
                                <option value="2018-11-03"> Sat, 3rd Nov 2018 (+£17.50) </option>
                                <option value="2018-11-05"> Mon, 5th Nov 2018 (Free) </option>
                                <option value="2018-11-06"> Tue, 6th Nov 2018 (Free) </option>
                                <option value="2018-11-07"> Wed, 7th Nov 2018 (Free) </option>
                                <option value="2018-11-08"> Thu, 8th Nov 2018 (Free) </option>
                                <option value="2018-11-09"> Fri, 9th Nov 2018 (Free) </option>
                            </select>
                        </div>
                    </div><a onclick="$('#no-options, #mobile-no-options').css('display', 'block');" class="btn bottom btn-success btn-lg btn-block"
                        mo-type="control" mo-id="add to basket cta" mo-action="add to basket" mo-subject="">Add to
                        Basket</a>
                    <div id="no-options" style="display: none; color: #f6585d;">Chọn những tùy chọn bạn muốn trong phần giỏ hàng</div>
                </div>
                <div class="x----v3">
                    <div class="purchase-options ">
                        <div class="table ">
                            <div class="row ">
                                <div class="header group-label">Kích thước</div>

                                <div class="header saving"></div>
                                <div class="header price">Giá</div>
                                <div class="header buy"></div>
                            </div>
                            <form method="POST" action="https://www.mattressonline.co.uk/Basket">
                                <div class="row-item group commersive-product" commersive-item="68" commersive-template="v3"
                                    commersive-variation-filter="size=size-uk-single" commersive-use-hash-url="false"><input
                                        type="hidden" commersive-variation="true" name="size" value="size-uk-single">
                                    <div class="item group-label"><span class="option">Đệms đơn</span><span class="dimensions">120*190</span><span id="stock-message" class="stock">Hiện tại còn hàng</span></div>
                                    <div class="item options">

                                    </div>
                                    <div class="item saving"><span class="list"> <strong>20.900.000 VNĐ</strong></span><span
                                            class="saving">Bạn tiết kiệm <strong>4.180.000 VNĐ</strong></span></div>
                                    <div class="item price"><span class="sale">Bạn thanh toán <strong>4.180.000 VNĐ</strong></span><span
                                            class="delivery-label">
                                            Chuyển hàng </span></div>
                                    <div class="item buy"><input onclick="$('#no-options-size-uk-single, #mobile-no-options').css('display', 'block');"
                                            class="btn btn-success x____btn" value="Mua ngay" type="button">
                                        <div id="no-options-size-uk-single" class="hide-v3" style="display: none; color: #f6585d;">Tùy chọn trong phần giỏ hàng</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="other-sizes-container" class="other-sizes-container" style="display: none">
                        <div class="purchase-options__other-sizes-button" onclick="$('.purchase-options--other-sizes').toggle(); $(this).toggleClass('is-toggled')">Các kích cỡ có sẵn khác</div>
                        <div class="purchase-options purchase-options--other-sizes">
                            <div class="table" id="other-sizes-list"></div>
                        </div>
                    </div>
                </div><span class="hide-v5"></span>
                <div class="x____tabs-container">
                    
                    <input class="tab" id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">Lợi ích</label>

                    <input class="tab"  id="tab2" type="radio" name="tabs">
                    <label for="tab2">Thông số sản phẩm</label>

                    <input class="tab" id="tab3" type="radio" name="tabs">
                    <label for="tab3">Kích thước</label>

                    <input class="tab" id="tab4" type="radio" name="tabs">
                    <label for="tab4">Giao hàng</label>

                    <section class="tab-content" id="content1">
                            <h2 class="x----v5">Lợi ích</h2>
                                <section>
                                <div>Còn hàng</div>
                                <div>Phù hợp cho mọi lứa tuổi</div>
                                <div>Mềm mại</div>
                                <div>Bền chắc, hạn sử dụng lâu dài</div>
                                <div>Dày 20 cm</div>
                                <div>1 năm bảo hành</div>
                                <div>Made in the VN</div>
                            </section>
                    </section>

                    <section class="tab-content" id="content2">
                            <h2 class="x----v5">Specifications</h2>
                            <section>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-white-fibre.png"
                                        alt="Soft White Fibres" data-mo-processing="true">
                                    <h4>Mềm mại</h4>
                                    <p>Sự mềm mại - mang lại cho bạn trải nghiệm ngủ thoải mái trong khi sản phẩm sở hữu mức giá phải chăng</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/matt-depth-text-20.png"
                                        alt="20cm" data-mo-processing="true">
                                    <h4>Dày 20cm</h4>
                                    <p>Đệm dày 20cm (7.9").</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-turntable.png"
                                        alt="Turnable Mattress" data-mo-processing="true">
                                    <h4>Có thể gập lại</h4>
                                    <p>Đệm hai mặt có thể gập lại</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-1-yr-guarantee.png"
                                        alt="Guarantee: 1 Year" data-mo-processing="true">
                                    <h4>Bảo hành: 1 năm</h4>
                                    <p>Sản phẩm có 1 năm bảo hành.</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-made-in-uk.png"
                                        alt="Made in the UK" data-mo-processing="true">
                                    <h4>Made in the Vietnam</h4>
                                    <p>Sản phẩm sản xuất tại Việt Nam</p>
                                </div>
                            </section>
                    </section>

                    <section class="tab-content" id="content3">
                            <h2 class="x----v5">Kích thước</h2>
                            <section>
                                <div>
                                    <p><strong>Chiều rộng</strong>: 120cm</p>
                                    <p><strong>Chiều dài</strong>: 190cm</p><br>
                                </div>
                            </section>
                    </section>

                    <section class="tab-content" id="content4">
                            <h2 class="x----v5">Chuyển hàng</h2>
                            <section>
                                <div>
                                    <h4></h4>
                                    <p>
                                        </p><p style="font-size:110%"><b>Chọn ngày giao hàng hoặc giao trong ngày mai</b></p>
                                        <p style="font-size:100%">Khi còn hàng, sau khi đặt đơn hàng sẽ chuyển giao cho bạn vào 4h chiều ngày hôm sau</p>
                                        <p style="font-size:100%">Nếu bạn không muốn ngày chuyển là ngày mai, hãy chọn ngày chuyển hàng trong phần giỏ hàng</p><br>
                                    <p></p>
                                </div>
                            </section>
                    </section>
                </div>
                <div id="reviews" class="reviews" data-mobile-index="14">

                    <section class="all expanded">
                        <div class="info">
                            <div class="total">
                                <span class="ng-binding">4</span> Bình luận
                            </div>
                            <div class="addComment">
                                <a><span class="ink animate" style="height: 126px; width: 126px; top: -45px; left: 13.3906px;"></span>Thêm
                                    Bình luận</a>
                            </div>
                        </div>
                        <div class="list-comment" style="max-height: 140px;">
                            <!-- ngRepeat: comment in commentList -->
                            <section ng-repeat="comment in commentList" repeat-done="commentsRendered()" class="ng-scope">
                                <div class="comment-row">
                                    <div class="commentPhoto">
                                        <img ng-src="https://thoughtcatalog.files.wordpress.com/2018/01/kyle-smith-528234-e1516823451262.jpg?w=192&amp;h=192&amp;crop=1&amp;resize=192,192&amp;quality=95&amp;strip=all"
                                            alt="" src="https://thoughtcatalog.files.wordpress.com/2018/01/kyle-smith-528234-e1516823451262.jpg?w=192&amp;h=192&amp;crop=1&amp;resize=192,192&amp;quality=95&amp;strip=all">
                                    </div>
                                    <div class="commentDetails">
                                        <span class="commentUser ng-binding">Nguyễn Văn A</span>
                                        <span class="commentDate ng-binding">07 Apr 11:29</span>
                                        <div class="commentText ng-binding">Hàng chất lượng!</div>
                                    </div>
                                </div>
                            </section><!-- end ngRepeat: comment in commentList -->
                            <section ng-repeat="comment in commentList" repeat-done="commentsRendered()" class="ng-scope">
                                <div class="comment-row">
                                    <div class="commentPhoto">
                                        <img ng-src="https://s-media-cache-ak0.pinimg.com/236x/6e/74/6e/6e746edc42d8f1b4d78c9b8772fdc214.jpg"
                                            alt="" src="https://s-media-cache-ak0.pinimg.com/236x/6e/74/6e/6e746edc42d8f1b4d78c9b8772fdc214.jpg">
                                    </div>
                                    <div class="commentDetails">
                                        <span class="commentUser ng-binding">Nguyễn Văn B</span>
                                        <span class="commentDate ng-binding">07 Apr 14:21</span>
                                        <div class="commentText ng-binding">Chuyển hàng nhanh!</div>
                                    </div>
                                </div>
                            </section><!-- end ngRepeat: comment in commentList -->
                            <section ng-repeat="comment in commentList" repeat-done="commentsRendered()" class="ng-scope">
                                <div class="comment-row">
                                    <div class="commentPhoto">
                                        <img ng-src="http://www.opry.com/sites/default/files/artist_profile_photo/saraevans_profile_0.jpg"
                                            alt="" src="http://www.opry.com/sites/default/files/artist_profile_photo/saraevans_profile_0.jpg">
                                    </div>
                                    <div class="commentDetails">
                                        <span class="commentUser ng-binding">Nguyễn Văn C</span>
                                        <span class="commentDate ng-binding">07 Apr 23:15</span>
                                        <div class="commentText ng-binding">Chuyển hàng nhanh!</div>
                                    </div>
                                </div>
                            </section><!-- end ngRepeat: comment in commentList -->
                            <section ng-repeat="comment in commentList" repeat-done="commentsRendered()" class="ng-scope">
                                <div class="comment-row">
                                    <div class="commentPhoto">
                                        <img ng-src="https://lh6.googleusercontent.com/-oHRHcrzkBtU/AAAAAAAAAAI/AAAAAAAAAAA/uaXYj35Cwvw/s96-c/photo.jpg"
                                            alt="" src="https://lh6.googleusercontent.com/-oHRHcrzkBtU/AAAAAAAAAAI/AAAAAAAAAAA/uaXYj35Cwvw/s96-c/photo.jpg">
                                    </div>
                                    <div class="commentDetails">
                                        <span class="commentUser ng-binding">Nguyễn Văn D</span>
                                        <span class="commentDate ng-binding">08 Apr 12:46</span>
                                        <div class="commentText ng-binding">Hàng chất lượng!</div>
                                    </div>
                                </div>
                            </section><!-- end ngRepeat: comment in commentList -->
                        </div>
                        <div class="expandWrap">
                            <div class="mask" style="display: none;"></div>
                            <div class="toggleList toggleExpanded"><a><i class="fa fa-angle-double-down"></i></a></div>
                        </div>
                    </section>
                    <style>
                        section.all {
                            padding: 20px 10px 15px 10px
                        }

                        section.all.expanded {
                            padding-bottom: 25px
                        }

                        .mask {
                            background-image: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 1) 45%, rgba(255, 255, 255, 0) 99%);
                            background-image: -moz-linear-gradient(bottom, rgba(255, 255, 255, 1) 45%, rgba(255, 255, 255, 0) 99%);
                            background-image: -ms-linear-gradient(bottom, rgba(255, 255, 255, 1) 45%, rgba(255, 255, 255, 0) 99%);
                            background-image: -o-linear-gradient(bottom, rgba(255, 255, 255, 1) 45%, rgba(255, 255, 255, 0) 99%);
                            background-image: linear-gradient(bottom, rgba(255, 255, 255, 1) 45%, rgba(255, 255, 255, 0) 99%);
                            height: 20px;
                            top: -20px;
                            position: relative;
                            z-index: 999
                        }

                        .info {
                            padding: 0 10px 10px;
                            border-bottom: 1px solid #f1f1f1
                        }

                        .total {
                            font-size: 14px;
                            float: left;
                            width: 50%
                        }

                        .total span {
                            font-size: 30px;
                            font-weight: 700
                        }

                        .addComment {
                            display: inline-block;
                            width: 50%;
                            overflow: hidden
                        }

                        .addComment a {
                            float: right;
                            background: none repeat scroll 0 0 #4caf50;
                            border: 1px solid #43a047;
                            padding: 7px 15px;
                            color: #fff;
                            border-radius: 2px;
                            cursor: default;
                            font-weight: 500;
                            font-family: 'Open Sans';
                            font-size: 14px;
                            opacity: .8;
                            -webkit-transition: .2s opacity;
                            -moz-transition: .2s opacity;
                            -o-transition: .2s opacity;
                            transition: .2s opacity;
                            outline: 0;
                            position: relative
                        }

                        .addComment a:hover {
                            opacity: 1
                        }

                        .list-comment {
                            padding: 0 10px;
                            overflow: hidden;
                            -webkit-transition: .6s max-height cubic-bezier(.19, 1, .22, 1);
                            -moz-transition: .6s max-height cubic-bezier(.19, 1, .22, 1);
                            -o-transition: .6s max-height cubic-bezier(.19, 1, .22, 1);
                            transition: .6s max-height cubic-bezier(.19, 1, .22, 1)
                        }

                        .list-comment section {
                            clear: both
                        }

                        .list-comment.noComments {
                            max-height: auto !important
                        }

                        .comment-row {
                            padding-top: 10px
                        }

                        .commentDetails {
                            float: left;
                            width: 75%
                        }

                        .commentPhoto {
                            float: left;
                            width: 20%
                        }

                        .commentPhoto img {
                            width: 50px;
                            height: 50px;
                            border-radius: 100%;
                            margin-right: 15px
                        }

                        .commentUser {
                            font-size: 14px;
                            font-weight: 700;
                            float: left
                        }

                        .commentDate {
                            font-size: 10px;
                            float: right;
                            color: #b1b1b1
                        }

                        .commentText {
                            font-size: 12px;
                            color: #6b6b6b;
                            clear: both
                        }

                        .commentText a {
                            text-decoration: none;
                            color: #38acff;
                            -webkit-transition: .2s color;
                            -moz-transition: .2s color;
                            -o-transition: .2s color;
                            transition: .2s color
                        }

                        .commentText a:hover {
                            color: #0088ea
                        }

                        .toggleList a {
                            color: #5e5e5e;
                            font-weight: 700;
                            font-size: 20px;
                            cursor: default;
                            opacity: .7;
                            position: relative
                        }

                        .toggleList a:hover {
                            opacity: 1;
                            top: 1px
                        }

                        .toggleList {
                            text-align: center;
                            margin-top: -20px
                        }

                        .toggleExpanded {
                            margin-top: -10px;
                            transform: rotate(180deg);
                            position: relative;
                            bottom: -12px
                        }

                        .ink {
                            display: block;
                            position: absolute;
                            background: rgba(255, 255, 255, .3);
                            border-radius: 100%;
                            -webkit-transform: scale(0);
                            -moz-transform: scale(0);
                            -o-transform: scale(0);
                            transform: scale(0)
                        }

                        .animate {
                            -webkit-animation: ripple .5s linear;
                            -moz-animation: ripple .5s linear;
                            -ms-animation: ripple .5s linear;
                            -o-animation: ripple .5s linear;
                            animation: ripple .5s linear
                        }

                        @-webkit-keyframes ripple {
                            100% {
                                opacity: 0;
                                -webkit-transform: scale(2.5)
                            }
                        }

                        @-moz-keyframes ripple {
                            100% {
                                opacity: 0;
                                -moz-transform: scale(2.5)
                            }
                        }

                        @-o-keyframes ripple {
                            100% {
                                opacity: 0;
                                -o-transform: scale(2.5)
                            }
                        }

                        @keyframes ripple {
                            100% {
                                opacity: 0;
                                transform: scale(2.5)
                            }
                        }

                        @-webkit-keyframes beat {
                            0% {
                                -webkit-transform: scale(1)
                            }

                            50% {
                                -webkit-transform: scale(1.1)
                            }

                            100% {
                                -webkit-transform: scale(1)
                            }
                        }

                        @-moz-keyframes beat {
                            0% {
                                -moz-transform: scale(1)
                            }

                            50% {
                                -moz-transform: scale(1.1)
                            }

                            100% {
                                -moz-transform: scale(1)
                            }
                        }

                        @-o-keyframes beat {
                            0% {
                                -o-transform: scale(1)
                            }

                            50% {
                                -o-transform: scale(1.1)
                            }

                            100% {
                                -o-transform: scale(1)
                            }
                        }

                        @keyframes beat {
                            0% {
                                transform: scale(1)
                            }

                            50% {
                                transform: scale(1.1)
                            }

                            100% {
                                transform: scale(1)
                            }
                        }

                        .expandWrap {
                            padding-top: 13px;
                        }

                    </style>
                </div>
            </div>
        </div>
    </div>
</div>
{{--
<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox8cbb.css?v=2.1.5" media="screen">
<link rel="stylesheet" type="text/css" href="/js/fancybox/helpers/jquery.fancybox-buttons3447.css?v=1.0.5"> --}}
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" defer src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" defer src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
{{-- <script type="text/javascript" src="/js/fancybox/helpers/jquery.fancybox-buttons3447.js?v=1.0.5"></script>
<script type="text/javascript" src="/js/fancybox/helpers/jquery.fancybox-mediac924.js?v=1.0.6"></script> --}}
<script type="text/javascript">
    $(document).ready(() => {
        $('.fancybox-thumb').fancybox({
            prevEffect: 'none',
            nextEffect: 'none',
            helpers: {
                title: {
                    type: 'outside'
                },
                thumbs: {
                    width: 50,
                    height: 50,
                    position: 'bottom'
                }
            }
        })
    });

</script>
<script>
    var listHeight = '140px';


    $('.expandWrap').toggle($('.list-comment').prop('scrollHeight') > $('.list-comment').height());
    // comment expander
    $('.toggleList a').click(function () {
        $('.toggleList').toggleClass('toggleExpanded');
        $('section.all').toggleClass('expanded');
        $('.mask').toggle();

        var scrollHeight = $('.list-comment').prop('scrollHeight');
        var height = $('.list-comment').height();

        if (scrollHeight === height) // collapse
            $('.list-comment').css('max-height', listHeight);
        else // expand
            $('.list-comment').css('max-height', `${scrollHeight}px`);
    });


    // default list height
    $('.list-comment').css('max-height', listHeight);

</script>
@endsection
