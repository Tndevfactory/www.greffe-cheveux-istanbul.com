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

/* /components/qui_somme_nous/about_section.twig */
class __TwigTemplate_3954f46b1ee6979f009762c0b5b30512ca9c28188e0d095bf0eed889d59e833b extends Template
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
        echo " <!-- ABOUT SECTION -->
  <section id=\"about\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h1>What We Do</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
        </div>
        <div class=\"col-md-6\">
          <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" class=\"img-fluid rounded-circle d-none d-md-block about-img\">
        </div>
      </div>
    </div>
  </section>

  ";
    }

    public function getTemplateName()
    {
        return "/components/qui_somme_nous/about_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- ABOUT SECTION -->
  <section id=\"about\" class=\"py-3\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h1>What We Do</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
        </div>
        <div class=\"col-md-6\">
          <img src=\"{{URLROOT}}/public/img/quisommenous/quisommenous2.jpg\" alt=\"\" class=\"img-fluid rounded-circle d-none d-md-block about-img\">
        </div>
      </div>
    </div>
  </section>

  ", "/components/qui_somme_nous/about_section.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/qui_somme_nous/about_section.twig");
    }
}
