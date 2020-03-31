<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ./inc/scripts.html.twig */
class __TwigTemplate_52e2f38c6e2154b533420bfde1bfa1ae7ef20209a0f1a1401ec6ccb22d4f9eb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js\"></script>

 <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.js\" integrity=\"sha256-vRcA6HQ42C3q7wQlOYINRAMuAPpjAmdORTQ1wv/jwtk=\" crossorigin=\"anonymous\"></script>
";
        // line 15
        echo "<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js\"></script>

  <script>
    // Get the current year for the copyright
    \$('#year').text(new Date().getFullYear());

        \$(document).ready(function(){
      \$('.venobox').venobox(); 
    });


    // aos init
          AOS.init({

            offset:200,
            duration:500

          });

    // Configure Slider
    \$('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    // Lightbox Init
    \$(document).on('click', '[data-toggle=\"lightbox\"]', function (event) {
      event.preventDefault();
      \$(this).ekkoLightbox();
    });

    // Video Play
    \$(function () {
      // Auto play modal video
      \$(\".video\").click(function () {
        var theModal = \$(this).data(\"target\"),
          videoSRC = \$(this).attr(\"data-video\"),
          videoSRCauto = videoSRC + \"?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1\";
        \$(theModal + ' iframe').attr('src', videoSRCauto);
        \$(theModal + ' button.close').click(function () {
          \$(theModal + ' iframe').attr('src', videoSRC);
        });
      });
    });


\$('.slider').slick({
      infinite: true,
      slideToShow: 1,
      slideToScroll: 1
    });
    

";
        // line 87
        echo "

 

  </script>";
    }

    public function getTemplateName()
    {
        return "./inc/scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 87,  52 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js\"></script>

 <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.js\" integrity=\"sha256-vRcA6HQ42C3q7wQlOYINRAMuAPpjAmdORTQ1wv/jwtk=\" crossorigin=\"anonymous\"></script>
{# animate on scroll js#}
<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js\"></script>

  <script>
    // Get the current year for the copyright
    \$('#year').text(new Date().getFullYear());

        \$(document).ready(function(){
      \$('.venobox').venobox(); 
    });


    // aos init
          AOS.init({

            offset:200,
            duration:500

          });

    // Configure Slider
    \$('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    // Lightbox Init
    \$(document).on('click', '[data-toggle=\"lightbox\"]', function (event) {
      event.preventDefault();
      \$(this).ekkoLightbox();
    });

    // Video Play
    \$(function () {
      // Auto play modal video
      \$(\".video\").click(function () {
        var theModal = \$(this).data(\"target\"),
          videoSRC = \$(this).attr(\"data-video\"),
          videoSRCauto = videoSRC + \"?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1\";
        \$(theModal + ' iframe').attr('src', videoSRCauto);
        \$(theModal + ' button.close').click(function () {
          \$(theModal + ' iframe').attr('src', videoSRC);
        });
      });
    });


\$('.slider').slick({
      infinite: true,
      slideToShow: 1,
      slideToScroll: 1
    });
    

{# \$(\"#newslater_form\").submit(function(e){
    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = \$(this);
    var url = form.attr('action');

    \$.ajax({
           type: \"POST\",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });


  }); #}


 

  </script>", "./inc/scripts.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/scripts.html.twig");
    }
}
