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
class __TwigTemplate_95916a8ef802e77115c1aa01e213647628258b7eec7638260014d7e7eee13054 extends Template
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
        // line 2
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "/homes/contact.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <title> CONTACT </title>
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
 ";
        // line 11
        $this->loadTemplate("/components/contact/page_header.twig", "/homes/contact.twig", 11)->display($context);
        // line 12
        echo " ";
        $this->loadTemplate("/components/contact/contact_section.twig", "/homes/contact.twig", 12)->display($context);
        // line 13
        echo " ";
        $this->loadTemplate("/components/contact/staff.twig", "/homes/contact.twig", 13)->display($context);
        // line 14
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
        return array (  71 => 14,  68 => 13,  65 => 12,  63 => 11,  60 => 10,  56 => 9,  51 => 5,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout.twig' %}

{% block head %}
    <title> CONTACT </title>
{% endblock  %}


{% block content %}

 {% include('/components/contact/page_header.twig') %}
 {% include('/components/contact/contact_section.twig') %}
 {% include('/components/contact/staff.twig') %}
 

{% endblock  %}

", "/homes/contact.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/homes/contact.twig");
    }
}
