<?php
include('views/header.php');
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
            <section class="page-title center">
                <h1>Votre Profile</h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                        <form class="form inputs-underline">
                            <section>
                                <div class="user-details box">
                                    <div class="user-image">
                                        <div class="image">
                                            <div class="bg-transfer"><img src="assets/img/person-01.jpg" alt=""></div>
                                            <!--end bg-transfer-->
                                            <div class="single-file-input">
                                                <input type="file" id="user_image" name="user_image">
                                                <div>télécharger une image<i class="fa fa-upload"></i></div>
                                            </div>
                                        </div>
                                        <!--end image-->

                                    </div>
                                    <!--end user-image-->
                                    <div class="description clearfix">
                                        <h3>votre plan actuel</h3>
                                        <h2>Gold Package</h2>
                                        <a href="#" class="btn btn-default btn-rounded btn-xs">Changer</a>
                                        <hr>
                                        <figure>
                                            <div class="pull-left"><strong>Prochain payement</strong></div>
                                            <div class="pull-right">24/12/2015</div>
                                        </figure>
                                    </div>
                                    <!--end description-->
                                </div>
                            </section>
                            <!--end user-details-->
                            <section>
                                <h3>À propos de vous</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="first_name">Prénom</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" value="Germaine">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="last_name">Nom</label>
                                            <input type="text" class="form-control" name="last_name" id="last_name" value="Dubois">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="Germaine.Dubois@moncul.fr">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Téléphone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" value="00 00 00 00 01">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="message">À propos de vous</label>
                                    <textarea class="form-control" id="message" rows="2" name="message" value="J'aime la vie."></textarea>
                                </div>
                                <!--end form-group-->
                            </section>
                            <section>
                                <h3>Réseaux sociaux</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="pinterest">Pinterest</label>
                                            <input type="text" class="form-control" name="pinterest" id="pinterest" placeholder="Pinterest">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="youtube">Youtube</label>
                                            <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                            </section>
                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded">Sauvegarder les changements</button>
                                </div>
                                <!--end form-group-->
                            </section>
                        </form>
                        <!--end form-->
                        <hr>
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
            <section>
                <section>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                            <h3 class="center">Changer mot de passe</h3>
                            <form class="form inputs-underline">
                                <div class="form-group">
                                    <label for="current_password">Mot de passe actuel</label>
                                    <input type="password" class="form-control" name="current_password" id="current_password" value="mot de passe">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="new_password">Nouveau mot de passe</label>
                                    <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Nouveau mot de passe">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="confirm_new_password">Confirmer nouveau mot de passe</label>
                                    <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" placeholder="confirmer nouveau mot de passe">
                                </div>
                                <!--end form-group-->
                                <div class="form-group center">
                                    <button type="submit" class="btn btn-primary btn-framed btn-rounded btn-light-frame">Changer mot de passe</button>
                                </div>
                                <!--end form-group-->
                            </form>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
<?php
include('views/footer.php');
?>
</div>



<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/js/maps.js"></script>


</body>

