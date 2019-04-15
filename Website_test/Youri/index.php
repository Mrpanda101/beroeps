<!DOCTYPE html>
<html>
<head>
	<title>De AquariumSpecialist</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.css">
    
    <!--  Style CSS  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--  Navigatie  -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand pixel" href="#">AquariumSpecialist</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Einde Navigatie-->

<!--  Main van de Site  -->
<main>
    <div class="container">
        <!--Section: Contact v.2-->
        <section class="section">

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Neem Contact met ons op!</h2>
            <!--Section description-->
            <p class="section-description">Heeft u Vragen die niet worden beantwoord op de site?<br>Neem dan gerust contact met ons op!</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 col-xl-9">
                    <form id ="contact-form" name="contact-form" action="mail.php" method="POST"  onsubmit="return validateForm()" >

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Naam:</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Uw Email: </label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Onderwerp:</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" class="md-textarea"></textarea>
                                    <label for="message">Bericht:</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                    </form>
                    <div class="center-on-small-only">
                        <a class="btn btn-primary" onclick="validateForm()">Versturen</a>
                    </div> <div class="status" id="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-xl-3">
                    <ul class="contact-icons">
                        <li><i class="fa fa-map-marker fa-2x"></i>
                            <p>Rotterdam, 1122AA, NL</p>
                        </li>

                        <li><i class="fa fa-phone fa-2x"></i>
                            <p>010-23456789</p>
                        </li>

                        <li><i class="fa fa-envelope fa-2x"></i>
                            <p>contact@AQSpecialist.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </section>
        <!--Section: Contact v.2-->
    </div>
</main>
<!--  Einde Main  -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="js/jquery-3.3.1.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!--Custom scripts-->
<script src="js/validate.js"></script>
</body>
</html>