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

/* home/showGuideDetails.html.twig */
class __TwigTemplate_c77e8de520503bd383f96ed6cccbdebf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/showGuideDetails.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/showGuideDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Show Article";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"guide-info\">
        <h1>Guide Details</h1>
        <p>Name : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 9, $this->source); })()), "firstname", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 9, $this->source); })()), "lastname", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
        <p>Email : <a href=\"mailto:";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></p>
        <p>Mobile : <a href=\"=tel";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 11, $this->source); })()), "telNumber", [], "any", false, false, false, 11), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 11, $this->source); })()), "telNumber", [], "any", false, false, false, 11), "html", null, true);
        echo "</a></p>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 12, $this->source); })()), "bio", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
    </div>

    <article class=\"articles\">
        <h2>Articles</h2>
        <div class=\"article\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "                <section class=\"article-item\">
                    <h3 class=\"title\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show_user", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></h3>
                    <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "context", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                </section>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </div>
    </article>
    <article class=\"itineraries\">
        <h2>Itineraries</h2>
        <div class=\"itinerary\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itineraries"]) || array_key_exists("itineraries", $context) ? $context["itineraries"] : (function () { throw new RuntimeError('Variable "itineraries" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["itinerary"]) {
            // line 30
            echo "                <section class=\"itinerary-item\">
                    ";
            // line 31
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["itinerary"], "name", [], "any", false, false, false, 31))) {
                // line 32
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/itinerary/" . twig_get_attribute($this->env, $this->source, $context["itinerary"], "name", [], "any", false, false, false, 32))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "title", [], "any", false, false, false, 32), "html", null, true);
                echo "\" class=\"itinerary-images\">
                    ";
            }
            // line 34
            echo "                    <h3 class=\"title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itinerary_show_user", ["id" => twig_get_attribute($this->env, $this->source, $context["itinerary"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></h3>
                    <p class=\"description\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                    <p class=\"tarif\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "tarif", [], "any", false, false, false, 36), "html", null, true);
            echo " €</p>
                </section>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
    </article>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/showGuideDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 39,  162 => 36,  158 => 35,  151 => 34,  143 => 32,  141 => 31,  138 => 30,  134 => 29,  127 => 24,  118 => 21,  112 => 20,  109 => 19,  105 => 18,  96 => 12,  90 => 11,  84 => 10,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Show Article{% endblock %}

{% block body %}

    <div class=\"guide-info\">
        <h1>Guide Details</h1>
        <p>Name : {{ guide.firstname}} {{ guide.lastname }}</p>
        <p>Email : <a href=\"mailto:{{ guide.email }}\">{{ guide.email }}</a></p>
        <p>Mobile : <a href=\"=tel{{ guide.telNumber }}\">{{ guide.telNumber }}</a></p>
        <p>{{ guide.bio }}</p>
    </div>

    <article class=\"articles\">
        <h2>Articles</h2>
        <div class=\"article\">
            {% for article in articles %}
                <section class=\"article-item\">
                    <h3 class=\"title\"><a href=\"{{ path('app_article_show_user', {'id': article.id}) }}\">{{ article.title }}</a></h3>
                    <p>{{ article.context }}</p>
                </section>
            {% endfor %}
        </div>
    </article>
    <article class=\"itineraries\">
        <h2>Itineraries</h2>
        <div class=\"itinerary\">
            {% for itinerary in itineraries %}
                <section class=\"itinerary-item\">
                    {% if itinerary.name is not empty %}
                        <img src=\"{{ asset('img/itinerary/' ~ itinerary.name) }}\" alt=\"{{ itinerary.title }}\" class=\"itinerary-images\">
                    {% endif %}
                    <h3 class=\"title\"><a href=\"{{ path('app_itinerary_show_user', {'id': itinerary.id}) }}\">{{ itinerary.title }}</a></h3>
                    <p class=\"description\">{{ itinerary.description }}</p>
                    <p class=\"tarif\">{{ itinerary.tarif }} €</p>
                </section>
            {% endfor %}
        </div>
    </article>

{% endblock %}
", "home/showGuideDetails.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/home/showGuideDetails.html.twig");
    }
}
