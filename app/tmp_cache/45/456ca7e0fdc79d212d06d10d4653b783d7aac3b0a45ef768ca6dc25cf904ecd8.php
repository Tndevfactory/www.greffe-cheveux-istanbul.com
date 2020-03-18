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

/* \blogs\index.twig */
class __TwigTemplate_7e69a0040df80b634f9f3472ca1baa95c1f6a5cde13797bcdd6c82d1f965bdc6 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "\\blogs\\index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<h1> welcome to blogs </h1>
<h1> ";
        // line 6
        echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
        echo " </h1>
<h1> <i class=\"fa fa-3x fa-user\" > </i>  </h1>
<h1> articles and news</h1>

";
    }

    public function getTemplateName()
    {
        return "\\blogs\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% block content %}

<h1> welcome to blogs </h1>
<h1> {{test}} </h1>
<h1> <i class=\"fa fa-3x fa-user\" > </i>  </h1>
<h1> articles and news</h1>

{% endblock  %}
", "\\blogs\\index.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\blogs\\index.twig");
    }
}
