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

/* materialize/template/extension/module/featured.twig */
class __TwigTemplate_eb68378dd6a2d551cc523e6dd498fdf3e94f5b1db81fe976b4876482dedc5b3a extends \Twig\Template
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
        // line 1
        echo "<section class=\"section href-underline\">
\t<h2>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t<div class=\"row\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "\t\t<div class=\"col s12 m6 xl4\">
\t\t\t<div class=\"card sticky-action large hoverable\">
\t\t\t\t";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                    // line 10
                    echo "\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "color", [], "any", false, false, false, 10);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "color_text", [], "any", false, false, false, 10);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 10);
                    echo "</span></li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 14)) {
                echo "<span class=\"white-text badge red lighten-1 percent\">";
                echo ($context["text_percent"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent_discount", [], "any", false, false, false, 14);
                echo "%</span>";
            }
            // line 15
            echo "\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle close-icon activator\">more_vert</i>
\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\"><img class=\"responsive-img lazyload\" src=\"";
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-content center-align\">
\t\t\t\t\t<span class=\"card-title\"><a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
            echo "\" class=\"grey-text text-darken-4\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
            echo "</a></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-action center-align grey lighten-5\">
\t\t\t\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["product"], "add_cart", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t\t\t\t\t\t<button class=\"btn btn-floating btn-large waves-effect waves-light red add-cart\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 24);
                echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t<button class=\"btn btn-floating btn-large add-cart\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28)) {
                // line 29
                echo "\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t<span class=\"card-price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                    echo "</span>
\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32);
                    echo "</span>
\t\t\t\t\t\t\t<span class=\"card-price red-text text-darken-2\">";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 33);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 36);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<span class=\"grey lighten-5\">
\t\t\t\t\t\t\t";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 44) < $context["i"])) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 49
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 59);
            echo "\" class=\"btn waves-effect waves-light red width-max\">";
            echo ($context["text_more_detailed"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t<span class=\"card-title\"><a href=\"";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 62);
            echo "\" class=\"grey-text text-darken-4\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62);
            echo "</a><i class=\"material-icons waves-effect waves-circle close-icon\">close</i></span>
\t\t\t\t\t<p>";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 63);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 68,  222 => 63,  216 => 62,  208 => 59,  204 => 57,  196 => 51,  193 => 50,  187 => 49,  183 => 47,  179 => 45,  176 => 44,  171 => 43,  169 => 42,  164 => 39,  161 => 38,  153 => 36,  150 => 35,  145 => 33,  140 => 32,  134 => 30,  131 => 29,  128 => 28,  124 => 26,  116 => 24,  114 => 23,  106 => 20,  92 => 17,  88 => 15,  79 => 14,  75 => 12,  62 => 10,  58 => 9,  55 => 8,  53 => 7,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/extension/module/featured.twig", "");
    }
}
