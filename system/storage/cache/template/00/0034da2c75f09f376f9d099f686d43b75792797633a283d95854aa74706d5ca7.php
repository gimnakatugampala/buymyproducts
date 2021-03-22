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

/* materialize/template/product/category.twig */
class __TwigTemplate_62fd03df45ee68c593db0a7d0ea2f507e42c10fec1ff15556051f95a8a978f63 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        ob_start(function () { return ''; });
        // line 3
        echo "<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"BreadcrumbList\",
\t\"itemListElement\": [
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t";
            if (($context["key"] < (twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)) - 1))) {
                // line 10
                echo "\t\t\t";
                if (($context["key"] == 0)) {
                    // line 11
                    echo "\t\t\t";
                } else {
                    // line 12
                    echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                    // line 14
                    echo $context["key"];
                    echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
                    echo "\",
\t\t\t\t\t\"name\": \"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
                    echo "\"
\t\t\t\t}
\t\t\t},
\t\t\t";
                }
                // line 21
                echo "\t\t";
            } else {
                // line 22
                echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                // line 24
                echo $context["key"];
                echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
                echo "\",
\t\t\t\t\t\"name\": \"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
                echo "\"
\t\t\t\t}
\t\t\t}
\t\t";
            }
            // line 31
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t]
}
</script>
";
        // line 35
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 36
            echo "\t";
            list($context["main"], $context["goods"]) =             ["s12 l6", "s12"];
        } elseif ((        // line 37
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 38
            echo "\t";
            list($context["main"], $context["goods"]) =             ["s12 l9", "s12 m6"];
        } else {
            // line 40
            echo "\t";
            list($context["main"], $context["goods"]) =             ["s12", "s12 m6 xl4"];
        }
        // line 42
        echo "<main>
\t<div class=\"container\">
\t\t<nav id=\"breadcrumbs\" class=\"breadcrumb-wrapper transparent z-depth-0\">
\t\t\t<span class=\"breadcrumb-blur hide-on-med-and-up\"></span>
\t\t\t<div class=\"nav-wrapper breadcrumb-wrap href-underline\">
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 48
            echo "\t\t\t\t\t";
            if (($context["key"] < (twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)) - 1))) {
                // line 49
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 49);
                echo "\" class=\"breadcrumb waves-effect black-text\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 49);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t<span class=\"breadcrumb blue-grey-text text-darken-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 51);
                echo "</span>
\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t</div>
\t\t</nav>
\t\t<div class=\"row\">
\t\t\t";
        // line 57
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t<div class=\"col ";
        // line 58
        echo ($context["main"] ?? null);
        echo " section href-underline\">
\t\t\t\t";
        // line 59
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t<h1>";
        // line 60
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t";
        // line 61
        if (($context["categories"] ?? null)) {
            // line 62
            echo "\t\t\t\t\t<h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
\t\t\t\t\t<div class=\"subcategory-wrap\">
\t\t\t\t\t\t";
            // line 64
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 65
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 66);
                    echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"chip grey lighten-2 waves-effect waves-default z-depth-1 truncate\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 68
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 68)) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 69);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 69);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 71);
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "\t\t\t\t\t\t";
            } else {
                // line 76
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 78);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chip grey lighten-2 waves-effect waves-default z-depth-1 truncate\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 80
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 80)) {
                            // line 81
                            echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"\" data-src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 81);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "thumb", [], "any", false, false, false, 81);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 83);
                        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t";
        if (($context["products"] ?? null)) {
            // line 92
            echo "\t\t\t\t<ul class=\"collapsible\" data-collapsible=\"expandable\">
\t\t\t\t\t<li class=\"arrow-rotate\">
\t\t\t\t\t\t<div class=\"collapsible-header text-bold\">";
            // line 94
            echo ($context["text_sort_short"] ?? null);
            echo "</div>
\t\t\t\t\t\t<div class=\"collapsible-body white\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col s6 input-field inline\">
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 100) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 101);
                    echo "\" selected>";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 101);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 103);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 103);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-sort\">";
            // line 107
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s6 input-field inline\">
\t\t\t\t\t\t\t\t\t<select id=\"input-limit\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 112) == ($context["limit"] ?? null))) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 113);
                    echo "\" selected>";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 113);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 115);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 115);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\">";
            // line 119
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s12 m6 switch\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col s8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
            // line 124
            echo ($context["entry_instock"] ?? null);
            echo ":</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col s4\">
\t\t\t\t\t\t\t\t\t\t\t<label id=\"instock-switch\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"instock\" id=\"input-instock\" ";
            // line 128
            echo ((($context["instock"] ?? null)) ? ("value='1' checked") : ("value=\"\""));
            echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lever\"></span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div id=\"content\" class=\"row\">
\t\t\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 140
                echo "\t\t\t\t\t<div class=\"col ";
                echo ($context["goods"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"card sticky-action large hoverable href-underline\">
\t\t\t\t\t\t\t";
                // line 142
                if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "\t\t\t\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t\t\t\t";
                    // line 144
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 144));
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 145
                        echo "\t\t\t\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                        echo twig_get_attribute($this->env, $this->source, $context["label"], "color", [], "any", false, false, false, 145);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["label"], "color_text", [], "any", false, false, false, 145);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 145);
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 149)) {
                    echo "<span class=\"white-text badge red lighten-1 percent\">";
                    echo ($context["text_percent"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent_discount", [], "any", false, false, false, 149);
                    echo "%</span>";
                }
                // line 150
                echo "\t\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle close-icon activator\">more_vert</i>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 152);
                echo "\"><img class=\"responsive-img lazyload\" src=\"";
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 152);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 152);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 152);
                echo "\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content center-align\">
