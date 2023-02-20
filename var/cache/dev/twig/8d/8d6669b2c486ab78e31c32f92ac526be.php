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

";
        // line 16
        echo "
th, td {
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #D3D3D3;
}

";
        // line 30
        echo "Ce code crée un tableau avec trois colonnes et trois rangées, et chaque rangée a une couleur de fond différente. Lorsque l'utilisateur passe la souris sur une rangée, sa couleur de fond change pour une autre couleur.



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
        echo "  

\t";
        // line 89
        echo "\t\t";
        // line 93
        echo "
\t\t<div class=\"container-fluid pt-4 px-4\" style=\"bottom:0;\">
 

    ";
        // line 99
        echo "
<!-- Modal -->
";
        // line 123
        echo " ";
        // line 124
        echo "<div class=\"table-responsive\"> 
\t\t\t 
          <div class=\"bg-secondary text-center rounded p-4\">
\t\t\t\t\t<a href=";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_new");
        echo " <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter une nouvelle activité
\t\t\t  </button> </a>  

\t\t\t  ";
        // line 132
        echo "
  ";
        // line 134
        echo "<button id=\"openBtn\"  class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Ajouter une nouvelle activité</button>

<!-- La pop-up -->
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
   ";
        // line 149
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 150
        echo "

 \t\t\t\t\t<div class=\"row g-3 align-items-center \">

\t\t\t\t\t\t";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "nom", [], "any", false, false, false, 154), 'label');
        echo "
\t\t\t\t\t\t";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "nom", [], "any", false, false, false, 155), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "nom", [], "any", false, false, false, 156), 'errors');
        echo "

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row g-3 align-items-center\">
\t\t\t\t\t\t";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "lieu", [], "any", false, false, false, 161), 'label');
        echo "
\t\t\t\t\t\t";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "lieu", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "lieu", [], "any", false, false, false, 163), 'errors');
        echo "

\t\t\t\t\t</div>
 
\t\t\t\t\t<div class=\"row g-3 align-items-center\">

\t\t\t\t\t\t";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "telephone", [], "any", false, false, false, 169), 'label');
        echo "
\t\t\t\t\t\t";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "telephone", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "telephone", [], "any", false, false, false, 171), 'errors');
        echo "

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"row g-3 align-items-center\">

\t\t\t\t\t\t";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "email", [], "any", false, false, false, 178), 'label');
        echo "
\t\t\t\t\t\t";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "email", [], "any", false, false, false, 179), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "email", [], "any", false, false, false, 180), 'errors');
        echo "

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row g-3 align-items-center\">
 
\t\t\t\t\t\t";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "superficie", [], "any", false, false, false, 186), 'label');
        echo "
\t\t\t\t\t\t";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "superficie", [], "any", false, false, false, 187), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "superficie", [], "any", false, false, false, 188), 'errors');
        echo "

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row g-3 align-items-center\">
\t\t\t\t\t\t";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "description", [], "any", false, false, false, 193), 'label');
        echo "
\t\t\t\t\t\t";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "description", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "description", [], "any", false, false, false, 195), 'errors');
        echo "

\t\t\t\t\t</div>

\t\t\t\t\t 
\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "image", [], "any", false, false, false, 201), 'label');
        echo "
\t\t\t\t\t\t";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "image", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "image", [], "any", false, false, false, 203), 'errors');
        echo "

\t\t\t\t\t</div>
\t\t \t<div class=\"row g-3 align-items-center\">
\t\t\t\t\t\t";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "cours", [], "any", false, false, false, 207), 'label');
        echo "
\t\t\t\t\t\t";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "cours", [], "any", false, false, false, 208), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "cours", [], "any", false, false, false, 209), 'errors');
        echo "

\t\t\t\t\t</div>
\t\t    </div>
<button style=\"width: 90px;padding: 5px;\" class=\"btn btn-primary\">";
        // line 213
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 213, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>


\t\t\t\t\t\t";
        // line 216
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), 'form_end');
        echo "
               ";
        // line 218
        echo "
      </div>
    </div>
  </div>
