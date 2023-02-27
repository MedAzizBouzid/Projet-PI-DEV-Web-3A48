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

/* back/index.html.twig */
class __TwigTemplate_caee3a25f70a0333d977f1623d4de211 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/index.html.twig", 1);
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
        echo " ";
        // line 4
        echo "
            <!-- Sale & Revenue Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-secondary rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-secondary rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-secondary rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-secondary rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Worldwide Sales</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"worldwide-sales\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Salse & Revenue</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"salse-revenue\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-secondary text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">Recent Salse</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                            <thead>
                                <tr class=\"text-white\">
                                    <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Invoice</th>
                                    <th scope=\"col\">Customer</th>
                                    <th scope=\"col\">Amount</th>
                                    <th scope=\"col\">Status</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-secondary rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <h6 class=\"mb-0\">Messages</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-secondary rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Calender</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            ";
        // line 207
        echo "                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-secondary rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">To Do List</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <input class=\"form-control bg-dark border-0\" type=\"text\" placeholder=\"Enter task\">
                                <button type=\"button\" class=\"btn btn-primary ms-2\">Add</button>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\" checked>
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span><del>Short task goes here...</del></span>
                                        <button class=\"btn btn-sm text-primary\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-secondary rounded-top p-4\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                            &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                            Designed By <a href=\"https://htmlcodex.com\">HTML Codex</a>
                            <br>Distributed By: <a href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

</body>
             ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 207,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}
 {% block body %}
 {# {% include 'back/includes/header.html.twig' %} #}

            <!-- Sale & Revenue Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-secondary rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-secondary rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-secondary rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-secondary rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Worldwide Sales</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"worldwide-sales\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-secondary text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Salse & Revenue</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"salse-revenue\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-secondary text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">Recent Salse</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                            <thead>
                                <tr class=\"text-white\">
                                    <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Invoice</th>
                                    <th scope=\"col\">Customer</th>
                                    <th scope=\"col\">Amount</th>
                                    <th scope=\"col\">Status</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-secondary rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <h6 class=\"mb-0\">Messages</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-secondary rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Calender</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            {# <div id=\"calender\"></div> #}
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-secondary rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">To Do List</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <input class=\"form-control bg-dark border-0\" type=\"text\" placeholder=\"Enter task\">
                                <button type=\"button\" class=\"btn btn-primary ms-2\">Add</button>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\" checked>
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span><del>Short task goes here...</del></span>
                                        <button class=\"btn btn-sm text-primary\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-secondary rounded-top p-4\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                            &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                            Designed By <a href=\"https://htmlcodex.com\">HTML Codex</a>
                            <br>Distributed By: <a href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

</body>
             {% endblock %}
", "back/index.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev_Git\\Projet-PI-DEV-Web\\templates\\back\\index.html.twig");
    }
}
