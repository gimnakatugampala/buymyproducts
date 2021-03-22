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

/* materialize/template/common/home.twig */
class __TwigTemplate_f83da7b4e1f1f09a691df7a6a9ecbc9b3243991057fd4908f8ca2a4fe0eab042 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        ob_start(function () { return ''; });
        // line 3
        echo "<script type=\"application/ld+json\">
{
\t\"@context\": \"http://schema.org\",
\t\"@type\": \"WebSite\",
\t\"url\": \"";
        // line 7
        echo ($context["base"] ?? null);
        echo "\",
\t\"potentialAction\": {
\t\t\"@type\": \"SearchAction\",
\t\t\"target\": \"";
        // line 10
        echo ($context["base"] ?? null);
        echo "index.php?route=product/search&search={query}\",
\t\t\"query-input\": \"required name=query\"
\t}
}
</script>
";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "\t";
            list($context["main"], $context["goods"]) =             ["s12 l6", "s12"];
        } elseif ((        // line 17
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "\t";
            list($context["main"], $context["goods"]) =             ["s12 l9", "s12 m6"];
        } else {
            // line 20
            echo "\t";
            list($context["main"], $context["goods"]) =             ["s12", "s12 m6 l4"];
        }
        // line 22
        echo "<main>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 25
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t<div class=\"col ";
        // line 26
        echo ($context["main"] ?? null);
        echo "\">
\t\t\t";
        // line 27
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t";
        // line 28
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 30
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t</div>
</main>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 35
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "materialize/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  100 => 30,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  78 => 22,  74 => 20,  70 => 18,  68 => 17,  65 => 16,  63 => 15,  55 => 10,  49 => 7,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/home.twig", "");
    }
}
