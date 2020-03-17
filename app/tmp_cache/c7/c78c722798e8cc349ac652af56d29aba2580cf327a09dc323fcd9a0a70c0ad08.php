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

/* /include/footer.html.twig */
class __TwigTemplate_1b35c18cdf3cfc91b4476f2de4a49acae04ac5f6a6caea80c2fa0b1103103564 extends Template
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
        echo "<!-- Footer -->
<div style=\"height:230px\" class=\"spacer\"></div>
<footer class=\"footer fixed-bottom mt-auto  py-3 grey font-small lighten-2 \">

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-4 text-muted\">© 2020 Copyright:
    <a class=\"text-muted\" href=\"https://mdbootstrap.com/education/bootstrap/\"> TnDevFactory.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->";
    }

    public function getTemplateName()
    {
        return "/include/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<div style=\"height:230px\" class=\"spacer\"></div>
<footer class=\"footer fixed-bottom mt-auto  py-3 grey font-small lighten-2 \">

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-4 text-muted\">© 2020 Copyright:
    <a class=\"text-muted\" href=\"https://mdbootstrap.com/education/bootstrap/\"> TnDevFactory.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->", "/include/footer.html.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\include\\footer.html.twig");
    }
}
