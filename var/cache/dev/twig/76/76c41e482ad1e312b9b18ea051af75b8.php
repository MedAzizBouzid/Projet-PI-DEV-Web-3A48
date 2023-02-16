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

/* back/table_act.html.twig */
class __TwigTemplate_7580618f823f949c6f854cc05dd57b44 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/table_act.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/table_act.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/table_act.html.twig", 1);
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
        echo "\t<!-- Table Start -->
\t
\t<div class=\"row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0\">
\t\t<form class=\"d-flex\" action=\"chercher_salle\" method=\"GET\">
\t\t\t<input class=\"form-control me-2\" name=\"dhia\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t    </form>

\t\t<div class=\"container-fluid pt-4 px-4\" style=\"bottom:0;\">
 

    ";
        // line 17
        echo "<button type=\"button\"   class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
  Ajouter une salle
</button>

    ";
        // line 22
        echo "

    ";
        // line 25
        echo "
<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un une nouvelle activité</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
 
    \t\t\t\t
\t\t\t\t\t";
        // line 44
        echo "
      </div>
    </div>
  </div>
</div>
 

    ";
        // line 52
        echo "






\t<div>
\t\t\t\t\t\t\t";
        // line 67
        echo "
";
        // line 73
        echo "
 \t\t 
\t\t\t<a href=";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_new");
        echo " <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter un une nouvelle activité
\t\t\t  </button> </a>  
\t\t\t 
\t\t\t";
        // line 80
        echo "
\t\t\t<div class=\"table-responsive\"> 
\t\t\t 
\t\t\t\t\t\t";
        // line 88
        echo "
\t\t";
        // line 90
        echo "
\t\t\t
";
        // line 99
        echo "
\t\t";
        // line 101
        echo "\t\t\t<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"> 
\t\t\t<thead>
\t\t\t  <tr> 
\t\t\t  \t\t<th style =\"color:#FF0000\">#id</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Nom</th>
\t\t\t\t\t<th style =\"color:#FF0000\">categorie</th>
 \t\t\t    \t<th style =\"color:#FF0000\">materiel_utilise</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">instensite</th>

 \t\t\t  \t\t<th style =\"color:#FF0000\">Group musculaire sollicité</th>

 \t\t\t  \t\t<th style =\"color:#FF0000\">tenu</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Recomendation</th>
\t\t\t\t\t<th style =\"color:#FF0000\">image</th>
\t\t\t\t\t";
        // line 116
        echo "
\t\t\t  </tr>
\t\t\t</thead>

\t\t\t";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 121
            echo "\t\t\t<tbody>
\t\t \t\t\t\t
\t\t\t<tr>
 \t\t\t\t<td >";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 124), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 125), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 126), "html", null, true);
            echo "</td>
\t\t\t    <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "materiel", [], "any", false, false, false, 127), "html", null, true);
            echo "</td>
 \t\t\t\t<td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "intensite", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "GRPmusculaire", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "tenue", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "recomendation", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
\t\t\t\t";
            // line 133
            echo "\t\t\t\t";
            // line 134
            echo "
     
 \t\t\t\t";
            // line 137
            echo "\t\t\t \t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            echo "\"><i class=\"bi bi-trash\"></i>
</a></td>

\t\t\t<td><a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            echo "\"><span class=\"bi bi-cart-fill\"></span></a></td>
\t\t\t\t<td><a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            echo "\">Details</a></td>
 \t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t</tbody> 
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo " 
\t\t\t 

 
\t\t\t\t</table>
\t\t\t\t</div>
\t\t</div>
</div>
<!-- Table End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/table_act.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 145,  233 => 141,  229 => 140,  222 => 137,  218 => 134,  216 => 133,  212 => 131,  208 => 130,  204 => 129,  200 => 128,  196 => 127,  192 => 126,  188 => 125,  184 => 124,  179 => 121,  175 => 120,  169 => 116,  153 => 101,  150 => 99,  146 => 90,  143 => 88,  138 => 80,  131 => 75,  127 => 73,  124 => 67,  114 => 52,  105 => 44,  91 => 25,  87 => 22,  81 => 17,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}


{% block body %}
\t<!-- Table Start -->
\t
\t<div class=\"row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0\">
\t\t<form class=\"d-flex\" action=\"chercher_salle\" method=\"GET\">
\t\t\t<input class=\"form-control me-2\" name=\"dhia\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t    </form>

