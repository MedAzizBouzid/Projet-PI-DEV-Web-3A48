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
        echo "   <style>
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
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        echo "</h3>
\t\t\t\t\t<p style=\"color:smoke-white;\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"cd-single-item\">
\t\t\t\t\t<h3>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 32, $this->source); })()), "lieu", [], "any", false, false, false, 32), "html", null, true);
        echo "</h3>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">


\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"class-details-text\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"cd-pic\">";
        // line 43
        echo "\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"cd-trainer\" style=\"background-color: white-smoke\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
                                
\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-pic\">
\t\t\t\t\t\t\t\t\t\t<img  src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51))), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"cd-trainer-text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"trainer-title\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Notre salle</h4>

\t\t\t\t\t\t\t\t\t\t\t<h4 style=\"color:red;\">";
        // line 59
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 59, $this->source); })()), "nom", [], "any", false, false, false, 59)), "html", null, true);
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
        // line 78
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"trainer-info\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Superficie</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 82, $this->source); })()), "superficie", [], "any", false, false, false, 82)), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Lieu</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 85, $this->source); })()), "lieu", [], "any", false, false, false, 85), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Telephone</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 88, $this->source); })()), "telephone", [], "any", false, false, false, 88), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color:red;\">Email</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["salle"]) || array_key_exists("salle", $context) ? $context["salle"] : (function () { throw new RuntimeError('Variable "salle" does not exist.', 91, $this->source); })()), "email", [], "any", false, false, false, 91), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t\t\t</ul>




                                        
\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo "                                                
            

                                                    ";
        // line 109
        echo "                                                 
                                    \t 
                                      
\t\t\t\t";
        // line 125
        echo "\t\t\t\t\t\t";
        // line 178
        echo "\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 181
        echo "
\t\t\t\t</div>

