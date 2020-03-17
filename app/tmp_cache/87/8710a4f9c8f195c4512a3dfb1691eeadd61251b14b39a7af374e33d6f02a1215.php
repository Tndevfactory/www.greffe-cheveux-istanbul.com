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

/* /components/index/photo_gallery_section.twig */
class __TwigTemplate_39b8b546713b7cc3c0e89ed54433077e45e5fc03141e43cb33a6fea7ce192645 extends Template
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
      <h1 class=\"text-center\">Photo Gallerylang </h1>
      <p class=\"text-center\">Check out our photos</p>
      <div class=\"row mb-4\">
        <div class=\"col-md-4\">
          <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery1.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
            data-width=\"560\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery1.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery2.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"561\"
            data-width=\"561\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery2.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery3.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"562\"
            data-width=\"562\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery3.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>
      </div>


      <div class=\"row mb-4\">
        <div class=\"col-md-4\">
          <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery4.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"563\"
            data-width=\"563\">
            <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery4.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery5.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"564\"
            data-width=\"564\">
            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery5.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery6.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"565\"
            data-width=\"565\">
            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/gallery/gallery6.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/index/photo_gallery_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  115 => 47,  107 => 42,  102 => 40,  94 => 35,  89 => 33,  78 => 25,  73 => 23,  65 => 18,  60 => 16,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- PHOTO GALLERY -->
<!-- photo_gallery_section -->
  <section id=\"gallery\" class=\"py-5\">
    <div class=\"container\">
      <h1 class=\"text-center\">Photo Gallerylang </h1>
      <p class=\"text-center\">Check out our photos</p>
      <div class=\"row mb-4\">
        <div class=\"col-md-4\">
          <a href=\"{{URLROOT}}/public/img/gallery/gallery1.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"560\"
            data-width=\"560\">
            <img src=\"{{URLROOT}}/public/img/gallery/gallery1.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"{{URLROOT}}/public/img/gallery/gallery2.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"561\"
            data-width=\"561\">
            <img src=\"{{URLROOT}}/public/img/gallery/gallery2.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"{{URLROOT}}/public/img/gallery/gallery3.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"562\"
            data-width=\"562\">
            <img src=\"{{URLROOT}}/public/img/gallery/gallery3.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>
      </div>


      <div class=\"row mb-4\">
        <div class=\"col-md-4\">
          <a href=\"{{URLROOT}}/public/img/gallery/gallery4.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"563\"
            data-width=\"563\">
            <img src=\"{{URLROOT}}/public/img/gallery/gallery4.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"{{URLROOT}}/public/img/gallery/gallery5.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"564\"
            data-width=\"564\">
            <img src=\"{{URLROOT}}/public/img/gallery/gallery5.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>

        <div class=\"col-md-4\">
          <a href=\"{{URLROOT}}/public/img/gallery/gallery6.jpg\" data-toggle=\"lightbox\" data-gallery=\"img-gallery\" data-height=\"565\"
            data-width=\"565\">
            <img src=\"{{URLROOT}}/public/img/gallery/gallery6.jpg\" alt=\"\" class=\"img-fluid\">
          </a>
        </div>
      </div>
    </div>
  </section>", "/components/index/photo_gallery_section.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/index/photo_gallery_section.twig");
    }
}
