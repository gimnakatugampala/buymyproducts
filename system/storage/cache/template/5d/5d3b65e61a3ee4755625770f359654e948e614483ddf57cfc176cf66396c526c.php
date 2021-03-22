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

/* materialize/template/information/contact.twig */
class __TwigTemplate_39e199828e030d2cc73cd72fb8338e555f0f9cfb09ba96423f20473aaeacf386 extends \Twig\Template
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
\t\t\t<div class=\"col ";
        // line 59
        echo ($context["main"] ?? null);
        echo "\">
\t\t\t\t";
        // line 60
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t";
        // line 62
        if ((($context["yandex"] ?? null) || ($context["google"] ?? null))) {
            // line 63
            echo "\t\t\t\t\t<div id=\"map\">
\t\t\t\t\t\t";
            // line 64
            if (($context["yandex"] ?? null)) {
                // line 65
                echo "\t\t\t\t\t\t<a href=\"//maps.yandex.ru/?text=";
                echo ($context["lat"] ?? null);
                echo ",";
                echo ($context["lng"] ?? null);
                echo "\" class=\"btn-floating btn-large halfway-fab waves-effect waves-light ";
                echo ($context["color_btn"] ?? null);
                echo " ";
                echo ($context["color_btn_text"] ?? null);
                echo "\" title=\"";
                echo ($context["text_view_map"] ?? null);
                echo "\" target=\"_blank\" rel=\"noopener\"><i class=\"material-icons\">map</i></a>
\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t";
            if (($context["google"] ?? null)) {
                // line 68
                echo "\t\t\t\t\t\t<a href=\"//maps.google.com/maps?q=";
                echo ($context["lat"] ?? null);
                echo ",";
                echo ($context["lng"] ?? null);
                echo "&hl=";
                echo ($context["geocode_hl"] ?? null);
                echo "&t=m&z=15\" class=\"btn-floating btn-large halfway-fab waves-effect waves-light ";
                echo ($context["color_btn"] ?? null);
                echo " ";
                echo ($context["color_btn_text"] ?? null);
                echo "\" title=\"";
                echo ($context["text_view_map"] ?? null);
                echo "\" target=\"_blank\" rel=\"noopener\"><i class=\"material-icons\">map</i></a>
\t\t\t\t\t\t<div id=\"google-map\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t<section class=\"section\">
\t\t\t\t\t\t<h2>";
        // line 75
        echo ($context["store"] ?? null);
        echo "</h2>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s12 l6\">
\t\t\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t\t\t<ul class=\"collection no-border\">
\t\t\t\t\t\t\t\t\t\t";
        // line 80
        if (($context["image"] ?? null)) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"responsive-img lazyload\" src=\"";
            // line 82
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<address><i class=\"material-icons left\">location_on</i>";
        // line 86
        echo ($context["address"] ?? null);
        echo "</address>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons left\">phone</i>";
        // line 89
        echo ($context["telephone"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<span><i class=\"material-icons left\">email</i>";
        // line 92
        echo ($context["email_store"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        // line 94
        if (($context["open"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons left\">access_time</i>";
            // line 96
            echo ($context["open"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t\t\t\t\t\t\t";
        if (($context["comment"] ?? null)) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"collection-item no-border\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons left\">info</i>";
            // line 101
            echo ($context["comment"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s12 l6\">
\t\t\t\t\t\t\t\t<div class=\"card-panel\">
\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 109
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 110
        echo ($context["text_contact"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 113
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-name\">";
        // line 114
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">email</i>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 118
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-email\" data-error=\"";
        // line 119
        echo ($context["text_email_error"] ?? null);
        echo "\" data-success=\"";
        echo ($context["text_email_success"] ?? null);
        echo "\">";
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"materialize-textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"input-enquiry\">";
        // line 124
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-reverse\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn waves-effect waves-light red right\" type=\"submit\" value=\"";
        // line 128
        echo ($context["button_submit"] ?? null);
        echo "\">";
        echo ($context["button_submit"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t\t";
        // line 136
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t</div>
\t\t\t";
        // line 138
        echo ($context["column_right"] ?? null);
        echo "
\t\t</div>
\t</div>
</main>
";
        // line 142
        if (($context["yandex"] ?? null)) {
            echo "<script defer src=\"//api-maps.yandex.ru/2.1/?lang=ru_RU\"></script>";
        }
        // line 143
        if (($context["google"] ?? null)) {
            echo "<script defer src=\"//maps.googleapis.com/maps/api/js?key=";
            echo ($context["google_api"] ?? null);
            echo "\"></script>";
        }
        // line 144
        echo "<script>
document.addEventListener(\"DOMContentLoaded\", function(event) {
\t";
        // line 146
        if (($context["error_name"] ?? null)) {
            // line 147
            echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo ($context["error_name"] ?? null);
            echo "', classes: 'toast-warning'});
\t";
        }
        // line 149
        echo "\t";
        if (($context["error_email"] ?? null)) {
            // line 150
            echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo ($context["error_email"] ?? null);
            echo "', classes: 'toast-warning'});
\t";
        }
        // line 152
        echo "\t";
        if (($context["error_enquiry"] ?? null)) {
            // line 153
            echo "\t\tM.toast({html: '<i class=\"material-icons left\">warning</i>";
            echo ($context["error_enquiry"] ?? null);
            echo "', classes: 'toast-warning'});
\t";
        }
        // line 155
        echo "\t";
        if (($context["yandex"] ?? null)) {
            // line 156
            echo "\tymaps.ready(init);

\tvar myMap, myPlacemark, myPin;

\tfunction init() {
\t\tmyMap = new ymaps.Map(\"map\", {
\t\t\tcenter: [";
            // line 162
            echo ($context["lat"] ?? null);
            echo ", ";
            echo ($context["lng"] ?? null);
            echo "],
\t\t\tzoom: 16,
\t\t\tcontrols: []
\t\t});

\t\tmyPin = new ymaps.GeoObjectCollection({}, {
\t\t\t";
            // line 168
            if (($context["icon_pin"] ?? null)) {
                // line 169
                echo "\t\t\ticonLayout: 'default#image',
\t\t\ticonImageSize: [";
                // line 170
                echo ($context["icon_pin_width"] ?? null);
                echo ",";
                echo ($context["icon_pin_height"] ?? null);
                echo "],
\t\t\ticonImageHref: '";
                // line 171
                echo ($context["icon_pin"] ?? null);
                echo "'
\t\t\t";
            }
            // line 173
            echo "\t\t});

\t\tmyPlacemark = new ymaps.Placemark([";
            // line 175
            echo ($context["lat"] ?? null);
            echo ", ";
            echo ($context["lng"] ?? null);
            echo "], {
\t\t\t";
            // line 176
            if (($context["map_description"] ?? null)) {
                // line 177
                echo "\t\t\tballoonContent: '";
                echo ($context["map_description"] ?? null);
                echo "'
\t\t\t";
            }
            // line 179
            echo "\t\t});

\t\tmyPin.add(myPlacemark);
\t\tmyMap.geoObjects.add(myPin);
\t}
\t";
        }
        // line 185
        echo "\t";
        if (($context["google"] ?? null)) {
            // line 186
            echo "\tgoogle.maps.event.addDomListener(window, 'load', init);

\tvar element, options, myMap, myPlacemark, infoWindow;

\tfunction init() {
\t\telement = document.getElementById('google-map');
\t\toptions = {
\t\t\tcenter: {lat: ";
            // line 193
            echo ($context["lat"] ?? null);
            echo ", lng: ";
            echo ($context["lng"] ?? null);
            echo "},
\t\t\tzoom: 16
\t\t}

\t\tmyMap = new google.maps.Map(element, options);

\t\tmyPlacemark = new google.maps.Marker({
\t\t\tposition: {lat: ";
            // line 200
            echo ($context["lat"] ?? null);
            echo ", lng: ";
            echo ($context["lng"] ?? null);
            echo "},
\t\t\tmap: myMap,
\t\t\ticon: '";
            // line 202
            echo ($context["icon_pin"] ?? null);
            echo "'
\t\t});

\t\t";
            // line 205
            if (($context["map_description"] ?? null)) {
                // line 206
                echo "\t\tinfoWindow = new google.maps.InfoWindow({
\t\t\tcontent: '";
                // line 207
                echo ($context["map_description"] ?? null);
                echo "'
\t\t});
\t\t";
            }
            // line 210
            echo "
\t\tmyPlacemark.addListener('click', function() {
\t\t\tinfoWindow.open(myMap, myPlacemark);
\t\t});
\t}
\t";
        }
        // line 216
        echo "});
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 219
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "materialize/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 219,  544 => 216,  536 => 210,  530 => 207,  527 => 206,  525 => 205,  519 => 202,  512 => 200,  500 => 193,  491 => 186,  488 => 185,  480 => 179,  474 => 177,  472 => 176,  466 => 175,  462 => 173,  457 => 171,  451 => 170,  448 => 169,  446 => 168,  435 => 162,  427 => 156,  424 => 155,  418 => 153,  415 => 152,  409 => 150,  406 => 149,  400 => 147,  398 => 146,  394 => 144,  388 => 143,  384 => 142,  377 => 138,  372 => 136,  359 => 128,  354 => 126,  349 => 124,  337 => 119,  333 => 118,  326 => 114,  322 => 113,  316 => 110,  312 => 109,  305 => 104,  299 => 101,  296 => 100,  293 => 99,  287 => 96,  284 => 95,  282 => 94,  277 => 92,  271 => 89,  265 => 86,  262 => 85,  250 => 82,  247 => 81,  245 => 80,  237 => 75,  234 => 74,  230 => 72,  212 => 68,  209 => 67,  195 => 65,  193 => 64,  190 => 63,  188 => 62,  183 => 60,  179 => 59,  175 => 58,  170 => 56,  166 => 54,  160 => 53,  154 => 51,  146 => 49,  143 => 48,  139 => 47,  132 => 42,  128 => 40,  124 => 38,  122 => 37,  119 => 36,  117 => 35,  112 => 32,  106 => 31,  99 => 27,  95 => 26,  90 => 24,  86 => 22,  83 => 21,  76 => 17,  72 => 16,  67 => 14,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  50 => 8,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/information/contact.twig", "");
    }
}