</div>
  ";
        // line 224
        echo "
    ";
        // line 226
        echo "






\t<div>
\t 

 
\t\t\t";
        // line 241
        echo "\t\t\t";
        // line 242
        echo "
\t\t\t<div class=\"table-responsive\"> 
      
      <div id=\"pagination\">
\t\t\t\t\t<a href=\"#\" class=\"previous\">&laquo; Previous</a>
\t\t\t\t\t<a href=\"#\" class=\"next\">Next &raquo;</a>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered\" id=\"myTable\" width=\"100%\" cellspacing=\"0\"> 
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
        // line 262
        echo "
\t\t\t\t\t<th style =\"color:#FF0000\">action</th>


\t\t\t  </tr>
\t\t\t</thead>

\t\t\t";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salles"]) || array_key_exists("salles", $context) ? $context["salles"] : (function () { throw new RuntimeError('Variable "salles" does not exist.', 269, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 270
            echo "\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t<tr>
\t\t\t\t";
            // line 274
            echo "\t\t\t\t<td style=\"font-family: Arial, sans-serif;\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 274), "html", null, true);
            echo "</td>
\t\t\t\t<td   >";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 275), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "lieu", [], "any", false, false, false, 276), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "telephone", [], "any", false, false, false, 277), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "email", [], "any", false, false, false, 278), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "superficie", [], "any", false, false, false, 279), "html", null, true);
            echo "</td>
\t\t\t\t<td  >";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "description", [], "any", false, false, false, 280), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "cours", [], "any", false, false, false, 282));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 283
                echo "\t\t\t\t<ul>
\t\t\t\t<li>";
                // line 284
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 284), "html", null, true);
                echo "</li>
\t\t\t\t
\t\t\t\t</ul>
\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "\t\t\t\t</td> 

\t\t\t\t";
            // line 292
            echo "
\t\t\t\t<td><a href=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteevent", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 293)]), "html", null, true);
            echo "\"><i class=\"bi bi-trash\"></i></a></td>

\t\t\t\t<td><a href=\"";
            // line 295
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 295)]), "html", null, true);
            echo "\"><span class=\"bi bi-cart-fill\"></a></td>
\t\t\t\t<td><a href=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_show", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 296)]), "html", null, true);
            echo "\"><i class=\"bi bi-book\"></i></a></td>

\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t</tbody>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
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
        // line 341
        echo "\t</div>

</body>
<script>

 \t\t\t";
        // line 347
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
        return array (  509 => 347,  502 => 341,  488 => 301,  476 => 296,  472 => 295,  467 => 293,  464 => 292,  460 => 289,  449 => 284,  446 => 283,  442 => 282,  437 => 280,  433 => 279,  429 => 278,  425 => 277,  421 => 276,  417 => 275,  412 => 274,  407 => 270,  403 => 269,  394 => 262,  373 => 242,  371 => 241,  358 => 226,  355 => 224,  348 => 218,  344 => 216,  338 => 213,  331 => 209,  327 => 208,  323 => 207,  316 => 203,  312 => 202,  308 => 201,  299 => 195,  295 => 194,  291 => 193,  283 => 188,  279 => 187,  275 => 186,  266 => 180,  262 => 179,  258 => 178,  248 => 171,  244 => 170,  240 => 169,  231 => 163,  227 => 162,  223 => 161,  215 => 156,  211 => 155,  207 => 154,  201 => 150,  198 => 149,  182 => 134,  179 => 132,  172 => 127,  167 => 124,  165 => 123,  161 => 99,  155 => 93,  153 => 89,  149 => 86,  97 => 35,  91 => 30,  78 => 16,  68 => 5,  58 => 4,  35 => 1,);
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

{# thead {
  background-color:#C0C0C0;
} #}

th, td {
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #D3D3D3;
}

{# tr:hover {
  background-color: #D3D3D3;
} #}
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
  

