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
class __TwigTemplate_8ca588fa3ad634cf9a894d65396875fab6b56b98b7c4f2673881ae97278ce943 extends Template
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
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <h1>Sign Up For Our Newsletterlang </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio asperiores consectetur, quae ducimus voluptates
            vero repellendus architecto maiores recusandae mollitia?</p>

          <form id=\"newslater_form\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/homes/newsletter\" method=\"post\" class=\"form-row justify-content-center needs-validation\">
      
                <div class=\"row\">

                  <div class=\"col-md-6\">
                      <div class=\"form-group\">
                          <input type=\"text\" name=\"name\" class=\"form-control mb-2  ";
        // line 17
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 17), "")) ? ("") : ("is-invalid"));
        echo "\"   placeholder=\"veuillez entrer votre nom \">
                          <div class=\"invalid-feedback\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name_err", [], "any", false, false, false, 18), "html", null, true);
        echo " </div>
                      </div>
                    </div>

                    <div class=\"col-md-6\">

                      <div class=\"form-group\">
                            <input type=\"email\" name=\"email\" class=\"form-control mb-2 ";
        // line 25
        echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 25), "")) ? ("") : ("is-invalid"));
        echo "\"  placeholder=\"veuillez entrer votre email\">
                            <div class=\"invalid-feedback\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email_err", [], "any", false, false, false, 26), "html", null, true);
        echo "</div>
                      </div>
                      
                    </div>
                    
               
                </div>

                   <div class=\"row \">
                      <div class=\"col-md-6\">
                          <button style=\"margin-top:-4px\" class=\"ml-4 btn btn-primary \">Submit</button>
                        
                  </div>
                  </div>

                   

          </form>

          <div class=\"row \">
                      <div class=\"col-md-10 ml-3 green-text   \">
                      ";
        // line 47
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
        return array (  100 => 47,  76 => 26,  72 => 25,  62 => 18,  58 => 17,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- NEWSLETTER -->
<!-- newsletter -->
  <section id=\"newsletter\" class=\"text-center p-5 bg-dark text-white\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col\">
          <h1>Sign Up For Our Newsletterlang </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio asperiores consectetur, quae ducimus voluptates
            vero repellendus architecto maiores recusandae mollitia?</p>

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
                          <button style=\"margin-top:-4px\" class=\"ml-4 btn btn-primary \">Submit</button>
                        
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

", "/components/index/newsletter_section.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/components/index/newsletter_section.twig");
    }
}
