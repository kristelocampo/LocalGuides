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
class __TwigTemplate_c1c7c04129a6be533fff04653b1b2826 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
        <header>
            <nav class=\"nav-menu\">
                <div class=\"logo\">
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpeg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </div>
                <ul class=\"nav-list\" id=\"navList\">
                        <li>
                            <img class=\"close icon\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/close.png"), "html", null, true);
        echo "\"/>
                        </li>
                    ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "
                        <li class=\"nav-item\"><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
            echo "\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
            echo "\">Articles</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraries_index");
            echo "\">Itineraries</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_language_index");
            echo "\">Languages</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location_index");
            echo "\">Location</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\">Users List</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_index");
            echo "\">Guide List</a></li>

                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE")) {
            // line 40
            echo "                        <li class=\"nav-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_dashboard");
            echo "\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
            echo "\">Articles</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itineraries_index");
            echo "\">Itinerary</a></li>

                    ";
        } else {
            // line 45
            echo "                        <li class=\"nav-item active\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\" >Home</a></li>
                        <li class=\"nav-item active\"><a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_itinerary");
            echo "\" >Itinerary</a></li>
                        <li class=\"nav-item active\"><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles");
            echo "\" >Articles</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_guide");
            echo "\">Become a Local Guide</a></li>
                    ";
        }
        // line 50
        echo "
                    ";
        // line 51
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GUIDE"))) {
            // line 52
            echo "                        <li class=\"nav-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Sign out</a></li>
                    ";
        } else {
            // line 54
            echo "                        <li class=\"nav-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li>
                        <li class=\"nav-item\"><a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_user");
            echo "\">Sign-up</a></li>
                    ";
        }
        // line 57
        echo "                </ul>
                <div class=\"nav-toggle\" id=\"menuToggle\">
                    <img class=\"menu icon\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/list.png"), "html", null, true);
        echo "\"/>
                </div>

            </nav>


        </header>
        <main>
         ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        </main>
        <footer>
        </footer>
        ";
        // line 72
        $this->displayBlock('javascript_footer', $context, $blocks);
        // line 79
        echo "    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Local Guide";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.jpeg"), "html", null, true);
        echo "\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 68
        echo "         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 72
    public function block_javascript_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_footer"));

        // line 73
        echo "            <script src=\"https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js\"></script>
            <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\" ></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  288 => 77,  282 => 73,  275 => 72,  268 => 68,  261 => 67,  254 => 17,  247 => 16,  238 => 13,  234 => 12,  226 => 8,  219 => 7,  206 => 5,  197 => 79,  195 => 72,  190 => 69,  188 => 67,  177 => 59,  173 => 57,  168 => 55,  163 => 54,  157 => 52,  155 => 51,  152 => 50,  147 => 48,  143 => 47,  139 => 46,  134 => 45,  128 => 42,  124 => 41,  119 => 40,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  86 => 30,  84 => 29,  79 => 27,  70 => 23,  63 => 18,  61 => 16,  58 => 15,  56 => 7,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Local Guide{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"icon\" href=\"{{ asset('img/logo.jpeg')  }}\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css\">
            <link href=\"{{ asset('css/normalize.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"{{ asset('css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
        <header>
            <nav class=\"nav-menu\">
                <div class=\"logo\">
                    <a href=\"{{ path('app_home') }}\"><img src=\"{{ asset('img/logo.jpeg') }}\" alt=\"logo\"></a>
                </div>
                <ul class=\"nav-list\" id=\"navList\">
                        <li>
                            <img class=\"close icon\" src=\"{{ asset('img/icons/close.png') }}\"/>
                        </li>
                    {% if is_granted(\"ROLE_ADMIN\") %}

                        <li class=\"nav-item\"><a href=\"{{ path('app_admin_dashboard') }}\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_article_index') }}\">Articles</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_itineraries_index') }}\">Itineraries</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_language_index') }}\">Languages</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_location_index') }}\">Location</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_user_index') }}\">Users List</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_guide_index') }}\">Guide List</a></li>

                    {% elseif is_granted(\"ROLE_GUIDE\") %}
                        <li class=\"nav-item\"><a href=\"{{ path('app_guide_dashboard') }}\">Home</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_article_index')}}\">Articles</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_itineraries_index') }}\">Itinerary</a></li>

                    {% else %}
                        <li class=\"nav-item active\"><a href=\"{{ path('app_home') }}\" >Home</a></li>
                        <li class=\"nav-item active\"><a href=\"{{ path('app_itinerary') }}\" >Itinerary</a></li>
                        <li class=\"nav-item active\"><a href=\"{{ path('app_articles') }}\" >Articles</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_register_guide') }}\">Become a Local Guide</a></li>
                    {% endif %}

                    {% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_USER\") or is_granted(\"ROLE_GUIDE\") %}
                        <li class=\"nav-item\"><a href=\"{{ path('app_logout') }}\">Sign out</a></li>
                    {% else %}
                        <li class=\"nav-item\"><a href=\"{{ path('app_login') }}\">Login</a></li>
                        <li class=\"nav-item\"><a href=\"{{ path('app_register_user') }}\">Sign-up</a></li>
                    {% endif %}
                </ul>
                <div class=\"nav-toggle\" id=\"menuToggle\">
                    <img class=\"menu icon\" src=\"{{ asset('img/icons/list.png') }}\"/>
                </div>

            </nav>


        </header>
        <main>
         {% block body %}
         {% endblock %}
        </main>
        <footer>
        </footer>
        {% block javascript_footer %}
            <script src=\"https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js\"></script>
            <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\" ></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/kristelocampo/Desktop/LocalGuides/templates/base.html.twig");
    }
}
