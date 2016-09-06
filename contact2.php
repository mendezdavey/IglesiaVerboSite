<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contáctenos | Verbo Norte Suite H101 - (512) 825-3472 Iglesia Cristiana</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-83727251-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- end Google Analytics -->
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/logo.gif" width="135px"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="about.html">Quienes Somos?</a>
                    </li>
                    <li>
                        <a href="contact2.php">Contáctenos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- START CONTENT -->

    <!-- Page Content IGLESIA VERBO EDITAR ABAJO-->
    <!-- adding full-width background color to h1 tags -->
    <div class="green-background">
      <div class="container">
        <h1>Contáctanos</h1>
        <p>Verbo Norte Suite H101, Austin, Texas 78757</p>
      </div>
    </div>
    <!-- adding full-width picture for website -->
    <div class="full-width">
    <img src="slider/austin-night-1200.jpg" alt="Adentro de una iglesia">
    </div>
<div class="container">
<div class="row">
    <div class="col-sm-6">
        <h1>Contáctanos</h1>
        <p>La palabra del senor dice: Clama a mí, y yo te responderé, y te enseñaré cosas grandes y ocultas que tú no conoces. Jeremías 33:3. El Senor es el mejor punto de contacto para salvacion. Si quieres congregarte con nosotros hablanos o llena el formulario.</p>
        <h3>El Padre</h3>
        <p>Nombre: יהוה </p>
        <p>Direcion: El Reyno de los Cielos</p>
        <p>Forma de Contacto: Orando en el nombre de Jesucristo</p>

        <h3>Pastor</h3>
        <p>Nombre: Javier Ruiz</p>
        <p>Direccion: 8711 Burnet Rd, Suite H-101, Austin, Texas 78757</p>
        <p>Email: N/A</p>
        <p>Telefono: 512-825-3472</p>
    </div><!-- end class col-sm-6 -->

    <div class="col-sm-6">
        <br>
        <?php 
            // Check for header injections
            function has_header_injection($str) {
                return preg_match( "/[\r\n]/", $str );
            }

            if (isset ($_POST['contact_submit'])){

                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $msg = $_POST['message'];

                // Check to see if $name or $email have header injections
                if (has_header_injection($name) || has_header_injection($email)) {
                    die(); // If true, kill the script
                }

                // Check if empty
                if ( !$name || !$email || !$msg ) {
                    echo '<h4 class="error">All fields required.</h4><a href="contactanos.php" class="button
                     block">Go back and try again</a>';
                     exit;

                }

                // Add the recipient email to a variable
                $to = "mendezdavey@gmail.com";

                // Create a subject
                $subject = "$name sent you a message via your contact form";

                // Construct the message
                $message = "Name: $name\r\n";
                $message .= "Email: $email\r\n";
                $message .= "Message:\r\n$msg";

                // IF the subscribe checkbox was checked...
                if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {

                    // Add a new line to the message variable
                    $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";

                }

                $message = wordwrap($message, 72);

                // Set the mail headers into a variable
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                $headers .= "From: $name <$email>\r\n";
                $headers .= "X-Priority: 1\r\n";
                $headers .= "X-MSMail-Priority: High\r\n\r\n";

                // Send the email!
                mail( $to, $subject, $message, $headers );

            

        ?>

        <!-- Show succes message after email is sent -->
        <h5>Gracias por contactarnos</h5>
        <p>Porfavor espere 24 horas para una respuesta.</p>

        <?php } else { ?>
        
        <form method="post"  id="contact-form">
        <fieldset>
        <h3>Forma de Contacto</h3>
        <p>Para mas informacion, comunicate con nosotros. Si deseas oracion envianos tu peticion.</p>
        <hr>
        
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name">
        <br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" >
        <br>
        
        <label for="phone">Telefono:</label><br>
        <input type="text" id="phone" name="phone">
        <br>

        <label for="message">Tu Mensaje</label><br>
        <textarea rows="5" cols="45" id="message" name="message"></textarea>
        <br>
        <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
        <label for="checkbox">Subscribe to newsletter</label>
        <br>

        <input type="submit" class="button next" name="contact_submit" value="Envia Mensaje">
        </fieldset>
        </form>
        <br>
        <?php } ?>
        
    </div><!-- end class 2col-sm-6 -->
</div><!-- end of class row -->

<div class="row">

            <div class="col-sm-6">

              <h2>
                <strong>Ubicacion</strong>
              </h2>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.3541092638056!2d-97.72888848537204!3d30.369301110108925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cb9617e5cdb9%3A0x28d6ab215d2fae66!2s8711+Burnet+Rd%2C+Austin%2C+TX+78757!5e0!3m2!1sen!2sus!4v1473084683818" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div><!-- end col-sm-6 -->
            <div class="col-sm-6">
              <h2><strong>Servicios</strong><hr></h2>
                      <em>Domingo</em><br>
                      10:00am - 10:30am (<em>Oracion</em>)<br>
                      10:30am - 1:00pm (<em>primer servicio</em>) <br>
                      <br>
                      <em>Miercoles</em><br>
                      8:00pm - 9:00pm (<em>Estudio Biblico</em>)<br><br>
                      <em>Viernes</em><br>
                      8:00pm - 9:00pm<br><br>
                      <em>Lunes, Martes, Jueves, Sabado</em><br>
                      Cerrado<br><br>
              <?php include('includes/store-hours.php'); ?>
            </div><!-- end col-sm-6 -->
          </div><!-- end class row -->

</div>
    </br>
    <!-- END PAGE CONTENT EDITAR ARRIBA DE AQUI-->

    <!-- Footer -->
    <footer class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h6>Copyright &copy; 2016 Iglesia Cristiana Verbo Austin Texas</h6>
                </div><!-- end col-sm-2 -->
                <div class="col-sm-4">
                    <h6>QUIENES SOMOS</h6>
                    <p>Nosotros somos una Iglesia guiados por el Espiritu Santo</p>
                </div><!-- end col-sm-2 -->
                <div class="col-sm-2">
                    <h6>NAVEGACION</h6>
                    <ul class="unstyled">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="about.html">Quienes Somos?</a></li>
                        <li><a href="contact2.php">Contáctenos</a></li>
                    </ul>
                </div><!-- end col-sm-2 -->
                <div class="col-sm-2">
                    <h6>SIGUENOS</h6>
                    <ul class="unstyled">
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Google Plus</a></li>
                        <li><a href="contact2.php">Contáctenos</a></li>
                    </ul>
                </div><!-- end col-sm-2 -->
                <div class="col-sm-2">
                    <h6>Juan 3:16 <span class="glyphicon glyphicon-heart"></span></h6>

                </div><!-- end col-sm-2 -->
            </div><!-- end row-->
        </div>
    </footer>  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
