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

/* materialize/template/extension/module/carousel.twig */
class __TwigTemplate_20f62e0fbb8ce7fc680df2f17630ac27cb504eb7fcdd3a8de8ff06c1fbeaa960 extends \Twig\Template
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
        echo "<div id=\"carousel";
        echo ($context["module"] ?? null);
        echo "\" class=\"slick-carousel card-panel\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t<div>
\t\t";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
                echo "\"><img class=\"responsive-img lazyload\" src=\"";
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\"></a>
\t\t";
            } else {
                // line 7
                echo "\t\t<img class=\"responsive-img lazyload\" src=\"";
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\">
\t\t";
            }
            // line 9
            echo "\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('.slick-carousel').not('.slick-initialized').slick({
\t\tinfinite: true,
\t\tslidesToShow: 6,
\t\tslidesToScroll: 3,
\t\tdots: true,
\t\tinfinite: true,
\t\tspeed: 300,
\t\tautoplay: true,
\t\tlazyLoad: 'ondemand',
\t\tresponsive: [
\t\t{
\t\t\tbreakpoint: 460,
\t\t\tsettings: {
\t\t\t\tslidesToShow: 1,
\t\t\t\tslidesToScroll: 1
\t\t\t}
\t\t},
\t\t{
\t\t\tbreakpoint: 600,
\t\t\tsettings: {
\t\t\t\tslidesToShow: 2,
\t\t\t\tslidesToScroll: 2
\t\t\t}
\t\t},
\t\t{
\t\t\tbreakpoint: 992,
\t\t\tsettings: {
\t\t\t\tslidesToShow: 3,
\t\t\t\tslidesToScroll: 3
\t\t\t}
\t\t},
\t\t{
\t\t\tbreakpoint: 1240,
\t\t\tsettings: {
\t\t\t\tslidesToShow: 4,
\t\t\t\tslidesToScroll: 4
\t\t\t}
\t\t},
\t\t]
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  73 => 9,  63 => 7,  51 => 5,  49 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/extension/module/carousel.twig", "");
    }
}
