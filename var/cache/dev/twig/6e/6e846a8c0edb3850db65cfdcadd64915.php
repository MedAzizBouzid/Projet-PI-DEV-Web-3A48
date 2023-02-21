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
\t ";
        // line 17
        echo "<!-- La pop-up -->
 ";
        // line 31
        echo "   ";
        // line 32
        echo "       ";
        // line 74
        echo "
\t\t\t\t\t";
        // line 100
        echo "  
               ";
        // line 102
        echo "
       ";
        // line 107
        echo "  ";
        // line 108
        echo "
";
        // line 110
        echo "
\t <div style=\"position: center;background-color:black;\"id=\"calendrier\"></div>     
     dd(\$calendar);

            
 


";
        // line 119
        echo "
\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" 
        integrity=\"sha256-aZcQFPL6+lsgcL5uMWS2B/cf6WplQQOEhLKi88tYh6A=\" crossorigin=\"anonymous\"></script>
<script>
    window.onload = () => {
        let calendarElt = document.querySelector(\"#calendrier\")
        let calendar = new FullCalendar.Calendar(calendarElt, {
            initialView: 'timeGridWeek',
            locale: 'fr',
             timeZone: 'Afrique/Tunisie',
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek'
            },
            events:";
        // line 134
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 134, $this->source); })());
        echo ",
\t\t\teditable:true,
\t\t\teventResizableFromStart:true,

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
             }          
\t\t\t            let xhr = new XMLHttpRequest 
\t\t\t\t\t\t// !!!Remarque on n'utilise que la methode PUT  car on autorise que la MAJ 
 \t\t\t\t\t\t xhr.open(\"PUT\", url)
           \t\t\t\t xhr.send(JSON.stringify(donnees))
\t\t\t})\t\t

                calendar.render()
    }
</script>
                     ";
        // line 167
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
        return array (  162 => 167,  127 => 134,  110 => 119,  100 => 110,  97 => 108,  95 => 107,  92 => 102,  89 => 100,  86 => 74,  84 => 32,  82 => 31,  79 => 17,  68 => 7,  58 => 6,  35 => 1,);
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
\t {# <!-- Modal-----------------------------------DEBUT  POP UP--------- ---------- #}
<!-- La pop-up -->
 {# <button  style=\" width: 20%;\"id=\"openBtn\"  class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Ajouter une nouvelle activité</button>

<div  class=\"modal fade\" id=\"exampleModal\" tabindex=\"1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div   class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\" style=\"background-color:red;border: 2px solid black;\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\" >________________Ajouter un plannig____________</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\" style=\"background-color:white;\" >
 
    \t\t\t\t
\t\t\t\t\t<div  class=\"form-group\"   position: center;\">  #}
   {# --------------------------------------FORM START-------------------------------------- #}
       {# {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}

 \t\t\t\t\t
                    <div>
\t\t\t\t\t\t{{form_label(form.title)}}
\t\t\t\t\t\t{{form_widget(form.title, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.title)}}

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
\t\t\t\t\t\t{{form_label(form.start)}}
\t\t\t\t\t\t{{form_widget(form.start, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.start)}}

\t\t\t\t\t</div>


\t\t\t\t\t<div >

\t\t\t\t\t\t{{form_label(form.end)}}
\t\t\t\t\t\t{{form_widget(form.end, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.end) }}

\t\t\t\t\t</div>


\t\t\t\t\t<div>

\t\t\t\t\t\t{{form_label(form.description)}}
\t\t\t\t\t\t{{form_widget(form.description, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.description) }}

\t\t\t\t\t</div>
{#  
\t\t\t\t\t<div >
 
\t\t\t\t\t\t{{form_label(form.all_day)}}
\t\t\t\t\t\t{{form_widget(form.all_day, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.all_day) }}

\t\t\t\t\t</div> #}

\t\t\t\t\t{# <div  >
\t\t\t\t\t\t{{form_label(form.background_color)}}
\t\t\t\t\t\t{{form_widget(form.background_color, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{ form_errors(form.background_color) }}

\t\t\t\t\t</div>

\t\t\t\t\t<div  >
\t\t\t\t\t\t{{form_label(form.border_color)}}
\t\t\t\t\t\t{{form_widget(form.border_color, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.border_color)}}

\t\t\t\t\t</div>
\t\t\t\t\t<div  >
\t\t\t\t\t\t{{form_label(form.text_color)}}
\t\t\t\t\t\t{{form_widget(form.text_color, {'attr': {'class': 'form-control', 'style': 'width: 450px; padding: 5px;'}})}}
\t\t\t\t\t\t{{form_errors(form.text_color)}}

\t\t\t\t\t</div>
\t\t <button   class=\"btn btn-primary\">{{ button_label|default('Enregistrer') }}</button>

\t\t    </div>
\t\t\t


\t\t\t\t\t\t{{ form_end(form) }}   #}  
               {# --------------------------------------FORM END-------------------------------------- #}

       {# </div>
    </div>
  </div>   
</div>   #}
  {# <!-- Modal-----------------------------------FIN DU POP UP--------- ----------   #}

{# {{dump(data)}} #}

\t <div style=\"position: center;background-color:black;\"id=\"calendrier\"></div>     
     dd(\$calendar);

            
 


{# ________________________________________________________Debut__Partie JS___________________________________________________________________ #}

\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" 
        integrity=\"sha256-aZcQFPL6+lsgcL5uMWS2B/cf6WplQQOEhLKi88tYh6A=\" crossorigin=\"anonymous\"></script>
<script>
    window.onload = () => {
        let calendarElt = document.querySelector(\"#calendrier\")
        let calendar = new FullCalendar.Calendar(calendarElt, {
            initialView: 'timeGridWeek',
            locale: 'fr',
             timeZone: 'Afrique/Tunisie',
            headerToolbar: {
                start: 'prev,next today',
                center: 'title',
                end: 'dayGridMonth,timeGridWeek'
            },
            events:{{data|raw}},
\t\t\teditable:true,
\t\t\teventResizableFromStart:true,

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
             }          
\t\t\t            let xhr = new XMLHttpRequest 
\t\t\t\t\t\t// !!!Remarque on n'utilise que la methode PUT  car on autorise que la MAJ 
 \t\t\t\t\t\t xhr.open(\"PUT\", url)
           \t\t\t\t xhr.send(JSON.stringify(donnees))
\t\t\t})\t\t

                calendar.render()
    }
</script>
                     {# __________________________Fin__Partie JS________________________________________________ #}


 
{% endblock %}


 ", "back/FullCalender.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\FullCalender.html.twig");
    }
}
