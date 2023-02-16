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

/* front/salles.html.twig */
class __TwigTemplate_63a7b26e0ece41dd4e00b97988953e25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/salles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/salles.html.twig"));

        $this->parent = $this->loadTemplate("front/baseF.html.twig", "front/salles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<!-- Header End -->
\t";
        // line 6
        echo "\t<!-- Breadcrumb Section Begin -->
\t\t<section class=\"breadcrumb-section set-bg\" data-setbg=\"img/breadcrumb-bg.jpg\"> <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<div class=\"breadcrumb-text\">
\t\t\t\t\t\t<h2>Services</h2>
\t\t\t\t\t\t<div class=\"bt-option\">
\t\t\t\t\t\t\t<a href=\"./index.html\">Home</a>
\t\t\t\t\t\t\t<span>Services</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Breadcrumb Section End -->
\t<!-- Services Section Begin -->
\t<section class=\"services-section spad\">

        <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<span>What we do?</span>
\t\t\t\t\t\t<h2>PUSH YOUR LIMITS FORWARD</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
            \t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 37
            echo "
\t\t\t\t\t<div class=\"col-lg-3 order-lg-1 col-md-6 p-0\">
\t\t\t\t\t\t<div class=\"ss-pic\">
\t\t\t\t\t\t\t<img  class=\"img-thumbnail\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["s"], "image", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 order-lg-2 col-md-6 p-0\">
\t\t\t\t\t\t<div class=\"ss-text second-row\">
\t\t\t\t\t\t\t<h4>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<h2>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "lieu", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "superficie", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<a href=\"#\">Explore</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
                            \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
\t\t\t</div>

\t\t</section>
        
\t\t<!-- Services Section End -->
\t\t 

\t\t<!-- Banner Section Begin -->
\t\t<section class=\"banner-section set-bg\" data-setbg=\"img/banner-bg.jpg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"bs-text service-banner\">
\t\t\t\t\t\t\t<h2>Exercise until the body obeys.</h2>
\t\t\t\t\t\t\t<div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=EzKkl64rRbM\" class=\"play-btn video-popup\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-caret-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Banner Section End -->

\t\t<!-- Pricing Section Begin -->
\t\t<section class=\"pricing-section service-pricing spad\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<span>Our Plan</span>
\t\t\t\t\t\t\t<h2>Choose your pricing plan</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-8\">
\t\t\t\t\t\t<div class=\"ps-item\">
\t\t\t\t\t\t\t<h3>Class drop-in</h3>
\t\t\t\t\t\t\t<div class=\"pi-price\">
\t\t\t\t\t\t\t\t<h2>\$ 39.0</h2>
\t\t\t\t\t\t\t\t<span>SINGLE CLASS</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Free riding</li>
\t\t\t\t\t\t\t\t<li>Unlimited equipments</li>
\t\t\t\t\t\t\t\t<li>Personal trainer</li>
\t\t\t\t\t\t\t\t<li>Weight losing classes</li>
\t\t\t\t\t\t\t\t<li>Month to mouth</li>
\t\t\t\t\t\t\t\t<li>No time restriction</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"thumb-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-8\">
\t\t\t\t\t\t<div class=\"ps-item\">
\t\t\t\t\t\t\t<h3>12 Month unlimited</h3>
\t\t\t\t\t\t\t<div class=\"pi-price\">
\t\t\t\t\t\t\t\t<h2>\$ 99.0</h2>
\t\t\t\t\t\t\t\t<span>SINGLE CLASS</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Free riding</li>
\t\t\t\t\t\t\t\t<li>Unlimited equipments</li>
\t\t\t\t\t\t\t\t<li>Personal trainer</li>
\t\t\t\t\t\t\t\t<li>Weight losing classes</li>
\t\t\t\t\t\t\t\t<li>Month to mouth</li>
\t\t\t\t\t\t\t\t<li>No time restriction</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"thumb-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-8\">
\t\t\t\t\t\t<div class=\"ps-item\">
\t\t\t\t\t\t\t<h3>6 Month unlimited</h3>
\t\t\t\t\t\t\t<div class=\"pi-price\">
\t\t\t\t\t\t\t\t<h2>\$ 59.0</h2>
\t\t\t\t\t\t\t\t<span>SINGLE CLASS</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Free riding</li>
\t\t\t\t\t\t\t\t<li>Unlimited equipments</li>
\t\t\t\t\t\t\t\t<li>Personal trainer</li>
\t\t\t\t\t\t\t\t<li>Weight losing classes</li>
\t\t\t\t\t\t\t\t<li>Month to mouth</li>
\t\t\t\t\t\t\t\t<li>No time restriction</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"thumb-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Pricing Section End -->

\t\t<!-- Get In Touch Section Begin -->
\t\t<div class=\"gettouch-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"gt-text\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t<p>333 Middle Winchendon Rd, Rindge,<br/>
\t\t\t\t\t\t\t\tNH 03461</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"gt-text\">
\t\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>125-711-811</li>
\t\t\t\t\t\t\t\t<li>125-668-886</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"gt-text email\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t<p>Support.gymcenter@gmail.com</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Get In Touch Section End -->

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/salles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 56,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  113 => 40,  108 => 37,  104 => 36,  72 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/baseF.html.twig' %}
{% block body %}

\t<!-- Header End -->
\t{# _________________________________________________ #}
\t<!-- Breadcrumb Section Begin -->
\t\t<section class=\"breadcrumb-section set-bg\" data-setbg=\"img/breadcrumb-bg.jpg\"> <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<div class=\"breadcrumb-text\">
\t\t\t\t\t\t<h2>Services</h2>
\t\t\t\t\t\t<div class=\"bt-option\">
\t\t\t\t\t\t\t<a href=\"./index.html\">Home</a>
\t\t\t\t\t\t\t<span>Services</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Breadcrumb Section End -->
\t<!-- Services Section Begin -->
\t<section class=\"services-section spad\">

        <div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t<span>What we do?</span>
\t\t\t\t\t\t<h2>PUSH YOUR LIMITS FORWARD</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
            \t\t\t\t\t\t{% for s in salle %}

\t\t\t\t\t<div class=\"col-lg-3 order-lg-1 col-md-6 p-0\">
\t\t\t\t\t\t<div class=\"ss-pic\">
\t\t\t\t\t\t\t<img  class=\"img-thumbnail\" src=\"{{ asset('uploads/'~ s.image)}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 order-lg-2 col-md-6 p-0\">
\t\t\t\t\t\t<div class=\"ss-text second-row\">
\t\t\t\t\t\t\t<h4>{{s.nom}}</h4>
\t\t\t\t\t\t\t<h2>{{s.lieu}}</h2>
\t\t\t\t\t\t\t<p>{{s.superficie}}</p>
\t\t\t\t\t\t\t<p>{{s.description}}</p>
\t\t\t\t\t\t\t<a href=\"#\">Explore</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
                            \t\t\t\t\t{% endfor %}

\t\t\t</div>

\t\t</section>
        
\t\t<!-- Services Section End -->
\t\t 

\t\t<!-- Banner Section Begin -->
\t\t<section class=\"banner-section set-bg\" data-setbg=\"img/banner-bg.jpg\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"bs-text service-banner\">
\t\t\t\t\t\t\t<h2>Exercise until the body obeys.</h2>
\t\t\t\t\t\t\t<div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=EzKkl64rRbM\" class=\"play-btn video-popup\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-caret-right\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Banner Section End -->

\t\t<!-- Pricing Section Begin -->
\t\t<section class=\"pricing-section service-pricing spad\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<span>Our Plan</span>
\t\t\t\t\t\t\t<h2>Choose your pricing plan</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-4 col-md-8\">
\t\t\t\t\t\t<div class=\"ps-item\">
\t\t\t\t\t\t\t<h3>Class drop-in</h3>
\t\t\t\t\t\t\t<div class=\"pi-price\">
\t\t\t\t\t\t\t\t<h2>\$ 39.0</h2>
\t\t\t\t\t\t\t\t<span>SINGLE CLASS</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Free riding</li>
\t\t\t\t\t\t\t\t<li>Unlimited equipments</li>
\t\t\t\t\t\t\t\t<li>Personal trainer</li>
\t\t\t\t\t\t\t\t<li>Weight losing classes</li>
\t\t\t\t\t\t\t\t<li>Month to mouth</li>
\t\t\t\t\t\t\t\t<li>No time restriction</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"thumb-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-8\">
\t\t\t\t\t\t<div class=\"ps-item\">
\t\t\t\t\t\t\t<h3>12 Month unlimited</h3>
\t\t\t\t\t\t\t<div class=\"pi-price\">
\t\t\t\t\t\t\t\t<h2>\$ 99.0</h2>
\t\t\t\t\t\t\t\t<span>SINGLE CLASS</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Free riding</li>
\t\t\t\t\t\t\t\t<li>Unlimited equipments</li>
\t\t\t\t\t\t\t\t<li>Personal trainer</li>
\t\t\t\t\t\t\t\t<li>Weight losing classes</li>
\t\t\t\t\t\t\t\t<li>Month to mouth</li>
\t\t\t\t\t\t\t\t<li>No time restriction</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"thumb-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-8\">
\t\t\t\t\t\t<div class=\"ps-item\">
\t\t\t\t\t\t\t<h3>6 Month unlimited</h3>
\t\t\t\t\t\t\t<div class=\"pi-price\">
\t\t\t\t\t\t\t\t<h2>\$ 59.0</h2>
\t\t\t\t\t\t\t\t<span>SINGLE CLASS</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Free riding</li>
\t\t\t\t\t\t\t\t<li>Unlimited equipments</li>
\t\t\t\t\t\t\t\t<li>Personal trainer</li>
\t\t\t\t\t\t\t\t<li>Weight losing classes</li>
\t\t\t\t\t\t\t\t<li>Month to mouth</li>
\t\t\t\t\t\t\t\t<li>No time restriction</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"thumb-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Pricing Section End -->

\t\t<!-- Get In Touch Section Begin -->
\t\t<div class=\"gettouch-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"gt-text\">
\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t<p>333 Middle Winchendon Rd, Rindge,<br/>
\t\t\t\t\t\t\t\tNH 03461</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"gt-text\">
\t\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>125-711-811</li>
\t\t\t\t\t\t\t\t<li>125-668-886</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"gt-text email\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t<p>Support.gymcenter@gmail.com</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Get In Touch Section End -->

\t{% endblock %}
", "front/salles.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev1\\templates\\front\\salles.html.twig");
    }
}
