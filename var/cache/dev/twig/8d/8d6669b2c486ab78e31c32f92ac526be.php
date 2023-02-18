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

/* back/table.html.twig */
class __TwigTemplate_34b9f76db9f2392c62d350692dc8882c extends Template
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
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/table.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/table.html.twig", 1);
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
        echo "

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

thead {
  background-color: #D3D3D3;
}

th, td {
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #D3D3D3;
}

tr:hover {
  background-color: #D3D3D3;
}
Ce code crée un tableau avec trois colonnes et trois rangées, et chaque rangée a une couleur de fond différente. Lorsque l'utilisateur passe la souris sur une rangée, sa couleur de fond change pour une autre couleur.



";
        // line 35
        echo "
\t\t 
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



</style>
 
\t<!-- Table Start -->
 
\t";
        // line 86
        echo "<body class=\"light\">
\t  <div class=\"btn-toggle\">Go Nuit</div>


\t<div class=\"row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0\">
\t\t";
        // line 95
        echo "
\t\t<div class=\"container-fluid pt-4 px-4\" style=\"bottom:0;\">
 

    ";
        // line 100
        echo "<button type=\"button\"   class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"> Ajouter une salle</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une salle</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
 
    \t\t\t\t
\t\t\t\t\t<div class=\"form-group\" style=\"position: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_start');
        echo "
\t\t\t";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'widget');
        echo "
\t\t\t<button type=\"submit\">Save</button>
\t\t\t";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        echo "
\t\t    </div>

      </div>
    </div>
  </div>
</div>
 

    ";
        // line 128
        echo "






\t<div>
\t 

 
\t\t\t<a href=";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_new");
        echo " <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter un une nouvelle salle
\t\t\t  </button> </a>  
\t\t\t 
\t\t\t";
        // line 144
        echo "
\t\t\t<div class=\"table-responsive\"> 
\t\t\t<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"> 
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t  \t\t<th style =\"color:#FF0000\">#</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Nom</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Lieu</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Telephone</th>
\t\t\t\t    <th style =\"color:#FF0000\">Email</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">Superficie</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">Description</th>
 \t\t\t  \t\t<th style =\"color:#FF0000\">Activité</th>

\t\t\t\t\t";
        // line 159
        echo "
\t\t\t\t\t<th style =\"color:#FF0000\">action</th>


\t\t\t  </tr>
\t\t\t</thead>

\t\t\t";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 166, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 167
            echo "\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t<tr>
\t\t\t\t";
            // line 171
            echo "\t\t\t\t<td style=\"font-family: Arial, sans-serif;\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 171), "html", null, true);
            echo "</td>
\t\t\t\t<td   >";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 172), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "lieu", [], "any", false, false, false, 173), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "telephone", [], "any", false, false, false, 174), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "email", [], "any", false, false, false, 175), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "superficie", [], "any", false, false, false, 176), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 177), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "cours", [], "any", false, false, false, 179));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 180
                echo "\t\t\t\t<ul>
\t\t\t\t<li>";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 181), "html", null, true);
                echo "</li>
\t\t\t\t
\t\t\t\t</ul>
\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "\t\t\t\t</td> 

\t\t\t\t";
            // line 189
            echo "
\t\t\t\t<td><a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteevent", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            echo "\"><i class=\"bi bi-trash\"></i></a></td>

\t\t\t\t<td><a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 192)]), "html", null, true);
            echo "\"><span class=\"bi bi-cart-fill\"></a></td>
\t\t\t\t<td><a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_show", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            echo "\"><i class=\"bi bi-book\"></i></a></td>

\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t</tbody>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo " 
\t\t\t 

 
\t\t\t\t</table>
\t\t\t\t 
\t\t\t\t</div>
\t\t\t\t
\t\t</div>
</div>

<!-- Table End -->
";
        // line 238
        echo "\t</div>

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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 238,  332 => 198,  320 => 193,  316 => 192,  311 => 190,  308 => 189,  304 => 186,  293 => 181,  290 => 180,  286 => 179,  281 => 177,  277 => 176,  273 => 175,  269 => 174,  265 => 173,  261 => 172,  256 => 171,  251 => 167,  247 => 166,  238 => 159,  222 => 144,  215 => 139,  202 => 128,  190 => 118,  185 => 116,  181 => 115,  164 => 100,  158 => 95,  151 => 86,  99 => 35,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}


{% block body %}


<style>
table {
  border-collapse: collapse;
  width: 100%;
}

thead {
  background-color: #D3D3D3;
}

th, td {
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #D3D3D3;
}

tr:hover {
  background-color: #D3D3D3;
}
Ce code crée un tableau avec trois colonnes et trois rangées, et chaque rangée a une couleur de fond différente. Lorsque l'utilisateur passe la souris sur une rangée, sa couleur de fond change pour une autre couleur.



