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

/* calendrier/new.html.twig */
class __TwigTemplate_72a243e1e95d0beac3ace11c2c850111 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/new.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "calendrier/new.html.twig", 1);
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
\t<h1>Create new Calendrier</h1>

\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        echo "\">
\t\t<i class=\"bi bi-arrow-left-circle-fill\"></i>
\t</a>

\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_index");
        echo "\">
\t\t<i class=\"bi bi-arrow-right-circle-fill\"></i>
\t</a>


\t";
        // line 36
        echo "\t<!-- Form Start -->
\t<div class=\"container-fluid pt-4 px-4\">
\t\t<div style=\"display: flex; justify-content: center; align-items: center; height: 100%;class=\" row g-4\">
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

\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "start", [], "any", false, false, false, 56), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "start", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 500px; padding: 7px;"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "start", [], "any", false, false, false, 58), 'errors');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "end", [], "any", false, false, false, 62), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "end", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 500px; padding: 7px;"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "end", [], "any", false, false, false, 64), 'errors');
        echo "

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 500px; padding: 7px;"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), 'errors');
        echo "

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "background_color", [], "any", false, false, false, 77), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "background_color", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 500px; padding: 7px;"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "background_color", [], "any", false, false, false, 79), 'errors');
        echo "

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "border_color", [], "any", false, false, false, 84), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "border_color", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 500px; padding: 7px;"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "border_color", [], "any", false, false, false, 86), 'errors');
        echo "

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "text_color", [], "any", false, false, false, 90), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "text_color", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 500px; padding: 7px;"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "text_color", [], "any", false, false, false, 92), 'errors');
        echo "

\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<button style=\"width: 90px;padding: 7px;\" class=\"btn btn-primary\">";
        // line 95
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 95, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

\t\t\t\t\t\t\t";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
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

        echo "New Calendrier
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "calendrier/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 5,  210 => 97,  205 => 95,  199 => 92,  195 => 91,  191 => 90,  184 => 86,  180 => 85,  176 => 84,  168 => 79,  164 => 78,  160 => 77,  151 => 71,  147 => 70,  143 => 69,  135 => 64,  131 => 63,  127 => 62,  120 => 58,  116 => 57,  112 => 56,  106 => 52,  104 => 51,  100 => 49,  92 => 36,  84 => 14,  77 => 10,  72 => 7,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}


{% block body %}
\t{% block title %}New Calendrier
\t{% endblock %}

\t<h1>Create new Calendrier</h1>

\t<a href=\"{{ path('app_salle_index') }}\">
\t\t<i class=\"bi bi-arrow-left-circle-fill\"></i>
\t</a>

\t<a href=\"{{ path('app_calendrier_index') }}\">
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
\t\t<div style=\"display: flex; justify-content: center; align-items: center; height: 100%;class=\" row g-4\">
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

\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t{{form_label(form.start)}}
\t\t\t\t\t\t\t{{form_widget(form.start, {'attr': {'class': 'form-control', 'style': 'width: 500px; padding: 7px;'}})}}
\t\t\t\t\t\t\t{{ form_errors(form.start) }}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t{{form_label(form.end)}}
\t\t\t\t\t\t\t{{form_widget(form.end, {'attr': {'class': 'form-control', 'style': 'width: 500px; padding: 7px;'}})}}
\t\t\t\t\t\t\t{{ form_errors(form.end) }}

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t{{form_label(form.description)}}
\t\t\t\t\t\t\t{{form_widget(form.description, {'attr': {'class': 'form-control', 'style': 'width: 500px; padding: 7px;'}})}}
\t\t\t\t\t\t\t{{form_errors(form.description)}}

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t{{form_label(form.background_color)}}
\t\t\t\t\t\t\t{{form_widget(form.background_color, {'attr': {'class': 'form-control', 'style': 'width: 500px; padding: 7px;'}})}}
\t\t\t\t\t\t\t{{form_errors(form.background_color)}}

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t{{form_label(form.border_color)}}
\t\t\t\t\t\t\t{{form_widget(form.border_color, {'attr': {'class': 'form-control', 'style': 'width: 500px; padding: 7px;'}})}}
\t\t\t\t\t\t\t{{form_errors(form.border_color)}}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t\t{{form_label(form.text_color)}}
\t\t\t\t\t\t\t{{form_widget(form.text_color, {'attr': {'class': 'form-control', 'style': 'width: 500px; padding: 7px;'}})}}
\t\t\t\t\t\t\t{{form_errors(form.text_color)}}

\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t<button style=\"width: 90px;padding: 7px;\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>

\t\t\t\t\t\t\t{{ form_end(form) }}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t{% endblock %}
", "calendrier/new.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\calendrier\\new.html.twig");
    }
}
