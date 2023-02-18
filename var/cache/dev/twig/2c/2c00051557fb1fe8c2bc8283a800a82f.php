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
        echo "  <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
 <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo "\"> <button type=\"button\"class=\"btn btn-primary\" >Back to list</button></a>
  \t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-secondary\">Mofidier cette activité</button></a>
  ";
        // line 11
        echo "      <div class=\"btn-toggle\">Go Nuit</div>

</div>
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
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
body {
    /* background: var(--fond); */
}
hr {
    width: 200px;
}
h1 {
    text-align: center;
    padding-top: 70px;
    /* color: var(--ecriture); */
}
.contenu {
    padding: 50px 10%;
    text-align: justify;
    /* color: var(--ecriture); */

}
.btn-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #333;
    color: #fff;
    border: 1px solid #333;
    display: flex;
    justify-content: center;
    align-items: center;    
    cursor: pointer;
}

body.dark {
    color: #fff!important;
    background: #333!important;
}
body.dark .btn-toggle {
    background: #f1f1f1;
    color: #333;
}
\t</style>

<body class=\"light\">
\t<table class=\"table\">
\t\t<tbody>
\t\t\t";
        // line 106
        echo "\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 108, $this->source); })()), "nom", [], "any", false, false, false, 108), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Categorie</th>
\t\t\t\t<td>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 112, $this->source); })()), "categorie", [], "any", false, false, false, 112), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Materiel utilise</th>
\t\t\t\t<td>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 116, $this->source); })()), "materiel", [], "any", false, false, false, 116), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Intensite</th>
\t\t\t\t<td>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 120, $this->source); })()), "intensite", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Group musculaire sollicité</th>
\t\t\t\t<td>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 124, $this->source); })()), "grpMusculaire", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Tenue</th>
\t\t\t\t<td>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 128, $this->source); })()), "tenue", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Recomendation</th>
\t\t\t\t<td>";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 132, $this->source); })()), "recomendation", [], "any", false, false, false, 132), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Image</th>
\t\t\t\t<td>
\t\t\t\t\t<img   class=\"img-thumbnail\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 137, $this->source); })()), "image", [], "any", false, false, false, 137))), "html", null, true);
        echo "\" alt=\"\"></td>
\t\t\t</tr>

\t\t</tbody>
\t</table>

</body>
<script>

const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

    const body = document.body;

    if(body.classList.contains('dark')){

        body.classList.add('light')
        body.classList.remove('dark')
        btnToggle.innerHTML = \"Go Dark\"

    } else if(body.classList.contains('light')){

        body.classList.add('dark')
        body.classList.remove('light')
        btnToggle.innerHTML = \"Go Light\"

    }

})
</script>
\t";
        // line 171
        echo " \t";
        
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
        return array (  281 => 171,  247 => 137,  239 => 132,  232 => 128,  225 => 124,  218 => 120,  211 => 116,  204 => 112,  197 => 108,  193 => 106,  100 => 11,  96 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Activite
{% endblock %}

{% block body %}
  <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
 <a href=\"{{ path('app_activite_index') }}\"> <button type=\"button\"class=\"btn btn-primary\" >Back to list</button></a>
  \t<a href=\"{{ path('app_activite_edit', {'id': activite.id}) }}\"><button type=\"button\" class=\"btn btn-secondary\">Mofidier cette activité</button></a>
  {# <button type=\"button\" class=\"btn btn-secondary\">Right</button> #}
      <div class=\"btn-toggle\">Go Nuit</div>

</div>
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
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
body {
    /* background: var(--fond); */
}
hr {
    width: 200px;
}
h1 {
    text-align: center;
    padding-top: 70px;
    /* color: var(--ecriture); */
}
.contenu {
    padding: 50px 10%;
    text-align: justify;
    /* color: var(--ecriture); */

}
.btn-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #333;
    color: #fff;
    border: 1px solid #333;
    display: flex;
    justify-content: center;
    align-items: center;    
    cursor: pointer;
}

body.dark {
    color: #fff!important;
    background: #333!important;
}
body.dark .btn-toggle {
    background: #f1f1f1;
    color: #333;
}
\t</style>

<body class=\"light\">
\t<table class=\"table\">
\t\t<tbody>
\t\t\t{# <tr>
\t\t\t                <th>Id</th>
\t\t\t                <td>{{ activite.id }}</td>
\t\t\t            </tr> #}
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>{{ activite.nom }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Categorie</th>
\t\t\t\t<td>{{ activite.categorie }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Materiel utilise</th>
\t\t\t\t<td>{{ activite.materiel }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Intensite</th>
\t\t\t\t<td>{{ activite.intensite }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Group musculaire sollicité</th>
\t\t\t\t<td>{{ activite.grpMusculaire }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Tenue</th>
\t\t\t\t<td>{{ activite.tenue }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Recomendation</th>
\t\t\t\t<td>{{ activite.recomendation }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Image</th>
\t\t\t\t<td>
\t\t\t\t\t<img   class=\"img-thumbnail\" src=\"{{asset('uploads/'~ activite.image)}}\" alt=\"\"></td>
\t\t\t</tr>

\t\t</tbody>
\t</table>

</body>
<script>

const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

    const body = document.body;

    if(body.classList.contains('dark')){

        body.classList.add('light')
        body.classList.remove('dark')
        btnToggle.innerHTML = \"Go Dark\"

    } else if(body.classList.contains('light')){

        body.classList.add('dark')
        body.classList.remove('light')
        btnToggle.innerHTML = \"Go Light\"

    }

})
</script>
\t{# <a href=\"{{ path('app_activite_index') }}\"><button type=\"button\" class=\"btn btn-outline-danger\">Back</button></a>

\t<a href=\"{{ path('app_activite_edit', {'id': activite.id}) }}\">edit</a> #}
 \t{# {{ include('activite/_delete_form.html.twig') }} #}
{% endblock %}
", "back/show.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\show.html.twig");
    }
}
