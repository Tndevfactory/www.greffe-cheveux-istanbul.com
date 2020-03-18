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

/* /homes/qui-sommes-nous.twig */
class __TwigTemplate_609a872591b81249ce73cdc99bd90a4653de070123ca00e35511597e1279badc extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/qui-sommes-nous.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "      <meta name=\"title\" content=\"who we are\">
      <meta name=\"description\" content=\"qui sommes nous \">
      <meta name=\"keywords\" content=\"qui somme nous\">
    ";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <title> QUI SOMMES NOUS </title>
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
        $this->loadTemplate("/components/qui_somme_nous/page_header.twig", "/homes/qui-sommes-nous.twig", 17)->display($context);
        // line 18
        echo " ";
        $this->loadTemplate("/components/qui_somme_nous/about_section.twig", "/homes/qui-sommes-nous.twig", 18)->display($context);
        // line 19
        echo " ";
        $this->loadTemplate("/components/qui_somme_nous/icons_boxes.twig", "/homes/qui-sommes-nous.twig", 19)->display($context);
        // line 20
        echo " ";
        $this->loadTemplate("/components/qui_somme_nous/testimonial.twig", "/homes/qui-sommes-nous.twig", 20)->display($context);
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "/homes/qui-sommes-nous.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  87 => 20,  84 => 19,  81 => 18,  79 => 17,  76 => 16,  72 => 15,  63 => 8,  59 => 7,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block meta %}
      <meta name=\"title\" content=\"who we are\">
      <meta name=\"description\" content=\"qui sommes nous \">
      <meta name=\"keywords\" content=\"qui somme nous\">
    {% endblock  %}
{% block head %}
    <title> QUI SOMMES NOUS </title>
    <style>
          

          </style>
{% endblock  %}

{% block content %}

 {% include('/components/qui_somme_nous/page_header.twig') %}
 {% include('/components/qui_somme_nous/about_section.twig') %}
 {% include('/components/qui_somme_nous/icons_boxes.twig') %}
 {% include('/components/qui_somme_nous/testimonial.twig') %}

{% endblock  %}

", "/homes/qui-sommes-nous.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/homes/qui-sommes-nous.twig");
    }
}
