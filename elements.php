<?php
include ('views/header.php');
?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title">
                <h1>Elements</h1>
            </section>
            <!--end page-title-->

            <section>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="section-title">
                            <h2>Headings</h2>
                        </div>
                        <h1>Heading 1</h1>
                        <h2>Heading 2</h2>
                        <h3>Heading 3</h3>
                        <h4>Heading 4</h4>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="section-title">
                            <h2>Paragraph</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia odio sed lorem ultricies
                            feugiat. Maecenas feugiat, tortor et semper pulvinar, lectus sapien posuere ligula,
                        </p>
                        <div class="section-title">
                            <h2>Links</h2>
                            <div class="links">
                                <a href="#">Classic link</a>
                                <a href="#" class="link">Link</a>
                                <a href="#" class="link arrow">Link with arrow</a>
                                <br>
                                <a href="#" class="icon">Classic link with icon <i class="fa fa-map-marker"></i></a>
                                <a href="#" class="link font-color-dark">Dark link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="section-title">
                            <h2>Modals</h2>
                        </div>
                        <h4>This link will open external Sign In modal window</h4>
                        <a href="#" data-modal-external-file="modal_sign_in.php" data-target="modal-sign-in">Sign In Modal</a>
                        <br>
                        <br>
<pre>
&lt;a href="#" <strong>data-modal-external-file="modal_sign_in.php" data-target="modal-sign-in"</strong>&gt;Sign In&lt;/a&gt;
</pre>
                    </div>
                </div>
            </section>
            <section>
                <div class="section-title">
                    <h2>Item Grid</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="1">
                            <figure class="price">$690</figure>
                            <figure class="circle featured sale">-25%</figure>
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Average Price: $8 - $30</figure>
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Marky’s Restaurant</h3>
                                    <h4>63 Birch Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/1.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="2">
                            <a href="detail.html">
                                <div class="description">
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Ironapple</h3>
                                    <h4>4209 Glenview Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/2.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="3">
                                    <span class="stars"></span>
                                    <span class="reviews">13</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="15">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Happy hour: 18:00 - 19:00</figure>
                                    <div class="label label-default">Bar & Grill</div>
                                    <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                    <h4>3857 Losh Lane</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/3.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">56</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="3">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Starts at: 19:00</figure>
                                    <div class="label label-default">Event</div>
                                    <h3>Food Festival</h3>
                                    <h4>840 My Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/4.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">12</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-4-->
                </div>
                <!--end row-->
            </section>
            <section>
                <div class="section-title">
                    <h2>Items Row</h2>
                    <div class="item item-row" data-id="1" data-latitude="40.72807182" data-longitude="-73.85735035">
                        <a href="detail.html">
                            <div class="image bg-transfer">
                                <figure>Average Price: $8 - $30</figure>
                                <img src="assets/img/items/1.jpg" alt="">
                            </div>
                            <!--end image-->
                            <div class="map"></div>
                            <div class="description">
                                <h3>Marky’s Restaurant</h3>
                                <h4>63 Birch Street</h4>
                                <div class="label label-default">Restaurant</div>
                            </div>
                            <!--end description-->
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                            </div>
                            <!--end additional-info-->
                        </a>
                        <div class="controls-more">
                            <ul>
                                <li><a href="#">Add to favorites</a></li>
                                <li><a href="#">Add to watchlist</a></li>
                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                            </ul>
                        </div>
                        <!--end controls-more-->
                    </div>
                    <!--end item.row-->
                </div>
            </section>
            <section>
                <div class="section-title">
                    <h2>Buttons</h2>
                </div>
                <div style="background-color: black; padding: 20px">
                    <a href="#" class="btn btn-default">btn-default</a>
                    <a href="#" class="btn btn-default btn-rounded">btn-default btn-rounded</a>
                    <a href="#" class="btn btn-default btn-framed btn-rounded">btn-default btn-framed btn-rounded</a>
                    <a href="#" class="btn btn-default btn-framed btn-rounded btn-light-frame">btn-default btn-framed btn-rounded btn-light-frame</a>
                </div>
                <br>
                <a href="#" class="btn btn-primary">btn-primary</a>
                <a href="#" class="btn btn-primary btn-rounded">btn-primary btn-rounded</a>
                <a href="#" class="btn btn-primary btn-framed btn-rounded">btn-primary btn-framed btn-rounded</a>
                <a href="#" class="btn btn-primary btn-framed btn-rounded btn-light-frame">btn-primary btn-framed btn-rounded btn-light-frame</a>
            </section>
            <section>
                <div class="section-title">
                    <h2>Tabs</h2>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <h3>Content 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia odio sed lorem ultricies feugiat. </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">
                        <h3>Content 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia odio sed lorem ultricies feugiat. </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages">
                        <h3>Content 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia odio sed lorem ultricies feugiat. </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="settings">
                        <h3>Content 4</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia odio sed lorem ultricies feugiat. </p>
                    </div>
                </div>
            </section>
            <section>
                <div class="section-title">
                    <h2>Vertically aligned elements</h2>
                    <div class="vertical-aligned-elements">
                        <div class="element width-30">
                            <h4>This paragraph has width 30%</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia odio sed lorem
                                ultricies feugiat. Maecenas feugiat, tortor et semper pulvinar, lectus sapien posuere ligula,
                                vitae tincidunt sapien est in tortor. Praesent tincidunt vestibulum tincidunt. Cras ac egestas
                                nulla. Proin viverra urna porta nulla sagittis varius.
                            </p>
                        </div>
                        <div class="element">
                            <h3>Both elements are vertically aligned</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="section-title">
                    <h2>Forms</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3>Inline button and underline inputs</h3>
                        <form class="form inputs-underline form-email" id="form-subscribe">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Your email" required="">
                        <span class="input-group-btn">
                            <button class="btn" type="submit"><i class="arrow_right"></i></button>
                        </span>
                            </div><!-- /input-group -->
                        </form>
                        <!--end form-->
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3>Inputs bordered</h3>
                        <form class="form form-email" id="form-hero">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary icon shadow">Send Message<i class="fa fa-caret-right"></i></button>
                            </div>
                            <!--end form-group-->
                        </form>
                    </div>
                </div>
            </section>
            <section>
                <div class="section-title">
                    <h2>Owl Carousel</h2>
                </div>
                <h4>Owl Carousel with these data attributes:</h4>
                <figure>data-owl-loop="1"</figure>
                <figure>data-owl-margin="10"</figure>
                <figure>data-owl-items="2"</figure>
                <figure>data-owl-dots="1"</figure>
                <figure>data-owl-nav="0"</figure>
                <figure>data-owl-autoplay="1"</figure>
                <br>
                <div class="owl-carousel" data-owl-loop="1" data-owl-margin="10" data-owl-items="2" data-owl-dots="1" data-owl-nav="0" data-owl-autoplay="1">
                    <img src="assets/img/items/1.jpg" alt="">
                    <img src="assets/img/items/2.jpg" alt="">
                    <img src="assets/img/items/4.jpg" alt="">
                    <img src="assets/img/items/5.jpg" alt="">
                    <img src="assets/img/items/8.jpg" alt="">
                    <img src="assets/img/items/9.jpg" alt="">
                </div>
            </section>
            <section>
                <div class="section-title">
                    <h2>Text Element</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Lorem ipsum dolor sit amet</a></h4>
                            <figure class="date">21.06.2015</figure>
                            <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus</p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Sed et justo ut nibh condimentum lacinia</a></h4>
                            <figure class="date">13.06.2015</figure>
                            <p>Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus lectus. Aliquam laoreet purus in iaculis sodales. </p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Suspendisse varius eros id enim </a></h4>
                            <figure class="date">03.04.2015</figure>
                            <p>Nullam nec turpis blandit, sodales risus vitae, tincidunt velit. Vestibulum ac ipsum tincidunt, vestibulum leo eget, </p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </section>
            <section>
                <div class="section-title">
                    <h2>Simple map</h2>
                </div>
