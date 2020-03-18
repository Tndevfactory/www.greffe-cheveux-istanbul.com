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

/* /include/styles.html.twig */
class __TwigTemplate_8eff7d0e0ed8feb15f3518f003fece3de0e686cdf0acb6de1817a3402085b25e extends Template
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
        echo "  <link rel=\"stylesheet\" href=\"public/font/css/all.css\">
  <link rel=\"stylesheet\" href=\"public/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"public/css/mdb.min.css\" >
  <link rel=\"stylesheet\" href=\"public/css/main.css\">";
    }

    public function getTemplateName()
    {
        return "/include/styles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <link rel=\"stylesheet\" href=\"public/font/css/all.css\">
  <link rel=\"stylesheet\" href=\"public/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"public/css/mdb.min.css\" >
  <link rel=\"stylesheet\" href=\"public/css/main.css\">", "/include/styles.html.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\include\\styles.html.twig");
    }
}
