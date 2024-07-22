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

/* themes/custom/themenew/templates/menu--main.html.twig */
class __TwigTemplate_74424bf92e67c9fad85bbe5ba08be2a7 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        yield "

";
        // line 96
        yield "


";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        return; yield '';
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            $macros["menus"] = $this;
            // line 31
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 32
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    yield "      <div class=\"header-flex-container custom-menu header-flex\">
        <ul";
                    // line 34
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu header-flex"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 36
                    yield "      <ul class=\"menu header-flex\">
    ";
                }
                // line 38
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    yield "      ";
                    // line 40
                    $context["classes"] = ["menu-item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 42
$context["item"], "is_expanded", [], "any", false, false, true, 42)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 43
$context["item"], "is_collapsed", [], "any", false, false, true, 43)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) ? ("menu-item--active-trail") : (""))];
                    // line 47
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                    yield ">
        ";
                    // line 48
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 48), 48, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 48), 48, $this->source)), "html", null, true);
                    yield "
        ";
                    // line 49
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49)) {
                        // line 50
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 50), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 50, $context, $this->getSourceContext()));
                        yield "
        ";
                    }
                    // line 52
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "    </ul>
    ";
                // line 55
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 56
                    yield "      <div class=\"col-xl-2 col-lg-2 col-md-4 search-container\">
        <div class=\"header-right-btn f-right d-none d-lg-block\">
          <i class=\"fas fa-search special-tag\"></i>
          <div class=\"search-box\">
            <form action=\"#\">
              <input type=\"text\" placeholder=\"Search\">
            </form>
          </div>
        </div>
      </div>
    </div>
     <div class=\"trending-area fix\">
        <div class=\"container\">
            <div class=\"trending-main\">
                <!-- Trending Tittle -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"trending-tittle\">
                            <strong>Trending now</strong>
                            <div class=\"trending-animated\">
                                <ul id=\"js-news\" class=\"js-hidden\">
                                    <li class=\"news-item\">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class=\"news-item\">Spondon IT sit amet, consectetur.......</li>
                                    <li class=\"news-item\">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                                                            </div>
                          
                            
                
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
       
    ";
                }
                // line 94
                yield "  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/themenew/templates/menu--main.html.twig";
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
        return array (  174 => 94,  135 => 56,  133 => 55,  130 => 54,  123 => 52,  117 => 50,  115 => 49,  111 => 48,  106 => 47,  104 => 44,  103 => 43,  102 => 42,  101 => 40,  99 => 39,  94 => 38,  90 => 36,  85 => 34,  82 => 33,  79 => 32,  76 => 31,  73 => 30,  59 => 29,  50 => 96,  45 => 27,  42 => 22,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link URL, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/3.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <div class=\"header-flex-container custom-menu header-flex\">
        <ul{{ attributes.addClass('menu header-flex') }}>
    {% else %}
      <ul class=\"menu header-flex\">
    {% endif %}
    {% for item in items %}
      {%
        set classes = [
          'menu-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
        ]
      %}
      <li{{ item.attributes.addClass(classes) }}>
        {{ link(item.title, item.url) }}
        {% if item.below %}
          {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
    {% if menu_level == 0 %}
      <div class=\"col-xl-2 col-lg-2 col-md-4 search-container\">
        <div class=\"header-right-btn f-right d-none d-lg-block\">
          <i class=\"fas fa-search special-tag\"></i>
          <div class=\"search-box\">
            <form action=\"#\">
              <input type=\"text\" placeholder=\"Search\">
            </form>
          </div>
        </div>
      </div>
    </div>
     <div class=\"trending-area fix\">
        <div class=\"container\">
            <div class=\"trending-main\">
                <!-- Trending Tittle -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"trending-tittle\">
                            <strong>Trending now</strong>
                            <div class=\"trending-animated\">
                                <ul id=\"js-news\" class=\"js-hidden\">
                                    <li class=\"news-item\">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class=\"news-item\">Spondon IT sit amet, consectetur.......</li>
                                    <li class=\"news-item\">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                                {# {{ page.trend_area }} #}
                            </div>
                          
                            
                
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
       
    {% endif %}
  {% endif %}
{% endmacro %}



", "themes/custom/themenew/templates/menu--main.html.twig", "C:\\xampp\\htdocs\\secondproject.0\\web\\themes\\custom\\themenew\\templates\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 38, "set" => 40);
        static $filters = array("escape" => 34);
        static $functions = array("link" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link'],
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
