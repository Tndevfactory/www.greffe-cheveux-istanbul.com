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

/* /include/scripts.html.twig */
class __TwigTemplate_94e2b079844dac45510dfe8c695016255de84120cc162c41ccdacfae90575541 extends Template
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
        echo "<script type=\"text/javascript\" src=\"public/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"public/js/particles.js\"></script>
<script type=\"text/javascript\" src=\"public/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"public/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"public/js/mdb.min.js\"></script>
<script type=\"text/javascript\" src=\"public/js/main.js\"></script>";
    }

    public function getTemplateName()
    {
        return "/include/scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\" src=\"public/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"public/js/particles.js\"></script>
<script type=\"text/javascript\" src=\"public/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"public/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"public/js/mdb.min.js\"></script>
<script type=\"text/javascript\" src=\"public/js/main.js\"></script>", "/include/scripts.html.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\include\\scripts.html.twig");
    }
}
