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

/* home/home.html.twig */
class __TwigTemplate_5dd495dd21ace7560b3e42986dc37eaf2d801b466930ff0b28100fb5d7b3d456 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- header-start -->
    <header>
        <div class=\"header-area \">
            <div id=\"sticky-header\" class=\"main-header-area \">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-3 col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"index.html\">
                                    <img src=\"img/logo.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-lg-7\">
                            <div class=\"main-menu   d-none d-lg-block\">
                                <nav>
                                    <ul id=\"navigation\">
                                        <li><a href=\"index.html\">home</a></li>
                                        <li><a href=\"about.html\">about</a></li>
                                        <li><a href=\"Recipes.html\">Recipes</a></li>
                                        <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"blog.html\">blog</a></li>
                                                <li><a href=\"single-blog.html\">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"recipes_details.html\">Recipes Details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                            <div class=\"search_icon\">
                                <a href=\"#\">
                                    <i class=\"ti-search\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class=\"slider_area\">
        <div class=\"single_slider  d-flex align-items-center\" style=\"background-image: url(";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 61, $this->source); })()), "imageSlider", [], "any", false, false, false, 61), "html", null, true);
        echo ");\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-center\">
                    <div class=\"col-xl-8 \">
                        <div class=\"slider_text text-center\">
                            <div class=\"text\">
                                <h3>
                                    ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 68, $this->source); })()), "captionSlider", [], "any", false, false, false, 68), "html", null, true);
        echo "
                                </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- recepie_area_start  -->
    <div class=\"recepie_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4 col-md-6\">
                    <div class=\"single_recepie text-center\">
                        <div class=\"recepie_thumb\">
                            <img src=\"img/recepie/recpie_1.png\" alt=\"\">
                        </div>
                        <h3>Egg Manchurian</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href=\"#\" class=\"line_btn\">View Full Recipe</a>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-6\">
                    <div class=\"single_recepie text-center\">
                        <div class=\"recepie_thumb\">
                            <img src=\"img/recepie/recpie_2.png\" alt=\"\">
                        </div>
                        <h3>Pure Vegetable Bowl</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href=\"#\" class=\"line_btn\">View Full Recipe</a>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-6\">
                    <div class=\"single_recepie text-center\">
                        <div class=\"recepie_thumb\">
                            <img src=\"img/recepie/recpie_3.png\" alt=\"\">
                        </div>
                        <h3>Egg Masala Ramen</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href=\"#\" class=\"line_btn\">View Full Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /recepie_area_start  -->

    <!-- recepie_videos   -->
    <div class=\"recepie_videoes_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-6 col-md-6\">
                    <div class=\"recepie_info\">
                        <h3>Recipe videos 
                            that never misses 
                            any portion</h3>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women.</p>
                    <div class=\"video_watch d-flex align-items-center\">
                        <a class=\"popup-video\" href=\"https://www.youtube.com/watch?v=lr6AMBsjxrY\"> <i class=\"ti-control-play\"></i> </a>
                        <div class=\"watch_text\" >
                            <h4>Watch Video</h4>
                            <p>You will love our execution</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"videos_thumb\">
                        <div class=\"big_img\">
                            <img src=\"img/video/big.png\" alt=\"\">
                        </div>
                        <div class=\"small_thumb\">
                            <img src=\"img/video/small_1.png\" alt=\"\">
                        </div>
                        <div class=\"small_thumb_2\">
                            <img src=\"img/video/2.png\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ recepie_videos   -->

    <!-- dish_area start  -->
    <div class=\"dish_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"dish_wrap d-flex\">
                        <div class=\"single_dish text-center\">
                            <div class=\"thumb\">
                                <img src=\"img/recepie/recpie_4.png\" alt=\"\">
                            </div>
                            <h3>Birthday Catering</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class=\"single_dish text-center\">
                            <div class=\"thumb\">
                                <img src=\"img/recepie/recpie_5.png\" alt=\"\">
                            </div>
                            <h3>Birthday Catering</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class=\"single_dish text-center\">
                            <div class=\"thumb\">
                                <img src=\"img/recepie/recpie_6.png\" alt=\"\">
                            </div>
                            <h3>Birthday Catering</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ dish_area start  -->

    <!-- latest_trand     -->
    <div class=\"latest_trand_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"trand_info text-center\">
                        <p>Thousands of recipes are waiting to be watched</p>
                        <h3>Discover latest trending recipes</h3>
                        <a href=\"#\" class=\"boxed-btn3\">View all Recipes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_trand     -->

    <!-- customer_feedback_area  -->
    <div class=\"customer_feedback_area\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-50\">
                <div class=\"col-xl-9\">
                    <div class=\"section_title text-center\">
                        <h3>Feedback From Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially <br> in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"customer_active owl-carousel\">
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/2.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/1.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/2.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/1.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/2.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / customer_feedback_area  -->

    <!-- download_app_area -->
    <div class=\"download_app_area\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"download_thumb\">
                        <div class=\"big_img\">
                            <img src=\"img/video/big_1.png\" alt=\"\">
                        </div>
                        <div class=\"small_01\">
                            <img src=\"img/video/small_sm1.png\" alt=\"\">
                        </div>
                        <div class=\"small_02\">
                            <img src=\"img/video/sm2.png\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"download_text\">
                        <h3>Download app to
                            get recipes from
                            Everywhere</h3>
                        <div class=\"download_android_apple\">
                            <a class=\"active\" href=\"#\">
                                <div class=\"download_link d-flex\">
                                    <i class=\"fa fa-apple\"></i>
                                    <div class=\"store\">
                                        <h5>Available</h5>
                                        <p>on App Store</p>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\">
                                <div class=\"download_link d-flex\">
                                    <i class=\"fa fa-android\"></i>
                                    <div class=\"store\">
                                        <h5>Download</h5>
                                        <p>from Play Store</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ download_app_area -->

    <!-- footer  -->
    <footer class=\"footer\">
            <div class=\"footer_top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-2 col-md-6 col-lg-2\">
                            <div class=\"footer_widget\">
                                <h3 class=\"footer_title\">
                                    Top Products
                                </h3>
                                <ul>
                                    <li><a href=\"#\">Managed Website</a></li>
                                    <li><a href=\"#\"> Manage Reputation</a></li>
                                    <li><a href=\"#\">Power Tools</a></li>
                                    <li><a href=\"#\">Marketing Service</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-md-6 col-lg-2\">
                            <div class=\"footer_widget\">
                                <h3 class=\"footer_title\">
                                    Quick Links
                                </h3>
                                <ul>
                                    <li><a href=\"#\">Jobs</a></li>
                                    <li><a href=\"#\">Brand Assets</a></li>
                                    <li><a href=\"#\">Investor Relations</a></li>
                                    <li><a href=\"#\">Terms of Service</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-md-6 col-lg-2\">
                            <div class=\"footer_widget\">
                                <h3 class=\"footer_title\">
                                    Features
                                </h3>
                                <ul>
                                    <li><a href=\"#\">Jobs</a></li>
                                    <li><a href=\"#\">Brand Assets</a></li>
                                    <li><a href=\"#\">Investor Relations</a></li>
                                    <li><a href=\"#\">Terms of Service</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-md-6 col-lg-2\">
                            <div class=\"footer_widget\">
                                <h3 class=\"footer_title\">
                                    Resources
                                </h3>
                                <ul>
                                    <li><a href=\"#\">Guides</a></li>
                                    <li><a href=\"#\">Research</a></li>
                                    <li><a href=\"#\">Experts</a></li>
                                    <li><a href=\"#\">Agencies</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-md-6 col-lg-4\">
                                <div class=\"footer_widget\">
                                        <h3 class=\"footer_title\">
                                                Subscribe
                                        </h3>
                                        <p class=\"newsletter_text\">You can trust us. we only send promo offers,</p>
                                        <form action=\"#\" class=\"newsletter_form\">
                                            <input type=\"text\" placeholder=\"Enter your mail\">
                                            <button type=\"submit\"> <i class=\"ti-arrow-right\"></i> </button>
                                        </form>
                                        
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"copy-right_text\">
                <div class=\"container\">
                    <div class=\"footer_border\"></div>
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-8 col-md-8\">
                            <p class=\"copy_right\">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class=\"col-xl-4 col-md-4\">
                            <div class=\"socail_links\">
                                <ul>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"ti-facebook\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"ti-twitter-alt\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-dribbble\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-behance\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!--/ footer  -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 68,  127 => 61,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <!-- header-start -->
    <header>
        <div class=\"header-area \">
            <div id=\"sticky-header\" class=\"main-header-area \">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-3 col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"index.html\">
                                    <img src=\"img/logo.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-lg-7\">
                            <div class=\"main-menu   d-none d-lg-block\">
                                <nav>
                                    <ul id=\"navigation\">
                                        <li><a href=\"index.html\">home</a></li>
                                        <li><a href=\"about.html\">about</a></li>
                                        <li><a href=\"Recipes.html\">Recipes</a></li>
                                        <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"blog.html\">blog</a></li>
                                                <li><a href=\"single-blog.html\">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"recipes_details.html\">Recipes Details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                            <div class=\"search_icon\">
                                <a href=\"#\">
                                    <i class=\"ti-search\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class=\"slider_area\">
        <div class=\"single_slider  d-flex align-items-center\" style=\"background-image: url({{ home.imageSlider }});\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-center\">
                    <div class=\"col-xl-8 \">
                        <div class=\"slider_text text-center\">
                            <div class=\"text\">
                                <h3>
                                    {{ home.captionSlider }}
                                </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- recepie_area_start  -->
    <div class=\"recepie_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-4 col-md-6\">
                    <div class=\"single_recepie text-center\">
                        <div class=\"recepie_thumb\">
                            <img src=\"img/recepie/recpie_1.png\" alt=\"\">
                        </div>
                        <h3>Egg Manchurian</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href=\"#\" class=\"line_btn\">View Full Recipe</a>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-6\">
                    <div class=\"single_recepie text-center\">
                        <div class=\"recepie_thumb\">
                            <img src=\"img/recepie/recpie_2.png\" alt=\"\">
                        </div>
                        <h3>Pure Vegetable Bowl</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href=\"#\" class=\"line_btn\">View Full Recipe</a>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-4 col-md-6\">
                    <div class=\"single_recepie text-center\">
                        <div class=\"recepie_thumb\">
                            <img src=\"img/recepie/recpie_3.png\" alt=\"\">
                        </div>
                        <h3>Egg Masala Ramen</h3>
                        <span>Appetizer</span>
                        <p>Time Needs: 30 Mins</p>
                        <a href=\"#\" class=\"line_btn\">View Full Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /recepie_area_start  -->

    <!-- recepie_videos   -->
    <div class=\"recepie_videoes_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-lg-6 col-md-6\">
                    <div class=\"recepie_info\">
                        <h3>Recipe videos 
                            that never misses 
                            any portion</h3>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women.</p>
                    <div class=\"video_watch d-flex align-items-center\">
                        <a class=\"popup-video\" href=\"https://www.youtube.com/watch?v=lr6AMBsjxrY\"> <i class=\"ti-control-play\"></i> </a>
                        <div class=\"watch_text\" >
                            <h4>Watch Video</h4>
                            <p>You will love our execution</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"videos_thumb\">
                        <div class=\"big_img\">
                            <img src=\"img/video/big.png\" alt=\"\">
                        </div>
                        <div class=\"small_thumb\">
                            <img src=\"img/video/small_1.png\" alt=\"\">
                        </div>
                        <div class=\"small_thumb_2\">
                            <img src=\"img/video/2.png\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ recepie_videos   -->

    <!-- dish_area start  -->
    <div class=\"dish_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"dish_wrap d-flex\">
                        <div class=\"single_dish text-center\">
                            <div class=\"thumb\">
                                <img src=\"img/recepie/recpie_4.png\" alt=\"\">
                            </div>
                            <h3>Birthday Catering</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class=\"single_dish text-center\">
                            <div class=\"thumb\">
                                <img src=\"img/recepie/recpie_5.png\" alt=\"\">
                            </div>
                            <h3>Birthday Catering</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class=\"single_dish text-center\">
                            <div class=\"thumb\">
                                <img src=\"img/recepie/recpie_6.png\" alt=\"\">
                            </div>
                            <h3>Birthday Catering</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ dish_area start  -->

    <!-- latest_trand     -->
    <div class=\"latest_trand_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"trand_info text-center\">
                        <p>Thousands of recipes are waiting to be watched</p>
                        <h3>Discover latest trending recipes</h3>
                        <a href=\"#\" class=\"boxed-btn3\">View all Recipes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_trand     -->

    <!-- customer_feedback_area  -->
    <div class=\"customer_feedback_area\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-50\">
                <div class=\"col-xl-9\">
                    <div class=\"section_title text-center\">
                        <h3>Feedback From Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially <br> in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"customer_active owl-carousel\">
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/2.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/1.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/2.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/1.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class=\"single_customer d-flex\">
                            <div class=\"thumb\">
                                <img src=\"img/testmonial/2.png\" alt=\"\">
                            </div>
                            <div class=\"customer_meta\">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / customer_feedback_area  -->

    <!-- download_app_area -->
    <div class=\"download_app_area\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"download_thumb\">
                        <div class=\"big_img\">
                            <img src=\"img/video/big_1.png\" alt=\"\">
                        </div>
                        <div class=\"small_01\">
                            <img src=\"img/video/small_sm1.png\" alt=\"\">
                        </div>
                        <div class=\"small_02\">
                            <img src=\"img/video/sm2.png\" alt=\"\">
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-md-6\">
                    <div class=\"download_text\">
                        <h3>Download app to
                            get recipes from
                            Everywhere</h3>
                        <div class=\"download_android_apple\">
                            <a class=\"active\" href=\"#\">
                                <div class=\"download_link d-flex\">
                                    <i class=\"fa fa-apple\"></i>
                                    <div class=\"store\">
                                        <h5>Available</h5>
                                        <p>on App Store</p>
                                    </div>
                                </div>
                            </a>
                            <a href=\"#\">
                                <div class=\"download_link d-flex\">
                                    <i class=\"fa fa-android\"></i>
                                    <div class=\"store\">
                                        <h5>Download</h5>
                                        <p>from Play Store</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ download_app_area -->

    <!-- footer  -->
    <footer class=\"footer\">
            <div class=\"footer_top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-2 col-md-6 col-lg-2\">
                            <div class=\"footer_widget\">
                                <h3 class=\"footer_title\">
                                    Top Products
                                </h3>
                                <ul>
                                    <li><a href=\"#\">Managed Website</a></li>
                                    <li><a href=\"#\"> Manage Reputation</a></li>
                                    <li><a href=\"#\">Power Tools</a></li>
                                    <li><a href=\"#\">Marketing Service</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-md-6 col-lg-2\">
                            <div class=\"footer_widget\">
                                <h3 class=\"footer_title\">
                                    Quick Links
                                </h3>
                                <ul>
                                    <li><a href=\"#\">Jobs</a></li>
                                    <li><a href=\"#\">Brand Assets</a></li>
                                    <li><a href=\"#\">Investor Relations</a></li>
                                    <li><a href=\"#\">Terms of Service</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-md-6 col-lg-2\">
                            <div class=\"footer_widget\">
                                <h3 class=\"footer_title\">
                                    Features
                                </h3>
                                <ul>
                                    <li><a href=\"#\">Jobs</a></li>
                                    <li><a href=\"#\">Brand Assets</a></li>
                                    <li><a href=\"#\">Investor Relations</a></li>
                                    <li><a href=\"#\">Terms of Service</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-md-6 col-lg-2\">
                            <div class=\"footer_widget\">
                                <h3 class=\"footer_title\">
                                    Resources
                                </h3>
                                <ul>
                                    <li><a href=\"#\">Guides</a></li>
                                    <li><a href=\"#\">Research</a></li>
                                    <li><a href=\"#\">Experts</a></li>
                                    <li><a href=\"#\">Agencies</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-md-6 col-lg-4\">
                                <div class=\"footer_widget\">
                                        <h3 class=\"footer_title\">
                                                Subscribe
                                        </h3>
                                        <p class=\"newsletter_text\">You can trust us. we only send promo offers,</p>
                                        <form action=\"#\" class=\"newsletter_form\">
                                            <input type=\"text\" placeholder=\"Enter your mail\">
                                            <button type=\"submit\"> <i class=\"ti-arrow-right\"></i> </button>
                                        </form>
                                        
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"copy-right_text\">
                <div class=\"container\">
                    <div class=\"footer_border\"></div>
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-8 col-md-8\">
                            <p class=\"copy_right\">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class=\"col-xl-4 col-md-4\">
                            <div class=\"socail_links\">
                                <ul>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"ti-facebook\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"ti-twitter-alt\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-dribbble\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-behance\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!--/ footer  -->
    {% endblock %}
", "home/home.html.twig", "/home/mohamed/Desktop/training/Laravel/Julie/cooking-recipes/templates/home/home.html.twig");
    }
}