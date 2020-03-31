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

/* ./inc/styles.html.twig */
class __TwigTemplate_ea4f07a95608911cfff952ea26666405908ee2f48d9f39ecce6dd597b8b44aa4 extends Template
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
<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">

";
        // line 10
        echo "
<link href=\"https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap&subset=arabic,latin-ext\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">

<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" />

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
  
";
        // line 24
        echo "<link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
";
        // line 26
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.css\" integrity=\"sha256-bM8BrA55gwp08P/y/prufMxRmr59ygZlXj/k3qDD6/o=\" crossorigin=\"anonymous\" />
";
        // line 28
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js\" integrity=\"sha256-3arngJBQR3FTyeRtL3muAGFaGcL8iHsubYOqq48mBLw=\" crossorigin=\"anonymous\"></script>



<style>

 @import url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap');

body {
  overflow-x: hidden;
  font-family: 'Poppins', sans-serif;
  
}


</style>

";
    }

    public function getTemplateName()
    {
        return "./inc/styles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  65 => 26,  62 => 24,  47 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 
<!-- JQuery -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\"
    crossorigin=\"anonymous\">

{# font #}

<link href=\"https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap&subset=arabic,latin-ext\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins&display=swap\" rel=\"stylesheet\">

<!-- Bootstrap core CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
<!-- Material Design Bootstrap -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css\" />

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css\" />
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css\" />
  
{# animate on scroll #}
<link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
{# video lightbox #}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.css\" integrity=\"sha256-bM8BrA55gwp08P/y/prufMxRmr59ygZlXj/k3qDD6/o=\" crossorigin=\"anonymous\" />
{# gsap #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js\" integrity=\"sha256-3arngJBQR3FTyeRtL3muAGFaGcL8iHsubYOqq48mBLw=\" crossorigin=\"anonymous\"></script>



<style>

 @import url('https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap');

body {
  overflow-x: hidden;
  font-family: 'Poppins', sans-serif;
  
}


</style>

", "./inc/styles.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/styles.html.twig");
    }
}
