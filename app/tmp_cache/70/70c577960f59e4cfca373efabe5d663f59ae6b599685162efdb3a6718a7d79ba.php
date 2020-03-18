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

/* \users\register.twig */
class __TwigTemplate_5aaf4ca3dda16a275c4950d1f7c24d3f52da2a40bd2d6cbafbab538276037711 extends Template
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
        $macros["form"] = $this->macros["form"] = $this->loadTemplate("/inc/forms.html.twig", "\\users\\register.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "\\users\\register.twig", 1);
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
  <h3> Register new user </h3>

  <form action=\"check_register\" method=\"post\">

  <div class=\"row\">
    ";
        // line 17
        echo twig_call_macro($macros["form"], "macro_input", ["fname", "votre prenom", (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["data"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["fname"] ?? null) : null), ["msg" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["data"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["fname_err"] ?? null) : null)], ["class" => "col"]], 17, $context, $this->getSourceContext());
        echo "
    ";
        // line 18
        echo twig_call_macro($macros["form"], "macro_input", ["email", "votre email", (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["email"] ?? null) : null), ["msg" => (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["email_err"] ?? null) : null)], ["class" => "col", "type" => "email"]], 18, $context, $this->getSourceContext());
        echo "
  </div>

  <div class=\"row\">
    ";
        // line 22
        echo twig_call_macro($macros["form"], "macro_input", ["email", "votre nom", (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["data"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["email"] ?? null) : null), ["msg" => (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["data"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["email_err"] ?? null) : null)], ["class" => "col", "type" => "email"]], 22, $context, $this->getSourceContext());
        echo "
    ";
        // line 23
        echo twig_call_macro($macros["form"], "macro_input", ["lname", "votre mot de passe", (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["data"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["lname"] ?? null) : null), ["msg" => (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["data"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["lname_err"] ?? null) : null)], ["class" => "col"]], 23, $context, $this->getSourceContext());
        echo "
  </div>

  <div class=\"row\">
    ";
        // line 27
        echo twig_call_macro($macros["form"], "macro_textarea", ["textarea", "vos hobbies", ["class" => "col"]], 27, $context, $this->getSourceContext());
        echo "
    ";
        // line 28
        echo twig_call_macro($macros["form"], "macro_input", ["email", "confirmer votre mot de passe", (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["data"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["email"] ?? null) : null), ["msg" => (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["data"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["email_err"] ?? null) : null)], ["class" => "col", "type" => "email"]], 28, $context, $this->getSourceContext());
        echo "
  </div>
    
    <div class=\"row \">
          <div class=\"col\">
            <button class=\"btn btn-success btn-block \" type=\"submit\">
            register</button>
          </div>

         <div class=\"col\">
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["URLROOT"] ?? null), "html", null, true);
        echo "/users/login\" class=\"btn btn-info btn-block\" type=\"submit\">
              login</a>
        </div>
    </div>
 
  
  </form>

";
    }

    public function getTemplateName()
    {
        return "\\users\\register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  97 => 28,  93 => 27,  86 => 23,  82 => 22,  75 => 18,  71 => 17,  63 => 11,  59 => 10,  54 => 7,  50 => 6,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% import '/inc/forms.html.twig' as form %}


{% block head %}
<title> add contact </title>
{% endblock  %}

{% block content %}

  <h3> Register new user </h3>

  <form action=\"check_register\" method=\"post\">

  <div class=\"row\">
    {{form.input('fname','votre prenom', data['fname'] ,{ msg : data['fname_err'] },{ class : 'col'} ) }}
    {{form.input('email','votre email', data['email'], { msg : data['email_err'] },{ class : 'col', type:'email'} ) }}
  </div>

  <div class=\"row\">
    {{form.input('email','votre nom', data['email'], { msg : data['email_err'] },{ class : 'col', type:'email'} ) }}
    {{form.input('lname','votre mot de passe', data['lname'], { msg : data['lname_err'] }, { class : 'col'} ) }}
  </div>

  <div class=\"row\">
    {{form.textarea('textarea', 'vos hobbies', { class : 'col'} ) }}
    {{form.input('email','confirmer votre mot de passe', data['email'], { msg : data['email_err'] },{ class : 'col', type:'email'} ) }}
  </div>
    
    <div class=\"row \">
          <div class=\"col\">
            <button class=\"btn btn-success btn-block \" type=\"submit\">
            register</button>
          </div>

         <div class=\"col\">
            <a href=\"{{URLROOT}}/users/login\" class=\"btn btn-info btn-block\" type=\"submit\">
              login</a>
        </div>
    </div>
 
  
  </form>

{% endblock  %}
", "\\users\\register.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\users\\register.twig");
    }
}
