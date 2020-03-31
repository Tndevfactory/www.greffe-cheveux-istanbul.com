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

/* /components/index/showcase_caroussel.twig */
class __TwigTemplate_ea3a650d9cf2e10ca0da1c45406c0b53ef1844817bae1ec9b4621eb7dd621a7b extends Template
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
        echo "<!-- showcase caroussel-->
 <style>

     
        #showcase h1{
              font-weight:600;
              color:white;
              font-size:44px;
                                      
            }


          #showcase p{
                color:white;
               font-size:33px;
            }

           #showcase ul{list-style-type: disc;}


          .carousel-item {
            height: 580px;
          }

          
          .carousel-image-1 {
            background-image:url(https://drive.google.com/uc?export=view&id=1RNyUhlFJ84k_H8_QfWpXcJnxd65sqZYA); 
            /*img/showcase/image1.jpg*/
            background-size: cover;
          }

          .carousel-image-2 {
            background-image:url(https://drive.google.com/uc?export=view&id=1XziSn92JmVntkv-mJoYMTBkS4sKmlC7k); 
            /*img/showcase/image2.jpg*/
            background-size: cover;
          }

          .carousel-image-3 {
            background-image:url(https://drive.google.com/uc?export=view&id=13BiMipQ_e9RSqPbk9zq6J-Muxn1nlWow); 
            /*img/showcase/image3.jpg*/
            background-size: cover;
          }

     

      @media(max-width:900px){
      
          #showcase h1{
              font-size:33px;
              
            }

          #showcase p{
              font-size:23px;
            }
          }
          
      </style>
<!-- SHOWCASE SLIDER -->
  <section id=\"showcase\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

      <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      </ol>

      <div class=\"carousel-inner\">
        <div class=\"carousel-item carousel-image-1 active\">
          <div class=\"container\">
            <div class=\"carousel-caption  mb-5\">
              <h1>GREFFE CHEVEUX ISTANBUL  </h1>
              <p>Votre greffe de cheveux réussie dans la meilleure clinique d'Istanbul</p>

            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-2\">
          <div class=\"container\">
            <div class=\"carousel-caption  mb-5\">
              <h1>LES MEILLEURS SPECIALISTES EN TURQUIE</h1>
              <p>Prise en charge de votre greffe capillaire par un spécialiste de l'alopécie</p>


            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-3\">
          <div class=\"container\">
            <div class=\"carousel-caption  mb-5\">
              <h1>GREFFE CAPILLAIRE ISTANBUL </h1>
              <p>Prise en charge rapide et efficace par des experts  </p>
              

            </div>
          </div>
        </div>
      </div>

      <a href=\"#myCarousel\" data-slide=\"prev\" class=\"carousel-control-prev\">
        <span class=\"carousel-control-prev-icon\"><i class=\"fas fa-chevron-left\"></i></span>
      </a>

      <a href=\"#myCarousel\" data-slide=\"next\" class=\"carousel-control-next\">
        <span class=\"carousel-control-next-icon\"><i class=\"fas fa-chevron-right\"></i></span>
      </a>

    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/index/showcase_caroussel.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- showcase caroussel-->
 <style>

     
        #showcase h1{
              font-weight:600;
              color:white;
              font-size:44px;
                                      
            }


          #showcase p{
                color:white;
               font-size:33px;
            }

           #showcase ul{list-style-type: disc;}


          .carousel-item {
            height: 580px;
          }

          
          .carousel-image-1 {
            background-image:url(https://drive.google.com/uc?export=view&id=1RNyUhlFJ84k_H8_QfWpXcJnxd65sqZYA); 
            /*img/showcase/image1.jpg*/
            background-size: cover;
          }

          .carousel-image-2 {
            background-image:url(https://drive.google.com/uc?export=view&id=1XziSn92JmVntkv-mJoYMTBkS4sKmlC7k); 
            /*img/showcase/image2.jpg*/
            background-size: cover;
          }

          .carousel-image-3 {
            background-image:url(https://drive.google.com/uc?export=view&id=13BiMipQ_e9RSqPbk9zq6J-Muxn1nlWow); 
            /*img/showcase/image3.jpg*/
            background-size: cover;
          }

     

      @media(max-width:900px){
      
          #showcase h1{
              font-size:33px;
              
            }

          #showcase p{
              font-size:23px;
            }
          }
          
      </style>
<!-- SHOWCASE SLIDER -->
  <section id=\"showcase\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

      <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      </ol>

      <div class=\"carousel-inner\">
        <div class=\"carousel-item carousel-image-1 active\">
          <div class=\"container\">
            <div class=\"carousel-caption  mb-5\">
              <h1>GREFFE CHEVEUX ISTANBUL  </h1>
              <p>Votre greffe de cheveux réussie dans la meilleure clinique d'Istanbul</p>

            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-2\">
          <div class=\"container\">
            <div class=\"carousel-caption  mb-5\">
              <h1>LES MEILLEURS SPECIALISTES EN TURQUIE</h1>
              <p>Prise en charge de votre greffe capillaire par un spécialiste de l'alopécie</p>


            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-3\">
          <div class=\"container\">
            <div class=\"carousel-caption  mb-5\">
              <h1>GREFFE CAPILLAIRE ISTANBUL </h1>
              <p>Prise en charge rapide et efficace par des experts  </p>
              

            </div>
          </div>
        </div>
      </div>

      <a href=\"#myCarousel\" data-slide=\"prev\" class=\"carousel-control-prev\">
        <span class=\"carousel-control-prev-icon\"><i class=\"fas fa-chevron-left\"></i></span>
      </a>

      <a href=\"#myCarousel\" data-slide=\"next\" class=\"carousel-control-next\">
        <span class=\"carousel-control-next-icon\"><i class=\"fas fa-chevron-right\"></i></span>
      </a>

    </div>
  </section>", "/components/index/showcase_caroussel.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/showcase_caroussel.twig");
    }
}
