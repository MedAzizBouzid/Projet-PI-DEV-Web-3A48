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

/* back/newMap.html.twig */
class __TwigTemplate_d65344e05256372002f454b2fb479269 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/newMap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/newMap.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/newMap.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t";
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "
\t<h1>Create new Map</h1>

\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        echo "\">
\t\t<i class=\"bi bi-arrow-left-circle-fill\"></i>
\t</a>

\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map_index");
        echo "\">
\t\t<i class=\"bi bi-arrow-right-circle-fill\"></i>
\t</a>


\t";
        // line 36
        echo "\t<!-- Form Start -->
\t<div class=\"container-fluid pt-4 px-4\">
\t\t<div style=\"display: flex; justify-content: center; align-items: center; height: 100%;\" class=\" row g-4;\">
\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"bg-secondary rounded h-100 p-4\">
\t\t\t\t\t<h6 class=\"mb-4\">Basic Form</h6>
\t\t\t\t\t";
        // line 49
        echo "
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 52
        echo "
\t\t\t\t\t\t 

\t\t\t\t\t\t 

\t\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "lat", [], "any", false, false, false, 58), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "lat", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 500px; padding: 7px;"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "lat", [], "any", false, false, false, 60), 'errors');
        echo "

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "longt", [], "any", false, false, false, 66), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "longt", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 500px; padding: 7px;"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "longt", [], "any", false, false, false, 68), 'errors');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button style=\"width: 90px;padding: 7px;\" class=\"btn btn-primary\">";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 71, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Map
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/newMap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 5,  150 => 73,  145 => 71,  139 => 68,  135 => 67,  131 => 66,  122 => 60,  118 => 59,  114 => 58,  106 => 52,  104 => 51,  100 => 49,  92 => 36,  84 => 14,  77 => 10,  72 => 7,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}


{% block body %}
\t{% block title %}New Map
\t{% endblock %}

\t<h1>Create new Map</h1>

\t<a href=\"{{ path('app_salle_index') }}\">
\t\t<i class=\"bi bi-arrow-left-circle-fill\"></i>
\t</a>

\t<a href=\"{{ path('app_map_index') }}\">
\t\t<i class=\"bi bi-arrow-right-circle-fill\"></i>
\t</a>


\t{# {{ form_start(form) }}
\t        {{ form_widget(form) }}
\t            <select name=\"Salle\" id=\"salle\">
\t                {%  for p in salle.cours %}
\t                <option value=\"{{p.nom}}\">{{p.nom}}</option>
\t                {% endfor %}
\t            </select>
\t
\t    
\t     <button style=\"width: 90px;padding: 7px;\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
\t
\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> #}
\t<!-- Form Start -->
\t<div class=\"container-fluid pt-4 px-4\">
\t\t<div style=\"display: flex; justify-content: center; align-items: center; height: 100%;\" class=\" row g-4;\">
\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"bg-secondary rounded h-100 p-4\">
\t\t\t\t\t<h6 class=\"mb-4\">Basic Form</h6>
\t\t\t\t\t{# <div class=\"form-group\" style=\"position: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Save</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </div> #}

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}
\t\t\t\t\t\t) }}
\t\t\t\t\t\t 

\t\t\t\t\t\t 

\t\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t{{form_label(form.lat)}}
\t\t\t\t\t\t\t{{form_widget(form.lat, {'attr': {'class': 'form-control', 'style': 'width: 500px; padding: 7px;'}})}}
\t\t\t\t\t\t\t{{form_errors(form.lat)}}

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t{{form_label(form.longt)}}
\t\t\t\t\t\t\t{{form_widget(form.longt, {'attr': {'class': 'form-control', 'style': 'width: 500px; padding: 7px;'}})}}
\t\t\t\t\t\t\t{{form_errors(form.longt)}}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button style=\"width: 90px;padding: 7px;\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>

\t\t\t\t\t\t\t{{ form_end(form) }}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t{% endblock %}
", "back/newMap.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\newMap.html.twig");
    }
}
