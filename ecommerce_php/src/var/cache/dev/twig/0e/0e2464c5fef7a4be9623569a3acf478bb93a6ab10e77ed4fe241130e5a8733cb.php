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

/* base.html.twig */
class __TwigTemplate_65d95160ea540017cd190065da974bf93fbf6eadc13c4e7930d7e11febb08046 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body>

\t<div class=\"container\">
\t\t<div class='nav'>
\t\t\t<nav class=\" #004d40 teal darken-4>
\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"brand-logo\">project-x01</a>
\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t\t\t<li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("custom", ["name" => "customer"]);
        echo "\">Customer</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Components</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>

\t";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "</body>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\">

<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js\">

   

</script>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t<!--Let browser know website is optimized for mobile-->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<!--Import Google Icon Font-->
\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t<!--Import materialize.css-->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\"  media=\"screen,projection\"/>

\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css\"  media=\"screen,projection\"/>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  121 => 34,  103 => 5,  96 => 4,  80 => 36,  77 => 35,  75 => 34,  64 => 26,  59 => 24,  50 => 17,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t{% block stylesheets %}
\t<!--Let browser know website is optimized for mobile-->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

\t<!--Import Google Icon Font-->
\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t<!--Import materialize.css-->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\"  media=\"screen,projection\"/>

\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css\"  media=\"screen,projection\"/>

\t{% endblock %}
</head>
<body>

\t<div class=\"container\">
\t\t<div class='nav'>
\t\t\t<nav class=\" #004d40 teal darken-4>
\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t<a href=\"{{ path('home') }}\" class=\"brand-logo\">project-x01</a>
\t\t\t\t\t<ul class=\"right hide-on-med-and-down\">
\t\t\t\t\t\t<li><a href=\"{{ path('custom', { name: 'customer' }) }}\">Customer</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Components</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>

\t{% block body %}{% endblock %}
\t{% block javascripts %}{% endblock %}
</body>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\">

<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js\">

   

</script>
</html>
", "base.html.twig", "/home/gazmir/Development/project-x01/src/templates/base.html.twig");
    }
}
