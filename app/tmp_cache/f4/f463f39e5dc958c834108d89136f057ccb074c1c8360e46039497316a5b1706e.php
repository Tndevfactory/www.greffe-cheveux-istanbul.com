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

/* /components/index/newsletter_section.twig */
class __TwigTemplate_0d1b0a7c269d328285cc9e69a926d8e882c8e0ae7225b35e4ef6fd6990ce06f9 extends Template
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
        echo "<!-- NEWSLETTER -->
<!-- newsletter -->
  <section id=\"newsletter\" class=\"text-center p-5 bg-dark text-white\">
    <div class=\"container pb-5 \">
      <div class=\"row\">
        <div class=\"col\">

          <h1 class=\"mb-3\">Inscrivez-vous à notre Newsletter</h1>

          

          <form id=\"newslater_form\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" method=\"post\" class=\"form-row justify-content-center needs-validation\">
      
                <div class=\"row\">

                  <div class=\"col-md-6\">
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 18
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 18), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"veuillez entrer votre nom \">
                          <div class=\"invalid-feedback\"> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 19), "html", null, true);
        echo " </div>
                      </div>
                    </div>

                    <div class=\"col-md-6\">

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 26
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 26), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 27), "html", null, true);
        echo "</div>
                      </div>
                      
                    </div>
                    
               
                </div>

                   <div class=\"row \">
                      <div class=\"col-md-6\">
                          <button 
                              style=\"
                                margin-top:-4px;
                               
                              \" 
                              class=\"ml-4 btn btn-outline-primary rounded\">
                              Envoyer
                          </button>
                        
                  </div>
                  </div>

                   

          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      ";
        // line 55
        echo twig_escape_filter($this->env, ($context["register_success"] ?? null), "html", null, true);
        echo "
                  </div>
        </div>
      </div>
    </div>
  </section>

";
    }

    public function getTemplateName()
    {
        return "/components/index/newsletter_section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 55,  77 => 27,  73 => 26,  63 => 19,  59 => 18,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- NEWSLETTER -->
<!-- newsletter -->
  <section id=\"newsletter\" class=\"text-center p-5 bg-dark text-white\">
    <div class=\"container pb-5 \">
      <div class=\"row\">
        <div class=\"col\">

          <h1 class=\"mb-3\">Inscrivez-vous à notre Newsletter</h1>

          

          <form id=\"newslater_form\" action=\"{{URLROOT}}/homes/newsletter\" method=\"post\" class=\"form-row justify-content-center needs-validation\">
      
                <div class=\"row\">

                  <div class=\"col-md-6\">
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  {{ data.name_err == ''? '': 'is-invalid'  }}\"   placeholder=\"veuillez entrer votre nom \">
                          <div class=\"invalid-feedback\"> {{data.name_err }} </div>
                      </div>
                    </div>

                    <div class=\"col-md-6\">

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 {{ data.email_err =='' ? '': 'is-invalid'  }}\"  placeholder=\"veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">{{data.email_err }}</div>
                      </div>
                      
                    </div>
                    
               
                </div>

                   <div class=\"row \">
                      <div class=\"col-md-6\">
                          <button 
                              style=\"
                                margin-top:-4px;
                               
                              \" 
                              class=\"ml-4 btn btn-outline-primary rounded\">
                              Envoyer
                          </button>
                        
                  </div>
                  </div>

                   

          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      {{register_success}}
                  </div>
        </div>
      </div>
    </div>
  </section>

", "/components/index/newsletter_section.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/components/index/newsletter_section.twig");
    }
}
