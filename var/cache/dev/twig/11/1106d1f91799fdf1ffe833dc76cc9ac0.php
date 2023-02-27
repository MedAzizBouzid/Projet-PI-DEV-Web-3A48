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

/* front/blog.html.twig */
class __TwigTemplate_049bf35a67b6770614b70706b814e4ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/blog.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Gym Template\">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/barfiller.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"canvas-close\">
            <i class=\"fa fa-close\"></i>
        </div>
        <div class=\"canvas-search search-switch\">
            <i class=\"fa fa-search\"></i>
        </div>
        <nav class=\"canvas-menu mobile-menu\">
            <ul>
                <li><a href=\"./index.html\">Home</a></li>
                <li><a href=\"./about-us.html\">About Us</a></li>
                <li><a href=\"./class-details.html\">Classes</a></li>
                <li><a href=\"./services.html\">Services</a></li>
                <li><a href=\"./team.html\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"./about-us.html\">About us</a></li>
                        <li><a href=\"./class-timetable.html\">Classes timetable</a></li>
                        <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
                        <li><a href=\"./team.html\">Our team</a></li>
                        <li><a href=\"./gallery.html\">Gallery</a></li>
                        <li><a href=\"./blog.html\">Our blog</a></li>
                        <li><a href=\"./404.html\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"./contact.html\">Contact</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"canvas-social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"./index.html\">
                            <img src=\"img/logo.png\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"./about-us.html\">About Us</a></li>
                            <li><a href=\"./class-details.html\">Classes</a></li>
                            <li><a href=\"./services.html\">Services</a></li>
                            <li><a href=\"./team.html\">Our Team</a></li>
                            <li class=\"active\"><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./about-us.html\">About us</a></li>
                                    <li><a href=\"./class-timetable.html\">Classes timetable</a></li>
                                    <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
                                    <li><a href=\"./team.html\">Our team</a></li>
                                    <li><a href=\"./gallery.html\">Gallery</a></li>
                                    <li><a href=\"./blog.html\">Our blog</a></li>
                                    <li><a href=\"./404.html\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"top-option\">
                        <div class=\"to-search search-switch\">
                            <i class=\"fa fa-search\"></i>
                        </div>
                        <div class=\"to-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"canvas-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Our Blog</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <a href=\"#\">Pages</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class=\"blog-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 p-0\">
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-5.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-pagination\">
                        <a href=\"#\">1</a>
                        <a href=\"#\">2</a>
                        <a href=\"#\">3</a>
                        <a href=\"#\">Next</a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8 p-0\">
                    <div class=\"sidebar-option\">
                        <div class=\"so-categories\">
                            <h5 class=\"title\">Categories</h5>
                            <ul>
                                <li><a href=\"#\">Yoga <span>12</span></a></li>
                                <li><a href=\"#\">Runing <span>32</span></a></li>
                                <li><a href=\"#\">Weightloss <span>86</span></a></li>
                                <li><a href=\"#\">Cario <span>25</span></a></li>
                                <li><a href=\"#\">Body buiding <span>36</span></a></li>
                                <li><a href=\"#\">Nutrition <span>15</span></a></li>
                            </ul>
                        </div>
                        <div class=\"so-latest\">
                            <h5 class=\"title\">Feature posts</h5>
                            <div class=\"latest-large set-bg\" data-setbg=\"img/letest-blog/latest-1.jpg\">
                                <div class=\"ll-text\">
                                    <h5><a href=\"./blog-details.html\">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
                                    <ul>
                                        <li>Aug 20, 2019</li>
                                        <li>20 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"img/letest-blog/latest-2.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"./blog-details.html\">Grilled Potato and Green Bean Salad</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"img/letest-blog/latest-3.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"./blog-details.html\">The \$8 French Rosé I Buy in Bulk Every Summer</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"img/letest-blog/latest-4.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"./blog-details.html\">Ina Garten's Skillet-Roasted Lemon Chicken</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"img/letest-blog/latest-5.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"./blog-details.html\">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"so-tags\">
                            <h5 class=\"title\">Popular tags</h5>
                            <a href=\"#\">Gyming</a>
                            <a href=\"#\">Body buidling</a>
                            <a href=\"#\">Yoga</a>
                            <a href=\"#\">Weightloss</a>
                            <a href=\"#\">Proffeponal</a>
                            <a href=\"#\">Streching</a>
                            <a href=\"#\">Cardio</a>
                            <a href=\"#\">Karate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"fs-about\">
                        <div class=\"fa-logo\">
                            <a href=\"#\"><img src=\"img/logo.png\" alt=\"\"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class=\"fa-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Classes</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Support</h4>
                        <ul>
                            <li><a href=\"#\">Login</a></li>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"#\">Subscribe</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"fs-widget\">
                        <h4>Tips & Guides</h4>
                        <div class=\"fw-recent\">
                            <h6><a href=\"./blog-details.html\">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class=\"fw-recent\">
                            <h6><a href=\"./blog-details.html\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"copyright-text\">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/masonry.pkgd.min.js\"></script>
    <script src=\"js/jquery.barfiller.js\"></script>
    <script src=\"js/jquery.slicknav.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/main.js\"></script>



