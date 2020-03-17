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
class __TwigTemplate_77cf3eba66e1ab08454388b50f44f0cea3ac9aa11cf5df7ef6e165c1c020a058 extends Template
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
        // line 5
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
        // line 18
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes\">Home </a>
                </li>

                <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/greffe_cheveux_dhi\">Greffe Cheveux </a>
                </li>

                <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/greffe_barbe\">Greffe Barbe </a>
                </li>


                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/greffe_sourcils\">Greffe Sourcils </a>
                </li>

                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/qui_sommes_nous\">Qui Sommes Nous </a>
                </li> 
                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 40
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
        return array (  104 => 49,  98 => 40,  91 => 36,  83 => 31,  75 => 26,  68 => 22,  61 => 18,  43 => 5,  37 => 1,);
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
                      <a class=\"nav-link\" href=\"{{URLROOT}}/homes/greffe_cheveux_dhi\">Greffe Cheveux </a>
                </li>

                <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"{{URLROOT}}/homes/greffe_barbe\">Greffe Barbe </a>
                </li>


                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/greffe_sourcils\">Greffe Sourcils </a>
                </li>

                
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{URLROOT}}/homes/qui_sommes_nous\">Qui Sommes Nous </a>
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





 
  
", "/inc/navbar.html.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/inc/navbar.html.twig");
    }
}
