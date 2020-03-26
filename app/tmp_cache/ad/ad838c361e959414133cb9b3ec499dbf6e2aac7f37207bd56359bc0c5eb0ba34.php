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
class __TwigTemplate_bf298587099d1ab4ff1c978f68f921ee7df874a03a3411e6d02ef4547110b863 extends Template
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
            top:-90px;
            left:1200px;
            background:rgba(55,166,222,.9);
            z-index:1900;
            border-radius:10px;
            
            \" 

          id=\"lead_form_float\" 
          action=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes\" 
          method=\"post\" 
          class=\"text-center form d-none d-lg-block p-3 z-depth-2 \"
          >
                 
                  <h4 class=\"text-center  mb-4 \" >Demander un devis </h4>
                 <br>
                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom au complet\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre numéro de téléphone\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
                        </div>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre adresse email\" >
                     </div>

                      <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <label class=\"input-group-text\" for=\"inputGroupSelect01\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                        </div>
                        <select class=\"custom-select\" id=\"inputGroupSelect01\">
                          <option selected>Intervention souhaitée...</option>
                          <option value=\"1\">greffe cheveux</option>
                          <option value=\"2\">greffe barbe </option>
                          <option value=\"3\">greffe sourcils</option>
                         
                        </select>
                      </div>


                      <br>
                        <button 
                        style=\"margin-top:-4px; border:1px solid black; border-radius:10px;color:black;margin-top:5px;\" 
                        class=\"ml-4 rounded btn blue  darken-3 z-depth-0  \">
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
 
 
 window.addEventListener('load', function(event){
 var w = parseInt(window.innerWidth);
   pos=w-600;
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
        return array (  58 => 19,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- lead_form_float-->

{# visible on md and up and below  #}
  
     
          <form 
          style=\" 
            width:500px;
            position:relative;
            top:-90px;
            left:1200px;
            background:rgba(55,166,222,.9);
            z-index:1900;
            border-radius:10px;
            
            \" 

          id=\"lead_form_float\" 
          action=\"{{URLROOT}}/homes\" 
          method=\"post\" 
          class=\"text-center form d-none d-lg-block p-3 z-depth-2 \"
          >
                 
                  <h4 class=\"text-center  mb-4 \" >Demander un devis </h4>
                 <br>
                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-portrait\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre nom au complet\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-mobile-alt\"></i></span>
                        </div>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Votre numéro de téléphone\" >
                     </div>

                     <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <span class=\"input-group-text\" id=\"basic-addon1\"><i style=\"width:22px\"  class=\"fas fa-at\"></i></span>
                        </div>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Votre adresse email\" >
                     </div>

                      <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                          <label class=\"input-group-text\" for=\"inputGroupSelect01\"><i style=\"width:22px\" class=\"fas fa-user-md\"></i></label>
                        </div>
                        <select class=\"custom-select\" id=\"inputGroupSelect01\">
                          <option selected>Intervention souhaitée...</option>
                          <option value=\"1\">greffe cheveux</option>
                          <option value=\"2\">greffe barbe </option>
                          <option value=\"3\">greffe sourcils</option>
                         
                        </select>
                      </div>


                      <br>
                        <button 
                        style=\"margin-top:-4px; border:1px solid black; border-radius:10px;color:black;margin-top:5px;\" 
                        class=\"ml-4 rounded btn blue  darken-3 z-depth-0  \">
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
 
 
 window.addEventListener('load', function(event){
 var w = parseInt(window.innerWidth);
   pos=w-600;
  document.getElementById(\"lead_form_float\").style.left = pos + 'px';
});

 </script>", "/components/index/lead_form_float.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/lead_form_float.twig");
    }
}
