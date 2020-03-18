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

/* /include/navbar.html.twig */
class __TwigTemplate_e8cd59f4caf2ff70c846b6f9ad5783b4ad4a16320cd16f37dc54bc7f551e1e64 extends Template
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

<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">



  <a class=\"navbar-brand\" href=\"#\"> <img height=\"100\" width=\"100\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/tndev_logo.png\" class=\"img-fluid\" alt=\"\">
     <span class=\"text-capitalize \" > House of techos </span> </a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" >
    <span class=\"navbar-toggler-icon\"></span>
  </button>
 
 

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/index/4\">Home </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/blogs/index\">Blog</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"  >
                Services
              </a>
              <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Create wordpress theme</a>
                <a class=\"dropdown-item\" href=\"#\">Build node js app</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Maintain your hosting</a>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\" >Portfolio</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\" >Price</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/login\" >Login</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/register\" >register</a>
            </li>

          </ul>

    <form action=\"#\" method=\"post\" class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-green white-text my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>

  </div>


</nav>





 
  
";
    }

    public function getTemplateName()
    {
        return "/include/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 44,  88 => 41,  65 => 21,  59 => 18,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">



  <a class=\"navbar-brand\" href=\"#\"> <img height=\"100\" width=\"100\" src=\"{{URLROOT}}/public/img/tndev_logo.png\" class=\"img-fluid\" alt=\"\">
     <span class=\"text-capitalize \" > House of techos </span> </a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" >
    <span class=\"navbar-toggler-icon\"></span>
  </button>
 
 

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"{{URLROOT}}/homes/index/4\">Home </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{URLROOT}}/blogs/index\">Blog</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\"  >
                Services
              </a>
              <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Create wordpress theme</a>
                <a class=\"dropdown-item\" href=\"#\">Build node js app</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Maintain your hosting</a>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\" >Portfolio</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\" >Price</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{URLROOT}}/users/login\" >Login</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{URLROOT}}/users/register\" >register</a>
            </li>

          </ul>

    <form action=\"#\" method=\"post\" class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-green white-text my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>

  </div>


</nav>





 
  
", "/include/navbar.html.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\include\\navbar.html.twig");
    }
}
