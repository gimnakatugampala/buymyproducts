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

/* materialize/template/product/product.twig */
class __TwigTemplate_841646e1071b8b37c5e4a9be17b09cfcc240b1d375ebbd6037ba4216aa58fc1c extends \Twig\Template
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
                echo "\t\t";
                if (($context["key"] == 0)) {
                    // line 11
                    echo "\t\t";
                } else {
                    // line 12
                    echo "\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
                    // line 14
                    echo $context["key"];
                    echo ",
\t\t\t\"item\": {
\t\t\t\t\"@id\": \"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
                    echo "\",
\t\t\t\t\"name\": \"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
                    echo "\"
\t\t\t}
\t\t},
\t\t";
                }
                // line 21
                echo "\t\t";
            } else {
                // line 22
                echo "\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
                // line 24
                echo $context["key"];
                echo ",
\t\t\t\"item\": {
\t\t\t\t\"@id\": \"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
                echo "\",
\t\t\t\t\"name\": \"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
                echo "\"
\t\t\t}
\t\t}
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
            list($context["main"], $context["image"], $context["product_info"]) =             ["s12 m12 l6", "s12 m6 l12", "s12 m6 l12"];
        } elseif ((        // line 37
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 38
            echo "\t";
            list($context["main"], $context["image"], $context["product_info"]) =             ["s12 l9", "s12 m6", "s12 m6"];
        } else {
            // line 40
            echo "\t";
            list($context["main"], $context["image"], $context["product_info"]) =             ["s12", "s12 m6 xl5", "s12 m6 xl7"];
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
        echo "\" itemscope itemtype=\"http://schema.org/Product\">
\t\t\t\t<meta itemprop=\"url\" content=\"";
        // line 59
        echo ($context["share"] ?? null);
        echo "\">
\t\t\t\t";
        // line 60
        if (($context["product_image"] ?? null)) {
            // line 61
            echo "\t\t\t\t<meta itemprop=\"image\" content=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["images"] ?? null), 0, [], "any", false, false, false, 61), "popup", [], "any", false, false, false, 61);
            echo "\">
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col ";
        // line 65
        echo ($context["image"] ?? null);
        echo "\">
\t\t\t\t\t\t<div class=\"card-panel center img-block\">
\t\t\t\t\t\t\t";
        // line 67
        if (($context["labels"] ?? null)) {
            // line 68
            echo "\t\t\t\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["labels"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "color", [], "any", false, false, false, 70);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "color_text", [], "any", false, false, false, 70);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 70);
                echo "</span></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t\t";
        if (($context["special"] ?? null)) {
            echo "<span class=\"white-text badge red lighten-1 product-card-badge-percent z-depth-1\">";
            echo ($context["text_percent"] ?? null);
            echo " <b>";
            echo ($context["percent_discount"] ?? null);
            echo "%</b></span>";
        }
        // line 75
        echo "\t\t\t\t\t\t\t<span class=\"";
        echo ($context["stock_color"] ?? null);
        echo " white-text badge availability\">";
        echo ($context["stock"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t";
        // line 76
        if (($context["images"] ?? null)) {
            // line 77
            echo "\t\t\t\t\t\t\t\t";
            echo ($context["photoswipe_module"] ?? null);
            echo "
\t\t\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col ";
        // line 83
        echo ($context["product_info"] ?? null);
        echo "\">
\t\t\t\t\t\t<div class=\"card-panel product-info\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<ul class=\"user-btn\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
        // line 88
        if (($context["wishlist_product"] ?? null)) {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t<i id=\"wishlist-btn\" class=\"material-icons waves-effect waves-circle tooltipped red-text activator\" data-position=\"top\" data-tooltip=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo ($context["product_id"] ?? null);
            echo "');\">favorite</i>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t<i id=\"wishlist-btn\" class=\"material-icons waves-effect waves-circle tooltipped activator\" data-position=\"top\" data-tooltip=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo ($context["product_id"] ?? null);
            echo "');\">favorite_border</i>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle tooltipped activator\" onclick=\"compare.add('";
        // line 95
        echo ($context["product_id"] ?? null);
        echo "');\" data-position=\"top\" data-tooltip=\"";
        echo ($context["button_compare"] ?? null);
        echo "\">compare_arrows</i>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle tooltipped sidenav-trigger share-btn\" data-target=\"side-share\" data-position=\"top\" data-tooltip=\"";
        // line 98
        echo ($context["button_share"] ?? null);
        echo "\">share</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h1 class=\"center\" itemprop=\"name\">";
        // line 100
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
        // line 104
        if (($context["review_status"] ?? null)) {
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"white\">
\t\t\t\t\t\t\t\t\t\t";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
            // line 114
            if ((($context["rating"] ?? null) > 0)) {
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t<div itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\" class=\"hide\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"reviewCount\" content=\"";
                // line 116
                echo ($context["reviewCount"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"ratingValue\" content=\"";
                // line 117
                echo ($context["rating"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"worstRating\" content=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"bestRating\" content=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"itemreviewed\" content=\"";
                // line 120
                echo ($context["heading_title"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<a class=\"blue-grey-text text-darken-3 text-bold\" href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click');\$('html, body').animate({scrollTop:\$('a[href=\\'#tab-review\\']').offset().top-50},1150);return false;\" rel=\"nofollow\">";
        // line 125
        echo ($context["reviews"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row valign-wrapper\">
\t\t\t\t\t\t\t\t<div class=\"col s8 flow-text\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
\t\t\t\t\t\t\t\t\t";
        // line 130
        if (($context["price"] ?? null)) {
            // line 131
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 132
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"card-price old-prices\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"price\" content=\"";
                // line 133
                echo ($context["meta_price"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 135
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"card-price new-prices red-text text-darken-2\">";
                // line 136
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<meta itemprop=\"price\" content=\"";
                // line 137
                echo ($context["meta_special"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t\t\t<meta itemprop=\"pricecurrency\" content=\"";
        echo ($context["pricecurrency"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<link itemprop=\"availability\" href=\"";
        // line 141
        echo ($context["stock_status"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 142
        if ((($context["product_spec"] ?? null) && (($context["product_spec"] ?? null) != "0000-00-00"))) {
            // line 143
            echo "\t\t\t\t\t\t\t\t\t<meta itemprop=\"priceValidUntil\" content=\"";
            echo ($context["product_spec"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col s4 center\">
\t\t\t\t\t\t\t\t\t";
        // line 147
        if (($context["manufacturers_img"] ?? null)) {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" target=\"_blank\" rel=\"noopener\">
\t\t\t\t\t\t\t\t\t\t";
            // line 149
            if (($context["manufacturers_img"] ?? null)) {
                // line 150
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo ($context["manufacturers_img"] ?? null);
                echo "\" title=\"";
                echo ($context["manufacturer"] ?? null);
                echo "\" alt=\"";
                echo ($context["manufacturer"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 157
        if ((($context["product_spec"] ?? null) && (($context["product_spec"] ?? null) != "0000-00-00"))) {
            // line 158
            echo "\t\t\t\t\t\t\t<div class=\"section center grey lighten-3 end-promotion\">
\t\t\t\t\t\t\t\t<span><i class=\"material-icons left\">info</i>";
            // line 159
            echo ($context["text_end_promotion"] ?? null);
            echo " <span class=\"text-bold\">";
            echo ($context["end_promotion"] ?? null);
            echo "</span></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t\t\t<blockquote class=\"blockquote-note blue-grey lighten-5 z-depth-1\">
\t\t\t\t\t\t\t\t<div class=\"blockquote-icon blue-grey lighten-4 cursor-default\"><i class=\"material-icons\">chat</i></div>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
        // line 165
        if (($context["manufacturer"] ?? null)) {
            // line 166
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span>:&nbsp;<a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" target=\"_blank\" rel=\"noopener\"><span itemprop=\"brand\">";
            echo ($context["manufacturer"] ?? null);
            echo "</span></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 168
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["category_products"] ?? null)) {
            // line 169
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_category"] ?? null);
            echo "</span>:&nbsp;<a href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category_products"] ?? null), 0, [], "any", false, false, false, 169), "href", [], "any", false, false, false, 169);
            echo "\"><span itemprop=\"category\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category_products"] ?? null), 0, [], "any", false, false, false, 169), "name", [], "any", false, false, false, 169);
            echo "</span></a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["model"] ?? null)) {
            // line 172
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_model"] ?? null);
            echo "</span>&nbsp;";
            echo ($context["model"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["sku"] ?? null)) {
            // line 175
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_sku"] ?? null);
            echo "</span>:&nbsp;<span itemprop=\"sku\">";
            echo ($context["sku"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["upc"] ?? null)) {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_upc"] ?? null);
            echo "</span>:&nbsp;";
            echo ($context["upc"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["ean"] ?? null)) {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\" >";
            echo ($context["text_ean"] ?? null);
            echo "</span>:&nbsp;";
            echo ($context["ean"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["jan"] ?? null)) {
            // line 184
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_jan"] ?? null);
            echo "</span>:&nbsp;";
            echo ($context["jan"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 186
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["isbn"] ?? null)) {
            // line 187
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_isbn"] ?? null);
            echo "</span>:&nbsp;";
            echo ($context["isbn"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 189
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["mpn"] ?? null)) {
            // line 190
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_mpn"] ?? null);
            echo "</span>:&nbsp;<span itemprop=\"mpn\">";
            echo ($context["mpn"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["location"] ?? null)) {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_location"] ?? null);
            echo "</span>:&nbsp;";
            echo ($context["location"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\t\t\t\t";
        if (((($context["dimensions_length"] ?? null) || ($context["dimensions_width"] ?? null)) || ($context["dimensions_height"] ?? null))) {
            // line 196
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_dimension"] ?? null);
            echo "</span>:&nbsp;";
            echo ($context["dimensions_length"] ?? null);
            echo " x ";
            echo ($context["dimensions_width"] ?? null);
            echo " x ";
            echo ($context["dimensions_height"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["weight"] ?? null) > 0)) {
            // line 199
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_weight"] ?? null);
            echo "</span>:&nbsp;";
            echo ($context["weight"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 201
        echo "\t\t\t\t\t\t\t\t\t";
        if (($context["additionalfields"] ?? null)) {
            // line 202
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["additionalfields"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["additionalfield"]) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t<li id=\"customfield-";
                echo $context["key"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-bold\">";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["additionalfield"], "title", [], "any", false, false, false, 204);
                echo ":</span>&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["additionalfield"], "text", [], "any", false, false, false, 204);
                echo "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['additionalfield'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 208
        echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
        echo ($context["text_stock"] ?? null);
        echo "</span>&nbsp;<span class=\"";
        echo ($context["stock_color"] ?? null);
        echo "-text text-darken-1 text-bold\">";
        echo ($context["stock"] ?? null);
        echo "</span></li>
\t\t\t\t\t\t\t\t\t";
        // line 209
        if ((($context["type_remainder"] ?? null) == "numerical")) {
            // line 210
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"text-bold\">";
            echo ($context["text_remainder"] ?? null);
            echo "</span>:&nbsp;";
            echo ($context["remainder"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 212
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["type_remainder"] ?? null) == "progressbar")) {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t<li class=\"product-remainder\"><span class=\"text-bold\">";
            echo ($context["text_remainder"] ?? null);
            echo "</span>:&nbsp;<div class=\"progress blue lighten-3\"><div class=\"determinate ";
            echo ($context["progressbar_color"] ?? null);
            echo "\" style=\"width: ";
            echo ($context["progressbar_percent"] ?? null);
            echo "%\"></div></div></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t";
        // line 217
        if ((((($context["special"] ?? null) || ($context["reward"] ?? null)) || ($context["discounts"] ?? null)) || ($context["sizechart"] ?? null))) {
            // line 218
            echo "\t\t\t\t\t\t\t<ul class=\"collection z-depth-1\">
\t\t\t\t\t\t\t\t";
            // line 219
            if (($context["special"] ?? null)) {
                // line 220
                echo "\t\t\t\t\t\t\t\t<li class=\"collection-item\"><i class=\"material-icons blue-grey-text text-darken-4 left\">local_offer</i>";
                echo ($context["text_percent"] ?? null);
                echo "&nbsp;<span class=\"deep-orange-text text-accent-3 text-bold\">";
                echo ($context["percent_discount"] ?? null);
                echo "%</span></li>
\t\t\t\t\t\t\t\t";
            }
            // line 222
            echo "\t\t\t\t\t\t\t\t";
            if (($context["reward"] ?? null)) {
                // line 223
                echo "\t\t\t\t\t\t\t\t<li class=\"collection-item\"><i class=\"material-icons blue-grey-text text-darken-4 left\">account_balance_wallet</i><span class=\"deep-orange-text text-accent-3 text-bold\">";
                echo ($context["reward"] ?? null);
                echo "</span>&nbsp;";
                echo ($context["text_bonus_points"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 225
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 226
                echo "\t\t\t\t\t\t\t\t<li class=\"collection-item\"><i class=\"material-icons blue-grey-text text-darken-4 left\">new_releases</i>";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 226);
                echo ($context["text_discount"] ?? null);
                echo "<span class=\"deep-orange-text text-accent-3 text-bold\">";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 226);
                echo "</span></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "\t\t\t\t\t\t\t\t";
            if (($context["sizechart"] ?? null)) {
                // line 229
                echo "\t\t\t\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons blue-grey-text text-darken-4 left\">straighten</i><a class=\"deep-orange-text text-accent-3 text-bold modal-trigger\" href=\"#modal-size-chart\" rel=\"nofollow\">";
                // line 230
                echo ($context["text_sizechart"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t\t\t\t";
        if ((($context["payment_method"] ?? null) || ($context["payment_image"] ?? null))) {
            // line 236
            echo "\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t";
            // line 237
            if (($context["payment_method"] ?? null)) {
                echo "<h6 class=\"center\">";
                echo ($context["payment_method"] ?? null);
                echo "</h6>";
            }
            // line 238
            echo "\t\t\t\t\t\t\t\t";
            if (($context["payment_image"] ?? null)) {
                echo "<img class=\"responsive-img center-block lazyload\" src=\"";
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo ($context["payment_image"] ?? null);
                echo "\" alt=\"";
                echo ($context["payment_method"] ?? null);
                echo "\">";
            }
            // line 239
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 241
        echo "\t\t\t\t\t\t\t<div id=\"product\">
\t\t\t\t\t\t\t\t";
        // line 242
        if (($context["options"] ?? null)) {
            // line 243
            echo "\t\t\t\t\t\t\t\t<h3>";
            echo ($context["text_option"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 245
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 245) == "radio")) {
                    // line 246
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 246);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 247
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 247)) {
                        echo " required";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 247);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"product-option\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 249
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 249));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 250
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio\" for=\"radio-";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 251);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 252
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 252)) {
                            // line 253
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo ($context["img_loader"] ?? null);
                            echo "\" data-src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 253);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 253);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 253)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 253);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 253);
                                echo " ";
                            }
                            echo "\" class=\"responsive-img lazyload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 255
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 255);
                        echo "\" id=\"radio-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 255);
                        echo "\" class=\"with-gap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 256);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 256)) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 256);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 256);
                            echo ") ";
                        }
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 260
                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 263
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 263) == "checkbox")) {
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 264);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 265
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 265)) {
                        echo " required";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 265);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"product-option\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 267
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 267));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 268
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkbox\" for=\"checkbox-";
                        // line 269
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 269);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 270
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 270)) {
                            // line 271
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo ($context["img_loader"] ?? null);
                            echo "\" data-src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 271);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 271);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 271)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 271);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 271);
                                echo " ";
                            }
                            echo "\" class=\"responsive-img lazyload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 273
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 273);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 273);
                        echo "\" id=\"checkbox-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 273);
                        echo "\" class=\"filled-in\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 274
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 274);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 274)) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 274);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 274);
                            echo ") ";
                        }
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 281
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 281) == "select")) {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 284);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 284);
                    echo "\" class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 285
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 285));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 286
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 286);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 286)) {
                            echo " data-icon=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 286);
                            echo "\"";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 286);
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 286)) {
                            echo "(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 286);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 286);
                            echo ")";
                        }
                        // line 287
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 289
                    echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-option";
                    // line 290
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 290);
                    echo "\" class=\"text-bold";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 290)) {
                        echo " required";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 290);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 294
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 294) == "text")) {
                    // line 295
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">textsms</i>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 298
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 298)) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 298);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 298);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 303
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 303) == "textarea")) {
                    // line 304
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">message</i>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 307
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 307)) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 307);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 307);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 308
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 308);
                    echo "]\" rows=\"5\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 308);
                    echo "\" class=\"materialize-textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 312
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 312) == "file")) {
                    // line 313
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 314
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 314)) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 314);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 314);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"file-field input-field\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"button-upload";
                    // line 316
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                    echo "\" class=\"btn waves-effect waves-light blue-grey lighten-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons left\">cloud_upload</i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 318
                    echo ($context["button_upload"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 319
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 319);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 319);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"file-path-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"file-path validate\" type=\"text\" placeholder=\"";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 322);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 327
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 327) == "date")) {
                    // line 328
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">event</i>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 331
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 331)) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 331);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 331);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 332
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
                    echo "\" class=\"datepicker\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 336
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 336) == "time")) {
                    // line 337
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">av_timer</i>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"text-bold";
                    // line 340
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 340)) {
                        echo " required";
                    }
                    echo "\" for=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 340);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 340);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 341
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 341);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 341);
                    echo "\" class=\"timepicker\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 345
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 347
        echo "\t\t\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 348
            echo "\t\t\t\t\t\t\t\t<h3 class=\"required\">";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<select name=\"recurring_id\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 351
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 352
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 353
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 353);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 353);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"recurring-description\"></div>
\t\t\t\t\t\t\t\t";
        }
        // line 359
        echo "\t\t\t\t\t\t\t\t<div class=\"input-number section\">
