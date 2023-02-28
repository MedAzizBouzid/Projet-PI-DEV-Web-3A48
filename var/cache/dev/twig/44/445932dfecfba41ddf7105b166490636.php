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

/* front/class_details.html.twig */
class __TwigTemplate_69c90f56a0246d102522cead388b2c70 extends Template
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
        return "front/baseF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/class_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/class_details.html.twig"));

        $this->parent = $this->loadTemplate("front/baseF.html.twig", "front/class_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

     <style>
        #calendrier{
            margin: auto;
          /*  width: auto !important;
\t\t\theight: auto !important;*/
\t\t\t width: 80%;
\t\t\theight:auto;
        }
    </style>
   <style>
\t\ttable {
\t\t\tborder-collapse: collapse;
\t\t\twidth: 100%;
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tbackground-color: white;
\t\t}
\t\t
\t\tth, td {
\t\t\tpadding: 10px;
\t\t\ttext-align: left;
\t\t\tborder: 1px solid #white;
\t\t}
\t\t
\t\ttr:hover {
\t\t\tbackground-color: #000;
\t\t\tcolor: #fff;
\t\t}
\t</style>  

\t<section class=\"class-details-section spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"cd-text\">
\t\t\t\t<div class=\"cd-single-item\">
\t\t\t\t\t<h3 style=\"color:red;\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), "html", null, true);
        echo "</h3>
\t\t\t\t\t<p style=\"color:smoke-white;\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"cd-single-item\">
\t\t\t\t\t<h3>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 44, $this->source); })()), "lieu", [], "any", false, false, false, 44), "html", null, true);
        echo "</h3>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">


\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"class-details-text\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"cd-pic\">";
        // line 55
        echo "\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"cd-trainer\" style=\"background-color: white-smoke\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
                                
\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-pic\">
\t\t\t\t\t\t\t\t\t\t<img  src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63))), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"trainer-title\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Notre salle</h4>

\t\t\t\t\t\t\t\t\t\t\t<h4 style=\"color:red;\">";
        // line 71
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 71, $this->source); })()), "nom", [], "any", false, false, false, 71)), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"trainer-social\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa  fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 90
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 90, $this->source); })()), "description", [], "any", false, false, false, 90)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"trainer-info\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Superficie</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 94, $this->source); })()), "superficie", [], "any", false, false, false, 94)), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Lieu</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 97, $this->source); })()), "lieu", [], "any", false, false, false, 97), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Telephone</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 100, $this->source); })()), "telephone", [], "any", false, false, false, 100), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Email</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 103, $this->source); })()), "email", [], "any", false, false, false, 103), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t</ul>


 
                                        
\t\t\t\t\t\t\t\t\t\t";
        // line 116
        echo "                                                
            

                                                    ";
        // line 120
        echo "                                                 
                                    \t 
                                      
\t\t\t\t";
        // line 136
        echo "\t\t\t\t\t\t";
        // line 189
        echo "\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 192
        echo "
\t\t\t\t</div>

";
        // line 196
        echo "  ";
        // line 219
        echo "
\t\t\t</section>


 <section style=\"background-color:black;\" class=\"hero-section\">
\t <div style=\"position: center;background-color:white;color:red;background-repeat:no-repeat;background-size:cover;
\t background-image: url('https://st4.depositphotos.com/4259987/21763/i/450/depositphotos_217633412-stock-photo-picture-of-strong-sporty-bodybuilder.jpg');
\t  \"id=\"calendrier\"></div>     
\t </section>

";
        // line 230
        echo "
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" 
       
