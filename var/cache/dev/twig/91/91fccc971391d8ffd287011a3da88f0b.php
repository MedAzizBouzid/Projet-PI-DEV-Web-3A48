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

/* front/index.html.twig */
class __TwigTemplate_5095627a0218150f2c205ce4921712e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("front/baseF.html.twig", "front/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<section class=\"hero-section\">
        <div class=\"hs-slider owl-carousel\">
            <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 7
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
        // line 20
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
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class=\"choseus-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-034-stationary-bike\"></span>
                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-033-juice\"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-002-dumbell\"></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-014-heart-beat\"></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class=\"classes-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h4>Indoor cycling</h4>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-5.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class=\"banner-section set-bg\" data-setbg=\"img/banner-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"bs-text\">
                        <h2>registration now to get more deals</h2>
                        <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                        <a href=\"#\" class=\"primary-btn  btn-normal\">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class=\"pricing-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Class drop-in</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 39.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>12 Month unlimited</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 99.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>6 Month unlimited</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 59.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class=\"gallery-section\">
        <div class=\"gallery\">
            <div class=\"grid-sizer\"></div>
            <div class=\"gs-item grid-wide set-bg\" data-setbg=\"img/gallery/gallery-1.jpg\">
                <a href=\"img/gallery/gallery-1.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-2.jpg\">
                <a href=\"img/gallery/gallery-2.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-3.jpg\">
                <a href=\"img/gallery/gallery-3.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-4.jpg\">
                <a href=\"img/gallery/gallery-4.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-5.jpg\">
                <a href=\"img/gallery/gallery-5.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item grid-wide set-bg\" data-setbg=\"img/gallery/gallery-6.jpg\">
                <a href=\"img/gallery/gallery-6.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class=\"team-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"team-title\">
                        <div class=\"section-title\">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <a href=";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_activite_infront");
        echo " class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"ts-slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-1.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-2.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-3.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-4.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-5.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-6.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 289,  88 => 20,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/baseF.html.twig' %}


{% block body %}
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
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class=\"choseus-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-034-stationary-bike\"></span>
                        <h4>Modern equipment</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-033-juice\"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-002-dumbell\"></span>
                        <h4>Proffesponal training plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            dolore facilisis.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"cs-item\">
                        <span class=\"flaticon-014-heart-beat\"></span>
                        <h4>Unique to your needs</h4>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                            facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class=\"classes-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-2.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-3.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-4.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Cardio</span>
                            <h4>Indoor cycling</h4>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"class-item\">
                        <div class=\"ci-pic\">
                            <img src=\"img/classes/class-5.jpg\" alt=\"\">
                        </div>
                        <div class=\"ci-text\">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class=\"banner-section set-bg\" data-setbg=\"img/banner-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"bs-text\">
                        <h2>registration now to get more deals</h2>
                        <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                        <a href=\"#\" class=\"primary-btn  btn-normal\">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class=\"pricing-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>Class drop-in</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 39.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>12 Month unlimited</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 99.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"ps-item\">
                        <h3>6 Month unlimited</h3>
                        <div class=\"pi-price\">
                            <h2>\$ 59.0</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to mouth</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                        <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class=\"gallery-section\">
        <div class=\"gallery\">
            <div class=\"grid-sizer\"></div>
            <div class=\"gs-item grid-wide set-bg\" data-setbg=\"img/gallery/gallery-1.jpg\">
                <a href=\"img/gallery/gallery-1.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-2.jpg\">
                <a href=\"img/gallery/gallery-2.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-3.jpg\">
                <a href=\"img/gallery/gallery-3.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-4.jpg\">
                <a href=\"img/gallery/gallery-4.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-5.jpg\">
                <a href=\"img/gallery/gallery-5.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
            <div class=\"gs-item grid-wide set-bg\" data-setbg=\"img/gallery/gallery-6.jpg\">
                <a href=\"img/gallery/gallery-6.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class=\"team-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"team-title\">
                        <div class=\"section-title\">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <a href={{path('show_activite_infront')}} class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"ts-slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-1.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-2.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-3.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-4.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-5.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-6.jpg\">
                            <div class=\"ts_text\">
                                <h4>Athart Rachel</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    {% endblock %}", "front/index.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev1\\templates\\front\\index.html.twig");
    }
}
