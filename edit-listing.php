<?php
include ('views/header.php');
?>    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center">
                <h1>Ajouter une offre</h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <form class="form inputs-underline" enctype="multipart/form-data">
                            <section>
                                <h3>Informations</h3>
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <label for="title">Titre</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Nom de l'offre">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="category">Categorie</label>
                                            <select class="form-control selectpicker" name="category" id="category">
                                                <option value="1">Location</option>
                                                <option value="2">Vente</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--col-md-3-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="4" name="description" placeholder="Description de l'offre"></textarea>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="tags">Type de bien</label>
                                    <input type="text" class="form-control" name="tags" id="tags" placeholder="Ex: Bureau, terrain...">
                                </div>
                                <!--end form-group-->
                                 <div class="form-group">
                                    <label for="tags">Prix</label>
                                    <input type="text" class="form-control" name="tags" id="tags" placeholder="Prix du bien">
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <label for="title">Surface</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Surface">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="category">Divisible</label>
                                            <select class="form-control selectpicker" name="category" id="category">
                                                <option value="1">Oui</option>
                                                <option value="2">Non</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--col-md-3-->
                                </div>


                            </section>
                            <section>
                                <h3>Localisation</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address-autocomplete">Addresse</label>
                                            <input type="text" class="form-control" name="address" id="address-autocomplete" placeholder="Addresse">
                                        </div>
                                        <!--end form-group-->
                                            <div class="map height-200px shadow" id="map-submit"></div>
                                        <!--end map-->
                                        <div class="form-group hidden">
                                            <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                                            <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                                        </div>
                                        <p class="note">Entrez l'adresse excate ou placez le curseur sur la carte</p>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="region">Ville</label>
                                           <input type="text" class="form-control" name="address"  placeholder="Ville + Code postal">
                                        </div>
                                    
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </section>
                            <section>
                                <h3>Photos du bien</h3>
                                <div class="file-uploaded-images">
                                    <div class="image">
                                        <figure><i class="fa fa-close"></i></figure>
                                        <img src="assets/img/items/1.jpg" alt="">
                                    </div>
                                    <div class="image">
                                        <figure><i class="fa fa-close"></i></figure>
                                        <img src="assets/img/items/2.jpg" alt="">
                                    </div>
                                    <div class="image">
                                        <figure><i class="fa fa-close"></i></figure>
                                        <img src="assets/img/items/4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="file-upload-previews"></div>
                                <div class="file-upload">
                                    <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                                    <span>Cliquez ici pour ajouter des Photos</span>
                                </div>
                              
                                <!--end form-group-->
                            </section>
                            
                            
                           
                            
                            <hr>
                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded">Ajouter l'offre</button>
                                </div>
                                <!--end form-group-->
                            </section>
                        </form>
                        <!--end form-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

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
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "map-submit";
    simpleMap(_latitude,_longitude, element, true);
</script>

</body>