\t\t\t\t\t\t\t\t\t<label class=\"text-bold\" for=\"input-quantity\">";
        // line 360
        echo ($context["entry_qty"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t<i id=\"quantity-minus\" class=\"material-icons waves-effect waves-circle input-quantity-minus grey-text\">remove_circle_outline</i>
\t\t\t\t\t\t\t\t\t<input id=\"input-quantity\" type=\"number\" name=\"quantity\" value=\"";
        // line 362
        echo ($context["minimum"] ?? null);
        echo "\" min=\"";
        echo ($context["minimum"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<i id=\"quantity-plus\" class=\"material-icons waves-effect waves-circle input-quantity-plus\">add_circle_outline</i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 365
        echo ($context["product_id"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 366
        if ((($context["minimum"] ?? null) > 1)) {
            // line 367
            echo "\t\t\t\t\t\t\t\t<blockquote class=\"blockquote-note blue-grey lighten-5 center section\">";
            echo ($context["text_minimum"] ?? null);
            echo "</blockquote>
\t\t\t\t\t\t\t\t";
        }
        // line 369
        echo "\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t";
        // line 370
        if (($context["add_cart"] ?? null)) {
            // line 371
            echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" class=\"btn btn-large waves-effect waves-light red href-underline width-max\"><i class=\"material-icons left\">add_shopping_cart</i>";
            echo ($context["button_cart"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 373
            echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" class=\"btn btn-large href-underline width-max\" disabled=\"disabled\"><i class=\"material-icons left\">add_shopping_cart</i>";
            echo ($context["button_cart"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t\t";
        }
        // line 375
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 376
        echo ($context["quickorder"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t<ul class=\"tabs href-underline\">
\t\t\t\t\t\t<li class=\"tab\"><a class=\"blue-grey-text text-darken-3 text-bold waves-effect waves-default active\" href=\"#description-product\" rel=\"nofollow\">";
        // line 383
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t";
        // line 384
        if (($context["attribute_groups"] ?? null)) {
            // line 385
            echo "\t\t\t\t\t\t<li class=\"tab\"><a class=\"blue-grey-text text-darken-3 text-bold waves-effect waves-default\" href=\"#tab-specification\" rel=\"nofollow\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 387
        echo "\t\t\t\t\t\t";
        if (($context["customtabs"] ?? null)) {
            // line 388
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customtabs"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["customtab"]) {
                // line 389
                echo "\t\t\t\t\t\t<li class=\"tab\"><a class=\"blue-grey-text text-darken-3 text-bold waves-effect waves-default\" href=\"#tabcustom";
                echo $context["key"];
                echo "\" rel=\"nofollow\">";
                echo twig_get_attribute($this->env, $this->source, $context["customtab"], "title", [], "any", false, false, false, 389);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 391
            echo "\t\t\t\t\t\t";
        }
        // line 392
        echo "\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 393
            echo "\t\t\t\t\t\t<li class=\"tab\"><a class=\"blue-grey-text text-darken-3 text-bold waves-effect waves-default\" href=\"#tab-review\" rel=\"nofollow\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 395
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"description-product\" class=\"section description-product text-justify\" itemprop=\"description\">";
        // line 396
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t";
        // line 397
        if (($context["attribute_groups"] ?? null)) {
            // line 398
            echo "\t\t\t\t\t<div id=\"tab-specification\" class=\"section\">
\t\t\t\t\t\t<ul class=\"collapsible\" data-collapsible=\"accordion\">
\t\t\t\t\t\t";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 401
                echo "\t\t\t\t\t\t\t<li class=\"arrow-rotate\">
\t\t\t\t\t\t\t<div class=\"collapsible-header grey lighten-4 attribute-collapsible\"><span class=\"text-bold truncate\">";
                // line 402
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 402);
                echo "</span></div>
\t\t\t\t\t\t\t\t<div class=\"collapsible-body no-padding\">
\t\t\t\t\t\t\t\t\t<table class=\"bordered striped centered\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 406));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 407
                    echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-bold\">";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 408);
                    echo "</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 409
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 409);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 412
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 420
        echo "\t\t\t\t\t";
        if (($context["customtabs"] ?? null)) {
            // line 421
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customtabs"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["customtab"]) {
                // line 422
                echo "\t\t\t\t\t\t<div id=\"tabcustom";
                echo $context["key"];
                echo "\" class=\"section\">";
                echo twig_get_attribute($this->env, $this->source, $context["customtab"], "description", [], "any", false, false, false, 422);
                echo "</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['customtab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 424
            echo "\t\t\t\t\t";
        }
        // line 425
        echo "\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 426
            echo "\t\t\t\t\t<div id=\"tab-review\" class=\"section\">
\t\t\t\t\t\t<form id=\"form-review\">
\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-flat waves-effect modal-trigger text-bold\" data-target=\"modal-review\">";
            // line 429
            echo ($context["text_write"] ?? null);
            echo "<i class=\"material-icons right\">mode_edit</i></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"modal-review\" class=\"modal\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons modal-action modal-close waves-effect waves-circle close-icon\">close</i>
\t\t\t\t\t\t\t\t\t<h4>";
            // line 434
            echo ($context["text_write"] ?? null);
            echo "</h4>
\t\t\t\t\t\t\t\t\t";
            // line 435
            if (($context["review_guest"] ?? null)) {
                // line 436
                echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 439
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-name\">";
                // line 440
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" id=\"input-review\" class=\"materialize-textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-review\">";
                // line 447
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 448
                echo ($context["text_note"] ?? null);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"section\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-input center\">
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-1\" type=\"radio\" name=\"rating\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-1\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-2\" type=\"radio\" name=\"rating\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-2\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-3\" type=\"radio\" name=\"rating\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-3\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-4\" type=\"radio\" name=\"rating\" value=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-4\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"rating-5\" type=\"radio\" name=\"rating\" value=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"rating-5\"><i class=\"material-icons\">star</i></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 465
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 467
                echo "\t\t\t\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 469
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" class=\"btn waves-effect waves-light red\">";
            // line 471
            echo ($context["button_continue"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 478
        echo "\t\t\t\t\t<div class=\"post-footer grey lighten-4\">
\t\t\t\t\t\t";
        // line 479
        if (($context["tags"] ?? null)) {
            // line 480
            echo "\t\t\t\t\t\t\t<i class=\"material-icons\">local_offer</i>:&nbsp;
\t\t\t\t\t\t\t";
            // line 481
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 482
                echo "\t\t\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 483
                    echo "\t\t\t\t\t\t\t\t<a class=\"chip waves-effect waves-default\" href=\"";
                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 483), " ", "%20");
                    echo "\" rel=\"nofollow\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 483);
                    echo "</a>,
\t\t\t\t\t\t\t\t";
                } else {
                    // line 485
                    echo "\t\t\t\t\t\t\t\t<a class=\"chip waves-effect waves-default\" href=\"";
                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 485), " ", "%20");
                    echo "\" rel=\"nofollow\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 485);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 487
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 488
            echo "\t\t\t\t\t\t";
        }
        // line 489
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 492
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 494
        if (($context["products"] ?? null)) {
            // line 495
            echo "\t\t<section class=\"section\">
\t\t\t<h3>";
            // line 496
            echo ($context["text_related"] ?? null);
            echo "</h3>
\t\t\t<div class=\"row slick-goods\">
\t\t\t\t";
            // line 498
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 499
                echo "\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t<div class=\"card sticky-action large hoverable href-underline\">
\t\t\t\t\t\t";
                // line 501
                if (twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 501)) {
                    // line 502
                    echo "\t\t\t\t\t\t<ul class=\"labels-wrap\">
\t\t\t\t\t\t\t";
                    // line 503
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "labels", [], "any", false, false, false, 503));
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 504
                        echo "\t\t\t\t\t\t\t<li class=\"labels-wrap__item\"><span class=\"waves-effect badge ";
                        echo twig_get_attribute($this->env, $this->source, $context["label"], "color", [], "any", false, false, false, 504);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["label"], "color_text", [], "any", false, false, false, 504);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["label"], "name", [], "any", false, false, false, 504);
                        echo "</span></li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 506
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                // line 508
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 508)) {
                    echo "<span class=\"white-text badge red lighten-1 percent\">";
                    echo ($context["text_percent"] ?? null);
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent_discount", [], "any", false, false, false, 508);
                    echo "%</span>";
                }
                // line 509
                echo "\t\t\t\t\t\t<div class=\"card-image\">
\t\t\t\t\t\t\t<i class=\"material-icons waves-effect waves-circle close-icon activator\">more_vert</i>
\t\t\t\t\t\t\t<a href=\"";
                // line 511
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 511);
                echo "\"><img class=\"responsive-img lazyload\" src=\"";
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 511);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 511);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 511);
                echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content center-align\">
\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 514
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 514);
                echo "\" class=\"grey-text text-darken-4\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 514);
                echo "</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-action center-align grey lighten-5\">
