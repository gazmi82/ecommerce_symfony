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
class __TwigTemplate_3e11df1ef1a235c166888480256a19d945d255f3d123af23cbec8172bc345cdd extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "</head>
<body>

\t
\t<div class='nav-extended'>
\t\t<div class=\"nav-wrapper\">
\t\t\t<nav class=\"#\"
\t\t\t     style=\"background-color: #111;\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"brand-logo\">ipazaar</a>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
\t\t\t\t<ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
\t\t\t\t\t<li><input 
\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\ttype=\"active\" 
\t\t\t\t\t\tstyle=\"margin-top: 12px;\" 
\t\t\t\t\t\tplaceholder=\"Search\" 
\t\t\t\t\t\taria-label=\"Search\">
\t\t\t\t\t</li>
\t\t\t\t\t<li><button 
\t\t\t\t\t\tclass=\"btn btn-outline-success\" 
\t\t\t\t\t\tstyle=\"margin-left: 10px; 
\t\t\t\t\t\t       margin-right: 30px;
\t\t\t\t\t\t       margin-bottom: 9px\" 
\t\t\t\t\t\ttype=\"submit\">
\t\t\t\t\tSearch</button>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
        }
        // line 57
        echo "
\t\t\t\t\t<li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("custom", ["name" => "customer"]);
        echo "\">Customer</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Register</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"nav-content\">
\t\t\t\t<div class=\"#\"
\t\t\t\t     style=\"background-color: #111\">
\t\t\t\t\t<ul class=\"tabs tabs-transparent\">
\t\t\t\t\t\t<li class=\"tab\"><a class=\"active\">Categories</a></li>
\t\t\t\t\t\t<li class=\"tab\"><a class=\"active\">Shoping</a></li>
\t\t\t\t\t\t<li class=\"tab\"><a class=\"active\">Deals</a></li>
\t\t\t\t\t\t<li class=\"tab\"><a class=\"active\">Best sellers</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</div>

\t<ul class=\"sidenav\" id=\"mobile-demo\">
\t\t<li><a href=\"sass.html\">Sass</a></li>
\t\t<li><a href=\"badges.html\">Components</a></li>
\t\t<li><a href=\"collapsible.html\">JavaScript</a></li>
\t</ul>
\t
\t";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "
\t
</body>
<footer class=\"#\" 
        style=\"background-color: #000000\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">Company Bio</h5>
          <p class=\"grey-text text-lighten-4\">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Settings</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Connect</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div 
      class=\"container\">
      Made by ipazaar <a class=\"#\" href=\"\">Materialize</a>
      </div>
    </div>
  </footer>

<style type=\"text/css\">

body{
\tbackground: url(\"https://cloud.githubusercontent.com/assets/398893/15136779/4e765036-1639-11e6-9201-67e728e86f39.jpg\") repeat;
}

</style>

<script type=\"text/javascript\">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

</script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\">
</script>

<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js\">
</script>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t<!--Let browser know website is optimized for mobile-->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

\t<!--Import Google Icon Font-->
\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t<!--Import materialize.css-->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\"  media=\"screen,projection\"/>

\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css\"  media=\"screen,projection\"/>

\t<style>
\t@media (min-width: 576px) { 
\t\t.nav {
\t\t\tdisplay: block
\t\t}
\t}

\t</style>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  244 => 85,  213 => 5,  203 => 4,  130 => 86,  128 => 85,  100 => 60,  96 => 59,  92 => 58,  89 => 57,  86 => 56,  63 => 36,  52 => 27,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t{% block stylesheets %}
\t<!--Let browser know website is optimized for mobile-->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

\t<!--Import Google Icon Font-->
\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
\t<!--Import materialize.css-->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\"  media=\"screen,projection\"/>

\t<link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css\"  media=\"screen,projection\"/>

\t<style>
\t@media (min-width: 576px) { 
\t\t.nav {
\t\t\tdisplay: block
\t\t}
\t}

\t</style>

\t{% endblock %}
</head>
<body>

\t
\t<div class='nav-extended'>
\t\t<div class=\"nav-wrapper\">
\t\t\t<nav class=\"#\"
\t\t\t     style=\"background-color: #111;\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a href=\"{{ path('home') }}\" class=\"brand-logo\">ipazaar</a>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
\t\t\t\t<ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
\t\t\t\t\t<li><input 
\t\t\t\t\t\tclass=\"form-control\" 
\t\t\t\t\t\ttype=\"active\" 
\t\t\t\t\t\tstyle=\"margin-top: 12px;\" 
\t\t\t\t\t\tplaceholder=\"Search\" 
\t\t\t\t\t\taria-label=\"Search\">
\t\t\t\t\t</li>
\t\t\t\t\t<li><button 
\t\t\t\t\t\tclass=\"btn btn-outline-success\" 
\t\t\t\t\t\tstyle=\"margin-left: 10px; 
\t\t\t\t\t\t       margin-right: 30px;
\t\t\t\t\t\t       margin-bottom: 9px\" 
\t\t\t\t\t\ttype=\"submit\">
\t\t\t\t\tSearch</button>
\t\t\t\t\t</li>

\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}{% endif %}

\t\t\t\t\t<li><a href=\"{{ path('custom', { name: 'customer' }) }}\">Customer</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_logout') }}\">Logout</a></li>
\t\t\t\t\t<li><a href=\"{{ path('register') }}\">Register</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"nav-content\">
\t\t\t\t<div class=\"#\"
\t\t\t\t     style=\"background-color: #111\">
\t\t\t\t\t<ul class=\"tabs tabs-transparent\">
\t\t\t\t\t\t<li class=\"tab\"><a class=\"active\">Categories</a></li>
\t\t\t\t\t\t<li class=\"tab\"><a class=\"active\">Shoping</a></li>
\t\t\t\t\t\t<li class=\"tab\"><a class=\"active\">Deals</a></li>
\t\t\t\t\t\t<li class=\"tab\"><a class=\"active\">Best sellers</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</div>

\t<ul class=\"sidenav\" id=\"mobile-demo\">
\t\t<li><a href=\"sass.html\">Sass</a></li>
\t\t<li><a href=\"badges.html\">Components</a></li>
\t\t<li><a href=\"collapsible.html\">JavaScript</a></li>
\t</ul>
\t
\t{% block body %}{% endblock %}

\t
</body>
<footer class=\"#\" 
        style=\"background-color: #000000\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">Company Bio</h5>
          <p class=\"grey-text text-lighten-4\">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Settings</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Connect</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div 
      class=\"container\">
      Made by ipazaar <a class=\"#\" href=\"\">Materialize</a>
      </div>
    </div>
  </footer>

<style type=\"text/css\">

body{
\tbackground: url(\"https://cloud.githubusercontent.com/assets/398893/15136779/4e765036-1639-11e6-9201-67e728e86f39.jpg\") repeat;
}

</style>

<script type=\"text/javascript\">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

</script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\">
</script>

<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js\">
</script>
</html>
", "base.html.twig", "/home/gazmir/Development/project-x01/src/templates/base.html.twig");
    }
}
