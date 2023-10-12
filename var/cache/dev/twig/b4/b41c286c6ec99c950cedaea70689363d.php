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

/* home/showItineraries.html.twig */
class __TwigTemplate_6b5101680428b23fded936a1f2edd472 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/showItineraries.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/showItineraries.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Show Itineraries";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <article class=\"itineraries-details\">
        <div class=\"itinerary-details\">
            ";
        // line 8
        if ( !twig_test_empty((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "                <div class=\"itinerary-images\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 11
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/itinerary/" . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 11))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                </div>
            ";
        }
        // line 15
        echo "            <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</h1>
            <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
            <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 17, $this->source); })()), "createdDate", [], "any", false, false, false, 17), "D, d M Y"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"guide-details\">
            <h2>Meet your Guide</h2>
            ";
        // line 21
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE"))) {
            // line 22
            echo "                <p>Written By: <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_details", ["idGuide" => twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 22, $this->source); })()), "idGuide", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 22, $this->source); })()), "firstname", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 22, $this->source); })()), "lastname", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></p>
                <p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 23, $this->source); })()), "bio", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                <p>Mail :  <a href=\"mailto:";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></p>
                <p>Telephone : <a href=\"tel:";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 25, $this->source); })()), "telNumber", [], "any", false, false, false, 25), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 25, $this->source); })()), "telNumber", [], "any", false, false, false, 25), "html", null, true);
            echo "</a></p>
            ";
        } else {
            // line 27
            echo "                <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 27, $this->source); })()), "firstname", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 27, $this->source); })()), "lastname", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 28, $this->source); })()), "bio", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
                <p>Telephone : <a href=\"tel:";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 29, $this->source); })()), "telNumber", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 29, $this->source); })()), "telNumber", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 31
        echo "            <p>Tarif : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 31, $this->source); })()), "tarif", [], "any", false, false, false, 31), "html", null, true);
        echo " €</p>
        </div>
    </article>

    <div class=\"review-form\">
    ";
        // line 36
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE"))) {
            // line 37
            echo "        <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itinerary_show_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["itinerary"]) || array_key_exists("itinerary", $context) ? $context["itinerary"] : (function () { throw new RuntimeError('Variable "itinerary" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">
            ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'widget');
            echo "
            <button class=\"btn\" type=\"submit\">Submit</button>
        </form>

    ";
        }
        // line 43
        echo "    </div>

    <article class=\"reviews\">
        <h2>Reviews</h2>
        ";
        // line 47
        if ( !twig_test_empty((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 47, $this->source); })()))) {
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 49
                echo "                <section>
                    <p>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "username", [], "any", false, false, false, 50), "html", null, true);
                echo "</p>
                    <p>Rating: ";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->ratingStarsFilter(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 51)), "html", null, true);
                echo "</p>
                    <p>Comments: ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 52), "html", null, true);
                echo "</p>
                </section>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        ";
        } else {
            // line 56
            echo "            <p>No reviews available.</p>
        ";
        }
        // line 58
        echo "
    </article>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/showItineraries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 58,  223 => 56,  220 => 55,  211 => 52,  207 => 51,  203 => 50,  200 => 49,  195 => 48,  193 => 47,  187 => 43,  179 => 38,  174 => 37,  172 => 36,  163 => 31,  156 => 29,  152 => 28,  145 => 27,  138 => 25,  132 => 24,  128 => 23,  119 => 22,  117 => 21,  110 => 17,  106 => 16,  101 => 15,  97 => 13,  86 => 11,  82 => 10,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Show Itineraries{% endblock %}

{% block body %}
    <article class=\"itineraries-details\">
        <div class=\"itinerary-details\">
            {% if images is not empty %}
                <div class=\"itinerary-images\">
                    {% for image in images %}
                        <img src=\"{{ asset('img/itinerary/' ~ image.name) }}\" alt=\"{{ itinerary.title }}\">
                    {% endfor %}
                </div>
            {% endif %}
            <h1>{{ itinerary.title }}</h1>
            <p>{{ itinerary.description }}</p>
            <p>{{ itinerary.createdDate|date('D, d M Y')}}</p>
        </div>
        <div class=\"guide-details\">
            <h2>Meet your Guide</h2>
            {% if is_granted(\"ROLE_USER\") and not is_granted(\"ROLE_GUIDE\")  %}
                <p>Written By: <a href=\"{{ path('app_guide_details', {'idGuide': itinerary.idGuide}) }}\">{{ itinerary.firstname }} {{ itinerary.lastname }}</a></p>
                <p>{{ itinerary.bio }}</p>
                <p>Mail :  <a href=\"mailto:{{ user.email }}\">{{ user.email }}</a></p>
                <p>Telephone : <a href=\"tel:{{ itinerary.telNumber }}\">{{ itinerary.telNumber }}</a></p>
            {% else %}
                <p>{{ itinerary.firstname }} {{ itinerary.lastname }}</p>
                <p>{{ itinerary.bio }}</p>
                <p>Telephone : <a href=\"tel:{{ itinerary.telNumber }}\">{{ itinerary.telNumber }}</a></p>
            {% endif%}
            <p>Tarif : {{ itinerary.tarif }} €</p>
        </div>
    </article>

    <div class=\"review-form\">
    {% if is_granted(\"ROLE_USER\") and not is_granted(\"ROLE_GUIDE\")  %}
        <form method=\"POST\" action=\"{{ path('app_itinerary_show_user', {'id': itinerary.id}) }}\">
            {{ form_widget(form) }}
            <button class=\"btn\" type=\"submit\">Submit</button>
        </form>

    {% endif %}
    </div>

    <article class=\"reviews\">
        <h2>Reviews</h2>
        {% if reviews is not empty %}
            {% for review in reviews %}
                <section>
                    <p>{{ review.username }}</p>
                    <p>Rating: {{ review.rating|ratingStars }}</p>
                    <p>Comments: {{ review.comment }}</p>
                </section>
            {% endfor %}
        {% else %}
            <p>No reviews available.</p>
        {% endif %}

    </article>
{% endblock %}
", "home/showItineraries.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/home/showItineraries.html.twig");
    }
}
