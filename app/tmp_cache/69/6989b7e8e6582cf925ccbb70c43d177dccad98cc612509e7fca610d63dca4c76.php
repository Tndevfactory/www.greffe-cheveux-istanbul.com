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

/* /homes/qui_sommes_nous.twig */
class __TwigTemplate_0e47ebc9c21a17954c3480e719e6090b8230e8e13bd76bba9307fb2422392b40 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/qui_sommes_nous.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> QUI SOMMES NOUS </title>
    <style>
          

          </style>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
 ";
        // line 13
        $this->loadTemplate("/components/qui_somme_nous/page_header.twig", "/homes/qui_sommes_nous.twig", 13)->display($context);
        // line 14
        echo " ";
        $this->loadTemplate("/components/qui_somme_nous/about_section.twig", "/homes/qui_sommes_nous.twig", 14)->display($context);
        // line 15
        echo " ";
        $this->loadTemplate("/components/qui_somme_nous/icons_boxes.twig", "/homes/qui_sommes_nous.twig", 15)->display($context);
        // line 16
        echo " ";
        $this->loadTemplate("/components/qui_somme_nous/testimonial.twig", "/homes/qui_sommes_nous.twig", 16)->display($context);
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "/homes/qui_sommes_nous.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  75 => 16,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

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

", "/homes/qui_sommes_nous.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/homes/qui_sommes_nous.twig");
    }
}
