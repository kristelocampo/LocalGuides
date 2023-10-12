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

/* home/showArticle.html.twig */
class __TwigTemplate_8131667d366fc49a423fa93b06047ba7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/showArticle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/showArticle.html.twig", 1);
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
        echo "    <article class=\"articles-details\">
        <div class=\"article-detail\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "context", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
        </div>
        <div class=\"guide-details\">
            <h2>Meet your Guide</h2>
            ";
        // line 13
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE"))) {
            // line 14
            echo "                <p>Written By: <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_details", ["idGuide" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "idGuide", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "firstname", [], "any", false, false, false, 14), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "lastname", [], "any", false, false, false, 14), "html", null, true);
            echo "</a></p>
                <p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "bio", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                <p>Mail :  <a href=\"mailto:";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></p>
                <p>Telephone : <a href=\"tel:";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "telNumber", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "telNumber", [], "any", false, false, false, 17), "html", null, true);
            echo "</a></p>
            ";
        } else {
            // line 19
            echo "                <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "lastname", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "bio", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                <p>Telephone : <a href=\"tel:";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "telNumber", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 21, $this->source); })()), "telNumber", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 23
        echo "        </div>
    </article>

    <div class=\"review-form\">
    ";
        // line 27
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE"))) {
            // line 28
            echo "        <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
            ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'widget');
            echo "
            <button class=\"btn\" type=\"submit\">Submit</button>
        </form>
    ";
        }
        // line 33
        echo "    </div>

    <article class=\"reviews\">
        <h2>Reviews</h2>
        ";
        // line 37
        if ( !twig_test_empty((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 39
                echo "                <section>
                    <p>Rating: ";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->ratingStarsFilter(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 40)), "html", null, true);
                echo "</p>
                    <p>Comments: ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 41), "html", null, true);
                echo "</p>
                    <p>By: ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "username", [], "any", false, false, false, 42), "html", null, true);
                echo "</p>
                </section>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        } else {
            // line 46
            echo "            <p>No reviews available for this Article.</p>
        ";
        }
        // line 48
        echo "    </article>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/showArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 48,  190 => 46,  187 => 45,  178 => 42,  174 => 41,  170 => 40,  167 => 39,  162 => 38,  160 => 37,  154 => 33,  147 => 29,  142 => 28,  140 => 27,  134 => 23,  127 => 21,  123 => 20,  116 => 19,  109 => 17,  103 => 16,  99 => 15,  90 => 14,  88 => 13,  81 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Show Article{% endblock %}

{% block body %}
    <article class=\"articles-details\">
        <div class=\"article-detail\">
            <h1>{{ article.title }}</h1>
            <p>{{ article.context }}</p>
        </div>
        <div class=\"guide-details\">
            <h2>Meet your Guide</h2>
            {% if is_granted(\"ROLE_USER\") and not is_granted(\"ROLE_GUIDE\") %}
                <p>Written By: <a href=\"{{ path('app_guide_details', {'idGuide': article.idGuide}) }}\">{{ article.firstname }} {{ article.lastname }}</a></p>
                <p>{{ article.bio }}</p>
                <p>Mail :  <a href=\"mailto:{{ user.email }}\">{{ user.email }}</a></p>
                <p>Telephone : <a href=\"tel:{{ article.telNumber }}\">{{ article.telNumber }}</a></p>
            {% else %}
                <p>{{ article.firstname }} {{ article.lastname }}</p>
                <p>{{ article.bio }}</p>
                <p>Telephone : <a href=\"tel:{{ article.telNumber }}\">{{ article.telNumber }}</a></p>
            {% endif%}
        </div>
    </article>

    <div class=\"review-form\">
    {% if is_granted(\"ROLE_USER\") and not is_granted(\"ROLE_GUIDE\")  %}
        <form method=\"POST\" action=\"{{ path('app_article_show_user', {'id': article.id})}}\">
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
                    <p>Rating: {{ review.rating|ratingStars }}</p>
                    <p>Comments: {{ review.comment }}</p>
                    <p>By: {{ review.username }}</p>
                </section>
            {% endfor %}
        {% else %}
            <p>No reviews available for this Article.</p>
        {% endif %}
    </article>

{% endblock %}
", "home/showArticle.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/home/showArticle.html.twig");
    }
}