\t\t\t\t\t\t\t";
                // line 517
                if (twig_get_attribute($this->env, $this->source, $context["product"], "add_cart", [], "any", false, false, false, 517)) {
                    // line 518
                    echo "\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large waves-effect waves-light red add-cart\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 518);
                    echo "');\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t";
                } else {
                    // line 520
                    echo "\t\t\t\t\t\t\t<button class=\"btn btn-floating btn-large add-cart\" disabled=\"disabled\"><i class=\"material-icons\">add_shopping_cart</i></button>
\t\t\t\t\t\t\t";
                }
                // line 522
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 522)) {
                    // line 523
                    echo "\t\t\t\t\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 523)) {
                        // line 524
                        echo "\t\t\t\t\t\t\t<span class=\"card-price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 524);
                        echo "</span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 526
                        echo "\t\t\t\t\t\t\t<span class=\"card-price old-price grey-text\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 526);
                        echo "</span>
\t\t\t\t\t\t\t<span class=\"card-price red-text text-darken-2\">";
                        // line 527
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 527);
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 529
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 529)) {
                        // line 530
                        echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 530);
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 532
                    echo "\t\t\t\t\t\t\t";
                }
                // line 533
                echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<span class=\"grey lighten-5\">
\t\t\t\t\t\t\t\t\t";
                // line 536
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 536)) {
                    // line 537
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 538
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 538) < $context["i"])) {
                            // line 539
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 541
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star</i>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 543
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 544
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 545
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t\t\t\t\t\t\t";
                }
                // line 551
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                // line 553
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 553);
                echo "\" class=\"btn waves-effect waves-light red width-max\">";
                echo ($context["text_more_detailed"] ?? null);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t\t\t<span class=\"card-title\"><a href=\"";
                // line 556
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 556);
                echo "\" class=\"grey-text text-darken-4\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 556);
                echo "</a><i class=\"material-icons waves-effect waves-circle close-icon\">close</i></span>
