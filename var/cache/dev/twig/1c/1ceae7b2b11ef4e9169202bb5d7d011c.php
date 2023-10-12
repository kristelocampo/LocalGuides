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

/* guide/dashboard.html.twig */
class __TwigTemplate_2cc6302ccc6bc5c51b2d7cff56018cee extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "guide/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guide Dashboard";
        
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

    <h1>Welcome ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 8, $this->source); })()), "firstname", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 8, $this->source); })()), "lastname", [], "any", false, false, false, 8), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\">Edit</a></h1>

    <div class=\"guide-dashboard\">
        <div class=\"guide-about\">
            <h2>About You</h2>
            <p>Firstname: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
            <p>Lastname: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 14, $this->source); })()), "lastname", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
            <p class=\"bio\">Bio : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 15, $this->source); })()), "bio", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
        </div>
        <div class=\"guide-infos\">
        ";
        // line 18
        if ( !twig_test_empty((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "            <h2>Languages Spoken</h2>
            <div class=\"guide-language\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 22
                echo "                    <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 22), "html", null, true);
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </div>
        ";
        } else {
            // line 26
            echo "            <h2>No Language spoken</h2>
        ";
        }
        // line 28
        echo "            <h2>Location</h2>
            <p> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 29, $this->source); })()), "location", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
        </div>
    </div>

    <article class=\"articles\">
        <h2>Articles</h2>
        <div class=\"article\">
            ";
        // line 36
        if ( !twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 38
                echo "                    <section class=\"article-item\">
                        <h3 class=\"title\"><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show_user", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 39), "html", null, true);
                echo "</a></h3>
                        <p>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "context", [], "any", false, false, false, 40), "html", null, true);
                echo "</p>
                    </section>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            ";
        } else {
            // line 44
            echo "                <p>No Articles added</p>
                <p><a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
            echo "\">Add Article</a></p>
            ";
        }
        // line 47
        echo "        </div>
    </article>

    <article class=\"itineraries\">
        <h2>Itineraries</h2>
        <div class=\"itinerary\">
            ";
        // line 53
        if ( !twig_test_empty((isset($context["itineraries"]) || array_key_exists("itineraries", $context) ? $context["itineraries"] : (function () { throw new RuntimeError('Variable "itineraries" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["itineraries"]) || array_key_exists("itineraries", $context) ? $context["itineraries"] : (function () { throw new RuntimeError('Variable "itineraries" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["itinerary"]) {
                // line 55
                echo "                    <section class=\"itinerary-item\">
                        ";
                // line 56
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["itinerary"], "name", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/itinerary/" . twig_get_attribute($this->env, $this->source, $context["itinerary"], "name", [], "any", false, false, false, 57))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "title", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" class=\"itinerary-images\">
                        ";
                }
                // line 59
                echo "                        <h3 class=\"title\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itinerary_show_user", ["id" => twig_get_attribute($this->env, $this->source, $context["itinerary"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "title", [], "any", false, false, false, 59), "html", null, true);
                echo "</a></h3>
                        <p class=\"description\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "description", [], "any", false, false, false, 60), "html", null, true);
                echo "</p>
                        <p class=\"tarif\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itinerary"], "tarif", [], "any", false, false, false, 61), "html", null, true);
                echo "€</p>
                    </section>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerary'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            ";
        } else {
            // line 65
            echo "                <p>No Articles added</p>
                <p><a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraries_new");
            echo "\">Add Itinerary</a></p>
            ";
        }
        // line 68
        echo "        </div>
    </article>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "guide/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 68,  233 => 66,  230 => 65,  227 => 64,  218 => 61,  214 => 60,  207 => 59,  199 => 57,  197 => 56,  194 => 55,  189 => 54,  187 => 53,  179 => 47,  174 => 45,  171 => 44,  168 => 43,  159 => 40,  153 => 39,  150 => 38,  145 => 37,  143 => 36,  133 => 29,  130 => 28,  126 => 26,  122 => 24,  113 => 22,  109 => 21,  105 => 19,  103 => 18,  97 => 15,  93 => 14,  89 => 13,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Guide Dashboard{% endblock %}

{% block body %}


    <h1>Welcome {{ guide.firstname }} {{ guide.lastname }} <a href=\"{{ path('app_guide_edit', {'id': guide.id}) }}\">Edit</a></h1>

    <div class=\"guide-dashboard\">
        <div class=\"guide-about\">
            <h2>About You</h2>
            <p>Firstname: {{ guide.firstname }}</p>
            <p>Lastname: {{ guide.lastname }}</p>
            <p class=\"bio\">Bio : {{ guide.bio }}</p>
        </div>
        <div class=\"guide-infos\">
        {% if language is not empty %}
            <h2>Languages Spoken</h2>
            <div class=\"guide-language\">
                {% for lang in language %}
                    <div>{{ lang.name }}</div>
                {% endfor %}
            </div>
        {% else %}
            <h2>No Language spoken</h2>
        {% endif %}
            <h2>Location</h2>
            <p> {{ location.location }}</p>
        </div>
    </div>

    <article class=\"articles\">
        <h2>Articles</h2>
        <div class=\"article\">
            {% if articles is not empty %}
                {% for article in articles %}
                    <section class=\"article-item\">
                        <h3 class=\"title\"><a href=\"{{ path('app_article_show_user', {'id': article.id}) }}\">{{ article.title }}</a></h3>
                        <p>{{ article.context }}</p>
                    </section>
                {% endfor %}
            {% else %}
                <p>No Articles added</p>
                <p><a href=\"{{ path('app_article_new') }}\">Add Article</a></p>
            {% endif %}
        </div>
    </article>

    <article class=\"itineraries\">
        <h2>Itineraries</h2>
        <div class=\"itinerary\">
            {% if itineraries is not empty %}
                {% for itinerary in itineraries %}
                    <section class=\"itinerary-item\">
                        {% if itinerary.name is not empty %}
                            <img src=\"{{ asset('img/itinerary/' ~ itinerary.name) }}\" alt=\"{{ itinerary.title }}\" class=\"itinerary-images\">
                        {% endif %}
                        <h3 class=\"title\"><a href=\"{{ path('app_itinerary_show_user', {'id': itinerary.id}) }}\">{{ itinerary.title }}</a></h3>
                        <p class=\"description\">{{ itinerary.description }}</p>
                        <p class=\"tarif\">{{ itinerary.tarif }}€</p>
                    </section>
                {% endfor %}
            {% else %}
                <p>No Articles added</p>
                <p><a href=\"{{ path('app_itineraries_new') }}\">Add Itinerary</a></p>
            {% endif %}
        </div>
    </article>
{% endblock %}
", "guide/dashboard.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/guide/dashboard.html.twig");
    }
}