";
        // line 185
        echo "  ";
        // line 208
        echo "\t\t\t</section>
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
        return array (  219 => 208,  217 => 185,  212 => 181,  208 => 178,  206 => 125,  201 => 109,  196 => 105,  186 => 91,  180 => 88,  174 => 85,  168 => 82,  161 => 78,  139 => 59,  128 => 51,  118 => 43,  105 => 32,  99 => 29,  95 => 28,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/baseF.html.twig' %}
{% block body %}
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
\t\t{% endblock %}
\t\t{# <!-- Class Details Section End --> #}

\t\t{# <!-- Class Timetable Section Begin --> #}
\t\t{# <section class=\"class-timetable-section class-details-timetable spad\">
\t\t\t\t        <div class=\"container\">
\t\t\t\t            <div class=\"row\">
\t\t\t\t                <div class=\"col-lg-12\">
\t\t\t\t                    <div class=\"class-details-timetable_title\">
\t\t\t\t                        <h5>Classes timetable</h5>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div>
\t\t\t\t            <div class=\"row\">
\t\t\t\t                <div class=\"col-lg-12\">
\t\t\t\t                    <div class=\"class-timetable details-timetable\">
\t\t\t\t                        <table>
\t\t\t\t                            <thead>
\t\t\t\t                                <tr>
\t\t\t\t                                    <th></th>
\t\t\t\t                                    <th>Monday</th>
\t\t\t\t                                    <th>Tuesday</th>
\t\t\t\t                                    <th>Wednesday</th>
\t\t\t\t                                    <th>Thursday</th>
\t\t\t\t                                    <th>Friday</th>
\t\t\t\t                                    <th>Saturday</th>
\t\t\t\t                                    <th>Sunday</th>
\t\t\t\t                                </tr>
\t\t\t\t                            </thead>
\t\t\t\t                            <tbody>
\t\t\t\t                                <tr>
\t\t\t\t                                    <td class=\"class-time\">6.00am - 8.00am</td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>WEIGHT LOOSE</h5>
\t\t\t\t                                        <span>RLefew D. Loee</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t                                        <h5>Cardio</h5>
\t\t\t\t                                        <span>RLefew D. Loee</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>Yoga</h5>
\t\t\t\t                                        <span>Keaf Shen</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t                                        <h5>Fitness</h5>
\t\t\t\t                                        <span>Kimberly Stone</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg blank-td\"></td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t                                        <h5>Boxing</h5>
\t\t\t\t                                        <span>Rachel Adam</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>Body Building</h5>
\t\t\t\t                                        <span>Robert Cage</span>
\t\t\t\t                                    </td>
\t\t\t\t                                </tr>
\t\t\t\t                                <tr>
\t\t\t\t                                    <td class=\"class-time\">10.00am - 12.00am</td>
\t\t\t\t                                    <td class=\"blank-td\"></td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t                                        <h5>Fitness</h5>
\t\t\t\t                                        <span>Kimberly Stone</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>WEIGHT LOOSE</h5>
\t\t\t\t                                        <span>RLefew D. Loee</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t                                        <h5>Cardio</h5>
\t\t\t\t                                        <span>RLefew D. Loee</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>Body Building</h5>
\t\t\t\t                                        <span>Robert Cage</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t                                        <h5>Karate</h5>
\t\t\t\t                                        <span>Donald Grey</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"blank-td\"></td>
\t\t\t\t                                </tr>
\t\t\t\t                                <tr>
\t\t\t\t                                    <td class=\"class-time\">5.00pm - 7.00pm</td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t                                        <h5>Boxing</h5>
\t\t\t\t                                        <span>Rachel Adam</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t                                        <h5>Karate</h5>
\t\t\t\t                                        <span>Donald Grey</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>Body Building</h5>
\t\t\t\t                                        <span>Robert Cage</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"blank-td\"></td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>Yoga</h5>
\t\t\t\t                                        <span>Keaf Shen</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t                                        <h5>Cardio</h5>
\t\t\t\t                                        <span>RLefew D. Loee</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t                                        <h5>Fitness</h5>
\t\t\t\t                                        <span>Kimberly Stone</span>
\t\t\t\t                                    </td>
\t\t\t\t                                </tr>
\t\t\t\t                                <tr>
\t\t\t\t                                    <td class=\"class-time\">7.00pm - 9.00pm</td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t                                        <h5>Cardio</h5>
\t\t\t\t                                        <span>RLefew D. Loee</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg blank-td\"></td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t                                        <h5>Boxing</h5>
\t\t\t\t                                        <span>Rachel Adam</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>Yoga</h5>
\t\t\t\t                                        <span>Keaf Shen</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"motivation\">
\t\t\t\t                                        <h5>Karate</h5>
\t\t\t\t                                        <span>Donald Grey</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"dark-bg hover-dp ts-meta\" data-tsmeta=\"fitness\">
\t\t\t\t                                        <h5>Boxing</h5>
\t\t\t\t                                        <span>Rachel Adam</span>
\t\t\t\t                                    </td>
\t\t\t\t                                    <td class=\"hover-dp ts-meta\" data-tsmeta=\"workout\">
\t\t\t\t                                        <h5>WEIGHT LOOSE</h5>
\t\t\t\t                                        <span>RLefew D. Loee</span>
\t\t\t\t                                    </td>
\t\t\t\t                                </tr>
\t\t\t\t                            </tbody>
\t\t\t\t                        </table>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t    </section>
\t\t\t\t    <!-- Class Timetable Section End -->
\t\t\t\t
\t\t\t\t    <!-- Get In Touch Section Begin -->
\t\t\t\t    <div class=\"gettouch-section\">
\t\t\t\t        <div class=\"container\">
\t\t\t\t            <div class=\"row\">
\t\t\t\t                <div class=\"col-md-4\">
\t\t\t\t                    <div class=\"gt-text\">
\t\t\t\t                        <i class=\"fa fa-map-marker\"></i>
\t\t\t\t                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t                <div class=\"col-md-4\">
\t\t\t\t                    <div class=\"gt-text\">
\t\t\t\t                        <i class=\"fa fa-mobile\"></i>
\t\t\t\t                        <ul>
\t\t\t\t                            <li>125-711-811</li>
\t\t\t\t                            <li>125-668-886</li>
\t\t\t\t                        </ul>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t                <div class=\"col-md-4\">
\t\t\t\t                    <div class=\"gt-text email\">
\t\t\t\t                        <i class=\"fa fa-envelope\"></i>
\t\t\t\t                        <p>Support.gymcenter@gmail.com</p>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t    <!-- Get In Touch Section End -->
\t\t\t\t
\t\t\t\t    <!-- Footer Section Begin -->
\t\t\t\t    <section class=\"footer-section\">
\t\t\t\t        <div class=\"container\">
\t\t\t\t            <div class=\"row\">
\t\t\t\t                <div class=\"col-lg-4\">
\t\t\t\t                    <div class=\"fs-about\">
\t\t\t\t                        <div class=\"fa-logo\">
\t\t\t\t                            <a href=\"#\"><img src=\"img/logo.png\" alt=\"\"></a>
\t\t\t\t                        </div>
\t\t\t\t                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
\t\t\t\t                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
\t\t\t\t                        <div class=\"fa-social\">
\t\t\t\t                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
\t\t\t\t                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
\t\t\t\t                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
\t\t\t\t                        </div>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t                <div class=\"col-lg-2 col-md-3 col-sm-6\">
\t\t\t\t                    <div class=\"fs-widget\">
\t\t\t\t                        <h4>Useful links</h4>
\t\t\t\t                        <ul>
\t\t\t\t                            <li><a href=\"#\">About</a></li>
\t\t\t\t                            <li><a href=\"#\">Blog</a></li>
\t\t\t\t                            <li><a href=\"#\">Classes</a></li>
\t\t\t\t                            <li><a href=\"#\">Contact</a></li>
\t\t\t\t                        </ul>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t                <div class=\"col-lg-2 col-md-3 col-sm-6\">
\t\t\t\t                    <div class=\"fs-widget\">
\t\t\t\t                        <h4>Support</h4>
\t\t\t\t                        <ul>
\t\t\t\t                            <li><a href=\"#\">Login</a></li>
\t\t\t\t                            <li><a href=\"#\">My account</a></li>
\t\t\t\t                            <li><a href=\"#\">Subscribe</a></li>
\t\t\t\t                            <li><a href=\"#\">Contact</a></li>
\t\t\t\t                        </ul>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t                <div class=\"col-lg-4 col-md-6\">
\t\t\t\t                    <div class=\"fs-widget\">
\t\t\t\t                        <h4>Tips & Guides</h4>
\t\t\t\t                        <div class=\"fw-recent\">
\t\t\t\t                            <h6><a href=\"#\">Physical fitness may help prevent depression, anxiety</a></h6>
\t\t\t\t                            <ul>
\t\t\t\t                                <li>3 min read</li>
\t\t\t\t                                <li>20 Comment</li>
\t\t\t\t                            </ul>
\t\t\t\t                        </div>
\t\t\t\t                        <div class=\"fw-recent\">
\t\t\t\t                            <h6><a href=\"#\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
\t\t\t\t                            <ul>
\t\t\t\t                                <li>3 min read</li>
\t\t\t\t                                <li>20 Comment</li>
\t\t\t\t                            </ul>
\t\t\t\t                        </div>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div>
\t\t\t\t            <div class=\"row\">
\t\t\t\t                <div class=\"col-lg-12 text-center\">
\t\t\t\t                    <div class=\"copyright-text\">
\t\t\t\t                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t    </section>
\t\t\t\t    <!-- Footer Section End -->
\t\t\t\t
\t\t\t\t    <!-- Search model Begin -->
\t\t\t\t    <div class=\"search-model\">
\t\t\t\t        <div class=\"h-100 d-flex align-items-center justify-content-center\">
\t\t\t\t            <div class=\"search-close-switch\">+</div>
\t\t\t\t            <form class=\"search-model-form\">
\t\t\t\t                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
\t\t\t\t            </form>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t    <!-- Search model end -->
\t\t\t\t
\t\t\t\t    <!-- Js Plugins -->
\t\t\t\t    <script src=\"js/jquery-3.3.1.min.js\"></script>
\t\t\t\t    <script src=\"js/bootstrap.min.js\"></script>
\t\t\t\t    <script src=\"js/jquery.magnific-popup.min.js\"></script>
\t\t\t\t    <script src=\"js/masonry.pkgd.min.js\"></script>
\t\t\t\t    <script src=\"js/jquery.barfiller.js\"></script>
\t\t\t\t    <script src=\"js/jquery.slicknav.js\"></script>
\t\t\t\t    <script src=\"js/owl.carousel.min.js\"></script>
\t\t\t\t    <script src=\"js/main.js\"></script>
\t\t\t\t #}

\t\t{# {% endblock %} #}
", "front/class_details.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\front\\class_details.html.twig");
    }
}