<pre>
&lt;script&gt;
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "map-detail";
    simpleMap(_latitude,_longitude, element);
&lt;/script&gt;
</pre>
                <div class="map height-250px" id="map-element"></div>
                <!--end map-->
            </section>
            <section>
                <div class="section-title">
                    <h2>Pricing Tables</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="pricing box description">
                            <h2 class="opacity-30">Package</h2>
                            <ul>
                                <li>Email Support</li>
                                <li>Phone Support</li>
                                <li>Monthly Access to Online Training</li>
                                <li>Consultation Hours</li>
                                <li>Profile Builder</li>
                            </ul>
                        </div>
                        <!--end pricing-box description-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-3 col-sm-3">
                        <div class="pricing box">
                            <h2>Silver</h2>
                            <figure>$9.90</figure>
                            <ul>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="not-available"><i class="icon_close"></i></li>
                                <li>3 hours</li>
                                <li class="not-available"><i class="icon_close"></i></li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-rounded">Select</a>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="pricing box featured">
                            <h2>Gold</h2>
                            <figure>$19.90</figure>
                            <ul>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="available"><i class="icon_check"></i></li>
                                <li>3 hours</li>
                                <li class="not-available"><i class="icon_close"></i></li>
                            </ul>
                            <a href="#" class="btn btn-default btn-rounded">Select</a>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="pricing box">
                            <h2>Platinum</h2>
                            <figure>$29.90</figure>
                            <ul>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="not-available"><i class="icon_close"></i></li>
                                <li>3 hours</li>
                                <li class="available"><i class="icon_check"></i></li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-rounded">Select</a>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-md-3-->
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="pricing description">
                            <h2 class="opacity-30">Package</h2>
                            <ul>
                                <li>Email Support</li>
                                <li>Phone Support</li>
                                <li>Monthly Access to Online Training</li>
                                <li>Consultation Hours</li>
                                <li>Profile Builder</li>
                            </ul>
                        </div>
                        <!--end pricing-box description-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-3 col-sm-3">
                        <div class="pricing">
                            <h2>Silver</h2>
                            <figure>$9.90</figure>
                            <ul>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="not-available"><i class="icon_close"></i></li>
                                <li>3 hours</li>
                                <li class="not-available"><i class="icon_close"></i></li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-framed btn-rounded btn-light-frame">Select</a>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="pricing featured">
                            <h2>Gold</h2>
                            <figure>$19.90</figure>
                            <ul>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="available"><i class="icon_check"></i></li>
                                <li>3 hours</li>
                                <li class="not-available"><i class="icon_close"></i></li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-rounded">Select</a>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="pricing">
                            <h2>Platinum</h2>
                            <figure>$29.90</figure>
                            <ul>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="available"><i class="icon_check"></i></li>
                                <li class="not-available"><i class="icon_close"></i></li>
                                <li>3 hours</li>
                                <li class="available"><i class="icon_check"></i></li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-framed btn-rounded btn-light-frame">Select</a>
                        </div>
                        <!--end pricing-box-->
                    </div>
                    <!--end col-md-3-->
                </div>
            </section>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

 
    <!--end page-footer-->
    <?php
    include ('views/footer.php');
    ?>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>
<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/moment.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.trackpad-scroll-emulator.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/js/maps.js"></script>
<script>
    autoComplete();
</script>
<script>
    rating(".visitor-rating");
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "map-element";
    simpleMap(_latitude,_longitude, element);
</script>

</body>

