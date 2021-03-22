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

/* materialize/template/common/footer.twig */
class __TwigTemplate_b87f780e935cfd3acb218ef125166cb5302651e8db8af7f179ca29ec9aa2a2b2 extends \Twig\Template
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
        if (((($context["footer_title"] ?? null) || ($context["footer_description"] ?? null)) || ($context["footer_contact"] ?? null))) {
            // line 3
            echo "\t";
            if (($context["social_network"] ?? null)) {
                // line 4
                echo "\t\t";
                list($context["col_information"], $context["col_extra"], $context["col_account"], $context["col_social_network"]) =                 ["s12 m6", "s12 m6", "s12 m6", "s12 m6"];
                // line 5
                echo "\t";
            } else {
                // line 6
                echo "\t\t";
                list($context["col_information"], $context["col_extra"], $context["col_account"]) =                 ["s12 m6", "s12 m6", "s12 m6"];
                // line 7
                echo "\t";
            }
        } else {
            // line 9
            echo "\t";
            if (($context["social_network"] ?? null)) {
                // line 10
                echo "\t\t";
                list($context["col_information"], $context["col_extra"], $context["col_account"], $context["col_social_network"]) =                 ["s6 m4 l3", "s6 m4 l3", "s6 m4 l3", "s6 m4 l3"];
                // line 11
                echo "\t";
            } else {
                // line 12
                echo "\t\t";
                list($context["col_information"], $context["col_extra"], $context["col_account"]) =                 ["s6 m4", "s6 m4", "s6 m4"];
                // line 13
                echo "\t";
            }
        }
        // line 15
        echo "<footer class=\"page-footer ";
        echo ($context["color_footer"] ?? null);
        echo " ";
        echo ($context["color_footer_text"] ?? null);
        echo "\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 18
        if (((($context["footer_title"] ?? null) || ($context["footer_description"] ?? null)) || ($context["footer_contact"] ?? null))) {
            echo " <!-- Open footer info -->
\t\t\t<div class=\"col l6 s12 ";
            // line 19
            echo ($context["color_footer_text"] ?? null);
            echo "\">
\t\t\t\t";
            // line 20
            if (($context["footer_title"] ?? null)) {
                echo "<h5 class=\"text-bold\">";
                echo ($context["footer_title"] ?? null);
                echo "</h5>";
            }
            // line 21
            echo "\t\t\t\t";
            if (($context["footer_description"] ?? null)) {
                echo "<p>";
                echo ($context["footer_description"] ?? null);
                echo "</p>";
            }
            // line 22
            echo "\t\t\t\t";
            if (($context["footer_contact"] ?? null)) {
                // line 23
                echo "\t\t\t\t<ul class=\"collection footer-info\">
\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<address><i class=\"material-icons left\">location_on</i>";
                // line 25
                echo ($context["address"] ?? null);
                echo "</address>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<a class=\"href-underline inherit-text\" href=\"tel:";
                // line 28
                echo twig_replace_filter(($context["telephone"] ?? null), ["(" => "", ")" => "", " " => ""]);
                echo "\"><i class=\"material-icons left\">phone</i>";
                echo ($context["telephone"] ?? null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<a href=\"mailto:";
                // line 31
                echo ($context["email"] ?? null);
                echo "\" class=\"inherit-text\"><i class=\"material-icons left\">email</i>";
                echo ($context["email"] ?? null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 33
                if (($context["open"] ?? null)) {
                    // line 34
                    echo "\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<span><i class=\"material-icons left\">access_time</i>";
                    // line 35
                    echo ($context["open"] ?? null);
                    echo "</span>
\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t</div>
\t\t\t<div class=\"col s12 l5 offset-l1\">
\t\t\t\t<div class=\"row\">
\t\t\t\t";
        }
        // line 43
        echo " <!-- ./ end footer info -->
\t\t\t\t\t";
        // line 44
        if (($context["informations"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t<section class=\"col ";
            echo ($context["col_information"] ?? null);
            echo "\">
\t\t\t\t\t\t<h5 class=\"text-bold\">";
            // line 46
            echo ($context["text_information"] ?? null);
            echo "</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 49
                echo "\t\t\t\t\t\t\t<li><a class=\"";
                echo ($context["color_footer_text"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 49);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 49);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t\t\t<li><a class=\"";
            echo ($context["color_footer_text"] ?? null);
            echo "\" href=\"";
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t<section class=\"col ";
        echo ($context["col_extra"] ?? null);
        echo "\">
\t\t\t\t\t\t<h5 class=\"text-bold\">";
        // line 56
        echo ($context["text_extra"] ?? null);
        echo "</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 58
        echo ($context["color_footer_text"] ?? null);
        echo "\" href=\"";
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 59
        echo ($context["color_footer_text"] ?? null);
        echo "\" href=\"";
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 60
        echo ($context["color_footer_text"] ?? null);
        echo "\" href=\"";
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 61
        echo ($context["color_footer_text"] ?? null);
        echo "\" href=\"";
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t";
        // line 64
        if (((($context["footer_title"] ?? null) || ($context["footer_description"] ?? null)) || ($context["footer_contact"] ?? null))) {
            echo " <!-- Open footer info -->
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t";
        }
        // line 67
        echo " <!-- ./ end footer info -->
\t\t\t\t\t<section class=\"col ";
        // line 68
        echo ($context["col_account"] ?? null);
        echo "\">
\t\t\t\t\t\t<h5 class=\"text-bold\">";
        // line 69
        echo ($context["text_account"] ?? null);
        echo "</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 71
        echo ($context["color_footer_text"] ?? null);
        echo "\" href=\"";
        echo ($context["account"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 72
        echo ($context["color_footer_text"] ?? null);
        echo "\" href=\"";
        echo ($context["order"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 73
        echo ($context["color_footer_text"] ?? null);
        echo "\" href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a class=\"";
        // line 74
        echo ($context["color_footer_text"] ?? null);
        echo "\" href=\"";
        echo ($context["newsletter"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t\t";
        // line 77
        if (($context["social_network"] ?? null)) {
            // line 78
            echo "\t\t\t\t\t<section class=\"col ";
            echo ($context["col_social_network"] ?? null);
            echo "\">
\t\t\t\t\t\t<h5 class=\"text-bold\">";
            // line 79
            echo ($context["sn_text"] ?? null);
            echo "</h5>
\t\t\t\t\t\t";
            // line 80
            if (($context["social_icons"] ?? null)) {
                // line 81
                echo "\t\t\t\t\t\t<ul class=\"footer-sn\">
\t\t\t\t\t\t\t";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["social_icons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["social_icon"]) {
                    // line 83
                    echo "\t\t\t\t\t\t\t<li class=\"footer-sn__item\">
\t\t\t\t\t\t\t\t<a class=\"";
                    // line 84
                    echo ($context["color_footer_text"] ?? null);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["social_icon"], "link", [], "any", false, false, false, 84);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["social_icon"], "title", [], "any", false, false, false, 84);
                    echo "\" target=\"_blank\" rel=\"noopener";
                    echo ($context["no_index"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img class=\"width-max waves-effect waves-light lazyload\" src=\"";
                    // line 85
                    echo ($context["img_loader"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["social_icon"], "icon", [], "any", false, false, false, 85);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["social_icon"], "title", [], "any", false, false, false, 85);
                    echo "\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t";
        if (((($context["footer_title"] ?? null) || ($context["footer_description"] ?? null)) || ($context["footer_contact"] ?? null))) {
            echo " <!-- Open footer info -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 96
        echo " <!-- ./ end footer info -->
\t\t</div>
\t</div>
\t<div class=\"footer-copyright text-center\">
\t\t<div class=\"container ";
        // line 100
        echo ($context["color_footer_text"] ?? null);
        echo "\">
\t\t\tCopyrights &copy; 2021 BuyMyProducts. <br>
            All Rights Reserved..
\t\t</div>
\t</div>
</footer>
<button type=\"button\" id=\"back-to-top\" class=\"btn-floating btn-large scale-transition scale-out z-depth-4 waves-effect waves-light ";
        // line 106
        echo ($context["color_btt"] ?? null);
        echo "\"><i class=\"material-icons ";
        echo ($context["color_btt_text"] ?? null);
        echo "\">keyboard_arrow_up</i></button>
<script defer src=\"catalog/view/theme/materialize/js/script.js\"></script>
</body></html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "materialize/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 106,  362 => 100,  356 => 96,  348 => 93,  344 => 91,  340 => 89,  326 => 85,  316 => 84,  313 => 83,  309 => 82,  306 => 81,  304 => 80,  300 => 79,  295 => 78,  293 => 77,  283 => 74,  275 => 73,  267 => 72,  259 => 71,  254 => 69,  250 => 68,  247 => 67,  240 => 64,  230 => 61,  222 => 60,  214 => 59,  206 => 58,  201 => 56,  196 => 55,  184 => 51,  171 => 49,  167 => 48,  162 => 46,  157 => 45,  155 => 44,  152 => 43,  146 => 40,  142 => 38,  136 => 35,  133 => 34,  131 => 33,  124 => 31,  116 => 28,  110 => 25,  106 => 23,  103 => 22,  96 => 21,  90 => 20,  86 => 19,  82 => 18,  73 => 15,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/footer.twig", "");
    }
}
