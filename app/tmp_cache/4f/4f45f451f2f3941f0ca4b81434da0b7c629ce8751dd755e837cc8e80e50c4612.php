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

/* /homes/contact.twig */
class __TwigTemplate_99e24f530cbfecbcdc63dbf393d1e3794ac9605b1a3419b513e911effe7c7671 extends Template
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
        // line 2
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "/homes/contact.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "      <meta name=\"title\" content=\"contact clinic \">
      <meta name=\"description\" content=\"contact clinique istanbul \">
      <meta name=\"keywords\" content=\"contact\">
    ";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <title> CONTACT </title>
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
 ";
        // line 15
        $this->loadTemplate("/components/contact/page_header.twig", "/homes/contact.twig", 15)->display($context);
        // line 16
        echo " ";
        $this->loadTemplate("/components/contact/contact_section.twig", "/homes/contact.twig", 16)->display($context);
        // line 17
        echo " ";
        $this->loadTemplate("/components/contact/staff.twig", "/homes/contact.twig", 17)->display($context);
        // line 18
        echo " 

";
    }

    public function getTemplateName()
    {
        return "/homes/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  80 => 17,  77 => 16,  75 => 15,  72 => 14,  68 => 13,  63 => 9,  59 => 8,  52 => 4,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block meta %}
      <meta name=\"title\" content=\"contact clinic \">
      <meta name=\"description\" content=\"contact clinique istanbul \">
      <meta name=\"keywords\" content=\"contact\">
    {% endblock  %}
{% block head %}
    <title> CONTACT </title>
{% endblock  %}


{% block content %}

 {% include('/components/contact/page_header.twig') %}
 {% include('/components/contact/contact_section.twig') %}
 {% include('/components/contact/staff.twig') %}
 

{% endblock  %}

", "/homes/contact.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/homes/contact.twig");
    }
}
