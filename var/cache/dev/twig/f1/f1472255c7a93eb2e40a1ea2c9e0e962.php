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

/* front/mesSalles.html.twig */
class __TwigTemplate_cb2388b9920a5241cb1f25df1a1fcbd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'home' => [$this, 'block_home'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/baseF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/mesSalles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/mesSalles.html.twig"));

        $this->parent = $this->loadTemplate("front/baseF.html.twig", "front/mesSalles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tBoutique-BodyRock
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<!-- Breadcrumb Section Begin -->
\t<section class=\"breadcrumb-section set-bg\" data-setbg=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/breadcrumb-bg.jpg"), "html", null, true);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<div class=\"breadcrumb-text\">
\t\t\t\t\t\t<h2>Body Rock Gym</h2>
\t\t\t\t\t\t<div class=\"bt-option\">
\t\t\t\t\t\t\t<a href=\"./index.html\">Home</a>
\t\t\t\t\t\t\t<span>Body Rock Gym</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Breadcrumb Section End -->

\t<!-- Team Section Begin -->
\t<section class=\"team-section team-page spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"team-title\">
\t\t\t\t\t\t<div class=\"section-title\">
 \t\t\t\t\t\t\t<h2 style=\"color:red ;\">Nos divers Salles</h2>
                            <h3 style=\"color:#BDC3C7 ;\" > 
                                Profitez de la Différence avec BodyRock Gym, l'enseigne de club de fitnessde 
                                plus de 20 ans d'expérience en Tunisie et actuellement
                                présente aussi en France. 
                            <p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 42
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 48
            echo "\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"ts-item set-bg\" data-setbg=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 49))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"ts_text\">
\t\t\t\t\t\t\t\t<h4 style=\"color:red;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 51)), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t";
            // line 54
            echo "\t\t\t\t\t\t\t\t<h4 style=\"color:#839192 ;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "lieu", [], "any", false, false, false, 54), "html", null, true);
            echo "</h4>

\t\t\t\t\t\t\t\t";
            // line 58
            echo "
\t\t\t\t\t\t\t\t<h2 style=\"color:red;\">Nos activitées</h2>

\t\t\t\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["a"], "cours", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 62
                echo "
\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t<li style=\"color:yellow;\">
\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
\t\t\t\t\t\t\t\t<div class=\"tt_social\">
                                <p>Pour plus d'info </p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_show", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Team Section End -->

<!-- Get In Touch Section Begin -->

\t<!-- Get In Touch Section End -->

\t<!-- Footer Section Begin -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/mesSalles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 83,  206 => 72,  201 => 69,  191 => 65,  186 => 62,  182 => 61,  177 => 58,  171 => 54,  166 => 51,  161 => 49,  158 => 48,  154 => 47,  147 => 42,  112 => 9,  109 => 8,  99 => 7,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/baseF.html.twig' %}
{% block title %}
\tBoutique-BodyRock
{% endblock %}
{% block home %}{% endblock %}
{# {% block shop %}active{% endblock %} #}
{% block body %}
\t<!-- Breadcrumb Section Begin -->
\t<section class=\"breadcrumb-section set-bg\" data-setbg=\"{{ asset('assets/front/img/breadcrumb-bg.jpg')}}\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<div class=\"breadcrumb-text\">
\t\t\t\t\t\t<h2>Body Rock Gym</h2>
\t\t\t\t\t\t<div class=\"bt-option\">
\t\t\t\t\t\t\t<a href=\"./index.html\">Home</a>
\t\t\t\t\t\t\t<span>Body Rock Gym</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Breadcrumb Section End -->

\t<!-- Team Section Begin -->
\t<section class=\"team-section team-page spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"team-title\">
\t\t\t\t\t\t<div class=\"section-title\">
 \t\t\t\t\t\t\t<h2 style=\"color:red ;\">Nos divers Salles</h2>
                            <h3 style=\"color:#BDC3C7 ;\" > 
                                Profitez de la Différence avec BodyRock Gym, l'enseigne de club de fitnessde 
                                plus de 20 ans d'expérience en Tunisie et actuellement
                                présente aussi en France. 
                            <p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{# <a href=\"{{path('app_cart')}}\" class=\"primary-btn btn-normal appoinment-btn\">Panier <span></span></a> #}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t{% for a in salle %}
\t\t\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"ts-item set-bg\" data-setbg=\"{{ asset('uploads/'~ a.image)}}\">
\t\t\t\t\t\t\t<div class=\"ts_text\">
\t\t\t\t\t\t\t\t<h4 style=\"color:red;\">{{ a.nom | upper }}</h4>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t{# <h2 style=\"color:red;\">Lieu</h2> #}
\t\t\t\t\t\t\t\t<h4 style=\"color:#839192 ;\">{{ a.lieu }}</h4>

\t\t\t\t\t\t\t\t{# <h3 style=\"color:yellow;\">{{ a.superficie }}
\t\t\t\t\t\t\t\t</h3> #}

\t\t\t\t\t\t\t\t<h2 style=\"color:red;\">Nos activitées</h2>

\t\t\t\t\t\t\t\t{% for c in a.cours %}

\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t<li style=\"color:yellow;\">
\t\t\t\t\t\t\t\t\t\t\t<td>{{c.nom}}</td>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t<div class=\"tt_social\">
                                <p>Pour plus d'info </p>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_salle_show',{id: a.id })}}\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cart\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Team Section End -->

<!-- Get In Touch Section Begin -->

\t<!-- Get In Touch Section End -->

\t<!-- Footer Section Begin -->
{% endblock %}
", "front/mesSalles.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\front\\mesSalles.html.twig");
    }
}
