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

/* /components/info_section.twig */
class __TwigTemplate_c7cf3bc3a818f02fbbe024ffa6c6784e390e46e83c888b5a298396c5c968479f extends Template
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
 <!-- info_section -->
  <section id=\"info\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 align-self-center\">
          <h3>Lorem Ipsumlang ";
        // line 7
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eveniet blanditiis incidunt iusto corrupti illum
            cum laudantium ex sequi amet.</p>
          <a href=\"about.html\" class=\"btn btn-outline-danger btn-lg\">Learn More </a>
        </div>
        <div class=\"col-md-6\">
        
          <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/laptop.png\" alt=\"\" class=\"img-fluid\">
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/info_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 <!-- info_section -->
  <section id=\"info\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 align-self-center\">
          <h3>Lorem Ipsumlang {{lang}}</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eveniet blanditiis incidunt iusto corrupti illum
            cum laudantium ex sequi amet.</p>
          <a href=\"about.html\" class=\"btn btn-outline-danger btn-lg\">Learn More </a>
        </div>
        <div class=\"col-md-6\">
        
          <img src=\"{{URLROOT}}/public/img/laptop.png\" alt=\"\" class=\"img-fluid\">
        </div>
      </div>
    </div>
  </section>", "/components/info_section.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/info_section.twig");
    }
}
