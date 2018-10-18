@extends('index')
@section('content')
<div class="viewport">
    <div class="x____wrapper clearfix frame-full-width">
        @include('left_sidebar')
        <div class="content">
            <div class="x____container">
                <div class="breadcrumbs">
                    <ul>
                        <li>Trang hiện tại: <a href="../../index.html">Home</a></li>
                        <li class="spacer">&raquo;</li>
                        <li><strong>Sale</strong></li>
                    </ul>
                </div>
            </div>

            <div class="facet-list visible-xs closed">
                <div class="facet-row">
                    <a href="#" class="refine visible-xs"> Lọc theo <span>Kich thươc, Loại, Thương hiệu...</span>
                        <div class="glyphicon glyphicon-chevron-down glyphicon-chevron-down--white pull-right"></div>
                        <div class="glyphicon glyphicon-chevron-up glyphicon-chevron-up--white pull-right"></div>
                    </a>
                </div>
                <div class="facet-options" style="display: block;">
                    <div class="facet-row">
                        <div class="active-facets">
                            <div class="selected visible-xs">Sử dụng các tùy chọn dưới đây để tìm kiếm</div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="page-content with-facet-list">
                <div class="countdown-target"></div>
                <div class="x____specify-results">
                    <form method="GET" action="/Shop/Sale-C429/">
                        <div class="facet-list hidden-xs x----v3">
                            <div class="refine-header">
                                <h4>Tìm kiếm chi tiết</h4>
                            </div>
                            <div class="collapsed-content text--center">
                                <div> Bạn chưa chọn các đặc điểm của sản phẩm mà bạn đang tìm kiếm. </div><a href="#">Hãy
                                    thay đổi các tùy chọn tìm kiếm</a>
                            </div>
                            <div class="facet-options">
                                <div class="facet-row"></div>
                                <div class="facet-row facet-group facet-special-offers">
                                    <div class="facet collapsed"><a class="visible-xs">Đề xuất đặc biệt <div class="glyphicon glyphicon-chevron-down pull-right"></div>
                                            <div class="glyphicon glyphicon-chevron-up pull-right"></div>
                                        </a>
                                        <h4 class="hidden-xs">Đề xuất đặc biệt</h4>
                                        <ul>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/New-In-F2441/">
                                                    Mới <span class="count">(72)</span></label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="New-In-F2441" type="checkbox"> Mới
                                                    <span class="count">(72)</span></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="facet-row facet-group facet-size">
                                    <div class="facet collapsed"><a class="visible-xs">Kích thước <div class="glyphicon glyphicon-chevron-down pull-right"></div>
                                            <div class="glyphicon glyphicon-chevron-up pull-right"></div>
                                        </a>
                                        <h4 class="hidden-xs">Kích thước</h4>
                                        <ul>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    120 x 190 (cm)
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    120 x 190 (cm)
                                                </label>
                                            </li>

                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    120 x 200 (cm)
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    120 x 200 (cm)
                                                </label>
                                            </li>

                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    150 x 190 (cm)
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    150 x 190 (cm)
                                                </label>
                                            </li>

                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    140 x 200 (cm)
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    140 x 200 (cm)
                                                </label>
                                            </li>

                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    160 x 200 (cm)
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    160 x 200 (cm)
                                                </label>
                                            </li>

                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    180 x 200 (cm)
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    180 x 200 (cm)
                                                </label>
                                            </li>

                                            <li class="collapsible">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Superking-Zip-and-Link-F600/">
                                                    200 x 220 (cm)
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Superking-Zip-and-Link-F600" type="checkbox">
                                                    200 x 220 (cm)
                                                </label>
                                            </li>
                                            <li class="show-more-less">
                                                <a href="#" class="facet-expand" onclick="$(this).parents('.facet').toggleClass('collapsed'); return false;">
                                                    <span class="more">
                                                        <span class="glyphicon glyphicon--small glyphicon-chevron-down"></span>
                                                        Mở rộng
                                                    </span>
                                                    <span class="less">
                                                        <span class="glyphicon glyphicon--small glyphicon-chevron-up"></span>
                                                        Thu nhỏ
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="facet-row facet-group facet-mattress-type">
                                    <div class="facet collapsed"><a class="visible-xs">Loại<div class="glyphicon glyphicon-chevron-down pull-right"></div>
                                            <div class="glyphicon glyphicon-chevron-up pull-right"></div>
                                        </a>
                                        <h4 class="hidden-xs">Loại</h4>
                                        <ul>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    Đệm lò xo
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    Đệm lò xo
                                                </label>
                                            </li>

                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    Đệm bông ép và cao su
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    Đệm bông ép và cao su
                                                </label>
                                            </li>

                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    Chăn ga gối
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    Chăn ga gối
                                                </label>
                                            </li>

                                            <li class="collapsible">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    Ruột gối
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    Ruột gối
                                                </label>
                                            </li>

                                            <li class="collapsible">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    Chăn
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    Chăn
                                                </label>
                                            </li>

                                            <li class="show-more-less">
                                                <a href="#" class="facet-expand" onclick="$(this).parents('.facet').toggleClass('collapsed'); return false;">
                                                    <span class="more">
                                                        <span class="glyphicon glyphicon--small glyphicon-chevron-down"></span>
                                                        Mở rộng
                                                    </span>
                                                    <span class="less">
                                                        <span class="glyphicon glyphicon--small glyphicon-chevron-up"></span>
                                                        Thu nhỏ
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="facet-row facet-group">
                                    <div class="facet"><a class="visible-xs">Giá <div class="glyphicon glyphicon-chevron-up pull-right"></div>
                                            <div class="glyphicon glyphicon-chevron-down pull-right"></div>
                                        </a>
                                        <h4 class="hidden-xs">Giá</h4>
                                        <ul>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    100k - 500k
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    100k - 500k
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    500k - 1000k
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    500k - 1000k
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    1000k - 2000k
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    1000k - 2000k
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    2000k - 5000k
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    2000k - 5000k
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="facet-row facet-group">
                                    <div class="facet collapsed"><a class="visible-xs">Thương hiệu <div class="glyphicon glyphicon-chevron-up pull-right"></div>
                                            <div class="glyphicon glyphicon-chevron-down pull-right"></div>
                                        </a>
                                        <h4 class="hidden-xs">Thương hiệu</h4>
                                        <ul>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    DAIHAN
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    DAIHAN
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    ACNES
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    ACNES
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    RAINA
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    RAINA
                                                </label>
                                            </li>
                                            <li class="">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    TECHWOOD
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    TECHWOOD
                                                </label>
                                            </li>
                                            <li class="collapsible">
                                                <label class="visible-xs">
                                                    <input type="checkbox" data-url="/Shop/Sale-C429/Small-Single-F345/">
                                                    KOREA
                                                </label>
                                                <label class="hidden-xs">
                                                    <input name="F[]" value="Small-Single-F345" type="checkbox">
                                                    KOREA
                                                </label>
                                            </li>
                                            <li class="show-more-less">
                                                <a href="#" class="facet-expand" onclick="$(this).parents('.facet').toggleClass('collapsed'); return false;">
                                                    <span class="more">
                                                        <span class="glyphicon glyphicon-chevron-down"></span>
                                                        Mở rộng
                                                    </span>
                                                    <span class="less">
                                                        <span class="glyphicon glyphicon-chevron-up"></span>
                                                        Thu nhỏ
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="facet-row facet-group hidden-xs">
                                    <div class="facet"><a class="visible-xs"> Từ khóa tìm kiếm <div class="glyphicon glyphicon-chevron-down pull-right"></div>
                                            <div class="glyphicon glyphicon-chevron-up pull-right"></div>
                                        </a>
                                        <h4 class="hidden-xs">Từ khóa tìm kiếm</h4>
                                        <div class="facet__option">
                                            <input type="search" name="Search" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="facet-list__buttons"><a class="btn btn-success x____btn" href="#" onclick="$(this).parents('form').submit(); return false;">Tìm
                                        kiếm</a>
                                    <a id="hide-facets" class="btn btn-primary x____btn" href="">Ẩn tùy chọn</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pagination-list row ">
                    <div class="show-products col-xs-6"><span class="hidden-xs">Hiển thị </span><span class="x----v3-inline">
                            1-12 </span>
                        <select name="ItemsPerPage" class="form-control items-per-page x----v5">
                            <option value="/Shop/Sale-C429/?ItemsPerPage=6">6</option>
                            <option value="/Shop/Sale-C429/" selected="">12</option>
                            <option value="/Shop/Sale-C429/?ItemsPerPage=24">24</option>
                            <option value="/Shop/Sale-C429/?ItemsPerPage=48">48</option>
                            <option value="/Shop/Sale-C429/?ItemsPerPage=0">All</option>
                        </select> trong <span class="number-of-results">254 sản phẩm</span></div>
                    <div class="page-numbers col-xs-6">
                        <div class="x----v5"> Trang
                            <select name="Page" class="form-control page">
                                <option value="/Shop/Sale-C429/" selected="">1</option>
                                <option value="/Shop/Sale-C429/?Page=2">2</option>
                                <option value="/Shop/Sale-C429/?Page=3">3</option>
                                <option value="/Shop/Sale-C429/?Page=4">4</option>
                                <option value="/Shop/Sale-C429/?Page=5">5</option>
                                <option value="/Shop/Sale-C429/?Page=6">6</option>
                                <option value="/Shop/Sale-C429/?Page=7">7</option>
                                <option value="/Shop/Sale-C429/?Page=8">8</option>
                                <option value="/Shop/Sale-C429/?Page=9">9</option>
                                <option value="/Shop/Sale-C429/?Page=10">10</option>
                                <option value="/Shop/Sale-C429/?Page=11">11</option>
                                <option value="/Shop/Sale-C429/?Page=12">12</option>
                                <option value="/Shop/Sale-C429/?Page=13">13</option>
                                <option value="/Shop/Sale-C429/?Page=14">14</option>
                                <option value="/Shop/Sale-C429/?Page=15">15</option>
                                <option value="/Shop/Sale-C429/?Page=16">16</option>
                                <option value="/Shop/Sale-C429/?Page=17">17</option>
                                <option value="/Shop/Sale-C429/?Page=18">18</option>
                                <option value="/Shop/Sale-C429/?Page=19">19</option>
                                <option value="/Shop/Sale-C429/?Page=20">20</option>
                                <option value="/Shop/Sale-C429/?Page=21">21</option>
                                <option value="/Shop/Sale-C429/?Page=22">22</option>
                            </select><span class="info-extra"> of 22 </span><a class="x----v5" href="/Shop/Sale-C429/?Page=2"><span
                                    class="glyphicon glyphicon-chevron-right"></span></a></div>
                        <div class="x----v3"><span class="x----v3-inline">Trang:&nbsp;</span><strong>1</strong><a href="/Shop/Sale-C429/?Page=2">2</a>
                            <a href="/Shop/Sale-C429/?Page=3">3</a> … <a href="/Shop/Sale-C429/?Page=22">22</a><a href="/Shop/Sale-C429/?Page=2">Tiếp&gt;</a>
                            | <a href="/Shop/Sale-C429/?ItemsPerPage=0">Tất cả</a></div>
                    </div>
                </div>

                <div class="row row--no-margin">
                    <div class="sort-by col-xs-6">
                        Sắp xếp theo:
                        <span class="x____dropdown-container">
                            <select name="SortBy" class=" form-control sort-by x----v5 ">
                                <option value="/Shop/Sale-C429/" selected="">Độ liên quan</option>
                                <option value="/Shop/Sale-C429/?Sort=discount+desc">Khuyễn mãi</option>
                                <option value="/Shop/Sale-C429/?Sort=price+desc">Giá: Giảm dần</option>
                                <option value="/Shop/Sale-C429/?Sort=price+asc">Giá: Tăng dần</option>
                            </select>
                            <div data-dropdown="SortBy" class="fancy-dropdown x----v3">
                                <div class="fancy-dropdown__selected"> Độ liên quan </div>
                                <ul>
                                    <li data-value="/Shop/Sale-C429/" class="active"> Độ liên quan </li>
                                    <li data-value="/Shop/Sale-C429/?Sort=discount+desc"> Khuyễn mãi </li>
                                    <li data-value="/Shop/Sale-C429/?Sort=price+desc"> Giá: Giảm dần </li>
                                    <li data-value="/Shop/Sale-C429/?Sort=price+asc"> Giá: Tăng dần </li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="item-list">

                    <div class="item-column x____product-card" mo-type="listItem" mo-subject="1097" mo-impression>
                        <div class="item commersive-list-item " commersive-item="1097">
                            <div class="product-header">
                                <div class="manufacturer-logo">
                                    <div class="logo">
                                        <a href="../Sealy-Mattresses-and-Divan-Beds-C185/index.html" title="See all products from Sealy"
                                            mo-type="navigation" mo-id="product manufacturer badge">
                                            <img alt="See all products from Sealy" src="../../assets/icons/1x1.png"
                                                data-lazy-src="{{ asset('assets/content/manufacturers/60x60/sealy.png') }}"></a>
                                    </div>
                                </div>
                                <div class="x____product-card__cta x----v3" mo-id="list item view cta">
                                    <a class="btn btn-success x____btn" href="../../Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097.html">
                                        Xem chi tiết
                                    </a>
                                </div>
                                <div class="item has-discount hidden-xs">
                                    <div class="discount">
                                        <div class="price-badge"><span class="price-badge__text--up-to">Lên đến</span><span
                                                class="price-badge__text--price">50</span>
                                            <span class="price-badge__text--percent">%</span><span class="price-badge__text--off">off</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="details clearfix">
                                    <div class="image" mo-id="list item image">
                                        <div class="product-overlay product-overlay--category" style=" background-color: #0f4b5f; color: #ffffff; ">
                                            <strong>SIÊU KHUYẾN MÃI</strong></div>
                                        <a href="../../Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097.html"
                                            title="View full details about the Sealy Nostromo Posturepedic Pocket 1400 Latex Mattress">
                                            <img src="../../assets/icons/1x1.png" data-lazy-src="{{asset('assets/content/products/280x175/sealy-nostromo-mattress.jpg')}}">
                                        </a>
                                    </div>
                                    <h3><a href="../../Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097.html"
                                            title="View full details about the Sealy Nostromo Posturepedic Pocket 1400 Latex Mattress"
                                            mo-id="list item title">Sealy Nostromo Posturepedic Pocket 1400 Latex
                                            Mattress</a></h3>
                                    <div class="x____product-card__features">
                                        <div class="review pull-left" mo-type="navigation" mo-id="list item reevoo reviews">
                                            <a class="category_page_variant" href="https://mark.reevoo.com/partner/MAT/P1097">
                                                <div class="reevoo-badge__wrapper is-compact">
                                                    <a href="https://mark.reevoo.com/partner/MAT/P1097" class="reevoo-badge is-compact">
                                                        <div class="reevoo-badge__content">
                                                            <div class="reevoo-badge__score is-compact"><strong>8<i>.8</i></strong>
                                                                <br />out of 10 </div>
                                                            <div class="reevoo-badge__count is-compact">Bình luận
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>
                                        <img src="../../assets/icons/1x1.png" data-lazy-src="https://cdn.mattressonline.co.uk/content/features/44x44/icon-in-stock.png"
                                            alt="In Stock" title="In Stock">
                                    </div>
                                    <div class="price-cube-container" data-items="5" mo-subject="1097">
                                        <ul class="price-cube">
                                            <li mo-value="Single" mo-id="list item size tile">
                                                <a href="../../Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097.html#size=size-uk-single">
                                                    <div class="price-cube__size display-table">
                                                        <div class="align-middle">
                                                            <h4>Single</h4><span class="price-cube__dimensions">
                                                                3&#039; x 6&#039;3&quot; x 6&#039;3&quot; </span>
                                                        </div>
                                                    </div>
                                                    <div class="price-cube__price"> 500.000đ </div>
                                                </a>
                                            </li>
                                            <li mo-value="Double" mo-id="list item size tile">
                                                <a href="../../Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097.html#size=size-uk-double">
                                                    <div class="price-cube__size display-table">
                                                        <div class="align-middle">
                                                            <h4>Double</h4><span class="price-cube__dimensions">
                                                                4&#039;6&quot; x 6&#039;3&quot; </span>
                                                        </div>
                                                    </div>
                                                    <div class="price-cube__price"> 599.420đ </div>
                                                </a>
                                            </li>
                                            <li mo-value="King Size" mo-id="list item size tile">
                                                <a href="../../Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097.html#size=size-uk-king">
                                                    <div class="price-cube__size display-table">
                                                        <div class="align-middle">
                                                            <h4>King Size</h4><span class="price-cube__dimensions">
                                                                5&#039; x 6&#039;6&quot; </span>
                                                        </div>
                                                    </div>
                                                    <div class="price-cube__price"> 673.500đ </div>
                                                </a>
                                            </li>
                                            <li mo-value="Superking" mo-id="list item size tile">
                                                <a href="../../Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097.html#size=size-uk-superking">
                                                    <div class="price-cube__size display-table">
                                                        <div class="align-middle">
                                                            <h4>Superking</h4><span class="price-cube__dimensions">
                                                                6&#039; x 6&#039;6&quot; </span>
                                                        </div>
                                                    </div>
                                                    <div class="price-cube__price"> 807.420đ </div>
                                                </a>
                                            </li>
                                            <li mo-value="Superking Zip and Link" mo-id="list item size tile">
                                                <a href="../../Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097.html#size=size-uk-superking-ziplink">
                                                    <div class="price-cube__size display-table">
                                                        <div class="align-middle">
                                                            <h4>Superking Zip and Link</h4><span class="price-cube__dimensions">
                                                                6&#039; x 6&#039;6&quot; </span>
                                                        </div>
                                                    </div>
                                                    <div class="price-cube__price"> 899.950đ </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="delivery hidden-xs x----v5">
                                <div class="in-stock"><span>FREE Next Day Delivery</span> or choose a date</div>
                            </div>
                            <div class="size hidden-xs hidden">
                                <div class="control">
                                    <select class="form-control" name="size" commersive-variation="true"
                                        commersive-variation-sync="true">
                                        <option value="" selected>Choose size...</option>
                                        <option value=""></option>
                                        <option value="size-uk-single">Single (3&#039; x 6&#039;3&quot;) </option>
                                        <option value="size-uk-double">Double (4&#039;6&quot; x 6&#039;3&quot;)
                                        </option>
                                        <option value="size-uk-king">King Size (5&#039; x 6&#039;6&quot;) </option>
                                        <option value="size-uk-superking">Superking (6&#039; x 6&#039;6&quot;)
                                        </option>
                                        <option value="size-uk-superking-ziplink">Superking Zip and Link (6&#039; x
                                            6&#039;6&quot;) </option>
                                    </select>
                                </div>
                            </div>
                            <!--<div class="buttons"><div class="button"><a class="btn bottom btn-info btn-lg btn-block" href="/Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097">View Item</a></div><div class="button"><a class="btn bottom btn-success btn-lg btn-block" href="/Product/Sealy-Nostromo-Posturepedic-Pocket-1400-Latex-Mattress-P1097">Add to Basket</a></div></div>-->
                        </div>
                    </div>

                </div>

                <div class="pagination-list row ">
                    <div class="show-products col-xs-6"><span class="hidden-xs">Hiển thị </span><span class="x----v3-inline">
                            1-12 </span>
                        <select name="ItemsPerPage" class="form-control items-per-page x----v5">
                            <option value="/Shop/Sale-C429/?ItemsPerPage=6">6</option>
                            <option value="/Shop/Sale-C429/" selected="">12</option>
                            <option value="/Shop/Sale-C429/?ItemsPerPage=24">24</option>
                            <option value="/Shop/Sale-C429/?ItemsPerPage=48">48</option>
                            <option value="/Shop/Sale-C429/?ItemsPerPage=0">All</option>
                        </select> trong <span class="number-of-results">254 sản phẩm</span></div>
                    <div class="page-numbers col-xs-6">
                        <div class="x----v5"> Trang
                            <select name="Page" class="form-control page">
                                <option value="/Shop/Sale-C429/" selected="">1</option>
                                <option value="/Shop/Sale-C429/?Page=2">2</option>
                                <option value="/Shop/Sale-C429/?Page=3">3</option>
                                <option value="/Shop/Sale-C429/?Page=4">4</option>
                                <option value="/Shop/Sale-C429/?Page=5">5</option>
                                <option value="/Shop/Sale-C429/?Page=6">6</option>
                                <option value="/Shop/Sale-C429/?Page=7">7</option>
                                <option value="/Shop/Sale-C429/?Page=8">8</option>
                                <option value="/Shop/Sale-C429/?Page=9">9</option>
                                <option value="/Shop/Sale-C429/?Page=10">10</option>
                                <option value="/Shop/Sale-C429/?Page=11">11</option>
                                <option value="/Shop/Sale-C429/?Page=12">12</option>
                                <option value="/Shop/Sale-C429/?Page=13">13</option>
                                <option value="/Shop/Sale-C429/?Page=14">14</option>
                                <option value="/Shop/Sale-C429/?Page=15">15</option>
                                <option value="/Shop/Sale-C429/?Page=16">16</option>
                                <option value="/Shop/Sale-C429/?Page=17">17</option>
                                <option value="/Shop/Sale-C429/?Page=18">18</option>
                                <option value="/Shop/Sale-C429/?Page=19">19</option>
                                <option value="/Shop/Sale-C429/?Page=20">20</option>
                                <option value="/Shop/Sale-C429/?Page=21">21</option>
                                <option value="/Shop/Sale-C429/?Page=22">22</option>
                            </select><span class="info-extra"> of 22 </span><a class="x----v5" href="/Shop/Sale-C429/?Page=2"><span
                                    class="glyphicon glyphicon-chevron-right"></span></a></div>
                        <div class="x----v3"><span class="x----v3-inline">Trang:&nbsp;</span><strong>1</strong><a href="/Shop/Sale-C429/?Page=2">2</a>
                            <a href="/Shop/Sale-C429/?Page=3">3</a> … <a href="/Shop/Sale-C429/?Page=22">22</a><a href="/Shop/Sale-C429/?Page=2">Tiếp&gt;</a>
                            | <a href="/Shop/Sale-C429/?ItemsPerPage=0">Tất cả</a></div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('select[name="ItemsPerPage"], select[name="Page"], select[name="SortBy"]').change(function () {
            document.location.href = $(this).val()
        });
        $('div.facet-list.visible-xs div.facet-options').append($('div.facet-list.hidden-xs div.facet-group').clone());
        var e = $('div.facet-list.visible-xs');
        $('a.refine', e).click(function () {
            var n = e.hasClass('closed');
            n = !n;
            e.removeClass('open closed');
            e.addClass(n ? 'closed' : 'open');
            if (n) {
                $('.facet-options', e).slideUp(400)
            } else {
                $('.facet-options', e).slideDown(400)
            };
            return !1
        });
        $('div.facet-list.visible-xs .facet-options').hide();
        $('div.facet-list.visible-xs .facet-options .facet').addClass('closed');
        $('div.facet-list.visible-xs .facet-options .facet ul').hide();
        $('div.facet-list.visible-xs .facet > a').click(function () {
            var e = $(this).parents('.facet'),
                n = e.hasClass('closed');
            n = !n;
            e.removeClass('open closed');
            e.addClass(n ? 'closed' : 'open');
            if (n) {
                e.find('ul').slideUp(400)
            } else {
                e.find('ul').slideDown(400)
            };
            return !1
        });
        $('input[data-url]').change(function () {
            document.location.href = $(this).attr('data-url')
        });
        $('.read-more').each(function () {
            var e = $(this);
            n(e);
            a(e)
        });

        function n(e) {
            var n = e.find('.read-more-content').contents();
            n.each(function (n, e) {
                if (e.nodeType === 3 && e.textContent.trim() === '') {
                    $(e).remove()
                }
            });
            n.each(function (e, n) {
                if (n.nodeType === 3) {
                    $(n).wrap('<span />')
                }
            });
            var a = e.find('.read-more-content').contents().filter(function (n, e) {
                if ($(e).find('img').length) {
                    return !1
                };
                if (e.nodeName === 'IMG') {
                    return !1
                };
                if (e.nodeName === 'STYLE') {
                    return !1
                };
                return !0
            });
            a.wrapAll('<div class=\'inner\' />')
        };

        function a(e) {
            var a = 100,
                n = e.find('.read-more-content .inner'),
                i = n.height();
            if (i > a) {
                e.addClass('collapsed');
                if (!!n.children('p').length && n.children('p').first().height() < 65) {
                    e.addClass('collapsed--small-para')
                }
            };
            e.find('.read-more-expand > a').click(function () {
                e.removeClass('collapsed').addClass('expanded');
                return !1
            });
            e.find('.read-more-collapse > a').click(function () {
                e.removeClass('expanded').addClass('collapsed');
                return !1
            })
        }
    });

</script>
@endsection