{# -------------------------------------------------------- #}

\t\t 
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



</style>
 
\t<!-- Table Start -->
 
\t{# _______________________________________Partie ajax rechargement d'un page web______________________________ #}
<body class=\"light\">
\t  <div class=\"btn-toggle\">Go Nuit</div>


\t<div class=\"row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0\">
\t\t{# <form class=\"d-flex\" action=\"chercher_salle\" method=\"GET\">
\t\t\t<input class=\"form-control me-2\" name=\"dhia\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t    </form> #}

\t\t<div class=\"container-fluid pt-4 px-4\" style=\"bottom:0;\">
 

    {#_________________________________ Partie pop-up ____________________________________________________#}
<button type=\"button\"   class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"> Ajouter une salle</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une salle</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
 
    \t\t\t\t
\t\t\t\t\t<div class=\"form-group\" style=\"position: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t{{ form_start(form) }}
\t\t\t{{ form_widget(form) }}
\t\t\t<button type=\"submit\">Save</button>
\t\t\t{{ form_end(form) }}
\t\t    </div>

      </div>
    </div>
  </div>
</div>
 

    {#_________________________________ Partie pop-up ____________________________________________________#}







\t<div>
\t 

 
\t\t\t<a href={{path('app_salle_new')}} <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter un une nouvelle salle
\t\t\t  </button> </a>  
\t\t\t 
\t\t\t{# _________PARTIE POP-UP__________________________________________________________ #}

\t\t\t<div class=\"table-responsive\"> 
\t\t\t<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"> 
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t  \t\t<th style =\"color:#FF0000\">#</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Nom</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Lieu</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Telephone</th>
\t\t\t\t    <th style =\"color:#FF0000\">Email</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">Superficie</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">Description</th>
 \t\t\t  \t\t<th style =\"color:#FF0000\">Activité</th>

\t\t\t\t\t{# <th style =\"color:#FF0000\">Image</th> #}

\t\t\t\t\t<th style =\"color:#FF0000\">action</th>


\t\t\t  </tr>
\t\t\t</thead>

\t\t\t{% for p in salles %}
\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t<tr>
\t\t\t\t{# <th scope=\"row\">1</th> #}
\t\t\t\t<td style=\"font-family: Arial, sans-serif;\" >{{p.id}}</td>
\t\t\t\t<td   >{{p.nom}}</td>
\t\t\t\t<td  >{{p.lieu}}</td>
\t\t\t\t<td  >{{p.telephone}}</td>
\t\t\t\t<td  >{{p.email}}</td>
\t\t\t\t<td  >{{p.superficie}}</td>
\t\t\t\t<td  >{{p.description}}</td>
\t\t\t\t<td>
\t\t\t\t{% for c in p.cours %}
\t\t\t\t<ul>
\t\t\t\t<li>{{c.nom}}</li>
\t\t\t\t
\t\t\t\t</ul>
\t\t\t
\t\t\t\t{% endfor %}
\t\t\t\t</td> 

\t\t\t\t{# <td> <img class=\"img-thumbnail\" src=\"{{asset('uploads/'~ p.image)}}\" alt=\"\" ></td> #}

\t\t\t\t<td><a href=\"{{path('deleteevent',{'id':p.id})}}\"><i class=\"bi bi-trash\"></i></a></td>

\t\t\t\t<td><a href=\"{{path('app_salle_edit',{'id':p.id})}}\"><span class=\"bi bi-cart-fill\"></a></td>
\t\t\t\t<td><a href=\"{{path('app_salle_show',{'id':p.id})}}\"><i class=\"bi bi-book\"></i></a></td>

\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t</tbody>
\t\t\t{% endfor %} 
\t\t\t 

 
\t\t\t\t</table>
\t\t\t\t 
\t\t\t\t</div>
\t\t\t\t
\t\t</div>
</div>

<!-- Table End -->
{# <title>AJAX avec Symfony</title>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
      \$(document).ready(function() {
        // Lorsque l'utilisateur clique sur le bouton \"Ajouter\"
        \$(\"#btn-ajouter\").click(function() {
          // Envoie une requête AJAX pour récupérer la vue d'ajout
          \$.ajax({
            url: \"{{ path('app_salle_new_ajax') }}\",
            type: \"GET\",
            success: function(data) {
              // Affiche la vue d'ajout dans la div \"zone-ajout\"
              \$(\"#zone-ajout\").html(data);
            }
          });
        });
      });
    </script>
  </head>
  <body>
    <h1>Liste des éléments</h1>
    <ul>
      <li>Elément 1</li>
      <li>Elément 2</li>
      <li>Elément 3</li>
    </ul>
    <button id=\"btn-ajouter\">Ajouter une salle</button>
    <div id=\"zone-ajout\"><h2>Liste des éléments</h2></div> #}
\t</div>

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
{% endblock %}



 {# <form action=\"ajouter_salle\" method=\"GET\">
            
\t\t\t<div class=\"mb-3\">
                <label for=\"exampleInputEmail1\" class=\"form-label\">nom</label>
                <input name=\"nom\" placeholder=\"Nom\" type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                <div id=\"emailHelp\" class=\"form-text\"> 
                </div>
            </div>

            <div class=\"mb-3\">
                <label for=\"exampleInputPassword1\" class=\"form-label\">lieu</label>
                <input name=\"lieu\" placeholder=\"lieu\" type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\">
            </div>

             <div class=\"mb-3\">
                <label for=\"exampleInputPassword1\" class=\"form-label\">telephone</label>
                <input name=\"telephone\" placeholder=\"lieu\" type=\"telephone\" class=\"form-control\" id=\"exampleInputPassword1\">
            </div>


\t\t\t <div class=\"mb-3\">
                <label for=\"exampleInputPassword1\" class=\"form-label\">email</label>
                <input name=\"email\"  placeholder=\"Email\" type=\"email\" class=\"form-control\" id=\"exampleInputPassword1\">
            </div>

\t\t\t <div class=\"mb-3\">
                <label for=\"exampleInputPassword1\" class=\"form-label\">superficie</label>
                <input name=\"superficie\" placeholder=\"Superficie\" type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\">
            </div>
\t\t\t <div class=\"mb-3\">
                <label for=\"exampleInputPassword1\" class=\"form-label\">description</label>
                <input name=\"description\" placeholder=\"Déscription\" type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\">
            </div>

            <button type=\"submit\" href={{path('new1')}} class=\"btn btn-primary\">Ajouter
            </button>
        </form>   #}
 \t\t\t\t\t\t\t\t\t\t\t", "back/table.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\table.html.twig");
    }
}
