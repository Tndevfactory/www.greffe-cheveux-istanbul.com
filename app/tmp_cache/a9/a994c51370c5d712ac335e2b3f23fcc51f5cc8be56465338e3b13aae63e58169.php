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

/* /homes/greffe-barbe.twig */
class __TwigTemplate_2184f3819a5694989ca31d6342133c8d2b6e42d295b0442511ec690cc8248576 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/greffe-barbe.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "      <meta name=\"title\" content=\"Greffe barbe \">
      <meta name=\"description\" content=\"barbe turquie \">
      <meta name=\"keywords\" content=\"barbe\">
    ";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <title> GREFFE BARBE </title>
     <style>
     

      </style>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
 ";
        // line 17
        $this->loadTemplate("/components/greffe_barbe/page_header.twig", "/homes/greffe-barbe.twig", 17)->display($context);
        // line 18
        echo " ";
        $this->loadTemplate("/components/greffe_barbe/blog_section.twig", "/homes/greffe-barbe.twig", 18)->display($context);
        // line 19
        echo " 
 

";
    }

    public function getTemplateName()
    {
        return "/homes/greffe-barbe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  81 => 18,  79 => 17,  76 => 16,  72 => 15,  63 => 8,  59 => 7,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block meta %}
      <meta name=\"title\" content=\"Greffe barbe \">
      <meta name=\"description\" content=\"barbe turquie \">
      <meta name=\"keywords\" content=\"barbe\">
    {% endblock  %}
{% block head %}
    <title> GREFFE BARBE </title>
     <style>
     

      </style>
{% endblock  %}

{% block content %}

 {% include('/components/greffe_barbe/page_header.twig') %}
 {% include('/components/greffe_barbe/blog_section.twig') %}
 
 

{% endblock  %}


", "/homes/greffe-barbe.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/homes/greffe-barbe.twig");
    }
}
