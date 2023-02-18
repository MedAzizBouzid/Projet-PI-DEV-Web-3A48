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

/* back/base.html.twig */
class __TwigTemplate_e8418873062af70e3c0a7c810f8dd6dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Body Rock Back_end</title>
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<meta content=\"\" name=\"keywords\">
\t\t<meta
\t\tcontent=\"\" name=\"description\">

\t\t<!-- Favicon -->
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 85
        echo "
\t<body class=\"light\">

\t
\t\t<div
\t\t\tclass=\"container-fluid position-relative d-flex p-0\">
\t\t\t<!-- Spinner Start -->
\t\t\t<div id=\"spinner\" class=\"show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
\t\t\t\t<div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
\t\t\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Spinner End -->


\t\t\t<!-- Sidebar Start -->
\t\t\t<div class=\"sidebar pe-4 pb-3\">
\t\t\t\t<nav class=\"navbar bg-secondary navbar-dark\">
\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t<i class=\"fa fa-user-edit me-2\"></i>DarkPan</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"d-flex align-items-center ms-4 mb-4\">
\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYmkp9a2rrD1Sskb9HLt5mDaTt4QaIs8CcBg&usqp=CAU\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t<div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Ben Romdhane Fedi </h6>
\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"navbar-nav w-100\">
 \t\t\t\t\t\t\t";
        // line 121
        echo "\t\t\t\t\t\t\t ";
        // line 122
        echo "\t\t\t\t\t\t\t\t\t\t\t    ";
        // line 123
        echo "\t\t\t\t\t\t";
        // line 124
        echo "
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-laptop me-2\"></i>Elements</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-transparent border-0\">
\t\t\t\t\t\t\t\t<a href=\"button.html\" class=\"dropdown-item\">Buttons</a>
\t\t\t\t\t\t\t\t<a href=\"typography.html\" class=\"dropdown-item\">Typography</a>
\t\t\t\t\t\t\t\t<a href=\"element.html\" class=\"dropdown-item\">Other Elements</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Show_salle_front");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-th me-2\"></i> Front_Office</a>


\t\t\t\t\t\t<a href=";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_new");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-keyboard me-2\"></i>Form Salle</a>

\t\t\t\t\t\t<a href=";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_new");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-keyboard me-2\"></i>Form Activité</a>

\t\t\t\t\t\t<a href=";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables salles</a>

\t\t\t\t\t\t<a href=";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables Activités</a>


\t\t\t\t\t\t<a href=\"chart.html\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"far fa-file-alt me-2\"></i>Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-transparent border-0\">
\t\t\t\t\t\t\t\t<a href=\"signin.html\" class=\"dropdown-item\">Sign In</a>
\t\t\t\t\t\t\t\t<a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
\t\t\t\t\t\t\t\t<a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
\t\t\t\t\t\t\t\t<a href=\"blank.html\" class=\"dropdown-item active\">Blank Page</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- Sidebar End -->


\t\t\t<!-- Content Start -->
\t\t\t<div
\t\t\t\tclass=\"content\">
\t\t\t\t<!-- Navbar Start -->
\t\t\t\t<nav class=\"navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0\">
\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
\t\t\t\t\t\t<h2 class=\"text-primary mb-0\">
\t\t\t\t\t\t\t<i class=\"fa fa-user-edit\"></i>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t";
        // line 184
        echo "\t\t\t\t\t";
        // line 190
        echo "

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"navbar-nav align-items-center ms-auto\">

\t\t\t\t\t\t";
        // line 196
        echo "
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope me-lg-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Message</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bell me-lg-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Notificatin</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Profile updated</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">New user added</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Password changed</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-lg-2\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">John Doe</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t";
        // line 274
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<!-- Navbar End -->


\t\t\t\t<!-- Blank Start -->
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid pt-4 px-4\">
\t\t\t\t\t";
        // line 285
        echo "\t\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 289
        echo "\t\t\t\t\t";
        // line 290
        echo "\t\t\t\t</div>
\t\t\t\t<!-- Blank End -->


\t\t\t\t<!-- Footer Start -->
\t\t\t\t";
        // line 313
        echo "\t\t\t\t<!-- Footer End -->

\t\t\t\t
\t\t\t</div>
\t\t\t<!-- Content End -->


\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\">
\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t</a>
\t\t\t</div>
 
\t</body>
</html>";
        // line 327
        $this->displayBlock('javascripts', $context, $blocks);
        // line 382
        echo "</body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "
\t\t\t<link
\t\t\thref=\"img/favicon.ico\" rel=\"icon\">

\t\t\t<!-- Google Web Fonts -->
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap\" rel=\"stylesheet\">

