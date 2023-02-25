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
        echo "<style>
th{
   color: red;
}
</style>
\t<!-- Table Start -->
\t
\t";
        // line 20
        echo "
    ";
        // line 25
        echo "
    ";
        // line 27
        echo "

    ";
        // line 30
        echo "
<!-- Modal -->
";
        // line 49
        echo "
      ";
        // line 53
        echo " 
 

    ";
        // line 57
        echo "





 
\t\t\t\t\t\t\t";
        // line 71
        echo "
";
        // line 77
        echo "
 \t\t 
\t\t
\t\t\t 
 
\t\t\t<div class=\"table-responsive\"> 
\t\t\t 
          <div class=\"bg-secondary text-center rounded p-4\">
\t\t\t\t\t<a href=";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_new");
        echo " <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter une nouvelle activité
\t\t\t  </button> </a>  

\t\t\t  ";
        // line 90
        echo "
  ";
        // line 92
        echo "<button id=\"openBtn\"  class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Ajouter une nouvelle activité</button>
<!-- La pop-up -->
<div  
  class=\"modal fade\" id=\"exampleModal\" tabindex=\"1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div   class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"background-color:red;border: 2px solid black;\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\" >________________Ajouter une Activité____________</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\" style=\"background-color:white;\" >
 
    \t\t\t\t
\t\t\t\t\t<div  class=\"form-group\"   position: center;\">
   ";
        // line 107
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        // line 108
        echo "

 \t\t\t\t\t<div  >

\t\t\t\t\t\t";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "nom", [], "any", false, false, false, 112), 'label');
        echo "
\t\t\t\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "nom", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "nom", [], "any", false, false, false, 114), 'errors');
        echo "

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
\t\t\t\t\t\t";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "categorie", [], "any", false, false, false, 119), 'label');
        echo "
\t\t\t\t\t\t";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "categorie", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "categorie", [], "any", false, false, false, 121), 'errors');
        echo "

\t\t\t\t\t</div>


\t\t\t\t\t<div >

\t\t\t\t\t\t";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "materiel", [], "any", false, false, false, 128), 'label');
        echo "
\t\t\t\t\t\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "materiel", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "materiel", [], "any", false, false, false, 130), 'errors');
        echo "

\t\t\t\t\t</div>


\t\t\t\t\t<div>

\t\t\t\t\t\t";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "intensite", [], "any", false, false, false, 137), 'label');
        echo "
\t\t\t\t\t\t";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "intensite", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "intensite", [], "any", false, false, false, 139), 'errors');
        echo "

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
 
\t\t\t\t\t\t";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "GRPmusculaire", [], "any", false, false, false, 145), 'label');
        echo "
\t\t\t\t\t\t";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "GRPmusculaire", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "GRPmusculaire", [], "any", false, false, false, 147), 'errors');
        echo "

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
\t\t\t\t\t\t";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "tenue", [], "any", false, false, false, 152), 'label');
        echo "
\t\t\t\t\t\t";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "tenue", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "tenue", [], "any", false, false, false, 154), 'errors');
        echo "

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
\t\t\t\t\t\t";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "recomendation", [], "any", false, false, false, 159), 'label');
        echo "
\t\t\t\t\t\t";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "recomendation", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "recomendation", [], "any", false, false, false, 161), 'errors');
        echo "

\t\t\t\t\t</div>
\t\t\t\t\t<div  >
\t\t\t\t\t\t";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "image", [], "any", false, false, false, 165), 'label');
        echo "
\t\t\t\t\t\t";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "image", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-control", "style" => "width: 450px; padding: 5px;"]]);
        echo "
\t\t\t\t\t\t";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "image", [], "any", false, false, false, 167), 'errors');
        echo "

\t\t\t\t\t</div>
\t\t <button   class=\"btn btn-primary\">";
        // line 170
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 170, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>

\t\t    </div>
\t\t\t


\t\t\t\t\t\t";
        // line 176
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), 'form_end');
        echo "
               ";
        // line 178
        echo "
      </div>
    </div>
  </div>