\t\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 155);
                echo "\" class=\"grey-text text-darken-4\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                echo "</a></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action center-align grey lighten-5\">
\t\t\t\t\t\t\t\t";
                // line 158
                if (twig_get_attribute($this->env, $this->source, $context["product"], "add_cart", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large waves-effect waves-light red add-cart\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 159);
                    echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large add-cart\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163)) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 164)) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"card-price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 165);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 167);
                        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"card-price red-text text-darken-2\">";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 168);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 170)) {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 171);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 173
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<span class=\"grey lighten-5\">
\t\t\t\t\t\t\t\t\t";
                // line 177
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 177)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 179
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 179) < $context["i"])) {
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t";
                }
                // line 192
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 194);
                echo "\" class=\"btn waves-effect waves-light red width-max\">";
                echo ($context["text_more_detailed"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 197);
                echo "\" class=\"grey-text text-darken-4\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 197);
                echo "</a><i class=\"material-icons waves-effect waves-circle close-icon\">close</i></span>
\t\t\t\t\t\t\t\t<p>";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 198);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 204
            if (($context["pagination"] ?? null)) {
                // line 205
                echo "\t\t\t\t<div class=\"row\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t";
        } else {
            // line 208
            echo "\t\t\t\t\t<div class=\"card-panel center\">
\t\t\t\t\t\t<p class=\"flow-text text-bold\">";
            // line 209
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 210
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/search-empty.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 213
        echo "\t\t\t\t";
        if (($context["description"] ?? null)) {
            // line 214
            echo "\t\t\t\t<div class=\"card-panel z-depth-1\">
\t\t\t\t\t<div class=\"row valign-wrapper section\">
\t\t\t\t\t\t";
            // line 216
            if ((($context["description"] ?? null) && ($context["thumb"] ?? null))) {
                // line 217
                echo "\t\t\t\t\t\t<div class=\"col s4 m2 center\">
\t\t\t\t\t\t\t<img src=\"";
                // line 218
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"responsive-img lazyload\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s8 m10\">
\t\t\t\t\t\t\t";
                // line 221
                echo ($context["description"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 224
                echo "\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t";
                // line 225
                echo ($context["description"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 228
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 233
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function(event) {
\t\tvar url_filter = '";
        // line 239
        echo ($context["url"] ?? null);
        echo "';
\t\t\$('#instock-switch').on('click', function() {
\t\t\turl = url_filter;
\t\t\tvar instock = \$('input[name=\\'instock\\']').val();
\t\t\tif (instock == '1') {
\t\t\t\turl += '';
\t\t\t} else if (instock == '') {
\t\t\t\turl += '&instock=true';
\t\t\t} else {
\t\t\t\turl += '';
\t\t\t}
\t\t\tlocation = url;
\t\t});
\t});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 255
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "materialize/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 255,  673 => 239,  664 => 233,  658 => 231,  653 => 228,  647 => 225,  644 => 224,  638 => 221,  626 => 218,  623 => 217,  621 => 216,  617 => 214,  614 => 213,  608 => 210,  604 => 209,  601 => 208,  598 => 207,  592 => 205,  590 => 204,  587 => 203,  576 => 198,  570 => 197,  562 => 194,  558 => 192,  550 => 186,  547 => 185,  541 => 184,  537 => 182,  533 => 180,  530 => 179,  525 => 178,  523 => 177,  518 => 174,  515 => 173,  507 => 171,  504 => 170,  499 => 168,  494 => 167,  488 => 165,  485 => 164,  482 => 163,  478 => 161,  470 => 159,  468 => 158,  460 => 155,  446 => 152,  442 => 150,  433 => 149,  429 => 147,  416 => 145,  412 => 144,  409 => 143,  407 => 142,  401 => 140,  397 => 139,  383 => 128,  376 => 124,  368 => 119,  365 => 118,  359 => 117,  351 => 115,  343 => 113,  340 => 112,  336 => 111,  329 => 107,  326 => 106,  320 => 105,  312 => 103,  304 => 101,  301 => 100,  297 => 99,  289 => 94,  285 => 92,  282 => 91,  278 => 89,  275 => 88,  269 => 87,  258 => 83,  250 => 81,  248 => 80,  242 => 78,  237 => 77,  232 => 76,  229 => 75,  218 => 71,  210 => 69,  208 => 68,  202 => 66,  197 => 65,  195 => 64,  189 => 62,  187 => 61,  183 => 60,  179 => 59,  175 => 58,  171 => 57,  166 => 54,  160 => 53,  154 => 51,  146 => 49,  143 => 48,  139 => 47,  132 => 42,  128 => 40,  124 => 38,  122 => 37,  119 => 36,  117 => 35,  112 => 32,  106 => 31,  99 => 27,  95 => 26,  90 => 24,  86 => 22,  83 => 21,  76 => 17,  72 => 16,  67 => 14,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  50 => 8,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/product/category.twig", "");
    }
}
