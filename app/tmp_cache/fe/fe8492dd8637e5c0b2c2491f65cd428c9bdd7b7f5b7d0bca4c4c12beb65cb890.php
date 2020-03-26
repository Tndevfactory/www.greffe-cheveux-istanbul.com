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
class __TwigTemplate_82063564d8a1bb6e294916c6e3b6372ad03f087d5f4fa795e24c9d4cc2c3cfa0 extends Template
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
  <section id=\"home-heading\" class=\"p-5 img-fluid\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container pt-5\">
            <h1> Commencez maintenant à retrouver vos cheveux</h1>
            <p class=\"d-none d-md-block\">Votre devis greffe en moins d'une minute</p>
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
  <section id=\"home-heading\" class=\"p-5 img-fluid\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container pt-5\">
            <h1> Commencez maintenant à retrouver vos cheveux</h1>
            <p class=\"d-none d-md-block\">Votre devis greffe en moins d'une minute</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    ", "/components/index/home_heading_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/home_heading_section.twig");
    }
}
