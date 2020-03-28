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
class __TwigTemplate_47f0fdc4a98acb9c6260a303e0f8d32096d692ef3249142b5b939fcc77209793 extends Template
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
        echo "     <meta name=\"title\" content=\"experts hautement qualifiés en greffe de cheveux en Turquie \">
      <meta name=\"description\" content=\"Ce sont tous des experts hautement qualifiés qui dirigent une équipe médicale qui n'a qu'un seul objectif: obtenir la pleine satisfaction des patients et faire de hair expert un centre de référence à Istanbul, capitale mondiale de la greffe de cheveux \">
      <meta name=\"keywords\" content=\" capitale mondiale de la greffe de cheveux\">

    ";
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <title> CONTACT </title>
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
 ";
        // line 16
        $this->loadTemplate("/components/contact/page_header.twig", "/homes/contact.twig", 16)->display($context);
        // line 17
        echo " ";
        $this->loadTemplate("/components/contact/contact_section.twig", "/homes/contact.twig", 17)->display($context);
        // line 18
        echo " ";
        // line 19
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
        return array (  83 => 19,  81 => 18,  78 => 17,  76 => 16,  73 => 15,  69 => 14,  64 => 10,  60 => 9,  52 => 4,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}
{% block meta %}
     <meta name=\"title\" content=\"experts hautement qualifiés en greffe de cheveux en Turquie \">
      <meta name=\"description\" content=\"Ce sont tous des experts hautement qualifiés qui dirigent une équipe médicale qui n'a qu'un seul objectif: obtenir la pleine satisfaction des patients et faire de hair expert un centre de référence à Istanbul, capitale mondiale de la greffe de cheveux \">
      <meta name=\"keywords\" content=\" capitale mondiale de la greffe de cheveux\">

    {% endblock  %}
{% block head %}
    <title> CONTACT </title>
{% endblock  %}


{% block content %}

 {% include('/components/contact/page_header.twig') %}
 {% include('/components/contact/contact_section.twig') %}
 {# {% include('/components/contact/staff.twig') %} #}
 

{% endblock  %}

", "/homes/contact.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/homes/contact.twig");
    }
}