</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Gym Template\">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/barfiller.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"canvas-close\">
            <i class=\"fa fa-close\"></i>
        </div>
        <div class=\"canvas-search search-switch\">
            <i class=\"fa fa-search\"></i>
        </div>
        <nav class=\"canvas-menu mobile-menu\">
            <ul>
                <li><a href=\"./index.html\">Home</a></li>
                <li><a href=\"./about-us.html\">About Us</a></li>
                <li><a href=\"./class-details.html\">Classes</a></li>
                <li><a href=\"./services.html\">Services</a></li>
                <li><a href=\"./team.html\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"./about-us.html\">About us</a></li>
                        <li><a href=\"./class-timetable.html\">Classes timetable</a></li>
                        <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
                        <li><a href=\"./team.html\">Our team</a></li>
                        <li><a href=\"./gallery.html\">Gallery</a></li>
                        <li><a href=\"./blog.html\">Our blog</a></li>
                        <li><a href=\"./404.html\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"./contact.html\">Contact</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"canvas-social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"./index.html\">
                            <img src=\"img/logo.png\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"./about-us.html\">About Us</a></li>
                            <li><a href=\"./class-details.html\">Classes</a></li>
                            <li><a href=\"./services.html\">Services</a></li>
                            <li><a href=\"./team.html\">Our Team</a></li>
                            <li class=\"active\"><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./about-us.html\">About us</a></li>
                                    <li><a href=\"./class-timetable.html\">Classes timetable</a></li>
                                    <li><a href=\"./bmi-calculator.html\">Bmi calculate</a></li>
                                    <li><a href=\"./team.html\">Our team</a></li>
                                    <li><a href=\"./gallery.html\">Gallery</a></li>
                                    <li><a href=\"./blog.html\">Our blog</a></li>
                                    <li><a href=\"./404.html\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"top-option\">
                        <div class=\"to-search search-switch\">
                            <i class=\"fa fa-search\"></i>
                        </div>
                        <div class=\"to-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"canvas-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>Our Blog</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <a href=\"#\">Pages</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class=\"blog-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 p-0\">
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-item\">
                        <div class=\"bi-pic\">
                            <img src=\"img/blog/blog-5.jpg\" alt=\"\">
                        </div>
                        <div class=\"bi-text\">
                            <h5><a href=\"./blog-details.html\">Vegan White Peach Mug Cobbler With Cardam Vegan White Peach Mug
                                    Cobbler...</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                labore et dolore magna aliqua accumsan lacus facilisis.</p>
                        </div>
                    </div>
                    <div class=\"blog-pagination\">
                        <a href=\"#\">1</a>
                        <a href=\"#\">2</a>
                        <a href=\"#\">3</a>
                        <a href=\"#\">Next</a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8 p-0\">
                    <div class=\"sidebar-option\">
                        <div class=\"so-categories\">
                            <h5 class=\"title\">Categories</h5>
                            <ul>
                                <li><a href=\"#\">Yoga <span>12</span></a></li>
                                <li><a href=\"#\">Runing <span>32</span></a></li>
                                <li><a href=\"#\">Weightloss <span>86</span></a></li>
                                <li><a href=\"#\">Cario <span>25</span></a></li>
                                <li><a href=\"#\">Body buiding <span>36</span></a></li>
                                <li><a href=\"#\">Nutrition <span>15</span></a></li>
                            </ul>
                        </div>
                        <div class=\"so-latest\">
                            <h5 class=\"title\">Feature posts</h5>
                            <div class=\"latest-large set-bg\" data-setbg=\"img/letest-blog/latest-1.jpg\">
                                <div class=\"ll-text\">
                                    <h5><a href=\"./blog-details.html\">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
                                    <ul>
                                        <li>Aug 20, 2019</li>
                                        <li>20 Comment</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"img/letest-blog/latest-2.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"./blog-details.html\">Grilled Potato and Green Bean Salad</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"img/letest-blog/latest-3.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"./blog-details.html\">The \$8 French Rosé I Buy in Bulk Every Summer</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"img/letest-blog/latest-4.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"./blog-details.html\">Ina Garten's Skillet-Roasted Lemon Chicken</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                            <div class=\"latest-item\">
                                <div class=\"li-pic\">
                                    <img src=\"img/letest-blog/latest-5.jpg\" alt=\"\">
                                </div>
                                <div class=\"li-text\">
                                    <h6><a href=\"./blog-details.html\">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h6>
                                    <span class=\"li-time\">Aug 15, 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"so-tags\">
                            <h5 class=\"title\">Popular tags</h5>
                            <a href=\"#\">Gyming</a>
                            <a href=\"#\">Body buidling</a>
                            <a href=\"#\">Yoga</a>
                            <a href=\"#\">Weightloss</a>
                            <a href=\"#\">Proffeponal</a>
                            <a href=\"#\">Streching</a>
                            <a href=\"#\">Cardio</a>
                            <a href=\"#\">Karate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"fs-about\">
                        <div class=\"fa-logo\">
                            <a href=\"#\"><img src=\"img/logo.png\" alt=\"\"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class=\"fa-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Classes</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Support</h4>
                        <ul>
                            <li><a href=\"#\">Login</a></li>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"#\">Subscribe</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"fs-widget\">
                        <h4>Tips & Guides</h4>
                        <div class=\"fw-recent\">
                            <h6><a href=\"./blog-details.html\">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class=\"fw-recent\">
                            <h6><a href=\"./blog-details.html\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"copyright-text\">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/masonry.pkgd.min.js\"></script>
    <script src=\"js/jquery.barfiller.js\"></script>
    <script src=\"js/jquery.slicknav.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/main.js\"></script>



</body>

</html>", "front/blog.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\front\\blog.html.twig");
    }
}
