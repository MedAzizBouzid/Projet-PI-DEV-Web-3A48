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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

\t\t";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 85
        echo "
\t<body class=\"light\">


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
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Ben Romdhane Fedi
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"navbar-nav w-100\">
\t\t\t\t\t\t";
        // line 122
        echo "\t\t\t\t\t\t";
        // line 123
        echo "\t\t\t\t\t\t";
        // line 124
        echo "\t\t\t\t\t\t";
        // line 125
        echo "
\t\t\t\t\t\t\t<div class=\"nav-item dropdown\"> <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
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
\t\t\t\t\t\t\t<i class=\"fa fa-th me-2\"></i>
\t\t\t\t\t\t\tFront_Office</a>


\t\t\t\t\t\t<a href=";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_new");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-keyboard me-2\"></i>Form Salle</a>

\t\t\t\t\t\t<a href=";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_new");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-keyboard me-2\"></i>Form Activité</a>

\t\t\t\t\t\t<a href=";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_salle_index");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables salles</a>

\t\t\t\t\t\t<a href=";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables Activités</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planning");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables calendrier</a>

\t\t\t\t\t\t<a href=";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_index");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>
\t\t\t\t\t\t\tGestion du Planning
\t\t\t\t\t\t</a>


\t\t\t\t\t\t";
        // line 162
        echo "\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"far fa-file-alt me-2\"></i>Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-transparent border-0\">
\t\t\t\t\t\t\t\t<a href=";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier_index");
        echo " class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>
\t\t\t\t\t\t\t\t\tGestion du Planning
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
        // line 173
        echo "\t\t\t\t\t\t\t</div>
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

\t\t\t\t\t";
        // line 196
        echo "\t\t\t\t\t";
        // line 202
        echo "

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"navbar-nav align-items-center ms-auto\">

\t\t\t\t\t\t";
        // line 208
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

\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-lg-2\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">John Doe</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0\">";
        // line 286
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<!-- Navbar End -->


\t\t\t\t<!-- Blank Start -->
\t\t\t\t<div style=\"background-color: black; \"  class=\"container-fluid pt-4 px-4\">
\t\t\t\t";
        // line 296
        echo "\t\t\t\t\t<div>
\t\t\t\t\t\t<div>";
        // line 297
        $this->displayBlock('body', $context, $blocks);
        // line 301
        echo "\t\t\t\t\t\t";
        // line 302
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blank End -->


\t\t\t";
        // line 328
        echo "\t\t\t\t<!-- Footer End -->


\t\t\t</div>
\t\t\t<!-- Content End -->


\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\">
\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t</a>
\t\t</div>


\t\t";
        // line 342
        $this->displayBlock('javascripts', $context, $blocks);
        // line 380
        echo "\t</body>
</html></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
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
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- Libraries Stylesheet -->
\t\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

\t\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t\t<link
\t\t\thref=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- Template Stylesheet -->
\t\t\t<link
\t\t\thref=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t\t<!-- dataTable -->

\t\t\t<link rel=\"stylesheet\" href=\"assets/css/style.css\">
\t\t\t<link href=\"https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\"/>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

\t\t\t<style>

\t\t\t\t.btn-toggle {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 15px;
\t\t\t\t\tright: 15px;
\t\t\t\t\twidth: 80px;
\t\t\t\t\theight: 80px;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\tbackground: #333;
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tborder: 1px solid #333;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: center;
\t\t\t\t\talign-items: center;
\t\t\t\t\tcursor: pointer;
\t\t\t\t}

\t\t\t\tbody.dark {
\t\t\t\t\tcolor: #fff !important;
\t\t\t\t\tbackground: #333 !important;
\t\t\t\t}
\t\t\t\tbody.dark .btn-toggle {
\t\t\t\t\tbackground: #f1f1f1;
\t\t\t\t\tcolor: #333;
\t\t\t\t}
\t\t\t</style>


\t\t</head>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 297
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 298
        echo "

\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 342
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 343
        echo "
\t\t\t<!-- JavaScript Libraries -->
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/chart/chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t";
        // line 356
        echo "\t\t\t";
        // line 358
        echo "