\t\t\t\t\t\t\t<p>";
                // line 557
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 557);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 562
            echo "\t\t\t</div>
\t\t</section>
\t\t";
        }
        // line 565
        echo "\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t</div>
</main>
<aside>
\t";
        // line 569
        echo ($context["sizechart"] ?? null);
        echo "
\t<ul id=\"side-share\" class=\"sidenav href-underline\">
\t\t<li><a class=\"waves-effect waves-default\" href=\"//vk.com/share.php?url=";
        // line 571
        echo ($context["share"] ?? null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"vk\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M7.828 12.526h.957s.288-.032.436-.19c.14-.147.14-.42.14-.42s-.02-1.284.58-1.473c.59-.187 1.34 1.24 2.14 1.788.61.42 1.07.33 1.07.33l2.14-.03s1.12-.07.59-.95c-.04-.07-.3-.65-1.58-1.84-1.34-1.24-1.16-1.04.45-3.19.98-1.31 1.38-2.11 1.25-2.45-.11-.32-.84-.24-.84-.24l-2.4.02s-.18-.02-.31.06-.21.26-.21.26-.38 1.02-.89 1.88C10.27 7.9 9.84 8 9.67 7.88c-.403-.26-.3-1.053-.3-1.62 0-1.76.27-2.5-.52-2.69-.26-.06-.454-.1-1.123-.11-.86-.01-1.585.006-1.996.207-.27.135-.48.434-.36.45.16.02.52.098.71.358.25.337.24 1.09.24 1.09s.14 2.077-.33 2.335c-.33.174-.77-.187-1.73-1.837-.49-.84-.86-1.78-.86-1.78s-.07-.17-.2-.27c-.15-.11-.37-.15-.37-.15l-2.29.02s-.34.01-.46.16c-.11.13-.01.41-.01.41s1.79 4.19 3.82 6.3c1.86 1.935 3.97 1.81 3.97 1.81z\"/></svg></span>VK</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//www.facebook.com/sharer.php?u=";
        // line 572
        echo ($context["share"] ?? null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"facebook\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0\" fill-rule=\"nonzero\"/></svg></span>Facebook</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//plus.google.com/share?url=";
        // line 573
        echo ($context["share"] ?? null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"googleplus\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M5.09 7.273v1.745h2.89c-.116.75-.873 2.197-2.887 2.197-1.737 0-3.155-1.44-3.155-3.215S3.353 4.785 5.09 4.785c.99 0 1.652.422 2.03.786l1.382-1.33c-.887-.83-2.037-1.33-3.41-1.33C2.275 2.91 0 5.19 0 8s2.276 5.09 5.09 5.09c2.94 0 4.888-2.065 4.888-4.974 0-.334-.036-.59-.08-.843H5.09zm10.91 0h-1.455V5.818H13.09v1.455h-1.454v1.454h1.455v1.455h1.46V8.727H16\"/></svg></span>Google+</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=";
        // line 574
        echo ($context["share"] ?? null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"odnoklassniki\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M9.67 11.626c.84-.19 1.652-.524 2.4-.993.564-.356.734-1.103.378-1.668-.356-.566-1.102-.737-1.668-.38-1.692 1.063-3.87 1.063-5.56 0-.566-.357-1.313-.186-1.668.38-.356.566-.186 1.312.38 1.668.746.47 1.556.802 2.397.993l-2.31 2.31c-.48.47-.48 1.237 0 1.71.23.236.54.354.85.354.31 0 .62-.118.85-.354L8 13.376l2.27 2.27c.47.472 1.237.472 1.71 0 .472-.473.472-1.24 0-1.71l-2.31-2.31zM8 8.258c2.278 0 4.13-1.852 4.13-4.128C12.13 1.852 10.277 0 8 0S3.87 1.852 3.87 4.13c0 2.276 1.853 4.128 4.13 4.128zM8 2.42c-.942 0-1.71.767-1.71 1.71 0 .942.768 1.71 1.71 1.71.943 0 1.71-.768 1.71-1.71 0-.943-.767-1.71-1.71-1.71z\"/></svg></span>Odnoklassniki</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//twitter.com/share?url=";
        // line 575
        echo ($context["share"] ?? null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\"><svg class=\"twitter\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z\" fill-rule=\"nonzero\"/></svg></span>Twitter</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//telegram.me/share/url?url=";
        // line 576
        echo ($context["share"] ?? null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\">
\t\t<span class=\"side-share__item\"><svg class=\"telegram\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M12.793 10.69c.57-1.56 2.66-7.49 2.994-9.044.38-1.76-.414-1.93-2.22-1.34-1.805.59-6.435 2.305-7.215 2.582-.78.277-4.573 1.552-5.36 1.932-1.606.862-.825 2.177.97 2.86 5.37 2.577 3.845 1.264 6.242 6.032.493 1.218 1.656 3.293 2.77 1.724.586-.892 1.37-3.52 1.82-4.747z\" fill-rule=\"nonzero\"/></svg></span>Telegram</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"whatsapp://send?text=";
        // line 578
        echo twig_urlencode_filter(($context["heading_title"] ?? null), true);
        echo " ";
        echo ($context["share"] ?? null);
        echo "\" data-action=\"share/whatsapp/share\" rel=\"nofollow\"><span class=\"side-share__item\"><svg class=\"whatsapp\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M11.665 9.588c-.2-.1-1.177-.578-1.36-.644-.182-.067-.315-.1-.448.1-.132.197-.514.643-.63.775-.116.13-.232.14-.43.05-.2-.1-.842-.31-1.602-.99-.592-.53-.99-1.18-1.107-1.38-.116-.2-.013-.31.087-.41.09-.09.2-.23.3-.35.098-.12.13-.2.198-.33.066-.14.033-.25-.017-.35-.05-.1-.448-1.08-.614-1.47-.16-.39-.325-.34-.448-.34-.115-.01-.248-.01-.38-.01-.134 0-.35.05-.532.24-.182.2-.696.68-.696 1.65s.713 1.91.812 2.05c.1.13 1.404 2.13 3.4 2.99.476.2.846.32 1.136.42.476.15.91.13 1.253.08.383-.06 1.178-.48 1.344-.95.17-.47.17-.86.12-.95-.05-.09-.18-.14-.38-.23M8.04 14.5h-.01c-1.18 0-2.35-.32-3.37-.92l-.24-.143-2.5.65.67-2.43-.16-.25c-.66-1.05-1.01-2.26-1.01-3.506 0-3.63 2.97-6.59 6.628-6.59 1.77 0 3.43.69 4.68 1.94 1.25 1.24 1.94 2.9 1.94 4.66-.003 3.63-2.973 6.59-6.623 6.59M13.68 2.3C12.16.83 10.16 0 8.03 0 3.642 0 .07 3.556.067 7.928c0 1.397.366 2.76 1.063 3.964L0 16l4.223-1.102c1.164.63 2.474.964 3.807.965h.004c4.39 0 7.964-3.557 7.966-7.93 0-2.117-.827-4.11-2.33-5.608\"/></svg></span>WhatsApp</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"viber://forward?text=";
        // line 579
        echo twig_urlencode_filter(($context["heading_title"] ?? null), true);
        echo " ";
        echo ($context["share"] ?? null);
        echo "\" rel=\"nofollow\">
\t\t<span class=\"side-share__item\"><svg class=\"viber\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\"><path d=\"M13.874 1.56C13.476 1.194 11.87.027 8.29.01c0 0-4.22-.253-6.277 1.634C.868 2.79.465 4.464.423 6.544.38 8.62.325 12.514 4.08 13.57h.003l-.003 1.612s-.023.652.406.785c.52.16.824-.336 1.32-.87.273-.293.648-.724.932-1.054 2.567.216 4.542-.277 4.766-.35.518-.17 3.45-.544 3.928-4.438.492-4.015-.238-6.553-1.558-7.698zm.435 7.408c-.41 3.25-2.79 3.457-3.22 3.597-.19.06-1.93.492-4.11.35 0 0-1.63 1.96-2.13 2.47-.08.08-.18.11-.24.096-.09-.02-.11-.12-.11-.27l.01-2.67c-.01 0 0 0 0 0-3.18-.89-2.99-4.2-2.95-5.94.03-1.73.36-3.15 1.33-4.11C4.63.91 8.22 1.15 8.22 1.15c3.028.01 4.48.923 4.815 1.23 1.116.955 1.685 3.243 1.27 6.595zM5.16 3.32c.162 0 .307.073.42.207.002.002.387.464.553.69.157.213.367.553.474.743.19.34.07.688-.115.832l-.377.3c-.19.152-.167.436-.167.436s.56 2.105 2.64 2.635c0 0 .283.026.436-.164l.3-.38c.142-.19.49-.31.83-.12.19.1.53.31.744.47.226.16.688.55.69.55.22.18.27.46.12.74v.01c-.154.27-.36.52-.622.76h-.005c-.21.18-.42.28-.63.3-.02 0-.05.01-.09 0-.09 0-.18-.02-.27-.04v-.01c-.32-.09-.85-.32-1.73-.81-.57-.32-1.05-.64-1.46-.97-.21-.17-.43-.36-.65-.58L6.2 8.9l-.02-.02-.02-.02c-.22-.22-.41-.44-.58-.653-.32-.406-.64-.885-.96-1.46-.49-.88-.72-1.41-.81-1.73H3.8c-.03-.09-.05-.18-.04-.27-.01-.04 0-.07 0-.093.02-.2.126-.41.305-.63h.003c.237-.26.492-.47.764-.622.11-.06.22-.09.32-.09h.01zm2.73-.456h.078l.05.002h.013l.06.003h.34l.09.01h.05l.1.01h.02l.07.01h.01l.05.01c.03 0 .05.01.07.01h.06l.05.02.04.01.04.01.02.01h.03l.03.01h.02l.05.01.03.01.03.01.04.01.02.01c.02 0 .04.01.06.01l.03.01.03.01.08.03.04.02.09.04.03.01.03.01.06.03.04.01.02.01.05.02.02.01.04.02.03.01.03.02.04.02.03.02.02.01.04.02.03.02.05.03.03.01.05.03.01.01.03.02.06.05.03.02.03.02.02.01.03.02.05.05.04.03.03.02.01.01.02.01.05.04.03.03.02.02.03.02.03.02.02.01.08.08.04.04.09.09.02.02c.01.01.03.03.04.05l.02.02.11.13.03.04c.01.01.01.02.02.02l.06.09.03.03.06.08.05.08.03.06.04.07.03.06.01.02.02.04.05.1.05.1.02.05c.04.09.07.18.11.28.05.13.09.27.12.42.03.11.05.21.07.32l.02.18.03.2c.01.08.02.17.02.25.01.08.01.16.01.24v.17c0 .01-.005.02-.01.03-.01.02-.02.03-.04.05-.014.01-.033.03-.053.03-.02.01-.04.01-.06.01h-.03c-.02 0-.04-.01-.06-.02-.02-.01-.04-.02-.05-.04-.01-.02-.03-.04-.04-.06-.01-.02-.02-.04-.02-.06V6.9c-.01-.14-.02-.284-.04-.426-.01-.098-.03-.19-.04-.28 0-.05-.01-.098-.02-.14l-.02-.1-.024-.09-.01-.06-.03-.1c-.02-.08-.05-.16-.08-.24-.02-.06-.04-.11-.07-.16l-.02-.05-.09-.18-.02-.03c-.04-.09-.09-.18-.15-.26l-.03-.05H11l-.043-.06c-.036-.06-.076-.11-.12-.16l-.083-.1-.01-.01-.03-.038-.024-.03-.05-.05-.01-.02-.047-.04-.03-.03-.055-.05-.027-.025-.03-.03-.01-.01c-.01-.01-.03-.03-.05-.04L10.33 4l-.02-.01-.04-.03-.05-.04-.03-.024-.02-.01-.04-.036c0-.01-.01-.01-.02-.01l-.02-.02-.01-.01V3.8l-.02-.01-.04-.025-.03-.02-.05-.03-.04-.03-.02-.01-.02-.01H9.8l-.013-.01-.044-.023-.005-.01-.02-.01-.03-.015H9.68l-.03-.01-.017-.01-.03-.01-.007-.007-.02-.01-.035-.02-.02-.01-.06-.02-.05-.02-.09-.01-.03-.02c-.01-.006-.02-.01-.03-.01l-.02-.01c-.02-.007-.03-.01-.05-.02l-.02-.01h-.02l-.04-.02-.02-.01-.03-.01H9c-.005 0-.012-.003-.02-.005h-.06l-.03-.01h-.01l-.03-.01h-.027c-.017-.01-.03-.01-.047-.01l-.006-.01-.04-.01c-.02-.01-.037-.01-.056-.01l-.03-.01-.033-.01-.03-.01-.04-.01H8.5l-.12-.018h-.06l-.078-.01h-.05l-.046-.006h-.02l-.036-.01H7.9l-.007-.01h-.04c-.02 0-.043-.01-.06-.02-.02-.01-.04-.02-.054-.04l-.02-.03c-.02-.02-.02-.04-.03-.06-.01-.02-.01-.04-.01-.06 0-.02 0-.04.01-.06.01-.02.02-.04.04-.05.01-.02.03-.03.05-.04.02-.01.04-.02.06-.02h.04zm.37 1.05l.024.002.04.004c.006 0 .012 0 .02.002.015 0 .03.003.05.004l.04.005.016.01.03.01.032.01.03.01h.02l.028.01.047.01.037.01.018.01h.048l.08.02.03.01.03.01.03.01s.01 0 .01.01l.03.01.03.01.03.01c.01 0 .02.01.03.01.005 0 .01.01.017.01l.043.02h.02l.06.02.033.02.03.02.073.03.04.01.02.02c.03.01.06.03.09.04l.032.02.032.02.033.02c.03.02.054.03.08.05l.02.01.027.02.015.01.05.03.025.02.043.03.02.01.02.01.03.02.04.03c.01.01.015.01.023.02.006.01.01.01.017.02l.022.02.024.02.02.02.03.03.02.02.01.01.06.06.01.01c0 .01.01.02.02.02l.01.01.03.03.02.03.02.02.03.04.03.03.06.08.01.02.04.05.01.02.01.02.01.02.01.02c.01.01.01.02.02.04l.03.05.01.01.02.04.02.03c.01.01.01.02.02.03l.02.03.02.04.02.04.01.03c.01.03.03.05.04.08 0 .01.01.02.01.03l.03.08.04.13c0 .01.01.03.01.04l.03.09.03.12.03.16c.01.05.01.09.02.14.01.08.02.16.02.24l.01.14v.11c0 .01 0 .02-.01.03L10.9 7c-.02.015-.03.03-.05.04-.02.01-.04.02-.06.027-.02.01-.05.01-.07.01-.02 0-.04-.01-.06-.02-.01 0-.02-.01-.03-.014-.02-.01-.04-.026-.05-.044-.02-.02-.03-.04-.03-.06l-.01-.03V6.7c0-.088-.01-.17-.02-.256-.01-.09-.03-.19-.05-.28-.02-.06-.03-.12-.05-.174l-.02-.06-.02-.05-.01-.02-.03-.08-.03-.06-.05-.1-.046-.08v-.01l-.02-.032-.02-.025-.03-.05-.03-.04-.06-.08c-.03-.04-.06-.08-.094-.118-.01-.01-.02-.02-.02-.03l-.02-.02-.01-.01-.02-.01-.02-.018V5l-.08-.076-.05-.045v-.01l-.02-.02-.025-.02-.01-.01c0-.01-.01-.01-.02-.01l-.03-.01-.01-.01-.04-.03-.01-.01-.01-.01c-.008-.01-.015-.01-.02-.01l-.04-.03-.01-.01-.04-.02-.007-.01-.03-.02-.02-.01-.02-.02-.02-.02h-.01c-.02-.02-.04-.03-.07-.04l-.03-.02-.02-.01-.01-.01-.03-.02-.03-.01-.04-.02-.03-.01-.01-.01-.037-.01v-.01l-.06-.02-.04-.02-.02-.01h-.04c-.02-.01-.03-.01-.05-.02H8.8l-.03-.01h-.03l-.03-.01-.02-.01h-.04l-.04-.01-.02-.01h-.11l-.046-.01H8.2l-.03-.01c-.02-.01-.04-.02-.06-.04-.01-.02-.03-.04-.04-.06-.01-.02-.02-.04-.02-.06v-.06c.003-.03.01-.05.02-.07.005-.01.01-.02.02-.03.012-.02.03-.04.05-.05.01-.01.02-.01.03-.02.02-.01.04-.01.06-.01h.04zM8.562 5c.01 0 .02 0 .03.002.01 0 .02 0 .03.002l.034.003c.07.006.142.016.212.03l.07.016.017.005.076.02.04.013.03.01c.03.01.06.03.09.04l.01.01.04.02.06.03.02.01c.01.01.02.01.03.02.01.01.03.02.04.03.04.02.07.05.1.07l.07.06.06.06.04.05.02.02.02.02.03.04.06.09.05.09.04.08.03.07c.03.07.04.13.06.2.02.06.03.13.04.19l.01.1.01.09v.04c0 .03-.01.05-.02.07-.01.02-.03.05-.05.06-.02.02-.04.03-.07.04-.02.01-.04.01-.06.01-.02 0-.04 0-.06-.01l-.07-.03c-.02-.02-.04-.03-.06-.06-.01-.02-.02-.04-.03-.07v-.11l-.01-.07-.01-.08-.01-.07-.01-.04c0-.01-.01-.03-.01-.04-.02-.08-.06-.16-.1-.24l-.04-.04-.03-.04-.03-.03-.01-.02-.05-.04-.04-.04-.04-.03c-.01-.01-.02-.01-.04-.02l-.06-.04-.04-.02-.02-.01h-.01L9 5.54l-.06-.02-.06-.01h-.05L8.8 5.5l-.024-.005h-.03l-.04-.01h-.17l-.01-.05H8.5c-.02-.003-.036-.01-.053-.02-.023-.014-.043-.03-.06-.053-.012-.02-.023-.04-.03-.06-.005-.02-.008-.04-.008-.06 0-.025 0-.05.01-.076s.02-.047.04-.066l.04-.03c.02-.01.04-.02.06-.02L8.54 5h.02z\"/></svg></span>Viber</a></li>
\t\t<li><a class=\"waves-effect waves-default\" href=\"//web.skype.com/share?url=";
        // line 581
        echo ($context["share"] ?? null);
        echo "\" rel=\"nofollow noopener\" target=\"_blank\"><span class=\"side-share__item\">
\t\t<svg class=\"skype\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.414\">
\t\t<path d=\"M8.035 12.6c-2.685 0-3.885-1.322-3.885-2.313 0-.51.374-.865.89-.865 1.15 0 .85 1.653 2.995 1.653 1.096 0 1.703-.597 1.703-1.208 0-.368-.18-.775-.904-.954l-2.387-.597C4.524 7.833 4.175 6.79 4.175 5.812c0-2.034 1.91-2.798 3.704-2.798 1.65 0 3.6.916 3.6 2.136 0 .523-.46.827-.97.827-.98 0-.8-1.36-2.78-1.36-.98 0-1.53.444-1.53 1.08 0 .636.77.84 1.44.993l1.76.392c1.93.433 2.42 1.566 2.42 2.633 0 1.652-1.27 2.886-3.82 2.886m7.4-3.26l-.02.09-.03-.16c.01.03.03.05.04.08.08-.45.12-.91.12-1.37 0-1.02-.2-2.01-.6-2.95-.38-.9-.93-1.71-1.62-2.4-.7-.69-1.5-1.24-2.4-1.62C10.01.59 9.02.39 8 .39c-.48 0-.964.047-1.43.137l.08.04-.16-.023.08-.016C5.927.183 5.205 0 4.472 0 3.278 0 2.155.466 1.31 1.313.465 2.16 0 3.286 0 4.483c0 .763.195 1.512.563 2.175l.013-.083.028.16-.04-.077c-.076.43-.115.867-.115 1.305 0 1.022.2 2.014.59 2.948.38.91.92 1.72 1.62 2.41.69.7 1.5 1.24 2.4 1.63.93.4 1.92.6 2.94.6.44 0 .89-.04 1.32-.12l-.08-.04.16.03-.09.02c.67.38 1.42.58 2.2.58 1.19 0 2.31-.46 3.16-1.31.84-.84 1.31-1.97 1.31-3.17 0-.76-.2-1.51-.57-2.18\" fill-rule=\"nonzero\"/>
\t\t</svg></span>Skype</a></li>
\t</ul>
</aside>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t// Wishlist button
\tvar wishlistBtn = \$('#wishlist-btn'),
\t\toriginalColor = wishlistBtn.css('color'),
\t\toriginalText = wishlistBtn.text();

\twishlistBtn.click(function(){
\t\t\$(this).text(\"favorite\").addClass('red-text');
\t\toriginalText = 'favorite';
\t}).hover(function() {
\t\t\$(this).text(\"favorite\").css('color','#ef5350').addClass('scale');
\t}, function() {
\t\t\$(this).text(originalText).css('color',originalColor).removeClass('scale');
\t});

\t// Share side
\t\$('#side-share').sidenav({edge:'right'});

\t";
        // line 606
        if (($context["images"] ?? null)) {
            // line 607
            echo "\t// Photo slider
\t\$('.slider-for').not('.slick-initialized').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tarrows: true,
\t\tfade: true,
\t\tmobileFirst: true,
\t\tasNavFor: '.slider-nav'
\t});
\t\$('.slider-nav').not('.slick-initialized').slick({
\t\tslidesToShow: 4,
\t\tslidesToScroll: 4,
\t\tasNavFor: '.slider-for',
\t\tcenterMode: false,
\t\tarrows: false,
\t\tinfinite: false,
\t\tfocusOnSelect: true
\t});
\t";
        }
        // line 626
        echo "\t";
        if (($context["products"] ?? null)) {
            // line 627
            echo "\t// Goods slider
\t\$('.slick-goods').not('.slick-initialized').slick({
\t\tdots: true,
\t\tinfinite: true,
\t\tspeed: 300,
\t\tautoplay: true,
\t\tautoplaySpeed: 2000,
\t\tslidesToShow: 3,
\t\tslidesToScroll: 3,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 921,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t\tslidesToScroll: 2
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 601,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tslidesToScroll: 1
\t\t\t\t}
\t\t\t}
\t\t]
\t});
\t";
        }
        // line 654
        echo "
\t// Reviews
\tvar modalReview = \$('#modal-review'),
\t\tinputName = \$('#input-name'),
\t\tinputReview = \$('#input-review'),
\t\treview = \$('#review');

\treview.delegate('.pagination a', 'click', function(e) {
\t\te.preventDefault();
\t\treview.load(this.href);
\t});
\t\$('.rating-input label').hover(function() {
\t\t\$(this).addClass('rating-input-active');
\t\t\$(this).prevAll('.rating-input label').addClass('rating-input-active');
\t}, function () {
\t\t\$(this).removeClass('rating-input-active');
\t\t\$(this).prevAll('.rating-input label').removeClass('rating-input-active');
\t});
\t\$('.rating-input label').click(function() {
\t\t\$('.rating-input label').each(function() {
\t\t\t\$(this).removeClass('rating-input-checked');
\t\t\t\$(this).prevAll('.rating-input label').removeClass('rating-input-checked');
\t\t});
\t\t\$(this).addClass('rating-input-checked');
\t\t\$(this).prevAll('.rating-input label').addClass('rating-input-checked');
\t});
\treview.load('index.php?route=product/product/review&product_id=";
        // line 680
        echo ($context["product_id"] ?? null);
        echo "');
\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 683
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'], classes: 'toast-warning'});
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">check</i>' + json['success'], classes: 'toast-success'});
\t\t\t\t\tinputName.val('');
\t\t\t\t\tinputName.parent().find('label').removeClass('active');
\t\t\t\t\tinputReview.val('');
\t\t\t\t\tM.textareaAutoResize(inputReview);
\t\t\t\t\tinputReview.parent().find('label').removeClass('active');
\t\t\t\t\tmodalReview.modal('close');
\t\t\t\t}
\t\t\t}
\t\t});
\t\tgrecaptcha.reset();
\t});
\t";
        // line 704
        if (($context["recurrings"] ?? null)) {
            // line 705
            echo "\t\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\t\ttype: 'post',
\t\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#recurring-description').html('');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#recurring-description').html('<blockquote class=\"blockquote-note blue-grey lighten-5 center section\">' + json['success'] + '</blockquote>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t";
        }
        // line 722
        echo "\t";
        if (($context["options"] ?? null)) {
            // line 723
            echo "\t\$('div[id^=\\'button-upload\\']').on('click', function() {
\t\tvar node = this;
\t\t\$('#form-upload').remove();
\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\"></form><div id=\"modal-loading\" class=\"modal\"><div class=\"modal-content\"><div class=\"row valign-wrapper\"><div class=\"col s4 m3 center\"><div class=\"preloader-wrapper active\"><div class=\"spinner-layer spinner-blue\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-red\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-yellow\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div><div class=\"spinner-layer spinner-green\"><div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"gap-patch\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div></div></div></div><div class=\"col s10 m9\"><p id=\"loading-text\" class=\"flow-text text-bold\">";
            // line 726
            echo ($context["text_loading"] ?? null);
            echo "</p></div></div></div></div>');
\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}
\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t\t\$('#modal-loading').modal({
\t\t\t\t\tdismissible: false,
\t\t\t\t\topacity: .7,
\t\t\t\t\tendingTop: '40%',
\t\t\t\t}).modal('open');
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#modal-loading').modal('close').remove();
\t\t\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>'+json[\"error\"]+'</span>', classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\$('#modal-loading').modal('close').remove();
\t\t\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">check</i>'+json[\"success\"]+'</span>', classes: 'toast-success'});
\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});