</div>
  ";
        // line 184
        echo "
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        ";
        // line 187
        echo "                        <a href=";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo ">Show All</a>
                    </div>
                    ";
        // line 191
        echo "
                       \t<div id=\"pagination\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"previous\">&laquo; Previous</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"next\">Next &raquo;</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t    ";
        // line 197
        echo "                   <div class=\"table-responsive\"> 
      
      ";
        // line 203
        echo "\t\t\t<table class=\"table table-bordered\" id=\"myTable\" width=\"100%\" cellspacing=\"0\"> 
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t  \t\t<th style =\"color:#FF0000\">#</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Nom</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Lieu</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Telephone</th>
\t\t\t\t    <th style =\"color:#FF0000\">Email</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">Superficie</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">recomendation</th>
 \t\t\t  \t\t<th style =\"color:#FF0000\">Activité</th>

\t\t\t\t\t";
        // line 216
        echo "
\t\t\t\t\t<th style =\"color:#FF0000\">action</th>


\t\t\t  </tr>
\t\t\t</thead>
\t\t\t\t\t\t\t \t\t\t";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 222, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 223
            echo "
                            <tbody>
                                <tr>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td >";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 227), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 228), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 229), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "materiel", [], "any", false, false, false, 230), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "intensite", [], "any", false, false, false, 231), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "GRPmusculaire", [], "any", false, false, false, 232), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "tenue", [], "any", false, false, false, 233), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "recomendation", [], "any", false, false, false, 234), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td></ul>";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "salles", [], "any", false, false, false, 235));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                echo " <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 235), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <ul></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 237)]), "html", null, true);
            echo "\"><i class=\"bi bi-trash\"></i></a></td>

\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 239)]), "html", null, true);
            echo "\"><span class=\"bi bi-cart-fill\"></span></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 240)]), "html", null, true);
            echo "\"><i class=\"bi bi-book\"></i></a></td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
                             
                            </tbody>
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo " 

                        </table>
\t\t\t\t\t\t\t\t";
        // line 250
        echo "\t\t\t\t\t
                    </div>
                </div>
            </div>
\t\t\t\t\t\t\t\t\t 
            <!-- Recent Sales End -->
\t\t";
        // line 257
        echo "\t\t\t";
        // line 290
        echo "\t\t\t\t";
        // line 291
        echo "\t\t\t\t";
        // line 292
        echo "
     
 \t\t\t\t";
        // line 295
        echo "\t\t\t";
        // line 312
        echo "<!-- Table End -->

\t\t\t<script>
\t\t\t";
        // line 316
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




\t\t\t";
        // line 362
        echo "
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
\t\t\t</script>
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
        return array (  504 => 362,  457 => 316,  452 => 312,  450 => 295,  446 => 292,  444 => 291,  442 => 290,  440 => 257,  432 => 250,  427 => 246,  414 => 240,  410 => 239,  405 => 237,  391 => 235,  387 => 234,  383 => 233,  379 => 232,  375 => 231,  371 => 230,  367 => 229,  363 => 228,  359 => 227,  353 => 223,  349 => 222,  341 => 216,  327 => 203,  323 => 197,  316 => 191,  310 => 187,  306 => 184,  299 => 178,  295 => 176,  286 => 170,  280 => 167,  276 => 166,  272 => 165,  265 => 161,  261 => 160,  257 => 159,  249 => 154,  245 => 153,  241 => 152,  233 => 147,  229 => 146,  225 => 145,  216 => 139,  212 => 138,  208 => 137,  198 => 130,  194 => 129,  190 => 128,  180 => 121,  176 => 120,  172 => 119,  164 => 114,  160 => 113,  156 => 112,  150 => 108,  147 => 107,  131 => 92,  128 => 90,  121 => 85,  111 => 77,  108 => 71,  99 => 57,  94 => 53,  91 => 49,  87 => 30,  83 => 27,  80 => 25,  77 => 20,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}


