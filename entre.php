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
            <section class="page-title center">
                <h1>créer une entreprise</h1>
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
                                            <label for="title">Nom</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Nom de l'entreprise">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                    <div class="col-md-3 col-sm-3">
                                        <!--end form-group-->
                                    </div>
                                    <!--col-md-3-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="Description" rows="4" placeholder="Description"></textarea>
                                </div>
                                <!--end form-group-->
                               <div class="form-group">
                                    <label for="prestation">Type de prestation</label>
                                    <br> <br>
                                    <INPUT type="checkbox" name="choix1" value="1"> Location <br>
                                    <INPUT type="checkbox" name="choix2" value="2"> Vente <br> 
                                    <INPUT type="checkbox" name="choix3" value="3"> Les deux <br>
                                </div>
                                <!--end form-group-->
                            </section>
                            <section>
                                <h3>Contact</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address-autocomplete">Addresse</label>
                                            <input type="text" class="form-control" name="address" id="address-autocomplete" placeholder="Adresse">
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
                                           <input type="text" class="form-control" name="phone" id="phone" placeholder="Ville">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="phone">Numero de téképhone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Numero de téléphone">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                         <div class="form-group">
                                            <label for="email">Mot de Passe</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Mot de passe">
                                        </div>
                                         <div class="form-group">
                                            <label for="email">Confirmation</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Mot de passe">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="website">Site internet</label>
                                            <input type="text" class="form-control" name="website" id="website" placeholder="URL de votre Site" >
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </section>
                            <section>
                                <h3>Gallerie Photo</h3>
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
                                <div class="form-group">
                                    <label for="video">Video URL</label>
                                    <input type="text" class="form-control" name="video" id="video" placeholder="http://">
                                </div>
                                <!--end form-group-->
                            </section>
                            <section>
                                <h3>Social</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="facebook">Facebook URL</label>
                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook">
                                        </div>
                                        <!--end form-group-->
                                       
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="twitter">Twitter URL</label>
                                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter">
                                        </div>
                                        <!--end form-group-->
                                        
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                            </section>
                            <section>
                                <h3>Horaires d'ouvertures<span class="note">(optionel)</span></h3>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="accordion-heading-1">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-1" aria-expanded="false" aria-controls="accordion-collapse-1">
                                                    <i class="fa fa-clock-o"></i>Ajouter des horaires d'ouvertures
                                                </a>
                                            </h4>
                                        </div>
                                        <!--end panel-heading-->
                                        <div id="accordion-collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-heading-1">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                        <strong>Lundi</strong>
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="open_hours[]" value="08:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="close_hours[]" value="20:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                        <strong>Mardi</strong>
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="open_hours[]" value="08:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="close_hours[]" value="20:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                        <strong>Mercredi</strong>
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="open_hours[]" value="08:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="close_hours[]" value="20:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                        <strong>Jeudi</strong>
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="open_hours[]" value="08:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="close_hours[]" value="20:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                        <strong>Vendredi</strong>
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="open_hours[]" value="08:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="close_hours[]" value="20:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                        <strong>Samedi</strong>
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="open_hours[]" value="8:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="close_hours[]" value="20:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 horizontal-input-title">
                                                        <strong>Dimanche</strong>
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="open_hours[]" value="08:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="close_hours[]" value="20:00">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <!--end panel-collapse-->
                                    </div>
                                    <!--end panel-->
                                </div>
                                <!--end panel-group-->
                            </section>
                           
                           
                            <hr>
                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded">Ajouter le Nouveau Pro</button>
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