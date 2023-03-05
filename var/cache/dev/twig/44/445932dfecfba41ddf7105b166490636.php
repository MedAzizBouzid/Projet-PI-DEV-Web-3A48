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
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>


\t";
        // line 9
        echo "\t<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.css\" integrity=\"sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=\" crossorigin=\"\"/>
\t<script src=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.js\" integrity=\"sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=\" crossorigin=\"\"></script>
\t";
        // line 12
        echo "
\t<style>
\t\t#calendrier {
\t\t\tmargin: auto;
\t\t\t/*  width: auto !important;
\t\t\theight: auto !important;*/
\t\t\twidth: 80%;
\t\t\theight: auto;
\t\t}
\t</style>
\t<style>
\t\ttable {
\t\t\tborder-collapse: collapse;
\t\t\twidth: 100%;
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tbackground-color: white;
\t\t}

\t\tth,
\t\ttd {
\t\t\tpadding: 10px;
\t\t\ttext-align: left;
\t\t\tborder: 1px solid #white;
\t\t}

\t\ttr:hover {
\t\t\tbackground-color: #000;
\t\t\tcolor: #fff;
\t\t}
\t\t#map {
\t\t\theight: 100%;
\t\t}
\t</style>

\t<section class=\"class-details-section spad\">

\t\t<div class=\"container\">
\t\t\t<div class=\"cd-text\">
\t\t\t\t<div class=\"cd-single-item\">
\t\t\t\t\t<h3 style=\"color:red;\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), "html", null, true);
        echo "</h3>
\t\t\t\t\t<p style=\"color:smoke-white;\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"cd-single-item\">
\t\t\t\t\t<h3>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 56, $this->source); })()), "lieu", [], "any", false, false, false, 56), "html", null, true);
        echo "</h3>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">


\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t
\t\t\t\t\t<div class=\"class-details-text\">
\t\t\t\t\t
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"cd-pic\">";
        // line 69
        echo "\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"cd-trainer\" style=\"background-color: white-smoke\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">

\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-pic\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 77, $this->source); })()), "image", [], "any", false, false, false, 77))), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"map\" style=\"height:300px;width:350px\"></div>
    <button onclick=\"window.location.reload();\">Actualiser</button>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"trainer-title\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Notre salle</h4>

\t\t\t\t\t\t\t\t\t\t\t<h4 style=\"color:red;\">";
        // line 88
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 88, $this->source); })()), "nom", [], "any", false, false, false, 88)), "html", null, true);
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
        // line 107
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 107, $this->source); })()), "description", [], "any", false, false, false, 107)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"trainer-info\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Superficie</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 111
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 111, $this->source); })()), "superficie", [], "any", false, false, false, 111)), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Lieu</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 114, $this->source); })()), "lieu", [], "any", false, false, false, 114), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Telephone</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 117, $this->source); })()), "telephone", [], "any", false, false, false, 117), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Email</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 120, $this->source); })()), "email", [], "any", false, false, false, 120), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</section>


\t\t\t\t\t\t<section style=\"background-color:black;\" class=\"hero-section\">
\t\t\t\t\t\t\t<div style=\"position: center;background-color:white;color:red;background-repeat:no-repeat;background-size:cover;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t background-image: url('https://st4.depositphotos.com/4259987/21763/i/450/depositphotos_217633412-stock-photo-picture-of-strong-sporty-bodybuilder.jpg');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \" id=\"calendrier\"></div>
\t\t\t\t\t\t\t";
        // line 140
        echo "\t\t\t\t\t\t\t<div id=\"map\"></div>

\t\t\t\t\t\t</section>

\t\t\t\t\t\t";
        // line 145
        echo "
      ";
        // line 147
        echo "  <script>
    // Initialise la carte
    var map = L.map('map').setView([36.8123591, 10.14065], 13);
    var popup = L.popup()
    .setLatLng([36.8123591,10.14065])
    .setContent(\"Body Rock Bardo\")
    .openOn(map);
var circle = L.circle([36.8123591, 10.14065], {
    color: 'red',
    fillColor: 'black',
    fillOpacity: 0.5,
    radius: 5000
}).addTo(map);
    // Ajoute une couche de tuiles de la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data © <a href=\"https://openstreetmap.org\">OpenStreetMap</a> contributors',
        maxZoom: 18,
    }).addTo(map);

    // Boucle à travers les données de la table \"map\" et ajoute un marqueur pour chaque élément
    ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["MapData"]) || array_key_exists("MapData", $context) ? $context["MapData"] : (function () { throw new RuntimeError('Variable "MapData" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mydata"]) {
            // line 168
            echo "        L.marker([";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mydata"], "lat", [], "any", false, false, false, 168), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mydata"], "longt", [], "any", false, false, false, 168), "html", null, true);
            echo "]).addTo(map);
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mydata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "    </script>

\t";
        // line 174
        echo "
<script>
";
        // line 194
        echo "</script>

      ";
        // line 197
        echo "
