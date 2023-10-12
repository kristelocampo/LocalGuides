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

/* home/itineraries.html.twig */
class __TwigTemplate_212170fc38d67668268f0380cf7a5116 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/itineraries.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/itineraries.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 7
            echo "         <div class=\"welcome\">
             <h1>Welcome ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "username", [], "any", false, false, false, 8), "html", null, true);
            echo "</h1>
             <p>Explore your city with our local guides.</p>
         </div>
     ";
        } else {
            // line 12
            echo "         <div class=\"welcome\">
             <h1>Welcome to Local Guide</h1>
             <p>Explore your city with our local guides.</p>
         </div>
     ";
        }
        // line 17
        echo "        <div>
            <p>Que vous soyez intéressé par l'art, la cuisine, l'histoire ou l'aventure, nous avons un itinéraire qui correspond à vos préférences. Chaque visite est adaptée à vos besoins.</p>
        </div>
    <article class=\"itineraries\">
        <h2>Itineraries</h2>
        <div class=\"itinerary\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["showItineraries"]) || array_key_exists("showItineraries", $context) ? $context["showItineraries"] : (function () { throw new RuntimeError('Variable "showItineraries" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["itinerary"]) {
            // line 24
            echo "            <section class=\"itinerary-item\">
                ";
            // line 25
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["itinerary"], "name", [], "any", false, false, false, 25))) {
                // line 26
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/itinerary/" . twig_get_attribute($this->env, $this->source, $context["itinerary"], "name", [], "any", false, false, false, 26))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "\" class=\"itinerary-images\">
                ";
            }
            // line 28
            echo "                <h3 class=\"title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itinerary_show_user", ["id" => twig_get_attribute($this->env, $this->source, $context["itinerary"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "</a></h3>
                <p class=\"description\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
                <p class=\"tarif\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "tarif", [], "any", false, false, false, 30), "html", null, true);
            echo " €</p>
                ";
            // line 31
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE"))) {
                // line 32
                echo "                    <p class=\"author\">Written By: <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_details", ["idGuide" => twig_get_attribute($this->env, $this->source, $context["itinerary"], "idGuide", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "firstname", [], "any", false, false, false, 32), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "lastname", [], "any", false, false, false, 32), "html", null, true);
                echo "</a></p>
                ";
            } else {
                // line 34
                echo "                    <p class=\"author\">Written By: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "firstname", [], "any", false, false, false, 34), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "lastname", [], "any", false, false, false, 34), "html", null, true);
                echo "</p>
                ";
            }
            // line 36
            echo "            </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
    </article>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/itineraries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 38,  153 => 36,  145 => 34,  135 => 32,  133 => 31,  129 => 30,  125 => 29,  118 => 28,  110 => 26,  108 => 25,  105 => 24,  101 => 23,  93 => 17,  86 => 12,  79 => 8,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
     {% if is_granted(\"ROLE_USER\") %}
         <div class=\"welcome\">
             <h1>Welcome {{ user.username }}</h1>
             <p>Explore your city with our local guides.</p>
         </div>
     {% else %}
         <div class=\"welcome\">
             <h1>Welcome to Local Guide</h1>
             <p>Explore your city with our local guides.</p>
         </div>
     {% endif %}
        <div>
            <p>Que vous soyez intéressé par l'art, la cuisine, l'histoire ou l'aventure, nous avons un itinéraire qui correspond à vos préférences. Chaque visite est adaptée à vos besoins.</p>
        </div>
    <article class=\"itineraries\">
        <h2>Itineraries</h2>
        <div class=\"itinerary\">
        {% for itinerary in showItineraries %}
            <section class=\"itinerary-item\">
                {% if itinerary.name is not empty %}
                    <img src=\"{{ asset('img/itinerary/' ~ itinerary.name) }}\" alt=\"{{ itinerary.title }}\" class=\"itinerary-images\">
                {% endif %}
                <h3 class=\"title\"><a href=\"{{ path('app_itinerary_show_user', {'id': itinerary.id}) }}\">{{ itinerary.title }}</a></h3>
                <p class=\"description\">{{ itinerary.description }}</p>
                <p class=\"tarif\">{{ itinerary.tarif }} €</p>
                {% if is_granted(\"ROLE_USER\") and not is_granted(\"ROLE_GUIDE\")%}
                    <p class=\"author\">Written By: <a href=\"{{ path('app_guide_details', {'idGuide': itinerary.idGuide}) }}\">{{ itinerary.firstname }} {{ itinerary.lastname }}</a></p>
                {% else %}
                    <p class=\"author\">Written By: {{ itinerary.firstname }} {{ itinerary.lastname }}</p>
                {% endif%}
            </section>
        {% endfor %}
        </div>
    </article>
{% endblock %}
", "home/itineraries.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/home/itineraries.html.twig");
    }
}
