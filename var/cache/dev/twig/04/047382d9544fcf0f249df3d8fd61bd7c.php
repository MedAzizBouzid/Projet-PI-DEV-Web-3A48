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

/* calendrier/show.html.twig */
class __TwigTemplate_55fb7c8c7cb1667503728878cc395237 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendrier/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Calendrier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Calendrier</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 20, $this->source); })()), "start", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 20, $this->source); })()), "start", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>End</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 24, $this->source); })()), "end", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 24, $this->source); })()), "end", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>All_day</th>
                <td>";
        // line 32
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 32, $this->source); })()), "allDay", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Background_color</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 36, $this->source); })()), "backgroundColor", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Border_color</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 40, $this->source); })()), "borderColor", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text_color</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 44, $this->source); })()), "textColor", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 53
        echo twig_include($this->env, $context, "calendrier/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "calendrier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 53,  165 => 51,  160 => 49,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calendrier{% endblock %}

{% block body %}
    <h1>Calendrier</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ calendrier.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ calendrier.title }}</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>{{ calendrier.start ? calendrier.start|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>End</th>
                <td>{{ calendrier.end ? calendrier.end|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ calendrier.description }}</td>
            </tr>
            <tr>
                <th>All_day</th>
                <td>{{ calendrier.allDay ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Background_color</th>
                <td>{{ calendrier.backgroundColor }}</td>
            </tr>
            <tr>
                <th>Border_color</th>
                <td>{{ calendrier.borderColor }}</td>
            </tr>
            <tr>
                <th>Text_color</th>
                <td>{{ calendrier.textColor }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_calendrier_index') }}\">back to list</a>

    <a href=\"{{ path('app_calendrier_edit', {'id': calendrier.id}) }}\">edit</a>

    {{ include('calendrier/_delete_form.html.twig') }}
{% endblock %}
", "calendrier/show.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\calendrier\\show.html.twig");
    }
}
