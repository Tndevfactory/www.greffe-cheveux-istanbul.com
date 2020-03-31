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
            'style' => [$this, 'block_style'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('style', $context, $blocks);
        // line 65
        echo "
<section id=\"greffenavbar\" class=\"sticky-top\" >

  <nav id=\"greffeNav\" class=\"navbar navbar-expand-lg navbar-light cloudy-knoxville-gradient  \">

            <a class=\"navbar-brand\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "\">
              <img src=\"https://drive.google.com/uc?export=view&id=1JHYrI8DUkyAU7PHO7QLhZxzrZq7QMzIS\" />
               <!-- /public/img/logo/health_expert_logo.png  -->           
              <span> Hair Experts </span>
            </a>
          
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
              <span class=\"navbar-toggler-icon\"></span>
            </button>
  
          <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
                <ul  class=\"navbar-nav  ml-auto mr-5\">
                    <li class=\"nav-item \">
                      <a class=\"nav-link\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "\">Accueil</a>
                    </li>

                    <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-cheveux-Turquie\">Greffe Cheveux </a>
                    </li>

                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-barbe\">Greffe Barbe </a>
                    </li>

                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/greffe-sourcils\">Greffe Sourcils </a>
                    </li>
                    
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/qui-sommes-nous\">Qui Sommes Nous </a>
                    </li> 
                    
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/contact\">Contact </a>
                    </li>
            </div>
  
  </nav>

</section>




 
  
";
    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
      <style>

     
        #greffenavbar nav > a {
             margin-left:35px;
             
                            
            }
        #greffenavbar nav a span {
             font-weight:550;
             color:#1A5BAC;
             font-size:33px;
            
                            
            }

        #greffenavbar nav a img {
             height:60px;
             width:60px;
                       
                            
            }

        #greffenavbar .navbar-nav li {
             min-height:75px;
             line-height:2.5rem;
                            
            }

        #greffenavbar .navbar-nav li a {
              font-weight:550;
              color:#1A5BAC;
              font-size:20px;
              
            }

        #greffenavbar .navbar-nav li a:hover {
             
             text-decoration: underline;
             text-decoration-color: steelblue;
             text-decoration-style: double;
              
            }


        @media(max-width:1200px){

             #greffenavbar .navbar-nav li a {
              font-weight:550;
              color:#1A5BAC;
              font-size:18px;
              line-height:1.1rem;
              
            }

            

            }

      </style>
 
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
        return array (  119 => 2,  101 => 103,  94 => 99,  87 => 95,  80 => 91,  73 => 87,  66 => 83,  50 => 70,  43 => 65,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block style %}   
      <style>

     
        #greffenavbar nav > a {
             margin-left:35px;
             
                            
            }
        #greffenavbar nav a span {
             font-weight:550;
             color:#1A5BAC;
             font-size:33px;
            
                            
            }

        #greffenavbar nav a img {
             height:60px;
             width:60px;
                       
                            
            }

        #greffenavbar .navbar-nav li {
             min-height:75px;
             line-height:2.5rem;
                            
            }

        #greffenavbar .navbar-nav li a {
              font-weight:550;
              color:#1A5BAC;
              font-size:20px;
              
            }

        #greffenavbar .navbar-nav li a:hover {
             
             text-decoration: underline;
             text-decoration-color: steelblue;
             text-decoration-style: double;
              
            }


        @media(max-width:1200px){

             #greffenavbar .navbar-nav li a {
              font-weight:550;
              color:#1A5BAC;
              font-size:18px;
              line-height:1.1rem;
              
            }

            

            }

      </style>
 
{% endblock  %}

<section id=\"greffenavbar\" class=\"sticky-top\" >

  <nav id=\"greffeNav\" class=\"navbar navbar-expand-lg navbar-light cloudy-knoxville-gradient  \">

            <a class=\"navbar-brand\" href=\"{{URLROOT}}\">
              <img src=\"https://drive.google.com/uc?export=view&id=1JHYrI8DUkyAU7PHO7QLhZxzrZq7QMzIS\" />
               <!-- /public/img/logo/health_expert_logo.png  -->           
              <span> Hair Experts </span>
            </a>
          
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#MyNavbar\" >
              <span class=\"navbar-toggler-icon\"></span>
            </button>
  
          <div class=\"collapse navbar-collapse\" id=\"MyNavbar\">
                <ul  class=\"navbar-nav  ml-auto mr-5\">
                    <li class=\"nav-item \">
                      <a class=\"nav-link\" href=\"{{URLROOT}}\">Accueil</a>
                    </li>

                    <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"{{URLROOT}}/greffe-cheveux-Turquie\">Greffe Cheveux </a>
                    </li>

                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" href=\"{{URLROOT}}/greffe-barbe\">Greffe Barbe </a>
                    </li>

                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{{URLROOT}}/greffe-sourcils\">Greffe Sourcils </a>
                    </li>
                    
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{{URLROOT}}/qui-sommes-nous\">Qui Sommes Nous </a>
                    </li> 
                    
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{{URLROOT}}/contact\">Contact </a>
                    </li>
            </div>
  
  </nav>

</section>




 
  
", "/inc/navbar.html.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/inc/navbar.html.twig");
    }
}
