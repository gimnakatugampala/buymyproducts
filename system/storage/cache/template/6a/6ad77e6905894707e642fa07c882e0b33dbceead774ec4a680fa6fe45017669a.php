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

/* materialize/template/common/language.twig */
class __TwigTemplate_d76049efe0138b29cabff6ec36fffa9505c69d973c83998e741e70aae4590db1 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "<div id=\"modal-language\" class=\"modal\">
\t<div class=\"modal-content\">
\t\t<i class=\"material-icons modal-action modal-close waves-effect waves-circle close-icon\">close</i>
\t\t<h4>";
            // line 5
            echo ($context["text_language"] ?? null);
            echo "</h4>
\t\t<form action=\"";
            // line 6
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
\t\t\t<ul>
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 9
                echo "\t\t\t\t<li>
\t\t\t\t\t<label for=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 10);
                echo "\">
\t\t\t\t\t\t<input id=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 11);
                echo "\" class=\"with-gap language-select\" type=\"radio\" name=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 11);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 11) == ($context["code"] ?? null))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t<span>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 12);
                echo "</span>
\t\t\t\t\t</label>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t</ul>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\">
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 18
            echo ($context["redirect"] ?? null);
            echo "\">
\t\t</form>
\t</div>
</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$('#form-language .language-select').on('click', function(e) {
\t\te.preventDefault();
\t\t\$('#form-language input[name=\\'code\\']').val(\$(this).attr('id'));
\t\t\$('#form-language').submit();
\t});
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  84 => 16,  74 => 12,  64 => 11,  60 => 10,  57 => 9,  53 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/language.twig", "");
    }
}
