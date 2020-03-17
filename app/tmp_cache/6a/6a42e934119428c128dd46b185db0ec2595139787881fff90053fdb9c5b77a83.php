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
class __TwigTemplate_8924a46d80cf5bad14742fa446e43fe56aaca5837732a85c819f19aa018d94dc extends Template
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
              <h1 class=\"display-3\">HEALTH CARE  </h1>
              <p class=\"lead\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>
              ";
        // line 19
        echo "
            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-2\">
          <div class=\"container\">
            <div class=\"carousel-caption d-none d-sm-block  mb-5\">
              <h1 class=\"display-3\">Heading Two</h1>
              <p class=\"lead\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>

              ";
        // line 32
        echo "
            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-3\">
          <div class=\"container\">
            <div class=\"carousel-caption d-none d-sm-block  mb-5\">
              <h1 class=\"display-3\">Heading Three</h1>
              <p class=\"lead\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>
              
              ";
        // line 45
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
        return array (  84 => 45,  70 => 32,  56 => 19,  37 => 1,);
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
              <h1 class=\"display-3\">HEALTH CARE  </h1>
              <p class=\"lead\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>
              {# <a href=\"#\" class=\"btn btn-danger btn-lg\">Sign Up Now</a> #}

            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-2\">
          <div class=\"container\">
            <div class=\"carousel-caption d-none d-sm-block  mb-5\">
              <h1 class=\"display-3\">Heading Two</h1>
              <p class=\"lead\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>

              {# <a href=\"#\" class=\"btn btn-primary btn-lg\">Learn More</a> #}

            </div>
          </div>
        </div>

        <div class=\"carousel-item carousel-image-3\">
          <div class=\"container\">
            <div class=\"carousel-caption d-none d-sm-block  mb-5\">
              <h1 class=\"display-3\">Heading Three</h1>
              <p class=\"lead\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aperiam vel ullam deleniti reiciendis ratione
                quod aliquid inventore vero perspiciatis.</p>
              
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
  </section>", "/components/index/showcase_caroussel.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/index/showcase_caroussel.twig");
    }
}