\t\t\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" integrity=\"sha256-aZcQFPL6+lsgcL5uMWS2B/cf6WplQQOEhLKi88tYh6A=\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\twindow.onload = () => {
let calendarElt = document.querySelector(\"#calendrier\")
let calendar = new FullCalendar.Calendar(calendarElt, {

initialView: 'timeGridWeek',
locale: 'fr',
timeZone: 'Afrique/Tunisie',
weekends: true,

defaultView: 'dayGridWeek',
// businessHours: {
// start: '08:00',
// end: '18:00',
// dow: [1, 2, 3, 4, 5]
// },
headerToolbar: {
start: 'today',
center: 'title',
end: 'timeGridWeek,listWeek'
},

events: ";
        // line 221
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 221, $this->source); })());
        echo ",
editable: false,
eventResizableFromStart: false,
// datesSet: function (info) {
// Récupérer la date de début de la plage d'affichage
// let start = info.start;
// Récupérer la date de fin de la plage d'affichage
// let end = info.end;
// Calculer la différence en jours entre les deux dates
// let diff = end.diff(start, 'days');
// Si la plage d'affichage est supérieure à 7 jours
// if (diff > 7) {
// Ajuster la date de fin pour n'afficher qu'une semaine
// end = start.clone().add(7, 'days');
// Définir la plage d'affichage pour n'afficher qu'une semaine
// calendar.gotoDate(start);
//       //calendar.gotoDate(end);
// }
// }
/*\t\teventDrop :function(event){
\t\t\t\tconsole.log(event)
\t\t\t}*/


})

calendar.on('eventChange', (e) => {
// afficher
// console.log(e)
// pour assurer l'injection des données =>
// Créer une variable URL qui contient la route de l'injection des données

let url = `/api/\${
e.event.id
}/edit`
// Créer un tableau JSon pour stocker nos données de la table plannig
let donnees = {
\"title\": e.event.title,
\"description\": e.event.description,
\"start\": e.event.start,
\"end\": e.event.end,
\"backgroundColor\": e.event.background_color,
\"borderColor\": e.event.border_color,
\"textColor\": e.event.text_color,
\"activite\": e.event.activite


}

})

calendar.render()
}
\t\t\t\t\t\t</script>

\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tsrc = \"https://maps.googleapis.com/maps/api/js?key=AIzaSyC1qY6wrVNilygkIrk1bOP17S8AEMka20Q&callback=initMap&v=weekly\"
defer >
\t\t\t\t\t\t</script>

\t\t\t\t\t\t<script>
";
        // line 297
        echo "
