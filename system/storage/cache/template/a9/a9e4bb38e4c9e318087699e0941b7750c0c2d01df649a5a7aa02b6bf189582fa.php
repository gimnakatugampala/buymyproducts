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

/* materialize/template/common/header.twig */
class __TwigTemplate_4181b7c72e4372fb744e882ade3b9079e27a56c0e5f92479ba5adf4643a6ea87 extends \Twig\Template
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
        ob_start(function () { return ''; });
        // line 2
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" prefix=\"og: http://ogp.me/ns#\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<base href=\"";
        // line 7
        echo ($context["base"] ?? null);
        echo "\">
\t<title>BuyMyProducts</title>
\t<meta name=\"mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"theme-color\" content=\"";
        // line 10
        echo ($context["color_browser_bar"] ?? null);
        echo "\">
\t<meta name=\"application-name\" content=\"";
        // line 11
        echo ($context["name"] ?? null);
        echo "\">
\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"";
        // line 13
        echo ($context["color_browser_bar"] ?? null);
        echo "\">
\t<meta name=\"apple-mobile-web-app-title\" content=\"";
        // line 14
        echo ($context["name"] ?? null);
        echo "\">
\t<meta name=\"msapplication-TileColor\" content=\"";
        // line 15
        echo ($context["color_browser_bar"] ?? null);
        echo "\">
\t<meta name=\"SKYPE_TOOLBAR\" content=\"SKYPE_TOOLBAR_PARSER_COMPATIBLE\">
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t";
        // line 18
        if (($context["description"] ?? null)) {
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\">";
        }
        // line 19
        echo "\t";
        if (($context["keywords"] ?? null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\">";
        }
        // line 20
        echo "\t<!-- Facebook share -->
\t<meta property=\"og:site_name\" content=\"";
        // line 21
        echo ($context["facebook_site_name"] ?? null);
        echo "\">
\t<meta property=\"og:url\" content=\"";
        // line 22
        echo ($context["facebook_share_url"] ?? null);
        echo "\">
\t<meta property=\"og:type\" content=\"";
        // line 23
        echo ($context["facebook_share_type"] ?? null);
        echo "\">
\t<meta property=\"og:locale\" content=\"";
        // line 24
        echo ($context["lang"] ?? null);
        echo "\">
\t<meta property=\"og:title\" content=\"";
        // line 25
        echo ($context["facebook_share_title"] ?? null);
        echo "\">
\t<meta property=\"og:description\" content=\"";
        // line 26
        echo ($context["facebook_share_description"] ?? null);
        echo "\">
\t<meta property=\"og:image\" content=\"";
        // line 27
        echo ($context["facebook_share_image"] ?? null);
        echo "\">
\t<meta property=\"og:image:width\" content=\"";
        // line 28
        echo ($context["facebook_share_image_width"] ?? null);
        echo "\">
\t<meta property=\"og:image:height\" content=\"";
        // line 29
        echo ($context["facebook_share_image_height"] ?? null);
        echo "\">
\t";
        // line 30
        if ((($context["facebook_share_type"] ?? null) == "product")) {
            // line 31
            echo "\t<meta property=\"product:price:amount\" content=\"";
            echo ($context["facebook_product_price_amount"] ?? null);
            echo "\">
\t<meta property=\"product:price:currency\" content=\"";
            // line 32
            echo ($context["facebook_product_price_currency"] ?? null);
            echo "\">
\t";
        }
        // line 34
        echo "\t<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"Organization\",
\t\t\"name\": \"";
        // line 38
        echo ($context["name"] ?? null);
        echo "\",
\t\t\"url\": \"";
        // line 39
        echo ($context["base"] ?? null);
        echo "\",
\t\t";
        // line 40
        if (($context["logo"] ?? null)) {
            // line 41
            echo "\t\t\"logo\": \"";
            echo ($context["logo"] ?? null);
            echo "\",
\t\t";
        }
        // line 43
        echo "\t\t\"contactPoint\": [
\t\t\t{
\t\t\t\t\"@type\": \"ContactPoint\",
\t\t\t\t\"telephone\": \"";
        // line 46
        echo ($context["telephone"] ?? null);
        echo "\",
\t\t\t\t\"contactType\": \"sales\",
\t\t\t\t\"areaServed\": [\"";
        // line 48
        echo ($context["lang"] ?? null);
        echo "\"]
\t\t\t}
\t\t]
\t\t";
        // line 51
        if (($context["social_links"] ?? null)) {
            // line 52
            echo "\t\t,\"sameAs\": [
\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["social_links"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 54
                echo "\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["social_links"] ?? null)) - 1))) {
                    // line 55
                    echo "\t\t\t\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["social_links"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "link", [], "any", false, false, false, 55);
                    echo "\",
\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["social_links"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "link", [], "any", false, false, false, 57);
                    echo "\"
\t\t\t";
                }
                // line 59
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t]
\t\t";
        }
        // line 62
        echo "\t}
