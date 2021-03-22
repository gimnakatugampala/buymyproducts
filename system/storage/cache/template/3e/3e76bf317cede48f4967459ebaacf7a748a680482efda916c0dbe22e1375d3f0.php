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

/* materialize/template/common/sidenav.twig */
class __TwigTemplate_2ce27720ee37a72d7bd7ecd151a93ab5c7609e2d25c27c50f055969c126017d9 extends \Twig\Template
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
        echo "<li>
\t<div class=\"user-view\">
\t\t<div class=\"background ";
        // line 3
        echo ($context["color_sidebar"] ?? null);
        echo "\"></div>
\t\t";
        // line 4
        if (($context["logo"] ?? null)) {
            // line 5
            echo "\t\t<img class=\"responsive-img lazyload\" src=\"";
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\">
\t\t";
        } else {
            // line 7
            echo "\t\t<strong><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></strong>
\t\t";
        }
        // line 9
        echo "\t\t<nav class=\"search-wrapper z-depth-0 ";
        echo ($context["color_mobile_search"] ?? null);
        echo "\">
\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t<div id=\"search-side\" class=\"input-field\">
\t\t\t\t\t<input id=\"input-search-side\" class=\"search-input autocomplete\" type=\"search\" name=\"search\" value=\"";
        // line 12
        echo ($context["search"] ?? null);
        echo "\" autocomplete=\"off\">
