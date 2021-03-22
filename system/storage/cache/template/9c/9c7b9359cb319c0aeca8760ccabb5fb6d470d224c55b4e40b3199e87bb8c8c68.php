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

/* extension/theme/materialize.twig */
class __TwigTemplate_a6a3390e2fea8abea6dafe9c8e07cb0b9899aa64520583bea99cb1b7c9ce32d9 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"button\" form=\"form-theme-materialize\" id=\"apply-btn\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-repeat\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        echo ($context["materialize_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<form action=\"";
        // line 17
        echo ($context["action"] ?? null);
        echo "\" data-action=\"";
        echo ($context["apply"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme-materialize\" class=\"form-horizontal\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-8\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 21
        echo ($context["text_edit"] ?? null);
        echo "</h3></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<ul id=\"apply-tab\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-colors\" data-toggle=\"tab\">";
        // line 24
        echo ($context["text_colors"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 25
        echo ($context["text_image"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 26
        echo ($context["text_product"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-footer\" data-toggle=\"tab\">";
        // line 27
        echo ($context["text_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-common\" data-toggle=\"tab\">";
        // line 28
        echo ($context["text_common"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t";
        // line 29
        if (($context["materializeapi"] ?? null)) {
            echo "<li><a href=\"#tab-materializeapi\" data-toggle=\"tab\">";
            echo ($context["text_about_template"] ?? null);
            echo "</a></li>";
        }
        // line 30
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-colors\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 34
        echo ($context["entry_colors"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
        // line 35
        echo ($context["help_colors"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"tab-colors-pills\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-common\" data-toggle=\"tab\">";
        // line 39
        echo ($context["text_common"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-header\" data-toggle=\"tab\">";
        // line 40
        echo ($context["text_header"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-footer\" data-toggle=\"tab\">";
        // line 41
        echo ($context["text_footer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-common\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-common__buttons\" data-toggle=\"tab\">";
        // line 48
        echo ($context["text_buttons"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-common__mobile\" data-toggle=\"tab\">";
        // line 49
        echo ($context["text_mobile"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-common__buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 54
        echo ($context["entry_background"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_background\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 58) == ($context["theme_materialize_color_background"] ?? null))) {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 59);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 59);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 59);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 59);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 61);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 61);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 61);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 61);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 68
        echo ($context["entry_cart_btn"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_cart_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 72
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 72) == ($context["theme_materialize_color_cart_btn"] ?? null))) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 73);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 73);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 73);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 73);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 75);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 75);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 75);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 75);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_cart_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 81) == ($context["theme_materialize_color_cart_btn_text"] ?? null))) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 82);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 82);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 82);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 82);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 84);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 84);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 84);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 84);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 91
        echo ($context["entry_total_btn"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_total_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 95) == ($context["theme_materialize_color_total_btn"] ?? null))) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 96);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 96);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 96);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 96);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 98);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 98);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 98);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 98);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_total_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 104) == ($context["theme_materialize_color_total_btn_text"] ?? null))) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 105);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 105);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 105);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 105);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 107);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 107);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 107);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 107);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 114
        echo ($context["entry_compare_btn"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 118) == ($context["theme_materialize_color_compare_btn"] ?? null))) {
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 119);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 119);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 119);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 119);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 121
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 121);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 121);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 121);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 121);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 127) == ($context["theme_materialize_color_compare_btn_text"] ?? null))) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 128);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 128);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 128);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 128);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 130);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 130);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 130);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 130);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 137
        echo ($context["entry_tot_cmp_btn"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_total_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 141) == ($context["theme_materialize_color_compare_total_btn"] ?? null))) {
                // line 142
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 142);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 142);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 142);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 142);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 144);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 144);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 144);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 144);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_compare_total_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 150
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 150) == ($context["theme_materialize_color_compare_total_btn_text"] ?? null))) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 151);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 151);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 151);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 151);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 153);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 153);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 153);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 153);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 160
        echo ($context["entry_btt_btn"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_btt_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 164) == ($context["theme_materialize_color_btt_btn"] ?? null))) {
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 165);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 165);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 165);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 165);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 167);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 167);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 167);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 167);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 169
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_btt_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 173) == ($context["theme_materialize_color_btt_btn_text"] ?? null))) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 174);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 174);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 174);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 174);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 176);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 176);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 176);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 176);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-common__mobile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 185
        echo ($context["entry_bar"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_browser_bar\" id=\"select-color-browser-bar\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 189) == ($context["theme_materialize_color_browser_bar"] ?? null))) {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 190);
                echo "\" data-hex=\"#";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 190);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 190);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 190);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 190);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 192);
                echo "\" data-hex=\"#";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 192);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 192);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 192);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 192);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_color_browser_bar_hex\" value=\"";
        // line 196
        echo ((($context["theme_materialize_color_browser_bar_hex"] ?? null)) ? (($context["theme_materialize_color_browser_bar_hex"] ?? null)) : (""));
        echo "\" id=\"input-color-browser-bar-hex\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 200
        echo ($context["entry_nav_btn"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_nav_btn\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 204
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 204) == ($context["theme_materialize_color_nav_btn"] ?? null))) {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 205);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 205);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 205);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 205);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 207);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 207);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 207);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 207);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_nav_btn_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 213) == ($context["theme_materialize_color_nav_btn_text"] ?? null))) {
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 214);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 214);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 214);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 214);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 216);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 216);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 216);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 216);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 218
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-header__desktop\" data-toggle=\"tab\">";
        // line 227
        echo ($context["text_desktop"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-color-header__mobile\" data-toggle=\"tab\">";
        // line 228
        echo ($context["text_mobile"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-header__desktop\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 233
        echo ($context["entry_top_menu"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_top_menu\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 237
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 237) == ($context["theme_materialize_color_top_menu"] ?? null))) {
                // line 238
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 238);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 238);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 238);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 238);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 240);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 240);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 240);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 240);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 242
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_top_menu_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 246) == ($context["theme_materialize_color_top_menu_text"] ?? null))) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 247);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 247);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 247);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 247);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 249);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 249);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 249);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 249);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 256
        echo ($context["entry_header"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_header\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 260
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 260) == ($context["theme_materialize_color_header"] ?? null))) {
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 261);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 261);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 261);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 261);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 263);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 263);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 263);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 263);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 265
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_header_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 269) == ($context["theme_materialize_color_header_text"] ?? null))) {
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 270);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 270);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 270);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 270);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 272
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 272);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 272);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 272);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 272);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 274
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 279
        echo ($context["entry_navigation"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_navigation\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 283
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 283) == ($context["theme_materialize_color_navigation"] ?? null))) {
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 284);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 284);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 284);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 284);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 286
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 286);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 286);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 286);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 286);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 288
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_navigation_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 292
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 292) == ($context["theme_materialize_color_navigation_text"] ?? null))) {
                // line 293
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 293);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 293);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 293);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 293);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 295
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 295);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 295);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 295);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 295);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 297
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 302
        echo ($context["entry_search"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_search\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 306
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 306) == ($context["theme_materialize_color_search"] ?? null))) {
                // line 307
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 307);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 307);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 307);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 307);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 309
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 309);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 309);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 309);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 309);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 311
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-header__mobile\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 318
        echo ($context["entry_sidebar"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_sidebar\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 322
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 322) == ($context["theme_materialize_color_sidebar"] ?? null))) {
                // line 323
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 323);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 323);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 323);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 323);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 325
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 325);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 325);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 325);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 325);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 327
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_sidebar_text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 330
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 331
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 331) == ($context["theme_materialize_color_sidebar_text"] ?? null))) {
                // line 332
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 332);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 332);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 332);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 332);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 334
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 334);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 334);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 334);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 334);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 336
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 341
        echo ($context["entry_mob_search"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_mobile_search\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 345
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 345) == ($context["theme_materialize_color_mobile_search"] ?? null))) {
                // line 346
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 346);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 346);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 346);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 346);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 348
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 348);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 348);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 348);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 348);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 350
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-color-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color-footer__common\" data-toggle=\"tab\">";
        // line 359
        echo ($context["text_common"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-color-footer__common\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 364
        echo ($context["entry_footer"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_footer\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 368
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 368) == ($context["theme_materialize_color_footer"] ?? null))) {
                // line 369
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 369);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 369);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 369);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 369);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 371
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 371);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 371);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 371);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 371);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 373
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_color_footer_text\" id=\"input-color-footer-text\" class=\"selectpicker selectpicker-live-search show-tick\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_materialize_colors_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 377
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 377) == ($context["theme_materialize_color_footer_text"] ?? null))) {
                // line 378
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 378);
                echo "\" data-hex=\"#";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 378);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 378);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 378);
                echo ";\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 378);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 380
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 380);
                echo "\" data-hex=\"#";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 380);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 380);
                echo "\" style=\"background: #";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "hex", [], "any", false, false, false, 380);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["color"], "name", [], "any", false, false, false, 380);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 382
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-image\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 396
        echo ($context["text_image"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-zoom\">";
        // line 398
        echo ($context["text_imagezoom"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_image_zoom\" id=\"input-image-zoom\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 401
        if (($context["theme_materialize_image_zoom"] ?? null)) {
            // line 402
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 403
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 405
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 406
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 408
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 412
        echo ($context["entry_image_category"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_category_width\" value=\"";
        // line 416
        echo ($context["theme_materialize_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_category_height\" value=\"";
        // line 419
        echo ($context["theme_materialize_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 422
        if (($context["error_image_category"] ?? null)) {
            // line 423
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_category"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 425
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 428
        echo ($context["entry_image_thumb"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_thumb_width\" value=\"";
        // line 432
        echo ($context["theme_materialize_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_thumb_height\" value=\"";
        // line 435
        echo ($context["theme_materialize_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 438
        if (($context["error_image_thumb"] ?? null)) {
            // line 439
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_thumb"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 441
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 444
        echo ($context["entry_image_popup"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_popup_width\" value=\"";
        // line 448
        echo ($context["theme_materialize_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_popup_height\" value=\"";
        // line 451
        echo ($context["theme_materialize_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 454
        if (($context["error_image_popup"] ?? null)) {
            // line 455
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_popup"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 457
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-product-width\">";
        // line 460
        echo ($context["entry_image_product"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_product_width\" value=\"";
        // line 464
        echo ($context["theme_materialize_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_product_height\" value=\"";
        // line 467
        echo ($context["theme_materialize_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 470
        if (($context["error_image_product"] ?? null)) {
            // line 471
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_product"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 473
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 476
        echo ($context["entry_image_additional"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_additional_width\" value=\"";
        // line 480
        echo ($context["theme_materialize_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_additional_height\" value=\"";
        // line 483
        echo ($context["theme_materialize_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 486
        if (($context["error_image_additional"] ?? null)) {
            // line 487
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_additional"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 489
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 492
        echo ($context["entry_image_related"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_related_width\" value=\"";
        // line 496
        echo ($context["theme_materialize_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_related_height\" value=\"";
        // line 499
        echo ($context["theme_materialize_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 502
        if (($context["error_image_related"] ?? null)) {
            // line 503
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_related"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 505
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-compare\">";
        // line 508
        echo ($context["entry_image_compare"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_compare_width\" value=\"";
        // line 512
        echo ($context["theme_materialize_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_compare_height\" value=\"";
        // line 515
        echo ($context["theme_materialize_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 518
        if (($context["error_image_compare"] ?? null)) {
            // line 519
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_compare"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 521
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-wishlist\">";
        // line 524
        echo ($context["entry_image_wishlist"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_wishlist_width\" value=\"";
        // line 528
        echo ($context["theme_materialize_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_wishlist_height\" value=\"";
        // line 531
        echo ($context["theme_materialize_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 534
        if (($context["error_image_wishlist"] ?? null)) {
            // line 535
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_wishlist"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 537
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-cart\">";
        // line 540
        echo ($context["entry_image_cart"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_cart_width\" value=\"";
        // line 544
        echo ($context["theme_materialize_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_cart_height\" value=\"";
        // line 547
        echo ($context["theme_materialize_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 550
        if (($context["error_image_cart"] ?? null)) {
            // line 551
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_cart"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 553
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-location\">";
        // line 556
        echo ($context["entry_image_location"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_location_width\" value=\"";
        // line 560
        echo ($context["theme_materialize_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_image_location_height\" value=\"";
        // line 563
        echo ($context["theme_materialize_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 566
        if (($context["error_image_location"] ?? null)) {
            // line 567
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_image_location"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 569
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-product\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 575
        echo ($context["text_product"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 577
        echo ($context["help_product_limit"] ?? null);
        echo "\">";
        echo ($context["entry_product_limit"] ?? null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_product_limit\" value=\"";
        // line 579
        echo ($context["theme_materialize_product_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_limit"] ?? null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 580
        if (($context["error_product_limit"] ?? null)) {
            // line 581
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_product_limit"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 583
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 586
        echo ($context["help_product_description_length"] ?? null);
        echo "\">";
        echo ($context["entry_product_description_length"] ?? null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_product_description_length\" value=\"";
        // line 588
        echo ($context["theme_materialize_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-description-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 589
        if (($context["error_product_description_length"] ?? null)) {
            // line 590
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_product_description_length"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 592
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 597
        echo ($context["entry_show_fields"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 603
        if (($context["theme_materialize_show_model"] ?? null)) {
            // line 604
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_model\" value=\"1\" id=\"show-model\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 606
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_model\" value=\"1\" id=\"show-model\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 608
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-model\">";
        echo ($context["entry_model"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 611
        if (($context["theme_materialize_show_sku"] ?? null)) {
            // line 612
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_sku\" value=\"1\" id=\"show-sku\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 614
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_sku\" value=\"1\" id=\"show-sku\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 616
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-sku\">";
        echo ($context["entry_sku"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 619
        if (($context["theme_materialize_show_upc"] ?? null)) {
            // line 620
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_upc\" value=\"1\" id=\"show-upc\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 622
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_upc\" value=\"1\" id=\"show-upc\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 624
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-upc\">";
        echo ($context["entry_upc"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 627
        if (($context["theme_materialize_show_ean"] ?? null)) {
            // line 628
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_ean\" value=\"1\" id=\"show-ean\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 630
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_ean\" value=\"1\" id=\"show-ean\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 632
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-ean\">";
        echo ($context["entry_ean"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 635
        if (($context["theme_materialize_show_jan"] ?? null)) {
            // line 636
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_jan\" value=\"1\" id=\"show-jan\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 638
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_jan\" value=\"1\" id=\"show-jan\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 640
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-jan\">";
        echo ($context["entry_jan"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 645
        if (($context["theme_materialize_show_isbn"] ?? null)) {
            // line 646
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_isbn\" value=\"1\" id=\"show-isbn\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 648
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_isbn\" value=\"1\" id=\"show-isbn\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 650
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-isbn\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 653
        if (($context["theme_materialize_show_mpn"] ?? null)) {
            // line 654
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_mpn\" value=\"1\" id=\"show-mpn\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 656
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_mpn\" value=\"1\" id=\"show-mpn\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 658
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-mpn\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 661
        if (($context["theme_materialize_show_location"] ?? null)) {
            // line 662
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_location\" value=\"1\" id=\"show-location\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 664
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_location\" value=\"1\" id=\"show-location\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 666
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-location\">";
        echo ($context["entry_location"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 669
        if (($context["theme_materialize_show_dimensions"] ?? null)) {
            // line 670
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_dimensions\" value=\"1\" id=\"show-dimensions\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 672
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_dimensions\" value=\"1\" id=\"show-dimensions\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 674
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-dimensions\">";
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 677
        if (($context["theme_materialize_show_weight"] ?? null)) {
            // line 678
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_weight\" value=\"1\" id=\"show-weight\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 680
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_show_weight\" value=\"1\" id=\"show-weight\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 682
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-weight\">";
        echo ($context["entry_weight"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 691
        echo ($context["entry_show_remainder"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-type-remainder\">";
        // line 693
        echo ($context["entry_type"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"theme_materialize_remainder\" id=\"input-type-remainder\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 696
        echo ($context["text_none"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 697
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["remainders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["remainder"]) {
            // line 698
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["remainder"], "value", [], "any", false, false, false, 698) == ($context["theme_materialize_remainder"] ?? null))) {
                // line 699
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["remainder"], "value", [], "any", false, false, false, 699);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["remainder"], "text", [], "any", false, false, false, 699);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 701
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["remainder"], "value", [], "any", false, false, false, 701);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["remainder"], "text", [], "any", false, false, false, 701);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 703
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['remainder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 704
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required progressbar-settings\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 708
        echo ($context["entry_calculation"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_percent_remainder\" value=\"";
        // line 710
        echo ($context["theme_materialize_percent_remainder"] ?? null);
        echo "\" placeholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 711
        if (($context["error_percent_remainder"] ?? null)) {
            // line 712
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_percent_remainder"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 714
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 719
        echo ($context["entry_payment"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
        // line 720
        echo ($context["help_payment"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 722
        echo ($context["entry_text"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 724
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 725
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 726
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 726);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 726);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 726);
            echo "\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 727
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 727);
            echo "][payment_text]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["theme_materialize"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 727)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["theme_materialize"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 727)] ?? null) : null), "payment_text", [], "any", false, false, false, 727)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 730
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 733
        echo ($context["entry_payment_image"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-payment-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 735
        echo ($context["theme_materialize_payment_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_payment_image\" value=\"";
        // line 736
        echo ($context["theme_materialize_payment_image"] ?? null);
        echo "\" id=\"input-payment-image\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 740
        echo ($context["help_image_size"] ?? null);
        echo "\">";
        echo ($context["entry_payment_image"] ?? null);
        echo ":</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_payment_image_width\" value=\"";
        // line 744
        echo ($context["theme_materialize_payment_image_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_payment_width"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_payment_image_height\" value=\"";
        // line 747
        echo ($context["theme_materialize_payment_image_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_payment_height"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-footer\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 756
        echo ($context["entry_description"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"foter-descriptions-language\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 758
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 759
            echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#foter-descriptions";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 759);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 759);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 759);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 759);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 759);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 761
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 764
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"foter-descriptions";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 764);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 766
            echo ($context["entry_footer_title"] ?? null);
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 768
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 768);
            echo "][footer_title]\" value=\"";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["theme_materialize"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 768)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["theme_materialize"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 768)] ?? null) : null), "footer_title", [], "any", false, false, false, 768)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 772
            echo ($context["entry_description"] ?? null);
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"theme_materialize[";
            // line 774
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 774);
            echo "][footer_description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" class=\"form-control textarea-resize-vertical\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["theme_materialize"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 774)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["theme_materialize"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 774)] ?? null) : null), "footer_description", [], "any", false, false, false, 774)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 779
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 783
        if (($context["theme_materialize_footer_contact"] ?? null)) {
            // line 784
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_footer_contact\" value=\"1\" id=\"show-footer-contact\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 786
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_footer_contact\" value=\"1\" id=\"show-footer-contact\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 788
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"show-footer-contact\">";
        echo ($context["entry_contact"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 795
        echo ($context["entry_socials"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 797
        echo ($context["entry_text"] ?? null);
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 799
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 800
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 801
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 801);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 801);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 801);
            echo "\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize[";
            // line 802
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 802);
            echo "][sn_text]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["theme_materialize"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 802)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["theme_materialize"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 802)] ?? null) : null), "sn_text", [], "any", false, false, false, 802)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 805
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 810
        if (($context["theme_materialize_sn_index"] ?? null)) {
            // line 811
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_sn_index\" value=\"1\" id=\"dont-index-sn-links\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 813
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_sn_index\" value=\"1\" id=\"dont-index-sn-links\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 815
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"dont-index-sn-links\">";
        echo ($context["entry_not_index"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"social-icon-language\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 822
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#social-icon-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 822);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 822);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 822);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 822);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 822);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 824
        echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 826
        $context["icon_row"] = 0;
        // line 827
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 828
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"social-icon-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 828);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"social-icons";
            // line 829
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 829);
            echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 832
            echo ($context["entry_icon"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 833
            echo ($context["entry_title"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"width: 50%\">";
            // line 834
            echo ($context["entry_link"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\" style=\"width: 10%\">";
            // line 835
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 840
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["theme_materialize_social_icons"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 840)] ?? null) : null)) {
                // line 841
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["theme_materialize_social_icons"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 841)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme_materialize_social_icon"]) {
                    // line 842
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"icon-row";
                    echo ($context["icon_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image";
                    // line 844
                    echo ($context["icon_row"] ?? null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_materialize_social_icon"], "thumb", [], "any", false, false, false, 844);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"theme_materialize_social_icon[";
                    // line 845
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 845);
                    echo "][";
                    echo ($context["icon_row"] ?? null);
                    echo "][icon]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_materialize_social_icon"], "icon", [], "any", false, false, false, 845);
                    echo "\" id=\"input-icon";
                    echo ($context["icon_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 848
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 848);
                    echo "][";
                    echo ($context["icon_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_materialize_social_icon"], "title", [], "any", false, false, false, 848);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 851
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 851);
                    echo "][";
                    echo ($context["icon_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_materialize_social_icon"], "link", [], "any", false, false, false, 851);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"theme_materialize_social_icon[";
                    // line 854
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 854);
                    echo "][";
                    echo ($context["icon_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["theme_materialize_social_icon"], "sort_order", [], "any", false, false, false, 854);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#icon-row";
                    // line 857
                    echo ($context["icon_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 860
                    $context["icon_row"] = (($context["icon_row"] ?? null) + 1);
                    // line 861
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_materialize_social_icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 862
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 863
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"addIcon('";
            // line 867
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 867);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_icon_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 873
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-common\">
\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t<legend>";
        // line 878
        echo ($context["text_caching"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox checkbox-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 882
        if (($context["theme_materialize_cache_css"] ?? null)) {
            // line 883
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_cache_css\" value=\"1\" id=\"cache-css\" class=\"styled\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 885
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"theme_materialize_cache_css\" value=\"1\" id=\"cache-css\" class=\"styled\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 887
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"cache-css\">";
        echo ($context["text_caching_css"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-push-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"clear-css\" class=\"btn btn-danger\" href=\"";
        // line 893
        echo ($context["clear_css"] ?? null);
        echo "\"><i class=\"fa fa-eraser fa-lg\"></i> ";
        echo ($context["text_clear_cache"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 898
        echo ($context["materializeapi"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"footer-appeal-users\" class=\"panel-footer text-center\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-4\">
\t\t\t\t\t<div class=\"panel panel-default\" id=\"panel-data\">
\t\t\t\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-power-off\"></i> ";
        // line 906
        echo ($context["entry_status"] ?? null);
        echo "</h3></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<select name=\"theme_materialize_status\" id=\"input-status\" class=\"selectpicker show-tick\" data-width=\"100%\">
\t\t\t\t\t\t\t\t";
        // line 909
        if (($context["theme_materialize_status"] ?? null)) {
            // line 910
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\" data-icon=\"fa-toggle-on\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" data-icon=\"fa-toggle-off\">";
            // line 911
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 913
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" data-icon=\"fa-toggle-on\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\" data-icon=\"fa-toggle-off\">";
            // line 914
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 916
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 921
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo ($context["button_cancel"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" form=\"form-theme-materialize\" data-toggle=\"tooltip\" title=\"";
        // line 924
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"theme_materialize_installed_appeal\" value=\"0\">
\t\t</form>
\t</div>
</div>
<script type=\"text/javascript\">
\t\$('#language a:first').tab('show');
\t\$('#tab-colors-pills a:first').tab('show');
\t\$('#foter-descriptions-language a:first').tab('show');
\t\$('#social-icon-language a:first').tab('show');
\t\$('#maps-descriptions-language a:first').tab('show');

\tvar selectBrowserBar = \$(\"#select-color-browser-bar\"),
\t\tinputBrowserBar = \$(\"#input-color-browser-bar-hex\"),
\t\tinputFooterColorText = \$(\"#input-color-footer-text\"),
\t\tinputTypeRemainder = \$(\"#input-type-remainder\");

\tselectBrowserBar.change(function(){
\t\tselectBrowserBarOption = \$(\"#select-color-browser-bar option:selected\");
\t\tvalueHex = selectBrowserBarOption.data('hex');
\t\tinputBrowserBar.attr('value',valueHex);
\t});

\tif (inputTypeRemainder.val() != 'progressbar') {\$('.progressbar-settings').hide();}

\tinputTypeRemainder.change(function(){
\t\tif (inputTypeRemainder.val() != 'progressbar') {\$('.progressbar-settings').hide();}
\t\tif (inputTypeRemainder.val() == 'progressbar') {\$('.progressbar-settings').show();}
\t});

\t// Socials
\tvar icon_row = ";
        // line 961
        echo ($context["icon_row"] ?? null);
        echo ";

\tfunction addIcon(language_id) {
\t\thtml  = '<tr id=\"icon-row' + icon_row + '\">';
\t\thtml += '\t<td class=\"text-center\">';
\t\thtml += '\t\t<a href=\"\" id=\"thumb-image' + icon_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 966
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"></a>';
\t\thtml += '\t\t<input type=\"hidden\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][icon]\" value=\"\" id=\"input-icon' + icon_row + '\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-left\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][title]\" value=\"\" placeholder=\"";
        // line 970
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-left\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][link]\" value=\"\" placeholder=\"";
        // line 973
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-right\">';
\t\thtml += '\t\t<input type=\"text\" name=\"theme_materialize_social_icon[' + language_id + '][' + icon_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 976
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\">';
\t\thtml += '\t</td>';
\t\thtml += '\t<td class=\"text-center\">';
\t\thtml += '\t\t<button type=\"button\" onclick=\"\$(\\'#icon-row' + icon_row + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 979
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
\t\thtml += '\t</td>';
\t\thtml += '</tr>';

\t\t\$('#social-icons' + language_id + ' tbody').append(html);

\t\ticon_row++;
\t}

\t// Selectpicker
\t\$('.selectpicker.selectpicker-live-search').selectpicker({
\t\tsize: 10,
\t\tliveSearch: true,
\t\ticonBase: 'fa',
\t\ttickIcon: 'fa-check'
\t});

\t// Apply button
\tvar applyBtn = \$('#apply-btn'),
\t\tformMaterialize = \$('#form-theme-materialize'),
\t\tdataAction = formMaterialize.attr('data-action');

\tif (sessionStorage['index_p']) {
\t\tvar index_p = sessionStorage['index_p'];
\t} else {
\t\tvar index_p = 0;
\t}

\t\$('#apply-tab li:eq(' + index_p + ') a').tab('show');

\tsessionStorage['index_p'] = 0;

\tapplyBtn.click(function() {
\t\tsessionStorage['index_p'] = \$(\".nav-tabs .active\").index();

\t\tformMaterialize.attr({'action':dataAction});
\t\tformMaterialize.submit();

\t\te.preventDefault();
\t});

\tdocument.addEventListener(\"keydown\", function(event) {
\t\tif (event.keyCode == 83 && (navigator.platform.match(\"Mac\") ? event.metaKey : event.ctrlKey)) {
\t\t\tevent.preventDefault();
\t\t\tapplyBtn.trigger('click');
\t\t}
\t}, false);

\t// Notify
\t";
        // line 1028
        if (($context["success"] ?? null)) {
            // line 1029
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1031
            echo ($context["success"] ?? null);
            echo "'
\t},{
\t\ttype: \"success\"
\t});
\t";
        }
        // line 1036
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 1037
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1039
            echo ($context["error_warning"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1044
        echo "\t";
        if (($context["error_product_limit"] ?? null)) {
            // line 1045
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1047
            echo ($context["error_product_limit"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1052
        echo "\t";
        if (($context["error_product_description_length"] ?? null)) {
            // line 1053
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1055
            echo ($context["error_product_description_length"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1060
        echo "\t";
        if (($context["error_image_category"] ?? null)) {
            // line 1061
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1063
            echo ($context["error_image_category"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1068
        echo "\t";
        if (($context["error_image_thumb"] ?? null)) {
            // line 1069
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1071
            echo ($context["error_image_thumb"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1076
        echo "\t";
        if (($context["error_image_popup"] ?? null)) {
            // line 1077
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1079
            echo ($context["error_image_popup"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1084
        echo "\t";
        if (($context["error_image_product"] ?? null)) {
            // line 1085
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1087
            echo ($context["error_image_product"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1092
        echo "\t";
        if (($context["error_image_additional"] ?? null)) {
            // line 1093
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1095
            echo ($context["error_image_additional"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1100
        echo "\t";
        if (($context["error_image_related"] ?? null)) {
            // line 1101
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1103
            echo ($context["error_image_related"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1108
        echo "\t";
        if (($context["error_image_compare"] ?? null)) {
            // line 1109
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1111
            echo ($context["error_image_compare"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1116
        echo "\t";
        if (($context["error_image_wishlist"] ?? null)) {
            // line 1117
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1119
            echo ($context["error_image_wishlist"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1124
        echo "\t";
        if (($context["error_image_cart"] ?? null)) {
            // line 1125
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1127
            echo ($context["error_image_cart"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1132
        echo "\t";
        if (($context["error_image_location"] ?? null)) {
            // line 1133
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1135
            echo ($context["error_image_location"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1140
        echo "\t";
        if (($context["error_percent_remainder"] ?? null)) {
            // line 1141
            echo "\t\$.notify({
\t\ticon: 'fa fa-exclamation-circle',
\t\tmessage: '";
            // line 1143
            echo ($context["error_percent_remainder"] ?? null);
            echo "'
\t},{
\t\ttype: \"danger\"
\t});
\t";
        }
        // line 1148
        echo "
\t\$('#footer-appeal-users').load('index.php?route=extension/materialize/appeal/installed/footer&user_token=";
        // line 1149
        echo ($context["user_token"] ?? null);
        echo "');

\t";
        // line 1151
        if (($context["theme_materialize_installed_appeal"] ?? null)) {
            // line 1152
            echo "\t\$.ajax({
\t\turl: 'index.php?route=extension/materialize/appeal/installed&modal_title=";
            // line 1153
            echo ($context["materialize_title"] ?? null);
            echo "&user_token=";
            echo ($context["user_token"] ?? null);
            echo "',
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('#modal-materialize-installed').remove();

\t\t\t\$('body').prepend(html);

\t\t\t\$('#modal-materialize-installed').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
\t";
        }
        // line 1167
        echo "</script>
";
        // line 1168
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/theme/materialize.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3049 => 1168,  3046 => 1167,  3027 => 1153,  3024 => 1152,  3022 => 1151,  3017 => 1149,  3014 => 1148,  3006 => 1143,  3002 => 1141,  2999 => 1140,  2991 => 1135,  2987 => 1133,  2984 => 1132,  2976 => 1127,  2972 => 1125,  2969 => 1124,  2961 => 1119,  2957 => 1117,  2954 => 1116,  2946 => 1111,  2942 => 1109,  2939 => 1108,  2931 => 1103,  2927 => 1101,  2924 => 1100,  2916 => 1095,  2912 => 1093,  2909 => 1092,  2901 => 1087,  2897 => 1085,  2894 => 1084,  2886 => 1079,  2882 => 1077,  2879 => 1076,  2871 => 1071,  2867 => 1069,  2864 => 1068,  2856 => 1063,  2852 => 1061,  2849 => 1060,  2841 => 1055,  2837 => 1053,  2834 => 1052,  2826 => 1047,  2822 => 1045,  2819 => 1044,  2811 => 1039,  2807 => 1037,  2804 => 1036,  2796 => 1031,  2792 => 1029,  2790 => 1028,  2738 => 979,  2732 => 976,  2726 => 973,  2720 => 970,  2711 => 966,  2703 => 961,  2661 => 924,  2651 => 921,  2644 => 916,  2639 => 914,  2634 => 913,  2629 => 911,  2624 => 910,  2622 => 909,  2616 => 906,  2605 => 898,  2595 => 893,  2585 => 887,  2581 => 885,  2577 => 883,  2575 => 882,  2568 => 878,  2561 => 873,  2547 => 867,  2541 => 863,  2538 => 862,  2532 => 861,  2530 => 860,  2522 => 857,  2510 => 854,  2498 => 851,  2486 => 848,  2474 => 845,  2466 => 844,  2460 => 842,  2455 => 841,  2453 => 840,  2445 => 835,  2441 => 834,  2437 => 833,  2433 => 832,  2427 => 829,  2422 => 828,  2417 => 827,  2415 => 826,  2411 => 824,  2394 => 822,  2390 => 821,  2380 => 815,  2376 => 813,  2372 => 811,  2370 => 810,  2363 => 805,  2350 => 802,  2342 => 801,  2339 => 800,  2335 => 799,  2330 => 797,  2325 => 795,  2314 => 788,  2310 => 786,  2306 => 784,  2304 => 783,  2298 => 779,  2283 => 774,  2278 => 772,  2267 => 768,  2262 => 766,  2256 => 764,  2252 => 763,  2248 => 761,  2231 => 759,  2227 => 758,  2222 => 756,  2208 => 747,  2200 => 744,  2191 => 740,  2184 => 736,  2178 => 735,  2173 => 733,  2168 => 730,  2155 => 727,  2147 => 726,  2144 => 725,  2140 => 724,  2135 => 722,  2130 => 720,  2126 => 719,  2119 => 714,  2113 => 712,  2111 => 711,  2107 => 710,  2102 => 708,  2096 => 704,  2090 => 703,  2082 => 701,  2074 => 699,  2071 => 698,  2067 => 697,  2063 => 696,  2057 => 693,  2052 => 691,  2039 => 682,  2035 => 680,  2031 => 678,  2029 => 677,  2022 => 674,  2018 => 672,  2014 => 670,  2012 => 669,  2005 => 666,  2001 => 664,  1997 => 662,  1995 => 661,  1988 => 658,  1984 => 656,  1980 => 654,  1978 => 653,  1971 => 650,  1967 => 648,  1963 => 646,  1961 => 645,  1952 => 640,  1948 => 638,  1944 => 636,  1942 => 635,  1935 => 632,  1931 => 630,  1927 => 628,  1925 => 627,  1918 => 624,  1914 => 622,  1910 => 620,  1908 => 619,  1901 => 616,  1897 => 614,  1893 => 612,  1891 => 611,  1884 => 608,  1880 => 606,  1876 => 604,  1874 => 603,  1865 => 597,  1858 => 592,  1852 => 590,  1850 => 589,  1844 => 588,  1837 => 586,  1832 => 583,  1826 => 581,  1824 => 580,  1818 => 579,  1811 => 577,  1806 => 575,  1798 => 569,  1792 => 567,  1790 => 566,  1782 => 563,  1774 => 560,  1767 => 556,  1762 => 553,  1756 => 551,  1754 => 550,  1746 => 547,  1738 => 544,  1731 => 540,  1726 => 537,  1720 => 535,  1718 => 534,  1710 => 531,  1702 => 528,  1695 => 524,  1690 => 521,  1684 => 519,  1682 => 518,  1674 => 515,  1666 => 512,  1659 => 508,  1654 => 505,  1648 => 503,  1646 => 502,  1638 => 499,  1630 => 496,  1623 => 492,  1618 => 489,  1612 => 487,  1610 => 486,  1602 => 483,  1594 => 480,  1587 => 476,  1582 => 473,  1576 => 471,  1574 => 470,  1566 => 467,  1558 => 464,  1551 => 460,  1546 => 457,  1540 => 455,  1538 => 454,  1530 => 451,  1522 => 448,  1515 => 444,  1510 => 441,  1504 => 439,  1502 => 438,  1494 => 435,  1486 => 432,  1479 => 428,  1474 => 425,  1468 => 423,  1466 => 422,  1458 => 419,  1450 => 416,  1443 => 412,  1437 => 408,  1432 => 406,  1427 => 405,  1422 => 403,  1417 => 402,  1415 => 401,  1409 => 398,  1404 => 396,  1389 => 383,  1383 => 382,  1369 => 380,  1355 => 378,  1352 => 377,  1348 => 376,  1344 => 374,  1338 => 373,  1326 => 371,  1314 => 369,  1311 => 368,  1307 => 367,  1301 => 364,  1293 => 359,  1283 => 351,  1277 => 350,  1265 => 348,  1253 => 346,  1250 => 345,  1246 => 344,  1240 => 341,  1234 => 337,  1228 => 336,  1216 => 334,  1204 => 332,  1201 => 331,  1197 => 330,  1193 => 328,  1187 => 327,  1175 => 325,  1163 => 323,  1160 => 322,  1156 => 321,  1150 => 318,  1142 => 312,  1136 => 311,  1124 => 309,  1112 => 307,  1109 => 306,  1105 => 305,  1099 => 302,  1093 => 298,  1087 => 297,  1075 => 295,  1063 => 293,  1060 => 292,  1056 => 291,  1052 => 289,  1046 => 288,  1034 => 286,  1022 => 284,  1019 => 283,  1015 => 282,  1009 => 279,  1003 => 275,  997 => 274,  985 => 272,  973 => 270,  970 => 269,  966 => 268,  962 => 266,  956 => 265,  944 => 263,  932 => 261,  929 => 260,  925 => 259,  919 => 256,  913 => 252,  907 => 251,  895 => 249,  883 => 247,  880 => 246,  876 => 245,  872 => 243,  866 => 242,  854 => 240,  842 => 238,  839 => 237,  835 => 236,  829 => 233,  821 => 228,  817 => 227,  807 => 219,  801 => 218,  789 => 216,  777 => 214,  774 => 213,  770 => 212,  766 => 210,  760 => 209,  748 => 207,  736 => 205,  733 => 204,  729 => 203,  723 => 200,  716 => 196,  713 => 195,  707 => 194,  693 => 192,  679 => 190,  676 => 189,  672 => 188,  666 => 185,  658 => 179,  652 => 178,  640 => 176,  628 => 174,  625 => 173,  621 => 172,  617 => 170,  611 => 169,  599 => 167,  587 => 165,  584 => 164,  580 => 163,  574 => 160,  568 => 156,  562 => 155,  550 => 153,  538 => 151,  535 => 150,  531 => 149,  527 => 147,  521 => 146,  509 => 144,  497 => 142,  494 => 141,  490 => 140,  484 => 137,  478 => 133,  472 => 132,  460 => 130,  448 => 128,  445 => 127,  441 => 126,  437 => 124,  431 => 123,  419 => 121,  407 => 119,  404 => 118,  400 => 117,  394 => 114,  388 => 110,  382 => 109,  370 => 107,  358 => 105,  355 => 104,  351 => 103,  347 => 101,  341 => 100,  329 => 98,  317 => 96,  314 => 95,  310 => 94,  304 => 91,  298 => 87,  292 => 86,  280 => 84,  268 => 82,  265 => 81,  261 => 80,  257 => 78,  251 => 77,  239 => 75,  227 => 73,  224 => 72,  220 => 71,  214 => 68,  208 => 64,  202 => 63,  190 => 61,  178 => 59,  175 => 58,  171 => 57,  165 => 54,  157 => 49,  153 => 48,  143 => 41,  139 => 40,  135 => 39,  128 => 35,  124 => 34,  118 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  86 => 21,  77 => 17,  71 => 13,  60 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/theme/materialize.twig", "");
    }
}
