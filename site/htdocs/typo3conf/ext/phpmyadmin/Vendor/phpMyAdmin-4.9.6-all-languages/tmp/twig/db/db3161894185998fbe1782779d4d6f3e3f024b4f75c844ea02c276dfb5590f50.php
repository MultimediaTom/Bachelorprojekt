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

/* display/results/additional_fields.twig */
class __TwigTemplate_9b0d0a32a4260e336281182f42a41cf1b3471517bb6cfa1bf5de076350a4ea2d extends \Twig\Template
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
        echo "<input type=\"hidden\" name=\"sql_query\" value=\"";
        echo ($context["sql_query"] ?? null);
        echo "\" />
<input type=\"hidden\" name=\"goto\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\" />
";
        // line 4
        echo "<input type=\"hidden\" name=\"pos\" size=\"3\" value=\"";
        echo twig_escape_filter($this->env, ($context["pos"] ?? null), "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"is_browse_distinct\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["is_browse_distinct"] ?? null), "html", null, true);
        echo "\" />
";
        // line 6
        echo _gettext("Number of rows:");
        // line 7
        echo PhpMyAdmin\Util::getDropdown("session_max_rows",         // line 9
($context["number_of_rows_choices"] ?? null),         // line 10
($context["max_rows"] ?? null), "", "autosubmit",         // line 13
($context["number_of_rows_placeholder"] ?? null));
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "display/results/additional_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  60 => 13,  59 => 10,  58 => 9,  57 => 7,  55 => 6,  51 => 5,  46 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/additional_fields.twig", "/var/www/site/htdocs/typo3conf/ext/phpmyadmin/Vendor/phpMyAdmin-4.9.6-all-languages/templates/display/results/additional_fields.twig");
    }
}
