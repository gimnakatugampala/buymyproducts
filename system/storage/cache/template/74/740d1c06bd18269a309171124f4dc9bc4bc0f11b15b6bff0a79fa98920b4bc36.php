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

/* materialize/template/extension/module/quickorder.twig */
class __TwigTemplate_2a251600eb263644c8c99a97334cb508e9a05492b1975e989da5801e322510fb extends \Twig\Template
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
        if (($context["module_quickorder_status"] ?? null)) {
            // line 2
            echo "<form id=\"quickorder__modal\" class=\"modal white\">
\t<div class=\"modal-content\">
\t\t<i class=\"material-icons modal-action modal-close waves-effect waves-circle close-icon\">close</i>
\t\t<h4>";
            // line 5
            echo ($context["module_quickorder_button"] ?? null);
            echo " — ";
            echo ($context["product_title"] ?? null);
            echo "</h4>
\t\t<div class=\"row\">
\t\t\t";
            // line 7
            if (($context["thumb"] ?? null)) {
                // line 8
                echo "\t\t\t<div class=\"col s12 m6 center\">
\t\t\t\t<figure>
\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
                // line 10
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["module_quickorder_button"] ?? null);
                echo " — ";
                echo ($context["product_title"] ?? null);
                echo "\">
\t\t\t\t\t<figcaption>";
                // line 11
                echo ($context["module_quickorder_button"] ?? null);
                echo " — ";
                echo ($context["product_title"] ?? null);
                echo "</figcaption>
\t\t\t\t</figure>
\t\t\t</div>
\t\t\t";
            }
            // line 15
            echo "\t\t\t<div class=\"col s12 ";
            echo ((($context["thumb"] ?? null)) ? ("m6") : (""));
            echo "\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 17
            if (($context["module_quickorder_name"] ?? null)) {
                // line 18
                echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t<input id=\"quickorder-name\" name=\"module_quickorder_name\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t<label for=\"quickorder-name\" class=\"text-bold";
                // line 21
                echo ((($context["module_quickorder_name_required"] ?? null)) ? (" required") : (""));
                echo "\">";
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">phone</i>
\t\t\t\t\t\t<input id=\"quickorder-telephone\" name=\"module_quickorder_telephone\" type=\"tel\" class=\"validate\">
\t\t\t\t\t\t<label for=\"quickorder-telephone\" class=\"text-bold required\">";
            // line 27
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 29
            if (($context["module_quickorder_email"] ?? null)) {
                // line 30
                echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t<input id=\"quickorder-email\" name=\"module_quickorder_email\" type=\"email\" class=\"validate\">
\t\t\t\t\t\t<label for=\"quickorder-email\" class=\"text-bold";
                // line 33
                echo ((($context["module_quickorder_email_required"] ?? null)) ? (" required") : (""));
                echo "\">";
                echo ($context["entry_email"] ?? null);
                echo "</label>
\t\t\t\t\t\t<span class=\"helper-text\" data-error=\"";
                // line 34
                echo ($context["text_email_error"] ?? null);
                echo "\" data-success=\"";
                echo ($context["text_email_success"] ?? null);
                echo "\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t";
            if (($context["module_quickorder_enquiry"] ?? null)) {
                // line 38
                echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">chat</i>
\t\t\t\t\t\t<textarea id=\"quickorder-enquiry\" name=\"module_quickorder_enquiry\" class=\"materialize-textarea character-counter\" data-length=\"360\"></textarea>
\t\t\t\t\t\t<label for=\"quickorder-enquiry\" class=\"text-bold";
                // line 41
                echo ((($context["module_quickorder_enquiry_required"] ?? null)) ? (" required") : (""));
                echo "\">";
                echo ($context["entry_enquiry"] ?? null);
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t";
            if (($context["module_quickorder_calltime"] ?? null)) {
                // line 45
                echo "\t\t\t\t\t<div class=\"input-field col s12\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">av_timer</i>
\t\t\t\t\t\t<input type=\"text\" id=\"quickorder-calltime\" class=\"timepicker\" name=\"module_quickorder_calltime\" value=\"\">
\t\t\t\t\t\t<label for=\"quickorder-calltime\" class=\"text-bold";
                // line 48
                echo ((($context["module_quickorder_calltime_required"] ?? null)) ? (" required") : (""));
                echo "\">";
                echo ($context["entry_calltime"] ?? null);
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 54
            if (($context["text_agree"] ?? null)) {
                // line 55
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t<label for=\"agreement-check-quickorder\">
\t\t\t\t\t";
                // line 58
                if (($context["module_quickorder_agree"] ?? null)) {
                    // line 59
                    echo "\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_agree\" value=\"1\" checked=\"checked\" id=\"agreement-check-quickorder\" class=\"filled-in\">
\t\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t\t<input type=\"checkbox\" name=\"module_quickorder_agree\" value=\"1\" id=\"agreement-check-quickorder\" class=\"filled-in\">
\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t<span>";
                echo ($context["text_agree"] ?? null);
                echo "</span>
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            // line 68
            echo "\t</div>
\t<div class=\"modal-footer\">
\t\t<input type=\"hidden\" name=\"module_quickorder_product_title\" value=\"";
            // line 70
            echo ($context["product_title"] ?? null);
            echo "\">
\t\t<input type=\"hidden\" name=\"module_quickorder_product_link\" value=\"";
            // line 71
            echo ($context["product_link"] ?? null);
            echo "\">
\t\t<button type=\"button\" id=\"quickorder__button\" class=\"btn modal-action waves-effect waves-light red\" value=\"";
            // line 72
            echo ($context["button_submit"] ?? null);
            echo "\">";
            echo ($context["button_submit"] ?? null);
            echo "</button>
\t</div>
</form>
<div class=\"section\">
\t<button type=\"button\" data-target=\"quickorder__modal\" id=\"quickorder__btn\" class=\"btn btn-large waves-effect waves-light width-max modal-trigger ";
            // line 76
            echo ($context["module_quickorder_color_btn"] ?? null);
            echo " ";
            echo ($context["module_quickorder_color_btn_text"] ?? null);
            echo "\"><i class=\"material-icons left\">shopping_cart</i>";
            echo ($context["module_quickorder_button"] ?? null);
            echo "</button>
</div>
<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
            // line 80
            if (($context["module_quickorder_enquiry"] ?? null)) {
                echo "\$('.character-counter').characterCounter();";
            }
            // line 81
            echo "\t";
            if (($context["module_quickorder_calltime"] ?? null)) {
                // line 82
                echo "\t\$('.timepicker').timepicker({
\t\tdefaultTime: 'now',
\t\tautoclose: true,
\t\ti18n: {
\t\t\tclear: '";
                // line 86
                echo ($context["button_datetime_clear"] ?? null);
                echo "',
\t\t\tcancel: '";
                // line 87
                echo ($context["button_datetime_done"] ?? null);
                echo "',
\t\t\tdone: '";
                // line 88
                echo ($context["button_time_done"] ?? null);
                echo "',
\t\t\ttwelvehour: ";
                // line 89
                echo ($context["twelve_hour"] ?? null);
                echo "
\t\t}
\t});
\t";
            }
            // line 93
            echo "\t\$('#quickorder__button').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/quickorder/send',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#quickorder__modal\").serialize(),
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>' + json['error'], classes: 'toast-warning'});
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\tM.toast({html: '<i class=\"material-icons left\">check</i>' + json['success'], classes: 'toast-success'});
\t\t\t\t\t\$('#quickorder-telephone').val('').removeClass('valid');
\t\t\t\t\t\$('#quickorder-telephone').parent().find('label').removeClass('active');
\t\t\t\t\t";
            // line 107
            if (($context["module_quickorder_name"] ?? null)) {
                // line 108
                echo "\t\t\t\t\t\$('#quickorder-name').val('').removeClass('valid');
\t\t\t\t\t\$('#quickorder-name').parent().find('label').removeClass('active');
\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t\t";
            if (($context["module_quickorder_email"] ?? null)) {
                // line 112
                echo "\t\t\t\t\t\$('#quickorder-email').val('').removeClass('valid');
\t\t\t\t\t\$('#quickorder-email').parent().find('label').removeClass('active');
\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t";
            if (($context["module_quickorder_enquiry"] ?? null)) {
                // line 116
                echo "\t\t\t\t\t\$('#quickorder-enquiry').val('');
\t\t\t\t\t\$('#quickorder-enquiry').parent().find('label').removeClass('active');
\t\t\t\t\t\$('#quickorder-enquiry').parent().find('.character-counter').empty();
\t\t\t\t\tM.textareaAutoResize(\$('#quickorder-enquiry'));
\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t\t";
            if (($context["module_quickorder_calltime"] ?? null)) {
                // line 122
                echo "\t\t\t\t\t\$('#quickorder-calltime').val('');
\t\t\t\t\t\$('#quickorder-calltime').parent().find('label').removeClass('active');
\t\t\t\t\t";
            }
            // line 125
            echo "\t\t\t\t\t";
            if (($context["text_agree"] ?? null)) {
                // line 126
                echo "\t\t\t\t\t\$('#agreement-check-quickorder').prop('checked', false);
\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t\$('#quickorder__modal').modal('close');
\t\t\t\t}
\t\t\t}
\t\t});
\t});
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/quickorder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 128,  307 => 126,  304 => 125,  299 => 122,  296 => 121,  289 => 116,  286 => 115,  281 => 112,  278 => 111,  273 => 108,  271 => 107,  255 => 93,  248 => 89,  244 => 88,  240 => 87,  236 => 86,  230 => 82,  227 => 81,  223 => 80,  212 => 76,  203 => 72,  199 => 71,  195 => 70,  191 => 68,  182 => 63,  178 => 61,  174 => 59,  172 => 58,  167 => 55,  165 => 54,  160 => 51,  152 => 48,  147 => 45,  144 => 44,  136 => 41,  131 => 38,  128 => 37,  120 => 34,  114 => 33,  109 => 30,  107 => 29,  102 => 27,  97 => 24,  89 => 21,  84 => 18,  82 => 17,  76 => 15,  67 => 11,  57 => 10,  53 => 8,  51 => 7,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/extension/module/quickorder.twig", "");
    }
}
