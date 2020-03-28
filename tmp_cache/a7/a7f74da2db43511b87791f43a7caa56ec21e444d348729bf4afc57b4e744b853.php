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

/* /components/contact/staff.twig */
class __TwigTemplate_0bc43c713269bbfdec41b00195c0e3c3e96277926d98df28ef1b3c8c7c3d5151 extends Template
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
        echo "<!-- STAFF -->
  <section id=\"staff\" class=\"py-5 text-center blue-gradient text-white\">
    <div class=\"container\">
      <h1>Notre Equipe</h1>
      <hr>
      <div class=\"row\">
        <div class=\"col-md-3\">
          <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/contact_footer/person1.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Marketing</h4>
        </div>
        <div class=\"col-md-3\">
          <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/contact_footer/person2.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Business</h4>
        </div>
        <div class=\"col-md-3\">
          <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/contact_footer/person3.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>CEO</4>
        </div>
        <div class=\"col-md-3\">
          <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/contact_footer/person4.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Doctor</h4>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/contact/staff.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  60 => 16,  53 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- STAFF -->
  <section id=\"staff\" class=\"py-5 text-center blue-gradient text-white\">
    <div class=\"container\">
      <h1>Notre Equipe</h1>
      <hr>
      <div class=\"row\">
        <div class=\"col-md-3\">
          <img src=\"{{URLROOT}}/public/img/contact_footer/person1.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Marketing</h4>
        </div>
        <div class=\"col-md-3\">
          <img src=\"{{URLROOT}}/public/img/contact_footer/person2.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Business</h4>
        </div>
        <div class=\"col-md-3\">
          <img src=\"{{URLROOT}}/public/img/contact_footer/person3.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>CEO</4>
        </div>
        <div class=\"col-md-3\">
          <img src=\"{{URLROOT}}/public/img/contact_footer/person4.jpg\" alt=\"\" class=\"img-fluid rounded-circle mb-2\">
          <h4>Doctor</h4>
        </div>
      </div>
    </div>
  </section>", "/components/contact/staff.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/components/contact/staff.twig");
    }
}
