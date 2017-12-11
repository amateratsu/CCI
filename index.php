<?php
include ('views/header.php');
?>
<?php
// Le fichier index est appelé pour afficher n'importe quelle page

// configuration globale
include 'config.php';

// le loader va charger les fichiers php qui contiennent les composants dont nous avons besoin (controlleurs, modeles, router)
include 'load.php';

// on charge le router qui s'occupera du reste
$router->load();
?>
    <!--end page-header-->

    <div id="page-content">
        <div class="hero-section has-background full-screen background-is-dark">
            <div class="slider xs-p-relative">
                <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1" data-owl-loop="1">
                    <div class="slide">
                        <div class="presentation">
                            <div class="description">
                                <div class="container">
                                   <!-- <h1>CCI Vosges</h1> -->
                                    </div>
                            </div>
                            <div class="image">
                                <div class="bg-transfer">
                                    <img src="assets/img/ccilogo.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end hero-section-->
        <div class="container"><hr></div>
        <section class="block background-is-dark">
            <div class="container">
                <div class="section-title vertical-aligned-elements">
                    <div class="element">
                        <h2>Annonces à la une</h2>
                    </div>
                    <div class="element text-align-right">
                        <div id="gallery-nav"></div>
                    </div>
                </div>
                <!--end section-title-->
            </div>
            <div class="gallery featured">
                <div class="owl-carousel" data-owl-items="6" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">
                    <!--end item-->
                    <div class="item featured" data-id="5">
                        <a href="detail.php">
                            <div class="description">
                                <figure>Disponible dès le 11/2/2018</figure>
                                <div class="label label-default">Bureaux</div>
                                <h3>AGDIM</h3>
                                <h4>Chavelot</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/28.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Ajouter aux favoris</a></li>
                                    <li><a href="#" class="quick-detail">Détails rapides</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="5">
                        <a href="detail.php">
                            <div class="description">
                                <figure>Disponible dès le 11/2/2018</figure>
                                <div class="label label-default">Bureaux</div>
                                <h3>AGDIM</h3>
                                <h4>Chavelot</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/28.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Ajouter aux favoris</a></li>
                                    <li><a href="#" class="quick-detail">Détails rapides</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="5">
                        <a href="detail.php">
                            <div class="description">
                                <figure>Disponible dès le 11/2/2018</figure>
                                <div class="label label-default">Bureaux</div>
                                <h3>AGDIM</h3>
                                <h4>Chavelot</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/28.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Ajouter aux favoris</a></li>
                                    <li><a href="#" class="quick-detail">Détails rapides</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="5">
                        <a href="detail.php">
                            <div class="description">
                                <figure>Disponible dès le 11/2/2018</figure>
                                <div class="label label-default">Bureaux</div>
                                <h3>AGDIM</h3>
                                <h4>Chavelot</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/28.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Ajouter aux favoris</a></li>
                                    <li><a href="#" class="quick-detail">Détails rapides</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="5">
                        <a href="detail.php">
                            <div class="description">
                                <figure>Disponible dès le 11/2/2018</figure>
                                <div class="label label-default">Bureaux</div>
                                <h3>AGDIM</h3>
                                <h4>Chavelot</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/28.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Ajouter aux favoris</a></li>
                                    <li><a href="#" class="quick-detail">Détails rapides</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                    <div class="item featured" data-id="5">
                        <a href="detail.php">
                            <div class="description">
                                <figure>Disponible dès le 11/2/2018</figure>
                                <div class="label label-default">Bureaux</div>
                                <h3>AGDIM</h3>
                                <h4>Chavelot</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/agdimannonce.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Ajouter aux favoris</a></li>
                                    <li><a href="#" class="quick-detail">Détails rapides</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                </div>
            </div>
            <!--end gallery-->
            <div class="background-wrapper">
                <div class="background-color background-color-default"></div>
            </div>
            <!--end background-wrapper-->
        </section>


		<div class="container"><hr></div>
        <element class="block">
            <div class="container">
                <div class="center">
                    <div class="section-title">
                        <div class="center">
                            <h2>Nos offres</h2>
                            <h3 class="subtitle">Offres de location/vente de nos professionnels</h3>
                        </div>
                    </div>
                    <!--end section-title-->
                </div>
                <!--end center-->
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="1">
                            <a href="detail.php">
                                <div class="description">
                                    <figure>Prix</figure>
                                    <div class="label label-default">Location/Vente</div>
                                     <h4>Surface</h4>
                                    <h3>Offre 1</h3>
                                    <h4>Localisation</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/cci.jpeg" alt="">
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
                            <a href="detail.php">
                                <div class="description">
                                    <figure>From: $40</figure>
                                    <div class="label label-default">Restaurant</div>
                                     <h4>Surface</h4>
                                    <h3>Offre 2</h3>
                                    <h4>4209 Glenview Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/cci.jpeg" alt="">
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
                    <div class="col-md-4 col-sm-4">
                        <div class="item" data-id="15">
                            <a href="detail.php">
                                <div class="description">
                                    <figure>From: $30</figure>
                                    <div class="label label-default">Bar & Grill</div>
                                     <h4>Surface</h4>
                                    <h3>Offre 3</h3>
                                    <h4>3857 Losh Lane</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/agdimannonce.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
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
                    <div class="col-md-4 col-sm-4">
                        <div class="item" data-id="3">
                            <a href="detail.php">
                                <div class="description">
                                    <figure>From: $67</figure>
                                    <div class="label label-default">Event</div>
                                     <h4>Surface</h4>
                                    <h3>Offre 4</h3>
                                    <h4>840 My Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/agdimannonce.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
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
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="4">
                            <a href="detail.php">
                                <div class="description">
                                    <figure>From: $29</figure>
                                    <div class="label label-default">Lounge</div>
                                     <h4>Surface</h4>
                                    <h3>Offre 5</h3>
                                    <h4>2896 Ripple Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/5.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">43</span>
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
                    <div class="col-md-5 col-sm-5">
                        <div class="item" data-id="6">
                            <a href="detail.php">
                                <div class="description">
                                    <figure>Free entry</figure>
                                    <div class="label label-default">Concert</div>
                                     <h4>Surface</h4>
                                    <h3>Offre 6</h3>
                                    <h4>371 Kinney Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/6.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="0">
                                    <span class="stars"></span>
                                    <span class="reviews">0</span>
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
                    </div>
                   </div>

                    <!--<end col-md-3-->
                </div>
                <!--end row-->
                <div class="center">
                    <a href="liste_offres.php" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">Voir toutes les offres</a>
                </div>
            <!--end center-->

            <!--end container-->
        </section>
        <!--end block-->

        <!--end block-->
			<div class="container"><hr></div>
        <section class="block">
            <div class="container">
                <div class="section-title">
                    <h2>Quelques Actus</h2>
                </div>
                <!--end section-title-->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog.php">Lorem ipsum dolor sit amet</a></h4>
                            <figure class="date">21.06.2015</figure>
                            <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus</p>
                            <a href="blog.php"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog.php">Sed et justo ut nibh condimentum lacinia</a></h4>
                            <figure class="date">13.06.2015</figure>
                            <p>Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus lectus. Aliquam laoreet purus in iaculis sodales. </p>
                            <a href="blog.php"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog.php">Suspendisse varius eros id enim </a></h4>
                            <figure class="date">03.04.2015</figure>
                            <p>Nullam nec turpis blandit, sodales risus vitae, tincidunt velit. Vestibulum ac ipsum tincidunt, vestibulum leo eget, </p>
                            <a href="blog.php"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>

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
</body>
