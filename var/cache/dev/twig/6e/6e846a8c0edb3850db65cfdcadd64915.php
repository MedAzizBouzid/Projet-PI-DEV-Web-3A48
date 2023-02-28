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

/* back/FullCalender.html.twig */
class __TwigTemplate_f61bf111b9faf41333f71cfe5cd584d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/FullCalender.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/FullCalender.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/FullCalender.html.twig", 1);
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
        echo "\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


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
        // line 21
        echo "
            
 


";
        // line 27
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
                themeSystem: 'bootstrap5',


  defaultView: 'dayGridWeek',
 \t\t\t    businessHours: {
\t\t\t\tstart: '06:00',
\t\t\t\tend: '18:00',
\t\t\t\tdow: [1, 2, 3, 4, 5],// dow ==> day of week
               
\t\t\t\t},   
                // Specifique pour le head du calendrier
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'timeGridWeek,listWeek,timeGridDay'
            },
\t\t\t    dayMaxEvents: true, // allow \"more\" link when too many events

            events:";
        // line 60
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })());
        echo ",
\t\t\teditable:true,
\t\t    eventResizableFromStart:true,
            
\t

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
                     ";
        // line 98
        echo "

                     ";
        // line 101
        echo "


  

 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/FullCalender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 101,  165 => 98,  125 => 60,  90 => 27,  83 => 21,  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}


 
\t
{% block body %}
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">


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
                themeSystem: 'bootstrap5',


  defaultView: 'dayGridWeek',
 \t\t\t    businessHours: {
\t\t\t\tstart: '06:00',
\t\t\t\tend: '18:00',
\t\t\t\tdow: [1, 2, 3, 4, 5],// dow ==> day of week
               
\t\t\t\t},   
                // Specifique pour le head du calendrier
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'timeGridWeek,listWeek,timeGridDay'
            },
\t\t\t    dayMaxEvents: true, // allow \"more\" link when too many events

            events:{{data|raw}},
\t\t\teditable:true,
\t\t    eventResizableFromStart:true,
            
\t

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
                     {# __________________________Fin__Partie JS________________________________________________ #}


                     {# __________________________Fin__Partie JS________________________________________________ #}



  

 
{% endblock %}


 ", "back/FullCalender.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\FullCalender.html.twig");
    }
}
