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

/* /components/index/home_heading_section.twig */
class __TwigTemplate_2d52ca74ba56de57c52dcf6d1a02b12402724dca4a23dea76e413e223369ec09 extends Template
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
        echo "<!-- home_heading_section -->
  <section id=\"home-heading\" class=\"p-5\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container pt-5\">
            <h1> Are You Ready To Get Started? </h1>
            <p class=\"d-none d-md-block\">Lorem ipsum dolor</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    ";
    }

    public function getTemplateName()
    {
        return "/components/index/home_heading_section.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- home_heading_section -->
  <section id=\"home-heading\" class=\"p-5\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container pt-5\">
            <h1> Are You Ready To Get Started? </h1>
            <p class=\"d-none d-md-block\">Lorem ipsum dolor</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    ", "/components/index/home_heading_section.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/index/home_heading_section.twig");
    }
}
