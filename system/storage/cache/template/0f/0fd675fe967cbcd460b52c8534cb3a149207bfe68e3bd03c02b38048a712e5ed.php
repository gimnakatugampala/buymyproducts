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

/* materialize/template/extension/module/category.twig */
class __TwigTemplate_3c0fa1558e6d9fc4ab2d39982256a3108cad083a2853d78dd1de1af51e330a2d extends \Twig\Template
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
        echo "<ul class=\"collapsible collapsible-accordion collection with-header z-depth-1\" data-collapsible=\"accordion\">
\t<li class=\"collection-header blue-grey white-text\"><h5 class=\"text-bold\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h5></li>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 4) == ($context["category_id"] ?? null))) {
                // line 5
                echo "\t<li class=\"active\">
\t\t<a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 6);
                echo "\" class=\"collapsible-header waves-effect blue-grey-text text-darken-4 text-bold active\" onclick=\"return false;\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
                echo "</a>
\t\t";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "\t\t<div class=\"collapsible-body no-padding\">
\t\t\t<div class=\"collection\">
\t\t\t";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 11
                        echo "\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 11) == ($context["child_id"] ?? null))) {
                            // line 12
                            echo "\t\t\t\t\t<a class=\"collection-item waves-effect child truncate blue-grey-text text-darken-4 blue-grey lighten-4\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 12);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 12);
                            echo "</a>
\t\t\t\t";
                        } else {
                            // line 14
                            echo "\t\t\t\t\t<a class=\"collection-item waves-effect child truncate blue-grey-text text-darken-4\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 14);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 14);
                            echo "</a>
\t\t\t\t";
                        }
                        // line 16
                        echo "\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "\t\t\t</div>
\t\t</div>
\t";
                }
                // line 20
                echo "\t</li>
\t";
            } else {
                // line 22
                echo "\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
                echo "\" class=\"collapsible-header waves-effect truncate blue-grey-text text-darken-4 text-bold\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                echo "</a></li>
\t";
            }
            // line 24
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  112 => 24,  104 => 22,  100 => 20,  95 => 17,  89 => 16,  81 => 14,  73 => 12,  70 => 11,  66 => 10,  62 => 8,  60 => 7,  54 => 6,  51 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/extension/module/category.twig", "");
    }
}
