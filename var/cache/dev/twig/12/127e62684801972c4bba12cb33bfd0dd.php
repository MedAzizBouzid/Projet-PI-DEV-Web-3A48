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

/* calendrier/index.html.twig */
class __TwigTemplate_4c9aa4cea91b3fef07d7b13251bccd59 extends Template
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
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "calendrier/index.html.twig", 1);
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

        echo "Calender  ";
        
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
        echo "    <h1>Calender</h1>
<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_index");
        echo "\">
\t\t<i class=\"bi bi-arrow-right-circle-fill\"></i>
\t</a>
 <div id=\"pagination\">
\t\t\t\t\t<a href=\"#\" class=\"previous\">&laquo; Previous</a>
\t\t\t\t\t<a href=\"#\" class=\"next\">Next &raquo;</a>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered\" id=\"myTable\" width=\"100%\" cellspacing=\"0\"> 
\t\t\t<thead>
            <tr>
                <th style =\"color:#FF0000\">#</th>
\t\t\t\t\t<th style =\"color:#FF0000\">start</th>
\t\t\t\t\t<th style =\"color:#FF0000\">end</th>
\t\t\t\t\t<th style =\"color:#FF0000\">description</th>
\t\t\t\t    <th style =\"color:#FF0000\">backgroundcolor</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">bordercolor</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">textcolor</th>
 \t\t\t  \t\t<th style =\"color:#FF0000\">Activité</th>
\t\t\t\t\t<th style =\"color:#FF0000\">action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendriers"]) || array_key_exists("calendriers", $context) ? $context["calendriers"] : (function () { throw new RuntimeError('Variable "calendriers" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["calendrier"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendrier"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["calendrier"], "start", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendrier"], "start", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["calendrier"], "end", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendrier"], "end", [], "any", false, false, false, 33), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendrier"], "description", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendrier"], "backgroundColor", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendrier"], "borderColor", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendrier"], "textColor", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendrier"], "activite", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>

                <td>
                <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["calendrier"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"><i class=\"bi bi-trash\"></i></a></td>
\t\t\t\t<td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["calendrier"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"><span class=\"bi bi-cart-fill\"></a></td>

                 </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendrier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
<script>

 \t\t\t";
        // line 56
        echo "let table = document.getElementById('myTable');
let rowsPerPage = 5;
let currentPage = 1;

function showPage(page) {
  let startIndex = (page - 1) * rowsPerPage;
  let endIndex = startIndex + rowsPerPage;

  let rows = table.rows;
  for (let i = 1; i < rows.length; i++) {
    let row = rows[i];
    if (i < startIndex || i >= endIndex) {
      row.style.display = 'none';
    } else {
      row.style.display = '';
    }
  }
}

function nextPage() {
  if (currentPage < numPages()) {
    currentPage++;
    showPage(currentPage);
  }
}

function previousPage() {
  if (currentPage > 1) {
    currentPage--;
    showPage(currentPage);
  }
}

function numPages() {
  return Math.ceil((table.rows.length - 1) / rowsPerPage);
}

document.querySelector('.previous').addEventListener('click', previousPage);
document.querySelector('.next').addEventListener('click', nextPage);

showPage(currentPage);
</script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "calendrier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 56,  181 => 51,  172 => 47,  162 => 42,  158 => 41,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  121 => 30,  116 => 29,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block title %}Calender  {% endblock %}

{% block body %}
    <h1>Calender</h1>
<a href=\"{{ path('app_calendrier_index') }}\">
\t\t<i class=\"bi bi-arrow-right-circle-fill\"></i>
\t</a>
 <div id=\"pagination\">
\t\t\t\t\t<a href=\"#\" class=\"previous\">&laquo; Previous</a>
\t\t\t\t\t<a href=\"#\" class=\"next\">Next &raquo;</a>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered\" id=\"myTable\" width=\"100%\" cellspacing=\"0\"> 
\t\t\t<thead>
            <tr>
                <th style =\"color:#FF0000\">#</th>
\t\t\t\t\t<th style =\"color:#FF0000\">start</th>
\t\t\t\t\t<th style =\"color:#FF0000\">end</th>
\t\t\t\t\t<th style =\"color:#FF0000\">description</th>
\t\t\t\t    <th style =\"color:#FF0000\">backgroundcolor</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">bordercolor</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">textcolor</th>
 \t\t\t  \t\t<th style =\"color:#FF0000\">Activité</th>
\t\t\t\t\t<th style =\"color:#FF0000\">action</th>
            </tr>
        </thead>
        <tbody>
        {% for calendrier in calendriers %}
            <tr>
                <td>{{ calendrier.id }}</td>
                <td>{{ calendrier.start ? calendrier.start|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ calendrier.end ? calendrier.end|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ calendrier.description }}</td>
                <td>{{ calendrier.backgroundColor }}</td>
                <td>{{ calendrier.borderColor }}</td>
                <td>{{ calendrier.textColor }}</td>
                <td>{{ calendrier.activite }}</td>

                <td>
                <td><a href=\"{{path('app_planning_delete',{'id':calendrier.id})}}\"><i class=\"bi bi-trash\"></i></a></td>
\t\t\t\t<td><a href=\"{{path('app_calendrier_edit',{'id':calendrier.id})}}\"><span class=\"bi bi-cart-fill\"></a></td>

                 </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<script>

 \t\t\t{# script pagination #}
let table = document.getElementById('myTable');
let rowsPerPage = 5;
let currentPage = 1;

function showPage(page) {
  let startIndex = (page - 1) * rowsPerPage;
  let endIndex = startIndex + rowsPerPage;

  let rows = table.rows;
  for (let i = 1; i < rows.length; i++) {
    let row = rows[i];
    if (i < startIndex || i >= endIndex) {
      row.style.display = 'none';
    } else {
      row.style.display = '';
    }
  }
}

function nextPage() {
  if (currentPage < numPages()) {
    currentPage++;
    showPage(currentPage);
  }
}

function previousPage() {
  if (currentPage > 1) {
    currentPage--;
    showPage(currentPage);
  }
}

function numPages() {
  return Math.ceil((table.rows.length - 1) / rowsPerPage);
}

document.querySelector('.previous').addEventListener('click', previousPage);
document.querySelector('.next').addEventListener('click', nextPage);

showPage(currentPage);
</script>

    {# <a href=\"{{ path('app_calendrier_new') }}\">Create new</a> #}
{% endblock %}
", "calendrier/index.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\calendrier\\index.html.twig");
    }
}
