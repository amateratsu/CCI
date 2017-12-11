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
            <section class="page-title pull-left">
                <h1>Marky’s Restaurant</h1>
                <h3>63 Birch Street</h3>
                <div class="rating-passive" data-rating="4">
                    <span class="stars"></span>
                    <span class="reviews">6</span>
                </div>
            </section>
            <!--end page-title-->
            <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>
        </div>
        <!--end container-->
        <section>
            <div class="gallery detail">
                <div class="owl-carousel" data-owl-items="3" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-margin="2" data-owl-nav-container="#gallery-nav">
                    <div class="image">
                        <div class="bg-transfer"><img src="assets/img/items/1.jpg" alt=""></div>
                    </div>
                    <div class="image">
                        <div class="bg-transfer"><img src="assets/img/items/30.jpg" alt=""></div>
                    </div>
                    <div class="image">
                        <div class="bg-transfer"><img src="assets/img/items/31.jpg" alt=""></div>
                    </div>
                    <div class="image">
                        <div class="bg-transfer"><img src="assets/img/items/21.jpg" alt=""></div>
                    </div>
                    <div class="image">
                        <div class="bg-transfer"><img src="assets/img/items/23.jpg" alt=""></div>
                    </div>
                </div>
                <!--end owl-carousel-->
            </div>
            <!--end gallery-->
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div id="gallery-nav"></div>
                    <section>
                        <h2>A propos du bien</h2>
                        <p>
                            Offre : 	Commerce<br>
                            Transaction : 	Location<br>
                            Description : 	- 800m² de plein pied<br>
                            - transformation possible à la demande pour bureau<br>
                            - grand paking<br>
                            - prix indiqué pour commerce, à étudier pour transformation en bureau<br>
                            Surface (en m²) : 	800  (Surface divisible)<br>
                            Prix : 	50 €/m²<br>
                            Localisation (canton par défaut) : 	EPINAL<br>
                            ZA : 	Zone de la Voivre<br>
                            Hauteur sous faîtage :<br>
                            Commission incluse : 	Non précisé<br>
                        </p>
                    </section>

                    <section>
                        <h2>Informations sur le commercialisateur </h2>
                        Informations sur le commercialisateur<br>
                        Type : 	Societé<br>
                        Nom : 	SOFIMARX SARL<br>
                        Adresse : 	18 chemin de la Droite du Lac<br>
                        88400 GERARDMER<br>
                        Contact agence : 	MARX Catherine<br>
                        Affaire suivie par : 	MARX Catherine<br>
                        Tél. : 	0675660784<br>
                    </section>

                </div>
                <!--end col-md-7-->
                <div class="col-md-5 col-sm-5">
                    <div class="detail-sidebar">
                        <section class="shadow">
                            <div class="map height-250px" id="map-detail"></div>
                            <!--end map-->
                            <div class="content">
                                <div class="vertical-aligned-elements">
                                    <div class="element"><img src="assets/img/logo-2.png" alt=""></div>
                                    <div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs">Claim</a></div>
                                </div>
                                <hr>
                                <address>
                                    <figure><i class="fa fa-map-marker"></i>43 Rue de Nancy<br>88000 épinal </figure>
                                    <figure><i class="fa fa-envelope"></i><a href="#">email@example.com</a></figure>
                                    <figure><i class="fa fa-phone"></i>316-436-8619</figure>
                                    <figure><i class="fa fa-globe"></i><a href="#">www.markysrestaurant.com</a></figure>
                                </address>
                            </div>
                        </section>


                    </div>
                    <!--end detail-sidebar-->
                </div>
                <!--end col-md-5-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->


<!--end page-wrapper-->
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
    var element = "map-detail";
    simpleMap(_latitude,_longitude, element);
</script>

</body>