\t{# <div class=\"row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0\"> #}
\t\t{# <form class=\"d-flex\" action=\"chercher_salle\" method=\"GET\">
\t\t\t<input class=\"form-control me-2\" name=\"dhia\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t    </form> #}

\t\t<div class=\"container-fluid pt-4 px-4\" style=\"bottom:0;\">
 

    {#_________________________________ Partie pop-up ____________________________________________________#}
{# <button type=\"button\"   class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"> Ajouter une salle</button> #}

<!-- Modal -->
{# <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
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
</div> #}
 {# <!-- Modal-----------------------------------DEBUT  POP UP--------- ---------- #}
<div class=\"table-responsive\"> 
\t\t\t 
          <div class=\"bg-secondary text-center rounded p-4\">
\t\t\t\t\t<a href={{path('app_activite_new')}} <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter une nouvelle activité
\t\t\t  </button> </a>  

\t\t\t  {# <button type=\"button\"   class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"> Ajouter une salle</button> #}

  {# <!-- Modal-----------------------------------DEBUT  POP UP--------- ---------- #}
<button id=\"openBtn\"  class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Ajouter une nouvelle activité</button>

<!-- La pop-up -->
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
   {# --------------------------------------FORM START-------------------------------------- #}
      {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}
\t\t\t\t\t) }}

 \t\t\t\t\t<div class=\"row g-3 align-items-center \">

\t\t\t\t\t\t{{form_label(form.nom)}}
\t\t\t\t\t\t{{form_widget(form.nom, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.nom)}}

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row g-3 align-items-center\">
\t\t\t\t\t\t{{form_label(form.lieu)}}
\t\t\t\t\t\t{{form_widget(form.lieu, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.lieu)}}

\t\t\t\t\t</div>
 
\t\t\t\t\t<div class=\"row g-3 align-items-center\">

\t\t\t\t\t\t{{form_label(form.telephone)}}
\t\t\t\t\t\t{{form_widget(form.telephone, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.telephone) }}

\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"row g-3 align-items-center\">

\t\t\t\t\t\t{{form_label(form.email)}}
\t\t\t\t\t\t{{form_widget(form.email, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.email) }}

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row g-3 align-items-center\">
 
\t\t\t\t\t\t{{form_label(form.superficie)}}
\t\t\t\t\t\t{{form_widget(form.superficie, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.superficie) }}

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row g-3 align-items-center\">
\t\t\t\t\t\t{{form_label(form.description)}}
\t\t\t\t\t\t{{form_widget(form.description, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.description) }}

\t\t\t\t\t</div>

\t\t\t\t\t 
\t\t\t\t\t<div class=\"row g-3 align-items-center \">
\t\t\t\t\t\t{{form_label(form.image)}}
\t\t\t\t\t\t{{form_widget(form.image, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.image)}}

\t\t\t\t\t</div>
\t\t \t<div class=\"row g-3 align-items-center\">
\t\t\t\t\t\t{{form_label(form.cours)}}
\t\t\t\t\t\t{{form_widget(form.cours, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.cours) }}

\t\t\t\t\t</div>
\t\t    </div>
<button style=\"width: 90px;padding: 5px;\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>


\t\t\t\t\t\t{{ form_end(form) }}
               {# --------------------------------------FORM END-------------------------------------- #}

      </div>
    </div>
  </div>
</div>
  {# <!-- Modal-----------------------------------FIN DU POP UP--------- ---------- #}

    {#_________________________________ Partie pop-up ____________________________________________________#}







\t<div>
\t 

 
\t\t\t{# <a href={{path('app_salle_new')}} <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter un une nouvelle salle
\t\t\t  </button> </a>  
\t\t\t  #}
\t\t\t{# _________PARTIE POP-UP__________________________________________________________ #}

\t\t\t<div class=\"table-responsive\"> 
      
      <div id=\"pagination\">
\t\t\t\t\t<a href=\"#\" class=\"previous\">&laquo; Previous</a>
\t\t\t\t\t<a href=\"#\" class=\"next\">Next &raquo;</a>
\t\t\t</div>
\t\t\t<table class=\"table table-bordered\" id=\"myTable\" width=\"100%\" cellspacing=\"0\"> 
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
