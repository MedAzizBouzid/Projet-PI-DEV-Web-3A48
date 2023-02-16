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
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une salle</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
 
    \t\t\t\t
\t\t\t\t\t<div class=\"form-group\" style=\"position: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Save</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </div>

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
 
\t\t\t<a href=";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_new");
        echo " <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter un une nouvelle salle
\t\t\t  </button> </a>  
\t\t\t 
\t\t\t";
        // line 80
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
\t\t\t\t\t";
        // line 93
        echo "
\t\t\t\t\t<th style =\"color:#FF0000\">action</th>

\t\t\t  </tr>
\t\t\t</thead>

\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 100
            echo "\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t<tr>
\t\t\t\t";
            // line 104
            echo "\t\t\t\t<td style=\"font-family: Arial, sans-serif;\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
\t\t\t\t<td   >";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "lieu", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "telephone", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "email", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "superficie", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
\t\t\t\t";
            // line 112
            echo "
\t\t\t\t<td><a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteevent", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\"><i class=\"bi bi-trash\"></i></a></td>

\t\t\t\t<td><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\"><span class=\"bi bi-cart-fill\"></a></td>

\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t</tbody>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
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
        return "back/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 120,  220 => 115,  215 => 113,  212 => 112,  208 => 110,  204 => 109,  200 => 108,  196 => 107,  192 => 106,  188 => 105,  183 => 104,  178 => 100,  174 => 99,  166 => 93,  152 => 80,  145 => 75,  141 => 73,  138 => 67,  128 => 52,  116 => 42,  111 => 40,  107 => 39,  91 => 25,  87 => 22,  81 => 17,  68 => 5,  58 => 4,  35 => 1,);
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
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter une salle</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
 
    \t\t\t\t
\t\t\t\t\t<div class=\"form-group\" style=\"position: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Save</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </div>

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
\t\t\t\t{# <td> <img class=\"img-thumbnail\" src=\"{{asset('uploads/'~ p.image)}}\" alt=\"\" ></td> #}

\t\t\t\t<td><a href=\"{{path('deleteevent',{'id':p.id})}}\"><i class=\"bi bi-trash\"></i></a></td>

\t\t\t\t<td><a href=\"{{path('app_salle_edit',{'id':p.id})}}\"><span class=\"bi bi-cart-fill\"></a></td>

\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t</tbody>
\t\t\t{% endfor %} 
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
 \t\t\t\t\t\t\t\t\t\t\t", "back/table.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev1\\templates\\back\\table.html.twig");
    }
}
