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

/* front/details_salles.html.twig */
class __TwigTemplate_0037a631b41e0ef198b6400a69f1f530 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/details_salles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/details_salles.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<style>
body{margin-top:20px;}
.icon-box.medium {
    font-size: 20px;
    width: 50px;
    height: 50px;
    line-height: 50px;
}
.icon-box {
    font-size: 30px;
    margin-bottom: 33px;
    display: inline-block;
    color: #ffffff;
    height: 65px;
    width: 65px;
    line-height: 65px;
    background-color: #59b73f;
    text-align: center;
    border-radius: 0.3rem;
}
.social-icon-style2 li a {
    display: inline-block;
    font-size: 14px;
    text-align: center;
    color: #ffffff;
    background: #59b73f;
    height: 41px;
    line-height: 41px;
    width: 41px;
}
.rounded-3 {
    border-radius: 0.3rem !important;
}

.social-icon-style2 {
    margin-bottom: 0;
    display: inline-block;
    padding-left: 10px;
    list-style: none;
}

.social-icon-style2 li {
    vertical-align: middle;
    display: inline-block;
    margin-right: 5px;
}

a, a:active, a:focus {
    color: #616161;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}

.text-secondary, .text-secondary-hover:hover {
    color: #59b73f !important;
}
.display-25 {
    font-size: 1.4rem;
}

.text-primary, .text-primary-hover:hover {
    color: #ff712a !important;
}

p {
    margin: 0 0 20px;
}

.mb-1-6, .my-1-6 {
    margin-bottom: 1.6rem;
}
</style>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css\" integrity=\"sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=\" crossorigin=\"anonymous\"/>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn\">
\t\t\t\t<div class=\"card border-0 shadow\">
\t\t\t\t\t<img src=\"https://www.bootdey.com/img/Content/avatar/avatar6.png\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body p-1-9 p-xl-5\">
\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t<h3 class=\"h4 mb-0\">Dakota Johnston</h3>
\t\t\t\t\t\t\t<span class=\"text-primary\">CEO &amp; Founder</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list-unstyled mb-4\">
\t\t\t\t\t\t\t<li class=\"mb-3\">
\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-envelope display-25 me-3 text-secondary\"></i>dakota@gmail.com</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"mb-3\">
\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-mobile-alt display-25 me-3 text-secondary\"></i>+012 (345) 6789</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt display-25 me-3 text-secondary\"></i>205 Main Street, USA</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"social-icon-style2 ps-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"rounded-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"rounded-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"rounded-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"rounded-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"ps-lg-1-6 ps-xl-5\">
\t\t\t\t\t<div class=\"mb-5 wow fadeIn\">
\t\t\t\t\t\t<div class=\"text-start mb-1-6 wow fadeIn\">
\t\t\t\t\t\t\t<h2 class=\"h1 mb-0 text-primary\">#About Me</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
\t\t\t\t\t\t<p class=\"mb-0\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-5 wow fadeIn\">
\t\t\t\t\t\t<div class=\"text-start mb-1-6 wow fadeIn\">
\t\t\t\t\t\t\t<h2 class=\"mb-0 text-primary\">#Education</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-n4\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xl-4 mt-4\">
\t\t\t\t\t\t\t\t<div class=\"card text-center border-0 rounded-3\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-bookmark-alt icon-box medium rounded-3 mb-4\"></i>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-3\">Education</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">University of defgtion, fecat complete ME of synage</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xl-4 mt-4\">
\t\t\t\t\t\t\t\t<div class=\"card text-center border-0 rounded-3\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-pencil-alt icon-box medium rounded-3 mb-4\"></i>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-3\">Career Start</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">After complete engineer join HU Signage Ltd as a project manager</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xl-4 mt-4\">
\t\t\t\t\t\t\t\t<div class=\"card text-center border-0 rounded-3\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-medall-alt icon-box medium rounded-3 mb-4\"></i>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-3\">Experience</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">About 20 years of experience and professional in signage</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeIn\">
\t\t\t\t\t\t<div class=\"text-start mb-1-6 wow fadeIn\">
\t\t\t\t\t\t\t<h2 class=\"mb-0 text-primary\">#Skills &amp; Experience</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"mb-4\">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
\t\t\t\t\t\t<div class=\"progress-style1\">
\t\t\t\t\t\t\t<div class=\"progress-text\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6 fw-bold\">Wind Turbines</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6 text-end\">70%</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-progress progress rounded-3 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"animated custom-bar progress-bar slideInLeft\" style=\"width:70%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"10\" role=\"progressbar\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress-text\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6 fw-bold\">Solar Panels</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6 text-end\">90%</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-progress progress rounded-3 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"animated custom-bar progress-bar bg-secondary slideInLeft\" style=\"width:90%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"70\" role=\"progressbar\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress-text\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6 fw-bold\">Hybrid Energy</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6 text-end\">80%</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-progress progress rounded-3\">
\t\t\t\t\t\t\t\t<div class=\"animated custom-bar progress-bar bg-dark slideInLeft\" style=\"width:80%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"70\" role=\"progressbar\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/details_salles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

<style>
body{margin-top:20px;}
.icon-box.medium {
    font-size: 20px;
    width: 50px;
    height: 50px;
    line-height: 50px;
}
.icon-box {
    font-size: 30px;
    margin-bottom: 33px;
    display: inline-block;
    color: #ffffff;
    height: 65px;
    width: 65px;
    line-height: 65px;
    background-color: #59b73f;
    text-align: center;
    border-radius: 0.3rem;
}
.social-icon-style2 li a {
    display: inline-block;
    font-size: 14px;
    text-align: center;
    color: #ffffff;
    background: #59b73f;
    height: 41px;
    line-height: 41px;
    width: 41px;
}
.rounded-3 {
    border-radius: 0.3rem !important;
}

.social-icon-style2 {
    margin-bottom: 0;
    display: inline-block;
    padding-left: 10px;
    list-style: none;
}

.social-icon-style2 li {
    vertical-align: middle;
    display: inline-block;
    margin-right: 5px;
}

a, a:active, a:focus {
    color: #616161;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
}

.text-secondary, .text-secondary-hover:hover {
    color: #59b73f !important;
}
.display-25 {
    font-size: 1.4rem;
}

.text-primary, .text-primary-hover:hover {
    color: #ff712a !important;
}

p {
    margin: 0 0 20px;
}

.mb-1-6, .my-1-6 {
    margin-bottom: 1.6rem;
}
</style>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css\" integrity=\"sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=\" crossorigin=\"anonymous\"/>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn\">
\t\t\t\t<div class=\"card border-0 shadow\">
\t\t\t\t\t<img src=\"https://www.bootdey.com/img/Content/avatar/avatar6.png\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body p-1-9 p-xl-5\">
\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t<h3 class=\"h4 mb-0\">Dakota Johnston</h3>
\t\t\t\t\t\t\t<span class=\"text-primary\">CEO &amp; Founder</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"list-unstyled mb-4\">
\t\t\t\t\t\t\t<li class=\"mb-3\">
\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-envelope display-25 me-3 text-secondary\"></i>dakota@gmail.com</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"mb-3\">
\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-mobile-alt display-25 me-3 text-secondary\"></i>+012 (345) 6789</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt display-25 me-3 text-secondary\"></i>205 Main Street, USA</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<ul class=\"social-icon-style2 ps-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"rounded-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"rounded-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"rounded-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"rounded-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"ps-lg-1-6 ps-xl-5\">
\t\t\t\t\t<div class=\"mb-5 wow fadeIn\">
\t\t\t\t\t\t<div class=\"text-start mb-1-6 wow fadeIn\">
\t\t\t\t\t\t\t<h2 class=\"h1 mb-0 text-primary\">#About Me</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
\t\t\t\t\t\t<p class=\"mb-0\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-5 wow fadeIn\">
\t\t\t\t\t\t<div class=\"text-start mb-1-6 wow fadeIn\">
\t\t\t\t\t\t\t<h2 class=\"mb-0 text-primary\">#Education</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-n4\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xl-4 mt-4\">
\t\t\t\t\t\t\t\t<div class=\"card text-center border-0 rounded-3\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-bookmark-alt icon-box medium rounded-3 mb-4\"></i>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-3\">Education</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">University of defgtion, fecat complete ME of synage</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xl-4 mt-4\">
\t\t\t\t\t\t\t\t<div class=\"card text-center border-0 rounded-3\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-pencil-alt icon-box medium rounded-3 mb-4\"></i>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-3\">Career Start</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">After complete engineer join HU Signage Ltd as a project manager</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xl-4 mt-4\">
\t\t\t\t\t\t\t\t<div class=\"card text-center border-0 rounded-3\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-medall-alt icon-box medium rounded-3 mb-4\"></i>
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-3\">Experience</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">About 20 years of experience and professional in signage</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeIn\">
\t\t\t\t\t\t<div class=\"text-start mb-1-6 wow fadeIn\">
\t\t\t\t\t\t\t<h2 class=\"mb-0 text-primary\">#Skills &amp; Experience</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"mb-4\">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
\t\t\t\t\t\t<div class=\"progress-style1\">
\t\t\t\t\t\t\t<div class=\"progress-text\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6 fw-bold\">Wind Turbines</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6 text-end\">70%</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-progress progress rounded-3 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"animated custom-bar progress-bar slideInLeft\" style=\"width:70%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"10\" role=\"progressbar\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress-text\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6 fw-bold\">Solar Panels</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6 text-end\">90%</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-progress progress rounded-3 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"animated custom-bar progress-bar bg-secondary slideInLeft\" style=\"width:90%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"70\" role=\"progressbar\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress-text\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-6 fw-bold\">Hybrid Energy</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-6 text-end\">80%</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"custom-progress progress rounded-3\">
\t\t\t\t\t\t\t\t<div class=\"animated custom-bar progress-bar bg-dark slideInLeft\" style=\"width:80%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"70\" role=\"progressbar\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "front/details_salles.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\front\\details_salles.html.twig");
    }
}