\t\t\t\t\t";
        
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
        return array (  388 => 297,  324 => 221,  298 => 197,  294 => 194,  290 => 174,  286 => 171,  274 => 168,  270 => 167,  248 => 147,  245 => 145,  239 => 140,  217 => 120,  211 => 117,  205 => 114,  199 => 111,  192 => 107,  170 => 88,  156 => 77,  146 => 69,  131 => 56,  125 => 53,  121 => 52,  79 => 12,  75 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/baseF.html.twig' %}
{% block body %}

\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">
\t<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>


\t{# partie Map maker #}
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.css\" integrity=\"sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=\" crossorigin=\"\"/>
\t<script src=\"https://unpkg.com/leaflet@1.9.3/dist/leaflet.js\" integrity=\"sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=\" crossorigin=\"\"></script>
\t{# partie Map maker #}

\t<style>
\t\t#calendrier {
\t\t\tmargin: auto;
\t\t\t/*  width: auto !important;
\t\t\theight: auto !important;*/
\t\t\twidth: 80%;
\t\t\theight: auto;
\t\t}
\t</style>
\t<style>
\t\ttable {
\t\t\tborder-collapse: collapse;
\t\t\twidth: 100%;
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tbackground-color: white;
\t\t}

\t\tth,
\t\ttd {
\t\t\tpadding: 10px;
\t\t\ttext-align: left;
\t\t\tborder: 1px solid #white;
\t\t}

\t\ttr:hover {
\t\t\tbackground-color: #000;
\t\t\tcolor: #fff;
\t\t}
\t\t#map {
\t\t\theight: 100%;
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
\t\t\t\t
\t\t\t\t\t<div class=\"class-details-text\">
\t\t\t\t\t
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"cd-pic\">{# <img src=\"{{ asset('uploads/'~ salle.image)}}\" alt=\"\"> #}
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"cd-trainer\" style=\"background-color: white-smoke\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">

\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-pic\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/'~ salle.image)}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"map\" style=\"height:300px;width:350px\"></div>
    <button onclick=\"window.location.reload();\">Actualiser</button>

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


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</section>


\t\t\t\t\t\t<section style=\"background-color:black;\" class=\"hero-section\">
\t\t\t\t\t\t\t<div style=\"position: center;background-color:white;color:red;background-repeat:no-repeat;background-size:cover;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t background-image: url('https://st4.depositphotos.com/4259987/21763/i/450/depositphotos_217633412-stock-photo-picture-of-strong-sporty-bodybuilder.jpg');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \" id=\"calendrier\"></div>
\t\t\t\t\t\t\t{# // Div MAp  \\\\ #}
\t\t\t\t\t\t\t<div id=\"map\"></div>

\t\t\t\t\t\t</section>

\t\t\t\t\t\t{# ________________________________________________________Debut__Partie JS___________________________________________________________________ #}

      {# MAP MAKER AFFICHAGE PERSO***************************************************** #}
  <script>
    // Initialise la carte
    var map = L.map('map').setView([36.8123591, 10.14065], 13);
    var popup = L.popup()
    .setLatLng([36.8123591,10.14065])
    .setContent(\"Body Rock Bardo\")
    .openOn(map);
var circle = L.circle([36.8123591, 10.14065], {
    color: 'red',
    fillColor: 'black',
    fillOpacity: 0.5,
    radius: 5000
}).addTo(map);
    // Ajoute une couche de tuiles de la carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data © <a href=\"https://openstreetmap.org\">OpenStreetMap</a> contributors',
        maxZoom: 18,
    }).addTo(map);

    // Boucle à travers les données de la table \"map\" et ajoute un marqueur pour chaque élément
    {% for mydata in MapData %}
        L.marker([{{ mydata.lat }}, {{ mydata.longt }}]).addTo(map);
        
    {% endfor %}
    </script>

\t{# ************************** #}

<script>
{# \t
// Initialise la carte
var map = L.map('map').setView([36.8123591, 10.14065], 13);

// Ajoute une couche de tuiles de la carte
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data © <a href=\"https://openstreetmap.org\">OpenStreetMap</a> contributors',
    maxZoom: 18,
}).addTo(map);

// Ecoute l'événement d'ajout
map.on('click', function(e) {
    // Envoie une requête Ajax pour ajouter l'élément à la base de données
    \$.post('/ajouter-element', {lat: e.latlng.lat, lng: e.latlng.lng}, function(data) {
        // Ajoute un marqueur pour l'élément
        L.marker([data.lat, data.lng]).addTo(map);
    });
}); #}
</script>

      {# MAP MAKER AFFICHAGE PERSO***************************************************** #}

\t\t\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" integrity=\"sha256-aZcQFPL6+lsgcL5uMWS2B/cf6WplQQOEhLKi88tYh6A=\" crossorigin=\"anonymous\"></script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\twindow.onload = () => {
let calendarElt = document.querySelector(\"#calendrier\")
let calendar = new FullCalendar.Calendar(calendarElt, {

initialView: 'timeGridWeek',
locale: 'fr',
timeZone: 'Afrique/Tunisie',
weekends: true,

defaultView: 'dayGridWeek',
// businessHours: {
// start: '08:00',
// end: '18:00',
// dow: [1, 2, 3, 4, 5]
// },
headerToolbar: {
start: 'today',
center: 'title',
end: 'timeGridWeek,listWeek'
},

events: {{ data|raw }},
editable: false,
eventResizableFromStart: false,
// datesSet: function (info) {
// Récupérer la date de début de la plage d'affichage
// let start = info.start;
// Récupérer la date de fin de la plage d'affichage
// let end = info.end;
// Calculer la différence en jours entre les deux dates
// let diff = end.diff(start, 'days');
// Si la plage d'affichage est supérieure à 7 jours
// if (diff > 7) {
// Ajuster la date de fin pour n'afficher qu'une semaine
// end = start.clone().add(7, 'days');
// Définir la plage d'affichage pour n'afficher qu'une semaine
// calendar.gotoDate(start);
//       //calendar.gotoDate(end);
// }
// }
/*\t\teventDrop :function(event){
\t\t\t\tconsole.log(event)
\t\t\t}*/


})

calendar.on('eventChange', (e) => {
// afficher
// console.log(e)
// pour assurer l'injection des données =>
// Créer une variable URL qui contient la route de l'injection des données

let url = `/api/\${
e.event.id
}/edit`
// Créer un tableau JSon pour stocker nos données de la table plannig
let donnees = {
\"title\": e.event.title,
\"description\": e.event.description,
\"start\": e.event.start,
\"end\": e.event.end,
\"backgroundColor\": e.event.background_color,
\"borderColor\": e.event.border_color,
\"textColor\": e.event.text_color,
\"activite\": e.event.activite


}

})

calendar.render()
}
\t\t\t\t\t\t</script>

\t\t\t\t\t\t<script>
\t\t\t\t\t\t\tsrc = \"https://maps.googleapis.com/maps/api/js?key=AIzaSyC1qY6wrVNilygkIrk1bOP17S8AEMka20Q&callback=initMap&v=weekly\"
defer >
\t\t\t\t\t\t</script>

\t\t\t\t\t\t<script>
{# function initMap() {
const myLatLng = {
lat: 48.8588897,
lng: 2.320041
};
const map = new google.maps.Map(document.getElementById(\"map\"), {
zoom: 4,
center: myLatLng
});

new google.maps.Marker({position: myLatLng, map, title: \"Hello World!\"});
}

window.initMap = initMap;
\t\t\t\t\t\t</script> #}

\t\t\t\t\t{% endblock %}
", "front/class_details.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\front\\class_details.html.twig");
    }
}
