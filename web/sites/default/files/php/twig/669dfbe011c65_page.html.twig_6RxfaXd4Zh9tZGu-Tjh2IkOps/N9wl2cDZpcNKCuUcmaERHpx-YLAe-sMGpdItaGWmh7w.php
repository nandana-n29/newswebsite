<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/themenew/templates/page.html.twig */
class __TwigTemplate_2103b810d7cd6673863292870a2b98b9 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        yield "
<main>
  <div class=\"header-top black-bg d-none d-md-block \">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-between align-items-center\">
            <div class=\"header-info-left d-flex align-items-center\">
                <ul class=\"list-inline mb-0 d-flex text-white\">
                    <li class=\"list-inline-item d-flex align-items-center mr-3\">
                        <img src=\"assets/img/icon/header_icon1.png\" alt=\"\"> 34ºc, Sunny
                    </li>
                    <li class=\"list-inline-item d-flex align-items-center\">
                        <img src=\"assets/img/icon/header_icon1.png\" alt=\"\"> Tuesday, 18th June, 2019
                    </li>
                </ul>
            </div>
            <div class=\"header-info-right d-flex align-items-center\">
                <ul class=\"list-inline mb-0 header-social d-flex\">
                    <li class=\"list-inline-item d-flex align-items-center\">
                        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    </li>
                    <li class=\"list-inline-item d-flex align-items-center\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </li>
                    <li class=\"list-inline-item d-flex align-items-center\">
                        <a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
      </div>
  </div>
  <div class=\"header-mid d-none d-md-block\">
    <div class=\"container-fluid\">
        <div class=\"row d-flex align-items-center\">
            <!-- Logo -->
            <div class=\"logo-container\">
                ";
        // line 84
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "brand", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        yield "
            </div>
        </div>
    </div>
</div>
 ";
        // line 90
        yield "                    <div class=\"container\">
                        ";
        // line 93
        yield "                               
                                <!-- Main-menu -->
                                ";
        // line 96
        yield "                                    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_navigation", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        yield "
                            </div>
                            ";
        // line 102
        yield " 
                  <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <!-- Trending Top -->
                        <div class=\"trending-top mb-30\">
                            <div class=\"trend-top-img\">
                            ";
        // line 109
        yield "                            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "trend_area", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        yield "
                            </div>
                            </div>
                            </div>
                            </div>




<main>

  
        


  
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/themenew/templates/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  107 => 109,  99 => 102,  93 => 96,  89 => 93,  86 => 90,  78 => 84,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the first sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.social: Items for the social region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<main>
  <div class=\"header-top black-bg d-none d-md-block \">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-between align-items-center\">
            <div class=\"header-info-left d-flex align-items-center\">
                <ul class=\"list-inline mb-0 d-flex text-white\">
                    <li class=\"list-inline-item d-flex align-items-center mr-3\">
                        <img src=\"assets/img/icon/header_icon1.png\" alt=\"\"> 34ºc, Sunny
                    </li>
                    <li class=\"list-inline-item d-flex align-items-center\">
                        <img src=\"assets/img/icon/header_icon1.png\" alt=\"\"> Tuesday, 18th June, 2019
                    </li>
                </ul>
            </div>
            <div class=\"header-info-right d-flex align-items-center\">
                <ul class=\"list-inline mb-0 header-social d-flex\">
                    <li class=\"list-inline-item d-flex align-items-center\">
                        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    </li>
                    <li class=\"list-inline-item d-flex align-items-center\">
                        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </li>
                    <li class=\"list-inline-item d-flex align-items-center\">
                        <a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
      </div>
  </div>
  <div class=\"header-mid d-none d-md-block\">
    <div class=\"container-fluid\">
        <div class=\"row d-flex align-items-center\">
            <!-- Logo -->
            <div class=\"logo-container\">
                {{ page.brand }}
            </div>
        </div>
    </div>
</div>
 {# <div class=\"header-bottom header-sticky\"> #}
                    <div class=\"container\">
                        {# <div class=\"row align-items-center\">
                            <div class=\"col-xl-10 col-lg-10 col-md-12 header-flex\"> #}
                               
                                <!-- Main-menu -->
                                {# <div class=\"main-menu d-none d-md-block\"> #}
                                    {{ page.main_navigation }}
                            </div>
                            {# </div>
                            </div>
                            </div>
                            </div>  #}
 
                  <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <!-- Trending Top -->
                        <div class=\"trending-top mb-30\">
                            <div class=\"trend-top-img\">
                            {# {{ page.content }} #}
                            {{ page.trend_area }}
                            </div>
                            </div>
                            </div>
                            </div>




<main>

  
        


  
", "themes/custom/themenew/templates/page.html.twig", "C:\\xampp\\htdocs\\secondproject.0\\web\\themes\\custom\\themenew\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 84);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}