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

/* materialize/template/extension/module/slideshow.twig */
class __TwigTemplate_7ce7bd7d729df185353db5cfa4a8d725bdef6857a6ed2f20143f8ef892fb9669 extends \Twig\Template
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
        echo "<div class=\"section\">
\t<div id=\"slideshow";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"slick-slider slick-slider-slideshow z-depth-1\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
                echo "\"><img class=\"responsive-img\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\"></a>
\t\t";
            } else {
                // line 7
                echo "\t\t<img class=\"responsive-img z-depth-1\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\">
\t\t";
            }
            // line 9
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</div>
</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('.slick-slider').not('.slick-initialized').slick({
\t\tinfinite: true,
\t\tautoplay: true,
\t\tautoplaySpeed: 5000,
\t\tslidesToShow: 1,
\t\tadaptiveHeight: true,
\t\tfade: true,
\t\tcssEase: 'linear',
\t\tdots: true,
\t\tarrows: true
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 10,  69 => 9,  61 => 7,  51 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/extension/module/slideshow.twig", "");
    }
}
