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

/* /components/greffe_cheveux/page_header.twig */
class __TwigTemplate_ac029b62a7e51cdd316a1d0a6a16f2bd26d79066c6b127c1545c063a0661afd2 extends Template
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
        echo "<!-- PAGE HEADER -->
  <header id=\"page-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 m-auto text-center\">
          <h1>Greffe Cheveux</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?</p>
        </div>
      </div>
    </div>
  </header>";
    }

    public function getTemplateName()
    {
        return "/components/greffe_cheveux/page_header.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- PAGE HEADER -->
  <header id=\"page-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 m-auto text-center\">
          <h1>Greffe Cheveux</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?</p>
        </div>
      </div>
    </div>
  </header>", "/components/greffe_cheveux/page_header.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/components/greffe_cheveux/page_header.twig");
    }
}
