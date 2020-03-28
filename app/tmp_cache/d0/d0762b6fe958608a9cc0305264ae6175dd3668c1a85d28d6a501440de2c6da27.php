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
class __TwigTemplate_151c07ca308ec90c94873e5ad06c1d66aad6357637aead1490ff4298f0ba909a extends Template
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
        echo "      <meta name=\"title\" content=\"greffe de cheveux en Turquie \">
      <meta name=\"description\" content=\"les meilleurs docteurs en greffe de cheveux spécialisés dans toutes sortes de traitements capillaires, rien que pour vous redonner l'apparence que vous recherchiez. Si vous envisagez une greffe de cheveux en Turquie \">
      <meta name=\"keywords\" content=\" docteurs,,greffe, cheveux spécialisés,traitements capillaires\">

    ";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <title> QUI SOMMES NOUS </title>
    <style>
          

          </style>
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
        $this->loadTemplate("/components/qui_somme_nous/page_header.twig", "/homes/qui-sommes-nous.twig", 18)->display($context);
        // line 19
        echo " ";
        $this->loadTemplate("/components/qui_somme_nous/about_section.twig", "/homes/qui-sommes-nous.twig", 19)->display($context);
        // line 20
        echo " ";
        // line 21
        echo " ";
        $this->loadTemplate("/components/qui_somme_nous/testimonial.twig", "/homes/qui-sommes-nous.twig", 21)->display($context);
        // line 22
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
        return array (  90 => 22,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  77 => 17,  73 => 16,  64 => 9,  60 => 8,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}
{% block meta %}
      <meta name=\"title\" content=\"greffe de cheveux en Turquie \">
      <meta name=\"description\" content=\"les meilleurs docteurs en greffe de cheveux spécialisés dans toutes sortes de traitements capillaires, rien que pour vous redonner l'apparence que vous recherchiez. Si vous envisagez une greffe de cheveux en Turquie \">
      <meta name=\"keywords\" content=\" docteurs,,greffe, cheveux spécialisés,traitements capillaires\">

    {% endblock  %}
{% block head %}
    <title> QUI SOMMES NOUS </title>
    <style>
          

          </style>
{% endblock  %}

{% block content %}

 {% include('/components/qui_somme_nous/page_header.twig') %}
 {% include('/components/qui_somme_nous/about_section.twig') %}
 {# {% include('/components/qui_somme_nous/icons_boxes.twig') %} #}
 {% include('/components/qui_somme_nous/testimonial.twig') %}

{% endblock  %}

", "/homes/qui-sommes-nous.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/homes/qui-sommes-nous.twig");
    }
}
