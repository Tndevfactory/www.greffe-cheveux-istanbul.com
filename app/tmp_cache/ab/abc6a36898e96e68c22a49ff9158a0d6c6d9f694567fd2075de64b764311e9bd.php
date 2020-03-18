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

/* /components/home_icon_section.twig */
class __TwigTemplate_c04354fc6e3850a5f6e168283a1280b64141e1ef9cc4babab032334a9eaf32ba extends Template
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


<!--home_icon_section  -->
  <section id=\"home-icons\" class=\"py-5\">
    <div class=\"container\">
      <div class=\"row\">
       
        <div class=\"col-md-4 mb-4 text-center\">
        
          <i class=\"fas fa-user-md fa-3x mb-2\"></i>
          <h3>Turning Gears</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
       
        <div class=\"col-md-4 mb-4 text-center\">
     
          <i class=\"fas fa-notes-medical fa-3x mb-2\"></i>
          <h3>Sending Data lang ";
        // line 19
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
        
         <div class=\"col-md-4 mb-4 text-center\">
          <i class=\"fas fa-syringe fa-3x mb-2\"></i>
          <h3>Making Money</h3>
          <p>Lorem ipsum dolor sit amet lang ";
        // line 26
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo " consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "/components/home_icon_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<!--home_icon_section  -->
  <section id=\"home-icons\" class=\"py-5\">
    <div class=\"container\">
      <div class=\"row\">
       
        <div class=\"col-md-4 mb-4 text-center\">
        
          <i class=\"fas fa-user-md fa-3x mb-2\"></i>
          <h3>Turning Gears</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
       
        <div class=\"col-md-4 mb-4 text-center\">
     
          <i class=\"fas fa-notes-medical fa-3x mb-2\"></i>
          <h3>Sending Data lang {{lang}}</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
        
         <div class=\"col-md-4 mb-4 text-center\">
          <i class=\"fas fa-syringe fa-3x mb-2\"></i>
          <h3>Making Money</h3>
          <p>Lorem ipsum dolor sit amet lang {{lang}} consectetur, adipisicing elit. Libero, veniam.</p>
        </div>
      </div>
    </div>
  </section>", "/components/home_icon_section.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\components\\home_icon_section.twig");
    }
}
