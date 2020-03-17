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

/* /components/newsletter_section.twig */
class __TwigTemplate_2f340e266b0d32cf07a6f5a134d5bd3d2eb8054a008656aca35dbb9818aef550 extends Template
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
        echo "<!-- NEWSLETTER -->
<!-- newsletter -->
  <section id=\"newsletter\" class=\"text-center p-5 bg-dark text-white\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <h1>Sign Up For Our Newsletterlang ";
        // line 7
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio asperiores consectetur, quae ducimus voluptates
            vero repellendus architecto maiores recusandae mollitia?</p>
          <form class=\"form-inline justify-content-center\">
            <input type=\"text\" class=\"form-control mb-2 mr-2\" placeholder=\"Enter Name\">
            <input type=\"text\" class=\"form-control mb-2 mr-2\" placeholder=\"Enter Email\">
            <button class=\"btn btn-primary mb-2\">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "/components/newsletter_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- NEWSLETTER -->
<!-- newsletter -->
  <section id=\"newsletter\" class=\"text-center p-5 bg-dark text-white\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <h1>Sign Up For Our Newsletterlang {{lang}}</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio asperiores consectetur, quae ducimus voluptates
            vero repellendus architecto maiores recusandae mollitia?</p>
          <form class=\"form-inline justify-content-center\">
            <input type=\"text\" class=\"form-control mb-2 mr-2\" placeholder=\"Enter Name\">
            <input type=\"text\" class=\"form-control mb-2 mr-2\" placeholder=\"Enter Email\">
            <button class=\"btn btn-primary mb-2\">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
", "/components/newsletter_section.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/newsletter_section.twig");
    }
}
