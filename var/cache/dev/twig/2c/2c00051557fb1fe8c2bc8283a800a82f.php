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

/* back/show.html.twig */
class __TwigTemplate_9a7520de9d094318a0ae3a4ef50ffb01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/show.html.twig", 1);
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

        echo "Activite
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "\t\t\t\t";
        // line 8
        echo "
\t<style>
\t\tbody {
\t\t\tbackground-color: #f1f1f1;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\theight: 100vh;
\t\t}

\t\t/* Style pour le tableau */
\t\t.table {
\t\t\tborder-collapse: collapse;
\t\t\tbackground-color: white;
\t\t\tcolor: black;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 16px;
\t\t\ttext-align: left;
\t\t\tborder: 1px solid black;
\t\t\tmargin: auto;
\t\t\tpadding: 20px;
\t\t\twidth: 80%;
\t\t}
\t\t.table th {
\t\t\tbackground-color: #333;
\t\t\tcolor: white;
\t\t\tpadding: 10px;
\t\t}
\t\t.table td,
\t\t.table th {
\t\t\tborder: 1px solid black;
\t\t\tpadding: 10px;
\t\t}


\t\thtml {
\t\t\tfont-family: Verdana, Geneva, Tahoma, sans-serif;
\t\t}
\t\tbody {
\t\t\t;
\t\t\t/* background: var(--fond); */
\t\t}
\t\thr {
\t\t\twidth: 200px;
\t\t}
\t\th1 {
\t\t\ttext-align: center;
\t\t\tpadding-top: 70px;
\t\t\t/* color: var(--ecriture); */
\t\t}
\t\t.contenu {
\t\t\tpadding: 50px 10%;
\t\t\ttext-align: justify;
\t\t\t/* color: var(--ecriture); */

\t\t}
\t\t.btn-toggle {
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 80px;
\t\t\theight: 80px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: #333;
\t\t\tcolor: #fff;
\t\t\tborder: 1px solid #333;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\tcursor: pointer;
\t\t}
\t\t.btn-group {
\t\t\tposition: absolute;
\t\t\ttop: 1px;
\t\t\tright: 100px;
\t\t\twidth: 180px;
\t\t\theight: 180px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: #333;
\t\t\tcolor: #333;
\t\t\tborder: 1px solid #333;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\tcursor: pointer;
\t\t}
\t\t.btn-primary, .btn-secondary {
\t\t\tbackground-color: red;
\t\t\tborder-color: red;
\t\t\tcolor: white;
\t\t\t}

\t\t.btn-primary:hover, .btn-secondary:hover {
\t\tbackground-color: darkred;
\t\tborder-color: darkred;
\t\tcolor: white;
\t\t}
\t\tbody.dark {
\t\t\tcolor: #fff !important;
\t\t\tbackground: #333 !important;
\t\t}
\t\tbody.dark .btn-toggle {
\t\t\tbackground: #f1f1f1;
\t\t\tcolor: #333;
\t\t}
\t</style>
\t\t\t\t";
        // line 115
        echo "
\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t<a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo "\">
\t\t\t<button id=\"openBtn\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Retourner à la liste</button>
\t\t</a>
\t\t<a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        echo "\">
\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Mofidier cette activité</button>
\t\t</a>

\t</div>
\t<div class=\"btn-toggle\">Go Nuit</div>

\t<body class=\"light\">
\t\t<table class=\"table\">
\t\t\t<tbody>
\t\t\t\t";
        // line 134
        echo "\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<td>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 136, $this->source); })()), "nom", [], "any", false, false, false, 136), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Categorie</th>
\t\t\t\t\t<td>";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 140, $this->source); })()), "categorie", [], "any", false, false, false, 140), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Materiel utilise</th>
\t\t\t\t\t<td>";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 144, $this->source); })()), "materiel", [], "any", false, false, false, 144), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Intensite</th>
\t\t\t\t\t<td>";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 148, $this->source); })()), "intensite", [], "any", false, false, false, 148), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Group musculaire sollicité</th>
\t\t\t\t\t<td>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 152, $this->source); })()), "grpMusculaire", [], "any", false, false, false, 152), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Tenue</th>
\t\t\t\t\t<td>";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 156, $this->source); })()), "tenue", [], "any", false, false, false, 156), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Recomendation</th>
\t\t\t\t\t<td>";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 160, $this->source); })()), "recomendation", [], "any", false, false, false, 160), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 165, $this->source); })()), "image", [], "any", false, false, false, 165))), "html", null, true);
        echo "\" alt=\"\"></td>
\t\t\t\t</tr>

\t\t\t</tbody>
\t\t</table>

\t</body>
\t<script>

\t\tconst btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

const body = document.body;

if (body.classList.contains('dark')) {

body.classList.add('light')
body.classList.remove('dark')
btnToggle.innerHTML = \"Go Dark\"

} else if (body.classList.contains('light')) {

body.classList.add('dark')
body.classList.remove('light')
btnToggle.innerHTML = \"Go Light\"

}

})
\t</script>
\t";
        // line 199
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 199,  276 => 165,  268 => 160,  261 => 156,  254 => 152,  247 => 148,  240 => 144,  233 => 140,  226 => 136,  222 => 134,  209 => 120,  203 => 117,  199 => 115,  91 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Activite
{% endblock %}