\t    integrity=\"sha256-aZcQFPL6+lsgcL5uMWS2B/cf6WplQQOEhLKi88tYh6A=\" crossorigin=\"anonymous\"></script>
<script>
    window.onload = () => {
        let calendarElt = document.querySelector(\"#calendrier\")
        let calendar = new FullCalendar.Calendar(calendarElt, {
 
            initialView: 'timeGridWeek',
            locale: 'fr',
            timeZone: 'Afrique/Tunisie',
\t\t    weekends: true,

  defaultView: 'dayGridWeek',
 \t\t\t    //businessHours: {
\t\t\t\t//start: '08:00',
\t\t\t\t//end: '18:00',
\t\t\t\t//dow: [1, 2, 3, 4, 5]
\t\t\t\t//},
            headerToolbar: {
                start: 'today',
                center: 'title',
                end: 'timeGridWeek,listWeek'
            },
\t\t\t
            events:";
        // line 256
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 256, $this->source); })());
        echo ",
\t\t\teditable:false,
\t\t    eventResizableFromStart:false,
\t\t\t      // datesSet: function (info) {
      // Récupérer la date de début de la plage d'affichage
           //let start = info.start;
      // Récupérer la date de fin de la plage d'affichage
            //let end = info.end;
      // Calculer la différence en jours entre les deux dates
           //let diff = end.diff(start, 'days');
      // Si la plage d'affichage est supérieure à 7 jours
           //if (diff > 7) {
        // Ajuster la date de fin pour n'afficher qu'une semaine
             // end = start.clone().add(7, 'days');
        // Définir la plage d'affichage pour n'afficher qu'une semaine
             //calendar.gotoDate(start);
            //       //calendar.gotoDate(end);
           // }
         // }
\t\t/*\t\teventDrop :function(event){
\t\t\t\tconsole.log(event)
\t\t\t}*/
\t\t\t

    })

\t\t\tcalendar.on('eventChange',(e) => {
\t\t\t//afficher 
\t\t\t\t//console.log(e) 
\t\t\t\t// pour assurer l'injection des données => 
\t\t\t\t//Créer une variable URL qui contient la route de l'injection des données
\t\t\t\t 
\t\t\t\t let url = `/api/\${e.event.id}/edit`
           //Créer un tableau JSon pour stocker nos données de la table plannig 
\t\t    let donnees = {
                \"title\": e.event.title,
                \"description\": e.event.description,
                \"start\": e.event.start,
                \"end\": e.event.end,
                \"backgroundColor\": e.event.background_color,
                \"borderColor\": e.event.border_color,
                \"textColor\": e.event.text_color,
\t\t\t\t\"activite\": e.event.activite,

 
             }          
\t\t\t           
\t\t\t})\t\t

                calendar.render()
    }
</script>
          
          
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/class_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 256,  242 => 230,  230 => 219,  228 => 196,  223 => 192,  219 => 189,  217 => 136,  212 => 120,  207 => 116,  198 => 103,  192 => 100,  186 => 97,  180 => 94,  173 => 90,  151 => 71,  140 => 63,  130 => 55,  117 => 44,  111 => 41,  107 => 40,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/baseF.html.twig' %}
{% block body %}

<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

     <style>
        #calendrier{
            margin: auto;
          /*  width: auto !important;
\t\t\theight: auto !important;*/
\t\t\t width: 80%;
\t\t\theight:auto;
        }
    </style>
   <style>
\t\ttable {
\t\t\tborder-collapse: collapse;
\t\t\twidth: 100%;
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tbackground-color: white;
\t\t}
\t\t
\t\tth, td {
\t\t\tpadding: 10px;
\t\t\ttext-align: left;
\t\t\tborder: 1px solid #white;
\t\t}
\t\t
\t\ttr:hover {
\t\t\tbackground-color: #000;
\t\t\tcolor: #fff;
\t\t}
\t</style>  

\t<section class=\"class-details-section spad\">
\t\t<div class=\"container\">
\t\t\t<div class=\"cd-text\">
\t\t\t\t<div class=\"cd-single-item\">
\t\t\t\t\t<h3 style=\"color:red;\">{{salle.nom}}</h3>
\t\t\t\t\t<p style=\"color:smoke-white;\">{{salle.description}}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"cd-single-item\">
\t\t\t\t\t<h3>{{salle.lieu}}</h3>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">


\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"class-details-text\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"cd-pic\">{# <img src=\"{{ asset('uploads/'~ salle.image)}}\" alt=\"\"> #}
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"cd-trainer\" style=\"background-color: white-smoke\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
                                
\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-pic\">
\t\t\t\t\t\t\t\t\t\t<img  src=\"{{ asset('uploads/'~ salle.image)}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"trainer-title\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Notre salle</h4>

\t\t\t\t\t\t\t\t\t\t\t<h4 style=\"color:red;\">{{salle.nom | upper }}</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"trainer-social\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa  fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>{{salle.description | upper}}</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"trainer-info\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Superficie</span>
\t\t\t\t\t\t\t\t\t\t\t\t{{salle.superficie | upper}}</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Lieu</span>
\t\t\t\t\t\t\t\t\t\t\t\t{{salle.lieu}}</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Telephone</span>
\t\t\t\t\t\t\t\t\t\t\t\t{{salle.telephone}}</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Email</span>
\t\t\t\t\t\t\t\t\t\t\t\t{{salle.email}}</li>
\t\t\t\t\t\t\t\t\t\t</ul>


 
                                        
\t\t\t\t\t\t\t\t\t\t{# {% for c in salle.cours %}
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"color:white;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{c.nom}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t{% endfor %} #}
                                                
            

                                                    {# ____________________________ #}
                                                 
                                    \t 
                                      
\t\t\t\t{# <div class=\"col-lg-4 col-md-8\">
\t\t\t\t\t<div class=\"sidebar-option\">
\t\t\t\t\t\t<div class=\"so-categories\">
\t\t\t\t\t\t\t<h5 class=\"title\">Categories</h5>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Yoga<span>12</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Runing<span>32</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Weightloss<span>86</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Cario<span>25</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Body buiding<span>36</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Nutrition<span>15</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t{# <div class=\"so-latest\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                    <h5 class=\"title\">Latest posts</h5>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    <div class=\"latest-large set-bg\" data-setbg=\"img/letest-blog/latest-1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"ll-text\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <h5><a href=\"#\">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <ul>
\t\t\t\t\t\t\t\t\t\t\t\t                                                                <li>Aug 20, 2019</li>
\t\t\t\t\t\t\t\t\t\t\t\t                                                                <li>20 Comment</li>
\t\t\t\t\t\t\t\t\t\t\t\t                                                            </ul>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    <div class=\"latest-item\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"li-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <img src=\"img/letest-blog/latest-2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"li-text\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <h6><a href=\"#\">Grilled Potato and Green Bean Salad</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <span class=\"li-time\">Aug 15, 2019</span>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    <div class=\"latest-item\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"li-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <img src=\"img/letest-blog/latest-3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"li-text\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <h6><a href=\"#\">The \$8 French Rosé I Buy in Bulk Every Summer</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <span class=\"li-time\">Aug 15, 2019</span>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    <div class=\"latest-item\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"li-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <img src=\"img/letest-blog/latest-4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"li-text\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <h6><a href=\"#\">Ina Garten's Skillet-Roasted Lemon Chicken</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <span class=\"li-time\">Aug 15, 2019</span>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    <div class=\"latest-item\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"li-pic\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <img src=\"img/letest-blog/latest-5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        <div class=\"li-text\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <h6><a href=\"#\">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t                                                            <span class=\"li-time\">Aug 15, 2019</span>
\t\t\t\t\t\t\t\t\t\t\t\t                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                                <div class=\"so-banner set-bg\" data-setbg=\"img/sidebar-banner.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t                                                    <h5>Banner 300x300</h5>
\t\t\t\t\t\t\t\t\t\t\t\t                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                            </div>
\t\t\t\t\t\t\t\t\t\t\t\t                                        </div> #}
\t\t\t\t\t</div>

\t\t\t\t\t{# {% endfor %} #}

\t\t\t\t</div>

{# <table  > #}
  {# <thead  >
\t\t\t<tr>
\t\t\t\t<th>Activite</th>
\t\t\t\t<th>Categorie</th>
\t\t\t\t<th> Materiel</th>
\t\t\t\t<th> Tenu</th>

\t\t\t</tr>
\t\t</thead>
                \t\t{% for p in salle.cours %}

\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>{{p.nom}} </td>
\t\t\t\t<td>{{p.categorie}} </td>
\t\t\t\t<td>{{p.materiel}} </td>
\t\t\t</tr>
\t\t 
\t\t</tbody>
        \t\t\t\t\t\t  {% endfor %} 

\t</table>
</div> #}

\t\t\t</section>


 <section style=\"background-color:black;\" class=\"hero-section\">
\t <div style=\"position: center;background-color:white;color:red;background-repeat:no-repeat;background-size:cover;
\t background-image: url('https://st4.depositphotos.com/4259987/21763/i/450/depositphotos_217633412-stock-photo-picture-of-strong-sporty-bodybuilder.jpg');
\t  \"id=\"calendrier\"></div>     
\t </section>

{# ________________________________________________________Debut__Partie JS___________________________________________________________________ #}

<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" 
       
\t    integrity=\"sha256-aZcQFPL6+lsgcL5uMWS2B/cf6WplQQOEhLKi88tYh6A=\" crossorigin=\"anonymous\"></script>
<script>
    window.onload = () => {
        let calendarElt = document.querySelector(\"#calendrier\")
        let calendar = new FullCalendar.Calendar(calendarElt, {
 
            initialView: 'timeGridWeek',
            locale: 'fr',
            timeZone: 'Afrique/Tunisie',
\t\t    weekends: true,

  defaultView: 'dayGridWeek',
 \t\t\t    //businessHours: {
\t\t\t\t//start: '08:00',
\t\t\t\t//end: '18:00',
\t\t\t\t//dow: [1, 2, 3, 4, 5]
\t\t\t\t//},
            headerToolbar: {
                start: 'today',
                center: 'title',
                end: 'timeGridWeek,listWeek'
            },
\t\t\t
            events:{{data|raw}},
\t\t\teditable:false,
\t\t    eventResizableFromStart:false,
\t\t\t      // datesSet: function (info) {
      // Récupérer la date de début de la plage d'affichage
           //let start = info.start;
      // Récupérer la date de fin de la plage d'affichage
            //let end = info.end;
      // Calculer la différence en jours entre les deux dates
           //let diff = end.diff(start, 'days');
      // Si la plage d'affichage est supérieure à 7 jours
           //if (diff > 7) {
        // Ajuster la date de fin pour n'afficher qu'une semaine
             // end = start.clone().add(7, 'days');
        // Définir la plage d'affichage pour n'afficher qu'une semaine
             //calendar.gotoDate(start);
            //       //calendar.gotoDate(end);
           // }
         // }
\t\t/*\t\teventDrop :function(event){
\t\t\t\tconsole.log(event)
\t\t\t}*/
\t\t\t

    })

\t\t\tcalendar.on('eventChange',(e) => {
\t\t\t//afficher 
\t\t\t\t//console.log(e) 
\t\t\t\t// pour assurer l'injection des données => 
\t\t\t\t//Créer une variable URL qui contient la route de l'injection des données
\t\t\t\t 
\t\t\t\t let url = `/api/\${e.event.id}/edit`
           //Créer un tableau JSon pour stocker nos données de la table plannig 
\t\t    let donnees = {
                \"title\": e.event.title,
                \"description\": e.event.description,
                \"start\": e.event.start,
                \"end\": e.event.end,
                \"backgroundColor\": e.event.background_color,
                \"borderColor\": e.event.border_color,
                \"textColor\": e.event.text_color,
\t\t\t\t\"activite\": e.event.activite,

 
             }          
\t\t\t           
\t\t\t})\t\t

                calendar.render()
    }
</script>
          
          
\t\t{% endblock %}
\t 
", "front/class_details.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\front\\class_details.html.twig");
    }
}
