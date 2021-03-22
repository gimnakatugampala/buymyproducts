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

/* materialize/template/common/search.twig */
class __TwigTemplate_9ecd579b2cf3b0b3dba7e7afb08e9683f6ddf346bbda795ad4702f4ba5fe8f8d extends \Twig\Template
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
        echo "<nav class=\"search-wrapper z-depth-0 ";
        echo ($context["color_search"] ?? null);
        echo "\">
\t<div class=\"nav-wrapper\">
\t\t<div id=\"search\" class=\"input-field\">
\t\t\t<input id=\"input-search\" class=\"search-input autocomplete\" type=\"search\" name=\"search\" value=\"";
        // line 4
        echo ($context["search"] ?? null);
        echo "\" autocomplete=\"off\">
\t\t\t<label class=\"label-icon search-buttons search-buttons__search waves-effect waves-circle\" for=\"input-search\"><i class=\"material-icons\">search</i></label>
\t\t\t<i class=\"material-icons search-buttons search-buttons__clear waves-effect waves-circle\">close</i>
\t\t</div>
\t</div>
</nav>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t\$(document).ready(function() {
\t\t\$('input[name=\\'search\\']').autocomplete({
\t\t\t'source': function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=common/search/autocomplete&filter_name=' + encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\timg: item['img'],
\t\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\t'select': function(item) {
\t\t\t\twindow.location = \"";
        // line 30
        echo ($context["product_path"] ?? null);
        echo "&product_id=\"+item['value'];
\t\t\t}
\t\t});
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/common/search.twig", "");
    }
}
