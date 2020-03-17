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

/* /homes/greffe_cheveux_dhi.twig */
class __TwigTemplate_cf4eb7bbe0140aa33113efc8cd156b9efc19bd353c6e963e17125c404b04c73a extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/greffe_cheveux_dhi.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> GREFFE CHEVEUX</title>
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
        $this->loadTemplate("/components/greffe_cheveux/page_header.twig", "/homes/greffe_cheveux_dhi.twig", 13)->display($context);
        // line 14
        echo " ";
        $this->loadTemplate("/components/greffe_cheveux/blog_section.twig", "/homes/greffe_cheveux_dhi.twig", 14)->display($context);
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "/homes/greffe_cheveux_dhi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  69 => 14,  67 => 13,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    <title> GREFFE CHEVEUX</title>
     <style>
     

      </style>
{% endblock  %}

{% block content %}

 {% include('/components/greffe_cheveux/page_header.twig') %}
 {% include('/components/greffe_cheveux/blog_section.twig') %}

{% endblock  %}

", "/homes/greffe_cheveux_dhi.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/homes/greffe_cheveux_dhi.twig");
    }
}
