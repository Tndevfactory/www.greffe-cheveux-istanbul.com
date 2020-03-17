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

/* \users\login.twig */
class __TwigTemplate_4306d9907b2478f4d643c15f89f009a693768e57f90a0c39340229417a3f756b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["form"] = $this->macros["form"] = $this->loadTemplate("/inc/forms.html.twig", "\\users\\login.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "\\users\\login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<title> add contact </title>
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
  <h3> login </h3>

  <form action=\"check_add\" method=\"post\">
    <div class=\"row\">
  
    ";
        // line 17
        echo twig_call_macro($macros["form"], "macro_input", ["email", "votre email", (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["email"] ?? null) : null), ["msg" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["data"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["email_err"] ?? null) : null)], ["class" => "col", "type" => "email"]], 17, $context, $this->getSourceContext());
        echo "
    ";
        // line 18
        echo twig_call_macro($macros["form"], "macro_input", ["password", "votre mot de passe", (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["fname"] ?? null) : null), ["msg" => (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["fname_err"] ?? null) : null)], ["class" => "col"]], 18, $context, $this->getSourceContext());
        echo "
  </div>

      <div class=\"row \">
     
          <div class=\"col\">
        
            <button class=\"btn btn-success btn-block \" type=\"submit\">
            login</button>
          </div>

        <div class=\"col\">

                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/register\" class=\"btn btn-info btn-block\" type=\"submit\">
                register</a>
        </div>

      </div>

 
  
  </form>

";
    }

    public function getTemplateName()
    {
        return "\\users\\login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  75 => 18,  71 => 17,  63 => 11,  59 => 10,  54 => 7,  50 => 6,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% import '/inc/forms.html.twig' as form %}


{% block head %}
<title> add contact </title>
{% endblock  %}

{% block content %}

  <h3> login </h3>

  <form action=\"check_add\" method=\"post\">
    <div class=\"row\">
  
    {{form.input('email','votre email', data['email'], { msg : data['email_err'] },{ class : 'col', type:'email'} ) }}
    {{form.input('password','votre mot de passe', data['fname'] ,{ msg : data['fname_err'] },{ class : 'col'} ) }}
  </div>

      <div class=\"row \">
     
          <div class=\"col\">
        
            <button class=\"btn btn-success btn-block \" type=\"submit\">
            login</button>
          </div>

        <div class=\"col\">

                <a href=\"{{URLROOT}}/users/register\" class=\"btn btn-info btn-block\" type=\"submit\">
                register</a>
        </div>

      </div>

 
  
  </form>

{% endblock  %}
", "\\users\\login.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\users\\login.twig");
    }
}
