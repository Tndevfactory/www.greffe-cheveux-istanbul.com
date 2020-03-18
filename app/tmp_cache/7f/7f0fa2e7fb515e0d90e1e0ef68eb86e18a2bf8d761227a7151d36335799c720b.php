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

/* /components/home_heading_section.twig */
class __TwigTemplate_e53a18a63a0069774d1e624893b4ab672aad86d4faa0b173603ebeaf1372f822 extends Template
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
            <h1>Are You Ready To Get Started? lang ";
        // line 7
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "</h1>
            <p class=\"d-none d-md-block\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est eaque magni sit dolores. Nisi, dolor nam modi perspiciatis
              consequatur soluta.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <p> lang ";
        // line 15
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "/components/home_heading_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- home_heading_section -->
  <section id=\"home-heading\" class=\"p-5\">
    <div class=\"dark-overlay\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"container pt-5\">
            <h1>Are You Ready To Get Started? lang {{lang}}</h1>
            <p class=\"d-none d-md-block\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est eaque magni sit dolores. Nisi, dolor nam modi perspiciatis
              consequatur soluta.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <p> lang {{lang}}</p>", "/components/home_heading_section.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/home_heading_section.twig");
    }
}
