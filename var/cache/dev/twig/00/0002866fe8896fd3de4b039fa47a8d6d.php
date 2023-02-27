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

/* back/chart.html.twig */
class __TwigTemplate_18987ef23e65337352598e93c7b2b415 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/chart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/chart.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/chart.html.twig", 1);
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
       <style>
\t\tbody {
\t\t\tbackground-color: #f5f5f5;
\t\t\tcolor: #222;
\t\t\ttransition: background-color 0.5s ease;
\t\t}
\t\tbody.dark-mode {
\t\t\tbackground-color: #222;
\t\t\tcolor: #f5f5f5;
\t\t}
\t\t.button {
\t\t\tbackground-color: #007bff;
\t\t\tcolor: #fff;
\t\t\tpadding: 10px;
\t\t\tborder-radius: 5px;
\t\t\tcursor: pointer;
\t\t}
\t</style>
<body>
\t<button class=\"button\" onclick=\"toggleDarkMode()\">Mode sombre / Mode nuit</button>

\t<script>
\t\tfunction toggleDarkMode() {
\t\t\tvar body = document.getElementsByTagName('body')[0];
\t\t\tbody.classList.toggle('dark-mode');
\t\t}
\t</script>


            <!-- Chart Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Single Line Chart</h6>
                            <canvas id=\"line-chart\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Multiple Line Chart</h6>
                            <canvas id=\"salse-revenue\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Single Bar Chart</h6>
                            <canvas id=\"bar-chart\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Multiple Bar Chart</h6>
                            <canvas id=\"worldwide-sales\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Pie Chart</h6>
                            <canvas id=\"pie-chart\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Doughnut Chart</h6>
                            <canvas id=\"doughnut-chart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            </body>
            <!-- Chart End -->
         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}
    {% block body %}
                        
       <style>
\t\tbody {
\t\t\tbackground-color: #f5f5f5;
\t\t\tcolor: #222;
\t\t\ttransition: background-color 0.5s ease;
\t\t}
\t\tbody.dark-mode {
\t\t\tbackground-color: #222;
\t\t\tcolor: #f5f5f5;
\t\t}
\t\t.button {
\t\t\tbackground-color: #007bff;
\t\t\tcolor: #fff;
\t\t\tpadding: 10px;
\t\t\tborder-radius: 5px;
\t\t\tcursor: pointer;
\t\t}
\t</style>
<body>
\t<button class=\"button\" onclick=\"toggleDarkMode()\">Mode sombre / Mode nuit</button>

\t<script>
\t\tfunction toggleDarkMode() {
\t\t\tvar body = document.getElementsByTagName('body')[0];
\t\t\tbody.classList.toggle('dark-mode');
\t\t}
\t</script>


            <!-- Chart Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Single Line Chart</h6>
                            <canvas id=\"line-chart\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Multiple Line Chart</h6>
                            <canvas id=\"salse-revenue\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Single Bar Chart</h6>
                            <canvas id=\"bar-chart\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Multiple Bar Chart</h6>
                            <canvas id=\"worldwide-sales\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Pie Chart</h6>
                            <canvas id=\"pie-chart\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Doughnut Chart</h6>
                            <canvas id=\"doughnut-chart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            </body>
            <!-- Chart End -->
         {% endblock %}



        ", "back/chart.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\chart.html.twig");
    }
}
