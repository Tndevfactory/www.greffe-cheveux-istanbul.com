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

/* /inc/forms.html.twig */
class __TwigTemplate_a23b57c7f44fdfedbce60d2b4859f4085bcf8947ed39b50109f0d823c0655c87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
";
    }

    // line 2
    public function macro_input($__name__ = null, $__label__ = null, $__value__ = null, $__err__ = [], $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "err" => $__err__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "
  <div class=\"form-group ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
    <label for=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo " :</label>
    <input type=\"";
            // line 6
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 6)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true))) : (print ("text")));
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" class=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["err"] ?? null), "msg", [], "any", false, false, false, 6)) ? ("is-invalid") : (""));
            echo " form-control\">
    <span class=\"invalid-feedback\">";
            // line 7
            ((twig_get_attribute($this->env, $this->source, ($context["err"] ?? null), "msg", [], "any", false, false, false, 7)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["err"] ?? null), "msg", [], "any", false, false, false, 7), "html", null, true))) : (print ("")));
            echo "</span>
    </div>

  ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_textarea($__name__ = null, $__label__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 13
            echo "
  <div class=\"form-group ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 14), "html", null, true);
            echo "\">

    <label for=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo " :</label>
    <textarea name=\"";
            // line 17
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"form-control\" row=\"3\"></textarea>

    </div>

  ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/inc/forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 17,  120 => 16,  115 => 14,  112 => 13,  97 => 12,  84 => 7,  72 => 6,  66 => 5,  62 => 4,  59 => 3,  42 => 2,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#  macro #}
{% macro input(name, label, value = null, err = [], options = [] ) %}

  <div class=\"form-group {{ options.class }}\">
    <label for=\"{{ name }}\"> {{label}} :</label>
    <input type=\"{{ options.type ?: 'text' }}\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{value}}\" class=\"{{ err.msg ? 'is-invalid' : '' }} form-control\">
    <span class=\"invalid-feedback\">{{ err.msg ?: '' }}</span>
    </div>

  {% endmacro %}

{% macro textarea(name, label, options = [] ) %}

  <div class=\"form-group {{ options.class }}\">

    <label for=\"{{ name }}\"> {{label}} :</label>
    <textarea name=\"{{ name }}\" id=\"{{ name }}\" class=\"form-control\" row=\"3\"></textarea>

    </div>

  {% endmacro %}", "/inc/forms.html.twig", "C:\\xampp\\htdocs\\greffe-cheveux-istanbul.com\\app\\views\\inc\\forms.html.twig");
    }
}