\t\t\t\t\t<label class=\"label-icon search-buttons search-buttons__search waves-effect waves-circle\" for=\"input-search\"><i class=\"material-icons\">search</i></label>
\t\t\t\t\t<i class=\"material-icons search-buttons search-buttons__clear waves-effect waves-circle\">close</i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s9 side-info no-padding\">
\t\t\t\t<a class=\"";
        // line 20
        echo ($context["color_sidebar_text"] ?? null);
        echo "\" href=\"tel:";
        echo ($context["telephone"] ?? null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons left\">phone</i>";
        echo ($context["telephone"] ?? null);
        echo "</a>
\t\t\t\t<a class=\"";
        // line 21
        echo ($context["color_sidebar_text"] ?? null);
        echo "\" href=\"mailto:";
        echo ($context["email"] ?? null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons left\">email</i>";
        echo ($context["email"] ?? null);
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"col s3 no-padding\">
\t\t\t\t";
        // line 24
        if ((($context["language"] ?? null) || ($context["currency"] ?? null))) {
            // line 25
            echo "\t\t\t\t<div id=\"side-settings\" class=\"btn-floating waves-effect waves-light transparent z-depth-0 dropdown-trigger\" data-target=\"dropdown-side-settings\">
\t\t\t\t\t<i class=\"material-icons ";
            // line 26
            echo ($context["color_sidebar_text"] ?? null);
            echo "\">settings</i>
\t\t\t\t</div>
\t\t\t\t<ul id=\"dropdown-side-settings\" class=\"dropdown-content\">
\t\t\t\t\t";
            // line 29
            if (($context["language"] ?? null)) {
                echo "<li><a class=\"waves-effect waves-light modal-trigger\" href=\"#modal-language\" rel=\"nofollow\"><i class=\"material-icons\">language</i>";
                echo ($context["text_language"] ?? null);
                echo "</a></li>";
            }
            // line 30
            echo "\t\t\t\t\t";
            if (($context["currency"] ?? null)) {
                echo "<li><a class=\"waves-effect waves-light modal-trigger\" href=\"#modal-currency\" rel=\"nofollow\"><i class=\"material-icons\">monetization_on</i>";
                echo ($context["text_currency"] ?? null);
                echo "</a></li>";
            }
            // line 31
            echo "\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</li>
";
        // line 37
        if (($context["callback"] ?? null)) {
            echo "<li class=\"grey lighten-4\"><a class=\"waves-effect waves-default modal-trigger text-bold activator\" href=\"#callback__modal\" rel=\"nofollow\"><i class=\"material-icons black-text\">phone_in_talk</i>";
            echo ($context["callback_text"] ?? null);
            echo "</a></li>";
        }
        // line 38
        if (($context["categories"] ?? null)) {
            // line 39
            echo "<li>
\t<ul class=\"collapsible\">
\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 42
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "\t\t<li class=\"arrow-rotate\">
\t\t\t<span class=\"collapsible-header waves-effect truncate text-bold\">";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44);
                    echo "</span>
\t\t\t";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 45), twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 45))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 46
                        echo "\t\t\t<div class=\"collapsible-body no-padding\">
\t\t\t\t<ul>
\t\t\t\t\t";
                        // line 48
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 49
                            echo "\t\t\t\t\t<li><a class=\"truncate\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 49);
                            echo "\" rel=\"nofollow\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 49);
                            echo "</a></li>
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t</li>
\t\t";
                } else {
                    // line 56
                    echo "\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 56);
                    echo "\" class=\"collapsible-header waves-effect truncate text-bold\" rel=\"nofollow\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 56);
                    echo "</a></li>
\t\t";
                }
                // line 58
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t</ul>
</li>
";
        }
        // line 62
        echo "<li class=\"divider\"></li>
<li>
\t<ul class=\"collapsible collapsible-accordion\" data-collapsible=\"accordion\">
\t\t<li class=\"arrow-rotate\">
\t\t\t<span class=\"collapsible-header waves-effect\"><i class=\"material-icons\">account_circle</i>";
        // line 66
        echo ($context["text_account"] ?? null);
        echo "</span>
\t\t\t<div class=\"collapsible-body no-padding\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 69
        if (($context["logged"] ?? null)) {
            // line 70
            echo "\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            echo ($context["account"] ?? null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">assignment</i>";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 71
            echo ($context["wishlist"] ?? null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">favorite</i>";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 72
            echo ($context["order"] ?? null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">history</i>";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 73
            echo ($context["logout"] ?? null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">power_settings_new</i>";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t";
        } else {
            // line 75
            echo "\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            echo ($context["register"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"waves-effect\" href=\"";
            // line 76
            echo ($context["login"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</li>
<li><a class=\"waves-effect\" href=\"";
        // line 83
        echo ($context["cart"] ?? null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons\">shopping_cart</i>";
        echo ($context["text_cart"] ?? null);
        echo "</a></li>
<li><a class=\"waves-effect\" href=\"";
        // line 84
        echo ($context["delivery"] ?? null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons\">local_shipping</i>";
        echo ($context["text_delivery"] ?? null);
        echo "</a></li>
<li><a class=\"waves-effect\" href=\"";
        // line 85
        echo ($context["contact"] ?? null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons\">email</i>";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
";
        // line 86
        if (($context["blog"] ?? null)) {
            echo "<li><a class=\"waves-effect\" href=\"";
            echo ($context["blog"] ?? null);
            echo "\" rel=\"nofollow\"><i class=\"material-icons\">chrome_reader_mode</i>";
            echo ($context["text_blog"] ?? null);
            echo "</a></li>";
        }
        // line 87
        echo "<li><a class=\"waves-effect\" href=\"";
        echo ($context["about"] ?? null);
        echo "\" rel=\"nofollow\"><i class=\"material-icons\">store</i>";
        echo ($context["text_about"] ?? null);
        echo "</a></li>
<script>
\tvar collapsible = \$('.collapsible'),
\t\tsideSettings = \$('#side-settings'),
\t\tinputSearchSidebar = \$('#input-search-side'),
\t\tsearchClear = \$('.search-buttons__clear');

\tcollapsible.collapsible();
\tsideSettings.dropdown({
\t\talignment: 'right',
\t\tconstrainWidth: false
\t});

\tinputSearchSidebar.parent().find('label').on('click', function() {
\t\tvar url = \$('base').attr('href') + 'index.php?route=product/search',
\t\t\tvalue = inputSearchSidebar.val();
\t\tif (value) {
\t\t\turl += '&search=' + encodeURIComponent(value);
\t\t}
\t\tlocation = url;
\t});

\tinputSearchSidebar.on('keydown', function(e) {
\t\tif (e.keyCode == 13) {
\t\t\tinputSearchSidebar.parent().find('label').trigger('click');
\t\t}
\t});

\tsearchClear.click(function() {searchClear.parent().find('input').val('');});

\t\$('input[name=\\'search\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=common/search/autocomplete&filter_name=' + encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\timg: item['img'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\twindow.location = \"";
        // line 134
        echo ($context["product_path"] ?? null);
        echo "&product_id=\"+item['value'];
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/common/sidenav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 134,  304 => 87,  296 => 86,  290 => 85,  284 => 84,  278 => 83,  271 => 78,  264 => 76,  257 => 75,  250 => 73,  244 => 72,  238 => 71,  231 => 70,  229 => 69,  223 => 66,  217 => 62,  212 => 59,  206 => 58,  198 => 56,  194 => 54,  186 => 51,  175 => 49,  171 => 48,  167 => 46,  163 => 45,  159 => 44,  156 => 43,  153 => 42,  149 => 41,  145 => 39,  143 => 38,  137 => 37,  131 => 33,  127 => 31,  120 => 30,  114 => 29,  108 => 26,  105 => 25,  103 => 24,  93 => 21,  85 => 20,  74 => 12,  67 => 9,  59 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/sidenav.twig", "");
    }
}
