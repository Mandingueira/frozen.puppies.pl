

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Planujesz zakup działki pod bydowę domu? Sprawdz ją! Wygeneruj swój własny raport lub skorzystaj z pomocy ekspetra.">
    <title>Frozen puppies - Mrożenie, przechowywanie i ocena nasienia psów</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script>
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: false, // default
            live: true // default
        })
        wow.init();
    </script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar">

    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="index.html"><img src="images/frozen-puppies-white.png" height="70" alt="frozenpuppies.pl"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav text-center">
                        <li><a href="#oNas">O nas</a></li>
                        <li><a href="#zakresUslug">Zakres usług</a></li>
                        <li><a href="#cennik">Cennik</a></li>
                        <li><a href="#kontakt">Kontakt</a></li>

                    </ul>
                </div>

                <div class="phone">882 666 282</div>
            </div>
        </nav>

    </header>




    <!----------------O nas-------------------------------------------->

    <section id="oNas" class="container wow animated fadeIn">

        <div class="row text-center">

<?php
$to      = 'frozenpuppies@post.pl';
$name   = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Wiadomość z formularza www od ' . $name . ' (' . $email  .' )';
$message = $_POST['message'];
$headers = 'From: ' .$name . ' (' . $email  .')';
$headers ="Content-Type: text/html; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);

echo '<h2><br><br><br>Wiadomość wysłana</h2><br><br><br>';
?>

        </div>
        
        <div class="row text-center">
            <a href="/index.html">> powrót</a>
        </div>

    </section>


 


     <section id="kontakt" class="container-fluid ">

        <div class="container">

            <div class="col-sm-6 wow animated slideInLeft">
               <h2>Kontakt:</h2>

<!--
                <p>Informujemy, że na wszystkie wizyty obowiązują wcześniejsze zapisy. Każdemu z Państwa i&nbsp;Państwa pupilom chcemy poświęcić 100 % czasu i&nbsp;uwagi!!!
                </p>
-->

                <p><strong>Centrum Mrożenia Nasienia Psów Frozen Puppies</strong><br> <span class="glyphicon glyphicon-map-marker" style="color:#fff"></span>&nbsp ul. Raduńska 11; 80-027 Gdańsk <br><span style="color:#fff" class="glyphicon glyphicon-earphone"></span>&nbsp 882 666 282 <br>
                    <a href="mailto:frozenpuppies@post.pl"><span class="glyphicon glyphicon-envelope" style="color:#fff"></span> &nbsp frozenpuppies@post.pl</a>
                </p>
                <p>Usługi świadczymy tylko po wcześniejszym umówieniu wizyty w Centrum lub u Państwa:</p>
                <p>pn. – pt.: w godzinach 09 – 20<br> sob.: w godzinach 09 – 13<br> niedziela: na Państwa życzenie<br>
                </p>


            </div>

            <div class="col-sm-6 wow animated slideInRight">
                <h2>Napisz do nas:</h2>

                <form action="mail.php" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="podaj imię" required>
                       
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="podaj email" required>
                        
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="treść wiadomości" required></textarea>
                       
                    </div>

                    <button name="submit" type="submit" class="btn-custom-md"><span>Wyślij</span></button>

                </form>
            </div>
           
        </div>
        <div class="container wow animated fadeUp">
            <br>
    
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2326.6513618952763!2d18.630119951371203!3d54.32779460834696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd73ebb7c0fe7f%3A0x915b346180f9fef3!2sRadu%C5%84ska+11%2C+80-027+Gda%C5%84sk!5e0!3m2!1spl!2spl!4v1513632421609" width="100%" height="400" frameborder="0" style="border:0; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;" allowfullscreen></iframe>
        </div>

        <footer class="container-fluid">
            <div class="container text-center">
                <div class="row">
                    <a href="#myPage" title="To Top">
                        <br>
                        <br>
                        <span class="glyphicon glyphicon-chevron-up"></span> na górę
                    </a>

                </div>
            </div>

            <p style="text-align:center">&copy;Copyright 2017. Design & Powered: <a href="mailto:jwiecek@onet.pl">Mandi</a></p>
            
        </footer>

    </section>


    <div id="facebook_slider_widget" style="display: none; margin-top: -95px; max-width:100%;">
        <script type="text/javascript" src="http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/FrozenPuppies/&amp;fb_width=290&amp;fb_height=590&amp;fb_faces=true&amp;fb_stream=true&amp;fb_header=true&amp;fb_border=true&amp;fb_theme=light&amp;chx=787&amp;speed=FAST&amp;fb_pic=sign&amp;position=LEFT"></script>
    </div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script>
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: false, // default
            live: true // default
        })
        wow.init();
    </script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>




</body>

</html>