\t\$('.datepicker').datepicker({
\t\tformat: 'yyyy-mm-dd',
\t\tfirstDay: ";
            // line 768
            echo ($context["first_day"] ?? null);
            echo ",
\t\ti18n: {
\t\t\tclear: '";
            // line 770
            echo ($context["button_datetime_clear"] ?? null);
            echo "',
\t\t\ttoday: '";
            // line 771
            echo ($context["button_date_today"] ?? null);
            echo "',
\t\t\tdone: '";
            // line 772
            echo ($context["button_datetime_done"] ?? null);
            echo "',
\t\t\tmonths: ['";
            // line 773
            echo ($context["text_months_full_january"] ?? null);
            echo "', '";
            echo ($context["text_months_full_february"] ?? null);
            echo "', '";
            echo ($context["text_months_full_march"] ?? null);
            echo "', '";
            echo ($context["text_months_full_april"] ?? null);
            echo "', '";
            echo ($context["text_months_full_may"] ?? null);
            echo "', '";
            echo ($context["text_months_full_june"] ?? null);
            echo "', '";
            echo ($context["text_months_full_july"] ?? null);
            echo "', '";
            echo ($context["text_months_full_august"] ?? null);
            echo "', '";
            echo ($context["text_months_full_september"] ?? null);
            echo "', '";
            echo ($context["text_months_full_october"] ?? null);
            echo "', '";
            echo ($context["text_months_full_november"] ?? null);
            echo "', '";
            echo ($context["text_months_full_december"] ?? null);
            echo "'],
\t\t\tmonthsShort: ['";
            // line 774
            echo ($context["text_months_short_january"] ?? null);
            echo "', '";
            echo ($context["text_months_short_february"] ?? null);
            echo "', '";
            echo ($context["text_months_short_march"] ?? null);
            echo "', '";
            echo ($context["text_months_short_april"] ?? null);
            echo "', '";
            echo ($context["text_months_short_may"] ?? null);
            echo "', '";
            echo ($context["text_months_short_june"] ?? null);
            echo "', '";
            echo ($context["text_months_short_july"] ?? null);
            echo "', '";
            echo ($context["text_months_short_august"] ?? null);
            echo "', '";
            echo ($context["text_months_short_september"] ?? null);
            echo "', '";
            echo ($context["text_months_short_october"] ?? null);
            echo "', '";
            echo ($context["text_months_short_november"] ?? null);
            echo "', '";
            echo ($context["text_months_short_december"] ?? null);
            echo "'],
\t\t\tweekdays: ['";
            // line 775
            echo ($context["text_weekdays_full_sunday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_full_monday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_full_tuesday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_full_wednesday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_full_thursday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_full_friday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_full_saturday"] ?? null);
            echo "'],
\t\t\tweekdaysShort: ['";
            // line 776
            echo ($context["text_weekdays_short_sunday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_monday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_tuesday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_wednesday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_thursday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_friday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_saturday"] ?? null);
            echo "'],
\t\t\tweekdaysAbbrev: ['";
            // line 777
            echo ($context["text_weekdays_short_sunday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_monday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_tuesday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_wednesday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_thursday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_friday"] ?? null);
            echo "', '";
            echo ($context["text_weekdays_short_saturday"] ?? null);
            echo "']
\t\t}
\t});

\t\$('.timepicker').timepicker({
\t\tdefaultTime: 'now',
\t\tautoclose: true,
\t\ti18n: {
\t\t\tclear: '";
            // line 785
            echo ($context["button_datetime_clear"] ?? null);
            echo "',
\t\t\tcancel: '";
            // line 786
            echo ($context["button_datetime_done"] ?? null);
            echo "',
\t\t\tdone: '";
            // line 787
            echo ($context["button_time_done"] ?? null);
            echo "',
\t\t\ttwelvehour: ";
            // line 788
            echo ($context["twelve_hour"] ?? null);
            echo "
\t\t}
\t});
\t";
        }
        // line 792
        echo "
\t// Add to cart
\tvar addCart = \$('#button-cart'),
\t\tbuttonCart = \$('#cart'),
\t\tcartTotal = \$('#cart-total'),
\t\tmodalCartContent = \$('#modal-cart-content');

\taddCart.on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'number\\'], #product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'file\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>' + json[\"error\"][\"option\"][i] + '</span>', classes: 'toast-warning'});
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>' + json[\"error\"][\"recurring\"] + '</span>', classes: 'toast-warning'});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\tM.toast({html: '<span><i class=\"material-icons left\">check</i>' + json['success'] + '</span>', classes: 'toast-success'});
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$('#cart-total').html(json['total']);
\t\t\t\t\t}, 100);
\t\t\t\t\tbuttonCart.addClass('pulse');
\t\t\t\t\tcartTotal.addClass('pulse');
\t\t\t\t\tmodalCartContent.load('index.php?route=common/cart/info #modal-cart-list');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t// Update price
\t\$(\"#product input[type='checkbox']\").click(function() {changePrice();});
\t\$(\"#product input[type='radio']\").click(function() {changePrice();});
\t\$(\"#product select\").change(function() {changePrice();});

\tvar quantity = \$('#input-quantity'),
\t\tquantityMinus = \$('#quantity-minus'),
\t\tquantityPlus = \$('#quantity-plus'),
\t\tnewPrices = \$('.new-prices'),
\t\toldPrices = \$('.old-prices');

\tquantity.blur(function() {
\t\tif (quantity.val() < ";
        // line 844
        echo ($context["minimum"] ?? null);
        echo ") {
\t\t\tquantity.val(";
        // line 845
        echo ($context["minimum"] ?? null);
        echo ");
\t\t\tquantityMinus.addClass('grey-text');
\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>";
        // line 847
        echo ($context["text_minimum"] ?? null);
        echo "</span>', classes: 'toast-warning'});
\t\t\tchangePrice();
\t\t} else {
\t\t\tchangePrice();
\t\t\tif (quantity.val() > ";
        // line 851
        echo ($context["minimum"] ?? null);
        echo ") {
\t\t\t\tquantityMinus.removeClass('grey-text');
\t\t\t}
\t\t}
\t});

\tquantityMinus.click(function () {
\t\tvar count = parseInt(quantity.val()) - 1;
\t\tif (count < ";
        // line 859
        echo ($context["minimum"] ?? null);
        echo ") {
\t\t\tcount = ";
        // line 860
        echo ($context["minimum"] ?? null);
        echo ";
\t\t\tM.toast({html: '<span><i class=\"material-icons left\">warning</i>";
        // line 861
        echo ($context["text_minimum"] ?? null);
        echo "</span>', classes: 'toast-warning'});
\t\t}
\t\tquantity.val(count);
\t\tquantity.change();
\t\tchangePrice();
\t\tif (quantity.val() == 1 || quantity.val() == ";
        // line 866
        echo ($context["minimum"] ?? null);
        echo ") {
\t\t\tquantityMinus.addClass('grey-text');
\t\t}

\t\treturn false;
\t});

\tquantityPlus.click(function () {
\t\tquantity.val(parseInt(quantity.val()) + 1);
\t\tquantity.change();
\t\tchangePrice();
\t\tif (quantity.val() > ";
        // line 877
        echo ($context["minimum"] ?? null);
        echo ") {
\t\t\tquantityMinus.removeClass('grey-text');
\t\t}

\t\treturn false;
\t});

\tfunction changePrice() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/updatePrice&product_id=";
        // line 886
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#product input[name=\\'quantity\\'], #product select, #product input[type=\\'checkbox\\']:checked, #product input[type=\\'radio\\']:checked'),
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['new_price_found']) {
\t\t\t\t\tnewPrices.html(json['total_price']);
\t\t\t\t} else {
\t\t\t\t\toldPrices.html(json['total_price']);
\t\t\t\t}
\t\t\t}
\t\t});
\t}
});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 902
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "materialize/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2276 => 902,  2257 => 886,  2245 => 877,  2231 => 866,  2223 => 861,  2219 => 860,  2215 => 859,  2204 => 851,  2197 => 847,  2192 => 845,  2188 => 844,  2134 => 792,  2127 => 788,  2123 => 787,  2119 => 786,  2115 => 785,  2092 => 777,  2076 => 776,  2060 => 775,  2034 => 774,  2008 => 773,  2004 => 772,  2000 => 771,  1996 => 770,  1991 => 768,  1946 => 726,  1941 => 723,  1938 => 722,  1919 => 705,  1917 => 704,  1893 => 683,  1887 => 680,  1859 => 654,  1830 => 627,  1827 => 626,  1806 => 607,  1804 => 606,  1776 => 581,  1769 => 579,  1763 => 578,  1758 => 576,  1754 => 575,  1750 => 574,  1746 => 573,  1742 => 572,  1738 => 571,  1733 => 569,  1725 => 565,  1720 => 562,  1709 => 557,  1703 => 556,  1695 => 553,  1691 => 551,  1683 => 545,  1680 => 544,  1674 => 543,  1670 => 541,  1666 => 539,  1663 => 538,  1658 => 537,  1656 => 536,  1651 => 533,  1648 => 532,  1640 => 530,  1637 => 529,  1632 => 527,  1627 => 526,  1621 => 524,  1618 => 523,  1615 => 522,  1611 => 520,  1603 => 518,  1601 => 517,  1593 => 514,  1579 => 511,  1575 => 509,  1566 => 508,  1562 => 506,  1549 => 504,  1545 => 503,  1542 => 502,  1540 => 501,  1536 => 499,  1532 => 498,  1527 => 496,  1524 => 495,  1522 => 494,  1517 => 492,  1512 => 489,  1509 => 488,  1503 => 487,  1495 => 485,  1487 => 483,  1484 => 482,  1480 => 481,  1477 => 480,  1475 => 479,  1472 => 478,  1462 => 471,  1458 => 469,  1452 => 467,  1447 => 465,  1427 => 448,  1423 => 447,  1413 => 440,  1409 => 439,  1404 => 436,  1402 => 435,  1398 => 434,  1390 => 429,  1385 => 426,  1382 => 425,  1379 => 424,  1368 => 422,  1363 => 421,  1360 => 420,  1355 => 417,  1345 => 412,  1336 => 409,  1332 => 408,  1329 => 407,  1325 => 406,  1318 => 402,  1315 => 401,  1311 => 400,  1307 => 398,  1305 => 397,  1301 => 396,  1298 => 395,  1292 => 393,  1289 => 392,  1286 => 391,  1275 => 389,  1270 => 388,  1267 => 387,  1261 => 385,  1259 => 384,  1255 => 383,  1245 => 376,  1242 => 375,  1236 => 373,  1230 => 371,  1228 => 370,  1225 => 369,  1219 => 367,  1217 => 366,  1213 => 365,  1205 => 362,  1200 => 360,  1197 => 359,  1191 => 355,  1180 => 353,  1176 => 352,  1172 => 351,  1165 => 348,  1162 => 347,  1159 => 346,  1153 => 345,  1144 => 341,  1134 => 340,  1129 => 337,  1126 => 336,  1117 => 332,  1107 => 331,  1102 => 328,  1099 => 327,  1091 => 322,  1083 => 319,  1079 => 318,  1074 => 316,  1063 => 314,  1060 => 313,  1057 => 312,  1048 => 308,  1038 => 307,  1033 => 304,  1030 => 303,  1021 => 299,  1011 => 298,  1006 => 295,  1003 => 294,  990 => 290,  987 => 289,  980 => 287,  962 => 286,  958 => 285,  952 => 284,  948 => 282,  945 => 281,  940 => 278,  923 => 274,  914 => 273,  896 => 271,  894 => 270,  890 => 269,  887 => 268,  883 => 267,  874 => 265,  869 => 264,  866 => 263,  861 => 260,  844 => 256,  835 => 255,  817 => 253,  815 => 252,  811 => 251,  808 => 250,  804 => 249,  795 => 247,  790 => 246,  787 => 245,  783 => 244,  778 => 243,  776 => 242,  773 => 241,  769 => 239,  758 => 238,  752 => 237,  749 => 236,  746 => 235,  742 => 233,  736 => 230,  733 => 229,  730 => 228,  718 => 226,  713 => 225,  705 => 223,  702 => 222,  694 => 220,  692 => 219,  689 => 218,  687 => 217,  683 => 215,  673 => 213,  670 => 212,  662 => 210,  660 => 209,  651 => 208,  648 => 207,  637 => 204,  632 => 203,  627 => 202,  624 => 201,  616 => 199,  613 => 198,  601 => 196,  598 => 195,  590 => 193,  587 => 192,  579 => 190,  576 => 189,  568 => 187,  565 => 186,  557 => 184,  554 => 183,  546 => 181,  543 => 180,  535 => 178,  532 => 177,  524 => 175,  521 => 174,  513 => 172,  510 => 171,  500 => 169,  497 => 168,  487 => 166,  485 => 165,  480 => 162,  472 => 159,  469 => 158,  467 => 157,  463 => 155,  459 => 153,  456 => 152,  444 => 150,  442 => 149,  437 => 148,  435 => 147,  431 => 145,  425 => 143,  423 => 142,  419 => 141,  414 => 140,  411 => 139,  406 => 137,  402 => 136,  397 => 135,  392 => 133,  387 => 132,  384 => 131,  382 => 130,  374 => 125,  371 => 124,  368 => 123,  362 => 120,  356 => 117,  352 => 116,  349 => 115,  347 => 114,  344 => 113,  338 => 112,  334 => 110,  330 => 108,  327 => 107,  323 => 106,  320 => 105,  318 => 104,  311 => 100,  306 => 98,  298 => 95,  294 => 93,  286 => 91,  278 => 89,  276 => 88,  268 => 83,  264 => 81,  252 => 79,  246 => 77,  244 => 76,  237 => 75,  228 => 74,  224 => 72,  211 => 70,  207 => 69,  204 => 68,  202 => 67,  197 => 65,  191 => 63,  185 => 61,  183 => 60,  179 => 59,  175 => 58,  171 => 57,  166 => 54,  160 => 53,  154 => 51,  146 => 49,  143 => 48,  139 => 47,  132 => 42,  128 => 40,  124 => 38,  122 => 37,  119 => 36,  117 => 35,  112 => 32,  106 => 31,  99 => 27,  95 => 26,  90 => 24,  86 => 22,  83 => 21,  76 => 17,  72 => 16,  67 => 14,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  50 => 8,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/product/product.twig", "");
    }
}
