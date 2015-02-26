<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Broadwand</title>
        <meta name="description" content="Affordable Internet access for the next Five Billion">
        <meta name="keywords" content="internet, internet access, broadwand, banda ancha, prepaid, smartphones, phones, handsets, startup, acceso a internet, prepago, banda ancha prepago, teléfonos inteligentes">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

    <div class="home row">
      <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="navbar-inner">
          <div class="container">
            <img class="logo1" src="img/logo.png" data-0="transform:translate(0,0%);" data-30p="transform:translate(0,-100%);"/>
            <img class="logo2" src="img/logo.png" data-100p="transform:translate(0,-100%);" data-120p="transform:translate(0,0%);"/>
          </div>
        </div>
      </nav>
    </div>

    <div class="container-fluid" id="skrollr-body">
      <!-- Home -->
      <section class="home row">
        <header>
          <h1>
            AFFORDABLE INTERNET ACCESS <br class="rwd-break"/>
            <span class="first">FOR THE NEXT</span> <span class="second">FIVE BILLION</span>
          </h1>
        </header>

        <div class="doit2-wrapper visible-xs text-center">
          <div class="doit2 do">
            How did we do it?
          </div>
        </div>

        <!-- World -->
        <div class="container">
          <div class="world text-center">
            <div class="doit hidden-xs do">
              How did we do it?
            </div>
            <img src="img/globo.png" class="img-responsive" data-start="transform:rotate(0deg);" data-end="transform:rotate(360deg);"/>
          </div>
        </div>
      </section><!-- /Home -->

      <!-- How to -->
      <section class="how row" id="this-is-how">

        <div class="container circles">
        
          <header class="text-center">
            <h1>
              This is how:
            </h1>
          </header>

          <!-- Mission -->
          <article class="mission col-xs-12 col-sm-12 col-md-4 text-center">
            <div class="image-container">
              <div class="varita"></div>
            </div>
            <header>
              <h1>Our Mission</h1>
            </header>

            <p>On May 6th 2012 we set a goal for ourselves: to find the <span>“magic” to help prepaid smartphone users optimize the consumption of their data allowance</span> so that wireless broadband is affordable for everyone.</p>

            <p>Today we have applied for a patent on a unique technology called “Intelligent Indexing and Tagging” (IIT) which will take <span>wireless broadband from the current 15% penetration to over 50% in 5 years.</span></p>
          </article>

          <!-- Journey -->
          <article class="journey col-xs-12 col-sm-12 col-md-4 text-center">
            <div class="image-container">
              <img src="img/journey1.png"/>
            </div>
            <header>
              <h1>Our Journey</h1>
            </header>

            <p>So, we embarked on a journey to design and develop an IIT Cloud Platform and its associated App and make them <span>available on your ANDROID smartphone.</span></p>

            <p>Our technology appeals to global operators and handset manufacturers who see <span>prepaid data as their next driver for revenue and profit growth.</span></p>
          </article>

          <!-- Delivery -->
          <article class="delivery col-xs-12 col-sm-12 col-md-4 text-center">
            <div class="image-container">
              <img src="img/flecha.png"/>
            </div>
            <header>
              <h1>Our Delivery</h1>
            </header>

            <p><span>Today we have made available to selected markets MOBIMAX</span>, a next generation smartphone App for data management and control which includes NAVEMAX our first implementation of a Trusted Browser incorporating IIT. </p>

            <p>Starting today, using your smartphone and surfing the WEB will be <span>affordable for billions of pre-paid mobile users around the world.</span></p>

            <p>Are you ready to see it for yourself?</p>

            <a href="http://45.56.112.25/" target="_blank">Download Now</a>
          </article>
        </div>
        <img class="circles-img" src="img/circulos.png" />
      </section><!-- /How to -->

      <!-- Contact -->
      <section class="contact row">
        <div class="container">
          <header class="text-center">
              <h1>
                Contact us
              </h1>
            </header>

          <article class="map col-xs-12 col-sm-6">
            <p>
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              808 Brickell Key Dr. #1904, Miami FL 33131
            </p>
            <p>
              <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
              +1 (646) 201-9298
            </p>
            <p>
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              william.nazaret@broadwand.com
            </p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3593.0548979177433!2d-80.1830348!3d25.7687502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b4261906d4fd%3A0x625f4197178750d7!2s808+Brickell+Key+Dr+%231904%2C+Miami%2C+FL+33131%2C+EE.+UU.!5e0!3m2!1ses!2spa!4v1424755426241" width="100%" height="350" frameborder="0" style="border:0; margin-top: 20px; margin-bottom:20px"></iframe>
          </article>

          <article class="form col-xs-12 col-sm-6">
            <?php
              session_start();
              if(!empty($_SESSION['messsage'])) {
                 echo $_SESSION['message'];
              }
            ?>
            <form action="mail.php" id="contact-form" method="post">
              <input name="name" type="text" placeholder="Name" required/>
              <input name="email" type="email" placeholder="Email" required/>
              <input name="phone" type="text" placeholder="Phone"/>
              <textarea name="message" placeholder="Message" rows="8" required></textarea>
              <div class="text-center">
                <a href="#" id="submit">Send</a>
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

    <script type="text/javascript">
      skrollr.init();

      $('#submit').click(function(e) {
        $('#contact-form').find('[type="submit"]').trigger('click');
        return false;
      });

      $(".do").click(function() {
          $('html, body').animate({
              scrollTop: $("#this-is-how").offset().top
          }, 2000);
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
