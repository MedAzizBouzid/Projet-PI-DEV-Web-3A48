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

/* front/contact.html.twig */
class __TwigTemplate_020bc9b9557e98b51e34ad8921a0b994 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact.html.twig"));

        // line 2
        echo "


";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 187
        echo "
 ";
        // line 189
        echo "\t\t  

";
        // line 192
        echo "\t\t\t";
        // line 272
        echo "\t\t\t\t\t\t\t\t\t";
        // line 328
        echo "\t\t\t\t\t\t\t\t";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

     <style>
        #calendrier{
            margin: auto;
          /*  width: auto !important;
\t\t\theight: auto !important;*/
\t\t\t width: 80%;
\t\t\theight:auto;
        }

    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: sans-serif;
  background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
}

a,
a:visited,
a:active {
  text-decoration: none;
  color: inherit;
}

a:hover {
  text-decoration: underline;
}

.wrapper {
  width: 75%;
  max-width: 1000px;
  background-color: #313131;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  display: flex;
}

.contact {
  padding: 30px 60px;
  color: white;
}

h1 {
  margin-bottom: 60px;
}

.contact-item {
  display: flex;
  align-items: center;
  font-size: 18px;
}

.contact-item:not(:last-child) {
  margin-bottom: 30px;
}

ion-icon {
  margin-right: 15px;
}

#map {
  height: 400px;
  flex: 1;
}
    </style>
\t  

     ";
        // line 82
        echo "
       <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/hero/hero-1.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/hero/hero-2.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   


   <link rel=\"stylesheet\" href=\"./style.css\" />
    <link
      rel=\"stylesheet\"
      href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
      integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
      crossorigin=\"\"
    />
    <title>Document</title>
  </head>
  <body>
    <div class=\"wrapper\">
      <div class=\"contact\">
        <h1>Nous contacter</h1>
        <div class=\"contact-items\">
          <div class=\"contact-item\">
            <a href=\"tel:0388888888\">
              <ion-icon name=\"call\"></ion-icon>
              03 88 88 88 88
            </a>
          </div>
          <div class=\"contact-item\">
            <a href=\"mailto:exemple@test.com\">
              <ion-icon name=\"mail\"></ion-icon>
              exemple@test.com
            </a>
          </div>
          <div class=\"contact-item\">
            <a href=\"www.exemple.com\">
              <ion-icon name=\"globe\"></ion-icon>
              www.exemple.com
            </a>
          </div>
        </div>
      </div>

      <div id=\"map\"></div>
                            </div>


    <script
      type=\"module\"
      src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js\"
    ></script>
    <script
      nomodule
      src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"
    ></script>
    <script
      src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
      integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
      crossorigin=\"\"
    ></script>


    <script src=\"./app.js\"></script>
     <script>
var map = L.map(\"map\").setView([48.856614, 2.3522219], 13);

var Stadia_OSMBright = L.tileLayer(
  \"https://tiles.stadiamaps.com/tiles/osm_bright/{z}/{x}/{y}{r}.png\",
  {
    maxZoom: 20,
    attribution:
      '&copy; <a href=\"https://stadiamaps.com/\">Stadia Maps</a>, &copy; <a href=\"https://openmaptiles.org/\">OpenMapTiles</a> &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors',
  }
);

Stadia_OSMBright.addTo(map);

var marker = L.marker([48.856614, 2.3522219]).addTo(map);
    
     \t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 98,  164 => 85,  159 => 82,  82 => 6,  72 => 5,  62 => 328,  60 => 272,  58 => 192,  54 => 189,  51 => 187,  49 => 5,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'front/baseF.html.twig' %} #}



{% block body %}
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

     <style>
        #calendrier{
            margin: auto;
          /*  width: auto !important;
\t\t\theight: auto !important;*/
\t\t\t width: 80%;
\t\t\theight:auto;
        }

    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: sans-serif;
  background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
}

a,
a:visited,
a:active {
  text-decoration: none;
  color: inherit;
}

a:hover {
  text-decoration: underline;
}

.wrapper {
  width: 75%;
  max-width: 1000px;
  background-color: #313131;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  display: flex;
}

.contact {
  padding: 30px 60px;
  color: white;
}

h1 {
  margin-bottom: 60px;
}

.contact-item {
  display: flex;
  align-items: center;
  font-size: 18px;
}

.contact-item:not(:last-child) {
  margin-bottom: 30px;
}

ion-icon {
  margin-right: 15px;
}

#map {
  height: 400px;
  flex: 1;
}
    </style>
\t  

     {# dd(\$calendar); #}

       <section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"{{ asset('assets/front/img/hero/hero-1.jpg')}}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hs-item set-bg\" data-setbg=\"{{ asset('assets/front/img/hero/hero-2.jpg')}}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 offset-lg-6\">
                            <div class=\"hi-text\">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href=\"#\" class=\"primary-btn\">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   


   <link rel=\"stylesheet\" href=\"./style.css\" />
    <link
      rel=\"stylesheet\"
      href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\"
      integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\"
      crossorigin=\"\"
    />
    <title>Document</title>
  </head>
  <body>
    <div class=\"wrapper\">
      <div class=\"contact\">
        <h1>Nous contacter</h1>
        <div class=\"contact-items\">
          <div class=\"contact-item\">
            <a href=\"tel:0388888888\">
              <ion-icon name=\"call\"></ion-icon>
              03 88 88 88 88
            </a>
          </div>
          <div class=\"contact-item\">
            <a href=\"mailto:exemple@test.com\">
              <ion-icon name=\"mail\"></ion-icon>
              exemple@test.com
            </a>
          </div>
          <div class=\"contact-item\">
            <a href=\"www.exemple.com\">
              <ion-icon name=\"globe\"></ion-icon>
              www.exemple.com
            </a>
          </div>
        </div>
      </div>

      <div id=\"map\"></div>
                            </div>


    <script
      type=\"module\"
      src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js\"
    ></script>
    <script
      nomodule
      src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"
    ></script>
    <script
      src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"
      integrity=\"sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==\"
      crossorigin=\"\"
    ></script>


    <script src=\"./app.js\"></script>
     <script>
var map = L.map(\"map\").setView([48.856614, 2.3522219], 13);

var Stadia_OSMBright = L.tileLayer(
  \"https://tiles.stadiamaps.com/tiles/osm_bright/{z}/{x}/{y}{r}.png\",
  {
    maxZoom: 20,
    attribution:
      '&copy; <a href=\"https://stadiamaps.com/\">Stadia Maps</a>, &copy; <a href=\"https://openmaptiles.org/\">OpenMapTiles</a> &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors',
  }
);

Stadia_OSMBright.addTo(map);

var marker = L.marker([48.856614, 2.3522219]).addTo(map);
    
     \t\t{% endblock %}

 {# ________________________________________________________Debut__Partie JS___________________________________________________________________ #}
\t\t  

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
", "front/contact.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\front\\contact.html.twig");
    }
}
