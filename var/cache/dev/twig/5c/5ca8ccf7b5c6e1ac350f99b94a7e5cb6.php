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

/* home/articles.html.twig */
class __TwigTemplate_e5d1055497e0b5e3bca86f99e6365643 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/articles.html.twig", 1);
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
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 7
            echo "        <div class=\"welcome\">
            <h1>Welcome ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "username", [], "any", false, false, false, 8), "html", null, true);
            echo "</h1>
            <p>Explore your city with our local guides.</p>
        </div>
    ";
        } else {
            // line 12
            echo "        <div class=\"welcome\">
            <h1>Welcome to Local Guide</h1>
            <p>Explore your city with our local guides.</p>
        </div>
    ";
        }
        // line 17
        echo "    <article class=\"articles\">
        <h2>Articles</h2>
        <div class=\"article\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["showArticles"]) || array_key_exists("showArticles", $context) ? $context["showArticles"] : (function () { throw new RuntimeError('Variable "showArticles" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "            <section class=\"article-item\">
                <h3 class=\"title\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show_user", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></h3>
                <p class=\"context\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "context", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                ";
            // line 24
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE"))) {
                // line 25
                echo "                    <p class=\"author\">Written By: <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_details", ["idGuide" => twig_get_attribute($this->env, $this->source, $context["article"], "idGuide", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "firstname", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "lastname", [], "any", false, false, false, 25), "html", null, true);
                echo "</a></p>
                ";
            } else {
                // line 27
                echo "                    <p class=\"author\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "firstname", [], "any", false, false, false, 27), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "lastname", [], "any", false, false, false, 27), "html", null, true);
                echo "</p>
                ";
            }
            // line 29
            echo "            </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </article>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 31,  135 => 29,  127 => 27,  117 => 25,  115 => 24,  111 => 23,  105 => 22,  102 => 21,  98 => 20,  93 => 17,  86 => 12,  79 => 8,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
    <article class=\"articles\">
        <h2>Articles</h2>
        <div class=\"article\">
        {% for article in showArticles %}
            <section class=\"article-item\">
                <h3 class=\"title\"><a href=\"{{ path('app_article_show_user', {'id': article.id}) }}\">{{ article.title }}</a></h3>
                <p class=\"context\">{{ article.context }}</p>
                {% if is_granted(\"ROLE_USER\") and not is_granted(\"ROLE_GUIDE\")%}
                    <p class=\"author\">Written By: <a href=\"{{ path('app_guide_details', {'idGuide': article.idGuide}) }}\">{{ article.firstname }} {{ article.lastname }}</a></p>
                {% else %}
                    <p class=\"author\">{{ article.firstname }} {{ article.lastname }}</p>
                {% endif%}
            </section>
        {% endfor %}
        </div>
    </article>

{% endblock %}
", "home/articles.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/home/articles.html.twig");
    }
}