\t\t<div class=\"container-fluid pt-4 px-4\" style=\"bottom:0;\">
 

    {#_________________________________ Partie pop-up ____________________________________________________#}
<button type=\"button\"   class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
  Ajouter une salle
</button>

    {#_________________________________ Partie pop-up ____________________________________________________#}


    {#_________________________________ Partie pop-up ____________________________________________________#}

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter un une nouvelle activité</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
 
    \t\t\t\t
\t\t\t\t\t{# <div class=\"form-group\" style=\"position: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Save</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </div> #}

      </div>
    </div>
  </div>
</div>
 

    {#_________________________________ Partie pop-up ____________________________________________________#}







\t<div>
\t\t\t\t\t\t\t{# __________________________________________ #}
{# 
\t\t\t\t\t\t\t<form action=\"find_Salle\" method=\"GET\">
\t\t\t\t\t\t\t\t<input type=\"text\"  name=\"find\" placeholder=\"Entrez un lieu...\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-light m-2\" type=\"submit\">Rechercher</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div> #}

{# 
\t\t<form  class=\"d-flex\" action=\"find_Salle\" method=\"GET\">
\t\t\t\t<input class=\"form-control me-2\" name=\"findbyname\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t\t\t</form> #}

 \t\t 
\t\t\t<a href={{path('app_activite_new')}} <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter un une nouvelle activité
\t\t\t  </button> </a>  
\t\t\t 
\t\t\t{# _________PARTIE POP-UP__________________________________________________________ #}

\t\t\t<div class=\"table-responsive\"> 
\t\t\t 
\t\t\t\t\t\t{# {% for p in activite %}


\t\t\t<img src={{p.image}} alt=\"Une belle image\">
\t\t\t\t\t\t{% endfor %} #}

\t\t{# ________________________________________Test affiche d'image _________________________________________________________________ #}

\t\t\t
{# 
\t\t\t\t\t{% for p in activite %}
<ul>
  <li><img src=\"chemin/vers/image1.jpg\" alt=\"Description de l'image 1\">{{p.image}}</li>
 
</ul>\t\t\t\t\t\t\t{% endfor %}
 #}

\t\t{# _________________________________________________________________________________________________________ #}
\t\t\t<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"> 
\t\t\t<thead>
\t\t\t  <tr> 
\t\t\t  \t\t<th style =\"color:#FF0000\">#id</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Nom</th>
\t\t\t\t\t<th style =\"color:#FF0000\">categorie</th>
 \t\t\t    \t<th style =\"color:#FF0000\">materiel_utilise</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">instensite</th>

 \t\t\t  \t\t<th style =\"color:#FF0000\">Group musculaire sollicité</th>

 \t\t\t  \t\t<th style =\"color:#FF0000\">tenu</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Recomendation</th>
\t\t\t\t\t<th style =\"color:#FF0000\">image</th>
\t\t\t\t\t{# <th style =\"color:#FF0000\">action</th> #}

\t\t\t  </tr>
\t\t\t</thead>

\t\t\t{% for p in activite %}
\t\t\t<tbody>
\t\t \t\t\t\t
\t\t\t<tr>
 \t\t\t\t<td >{{p.id}}</td>
\t\t\t\t<td>{{p.nom}}</td>
\t\t\t\t<td>{{p.categorie}}</td>
\t\t\t    <td>{{p.materiel}}</td>
 \t\t\t\t<td>{{p.intensite}}</td>
\t\t\t\t<td>{{p.GRPmusculaire}}</td>
\t\t\t\t<td>{{p.tenue}}</td>
\t\t\t\t<td>{{p.recomendation}}</td>
\t\t\t\t{# <td> <img class=\"img-thumbnail\" src=\"{{asset('uploads/'~ p.image)}}\" alt=\"\" ></td> #}
\t\t\t\t{# <td>{{p.image}}</td> #}

     
 \t\t\t\t{# <td><a href=\"{{path('app_activite_delete',{'id':p.id})}}\"><img style=\"width:20%;height:10%;\"src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPiVlUmob19QYwhukJjI15xf3TGNxw8x9wOSssILAixg&s\"></a></td> #}
\t\t\t \t\t\t\t<td><a href=\"{{path('app_activite_delete',{'id':p.id})}}\"><i class=\"bi bi-trash\"></i>
</a></td>

\t\t\t<td><a href=\"{{path('app_activite_edit',{'id':p.id})}}\"><span class=\"bi bi-cart-fill\"></span></a></td>
\t\t\t\t<td><a href=\"{{path('app_activite_show',{'id':p.id})}}\">Details</a></td>
 \t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t</tbody> 
\t\t\t {% endfor %} 
\t\t\t 

 
\t\t\t\t</table>
\t\t\t\t</div>
\t\t</div>
</div>
<!-- Table End -->
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
 \t\t\t\t\t\t\t\t\t\t\t", "back/table_act.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev1\\templates\\back\\table_act.html.twig");
    }
}