\t</script>
\t<style>";
        // line 64
        echo ($context["css"] ?? null);
        echo "</style>
\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 65);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 65);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 65) || twig_get_attribute($this->env, $this->source, $context["link"], "sizes", [], "any", false, false, false, 65))) {
                echo "type=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 65);
                echo "\" sizes=\"";
                echo twig_get_attribute($this->env, $this->source, $context["link"], "sizes", [], "any", false, false, false, 65);
                echo "\" ";
            }
            echo ">";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            echo $context["analytic"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t<!--[if lt IE 9]>
\t\t<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t<![endif]-->
</head>
<body class=\"";
        // line 71
        echo ($context["color_background"] ?? null);
        echo "\">
\t<header class=\"href-underline\">
\t\t<div class=\"row hide-on-small-only ";
        // line 73
        echo ($context["color_top_menu"] ?? null);
        echo "\">
\t\t\t<nav class=\"container transparent z-depth-0 top-menu\">
\t\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t\t";
        // line 76
        if ((($context["language"] ?? null) || ($context["currency"] ?? null))) {
            // line 77
            echo "\t\t\t\t\t<ul class=\"left\">
\t\t\t\t\t\t";
            // line 78
            if (($context["language"] ?? null)) {
                echo "<li><a class=\"waves-effect waves-light modal-trigger\" href=\"#modal-language\" rel=\"nofollow\"><i class=\"material-icons\">language</i></a></li>";
            }
            // line 79
            echo "\t\t\t\t\t\t";
            if (($context["currency"] ?? null)) {
                echo "<li><a class=\"waves-effect waves-light modal-trigger\" href=\"#modal-currency\" rel=\"nofollow\"><i class=\"material-icons\">monetization_on</i></a></li>";
            }
            // line 80
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t<ul class=\"right\">
\t\t\t\t\t\t";
        // line 83
        if (($context["blog"] ?? null)) {
            echo "<li><a class=\"waves-effect waves-light ";
            echo ($context["color_top_menu_text"] ?? null);
            echo "\" href=\"";
            echo ($context["blog"] ?? null);
            echo "\">";
            echo ($context["text_blog"] ?? null);
            echo "</a></li>";
        }
        // line 84
        echo "\t\t\t\t\t\t<li><a class=\"waves-effect waves-light ";
        echo ($context["color_top_menu_text"] ?? null);
        echo "\" href=\"";
        echo ($context["delivery"] ?? null);
        echo "\">";
        echo ($context["text_delivery"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"waves-effect waves-light ";
        // line 85
        echo ($context["color_top_menu_text"] ?? null);
        echo "\" href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a class=\"waves-effect waves-light ";
        // line 86
        echo ($context["color_top_menu_text"] ?? null);
        echo "\" href=\"";
        echo ($context["about"] ?? null);
        echo "\">";
        echo ($context["text_about"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a id=\"dropdown-lk\" class=\"dropdown-trigger waves-effect waves-light ";
        // line 88
        echo ($context["color_top_menu_text"] ?? null);
        echo "\" href=\"";
        echo ($context["account"] ?? null);
        echo "\" data-target=\"dropdown-top-lk\" rel=\"nofollow\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t<ul id=\"dropdown-top-lk\" class=\"dropdown-content\">
\t\t\t\t\t\t\t\t";
        // line 90
        if (($context["logged"] ?? null)) {
            // line 91
            echo "\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            echo ($context["account"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 93
            echo ($context["wishlist"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 95
            echo ($context["order"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 97
            echo ($context["logout"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 100
            echo "\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            echo ($context["register"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 102
            echo ($context["login"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<div class=\"row top-container ";
        // line 110
        echo ($context["color_header"] ?? null);
        echo "\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"valign-wrapper\">
\t\t\t\t\t<div class=\"col s12 m4\">
\t\t\t\t\t\t";
        // line 114
        if (($context["logo"] ?? null)) {
            // line 115
            echo "\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t\t<img id=\"logo-img\" class=\"responsive-img lazyload\" src=\"";
            // line 116
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 119
            echo "\t\t\t\t\t\t<strong><a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"";
            echo ($context["color_header_text"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></strong>
\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col m8 right-align hide-on-small-only ";
        // line 122
        echo ($context["color_header_text"] ?? null);
        echo "\">
\t\t\t\t\t\t<a class=\"href-underline text-bold flow-text block ";
        // line 123
        echo ($context["color_header_text"] ?? null);
        echo "\" href=\"tel:";
        echo ($context["telephone"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a>
\t\t\t\t\t\t<ul class=\"right contact-info\">
\t\t\t\t\t\t\t<li><a href=\"mailto:";
        // line 125
        echo ($context["email"] ?? null);
        echo "\" class=\"";
        echo ($context["color_header_text"] ?? null);
        echo "\"><i class=\"material-icons left\">email</i>";
        echo ($context["email"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 126
        if (($context["callback_status"] ?? null)) {
            echo "<li><a href=\"#callback__modal\" class=\"modal-trigger activator ";
            echo ($context["color_header_text"] ?? null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons left\">phone_in_talk</i>";
            echo ($context["callback_title"] ?? null);
            echo "</a></li>";
        }
        // line 127
        echo "\t\t\t\t\t\t\t";
        if (($context["open"] ?? null)) {
            // line 128
            echo "\t\t\t\t\t\t\t<li><i class=\"material-icons left\">access_time</i>";
            echo ($context["open"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"fixed-nav-wrapper\">
\t\t\t<nav id=\"header-navigation\" class=\"hide-on-small-only pin-top ";
        // line 136
        echo ($context["color_navigation"] ?? null);
        echo "\">
\t\t\t\t<div class=\"nav-wrapper container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"col m3\">
\t\t\t\t\t\t\t";
        // line 141
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"col m9\">
\t\t\t\t\t\t\t";
        // line 144
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t<button type=\"button\" data-target=\"slide-out\" id=\"btn-side-menu\" class=\"sidenav-trigger hide-on-med-and-up btn-floating btn-large waves-effect waves-circle waves-light z-depth-4 ";
        // line 150
        echo ($context["color_nav_btn"] ?? null);
        echo "\"><i class=\"material-icons ";
        echo ($context["color_nav_btn_text"] ?? null);
        echo "\">menu</i></button>
\t\t\t<ul id=\"slide-out\" class=\"sidenav\"><li class=\"progress\"><div class=\"indeterminate\"></div></li></ul>
\t\t</div>
\t</header>
\t";
        // line 154
        echo ($context["cart"] ?? null);
        echo "
\t";
        // line 155
        echo ($context["language"] ?? null);
        echo "
\t";
        // line 156
        echo ($context["currency"] ?? null);
        echo "
\t";
        // line 157
        echo ($context["callback_module"] ?? null);
        echo "
\t<a id=\"compare-btn\" href=\"";
        // line 158
        echo ($context["compare"] ?? null);
        echo "\" class=\"btn-floating btn-large waves-effect waves-light scale-transition pulse ";
        echo ($context["color_compare"] ?? null);
        echo " ";
        echo (((($context["text_compare"] ?? null) == "0")) ? ("scale-out") : (""));
        echo "\" title=\"";
        echo ($context["text_comparison_list"] ?? null);
        echo "\" rel=\"nofollow\">
\t\t<i class=\"material-icons ";
        // line 159
        echo ($context["color_compare_text"] ?? null);
        echo "\">compare_arrows</i>
\t\t<small id=\"compare-total\" class=\"btn-floating z-depth-1 pulse ";
        // line 160
        echo ($context["color_compare_total"] ?? null);
        echo " ";
        echo ($context["color_compare_total_text"] ?? null);
        echo "\">";
        echo ($context["text_compare"] ?? null);
        echo "</small>
\t</a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "materialize/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 160,  536 => 159,  526 => 158,  522 => 157,  518 => 156,  514 => 155,  510 => 154,  501 => 150,  492 => 144,  486 => 141,  478 => 136,  470 => 130,  464 => 128,  461 => 127,  453 => 126,  445 => 125,  436 => 123,  432 => 122,  429 => 121,  419 => 119,  407 => 116,  402 => 115,  400 => 114,  393 => 110,  385 => 104,  378 => 102,  370 => 100,  362 => 97,  355 => 95,  348 => 93,  340 => 91,  338 => 90,  329 => 88,  320 => 86,  312 => 85,  303 => 84,  293 => 83,  290 => 82,  286 => 80,  281 => 79,  277 => 78,  274 => 77,  272 => 76,  266 => 73,  261 => 71,  255 => 67,  245 => 66,  224 => 65,  220 => 64,  216 => 62,  212 => 60,  206 => 59,  200 => 57,  194 => 55,  191 => 54,  187 => 53,  184 => 52,  182 => 51,  176 => 48,  171 => 46,  166 => 43,  160 => 41,  158 => 40,  154 => 39,  150 => 38,  144 => 34,  139 => 32,  134 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  93 => 20,  86 => 19,  80 => 18,  74 => 15,  70 => 14,  66 => 13,  61 => 11,  57 => 10,  51 => 7,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/header.twig", "");
    }
}
