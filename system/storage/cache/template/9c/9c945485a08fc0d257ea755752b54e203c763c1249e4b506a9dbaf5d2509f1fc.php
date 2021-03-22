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

/* materialize/template/extension/module/account.twig */
class __TwigTemplate_fe3d7b92735c852b9d697e7a038e8ed82232437899a6533785b9fb55c4d40046 extends \Twig\Template
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
        echo "<div class=\"collection z-depth-1\">
\t";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo ($context["login"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            // line 4
            echo ($context["register"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            // line 5
            echo ($context["forgotten"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
\t";
        }
        // line 7
        echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        echo ($context["account"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t";
        // line 8
        if (($context["logged"] ?? null)) {
            // line 9
            echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo ($context["edit"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_edit"] ?? null);
            echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            // line 10
            echo ($context["password"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
\t";
        }
        // line 12
        echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        echo ($context["address"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_address"] ?? null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 13
        echo ($context["wishlist"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 14
        echo ($context["order"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 15
        echo ($context["download"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_download"] ?? null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 16
        echo ($context["recurring"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 17
        echo ($context["reward"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_reward"] ?? null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 18
        echo ($context["return"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_return"] ?? null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 19
        echo ($context["transaction"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a>
\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
        // line 20
        echo ($context["newsletter"] ?? null);
        echo "\" rel=\"nofollow\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
\t";
        // line 21
        if (($context["logged"] ?? null)) {
            // line 22
            echo "\t<a class=\"collection-item waves-effect blue-grey-text text-darken-4\" href=\"";
            echo ($context["logout"] ?? null);
            echo "\" rel=\"nofollow\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t";
        }
        // line 24
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 24,  142 => 22,  140 => 21,  134 => 20,  128 => 19,  122 => 18,  116 => 17,  110 => 16,  104 => 15,  98 => 14,  92 => 13,  85 => 12,  78 => 10,  71 => 9,  69 => 8,  62 => 7,  55 => 5,  49 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/extension/module/account.twig", "");
    }
}
