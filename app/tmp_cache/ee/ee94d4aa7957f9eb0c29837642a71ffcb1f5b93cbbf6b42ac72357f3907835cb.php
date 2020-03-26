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
class __TwigTemplate_7d78ecd5f416da9cc2ab759bf9eca4632da6100f2e453ba44e4dd5529e9be113 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
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
    <meta name=\"author\" content=\"barhoumi med chawki tndevfactory\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    ";
        // line 15
        $this->displayBlock('meta', $context, $blocks);
        // line 20
        echo "
     ";
        // line 21
        $this->loadTemplate("./inc/styles.html.twig", "layout.twig", 21)->display($context);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "
</head>

<body class=\"d-flex flex-column \" >

";
        // line 31
        $this->loadTemplate("/inc/header.html.twig", "layout.twig", 31)->display($context);
        // line 32
        $this->loadTemplate("/inc/navbar.html.twig", "layout.twig", 32)->display($context);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "

";
        // line 48
        $this->loadTemplate("./inc/footer.html.twig", "layout.twig", 48)->display($context);
        // line 49
        $this->loadTemplate("./inc/scripts.html.twig", "layout.twig", 49)->display($context);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('script', $context, $blocks);
        // line 55
        echo "
 

</body>
</html>";
    }

    // line 15
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "      <meta name=\"title\" content=\"Greffe cheveux \">
      <meta name=\"description\" content=\"clinique istanbul \">
      <meta name=\"keywords\" content=\"DHI\">
    ";
    }

    // line 23
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "      <title> ";
        echo twig_escape_filter($this->env, ($context["SITENAME"] ?? null), "html", null, true);
        echo "</title>
    ";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "
    ";
        // line 44
        echo "
";
    }

    // line 51
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
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
        return array (  144 => 52,  140 => 51,  135 => 44,  132 => 35,  128 => 34,  121 => 24,  117 => 23,  110 => 16,  106 => 15,  98 => 55,  96 => 51,  93 => 50,  91 => 49,  89 => 48,  85 => 46,  83 => 34,  80 => 33,  78 => 32,  76 => 31,  69 => 26,  67 => 23,  64 => 22,  62 => 21,  59 => 20,  57 => 15,  41 => 1,);
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
    <meta name=\"author\" content=\"barhoumi med chawki tndevfactory\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    {% block meta %}
      <meta name=\"title\" content=\"Greffe cheveux \">
      <meta name=\"description\" content=\"clinique istanbul \">
      <meta name=\"keywords\" content=\"DHI\">
    {% endblock  %}

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
</html>", "layout.twig", "/var/www/tndevfactory/public_html/touchlink/www.greffe-cheveux-istanbul.com/app/views/layout.twig");
    }
}
