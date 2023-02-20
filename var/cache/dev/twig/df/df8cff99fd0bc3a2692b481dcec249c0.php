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

/* back/show_salle.html.twig */
class __TwigTemplate_fc95d12cb894cddbbb40247936b94834 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/show_salle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/show_salle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/show_salle.html.twig", 1);
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
        echo "\t<style>
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
.btn btn-primary
{
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
button:hover {
    background-color: darkred;
  }
\t</style>







  <div class=\"button-side\" role=\"group\" aria-label=\"Basic example\">
 <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        echo "\"> <button style=\"background-color: red; color: white; border: none; padding: 10px 20px; border-radius: 5px;\">Back to list</button></a>
  \t<a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118)]), "html", null, true);
        echo "\"><button style=\"background-color: red; color: white; border: none; padding: 10px 20px; border-radius: 5px;\">Mofidier cette activité</button></a>
  ";
        // line 120
        echo "        <div class=\"btn-toggle\">Go Nuit</div>

</div>
\t 
<body class=\"light\">
\t<table class=\"table\">
\t\t<tbody>
\t\t\t";
        // line 131
        echo "\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 133, $this->source); })()), "nom", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Lieu</th>
\t\t\t\t<td>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 137, $this->source); })()), "lieu", [], "any", false, false, false, 137), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Téléphone</th>
\t\t\t\t<td>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 141, $this->source); })()), "telephone", [], "any", false, false, false, 141), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 145, $this->source); })()), "email", [], "any", false, false, false, 145), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Superficie</th>
\t\t\t\t<td>";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 149, $this->source); })()), "superficie", [], "any", false, false, false, 149), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 153, $this->source); })()), "description", [], "any", false, false, false, 153), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t 
\t\t\t<tr>
\t\t\t\t<th>Image</th>
\t\t\t\t<td>
\t\t\t\t\t<img   class=\"img-thumbnail\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 159, $this->source); })()), "image", [], "any", false, false, false, 159))), "html", null, true);
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
        // line 192
        echo " \t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/show_salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 192,  245 => 159,  236 => 153,  229 => 149,  222 => 145,  215 => 141,  208 => 137,  201 => 133,  197 => 131,  188 => 120,  184 => 118,  180 => 117,  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}salle #}
{# {% endblock %} #}

{% block body %}
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
.btn btn-primary
{
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
button:hover {
    background-color: darkred;
  }
\t</style>







  <div class=\"button-side\" role=\"group\" aria-label=\"Basic example\">
 <a href=\"{{ path('app_salle_index') }}\"> <button style=\"background-color: red; color: white; border: none; padding: 10px 20px; border-radius: 5px;\">Back to list</button></a>
  \t<a href=\"{{ path('app_salle_edit', {'id': salle.id}) }}\"><button style=\"background-color: red; color: white; border: none; padding: 10px 20px; border-radius: 5px;\">Mofidier cette activité</button></a>
  {# <button type=\"button\" class=\"btn btn-secondary\">Right</button> #}
        <div class=\"btn-toggle\">Go Nuit</div>

</div>
\t 
<body class=\"light\">
\t<table class=\"table\">
\t\t<tbody>
\t\t\t{# <tr>
\t\t\t                <th>Id</th>
\t\t\t                <td>{{ salle.id }}</td>
\t\t\t            </tr> #}
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>{{ salle.nom }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Lieu</th>
\t\t\t\t<td>{{ salle.lieu }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Téléphone</th>
\t\t\t\t<td>{{ salle.telephone }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>{{ salle.email }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Superficie</th>
\t\t\t\t<td>{{ salle.superficie }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>{{ salle.description }}</td>
\t\t\t</tr>
\t\t\t 
\t\t\t<tr>
\t\t\t\t<th>Image</th>
\t\t\t\t<td>
\t\t\t\t\t<img   class=\"img-thumbnail\" src=\"{{asset('uploads/'~ salle.image)}}\" alt=\"\"></td>
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
\t{# <a href=\"{{ path('app_salle_index') }}\"><button type=\"button\" class=\"btn btn-outline-danger\">Back</button></a>

\t<a href=\"{{ path('app_salle_edit', {'id': salle.id}) }}\">edit</a> #}
 \t{# {{ include('salle/_delete_form.html.twig') }} #}
{% endblock %}
", "back/show_salle.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\show_salle.html.twig");
    }
}
