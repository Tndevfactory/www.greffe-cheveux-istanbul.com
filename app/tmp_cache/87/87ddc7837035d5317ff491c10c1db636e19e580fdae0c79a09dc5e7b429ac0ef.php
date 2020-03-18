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

/* /homes/greffe-cheveux-turquie.twig */
class __TwigTemplate_ebc5069c424e27dccc28f6a44fd6b2f5407db19c5fce179bd8c9f01ff9726a72 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/greffe-cheveux-turquie.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "     <meta name=\"title\" content=\"Greffe cheveux Turquie, prix implant cheveux turquie\">
    <meta name=\"description\" content=\"------Greffe cheveux en Turquie : greffe cheveux fue istanbul, greffe DHI Turquie , meilleure clinique  implant cheveux prix pas cher\">
    <meta name=\"keywords\" content=\"greffe,cheveux,istanbul,DHI\">
     
";
    }

    // line 11
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <title> GREFFE CHEVEUX</title>
     
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
 ";
        // line 18
        $this->loadTemplate("/components/greffe_cheveux/page_header.twig", "/homes/greffe-cheveux-turquie.twig", 18)->display($context);
        // line 19
        echo " ";
        $this->loadTemplate("/components/greffe_cheveux/blog_section.twig", "/homes/greffe-cheveux-turquie.twig", 19)->display($context);
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "/homes/greffe-cheveux-turquie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  79 => 19,  77 => 18,  74 => 17,  70 => 16,  64 => 12,  60 => 11,  52 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}


{% block meta %}
     <meta name=\"title\" content=\"Greffe cheveux Turquie, prix implant cheveux turquie\">
    <meta name=\"description\" content=\"------Greffe cheveux en Turquie : greffe cheveux fue istanbul, greffe DHI Turquie , meilleure clinique  implant cheveux prix pas cher\">
    <meta name=\"keywords\" content=\"greffe,cheveux,istanbul,DHI\">
     
{% endblock  %}

{% block head %}
    <title> GREFFE CHEVEUX</title>
     
{% endblock  %}

{% block content %}

 {% include('/components/greffe_cheveux/page_header.twig') %}
 {% include('/components/greffe_cheveux/blog_section.twig') %}

{% endblock  %}

", "/homes/greffe-cheveux-turquie.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/homes/greffe-cheveux-turquie.twig");
    }
}
