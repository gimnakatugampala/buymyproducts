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

/* materialize/template/account/login.twig */
class __TwigTemplate_16549d8979622a08881af937eb958cf23a5c66939a56b30a4177a4a04375214e extends \Twig\Template
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
\t\"@type\": \"BreadcrumbList\",
\t\"itemListElement\": [
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t";
            if (($context["key"] < (twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)) - 1))) {
                // line 10
                echo "\t\t\t";
                if (($context["key"] == 0)) {
                    // line 11
                    echo "\t\t\t";
                } else {
                    // line 12
                    echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                    // line 14
                    echo $context["key"];
                    echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
                    echo "\",
\t\t\t\t\t\"name\": \"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
                    echo "\"
\t\t\t\t}
\t\t\t},
\t\t\t";
                }
                // line 21
                echo "\t\t";
            } else {
                // line 22
                echo "\t\t\t{
\t\t\t\t\"@type\": \"ListItem\",
\t\t\t\t\"position\": ";
                // line 24
                echo $context["key"];
                echo ",
\t\t\t\t\"item\": {
\t\t\t\t\t\"@id\": \"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
                echo "\",
\t\t\t\t\t\"name\": \"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
                echo "\"
\t\t\t\t}
\t\t\t}
\t\t";
            }
            // line 31
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t]
}
</script>
";
        // line 35
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 36
            echo "\t";
            $context["main"] = "s12 l6";
        } elseif ((        // line 37
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 38
            echo "\t";
            $context["main"] = "s12 l9";
        } else {
            // line 40
            echo "\t";
            $context["main"] = "s12";
        }
        // line 42
        echo "<main>
\t<div class=\"container\">
\t\t<nav id=\"breadcrumbs\" class=\"breadcrumb-wrapper transparent z-depth-0\">
\t\t\t<span class=\"breadcrumb-blur hide-on-med-and-up\"></span>
\t\t\t<div class=\"nav-wrapper breadcrumb-wrap href-underline\">
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 48
            echo "\t\t\t\t\t";
            if (($context["key"] < (twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)) - 1))) {
                // line 49
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 49);
                echo "\" class=\"breadcrumb waves-effect black-text\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 49);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t<span class=\"breadcrumb blue-grey-text text-darken-3\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 51);
                echo "</span>
\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t</div>
\t\t</nav>
\t\t<h1>";
        // line 56
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t<div class=\"row\">
\t\t\t";
        // line 58
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t<div id=\"content\" class=\"col ";
        // line 59
        echo ($context["main"] ?? null);
        echo "\">
\t\t\t\t";
        // line 60
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m6\">
\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t<h2>";
        // line 64
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
\t\t\t\t\t\t\t<p><strong>";
        // line 65
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
\t\t\t\t\t\t\t<form action=\"";
        // line 66
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 69
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"validate\">
\t\t\t\t\t\t\t\t\t<label for=\"input-email\" class=\"text-bold\">";
        // line 70
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
        // line 71
        echo ($context["text_email_error"] ?? null);
        echo "\" data-success=\"";
        echo ($context["text_email_success"] ?? null);
        echo "\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">lock</i>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 75
        echo ($context["password"] ?? null);
        echo "\" id=\"input-password\">
\t\t\t\t\t\t\t\t\t<label for=\"input-password\" class=\"text-bold\">";
        // line 76
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 78
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"";
        // line 80
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn waves-effect waves-light red\">";
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 82
        if (($context["redirect"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m6\">
\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t<h2>";
        // line 90
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
\t\t\t\t\t\t\t<p><strong>";
        // line 91
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
\t\t\t\t\t\t\t<p>";
        // line 92
        echo ($context["text_register_account"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 94
        echo ($context["register"] ?? null);
        echo "\" class=\"btn waves-effect waves-light red href-underline\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 99
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 101
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t</div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 107
        if (($context["success"] ?? null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">check</i>";
            echo ($context["success"] ?? null);
            echo "', classes: 'toast-success'});";
        }
        // line 108
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            echo "M.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo ($context["error_warning"] ?? null);
            echo "', classes: 'toast-warning'});";
        }
        // line 109
        echo "});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 112
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "materialize/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 112,  309 => 109,  302 => 108,  296 => 107,  287 => 101,  282 => 99,  272 => 94,  267 => 92,  263 => 91,  259 => 90,  252 => 85,  246 => 83,  244 => 82,  237 => 80,  230 => 78,  225 => 76,  221 => 75,  212 => 71,  208 => 70,  204 => 69,  198 => 66,  194 => 65,  190 => 64,  183 => 60,  179 => 59,  175 => 58,  170 => 56,  166 => 54,  160 => 53,  154 => 51,  146 => 49,  143 => 48,  139 => 47,  132 => 42,  128 => 40,  124 => 38,  122 => 37,  119 => 36,  117 => 35,  112 => 32,  106 => 31,  99 => 27,  95 => 26,  90 => 24,  86 => 22,  83 => 21,  76 => 17,  72 => 16,  67 => 14,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  50 => 8,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/account/login.twig", "");
    }
}