\t\t\t<!-- Icon Font Stylesheet -->
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">


\t\t\t<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- Libraries Stylesheet -->
\t\t\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

\t\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t\t<link
\t\t\thref=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- Template Stylesheet -->
\t\t\t<link
\t\t\thref=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- dataTable -->

\t\t\t<link rel=\"stylesheet\" href=\"assets/css/style.css\">
\t\t\t<link href=\"https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\"/>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

 <style>

.btn-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #333;
    color: #fff;
    border: 1px solid #333;
    display: flex;
    justify-content: center;
    align-items: center;    
    cursor: pointer;
}

body.dark {
    color: #fff!important;
    background: #333!important;
}
body.dark .btn-toggle {
    background: #f1f1f1;
    color: #333;
}

</style>



\t\t\t</head>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 285
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 286
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 327
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 328
        echo "
<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/chart/chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

<script>


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

</script>
<!-- Template Javascript -->
<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- dataTable -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"assets/demo/datatables-demo.js\"></script>
<script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js\"></script>
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\$(\"table\").DataTable();
});
</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 371,  522 => 367,  490 => 338,  486 => 337,  482 => 336,  478 => 335,  474 => 334,  470 => 333,  466 => 332,  460 => 328,  450 => 327,  438 => 286,  428 => 285,  376 => 43,  369 => 39,  362 => 35,  357 => 33,  352 => 31,  347 => 29,  330 => 14,  320 => 13,  309 => 382,  307 => 327,  291 => 313,  284 => 290,  282 => 289,  279 => 285,  267 => 274,  190 => 196,  183 => 190,  181 => 184,  142 => 147,  136 => 144,  130 => 141,  124 => 138,  117 => 134,  105 => 124,  103 => 123,  101 => 122,  99 => 121,  62 => 85,  60 => 13,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Body Rock Back_end</title>
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<meta content=\"\" name=\"keywords\">
\t\t<meta
\t\tcontent=\"\" name=\"description\">

\t\t<!-- Favicon -->
\t\t{% block stylesheets %}

\t\t\t<link
\t\t\thref=\"img/favicon.ico\" rel=\"icon\">

\t\t\t<!-- Google Web Fonts -->
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap\" rel=\"stylesheet\">

\t\t\t<!-- Icon Font Stylesheet -->
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">


\t\t\t<link href=\"{{ asset('assets/back/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset('assets/back/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}\" rel=\"stylesheet\"/>
\t\t\t<!-- Libraries Stylesheet -->
\t\t\t<link href=\"{{ asset('assets/back/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset('assets/back/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}\" rel=\"stylesheet\"/>

\t\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t\t<link
\t\t\thref=\"{{ asset('assets/back/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

\t\t\t<!-- Template Stylesheet -->
\t\t\t<link
\t\t\thref=\"{{ asset('assets/back/css/style.css')}}\" rel=\"stylesheet\">

\t\t\t<!-- dataTable -->

\t\t\t<link rel=\"stylesheet\" href=\"assets/css/style.css\">
\t\t\t<link href=\"https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\"/>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

 <style>

.btn-toggle {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #333;
    color: #fff;
    border: 1px solid #333;
    display: flex;
    justify-content: center;
    align-items: center;    
    cursor: pointer;
}

body.dark {
    color: #fff!important;
    background: #333!important;
}
body.dark .btn-toggle {
    background: #f1f1f1;
    color: #333;
}

</style>



\t\t\t</head>
\t{% endblock %}

\t<body class=\"light\">

\t
\t\t<div
\t\t\tclass=\"container-fluid position-relative d-flex p-0\">
\t\t\t<!-- Spinner Start -->
\t\t\t<div id=\"spinner\" class=\"show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
\t\t\t\t<div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
\t\t\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Spinner End -->


