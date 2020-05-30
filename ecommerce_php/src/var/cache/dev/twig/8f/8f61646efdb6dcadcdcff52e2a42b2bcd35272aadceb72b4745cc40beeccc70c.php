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

/* home/index.html.twig */
class __TwigTemplate_3589c1164923f6f94888a417384de50ff84dce2597ced2d38ebd528db9a10516 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"section no-pad-bot\" id=\"index-banner\">
    <div class=\"container\">
      <br><br>
      <h1 class=\"header center orange-text\">Starter Page</h1>
      <div class=\"row center\">
        <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class=\"container\">
      <div class=\"row center\">
        <a href=\"\" class=\"btn-large waves-effect waves-light orange\">Get Started</a>
        </div>
      </div>

    <div class=\"section\">

      <!--   Icon Section   -->
      <div class=\"row\">
        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center light-blue-text\"><i class=\"material-icons\">flash_on</i></h2>
            <h5 class=\"center\">Speeds up development</h5>

            <p class=\"light\">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center light-blue-text\"><i class=\"material-icons\">group</i></h2>
            <h5 class=\"center\">User Experience Focused</h5>

            <p class=\"light\">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center light-blue-text\"><i class=\"material-icons\">settings</i></h2>
            <h5 class=\"center\">Easy to work with</h5>

            <p class=\"light\">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  

    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends('base.html.twig') %}

{% block body %}
<div class=\"section no-pad-bot\" id=\"index-banner\">
    <div class=\"container\">
      <br><br>
      <h1 class=\"header center orange-text\">Starter Page</h1>
      <div class=\"row center\">
        <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class=\"container\">
      <div class=\"row center\">
        <a href=\"\" class=\"btn-large waves-effect waves-light orange\">Get Started</a>
        </div>
      </div>

    <div class=\"section\">

      <!--   Icon Section   -->
      <div class=\"row\">
        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center light-blue-text\"><i class=\"material-icons\">flash_on</i></h2>
            <h5 class=\"center\">Speeds up development</h5>

            <p class=\"light\">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center light-blue-text\"><i class=\"material-icons\">group</i></h2>
            <h5 class=\"center\">User Experience Focused</h5>

            <p class=\"light\">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center light-blue-text\"><i class=\"material-icons\">settings</i></h2>
            <h5 class=\"center\">Easy to work with</h5>

            <p class=\"light\">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  

    </div>
  </div>
{% endblock %}

", "home/index.html.twig", "/home/gazmir/Development/project-x01/src/templates/home/index.html.twig");
    }
}
