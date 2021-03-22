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

/* materialize/template/common/cart.twig */
class __TwigTemplate_1446af4ac95e3888873c34869da63ba7c80505f6d39fe94b4e19431fd1cf8391 extends \Twig\Template
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
        echo "<button type=\"button\" id=\"cart\" data-target=\"modal-cart\" class=\"btn-floating btn-large waves-effect waves-light waves-circle modal-trigger z-depth-4 ";
        echo ($context["color_cart"] ?? null);
        echo "\">
\t<i class=\"material-icons ";
        // line 2
        echo ($context["color_cart_text"] ?? null);
        echo "\">shopping_cart</i>
\t<small id=\"cart-total\" class=\"btn-floating z-depth-1 ";
        // line 3
        echo ($context["color_cart_total"] ?? null);
        echo " ";
        echo ($context["color_cart_total_text"] ?? null);
        echo "\">";
        echo ($context["text_items"] ?? null);
        echo "</small>
</button>
<div id=\"modal-cart\" class=\"modal bottom-sheet modal-fixed-footer\">
\t<div id=\"modal-cart-content\" class=\"modal-content\">
\t\t<div id=\"modal-cart-list\" class=\"container\">
\t\t\t<h4 class=\"flow-text text-bold\">";
        // line 8
        echo ($context["text_shopping_cart"] ?? null);
        echo "</h4>
\t\t\t";
        // line 9
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 10
            echo "\t\t\t<ul class=\"collection z-depth-2\">
\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "\t\t\t\t<li class=\"collection-item avatar\">
\t\t\t\t\t";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
                    echo "\"><img src=\"";
                    echo ($context["img_loader"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                    echo "\" class=\"circle lazyload\"></a>
\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                echo "\"><span class=\"title\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16);
                echo "</span></a> x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 16);
                echo "
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 18);
                echo "</b>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 21));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 22
                        echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t- <small>";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 23);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 23);
                        echo "</small>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "\t\t\t\t\t\t<br>
\t\t\t\t\t\t- <small>";
                    // line 28
                    echo ($context["text_recurring"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 28);
                    echo "</small>
\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t</p>
\t\t\t\t\t<button onclick=\"cart.remove('";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 31);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 31);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31);
                echo "', '";
                echo ($context["text_product_removed"] ?? null);
                echo "', '";
                echo ($context["text_cancel"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn-floating transparent z-depth-0 waves-effect secondary-content activator\"><i class=\"material-icons black-text\">remove_shopping_cart</i></button>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 35
                echo "\t\t\t\t<li class=\"collection-item avatar\">
\t\t\t\t\t<img src=\"";
                // line 36
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"catalog/view/theme/materialize/image/cart-voucher.png\" class=\"circle lazyload\" width=\"42\" height=\"42\">
\t\t\t\t\t<span class=\"title text-bold\">";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 37);
                echo "</span>&nbsp;x&nbsp;1
\t\t\t\t\t<button type=\"button\" onclick=\"voucher.remove('";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 38);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn-flat no-padding secondary-content activator black-text\"><i class=\"material-icons\">remove_shopping_cart</i></button>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t</ul>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col s12 m6 offset-m6 l5 offset-l7\">
\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t<table class=\"bordered\">
\t\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 47
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 48);
                echo ":</th>
\t\t\t\t\t\t\t\t<td>";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 49);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        } else {
            // line 57
            echo "\t\t\t<div class=\"card-panel\">
\t\t\t\t<p class=\"flow-text text-bold\">";
            // line 58
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s4 m3 l2 center\">
\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 61
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/cart-empty.png\" alt=\"\" width=\"128\" height=\"128\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s8 m9 l10 grey lighten-3 z-depth-1 comment-body\">
\t\t\t\t\t\t<p>";
            // line 64
            echo ($context["text_cat_says"] ?? null);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 69
        echo "\t\t</div>
\t</div>
\t<div class=\"modal-footer grey lighten-3\">
\t\t<div class=\"container\">
\t\t\t<a href=\"";
        // line 73
        echo ($context["cart"] ?? null);
        echo "\" class=\"modal-action btn-flat waves-effect waves-default href-underline\" rel=\"nofollow\">";
        echo ($context["text_cart"] ?? null);
        echo "</a>
\t\t</div>
\t</div>
</div>
";
        // line 77
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 78
            echo "<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('#cart').addClass('pulse');
\t\$('#cart-total').addClass('pulse');
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 78,  262 => 77,  253 => 73,  247 => 69,  239 => 64,  233 => 61,  227 => 58,  224 => 57,  217 => 52,  208 => 49,  204 => 48,  201 => 47,  197 => 46,  190 => 41,  179 => 38,  175 => 37,  171 => 36,  168 => 35,  163 => 34,  144 => 31,  141 => 30,  134 => 28,  131 => 27,  128 => 26,  125 => 25,  115 => 23,  112 => 22,  107 => 21,  105 => 20,  100 => 18,  90 => 16,  76 => 14,  74 => 13,  71 => 12,  67 => 11,  64 => 10,  62 => 9,  58 => 8,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/cart.twig", "");
    }
}
