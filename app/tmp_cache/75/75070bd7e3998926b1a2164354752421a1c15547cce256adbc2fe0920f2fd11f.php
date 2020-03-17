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
class __TwigTemplate_551f09e56103a54a6562f46a292868a4356a023dbeb601909597be7fc1c73403 extends Template
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
            <div class=\"carousel-caption d-none d-sm-block mb-5\">
              <h1 class=\"display-3\">GREFFE CHEVEUX ISTANBUL  </h1>
              <p class=\"lead\">Votre greffe de cheveux réussie dans la meilleure clinique d'Istanbul</p>
              ";
        // line 18
        echo "
            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-2\">
          <div class=\"container\">
            <div class=\"carousel-caption d-none d-sm-block  mb-5\">
              <h1 class=\"display-3\">Les meilleurs spécialistes de la perte de cheveux en Turquie</h1>
              <p class=\"lead\">Prise en charge de votre greffe capillaire par un spécialiste de l'alopécie en Turquie</p>

              ";
        // line 30
        echo "
            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-3\">
          <div class=\"container\">
            <div class=\"carousel-caption d-none d-sm-block  mb-5\">
              <h1 class=\"display-3 white-text\">Les meilleurs spécialistes de la perte de cheveux en Turquie</h1>
              <p style=\"font-size:18px\" class=\" lead white-text\">Prise en charge de votre greffe capillaire par un spécialiste de l'alopécie en Turquie</p>
              
              ";
        // line 42
        echo "
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
        return array (  81 => 42,  68 => 30,  55 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- showcase caroussel-->

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
            <div class=\"carousel-caption d-none d-sm-block mb-5\">
              <h1 class=\"display-3\">GREFFE CHEVEUX ISTANBUL  </h1>
              <p class=\"lead\">Votre greffe de cheveux réussie dans la meilleure clinique d'Istanbul</p>
              {# <a href=\"#\" class=\"btn btn-danger btn-lg\">Sign Up Now</a> #}

            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-2\">
          <div class=\"container\">
            <div class=\"carousel-caption d-none d-sm-block  mb-5\">
              <h1 class=\"display-3\">Les meilleurs spécialistes de la perte de cheveux en Turquie</h1>
              <p class=\"lead\">Prise en charge de votre greffe capillaire par un spécialiste de l'alopécie en Turquie</p>

              {# <a href=\"#\" class=\"btn btn-primary btn-lg\">Learn More</a> #}

            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-3\">
          <div class=\"container\">
            <div class=\"carousel-caption d-none d-sm-block  mb-5\">
              <h1 class=\"display-3 white-text\">Les meilleurs spécialistes de la perte de cheveux en Turquie</h1>
              <p style=\"font-size:18px\" class=\" lead white-text\">Prise en charge de votre greffe capillaire par un spécialiste de l'alopécie en Turquie</p>
              
              {# <a href=\"#\" class=\"btn btn-success btn-lg\">Learn More</a> #}

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
  </section>", "/components/index/showcase_caroussel.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/components/index/showcase_caroussel.twig");
    }
}
