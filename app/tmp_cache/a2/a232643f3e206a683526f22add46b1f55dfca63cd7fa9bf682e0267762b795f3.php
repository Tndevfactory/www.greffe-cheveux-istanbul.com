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

/* /homes/greffe-sourcils.twig */
class __TwigTemplate_69b05616d0eaddbaed5d94f3509716d63711fadff6d070c992a7af9057841832 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/greffe-sourcils.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "      <meta name=\"title\" content=\"Greffe soucils\">
      <meta name=\"description\" content=\"sourcils istanbul \">
      <meta name=\"keywords\" content=\"sourcils\">
    ";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <title> GREFFE SOURCILS</title>
     
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
 ";
        // line 14
        $this->loadTemplate("/components/greffe_sourcils/page_header.twig", "/homes/greffe-sourcils.twig", 14)->display($context);
        // line 15
        echo " ";
        $this->loadTemplate("/components/greffe_sourcils/blog_section.twig", "/homes/greffe-sourcils.twig", 15)->display($context);
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "/homes/greffe-sourcils.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  78 => 15,  76 => 14,  73 => 13,  69 => 12,  63 => 8,  59 => 7,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block meta %}
      <meta name=\"title\" content=\"Greffe soucils\">
      <meta name=\"description\" content=\"sourcils istanbul \">
      <meta name=\"keywords\" content=\"sourcils\">
    {% endblock  %}
{% block head %}
    <title> GREFFE SOURCILS</title>
     
{% endblock  %}

{% block content %}

 {% include('/components/greffe_sourcils/page_header.twig') %}
 {% include('/components/greffe_sourcils/blog_section.twig') %}

{% endblock  %}

", "/homes/greffe-sourcils.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/homes/greffe-sourcils.twig");
    }
}
