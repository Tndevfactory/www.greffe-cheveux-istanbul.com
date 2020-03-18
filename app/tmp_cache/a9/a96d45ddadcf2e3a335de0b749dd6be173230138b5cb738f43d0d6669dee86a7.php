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
class __TwigTemplate_3498f5f5ebb291310ce9d54bc779dd33dde3191a37f1c5d409e15b5c42558326 extends Template
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
        // line 7
        echo "

<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js\"></script>

 <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/js/main.js\"></script>
  <script>
    // Get the current year for the copyright
    \$('#year').text(new Date().getFullYear());

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
        // line 79
        echo "

 

  </script>";
    }

    public function getTemplateName()
    {
        return "./inc/scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 79,  54 => 22,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{# <script type=\"text/javascript\" src=\"{{URLROOT}}/public/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{URLROOT}}/public/js/particles.js\"></script>
<script type=\"text/javascript\" src=\"{{URLROOT}}/public/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"{{URLROOT}}/public/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"{{URLROOT}}/public/js/mdb.min.js\"></script>
<script type=\"text/javascript\" src=\"{{URLROOT}}/public/js/ekko-lightbox.min.js\"></script> #}


<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js\"></script>

 <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js\"></script>

<script type=\"text/javascript\" src=\"{{URLROOT}}/public/js/main.js\"></script>
  <script>
    // Get the current year for the copyright
    \$('#year').text(new Date().getFullYear());

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


 

  </script>", "./inc/scripts.html.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\inc\\scripts.html.twig");
    }
}