\t\t\t";
        // line 359
        echo "<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" integrity=\"sha256-aZcQFPL6+lsgcL5uMWS2B/cf6WplQQOEhLKi88tYh6A=\" crossorigin=\"anonymous\"> </script>
\t\t\t";
        // line 361
        echo "
\t\t\t<!-- Template Javascript -->
\t\t\t<script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- dataTable -->
\t\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/back/js/scripts.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"assets/demo/datatables-demo.js\"></script>
\t\t\t<script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js\"></script>
\t\t\t<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function () {
\$(\"table\").DataTable();
});
\t\t\t</script>
\t\t";
        
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
        return array (  537 => 367,  530 => 363,  526 => 361,  523 => 359,  520 => 358,  518 => 356,  513 => 353,  509 => 352,  505 => 351,  501 => 350,  497 => 349,  493 => 348,  489 => 347,  483 => 343,  473 => 342,  461 => 298,  451 => 297,  401 => 45,  394 => 41,  387 => 37,  382 => 35,  377 => 33,  372 => 31,  355 => 16,  345 => 15,  333 => 380,  331 => 342,  315 => 328,  307 => 302,  305 => 301,  303 => 297,  300 => 296,  289 => 286,  212 => 208,  205 => 202,  203 => 196,  179 => 173,  172 => 166,  166 => 162,  157 => 154,  151 => 151,  145 => 148,  139 => 145,  133 => 142,  127 => 139,  119 => 134,  108 => 125,  106 => 124,  104 => 123,  102 => 122,  64 => 85,  62 => 15,  46 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\">

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

\t\t\t<style>

\t\t\t\t.btn-toggle {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 15px;
\t\t\t\t\tright: 15px;
\t\t\t\t\twidth: 80px;
\t\t\t\t\theight: 80px;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\tbackground: #333;
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tborder: 1px solid #333;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: center;
\t\t\t\t\talign-items: center;
\t\t\t\t\tcursor: pointer;
\t\t\t\t}

\t\t\t\tbody.dark {
\t\t\t\t\tcolor: #fff !important;
\t\t\t\t\tbackground: #333 !important;
\t\t\t\t}
\t\t\t\tbody.dark .btn-toggle {
\t\t\t\t\tbackground: #f1f1f1;
\t\t\t\t\tcolor: #333;
\t\t\t\t}
\t\t\t</style>


\t\t</head>
\t{% endblock %}

\t<body class=\"light\">


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
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Ben Romdhane Fedi
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"navbar-nav w-100\">
\t\t\t\t\t\t{# <i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a> #}
\t\t\t\t\t\t{# changer le mode claire => sombre  #}
\t\t\t\t\t\t{# <div class=\"btn-toggle\">Go Nuit</div> #}
\t\t\t\t\t\t{# changer le mode claire => sombre---------------------------------------- #}

\t\t\t\t\t\t\t<div class=\"nav-item dropdown\"> <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-laptop me-2\"></i>Elements</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-transparent border-0\">
\t\t\t\t\t\t\t\t<a href=\"button.html\" class=\"dropdown-item\">Buttons</a>
\t\t\t\t\t\t\t\t<a href=\"typography.html\" class=\"dropdown-item\">Typography</a>
\t\t\t\t\t\t\t\t<a href=\"element.html\" class=\"dropdown-item\">Other Elements</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href={{path('Show_salle_front')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-th me-2\"></i>
\t\t\t\t\t\t\tFront_Office</a>


\t\t\t\t\t\t<a href={{path('app_salle_new')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-keyboard me-2\"></i>Form Salle</a>

\t\t\t\t\t\t<a href={{path('app_activite_new')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-keyboard me-2\"></i>Form Activité</a>

\t\t\t\t\t\t<a href={{path('app_salle_index')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables salles</a>

\t\t\t\t\t\t<a href={{path('app_activite_index')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables Activités</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href={{path('app_planning')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>Tables calendrier</a>

\t\t\t\t\t\t<a href={{path('app_calendrier_index')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>
\t\t\t\t\t\t\tGestion du Planning
\t\t\t\t\t\t</a>


\t\t\t\t\t\t{# <a href=\"chart.html\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chart-bar me-2\"></i>Charts</a> #}
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"far fa-file-alt me-2\"></i>Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-transparent border-0\">
\t\t\t\t\t\t\t\t<a href={{path('app_calendrier_index')}} class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table me-2\"></i>
\t\t\t\t\t\t\t\t\tGestion du Planning
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{# <a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blank.html\" class=\"dropdown-item active\">Blank Page</a> #}
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

\t\t\t\t\t{# __________________________________________ #}
\t\t\t\t\t{# <form action=\"find_Salle\" method=\"GET\" class=\"d-none d-md-flex ms-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control bg-dark border-0\" name=\"find\" type=\"search\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form> #}


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

\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-lg-2\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">John Doe</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0\">{# <a href=\"#\" class=\"dropdown-item\">My Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Settings</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Log Out</a> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<!-- Navbar End -->


\t\t\t\t<!-- Blank Start -->
\t\t\t\t<div style=\"background-color: black; \"  class=\"container-fluid pt-4 px-4\">
\t\t\t\t{# <div style=\"background-color: white\" class=\"row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0\">  #}
\t\t\t\t\t<div>
\t\t\t\t\t\t<div>{% block body %}


\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t{# </div> #}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Blank End -->


\t\t\t{# <!-- Footer Start -->
\t\t\t\t\t\t\t\t\t\t\t\t\t{# 
\t\t\t\t\t\t\t\t\t<div class=\"container-fluid pt-4 px-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-secondary rounded-top p-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 text-center text-sm-start\">
\t\t\t\t\t\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Your Site Name</a>, All Right Reserved.
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-12 col-sm-6 text-center text-sm-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\t\t\t\t\t\t\tDesigned By
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>Distributed By:
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t<!-- Footer End -->


\t\t\t</div>
\t\t\t<!-- Content End -->


\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\">
\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t</a>
\t\t</div>


\t\t{% block javascripts %}

\t\t\t<!-- JavaScript Libraries -->
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"{{ asset('assets/back/lib/chart/chart.min.js')}}\"></script>
\t\t\t<script src=\"{{ asset('assets/back/lib/easing/easing.min.js')}}\"></script>
\t\t\t<script src=\"{{ asset('assets/back/lib/waypoints/waypoints.min.js')}}\"></script>
\t\t\t<script src=\"{{ asset('assets/back/lib/owlcarousel/owl.carousel.min.js')}}\"></script>
\t\t\t<script src=\"{{ asset('assets/back/lib/tempusdominus/js/moment.min.js')}}\"></script>
\t\t\t<script src=\"{{ asset('assets/back/lib/tempusdominus/js/moment-timezone.min.js')}}\"></script>
\t\t\t<script src=\"{{ asset('assets/back/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}\"></script>

\t\t\t{# _________________________________________________________ #}
\t\t\t{# <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js\"
\t\t\t\t\t\t\t\t integrity=\"sha256-z82jYOK/utiAteR0z6FjIOQmdWzvxqXJ6wsXbGJkBwY=\" crossorigin=\"anonymous\"></script> #}

\t\t\t{# Versioin 5.3 #}<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js\" integrity=\"sha256-aZcQFPL6+lsgcL5uMWS2B/cf6WplQQOEhLKi88tYh6A=\" crossorigin=\"anonymous\"> </script>
\t\t\t{# ______________________________________________________ #}

\t\t\t<!-- Template Javascript -->
\t\t\t<script src=\"{{ asset('assets/back/js/main.js')}}\"></script>
\t\t\t<!-- dataTable -->
\t\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"{{ asset('assets/back/js/scripts.js')}}\"></script>
\t\t\t<script src=\"https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"assets/demo/datatables-demo.js\"></script>
\t\t\t<script src=\"https://kit.fontawesome.com/a076d05399.js\" crossorigin=\"anonymous\"></script>
\t\t\t<script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js\"></script>
\t\t\t<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(document).ready(function () {
\$(\"table\").DataTable();
});
\t\t\t</script>
\t\t{% endblock %}
\t</body>
</html></body></html>
", "back/base.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\base.html.twig");
    }
}
