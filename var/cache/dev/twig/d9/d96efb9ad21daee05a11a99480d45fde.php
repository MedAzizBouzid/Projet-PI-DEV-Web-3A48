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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "
        <h1>Create new Calendrier</h1>
<div class=\"container-fluid pt-4 px-4\"> <div style=\"display: flex; justify-content: center; align-items: center; height: 100%;class=\" row g-4\">
\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"bg-secondary rounded h-100 p-4\">
                        <h6 class=\"mb-4\">Basic Form</h6>
                        \t\t\t\t\t\t<div class=\"mb-3 form-check\" style=\"position:center;  \">

    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'widget');
        echo "
            <select name=\"Salle\" id=\"salle\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 19, $this->source); })()), "cours", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 20
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 20), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 20), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>

    
    ";
        // line 26
        echo "    <button style=\"width: 90px;padding: 7px;\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 26, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        echo "\"><i class=\"bi bi-arrow-left-circle-fill\"></i>
</a>

    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_index");
        echo "\"><i class=\"bi bi-arrow-right-circle-fill\"></i></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Calendrier";
        
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
        return array (  145 => 7,  133 => 39,  127 => 36,  116 => 28,  110 => 26,  105 => 22,  94 => 20,  90 => 19,  85 => 17,  81 => 16,  71 => 8,  69 => 7,  59 => 6,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}


 
\t
{% block body %}
{% block title %}New Calendrier{% endblock %}

        <h1>Create new Calendrier</h1>
<div class=\"container-fluid pt-4 px-4\"> <div style=\"display: flex; justify-content: center; align-items: center; height: 100%;class=\" row g-4\">
\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"bg-secondary rounded h-100 p-4\">
                        <h6 class=\"mb-4\">Basic Form</h6>
                        \t\t\t\t\t\t<div class=\"mb-3 form-check\" style=\"position:center;  \">

    {{ form_start(form) }}
        {{ form_widget(form) }}
            <select name=\"Salle\" id=\"salle\">
                {%  for p in salle.cours %}
                <option value=\"{{p.nom}}\">{{p.nom}}</option>
                {% endfor %}
            </select>

    
    {# <button class=\"btn\">{{ button_label|default('Save') }}</button> #}
    <button style=\"width: 90px;padding: 7px;\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>

\t{{ form_end(form) }}
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


    <a href=\"{{ path('app_salle_index') }}\"><i class=\"bi bi-arrow-left-circle-fill\"></i>
</a>

    <a href=\"{{ path('app_calendrier_index') }}\"><i class=\"bi bi-arrow-right-circle-fill\"></i></a>
{% endblock %}
", "calendrier/new.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\calendrier\\new.html.twig");
    }
}