\t\t\t<!-- Sidebar Start -->
\t\t\t<div class=\"sidebar pe-4 pb-3\">
\t\t\t\t<nav class=\"navbar bg-secondary navbar-dark\">
\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t<i class=\"fa fa-user-edit me-2\"></i>DarkPan</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"d-flex align-items-center ms-4 mb-4\">
\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYmkp9a2rrD1Sskb9HLt5mDaTt4QaIs8CcBg&usqp=CAU\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t<div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Ben Romdhane Fedi </h6>
\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"navbar-nav w-100\">
 \t\t\t\t\t\t\t{# <i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a> #}
\t\t\t\t\t\t\t {# changer le mode claire => sombre  #}
\t\t\t\t\t\t\t\t\t\t\t    {# <div class=\"btn-toggle\">Go Nuit</div> #}
\t\t\t\t\t\t{# changer le mode claire => sombre---------------------------------------- #}

\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-laptop me-2\"></i>Elements</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-transparent border-0\">
\t\t\t\t\t\t\t\t<a href=\"button.html\" class=\"dropdown-item\">Buttons</a>
\t\t\t\t\t\t\t\t<a href=\"typography.html\" class=\"dropdown-item\">Typography</a>
\t\t\t\t\t\t\t\t<a href=\"element.html\" class=\"dropdown-item\">Other Elements</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href={{path('Show_salle_front')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-th me-2\"></i> Front_Office</a>


\t\t\t\t\t\t<a href={{path('app_salle_new')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-keyboard me-2\"></i>Form Salle</a>

\t\t\t\t\t\t<a href={{path('app_activite_new')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-keyboard me-2\"></i>Form Activité</a>

\t\t\t\t\t\t<a href={{path('app_salle_index')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables salles</a>

\t\t\t\t\t\t<a href={{path('app_activite_index')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables Activités</a>


\t\t\t\t\t\t<a href=\"chart.html\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"far fa-file-alt me-2\"></i>Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-transparent border-0\">
\t\t\t\t\t\t\t\t<a href=\"signin.html\" class=\"dropdown-item\">Sign In</a>
\t\t\t\t\t\t\t\t<a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
\t\t\t\t\t\t\t\t<a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
\t\t\t\t\t\t\t\t<a href=\"blank.html\" class=\"dropdown-item active\">Blank Page</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- Sidebar End -->


\t\t\t<!-- Content Start -->
\t\t\t<div
\t\t\t\tclass=\"content\">
\t\t\t\t<!-- Navbar Start -->
\t\t\t\t<nav class=\"navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0\">
\t\t\t\t\t<a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
\t\t\t\t\t\t<h2 class=\"text-primary mb-0\">
\t\t\t\t\t\t\t<i class=\"fa fa-user-edit\"></i>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t{# __________________________________________ #}
\t\t\t\t\t{# <form action=\"find_Salle\" method=\"GET\" class=\"d-none d-md-flex ms-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control bg-dark border-0\" name=\"find\" type=\"search\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form> #}


\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"navbar-nav align-items-center ms-auto\">

\t\t\t\t\t\t{# __________________________________________ #}

\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope me-lg-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Message</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bell me-lg-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Notificatin</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Profile updated</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">New user added</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Password changed</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-lg-2\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">John Doe</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item\">My Profile</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Settings</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Log Out</a> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<!-- Navbar End -->


\t\t\t\t<!-- Blank Start -->
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid pt-4 px-4\">
\t\t\t\t\t{# <div class=\"row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0\"> #}
\t\t\t\t\t{% block body %}
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t{% endblock %}
\t\t\t\t\t{# </div> #}
\t\t\t\t</div>
\t\t\t\t<!-- Blank End -->


\t\t\t\t<!-- Footer Start -->
\t\t\t\t{# <div class=\"container-fluid pt-4 px-4\">
\t\t\t\t\t<div class=\"bg-secondary rounded-top p-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 text-center text-sm-start\">
\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t<a href=\"#\">Your Site Name</a>, All Right Reserved.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-12 col-sm-6 text-center text-sm-end\">
\t\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\t\tDesigned By
\t\t\t\t\t\t\t\t<a href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t\t\t\t\t\t<br>Distributed By:
\t\t\t\t\t\t\t\t<a href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> #}
\t\t\t\t<!-- Footer End -->

\t\t\t\t
\t\t\t</div>
\t\t\t<!-- Content End -->


\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\">
\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t</a>
\t\t\t</div>
 
\t</body>
</html>{% block javascripts %}

<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('assets/back/lib/chart/chart.min.js')}}\"></script>
<script src=\"{{ asset('assets/back/lib/easing/easing.min.js')}}\"></script>
<script src=\"{{ asset('assets/back/lib/waypoints/waypoints.min.js')}}\"></script>
<script src=\"{{ asset('assets/back/lib/owlcarousel/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset('assets/back/lib/tempusdominus/js/moment.min.js')}}\"></script>
<script src=\"{{ asset('assets/back/lib/tempusdominus/js/moment-timezone.min.js')}}\"></script>
<script src=\"{{ asset('assets/back/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}\"></script>

<script>


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

</script>
<!-- Template Javascript -->
<script src=\"{{ asset('assets/back/js/main.js')}}\"></script>
<!-- dataTable -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('assets/back/js/scripts.js')}}\"></script>
<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"assets/demo/datatables-demo.js\"></script>
<script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js\"></script>
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\$(\"table\").DataTable();
});
</script>{% endblock %}</body></html>
", "back/base.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\base.html.twig");
    }
}
