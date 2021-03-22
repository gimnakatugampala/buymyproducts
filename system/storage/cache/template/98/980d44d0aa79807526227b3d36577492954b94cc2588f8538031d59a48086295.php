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

/* materialize/template/product/review.twig */
class __TwigTemplate_b5bec161dd69202c37acc412c7f9c6a0276142e904c73383e1ceeb6553379ad6 extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 4
                echo "<ul class=\"collection reviews\">
\t<li class=\"collection-item avatar\">
\t\t<span class=\"secondary-content yellow-text text-accent-4\">
\t\t\t";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 8
                    echo "\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 8) < $context["i"])) {
                        // line 9
                        echo "\t\t\t<i class=\"material-icons\">star_border</i>
\t\t\t";
                    } else {
                        // line 11
                        echo "\t\t\t<i class=\"material-icons\">star</i>
\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "\t\t</span>
\t\t<img class=\"circle lazyload\" src=\"";
                // line 15
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"catalog/view/theme/materialize/image/comment.png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 15);
                echo "\">
\t\t<span class=\"title text-bold\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 16);
                echo "</span>
\t\t<p>
\t\t\t<span class=\"grey-text text-darken\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 18);
                echo "</span><br>
\t\t\t";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 19);
                echo "
\t\t</p>
\t</li>
</ul>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo ($context["pagination"] ?? null);
            echo "
";
        } else {
            // line 26
            echo "<div class=\"center\">
\t<p class=\"flow-text text-bold\">";
            // line 27
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
\t<img class=\"responsive-img lazyload\" src=\"";
            // line 28
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"catalog/view/theme/materialize/image/search-empty.png\" alt=\"\">
</div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "materialize/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 28,  108 => 27,  105 => 26,  100 => 24,  89 => 19,  85 => 18,  80 => 16,  74 => 15,  71 => 14,  65 => 13,  61 => 11,  57 => 9,  54 => 8,  50 => 7,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/product/review.twig", "");
    }
}
