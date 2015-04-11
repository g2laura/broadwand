<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Broadwand</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
        <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

    <div class="home row">
      <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="navbar-inner">
          <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <img class="logo2" src="img/logo.png" style="text-align: left"/>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MENU</a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="index.php">HOME</a></li>
                      <li><a href="about.php">ABOUT US</a></li>
                      <li><a href="tech.php">OUR TECHNOLOGY</a></li>
                      <li><a href="#contact">CONTACT</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="container-fluid" id="skrollr-body">
      <!-- Our technology -->
      <section class="tech row">
        <header>
          <div class="earth">
            <img src="img/globo.png" class="img-responsive" />
          </div>
          <h1>
            Our Technology
          </h1>
        </header>

        <div class="container">
          <div class="info">
            <h1>MOBIMAX | Intelligent Indexing and Tagging ("IIT")</h1>
            <h2>UPSTO 13/464,408 Patent-Pending</h2>
          </div>
        </div>

        <img class="circles-img" src="img/circulos.png" />
      </section><!-- /Our Technology -->

      <!-- Graphic -->
      <section class="graphic row">

      </section><!-- /Graphic-->

      <!-- Contact -->
      <section class="contact row" id="contact">
        <div class="container">
          <header class="text-center">
              <h1><span id="text47">
                Contact us</span>
              </h1>
            </header>

          <article class="map col-xs-12 col-sm-6">
            <p>
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              <span> 808 Brickell Key Dr. #1904, Miami FL 33131</span>
            </p>
            <p>
              <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
              <span> +1 (646) 201-9298</span>
            </p>
            <p>
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              <span> william.nazaret@broadwand.com</span>
            </p>
            <p>
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              <span> oscar.rojas@broadwand.com</span>
            </p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3593.0548979177433!2d-80.1830348!3d25.7687502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b4261906d4fd%3A0x625f4197178750d7!2s808+Brickell+Key+Dr+%231904%2C+Miami%2C+FL+33131%2C+EE.+UU.!5e0!3m2!1ses!2spa!4v1424755426241" width="100%" height="350" frameborder="0" style="border:0; margin-top: 20px; margin-bottom:20px"></iframe>
          </article>

          <article class="form col-xs-12 col-sm-6">

            <form action="mail.php" id="contact-form" method="post">
              <input name="name" type="text" placeholder="Name" required/>
              <input name="email" type="email" placeholder="Email" required/>
              <input name="phone" type="text" placeholder="Phone"/>
              <textarea name="message" placeholder="Message" rows="8" required></textarea>
              <div class="text-center">
                <a href="#" id="submit" id="text48">Send</a>
              </div>
              <input type="submit" style="display:none;"/>
            </form>
          </article>
        </div>

        <footer class="text-right">
          <img src="img/conversemos.png"/>
          <a href="http://www.conversemosendigital.com/" target="_blank">Conversemos en digital</a>
        </footer>
      </section> <!-- /Contact -->

    </div> <!-- /container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/skrollr.js"></script>
    <script src="js/vendor/jquery.i18n.min.js"></script>

    <script type="text/javascript">
      skrollr.init();

      (function($, win) {
        $.fn.inViewport = function(cb) {
           return this.each(function(i,el) {
             function visPx(){
               var elH = $(el).outerHeight(),
                   H = $(win).height(),
                   r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
               return cb.call(el, Math.max(0, t>0? Math.min(elH, H-t) : (b<H?b:H)));
             }
             visPx();
             $(win).on("resize scroll", visPx);
           });
        };
      }(jQuery, window));

      $('#submit').click(function(e) {
        $('#contact-form').find('[type="submit"]').trigger('click');
        return false;
      });

      $(".do").click(function() {
          $('html, body').animate({
              scrollTop: $("#this-is-how").offset().top
          }, 2000);
      });

      $(".varita").inViewport(function(px){
        if(px) $(this).addClass("play") ;
      });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60096803-1', 'auto');
      ga('send', 'pageview');
    </script>
    </body>
</html>
