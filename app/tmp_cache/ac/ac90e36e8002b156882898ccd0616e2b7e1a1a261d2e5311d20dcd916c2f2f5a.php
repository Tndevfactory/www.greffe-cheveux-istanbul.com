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

/* /components/index/lead_form_float.twig */
class __TwigTemplate_d795fd189cfdbc5e11411bd4f8d25d718848a27d771683ea3b825230d52d6867 extends Template
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
        echo "<!-- lead_form_float-->

";
        // line 4
        echo "  
     
          <form 
          style=\" 
            width:500px;
            position:relative;
            top:-155px;
            left:1150px;
            background:rgba(55,166,222,.7);
            z-index:900;
            border-radius:10px;
            
            \" 

          id=\"lead_form_float\" 
          action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" 
          method=\"post\" 
          class=\"text-center form d-none d-lg-block p-3 \"
          >
                 
                 <h4 class=\"text-center white-text\" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 26
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 26), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"Veuillez entrer votre nom \">
                          <div class=\"invalid-feedback\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 27), "html", null, true);
        echo " </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 31
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 31), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 32), "html", null, true);
        echo "</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 36
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 36), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 37), "html", null, true);
        echo "</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn indigo accent-2 white-text \">
                        Envoyer
                        </button>
          </form>
   
 <script>
 window.addEventListener('resize', function(event){
 var w = parseInt(window.innerWidth);
  console.log(w);
  pos=w-600;
  console.log(pos);
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});
 
 </script>";
    }

    public function getTemplateName()
    {
        return "/components/index/lead_form_float.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  90 => 36,  83 => 32,  79 => 31,  72 => 27,  68 => 26,  58 => 19,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_float-->

{# visible on md and up and below  #}
  
     
          <form 
          style=\" 
            width:500px;
            position:relative;
            top:-155px;
            left:1150px;
            background:rgba(55,166,222,.7);
            z-index:900;
            border-radius:10px;
            
            \" 

          id=\"lead_form_float\" 
          action=\"{{URLROOT}}/homes/newsletter\" 
          method=\"post\" 
          class=\"text-center form d-none d-lg-block p-3 \"
          >
                 
                 <h4 class=\"text-center white-text\" >Demander un devis </h4>
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  {{ data.name_err == ''? '': 'is-invalid'  }}\"   placeholder=\"Veuillez entrer votre nom \">
                          <div class=\"invalid-feedback\"> {{data.name_err }} </div>
                      </div>

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">{{data.email_err }}</div>
                      </div>
                      
                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"Veuillez entrer votre numéro de téléphone\">
                            <div class=\"invalid-feedback\">{{data.email_err }}</div>
                      </div>
                      
                      
                        <button 
                        style=\"margin-top:-4px;border-radius:8px\" 
                        class=\"ml-4 btn indigo accent-2 white-text \">
                        Envoyer
                        </button>
          </form>
   
 <script>
 window.addEventListener('resize', function(event){
 var w = parseInt(window.innerWidth);
  console.log(w);
  pos=w-600;
  console.log(pos);
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});
 
 </script>", "/components/index/lead_form_float.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/index/lead_form_float.twig");
    }
}
