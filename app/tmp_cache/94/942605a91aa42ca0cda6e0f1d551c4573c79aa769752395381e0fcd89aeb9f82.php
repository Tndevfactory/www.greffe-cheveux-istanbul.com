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

/* layout.twig */
class __TwigTemplate_9ba0f3b5e668605d7fc35f920fb294e0fe86527385b7de791a55e99c7a40ef92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Developer: Chawki   -->
<!-- phone: 00216 55 385 474   -->
<!-- skype: barhoumi_Chawki    -->
<!-- email: barhoumi.Chawki@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
     ";
        // line 14
        $this->loadTemplate("./inc/styles.html.twig", "layout.twig", 14)->display($context);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "
</head>

<body class=\"d-flex flex-column \" >

";
        // line 24
        $this->loadTemplate("/inc/header.html.twig", "layout.twig", 24)->display($context);
        // line 25
        $this->loadTemplate("/inc/navbar.html.twig", "layout.twig", 25)->display($context);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "

";
        // line 41
        $this->loadTemplate("./inc/footer.html.twig", "layout.twig", 41)->display($context);
        // line 42
        $this->loadTemplate("./inc/scripts.html.twig", "layout.twig", 42)->display($context);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('script', $context, $blocks);
        // line 48
        echo "
 

</body>
</html>";
    }

    // line 16
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "      <title> ";
        echo twig_escape_filter($this->env, ($context["SITENAME"] ?? null), "html", null, true);
        echo "</title>
    ";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
    ";
        // line 37
        echo "
";
    }

    // line 44
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "

";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  122 => 44,  117 => 37,  114 => 28,  110 => 27,  103 => 17,  99 => 16,  91 => 48,  89 => 44,  86 => 43,  84 => 42,  82 => 41,  78 => 39,  76 => 27,  73 => 26,  71 => 25,  69 => 24,  62 => 19,  60 => 16,  57 => 15,  55 => 14,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Developer: Chawki   -->
<!-- phone: 00216 55 385 474   -->
<!-- skype: barhoumi_Chawki    -->
<!-- email: barhoumi.Chawki@gmail.com -->
<!-- Mission Statement: Efficiency, precision, respect of deadline, flexible time revision or change characteristics of the website  -->

<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
     {% include('./inc/styles.html.twig') %}

    {% block head %}
      <title> {{SITENAME}}</title>
    {% endblock  %}

</head>

<body class=\"d-flex flex-column \" >

{% include('/inc/header.html.twig') %}
{% include('/inc/navbar.html.twig') %}

{% block content %}

    {# {% block carousel %} {% endblock  %}
    {% block lead_form %} {% endblock  %}
    {% block home_icon_section %}{% endblock  %}
    {% block home_heading_section %}{% endblock  %}
    {% block info_section %}{% endblock  %}
    {% block video_play_section %}{% endblock  %}
    {% block photo_gallery_section %}{% endblock  %}
    {% block newsletter_section %}{% endblock  %} #}

{% endblock  %}


{% include('./inc/footer.html.twig') %}
{% include('./inc/scripts.html.twig') %}

{% block script %}


{% endblock  %}

 

</body>
</html>", "layout.twig", "/var/www/tndevfactory/public_html/greffe-cheveux-istanbul.com/app/views/layout.twig");
    }
}
