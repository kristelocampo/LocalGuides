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

/* itineraries/show.html.twig */
class __TwigTemplate_fab631512317f22b3aab6e6ff179c983 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "itineraries/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "itineraries/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Itineraries";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Itineraries</h1>
    <div class=\"create\">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraries_index");
        echo "\">back to list</a>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraries_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">edit</a>

    </div>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_date</th>
                <td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 29, $this->source); })()), "createdDate", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 29, $this->source); })()), "createdDate", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Tarif</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 33, $this->source); })()), "tarif", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/img/itinerary/" . twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"image-table\"></td>
            </tr>
        </tbody>
    </table>
    <div class=\"create\">
        ";
        // line 42
        echo twig_include($this->env, $context, "itineraries/_delete_form.html.twig");
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "itineraries/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 42,  127 => 37,  120 => 33,  113 => 29,  106 => 25,  99 => 21,  92 => 17,  81 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Itineraries{% endblock %}

{% block body %}
    <h1>Itineraries</h1>
    <div class=\"create\">
        <a href=\"{{ path('app_itineraries_index') }}\">back to list</a>
        <a href=\"{{ path('app_itineraries_edit', {'id': itinerary.id}) }}\">edit</a>

    </div>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ itinerary.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ itinerary.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ itinerary.description }}</td>
            </tr>
            <tr>
                <th>Created_date</th>
                <td>{{ itinerary.createdDate ? itinerary.createdDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Tarif</th>
                <td>{{ itinerary.tarif }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"{{ asset('/img/itinerary/' ~ itinerary.name) }}\" alt=\"{{ itinerary.title }}\" class=\"image-table\"></td>
            </tr>
        </tbody>
    </table>
    <div class=\"create\">
        {{ include('itineraries/_delete_form.html.twig') }}
    </div>

{% endblock %}
", "itineraries/show.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/itineraries/show.html.twig");
    }
}