{% block body %}
\t\t\t\t{# _________________________________________Css____________________________________ #}

\t<style>
\t\tbody {
\t\t\tbackground-color: #f1f1f1;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\theight: 100vh;
\t\t}

\t\t/* Style pour le tableau */
\t\t.table {
\t\t\tborder-collapse: collapse;
\t\t\tbackground-color: white;
\t\t\tcolor: black;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 16px;
\t\t\ttext-align: left;
\t\t\tborder: 1px solid black;
\t\t\tmargin: auto;
\t\t\tpadding: 20px;
\t\t\twidth: 80%;
\t\t}
\t\t.table th {
\t\t\tbackground-color: #333;
\t\t\tcolor: white;
\t\t\tpadding: 10px;
\t\t}
\t\t.table td,
\t\t.table th {
\t\t\tborder: 1px solid black;
\t\t\tpadding: 10px;
\t\t}


\t\thtml {
\t\t\tfont-family: Verdana, Geneva, Tahoma, sans-serif;
\t\t}
\t\tbody {
\t\t\t;
\t\t\t/* background: var(--fond); */
\t\t}
\t\thr {
\t\t\twidth: 200px;
\t\t}
\t\th1 {
\t\t\ttext-align: center;
\t\t\tpadding-top: 70px;
\t\t\t/* color: var(--ecriture); */
\t\t}
\t\t.contenu {
\t\t\tpadding: 50px 10%;
\t\t\ttext-align: justify;
\t\t\t/* color: var(--ecriture); */

\t\t}
\t\t.btn-toggle {
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 80px;
\t\t\theight: 80px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: #333;
\t\t\tcolor: #fff;
\t\t\tborder: 1px solid #333;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\tcursor: pointer;
\t\t}
\t\t.btn-group {
\t\t\tposition: absolute;
\t\t\ttop: 1px;
\t\t\tright: 100px;
\t\t\twidth: 180px;
\t\t\theight: 180px;
\t\t\tborder-radius: 50%;
\t\t\tbackground: #333;
\t\t\tcolor: #333;
\t\t\tborder: 1px solid #333;
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t\talign-items: center;
\t\t\tcursor: pointer;
\t\t}
\t\t.btn-primary, .btn-secondary {
\t\t\tbackground-color: red;
\t\t\tborder-color: red;
\t\t\tcolor: white;
\t\t\t}

\t\t.btn-primary:hover, .btn-secondary:hover {
\t\tbackground-color: darkred;
\t\tborder-color: darkred;
\t\tcolor: white;
\t\t}
\t\tbody.dark {
\t\t\tcolor: #fff !important;
\t\t\tbackground: #333 !important;
\t\t}
\t\tbody.dark .btn-toggle {
\t\t\tbackground: #f1f1f1;
\t\t\tcolor: #333;
\t\t}
\t</style>
\t\t\t\t{# _________________________________________Css____________________________________ #}

\t<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
\t\t<a href=\"{{ path('app_activite_index') }}\">
\t\t\t<button id=\"openBtn\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Retourner à la liste</button>
\t\t</a>
\t\t<a href=\"{{ path('app_activite_edit', {'id': activite.id}) }}\">
\t\t\t<button type=\"button\" class=\"btn btn-secondary\">Mofidier cette activité</button>
\t\t</a>

\t</div>
\t<div class=\"btn-toggle\">Go Nuit</div>

\t<body class=\"light\">
\t\t<table class=\"table\">
\t\t\t<tbody>
\t\t\t\t{# <tr>
\t\t\t\t\t\t\t                <th>Id</th>
\t\t\t\t\t\t\t                <td>{{ activite.id }}</td>
\t\t\t\t\t\t\t            </tr> #}
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<td>{{ activite.nom }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Categorie</th>
\t\t\t\t\t<td>{{ activite.categorie }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Materiel utilise</th>
\t\t\t\t\t<td>{{ activite.materiel }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Intensite</th>
\t\t\t\t\t<td>{{ activite.intensite }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Group musculaire sollicité</th>
\t\t\t\t\t<td>{{ activite.grpMusculaire }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Tenue</th>
\t\t\t\t\t<td>{{ activite.tenue }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Recomendation</th>
\t\t\t\t\t<td>{{ activite.recomendation }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"{{asset('uploads/'~ activite.image)}}\" alt=\"\"></td>
\t\t\t\t</tr>

\t\t\t</tbody>
\t\t</table>

\t</body>
\t<script>

\t\tconst btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

const body = document.body;

if (body.classList.contains('dark')) {

body.classList.add('light')
body.classList.remove('dark')
btnToggle.innerHTML = \"Go Dark\"

} else if (body.classList.contains('light')) {

body.classList.add('dark')
body.classList.remove('light')
btnToggle.innerHTML = \"Go Light\"

}

})
\t</script>
\t{# <a href=\"{{ path('app_activite_index') }}\"><button type=\"button\" class=\"btn btn-outline-danger\">Back</button></a>
\t
\t\t<a href=\"{{ path('app_activite_edit', {'id': activite.id}) }}\">edit</a> #}
\t{# {{ include('activite/_delete_form.html.twig') }} #}
{% endblock %}
", "back/show.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\show.html.twig");
    }
}
