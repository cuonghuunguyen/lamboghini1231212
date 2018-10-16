@extends('user.payment.payment-template')
@section('content')
<div id="content" class="center group responsive-checkout__content">
    <div class="center-container group">
        <div class="group" style="float: left; width: 806px; position: relative;">
            <div class="center-column group" style="position: relative; float: right;">
                <div id="payment-method-page">
                    <ol class="basketbreadcrumb">
                        <li><a href="http://www.mattressonline.co.uk/Basket">Basket</a></li>
                        <li class="active">Payment Method</li>
                        <li>Your Details</li>
                        <li>Payment</li>
                    </ol>

                    <h1>Payment Method</h1>
                    <div id="functionarea" class="">
                        <form id="payment-method-form" class="payment-methods-container">
                            <hr>


                            <div class="input-form">
                                <div class="section">
                                    <p>Please provide your contact details below:</p>
                                    <div class="field">
                                        <label for="billing-title">Họ</label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Tên</label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Công ty</label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Số điện thoại</label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Địa chỉ</label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
                                            value="">
                                    </div>
                                    <div class="field">
                                        <label for="billing-title">Địa chỉ nhận hàng</label>
                                        <input id="billing-title" autocomplete="honorific-prefix" name="title" required="required"
                                            type="text" placeholder="Required" data-hj-masked="" class="text-field"
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
                                        I agree to the <a href="#" class="js-modal-link" data-modal="terms-of-sale">terms
                                            of sale</a> and <a href="#" class="js-modal-link" data-modal="privacy-statement">privacy
                                            statement</a>
                                    </label>
                                </div>
                                <!--  terms of sale modal -->
                                <div class="modal" id="terms-of-sale">
                                    <div class="modal__body">
                                        <div class="modal__content">
                                            <a href="https://www.mattressonline.co.uk/Terms-Of-Sale" target="_blank">View
                                                in a new window</a>
                                            <div class="modal__close"></div>

                                            <div class="modal__main">
                                                <div class="tos-content">
                                                    <h1>Terms of Sale</h1>
                                                    <br>
                                                    <ul style="list-style-type: disc;margin-left: 2em;">
                                                        <li>The following terms and conditions of sale constitute a
                                                            binding agreement between MattressOnline.co.uk Ltd and its
                                                            customers which applies to all purchases made on the
                                                            MattressOnline.co.uk web site.</li>

                                                        <li>Customers are reminded that these terms and conditions do
                                                            not affect your statutory rights.</li>

                                                        <li>A copy of these Terms of Sale will be emailed to you along
                                                            with your order confirmation.</li>

                                                        <li>You agree not to change these Terms of Sale from the form
                                                            presented by Mattress Online.</li>

                                                        <li>All other terms and conditions including those in any order
                                                            submitted by You are expressly excluded and shall have no
                                                            effect.</li>

                                                        <li> All communications made thus far by Mattress Online are
                                                            invitations to treat only.</li>
                                                    </ul>
                                                    <br>
                                                    <p><b>IMPORTANT NOTE:</b> Please do not dispose of your current
                                                        mattress / bed until you are happy with the items you have
                                                        purchased from Us and have read in full the following terms and
                                                        conditions.</p>

                                                    <br> <a id="acceptance"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>1. Acceptance of Order</b></p>

                                                    <ol>1.1. You accept these Terms of Sale when you tick "I confirm
                                                        that I have read and agree to the Terms of Sale" during the
                                                        checkout process. This represents an offer of contract from You
                                                        only and is not binding until accepted by Us.</ol>
                                                    <br>
                                                    <ol>1.2. Receipt of an order via the MattressOnline.co.uk website
                                                        by Us does not constitute acceptance of an order. We reserve
                                                        the right to refuse your order for any reason.</ol>
                                                    <br>
                                                    <ol>1.3. Any errors or omissions in any catalogue, sales
                                                        literature, price list, dispatch note, invoice or other
                                                        documentation or any information issued by Us from time to time
                                                        shall be subject to correction without liability on Our part.</ol>
                                                    <br>
                                                    <ol>1.4. You will be responsible for ensuring the accuracy of any
                                                        order submitted by You, confirming where reasonably requested
                                                        to do so by Us any telephone orders, and for the giving of such
                                                        information as is necessary relating to the Sale Terms and
                                                        delivery (as the case may be) to enable us to deliver the goods
                                                        to the delivery address notified by You.</ol>
                                                    <br>
                                                    <ol> 1.5. When writing to Us, You must quote your order number.</ol>


                                                    <br><a id="sales"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>2. General Sales</b></p>

                                                    <ol>2.1. All purchases must be paid in full before delivery.
                                                        MattressOnline.co.uk Ltd will continue to own, and reserve the
                                                        right to repossess any goods sold from its web site until
                                                        payment has been received and cleared in full.</ol>
                                                    <br>
                                                    <ol>2.2. Payments are accepted on most credit or debit cards via
                                                        our secure server. I/We authorise you to make any enquiries you
                                                        deem necessary in connection with this sale. This information
                                                        will be used for fraud prevention or debt recovery.</ol>
                                                    <br>
                                                    <ol>2.3. All prices quoted are for new products and are priced in
                                                        pounds sterling including any applicable taxes at current
                                                        rates.</ol>
                                                    <br>
                                                    <ol>2.4. Price includes delivery to any mainland UK address, Monday
                                                        to Friday. Additional charges will be incurred for delivery to
                                                        the Scottish Highlands and Grampians. Saturday deliveries are
                                                        possible at an additional cost, dependent on area.</ol>
                                                    <br>
                                                    <ol>2.5. An invoice giving a description of the goods purchased and
                                                        the price paid will be emailed to you.</ol>

                                                    <br><a id="delivery"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>3. Delivery</b></p>

                                                    <ol>3.1. Delivery times will depend on the item and the
                                                        manufacturer. If your item is out of stock, our delivery lead
                                                        times will be clearly detailed on the product page.</ol>
                                                    <br>
                                                    <ol>3.2. Items we carry in stock are normally delivered within 24
                                                        hours or on the day you specify at the point of order - lead
                                                        times on items out of stock will vary so please check at the
                                                        time of ordering.</ol>
                                                    <br>
                                                    <ol>3.3. All delivery times are subject to stock availability and
                                                        whether your payments have been processed and validated.</ol>
                                                    <br>
                                                    <ol>3.4. MattressOnline.co.uk Ltd are only responsible for
                                                        delivering goods to the customer's door.</ol>
                                                    <br>
                                                    <ol>3.5. All delivery dates are given in good faith but are subject
                                                        to all matters beyond the control of the Company: including
                                                        acts of nature, strikes, lockouts and delay by suppliers.</ol>
                                                    <br>
                                                    <ol>3.6. Please ensure you check your items thoroughly on delivery
                                                        for damage: If upon delivery you find your goods are damaged,
                                                        please sign for them as "Damaged" and refuse delivery.</ol>
                                                    <br>
                                                    <ol>3.7. MattressOnline.co.uk must be notified within 24 hours of
                                                        your delivery if any part of your order is missing. All claims
                                                        will become void after this period.</ol>
                                                    <br>
                                                    <ol>3.8. Deliveries to the following postcodes may take a little
                                                        longer - please allow 3-14 days for deliveries to AB, DD, IV,
                                                        KW, PA20-80 and PH.</ol>
                                                    <br>
                                                    <ol>3.9. We are unable to deliver to Ireland (including Northern
                                                        Ireland) and all offshore islands including Isle of Wight and
                                                        Isle of Man, we reserve the right to recover all costs for
                                                        orders processed to these areas.</ol>
                                                    <br>
                                                    <ol>3.10. For free delivery, one delivery driver will bring your
                                                        item to the door of your house or to the ground floor of your
                                                        block of flats.</ol>
                                                    <br>
                                                    <ol>3.11. If you need help to get the mattress upstairs, we
                                                        recommend upgrading to our £19.99 Two Man delivery service at
                                                        checkout. This is to your room of choice (where accessible and
                                                        at owner's risk). Please note that our courier is only insured
                                                        to take your item(s) no higher than the third floor. However,
                                                        we can usually accommodate delivery to other floors provided
                                                        there is a service lift available that can fit your item(s) in.</ol>
                                                    <br>
                                                    <ol>3.12. If you are ordering an item that is 'out of stock',
                                                        please refer to the specific delivery details on the product
                                                        page. In very rural areas, please allow up to 14 days for your
                                                        delivery.</ol>
                                                    <br>
                                                    <ol>3.13. If you cancel your order after it has left our warehouse,
                                                        you will be liable for the delivery charge.</ol>


                                                    <br><a id="accuracy"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>4. Accuracy of Information</b></p>

                                                    <ol>4.1. MattressOnline.co.uk Ltd takes great care to faithfully
                                                        reproduce all descriptions and specifications as provided by
                                                        the manufacturers, however, errors may occur. If you are in any
                                                        doubt, we recommend you contact our Customer Service team to
                                                        discuss the item in more detail.</ol>
                                                    <br>
                                                    <ol>4.2. The illustrations and colours are representative only.</ol>
                                                    <br>
                                                    <ol>4.3. All sizes are correct according to the manufacturer's
                                                        specifications.</ol>
                                                    <br>
                                                    <ol>4.4. All items are subject to availability.</ol>
                                                    <br>
                                                    <ol>4.5. All details, specifications and prices are accurate at
                                                        time of publication, but may subsequently change. While we make
                                                        every effort to ensure that the mattresses shown are as close
                                                        as possible to the actual specification and size, there may be
                                                        slight variations due to the nature of the medium.</ol>
                                                    <br>
                                                    <ol>4.6. We reserve the right to alter specifications as advised by
                                                        the manufacturers.</ol>
                                                    <br>
                                                    <ol>4.7. Responsibility for checking the dimensions of your bed or
                                                        mattress lies solely with the customer, MattressOnline.co.uk
                                                        Ltd cannot be held responsible for customers ordering the
                                                        incorrect size or not checking the dimensions before purchase.</ol>



                                                    <br><a id="bedsizes"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>5. Standard Bed Sizes</b></p>

                                                    <ol>5.1. There are no lawful guidelines for sizes of beds that have
                                                        to be used. The size of the product used is for descriptive
                                                        purposes and there is no assurance that these sizes will be
                                                        exactly the same across different manufacturers.</ol>
                                                    <br>

                                                    <ol>5.2. For instance, a double mattress from one manufacturer may
                                                        not exactly fit a double divan from a different manufacturer.</ol>

                                                    <br>

                                                    <ol>5.3. Additionally, please note that mattresses are hand made
                                                        with many individual components. As such, it is not always
                                                        possible for a manufacturer to produce an exact size. This is
                                                        especially the case for pocket sprung mattresses, where the
                                                        free movement of the springs can marginally alter the overall
                                                        size of the mattress. For this reason, it is necessary to allow
                                                        a +/- tolerance in the width and length of your mattress.
                                                        Although this tolerance depends on each individual
                                                        manufacturer, as a guide we suggest an allowance of +/- 1 inch
                                                        (2.54cm).</ol>

                                                    <br>

                                                    <ol>5.4. Please be aware that when converted, metric sizes are not
                                                        exactly the same as imperial sizes. Below are all the sizes of
                                                        mattresses we sell and beds that fit these sized mattresses:</ol>
                                                    <br>
                                                    <ol>
                                                        <table>

                                                            <tbody>
                                                                <tr class="title">
                                                                    <td class="title-separation">Size</td>
                                                                    <td class="title-separation">Imperial</td>
                                                                    <td>Metric</td>
                                                                </tr>



                                                                <tr>
                                                                    <td>Small Single Short</td>
                                                                    <td>2'6" x 5'9"</td>
                                                                    <td>75cm x 175cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Small Single</td>
                                                                    <td>2'6" x 6'3"</td>
                                                                    <td>75cm x 190cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Single Short</td>
                                                                    <td>3' x 5'9"</td>
                                                                    <td>90cm x 175cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Single</td>
                                                                    <td>3' x 6'3"</td>
                                                                    <td>90cm x 190cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Small Double</td>
                                                                    <td>4' x 6'3"</td>
                                                                    <td>120cm x 190cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Double</td>
                                                                    <td>4'6" x 6'3"</td>
                                                                    <td>135cm x 190cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>King</td>
                                                                    <td>5' x 6'6"</td>
                                                                    <td>150cm x 200cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Superking</td>
                                                                    <td>6' x 6'6"</td>
                                                                    <td>180cm x 200cm</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>European Small Single</td>
                                                                    <td>2'6" x 6'6"</td>
                                                                    <td>75cm x 200cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>European Single</td>
                                                                    <td>3' x 6'6"</td>
                                                                    <td>90cm x 200cm</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>European Double</td>
                                                                    <td>4'7" x 6'6"</td>
                                                                    <td>140cm x 200cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>European King</td>
                                                                    <td>5'3" x 6'6"</td>
                                                                    <td>160cm x 200cm</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </ol>
                                                    <br><br>

                                                    <ol>For more information and advice, please visit: <a href="http://www.sleepcouncil.org.uk/"
                                                            target="_blank">SleepCouncil.org.uk</a></ol>


                                                    <br><a id="warranty"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>6. Warranty &amp; Guarantees</b></p>

                                                    <ol>6.1. All items are guaranteed for a minimum of 12 months.</ol>
                                                    <br>
                                                    <ol>6.2. All goods sold comply with all applicable legislation and
                                                        consumers are reminded that these items and conditions do not
                                                        affect your statutory rights.</ol>
                                                    <br>
                                                    <ol>6.3. Some mattresses also benefit from a free limited warranty
                                                        of up to 10 years.</ol>
                                                    <br>
                                                    <ol>6.4. In the unlikely event you do have a warranty claim, we
                                                        request a photograph of the fault to forward to the
                                                        manufacturers who can then authorise immediate action for the
                                                        warranty claim.</ol>
                                                    <br>
                                                    <ol>6.5. There will be charges applied to warranty claims after the
                                                        first 12 months - this varies dependent on the manufacturer -
                                                        and any charges will be clarified before a warranty claim is
                                                        processed.</ol>
                                                    <br>
                                                    <ol>6.6. Any claims made after the first 12 months are subject to
                                                        transport charges.</ol>


                                                    <br><a id="cancellation"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>7. Right of Cancellation</b></p>

                                                    <ol>7.1. The customer has an unconditional right to cancel an
                                                        order.</ol>
                                                    <br>
                                                    <ol>7.2. You must exercise the right to cancel an order by
                                                        informing MattressOnline.co.uk Ltd in writing to our postal
                                                        address or via email before the goods are dispatched.</ol>
                                                    <br>
                                                    <ol>7.3. Customers wishing to cancel their order after dispatch
                                                        must ensure that reasonable care is taken of the goods and that
                                                        they are returned to MattressOnline.co.uk Ltd (see returns
                                                        address) unopened and unused in an 'as new' condition complete
                                                        in its sealed original packaging and with all instructions
                                                        included.</ol>
                                                    <br>
                                                    <ol>7.4. If the goods have left our premises, transport charges
                                                        will be incurred. The customer is responsible for all transport
                                                        costs, it is the responsibility of the customer to return the
                                                        goods using their own transport to the address at the bottom of
                                                        this page. Please note: our transport charges start from £35 +
                                                        VAT.</ol>
                                                    <br>
                                                    <ol>7.5. To accept an item for return we must be notified in
                                                        writing within 14 days of delivery. The item must be then
                                                        returned to us as soon as possible.</ol>
                                                    <br>
                                                    <ol>7.6. Orders paid with Interest Free Credit can only be
                                                        cancelled within 14 days of placing the order. Please note:
                                                        custom orders manufactured to customer's specifications
                                                        (including non-standard sizes) are non-returnable / refundable.</ol>
                                                    <br>
                                                    <ol>7.7. Cancellation Email address: <a href="mailto:customerservice@mattressonline.co.uk">customerservice@mattressonline.co.uk</a></ol>
                                                    <br>
                                                    <ol>7.8. Cancellation Postal address: see section 10.</ol>


                                                    <br><a id="damaged"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>8. Damaged / Disputed Goods</b></p>

                                                    <ol>8.1. We will exchange any mattress that is either damaged or
                                                        faulty upon delivery only when the customer follows all of our
                                                        terms and conditions that apply.</ol>
                                                    <br>
                                                    <ol>8.2. Before processing a damaged / disputed goods claim, we
                                                        will require a photograph of the damaged / disputed goods
                                                        before any action can be processed.</ol>
                                                    <br>
                                                    <ol>8.3. It is the responsibility of the customer to check the
                                                        goods have been delivered in good condition.</ol>
                                                    <br>
                                                    <ol>8.4. If you are unable to check the goods for damage before
                                                        signing the delivery note, please sign for the item as damaged.</ol>
                                                    <br>
                                                    <ol>8.5. If you sign for an item as delivered in good condition and
                                                        you subsequently notify us of damage, this may effect your
                                                        eligibility for an exchange.</ol>
                                                    <br>
                                                    <ol>8.6. Please contact our Customer Services team within 24 hours
                                                        of delivery to notify us of a fault / damages via email to <a
                                                            href="mailto:customerservice@mattressonline.co.uk">customerservice@mattressonline.co.uk</a>.</ol>
                                                    <br>
                                                    <ol>8.7. Please send in photographic evidence of any damages as
                                                        soon as possible via email to <a href="mailto:customerservice@mattressonline.co.uk">customerservice@mattressonline.co.uk</a>
                                                        within 7 calendar days.</ol>


                                                    <br><a id="refunds"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>9. Refunds</b></p>

                                                    <ol>9.1. MattressOnline.co.uk Ltd will refund the purchase price of
                                                        the goods or services within 14 days of receiving and checking
                                                        the goods are as new and complete - less any transport costs.</ol>
                                                    <br>
                                                    <ol>9.2. Customers who refuse delivery at the door will be liable
                                                        for a return delivery charge from £35 + VAT.</ol>
                                                    <br>
                                                    <ol>9.3. Unfortunately, we cannot authorise refunds or exchanges on
                                                        any products that have been unpacked or slept on.</ol>
                                                    <br>
                                                    <ol>9.4. To accept an item for return we must be notified in
                                                        writing within 14 days of delivery. The item must be then
                                                        returned to us as soon as possible.</ol>
                                                    <br>
                                                    <ol>9.5. MattressOnline.co.uk Ltd cannot be held liable for items
                                                        ordered incorrectly or in the wrong size.</ol>
                                                    <br>
                                                    <ol>9.6. No refunds can be given for inadequate access or the item
                                                        not fitting in the customer's room.</ol>
                                                    <br>
                                                    <ol>9.7. Where possible, MattressOnline.co.uk Ltd will liaise with
                                                        the manufacturer with regards to an exchange - it is the sole
                                                        discretion of the manufacturer to offer an exchange if this
                                                        circumstance should arise.</ol>
                                                    <br>
                                                    <ol>9.10. Exchanges, where applicable, will incur additional costs.</ol>
                                                    <br>
                                                    <ol>9.11. Items ordered on Interest Free Credit are not eligible
                                                        for cash refunds. However, we will raise a credit for the
                                                        appropriate value (less any original delivery costs) for use
                                                        within our shop.</ol>


                                                    <br><a id="returns"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>10. Returns Address and Postal Address</b></p>

                                                    <ol>Please send all returns and mail to the following address:</ol><br>
                                                    <ol>MattressOnline.co.uk Ltd<br>
                                                        Units 26-31<br>
                                                        Aldwarke Lane<br>
                                                        Waddington Way<br>
                                                        Rotherham<br>
                                                        South Yorkshire<br>
                                                        S65 3SH</ol>
                                                    <br>
                                                    <ol>Please supply our telephone number: 01709 780 881 to the
                                                        courier / postal service as a point of contact should they run
                                                        into any issues when trying to deliver the goods.</ol><br>

                                                    <br><a id="pricing"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>11. Pricing</b></p>

                                                    <ol>11.1. All prices are inclusive of VAT.</ol>
                                                    <br>
                                                    <ol>11.2. A VAT applicable invoice will be emailed to you
                                                        automatically upon placing your order.</ol>

                                                    <br><a id="privacy"></a>
                                                    <hr>
                                                    <br>
                                                    <p><b>12. Privacy Policy</b></p>

                                                    <ol>12.1. MattressOnline.co.uk Ltd use the information supplied by
                                                        you through the ordering page to process and fulfil your order.
                                                        We do not retain any payment details; only contact information.
                                                        This information will not be supplied
                                                        to any third party except to our reviewing partners (see 12.2).</ol>
                                                    <br>
                                                    <ol>12.2. You will be contacted via email by Trustpilot, who handle
                                                        our service reviews, and by Reevoo, who handle our product
                                                        reviews. You can choose to not to leave any reviews if you so
                                                        wish.</ol>
                                                    <br>
                                                    <ol>12.3. You may also be contacted by us for marketing purposes.
                                                        You can opt out at any time. To be removed from our mailing
                                                        please email a request to <a href="mailto:unsubscribe@mattressonline.co.uk">unsubscribe@mattressonline.co.uk</a>.
                                                        Alternatively, click the unsubscribe link that will be on any
                                                        of our marketing emails.</ol>
                                                </div>
                                            </div>

                                            <div class="modal__ctas">
                                                <a class="cta cta--close">Ok</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal__underlay"></div>
                                </div>

                                <!-- privacy policy modal -->
                                <div class="modal" id="privacy-statement">
                                    <div class="modal__body">
                                        <div class="modal__content">
                                            <a href="https://www.mattressonline.co.uk/Privacy-Statement" target="_blank">View
                                                in a new window</a>
                                            <div class="modal__close"></div>

                                            <div class="modal__main">
                                                <style>

                                                    .size-column {
float: left;
width: 25%;
padding: 5px;
}

.size-column img {
margin-top: 6px;
width: 100%;
}

/* Clear floats after the columns */
.size-row:after {
content: "";
display: table;
clear: both;
}

.textbox {
    width: 50%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 766px) {
.size-column {
width: 50%;
}
}


button.accordion-bf{
background-color: #eee;
color: #444;
cursor: pointer;
padding: 18px;
width: 100%;
border: none;
text-align: left;
outline: none;
font-size: 15px;
transition: 0.4s;
}

button.accordion-bf:hover {
background-color: #ddd;
color: #444;
cursor: pointer;

}

button.accordion-bf.active, button.accordion:hover {
background-color: #ddd;
}

button.accordion-bf:after {
content: '\002B';
color: #777;
font-weight: bold;
float: right;
margin-left: 5px;
}

button.accordion-bf.active:after {
content: "\2212";
}

div.panel-bf {
padding:0 18px 18px 18px;
background-color: white;
max-height: 0;
overflow: hidden;
transition: max-height 0.2s ease-out;
}



</style>

                                                <div class="static-fw">
                                                    <h1>Privacy Statement</h1>
                                                    <p>At Mattress Online, we are committed to protecting your privacy.
                                                        We comply with European Union data protection requirements,
                                                        including the <a href="/gdpr" target="_blank">General Data
                                                            Protection Regulation</a>.</p>

                                                    <p>This privacy policy explains:</p>

                                                    <ul>
                                                        <li>Who we are</li>
                                                        <li>What information we collect</li>
                                                        <li>How we use it</li>
                                                        <li>How we keep it safe and secure</li>
                                                        <li>Who we share it with</li>
                                                        <li>How you can view, change or remove your information</li>
                                                    </ul>

                                                    <p>You can visit Mattress Online without identifying yourself or
                                                        revealing any personal information. Once you provide us with
                                                        information by which you can be identified, you can be assured
                                                        that we will use this information only for the purposes set out
                                                        in this policy.</p>

                                                    <button class="accordion-bf" id="who">Who we are</button>
                                                    <div class="panel-bf">

                                                        <p>We're Mattress Online, an <a href="/Awards" target="_blank">award-winning</a>,
                                                            UK-leading retailer of mattresses and beds. We sell
                                                            mattresses, beds and bedroom products to customers
                                                            nationwide. We're based in Rotherham, South Yorkshire and
                                                            have been established since 2004. <a href="/About-Us"
                                                                target="_blank">Read more about us</a>!</p>

                                                    </div>

                                                    <button class="accordion-bf" id="information-collect">The
                                                        information we collect</button>
                                                    <div class="panel-bf">

                                                        <p>We only collect information that we need to deliver our
                                                            services to you.</p>

                                                        <p>When you shop with us, we need your:</p>

                                                        <ul>
                                                            <li>Name</li>
                                                            <li>Phone number</li>
                                                            <li>Address</li>
                                                            <li>Email address</li>
                                                            <li>Payment details</li>
                                                            <li>IP address</li>
                                                        </ul>

                                                        <p>For more information, please visit our <a href="/gdpr"
                                                                target="_blank">guide</a>.</p>

                                                    </div>

                                                    <button class="accordion-bf" id="information-use">How we use your
                                                        information</button>
                                                    <div class="panel-bf">

                                                        <p>We use the information you give us to:</p>

                                                        <ul>
                                                            <li>Process your order</li>
                                                            <li>Send you delivery notifications</li>
                                                            <li>Respond to your queries</li>
                                                            <li>Enable you to review your purchase and experience</li>
                                                            <li>Email you the latest offers and advice</li>
                                                        </ul>

                                                        <p>We will only ask you to review us and email you offers and
                                                            advice if you opted in. You can opt out of this at any
                                                            time.</p>

                                                        <p>To find out more, please visit our <a href="/gdpr" target="_blank">guide</a>.</p>

                                                    </div>

                                                    <button class="accordion-bf" id="information-secure">How we keep
                                                        your information secure</button>
                                                    <div class="panel-bf">

                                                        <p>When you give us personal information, we make sure it's
                                                            kept secure.</p>

                                                        <p>We use industry-standard SSL encryption when we collect or
                                                            transfer sensitive data such as credit card information.
                                                            This provides a layer of security over all information you
                                                            share.</p>

                                                        <p>You can easily see that our website is secure by looking at
                                                            the address bar in your browser. Here, you will see a
                                                            padlock icon. Our website is also prefixed with "https",
                                                            indicating that it is secure.</p>

                                                        <p>We use strict data control, processing and confidentiality
                                                            policies. These safeguards protect the information we
                                                            collect, preventing unauthorised access and disclosure.</p>

                                                        <p>We will never:</p>

                                                        <ul>
                                                            <li>Sell or rent your information to third parties</li>
                                                            <li>Disclose your information to any person or company who
                                                                does not need to access it</li>
                                                        </ul>

                                                    </div>

                                                    <button class="accordion-bf" id="information-share">Who we share
                                                        your information with</button>
                                                    <div class="panel-bf">

                                                        <p>We share your information with a select number of trusted
                                                            service providers. We only disclose information that is
                                                            strictly necessary to provide your service.</p>

                                                        <p>For more information, please visit our <a href="/gdpr"
                                                                target="_blank">guide</a>.</p>

                                                    </div>

                                                    <button class="accordion-bf" id="information-update">How you can
                                                        view, change and remove your information</button>
                                                    <div class="panel-bf">

                                                        <p>It's your information, and you're in control of it.</p>

                                                        <p>You can ask us to:</p>

                                                        <ul>
                                                            <li>Provide a copy of your information</li>
                                                            <li>Change your information</li>
                                                            <li>Remove your information</li>
                                                        </ul>

                                                        <p>You can do this by filling out <a href="/gdpr#form" target="_blank">this
                                                                form</a>.</p>

                                                        <p>Alternatively, you can contact us:</p>

                                                        <p><strong>Phone</strong><br>
                                                            01709 319 083<br>

                                                        </p>
                                                        <p><strong>Email</strong><br>
                                                            customerservice@mattressonline.co.uk<br>

                                                        </p>
                                                        <p><strong>Post</strong><br>
                                                            MattressOnline.co.uk<br>
                                                            Units 26-31<br>
                                                            Waddington Way<br>
                                                            Rotherham<br>
                                                            South Yorkshire<br>
                                                            S65 3SH
                                                            <br><br>

                                                        </p>
                                                    </div>

                                                    <button class="accordion-bf" id="other-websites">Links to other
                                                        websites</button>
                                                    <div class="panel-bf">

                                                        <p>Our website contains links to other organisations' websites.
                                                            We do not have any control over these websites. Once you
                                                            have used these links to leave our site, we cannot be
                                                            responsible for the protection and privacy of any
                                                            information you provide to these websites. We recommend
                                                            that you read the individual privacy policies of these
                                                            websites.</p>

                                                    </div>

                                                    <button class="accordion-bf" id="cookies">Use of cookies</button>
                                                    <div class="panel-bf">

                                                        <p>Like most websites, we use cookies. Cookies are tiny pieces
                                                            of information that are sent from a website and stored in
                                                            your computer. They help to make your online experience
                                                            easier.</p>

                                                        <p>It is possible to turn off cookies in your browser settings.
                                                            However, this means that you won't be able to interact with
                                                            websites - including ours - or make purchases.</p>

                                                    </div>

                                                    <p>We may change this policy occasionally. Please check this page
                                                        to stay up-to-date.</p>

                                                    <p>If you have any questions, please get in touch.</p>


                                                </div>


                                                <script>
                                                    var acc = document.getElementsByClassName("accordion-bf");
                                                    var i;

                                                    for (i = 0; i < acc.length; i++) {
                                                        acc[i].onclick = function (e) {
                                                            e.preventDefault();
                                                            this.classList.toggle("active");
                                                            var panel = this.nextElementSibling;
                                                            if (panel.style.maxHeight) {
                                                                panel.style.maxHeight = null;
                                                            } else {
                                                                panel.style.maxHeight = panel.scrollHeight + "px";
                                                            }
                                                        }
                                                    }
                                                </script>
                                            </div>

                                            <div class="modal__ctas">
                                                <a class="cta cta--close">Ok</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal__underlay"></div>
                                </div>

                               
                            </div>
                        </form>
                    </div>

                    <script type="application/json" id="consent-data">[{"_id":"tos-privacy","messaging":"I agree to the terms of sale and privacy statement","consented":false},{"_id":"consent-order","messaging":"I agree to Mattress Online contacting me about my mattress purchase","consented":false,"alsoCovers":["consent-to-review","consent-abandoned-basket"]},{"_id":"consent-marketing","messaging":"I would like Mattress Online to email me advice about my purchase, sleep tips and future offers","consented":false,"alsoCovers":["consent-advice-on-purchase","consent-advice-marketing"]},{"_id":"consent-to-review","messaging":"I would like to review my mattress and shopping experience. (Our independent review partners Reevoo and Trustpilot will invite you to share your views.)","consented":false},{"_id":"consent-abandoned-basket","messaging":"I would like a reminder of the items in my basket if I don’t complete my purchase","consented":false},{"_id":"consent-advice-on-purchase","messaging":"I would like advice to help me get the most out of my mattress and improve my sleep","consented":false},{"_id":"consent-advice-marketing","messaging":"I would like to be the first to know about future exclusive savings, offers and free upgrades","consented":false}]</script>
                    <button class="cta cta--large" id="payment-method-submit" alt="Proceed to Your Details" type="submit"
                        data-label="Proceed to Your Details">Xem hóa đơn</button>



                </div>

                <div id="validation-errors" class="dialog">
                    <p>Có lỗi xảy ra, thử lại:</p>
                    <div id="validation-errors-list">

                    </div>
                    <div class="buttons">
                        <input class="button-100" type="button" value="OK" onclick="closeDialog();">
                    </div>
                </div>

                <div class="basket-buttons group">
                    <div class="continue-shopping">
                        <a href="http://www.mattressonline.co.uk/Basket" style="color: #7c7c7c;">Về Giỏ H</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection