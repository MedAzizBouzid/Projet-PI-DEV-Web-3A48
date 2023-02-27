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

/* front/Calendrer_front.html.twig */
class __TwigTemplate_ef4687c57b033102eda39b06fef2e080 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Calendrer_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/Calendrer_front.html.twig"));

        $this->parent = $this->loadTemplate("front/baseF.html.twig", "front/Calendrer_front.html.twig", 1);
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
        echo "\t";
        // line 6
        echo "\t \t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


\t<!-- Breadcrumb Section Begin -->
\t  <section class=\"breadcrumb-section set-bg\" data-setbg=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/breadcrumb-bg.jpg"), "html", null, true);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<div class=\"breadcrumb-text\">
\t\t\t\t\t\t<h2>account detail</h2>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>  
    <style>
        #calendrier{
            margin: auto;
            width: 63%;
\t\t\theight: 60%;
        }
    </style>
\t  

\t <div style=\"position: center;background-color:black;\"id=\"calendrier\"></div>     
     ";
        // line 33
        echo "
            
 


";
        // line 39
        echo "
\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" 
       
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
 \t\t\t    businessHours: {
\t\t\t\tstart: '08:00',
\t\t\t\tend: '18:00',
\t\t\t\tdow: [1, 2, 3, 4, 5]
\t\t\t\t},
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridWeek,timeGridWeek'
            },
\t\t\t
            events:";
        // line 67
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })());
        echo ",
\t\t\teditable:true,
\t\t    eventResizableFromStart:true,
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
\t\t\t            let xhr = new XMLHttpRequest 
\t\t\t\t\t\t// !!!Remarque on n'utilise que la methode PUT  car on autorise que la MAJ 
 \t\t\t\t\t\t xhr .open(\"PUT\", url)
           \t\t\t\t xhr.send(JSON.stringify(donnees))
\t\t\t})\t\t

                calendar.render()
    }
</script>
          
\t\t\t\t\t\t  

";
        // line 110
        echo "\t\t\t";
        // line 190
        echo "\t\t\t\t\t\t\t\t\t";
        // line 246
        echo "\t\t\t\t\t\t\t\t";
        // line 252
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/Calendrer_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 252,  187 => 246,  185 => 190,  183 => 110,  138 => 67,  108 => 39,  101 => 33,  76 => 10,  70 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/baseF.html.twig' %}


{% block body %}
\t{# ***********************style POP UP**************** #}
\t \t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


\t<!-- Breadcrumb Section Begin -->
\t  <section class=\"breadcrumb-section set-bg\" data-setbg=\"{{ asset('assets/front/img/breadcrumb-bg.jpg')}}\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<div class=\"breadcrumb-text\">
\t\t\t\t\t\t<h2>account detail</h2>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>  
    <style>
        #calendrier{
            margin: auto;
            width: 63%;
\t\t\theight: 60%;
        }
    </style>
\t  

\t <div style=\"position: center;background-color:black;\"id=\"calendrier\"></div>     
     {# dd(\$calendar); #}

            
 


{# ________________________________________________________Debut__Partie JS___________________________________________________________________ #}

\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" 
       
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
 \t\t\t    businessHours: {
\t\t\t\tstart: '08:00',
\t\t\t\tend: '18:00',
\t\t\t\tdow: [1, 2, 3, 4, 5]
\t\t\t\t},
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridWeek,timeGridWeek'
            },
\t\t\t
            events:{{data|raw}},
\t\t\teditable:true,
\t\t    eventResizableFromStart:true,
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
\t\t\t            let xhr = new XMLHttpRequest 
\t\t\t\t\t\t// !!!Remarque on n'utilise que la methode PUT  car on autorise que la MAJ 
 \t\t\t\t\t\t xhr .open(\"PUT\", url)
           \t\t\t\t xhr.send(JSON.stringify(donnees))
\t\t\t})\t\t

                calendar.render()
    }
</script>
          
\t\t\t\t\t\t  

{# </div> #}
\t\t\t{# </section><!-- Class Details Section End --><!-- Class Timetable Section Begin --><section class=\"class-timetable-section class-details-timetable spad\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"class-details-timetable_title\">
\t\t\t\t\t\t\t<h5>Classes timetable</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"class-timetable details-timetable\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t<th>Monday</th>
\t\t\t\t\t\t\t\t\t\t<th>Tuesday</th>
\t\t\t\t\t\t\t\t\t\t<th>Wednesday</th>
\t\t\t\t\t\t\t\t\t\t<th>Thursday</th>
\t\t\t\t\t\t\t\t\t\t<th>Friday</th>
\t\t\t\t\t\t\t\t\t\t<th>Saturday</th>
\t\t\t\t\t\t\t\t\t\t<th>Sunday</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"class-time\">6.00am - 8.00am</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>WEIGHT LOOSE</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>RLefew D. Loee</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Cardio</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>RLefew D. Loee</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Yoga</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Keaf Shen</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Fitness</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Kimberly Stone</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg blank-td\"></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Boxing</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Rachel Adam</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Body Building</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Robert Cage</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"class-time\">10.00am - 12.00am</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"blank-td\"></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Fitness</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Kimberly Stone</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>WEIGHT LOOSE</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>RLefew D. Loee</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Cardio</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>RLefew D. Loee</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Body Building</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Robert Cage</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Karate</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Donald Grey</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"blank-td\"></td>
\t\t\t\t\t\t\t\t\t</tr> #}
\t\t\t\t\t\t\t\t\t{# <tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"class-time\">5.00pm - 7.00pm</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Boxing</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Rachel Adam</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Karate</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Donald Grey</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Body Building</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Robert Cage</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"blank-td\"></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Yoga</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Keaf Shen</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Cardio</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>RLefew D. Loee</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Fitness</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Kimberly Stone</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"class-time\">7.00pm - 9.00pm</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Cardio</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>RLefew D. Loee</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg blank-td\"></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Boxing</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Rachel Adam</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Yoga</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Keaf Shen</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Karate</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Donald Grey</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Boxing</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>Rachel Adam</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t\t\t\t\t\t\t\t<h5>WEIGHT LOOSE</h5>
\t\t\t\t\t\t\t\t\t\t\t<span>RLefew D. Loee</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr> #}
\t\t\t\t\t\t\t\t{# </tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div></section>    #}
 {% endblock %}
", "front/Calendrer_front.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\front\\Calendrer_front.html.twig");
    }
}
