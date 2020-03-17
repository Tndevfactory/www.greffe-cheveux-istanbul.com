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

/* /components/photo_gallery_section.twig */
class __TwigTemplate_49c620d956b1b007ddf0fac357a5f52963d16c7083383110c6c11932fad50c4a extends Template
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
        echo "<!-- PHOTO GALLERY -->
<!-- photo_gallery_section -->
  <section id=\"gallery\" class=\"py-5\">
    <div class=\"container\">
      <h1 class=\"text-center\">Photo Gallerylang ";
        // line 5
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "</h1>
      <p class=\"text-center\">Check out our photos</p>
      <div class=\"row mb-4\">
        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/560x560\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
            data-width=\"560\">
            <img src=\"https://source.unsplash.com/random/560x560\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/561x561\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"561\"
            data-width=\"561\">
            <img src=\"https://source.unsplash.com/random/561x561\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/562x562\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"562\"
            data-width=\"562\">
            <img src=\"https://source.unsplash.com/random/562x562\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>
      </div>

      <div class=\"row mb-4\">
        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/563x563\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"563\"
            data-width=\"563\">
            <img src=\"https://source.unsplash.com/random/563x563\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/564x564\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"564\"
            data-width=\"564\">
            <img src=\"https://source.unsplash.com/random/564x564\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/565x565\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"565\"
            data-width=\"565\">
            <img src=\"https://source.unsplash.com/random/565x565\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/photo_gallery_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- PHOTO GALLERY -->
<!-- photo_gallery_section -->
  <section id=\"gallery\" class=\"py-5\">
    <div class=\"container\">
      <h1 class=\"text-center\">Photo Gallerylang {{lang}}</h1>
      <p class=\"text-center\">Check out our photos</p>
      <div class=\"row mb-4\">
        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/560x560\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
            data-width=\"560\">
            <img src=\"https://source.unsplash.com/random/560x560\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/561x561\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"561\"
            data-width=\"561\">
            <img src=\"https://source.unsplash.com/random/561x561\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/562x562\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"562\"
            data-width=\"562\">
            <img src=\"https://source.unsplash.com/random/562x562\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>
      </div>

      <div class=\"row mb-4\">
        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/563x563\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"563\"
            data-width=\"563\">
            <img src=\"https://source.unsplash.com/random/563x563\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/564x564\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"564\"
            data-width=\"564\">
            <img src=\"https://source.unsplash.com/random/564x564\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"https://source.unsplash.com/random/565x565\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"565\"
            data-width=\"565\">
            <img src=\"https://source.unsplash.com/random/565x565\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>
      </div>
    </div>
  </section>", "/components/photo_gallery_section.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\components\\photo_gallery_section.twig");
    }
}
