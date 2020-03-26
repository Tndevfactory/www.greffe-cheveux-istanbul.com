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

/* /inc/navbar.html.twig */
class __TwigTemplate_1302b12088e72d6d8457f7c398637c1511b985c6ffef07cb50fa2c4b5a87f118 extends Template
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
<nav  class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">

            <a class=\"navbar-brand pl-3\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes\"> <img height=\"80\" width=\"80\" src=\"";
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/public/img/logo/health_expert_logo.png\" class=\"img-fluid\" alt=\"logo Health Experts\">  
               <span class=\"text-capitalize h4 \" > Hair Experts </span> 
            </a>
        
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
              <span class=\"navbar-toggler-icon\"></span>
            </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">

                <li class=\"nav-item active\">
                  <a class=\"nav-link\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes\">Home </a>
                </li>

                <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/greffeCheveuxTurquie\">Greffe Cheveux </a>
                </li>

                <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/greffeBarbe\">Greffe Barbe </a>
                </li>


                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/greffeSourcils\">Greffe Sourcils </a>
                </li>

                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/quiSommesNous\">Qui Sommes Nous </a>
                </li> 
                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/contact\">Contact </a>
                </li>

                ";
        // line 49
        echo "
            </div>
        


</nav>





 
  
";
    }

    public function getTemplateName()
    {
        return "/inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  97 => 39,  90 => 35,  82 => 30,  74 => 25,  67 => 21,  60 => 17,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav  class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">

            <a class=\"navbar-brand pl-3\" href=\"{{URLROOT}}/homes\"> <img height=\"80\" width=\"80\" src=\"{{URLROOT}}/public/img/logo/health_expert_logo.png\" class=\"img-fluid\" alt=\"logo Health Experts\">  
               <span class=\"text-capitalize h4 \" > Hair Experts </span> 
            </a>
        
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
              <span class=\"navbar-toggler-icon\"></span>
            </button>
 
        <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
       
              <ul style=\"\" class=\"navbar-nav pl-5 h5  ml-auto pr-5 mr-4\">

                <li class=\"nav-item active\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes\">Home </a>
                </li>

                <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{{URLROOT}}/homes/greffeCheveuxTurquie\">Greffe Cheveux </a>
                </li>

                <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"{{URLROOT}}/homes/greffeBarbe\">Greffe Barbe </a>
                </li>


                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/greffeSourcils\">Greffe Sourcils </a>
                </li>

                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/quiSommesNous\">Qui Sommes Nous </a>
                </li> 
                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/contact\">Contact </a>
                </li>

                {# <li class=\"nav-item d-flex\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/language/ar\">arabic </a>
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/language/fr\">french </a>
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/language/en\">english</a>
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/language/en\">{{lang}}----</a>
                  
                </li> #}

            </div>
        


</nav>





 
  
", "/inc/navbar.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/navbar.html.twig");
    }
}
