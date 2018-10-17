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
                        <h1>Amy Kiddies Cotton Mattress - Choice of Colours</h1>
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
                                            <option value="size-uk-single">Single (3' x 6'3")</option>
                                        </select></div>
                                    <div class="price clearfix">
                                        <div class="x____percentage-discount">
                                            <div class="percent">Up to <span>40%</span> off</div>
                                        </div>
                                        <div class="x____price-point">
                                            <div class="sale"><span>Chỉ từ&nbsp; </span><span class="price">940.000 VNĐ</span></div>
                                            <div class="saving x----v5"> Khuyến mãi:  <span>140.000VNĐ</span></div>
                                            <div class="saving x----v5"> Tiết kiệm: 140.000VNĐ </div>
                                        </div>
                                    </div>
                                    <div class="x----v5">
                                        <div class="availability">
                                            <div class="in-stock"> Còn hàng
                                            </div>
                                            <div class="delivery" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Please select from the product options above before choosing a delivery date.">
                                                <h4>Chọn ngày chuyển hàng:</h4><select class="form-control"
                                                    disabled="" commersive-delivery-date="">
                                                    <option value="2018-10-13"> Sat, 13th Oct 2018 (+£17.50)
                                                    </option>
                                                    <option value="2018-10-15" selected=""> Mon, 15th Oct 2018 (Free)
                                                    </option>
                                                    <option value="2018-10-16"> Tue, 16th Oct 2018 (Free) </option>
                                                    <option value="2018-10-17"> Wed, 17th Oct 2018 (Free) </option>
                                                    <option value="2018-10-18"> Thu, 18th Oct 2018 (Free) </option>
                                                    <option value="2018-10-19"> Fri, 19th Oct 2018 (Free) </option>
                                                    <option value="2018-10-20"> Sat, 20th Oct 2018 (+£17.50)
                                                    </option>
                                                    <option value="2018-10-22"> Mon, 22nd Oct 2018 (Free) </option>
                                                    <option value="2018-10-23"> Tue, 23rd Oct 2018 (Free) </option>
                                                    <option value="2018-10-24"> Wed, 24th Oct 2018 (Free) </option>
                                                    <option value="2018-10-25"> Thu, 25th Oct 2018 (Free) </option>
                                                    <option value="2018-10-26"> Fri, 26th Oct 2018 (Free) </option>
                                                    <option value="2018-10-27"> Sat, 27th Oct 2018 (+£17.50)
                                                    </option>
                                                    <option value="2018-10-29"> Mon, 29th Oct 2018 (Free) </option>
                                                    <option value="2018-10-30"> Tue, 30th Oct 2018 (Free) </option>
                                                    <option value="2018-10-31"> Wed, 31st Oct 2018 (Free) </option>
                                                    <option value="2018-11-01"> Thu, 1st Nov 2018 (Free) </option>
                                                    <option value="2018-11-02"> Fri, 2nd Nov 2018 (Free) </option>
                                                    <option value="2018-11-03"> Sat, 3rd Nov 2018 (+£17.50)
                                                    </option>
                                                    <option value="2018-11-05"> Mon, 5th Nov 2018 (Free) </option>
                                                    <option value="2018-11-06"> Tue, 6th Nov 2018 (Free) </option>
                                                    <option value="2018-11-07"> Wed, 7th Nov 2018 (Free) </option>
                                                    <option value="2018-11-08"> Thu, 8th Nov 2018 (Free) </option>
                                                    <option value="2018-11-09"> Fri, 9th Nov 2018 (Free) </option>
                                                </select>
                                            </div>
                                        </div><a onclick="$('#no-options, #mobile-no-options').css('display', 'block');"
                                            class="btn bottom btn-success btn-lg btn-block">Thêm vào giỏ hàng</a>
                                        <div id="no-options" style="display: none; color: #f6585d;">Chọn tùy chọn kèm theo để thêm vào giỏ hàng</div>
                                    </div>
                                </div><!-- mock product variation modal -->
                                <div class="x____dialogue x----v3" id="purchase-options-dialogue"><span class="x____dialogue__text">Chọn tùy chọn và nhấn vào thêm vào giỏ hàng để thêm sản phẩm vào giỏ hàng</span>
                                    <div class="x____dialogue__colwrap"></div><!-- end -->
                                    <div class="actions">
                                        <!-- Buy --><input onclick="" class="btn btn-success x____btn" value="Buy" type="button"><!-- Cancel --><input
                                            onclick="" class="btn btn-cancel x____btn" value="Cancel" type="button"></div>
                                </div>
                                <div class="x____dialogue-underlay x----v3"></div>
                            </div><span class="hide-v3"></span>
                            <div class="overview">
                                <h4 class="x----v5">Summary</h4>
                                <div class="short-description">
                                    <p> A fantastic value for money mattress and available in a fun selection of
                                        colours. This
                                        mattress
                                        is a great addition to your child's bedroom. <a href="#description" class="read-more no-wrap"
                                            mo-type="control" mo-id="product more info link" mo-subject="68">more info</a></p>
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
                                        <li><a href="../Advice%23buying-advice.html#size-guide">Hướng dẫn về chọn kích cỡ đệm</a></li>
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
                        <div class="in-stock"> In stock: <div class="delivery-cutoff"> Order in the next <strong>10
                                    hours 10
                                    minutes 28 seconds</strong> for delivery on <strong>Saturday, 13th October</strong></div>
                        </div>
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
                    <div id="no-options" style="display: none; color: #f6585d;">Please select the options you would
                        like before
                        adding to the basket</div>
                </div>
                <div class="x----v3">
                    <div class="purchase-options ">
                        <div class="table ">
                            <div class="row ">
                                <div class="header group-label">UK Sizes</div>

                                <div class="header saving"></div>
                                <div class="header price">Price</div>
                                <div class="header buy"></div>
                            </div>
                            <form method="POST" action="https://www.mattressonline.co.uk/Basket">
                                <div class="row-item group commersive-product" commersive-item="68" commersive-template="v3"
                                    commersive-variation-filter="size=size-uk-single" commersive-use-hash-url="false"><input
                                        type="hidden" commersive-variation="true" name="size" value="size-uk-single">
                                    <div class="item group-label"><span class="option">Single</span><span class="dimensions">3'
                                            x
                                            6'3" / 90cm x 190cm</span><span id="stock-message" class="stock">In
                                            Stock
                                            Now</span></div>
                                    <div class="item options">

                                    </div>
                                    <div class="item saving"><span class="list"> List: <strong>£169.95</strong></span><span
                                            class="saving">You
                                            save <strong>£75.00</strong></span></div>
                                    <div class="item price"><span class="sale">You pay <strong>£94.95</strong></span><span
                                            class="delivery-label">
                                            Delivered </span></div>
                                    <div class="item buy"><input onclick="$('#no-options-size-uk-single, #mobile-no-options').css('display', 'block');"
                                            class="btn btn-success x____btn" value="Buy" type="button">
                                        <div id="no-options-size-uk-single" class="hide-v3" style="display: none; color: #f6585d;">Please
                                            select the options you would like before adding to the basket</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="other-sizes-container" class="other-sizes-container" style="display: none">
                        <div class="purchase-options__other-sizes-button" onclick="$('.purchase-options--other-sizes').toggle(); $(this).toggleClass('is-toggled')">Other
                            sizes available</div>
                        <div class="purchase-options purchase-options--other-sizes">
                            <div class="table" id="other-sizes-list"></div>
                        </div>
                    </div>
                </div><span class="hide-v5"></span>
                <div class="x____tabs-container">
                    <ul class="x____tabs-navigation x----v3" mo-id="Product tabs" mo-subject="68">
                        <li data-tab="colours" mo-value="Colours">Màu sắc</li>
                        <li data-tab="benefits" class="" mo-value="Benefits">Benefits</li>
                        <li data-tab="specifications" mo-value="Specifications" class="">Specifications</li>
                        <li data-tab="description" mo-value="Description" class="is-active">Description</li>

                    </ul>
                    <ul class="x____tabs">
                        <li data-tab="benefits" class="x____benefits" mo-value="Benefits">
                            <h2 class="x----v5">Benefits</h2>
                            <section>
                                <div>IN STOCK - delivered free next day (or choose your day)</div>
                                <div>Available in a choice of 5 colours (all kept in stock)</div>
                                <div>Great value and very comfortable mattress, suitable for children of all ages</div>
                                <div>13.5 gauge spring unit with 3 deep layers of upholstery</div>
                                <div>Luxury soft cotton damask cover</div>
                                <div>Medium feel</div>
                                <div>Strong perimeter rod edge for mattress longevity</div>
                                <div>Mattress depth 20cm (8") approximately</div>
                                <div>1 Year Guarantee</div>
                                <div>Approved by the National Bed Federation</div>
                                <div>Made in the UK</div>
                            </section>
                        </li>
                        <li data-tab="specifications" class="x____specifications" mo-value="Specifications">
                            <h2 class="x----v5">Specifications</h2>
                            <section>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-open-coil.png"
                                        alt="Open Coil Springs" data-mo-processing="true">
                                    <h4>Open Coil Springs</h4>
                                    <p>Open Coil springs are interlaced coils of high tensile steel, joined together by
                                        a
                                        steel rod
                                        edge
                                        surrounding the springs and interconnecting them. Most common sprung mattresses
                                        are
                                        built
                                        using
                                        open coil springs.</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-white-fibre.png"
                                        alt="Soft White Fibres" data-mo-processing="true">
                                    <h4>Soft White Fibres</h4>
                                    <p>Layers of plush and pampering soft white fibres - giving you a comfortable sleep
                                        experience
                                        whilst
                                        staying comfortably affordable too</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-damask-cover.png"
                                        alt="Woven Damask Cover" data-mo-processing="true">
                                    <h4>Woven Damask Cover</h4>
                                    <p>The mattress is covered in a pampering and durable woven damask fabric.</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-medium-feel.png"
                                        alt="Medium" data-mo-processing="true">
                                    <h4>Medium</h4>
                                    <p>The ideal balance between a cushioned feel and a firmer level of support.</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/matt-depth-text-20.png"
                                        alt="20cm" data-mo-processing="true">
                                    <h4>20cm</h4>
                                    <p>Mattress depth 20cm (7.9") approximately.</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-turntable.png"
                                        alt="Turnable Mattress" data-mo-processing="true">
                                    <h4>Turnable Mattress</h4>
                                    <p>Double sided turnable mattress - fillings on both sides - please turn regularly</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-1-yr-guarantee.png"
                                        alt="Guarantee: 1 Year" data-mo-processing="true">
                                    <h4>Guarantee: 1 Year</h4>
                                    <p>This item benefits from a 1 year guarantee.</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/icon-made-in-uk.png"
                                        alt="Made in the UK" data-mo-processing="true">
                                    <h4>Made in the UK</h4>
                                    <p>This item has been manufactured in the UK</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/bs7177-low.png"
                                        alt="Fire Resistant - Low Hazard" data-mo-processing="true">
                                    <h4>Fire Resistant - Low Hazard</h4>
                                    <p>This product conforms to the BS7177: 2008 standard for domestic use (low hazard)
                                        -
                                        ideal for
                                        use
                                        at home</p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/nbf-approved.png"
                                        alt="NBF Approved Product" data-mo-processing="true">
                                    <h4>NBF Approved Product</h4>
                                    <p>Peace of mind and reassurance - the manufacturer of this item is an approved
                                        member
                                        of the
                                        National Bed Federation's Code of Practice. <a href="../NBF.html" title="Link to National Bed Federation details">Click
                                            here for more details</a></p>
                                </div>
                            </section>
                        </li>
                        <li data-tab="description" class="x____description is-active" mo-value="Description">
                            <h2 class="x----v5">Description</h2>
                            <section>
                                <div>
                                    <p>Our <strong>Amy Kiddies Cotton Mattress</strong> is great for kids of all ages.</p>
                                    <p>You'll benefit from a strong yet <strong>comfortable</strong> 13.5 gauge open
                                        coil
                                        spring
                                        unit,
                                        and a luxurious soft-touch cotton cover offering a <strong>medium feel</strong>.</p>
                                    <p>You'll be able to match the theme of any bedroom, as this mattress is available
                                        in a
                                        gorgeous
                                        choice of 5 colours - pink, lilac, navy, red and cream. We keep all colours in
                                        stock for
                                        <strong>next
                                            day delivery</strong>, too!</p>
                                    <p>This mattress is approximately 8" deep (20cm) and has 3 deep layers of
                                        upholstery
                                        for added
                                        comfort. It's hand tufted and uses a strong supporting rod edge around the
                                        springs
                                        to
                                        increase the
                                        <strong>longevity</strong> of the mattress.</p>
                                    <p>It's ideal for most bunk beds and is suitable for children of all ages.</p>
                                </div>
                            </section>
                        </li>
                        <li data-tab="colours" class="x____colours" mo-value="Colours">
                            <h2 class="x----v5">Colours</h2>
                            <section>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/kiddies_cotton_matt_cream.jpg"
                                        alt="Cream" data-mo-processing="true">
                                    <h4>Cream</h4>
                                    <p></p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/kiddies_cotton_matt_navy.jpg"
                                        alt="Navy" data-mo-processing="true">
                                    <h4>Navy</h4>
                                    <p></p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/kiddies_cotton_matt_pink.jpg"
                                        alt="Pink" data-mo-processing="true">
                                    <h4>Pink</h4>
                                    <p></p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/kiddies_cotton_matt_lilac.jpg"
                                        alt="Lilac" data-mo-processing="true">
                                    <h4>Lilac</h4>
                                    <p></p>
                                </div>
                                <div><img src="../assets/icons/1x1.png" data-lazy-src="http://localhost:8000/content/features/44x44/kiddies_cotton_matt_red.jpg"
                                        alt="Red" data-mo-processing="true">
                                    <h4>Red</h4>
                                    <p></p>
                                </div>
                            </section>
                        </li>

                    </ul>
                </div>
                <div id="reviews" class="reviews" data-mobile-index="14">
                    
                    <section class="all expanded">
                        <div class="info">
                            <div class="total">
                                <span class="ng-binding">4</span> Comments
                            </div>
                            <div class="addComment">
                                <a><span class="ink animate" style="height: 126px; width: 126px; top: -45px; left: 13.3906px;"></span>Add
                                    Comment</a>
                            </div>
                        </div>
                        <div class="list-comment"  style="max-height: 140px;">
                            <!-- ngRepeat: comment in commentList -->
                            <section ng-repeat="comment in commentList" repeat-done="commentsRendered()" class="ng-scope">
                                <div class="comment-row">
                                    <div class="commentPhoto">
                                        <img ng-src="https://thoughtcatalog.files.wordpress.com/2018/01/kyle-smith-528234-e1516823451262.jpg?w=192&amp;h=192&amp;crop=1&amp;resize=192,192&amp;quality=95&amp;strip=all"
                                            alt="" src="https://thoughtcatalog.files.wordpress.com/2018/01/kyle-smith-528234-e1516823451262.jpg?w=192&amp;h=192&amp;crop=1&amp;resize=192,192&amp;quality=95&amp;strip=all">
                                    </div>
                                    <div class="commentDetails">
                                        <span class="commentUser ng-binding">Chelsea Dinen</span>
                                        <span class="commentDate ng-binding">07 Apr 11:29</span>
                                        <div class="commentText ng-binding">There should be a nice view up there!</div>
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
                                        <span class="commentUser ng-binding">Arne Hjeltnes</span>
                                        <span class="commentDate ng-binding">07 Apr 14:21</span>
                                        <div class="commentText ng-binding">Me too I did skydiving once, it was a
                                            memorable experience!</div>
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
                                        <span class="commentUser ng-binding">Sarah Evans</span>
                                        <span class="commentDate ng-binding">07 Apr 23:15</span>
                                        <div class="commentText ng-binding">Amazing, I would love to try!</div>
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
                                        <span class="commentUser ng-binding">Maurizio Paletti</span>
                                        <span class="commentDate ng-binding">08 Apr 12:46</span>
                                        <div class="commentText ng-binding">Yes, it was a great experience, although
                                            until the parachute opens you feel like a turkey on Thanksgiving Day!</div>
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
  $('.toggleList a').click(function() {
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
