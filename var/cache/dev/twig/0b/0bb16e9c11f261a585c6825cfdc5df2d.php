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

/* front/about-us.html.twig */
class __TwigTemplate_220f38b201ac74ddd68a90f48fc54670 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about-us.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about-us.html.twig"));

        $this->parent = $this->loadTemplate("front/baseF.html.twig", "front/about-us.html.twig", 1);
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
        echo "
   

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/breadcrumb-bg.jpg"), "html", null, true);
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>About us</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

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

    <!-- About US Section Begin -->
    <section class=\"aboutus-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 p-0\">
                    <div class=\"about-video set-bg\" data-setbg=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/img/about-us.jpg"), "html", null, true);
        echo "\">
                        <a href=\"https://www.youtube.com/watch?v=EzKkl64rRbM\" class=\"play-btn video-popup\"><i
                                class=\"fa fa-caret-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-6 p-0\">
                    <div class=\"about-text\">
                        <div class=\"section-title\">
                            <span>About Us</span>
                            <h2>What we have done</h2>
                        </div>
                        <div class=\"at-desc\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis. aliquip ex ea commodo consequat sit amet,
                                consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class=\"about-bar\">
                            <div class=\"ab-item\">
                                <p>Body building</p>
                                <div id=\"bar1\" class=\"barfiller\">
                                    <span class=\"fill\" data-percentage=\"80\"></span>
                                    <div class=\"tipWrap\">
                                        <span class=\"tip\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"ab-item\">
                                <p>Training</p>
                                <div id=\"bar2\" class=\"barfiller\">
                                    <span class=\"fill\" data-percentage=\"85\"></span>
                                    <div class=\"tipWrap\">
                                        <span class=\"tip\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"ab-item\">
                                <p>Fitness</p>
                                <div id=\"bar3\" class=\"barfiller\">
                                    <span class=\"fill\" data-percentage=\"75\"></span>
                                    <div class=\"tipWrap\">
                                        <span class=\"tip\"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US Section End -->

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
                        <a href=\"#\" class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
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

    <!-- Testimonial Section Begin -->
    <section class=\"testimonial-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Testimonial</span>
                        <h2>Our cilent say</h2>
                    </div>
                </div>
            </div>
            <div class=\"ts_slider owl-carousel\">
                <div class=\"ts_item\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"ti_pic\">
                                <img src=\"img/testimonial/testimonial-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"ti_text\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt<br /> ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo<br /> viverra maecenas accumsan lacus vel facilisis.</p>
                                <h5>Marshmello Gomez</h5>
                                <div class=\"tt-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ts_item\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"ti_pic\">
                                <img src=\"img/testimonial/testimonial-2.jpg\" alt=\"\">
                            </div>
                            <div class=\"ti_text\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt<br /> ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo<br /> viverra maecenas accumsan lacus vel facilisis.</p>
                                <h5>Marshmello Gomez</h5>
                                <div class=\"tt-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/about-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 80,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/baseF.html.twig' %}


{% block body %}

   

    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"{{ asset('assets/front/img/breadcrumb-bg.jpg')}}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>About us</h2>
                        <div class=\"bt-option\">
                            <a href=\"./index.html\">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

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

    <!-- About US Section Begin -->
    <section class=\"aboutus-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-6 p-0\">
                    <div class=\"about-video set-bg\" data-setbg=\"{{ asset('assets/front/img/about-us.jpg')}}\">
                        <a href=\"https://www.youtube.com/watch?v=EzKkl64rRbM\" class=\"play-btn video-popup\"><i
                                class=\"fa fa-caret-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-6 p-0\">
                    <div class=\"about-text\">
                        <div class=\"section-title\">
                            <span>About Us</span>
                            <h2>What we have done</h2>
                        </div>
                        <div class=\"at-desc\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis. aliquip ex ea commodo consequat sit amet,
                                consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class=\"about-bar\">
                            <div class=\"ab-item\">
                                <p>Body building</p>
                                <div id=\"bar1\" class=\"barfiller\">
                                    <span class=\"fill\" data-percentage=\"80\"></span>
                                    <div class=\"tipWrap\">
                                        <span class=\"tip\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"ab-item\">
                                <p>Training</p>
                                <div id=\"bar2\" class=\"barfiller\">
                                    <span class=\"fill\" data-percentage=\"85\"></span>
                                    <div class=\"tipWrap\">
                                        <span class=\"tip\"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"ab-item\">
                                <p>Fitness</p>
                                <div id=\"bar3\" class=\"barfiller\">
                                    <span class=\"fill\" data-percentage=\"75\"></span>
                                    <div class=\"tipWrap\">
                                        <span class=\"tip\"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US Section End -->

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
                        <a href=\"#\" class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
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

    <!-- Testimonial Section Begin -->
    <section class=\"testimonial-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title\">
                        <span>Testimonial</span>
                        <h2>Our cilent say</h2>
                    </div>
                </div>
            </div>
            <div class=\"ts_slider owl-carousel\">
                <div class=\"ts_item\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"ti_pic\">
                                <img src=\"img/testimonial/testimonial-1.jpg\" alt=\"\">
                            </div>
                            <div class=\"ti_text\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt<br /> ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo<br /> viverra maecenas accumsan lacus vel facilisis.</p>
                                <h5>Marshmello Gomez</h5>
                                <div class=\"tt-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"ts_item\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"ti_pic\">
                                <img src=\"img/testimonial/testimonial-2.jpg\" alt=\"\">
                            </div>
                            <div class=\"ti_text\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt<br /> ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo<br /> viverra maecenas accumsan lacus vel facilisis.</p>
                                <h5>Marshmello Gomez</h5>
                                <div class=\"tt-rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

  {% endblock %}", "front/about-us.html.twig", "C:\\Users\\Admin\\Desktop\\Pidev1\\templates\\front\\about-us.html.twig");
    }
}
