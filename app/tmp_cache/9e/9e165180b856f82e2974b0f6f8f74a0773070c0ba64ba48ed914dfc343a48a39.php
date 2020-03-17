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

/* /components/contact/page_header.twig */
class __TwigTemplate_d9386838fbac35d9f4a88766cca3a1afb155b7a759ac39995a4da3b5bc11062b extends Template
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
        echo " <!-- PAGE HEADER -->
  <header id=\"page-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 m-auto text-center\">
          <h1>Contact Us</h1>
          <p>Lorem ipsum, dolor session  sit amet consectetur adipisicing elit. Quas, temporibus?</p>
        </div>
      </div>
    </div>
  </header>";
    }

    public function getTemplateName()
    {
        return "/components/contact/page_header.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- PAGE HEADER -->
  <header id=\"page-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 m-auto text-center\">
          <h1>Contact Us</h1>
          <p>Lorem ipsum, dolor session  sit amet consectetur adipisicing elit. Quas, temporibus?</p>
        </div>
      </div>
    </div>
  </header>", "/components/contact/page_header.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/contact/page_header.twig");
    }
}
