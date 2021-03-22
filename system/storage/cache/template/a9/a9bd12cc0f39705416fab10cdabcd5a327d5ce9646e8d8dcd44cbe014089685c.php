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

/* materialize/template/common/menu.twig */
class __TwigTemplate_b493337bafbef56e2aac0714c39ff06c5d839c48bb1f7f5f51fc4f105a85bd1f extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<a id=\"main-dd-nav\" class=\"dropdown-trigger text-uppercase ";
            echo ($context["color_navigation_text"] ?? null);
            echo "\" rel=\"nofollow\" data-target=\"dropdown-nav-top\">";
            echo ($context["text_category"] ?? null);
            echo "</a>
<ul id=\"dropdown-nav-top\" class=\"dropdown-content z-depth-5\" itemscope itemtype=\"http://www.schema.org/SiteNavigationElement\">
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "\t<li><a class=\"waves-effect\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
                echo "\" itemprop=\"url\"><span itemprop=\"name\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                echo "</span></a></li>
\t<li class=\"divider\"></li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  51 => 5,  47 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/menu.twig", "");
    }
}
