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
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <section class="page-title">
                        <h1>Créer un compte</h1>
                    </section>
                    <!--end page-title-->
                    <section>
                        <form class="form inputs-underline">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                       
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                       
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                            <!--enr row-->
                            <div class="form-group">
                 
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                          
                            </div>
                            <!--end form-group-->
                            <div id="radio" class="form-group">
                            	<form>
                            		<label for="email">Vous êtes:</label> <br> <br>
                            		<input type="radio"id="c1" name="password"> Un Professionnel<br>
                            		<input type="radio"id="c2" name="password"> Un Particulier <br>
                            		<input type="radio"id="c3" name="password"> Une Collectivité <br><br>
                            	</form>

                            </div>
                            <!--end form-group-->
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100" onclick=redipage()>Suivant</button>
                            </div>
                            <script>
                                function redipage() {
                                    var x = document.getElementById("c1").checked;
                                    var y = document.getElementById("c2").checked;
                                    var z = document.getElementById("c3").checked;
                                    var i = 0;
                                        if (x === true) {
                                            window.location.href = 'entre.php'; }
                                        else if (y === true) {
                                                window.location.href = 'logpart.php';
                                            }
                                        else if (z===true){
                                            window.location.href = 'logcolec.php';
                                        }
                                        else {
                                            alert("veuillez selectionner une option");
                                        }
                                    }
                            </script>
                            <!--end form-group-->
                        </form>

                        <hr>

                    </section>
                </div>
                <!--col-md-4-->
            </div>
            <!--end ro-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
<?php
include('views/footer.php');
?>
</div>
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