{% block body %}
<style>
th{
   color: red;
}
</style>
\t<!-- Table Start -->
\t
\t{# <div class=\"row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0\">
\t\t<form class=\"d-flex\" action=\"chercher_salle\" method=\"GET\">
\t\t\t<input class=\"form-control me-2\" name=\"dhia\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t    </form>

\t\t<div class=\"container-fluid pt-4 px-4\" style=\"bottom:0;\">
  #}

    {#_________________________________ Partie pop-up ____________________________________________________#}
{# <button type=\"button\"   class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
  Ajouter une salle
</button> #}

    {#_________________________________ Partie pop-up ____________________________________________________#}


    {#_________________________________ Partie pop-up ____________________________________________________#}

<!-- Modal -->
{# <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
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

      {# </div>
    </div>
  </div>
</div> #} 
 

    {#_________________________________ Partie pop-up ____________________________________________________#}






 
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
\t\t
\t\t\t 
 
\t\t\t<div class=\"table-responsive\"> 
\t\t\t 
          <div class=\"bg-secondary text-center rounded p-4\">
\t\t\t\t\t<a href={{path('app_activite_new')}} <button style=\"width:25%;height:35%\"
\t\t\t type=\"button\"   class=\"btn btn-light m-2\"> Ajouter une nouvelle activité
\t\t\t  </button> </a>  

\t\t\t  {# <button type=\"button\"   class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"> Ajouter une salle</button> #}

  {# <!-- Modal-----------------------------------DEBUT  POP UP--------- ---------- #}
<button id=\"openBtn\"  class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Ajouter une nouvelle activité</button>
<!-- La pop-up -->
<div  
  class=\"modal fade\" id=\"exampleModal\" tabindex=\"1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div   class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"background-color:red;border: 2px solid black;\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\" >________________Ajouter une Activité____________</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\" style=\"background-color:white;\" >
 
    \t\t\t\t
\t\t\t\t\t<div  class=\"form-group\"   position: center;\">
   {# --------------------------------------FORM START-------------------------------------- #}
      {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}
\t\t\t\t\t) }}

 \t\t\t\t\t<div  >

\t\t\t\t\t\t{{form_label(form.nom)}}
\t\t\t\t\t\t{{form_widget(form.nom, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.nom)}}

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
\t\t\t\t\t\t{{form_label(form.categorie)}}
\t\t\t\t\t\t{{form_widget(form.categorie, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.categorie)}}

\t\t\t\t\t</div>


\t\t\t\t\t<div >

\t\t\t\t\t\t{{form_label(form.materiel)}}
\t\t\t\t\t\t{{form_widget(form.materiel, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.materiel) }}

\t\t\t\t\t</div>


\t\t\t\t\t<div>

\t\t\t\t\t\t{{form_label(form.intensite)}}
\t\t\t\t\t\t{{form_widget(form.intensite, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.intensite) }}

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
 
\t\t\t\t\t\t{{form_label(form.GRPmusculaire)}}
\t\t\t\t\t\t{{form_widget(form.GRPmusculaire, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.GRPmusculaire) }}

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
\t\t\t\t\t\t{{form_label(form.tenue)}}
\t\t\t\t\t\t{{form_widget(form.tenue, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.tenue) }}

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
\t\t\t\t\t\t{{form_label(form.recomendation)}}
\t\t\t\t\t\t{{form_widget(form.recomendation, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.recomendation)}}

\t\t\t\t\t</div>
\t\t\t\t\t<div  >
\t\t\t\t\t\t{{form_label(form.image)}}
\t\t\t\t\t\t{{form_widget(form.image, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.image)}}

\t\t\t\t\t</div>
\t\t <button   class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

\t\t    </div>
\t\t\t


\t\t\t\t\t\t{{ form_end(form) }}
               {# --------------------------------------FORM END-------------------------------------- #}

      </div>
    </div>
  </div>
</div>
  {# <!-- Modal-----------------------------------FIN DU POP UP--------- ---------- #}

                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        {# <h6 class=\"mb-0\">Salles</h6> #}
                        <a href={{path('app_activite_index')}}>Show All</a>
                    </div>
                    {# <div class=\"table-responsive\">
\t\t\t\t\t\t\t\t        <div class=\"btn-toggle\">Go Nuit</div> #}

                       \t<div id=\"pagination\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"previous\">&laquo; Previous</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"next\">Next &raquo;</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t    {# <table id=\"myTable\" class=\"table text-start align-middle table-bordered table-hover mb-0\"> #}
                   <div class=\"table-responsive\"> 
      
      {# <div id=\"pagination\">
\t\t\t\t\t<a href=\"#\" class=\"previous\">&laquo; Previous</a>
\t\t\t\t\t<a href=\"#\" class=\"next\">Next &raquo;</a>
\t\t\t</div> #}
\t\t\t<table class=\"table table-bordered\" id=\"myTable\" width=\"100%\" cellspacing=\"0\"> 
\t\t\t<thead>
\t\t\t  <tr>
\t\t\t  \t\t<th style =\"color:#FF0000\">#</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Nom</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Lieu</th>
\t\t\t\t\t<th style =\"color:#FF0000\">Telephone</th>
\t\t\t\t    <th style =\"color:#FF0000\">Email</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">Superficie</th>
\t\t\t  \t\t<th style =\"color:#FF0000\">recomendation</th>
 \t\t\t  \t\t<th style =\"color:#FF0000\">Activité</th>

\t\t\t\t\t{# <th style =\"color:#FF0000\">Image</th> #}

\t\t\t\t\t<th style =\"color:#FF0000\">action</th>


\t\t\t  </tr>
\t\t\t</thead>
\t\t\t\t\t\t\t \t\t\t{% for p in activite %}

                            <tbody>
                                <tr>
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td >{{p.id}}</td>
\t\t\t\t\t\t\t\t\t<td>{{p.nom}}</td>
\t\t\t\t\t\t\t\t\t<td>{{p.categorie}}</td>
\t\t\t\t\t\t\t\t\t<td>{{p.materiel}}</td>
\t\t\t\t\t\t\t\t\t<td>{{p.intensite}}</td>
\t\t\t\t\t\t\t\t\t<td>{{p.GRPmusculaire}}</td>
\t\t\t\t\t\t\t\t\t<td>{{p.tenue}}</td>
\t\t\t\t\t\t\t\t\t<td>{{p.recomendation}}</td>
\t\t\t\t\t\t\t\t\t<td></ul>{% for c in p.salles %} <li>{{c.nom}}</li>{% endfor %} <ul></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<td><a href=\"{{path('app_activite_delete',{'id':p.id})}}\"><i class=\"bi bi-trash\"></i></a></td>

\t\t\t\t\t\t\t\t\t<td><a href=\"{{path('app_activite_edit',{'id':p.id})}}\"><span class=\"bi bi-cart-fill\"></span></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"{{path('app_activite_show',{'id':p.id})}}\"><i class=\"bi bi-book\"></i></a></td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
                             
                            </tbody>
\t\t\t\t\t\t  {% endfor %} 

                        </table>
\t\t\t\t\t\t\t\t{# Pagination code  #}
\t\t\t\t\t
                    </div>
                </div>
            </div>
\t\t\t\t\t\t\t\t\t 
            <!-- Recent Sales End -->
\t\t{# _________________________________________________________________________________________________________ #}
\t\t\t{# <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\"> 
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
 \t\t\t\t\t<th style =\"color:#FF0000\">Salle</th>

 \t\t\t\t 
\t\t\t\t\t<th style =\"color:#FF0000\">action</th>

\t\t\t </tr>
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
\t\t\t\t<td></ul>{% for c in p.salles %} <li>{{c.nom}}</li>{% endfor %} <ul></td> #}
\t\t\t\t{# <td> <img class=\"img-thumbnail\" src=\"{{asset('uploads/'~ p.image)}}\" alt=\"\" ></td> #}
\t\t\t\t{# <td>{{p.image}}</td> #}

     
 \t\t\t\t{# <td><a href=\"{{path('app_activite_delete',{'id':p.id})}}\"><img style=\"width:20%;height:10%;\"src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPiVlUmob19QYwhukJjI15xf3TGNxw8x9wOSssILAixg&s\"></a></td> #}
\t\t\t{# <td>
\t\t\t\t<td><a href=\"{{path('app_activite_delete',{'id':p.id})}}\"><i class=\"bi bi-trash\"></i></a></td>

\t\t\t\t<td><a href=\"{{path('app_activite_edit',{'id':p.id})}}\"><span class=\"bi bi-cart-fill\"></span></a></td>
\t\t\t\t<td><a href=\"{{path('app_activite_show',{'id':p.id})}}\"><i class=\"bi bi-book\"></i></a></td>
\t\t\t\t</td>
 \t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t</tbody> 
\t\t\t {% endfor %} 
\t\t\t 

 
\t\t\t\t</table>
\t\t\t\t</div>
\t\t</div>
</div> #}
<!-- Table End -->

\t\t\t<script>
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




\t\t\t{# script theme claire/sombre  #}

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
\t\t\t</script>
{% endblock %}

  
", "back/table_act.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\table_act.html.twig");
    }
}
