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

/* materialize/template/common/currency.twig */
class __TwigTemplate_1b57bec8eb1c9cbf98275711fcbcfd66af8ccfe670d1d4049f195d3a5f62c0e7 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<div id=\"modal-currency\" class=\"modal\">
\t<div class=\"modal-content\">
\t\t<i class=\"material-icons modal-action modal-close waves-effect waves-circle close-icon\">close</i>
\t\t<h4>";
            // line 5
            echo ($context["text_currency"] ?? null);
            echo "</h4>
\t\t<form action=\"";
            // line 6
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
\t\t\t<ul>
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "\t\t\t\t<li>
\t\t\t\t\t<label for=\"";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 11);
                    echo "\">
\t\t\t\t\t\t<input id=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12);
                    echo "\" class=\"with-gap currency-select\" type=\"radio\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12) == ($context["code"] ?? null))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t<span>";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 13);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 13);
                    echo "</span>
\t\t\t\t\t</label>
\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t<li>
\t\t\t\t\t<label for=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 18);
                    echo "\">
\t\t\t\t\t\t<input id=\"";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 19);
                    echo "\" class=\"with-gap currency-select\" type=\"radio\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 19);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 19) == ($context["code"] ?? null))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t<span>";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 20);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 20);
                    echo "</span>
\t\t\t\t\t</label>
\t\t\t\t</li>
\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t</ul>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\">
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 27
            echo ($context["redirect"] ?? null);
            echo "\">
\t\t</form>
\t</div>
</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('#form-currency .currency-select').on('click', function(e) {
\t\te.preventDefault();
\t\t\$('#form-currency input[name=\\'code\\']').val(\$(this).attr('name'));
\t\t\$('#form-currency').submit();
\t});
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  118 => 25,  112 => 24,  103 => 20,  93 => 19,  89 => 18,  86 => 17,  77 => 13,  67 => 12,  63 => 11,  60 => 10,  57 => 9,  53 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/currency.twig", "");
    }
}
