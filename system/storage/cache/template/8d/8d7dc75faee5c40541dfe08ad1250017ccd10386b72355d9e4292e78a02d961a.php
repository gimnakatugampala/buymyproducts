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

/* extension/materialize/appeal/footer.twig */
class __TwigTemplate_b286c224c369383094c92fab08a5751849982e98234b0d08f79b1056bd886187 extends \Twig\Template
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
        echo "<i class=\"fa fa-opencart\"></i>&nbsp;
<a href=\"//goo.gl/bjyFAW\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>Materialize Template</b>\" data-content=\"";
        // line 2
        echo ($context["appeal_marketplace"] ?? null);
        echo "\"><strong>Materialize Template</strong></a>&nbsp;|&nbsp;
<i class=\"fa fa-github\"></i>&nbsp;
<a href=\"//goo.gl/VAM4ww\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>GitHub</b>\" data-content=\"";
        // line 4
        echo ($context["appeal_github"] ?? null);
        echo "\">GitHub</a>&nbsp;|&nbsp;
<i class=\"fa fa-twitter\"></i>&nbsp;
<a href=\"//goo.gl/yG1AGS\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>Twitter</b>\" data-content=\"";
        // line 6
        echo ($context["appeal_twitter"] ?? null);
        echo "\">Twitter</a>&nbsp;|&nbsp;
<i class=\"fa fa-paypal\"></i>&nbsp;
<a href=\"//goo.gl/Ry4CeM\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>PayPal</b>\" data-content=\"";
        // line 8
        echo ($context["appeal_paypal"] ?? null);
        echo "\">PayPal</a>&nbsp;|&nbsp;
<i class=\"fa fa-credit-card\"></i>&nbsp;
<a href=\"//goo.gl/1C4gKu\" target=\"_blank\" rel=\"noopener\" class=\"dotted materialize-appeal__popover\" title=\"<b>Yandex.Money</b>\" data-content=\"";
        // line 10
        echo ($context["appeal_yandex_money"] ?? null);
        echo "\">Yandex.Money</a>
<script type=\"text/javascript\">
\$('.materialize-appeal__popover').popover({
\tplacement: 'right',
\ttrigger: 'hover',
\thtml: true
});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/materialize/appeal/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  55 => 8,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/materialize/appeal/footer.twig", "");
    }
}
