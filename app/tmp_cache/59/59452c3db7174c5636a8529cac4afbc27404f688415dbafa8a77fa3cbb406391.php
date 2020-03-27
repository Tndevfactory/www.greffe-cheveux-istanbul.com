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
class __TwigTemplate_7351bf27b515b9904684830da3cc37f672581e5f923caf243e1483fd6ac1201d extends Template
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
        echo "      <meta name=\"title\" content=\" Greffe sourcils turquie, prix implant sourcils istanbul\">
      <meta name=\"description\" content=\"Greffe sourcils en Turquie : greffe sourcils FUE istanbul, prix implant sourcils pas cher, meilleure clinique chirurgie capillaire 
 \">
      <meta name=\"keywords\" content=\"sourcils,chirurgie, capillaire \">
    ";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <title> GREFFE SOURCILS</title>
     
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
        $this->loadTemplate("/components/greffe_sourcils/page_header.twig", "/homes/greffe-sourcils.twig", 15)->display($context);
        // line 16
        echo " ";
        $this->loadTemplate("/components/greffe_sourcils/blog_section.twig", "/homes/greffe-sourcils.twig", 16)->display($context);
        // line 17
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
        return array (  82 => 17,  79 => 16,  77 => 15,  74 => 14,  70 => 13,  64 => 9,  60 => 8,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block meta %}
      <meta name=\"title\" content=\" Greffe sourcils turquie, prix implant sourcils istanbul\">
      <meta name=\"description\" content=\"Greffe sourcils en Turquie : greffe sourcils FUE istanbul, prix implant sourcils pas cher, meilleure clinique chirurgie capillaire 
 \">
      <meta name=\"keywords\" content=\"sourcils,chirurgie, capillaire \">
    {% endblock  %}
{% block head %}
    <title> GREFFE SOURCILS</title>
     
{% endblock  %}

{% block content %}

 {% include('/components/greffe_sourcils/page_header.twig') %}
 {% include('/components/greffe_sourcils/blog_section.twig') %}

{% endblock  %}

", "/homes/greffe-sourcils.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/homes/greffe-sourcils.twig");
    }
}
