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

/* /users/index.twig */
class __TwigTemplate_5e325083f98a7a0035dce04f41a08866b4daa078c9e89d223bd9b3b7891e719e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout.twig", "/users/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<h1> users index loaded </h1>
<h1> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
<h1> ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["person"] ?? null), "age", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

";
    }

    public function getTemplateName()
    {
        return "/users/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block content %}

<h1> users index loaded </h1>
<h1> {{ person.name }}</h1>
<h1> {{ person.age }}</h1>

{% endblock  %}
", "/users/index.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\users\\index.twig");
    }
}
