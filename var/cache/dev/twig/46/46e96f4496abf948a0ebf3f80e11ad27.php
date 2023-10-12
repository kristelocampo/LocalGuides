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

/* admin/index.html.twig */
class __TwigTemplate_2e92164f2dbd2fd4699e75b0fb1465e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Hello AdminController!</h1>
    <div class=\"admin\">
        <div class=\"dashboard\">
            <h2><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\">Total Articles ";
        echo twig_escape_filter($this->env, (isset($context["articleCount"]) || array_key_exists("articleCount", $context) ? $context["articleCount"] : (function () { throw new RuntimeError('Variable "articleCount" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</a></h2>
        </div>
        <div class=\"dashboard\">
            <h2><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraries_index");
        echo "\">Total Itineraries ";
        echo twig_escape_filter($this->env, (isset($context["itineraryCount"]) || array_key_exists("itineraryCount", $context) ? $context["itineraryCount"] : (function () { throw new RuntimeError('Variable "itineraryCount" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</a></h2>
        </div>
        <div class=\"dashboard\">
            <h2><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_index");
        echo "\">Total Guides ";
        echo twig_escape_filter($this->env, (isset($context["guideCount"]) || array_key_exists("guideCount", $context) ? $context["guideCount"] : (function () { throw new RuntimeError('Variable "guideCount" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</a></h2>
        </div>
        <div class=\"dashboard\">
            <h2><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_language_index");
        echo "\">Total Language ";
        echo twig_escape_filter($this->env, (isset($context["languageCount"]) || array_key_exists("languageCount", $context) ? $context["languageCount"] : (function () { throw new RuntimeError('Variable "languageCount" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</a></h2>
        </div>
        <div class=\"dashboard\">
            <h2><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_index");
        echo "\">Total Location ";
        echo twig_escape_filter($this->env, (isset($context["locationCount"]) || array_key_exists("locationCount", $context) ? $context["locationCount"] : (function () { throw new RuntimeError('Variable "locationCount" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</a></h2>
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 21,  102 => 18,  94 => 15,  86 => 12,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
    <h1>Hello AdminController!</h1>
    <div class=\"admin\">
        <div class=\"dashboard\">
            <h2><a href=\"{{ path('app_article_index') }}\">Total Articles {{ articleCount }}</a></h2>
        </div>
        <div class=\"dashboard\">
            <h2><a href=\"{{ path('app_itineraries_index') }}\">Total Itineraries {{ itineraryCount }}</a></h2>
        </div>
        <div class=\"dashboard\">
            <h2><a href=\"{{ path('app_guide_index') }}\">Total Guides {{ guideCount }}</a></h2>
        </div>
        <div class=\"dashboard\">
            <h2><a href=\"{{ path('app_language_index') }}\">Total Language {{ languageCount }}</a></h2>
        </div>
        <div class=\"dashboard\">
            <h2><a href=\"{{ path('app_location_index') }}\">Total Location {{ locationCount }}</a></h2>
        </div>

    </div>
{% endblock %}
", "admin/index.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/admin/index.html.twig");
    }
}
