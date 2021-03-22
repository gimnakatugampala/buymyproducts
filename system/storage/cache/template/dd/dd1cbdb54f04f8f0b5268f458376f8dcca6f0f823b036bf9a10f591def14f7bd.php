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

/* extension/materialize/appeal/installed.twig */
class __TwigTemplate_f5384d5bee9f76ff77e2edde1e6f0ff4886dcb9ca217e1ad5715671c60645c4f extends \Twig\Template
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
        echo "<div id=\"modal-materialize-installed\" class=\"modal fade modal-materialize\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header bg-primary\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 6
        echo ($context["modal_title"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"alert alert-info\" role=\"alert\">";
        // line 9
        echo ($context["modal_alert"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t<a href=\"//goo.gl/WYB4yC\" target=\"_blank\" rel=\"noopener\" class=\"list-group-item\">
\t\t\t\t\t\t<h4 class=\"list-group-item-heading\"><i class=\"fa fa-comment-o shake\"></i> ";
        // line 12
        echo ($context["modal_review"] ?? null);
        echo "</h4>
\t\t\t\t\t\t<p class=\"list-group-item-text\">
\t\t\t\t\t\t\t<p>";
        // line 14
        echo ($context["appeal_marketplace"] ?? null);
        echo "</p>
\t\t\t\t\t\t</p>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"//goo.gl/4Myeis\" target=\"_blank\" rel=\"noopener\" class=\"list-group-item\">
\t\t\t\t\t\t<h4 class=\"list-group-item-heading\"><i class=\"fa fa-credit-card shake\"></i> ";
        // line 18
        echo ($context["modal_donations_title"] ?? null);
        echo "</h4>
\t\t\t\t\t\t<p class=\"list-group-item-text\">";
        // line 19
        echo ($context["modal_donations_text"] ?? null);
        echo "</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
\t\$('#modal-materialize-installed').modal({
\t\tbackdrop: 'static',
\t\tkeyboard: false
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/materialize/appeal/installed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  68 => 18,  61 => 14,  56 => 12,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/materialize/appeal/installed.twig", "");
    }
}
