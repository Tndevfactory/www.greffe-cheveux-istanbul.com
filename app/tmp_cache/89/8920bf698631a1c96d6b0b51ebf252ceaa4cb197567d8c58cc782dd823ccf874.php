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

/* /homes/greffe_sourcils.twig */
class __TwigTemplate_c9bfb8a02ef081e488d29b57f38d877d0fad6f6621aff6491645f9ac2a5fbbb6 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/homes/greffe_sourcils.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <title> GREFFE SOURCILS</title>
     
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
 ";
        // line 10
        $this->loadTemplate("/components/greffe_sourcils/page_header.twig", "/homes/greffe_sourcils.twig", 10)->display($context);
        // line 11
        echo " ";
        $this->loadTemplate("/components/greffe_sourcils/blog_section.twig", "/homes/greffe_sourcils.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "/homes/greffe_sourcils.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  66 => 11,  64 => 10,  61 => 9,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block head %}
    <title> GREFFE SOURCILS</title>
     
{% endblock  %}

{% block content %}

 {% include('/components/greffe_sourcils/page_header.twig') %}
 {% include('/components/greffe_sourcils/blog_section.twig') %}

{% endblock  %}

", "/homes/greffe_sourcils.twig", "/home/u958902108/domains/greffe-cheveux-istanbul.com/public_html/app/views/homes/greffe_sourcils.twig");
    }
}
