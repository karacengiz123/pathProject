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

/* SgDatatablesBundle:datatable:options.html.twig */
class __TwigTemplate_2d07f75f388cb1ea31cb68522b417c77882214bf77eb54abfd22d4d5023e3dd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:options.html.twig"));

        // line 9
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 9), "deferLoading", [], "any", false, false, false, 9) === null)) {
            // line 10
            echo "    \"deferLoading\": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 10), "deferLoading", [], "any", false, false, false, 10), "html", null, true);
            echo ",
";
        }
        // line 12
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 12), "displayStart", [], "any", false, false, false, 12) === null)) {
            // line 13
            echo "    \"displayStart\": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 13), "displayStart", [], "any", false, false, false, 13), "html", null, true);
            echo ",
";
        }
        // line 15
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 15), "dom", [], "any", false, false, false, 15) === null)) {
            // line 16
            echo "    \"dom\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 16), "dom", [], "any", false, false, false, 16), "js"), "html", null, true);
            echo "\",
";
        }
        // line 18
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 18), "lengthMenu", [], "any", false, false, false, 18) === null)) {
            // line 19
            echo "    \"lengthMenu\": ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 19), "lengthMenu", [], "any", false, false, false, 19);
            echo ",
";
        }
        // line 21
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 21), "order", [], "any", false, false, false, 21) === null)) {
            // line 22
            echo "    \"order\": ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 22), "order", [], "any", false, false, false, 22);
            echo ",
";
        }
        // line 24
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 24), "orderCellsTop", [], "any", false, false, false, 24) === null)) {
            // line 25
            echo "    \"orderCellsTop\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 25), "orderCellsTop", [], "any", false, false, false, 25)), "html", null, true);
            echo ",
";
        }
        // line 27
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 27), "orderClasses", [], "any", false, false, false, 27) === null)) {
            // line 28
            echo "    \"orderClasses\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 28), "orderClasses", [], "any", false, false, false, 28)), "html", null, true);
            echo ",
";
        }
        // line 30
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 30), "orderFixed", [], "any", false, false, false, 30) === null)) {
            // line 31
            echo "    \"orderFixed\": ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 31), "orderFixed", [], "any", false, false, false, 31);
            echo ",
";
        }
        // line 33
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 33), "orderMulti", [], "any", false, false, false, 33) === null)) {
            // line 34
            echo "    \"orderMulti\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 34), "orderMulti", [], "any", false, false, false, 34)), "html", null, true);
            echo ",
";
        }
        // line 36
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 36), "pageLength", [], "any", false, false, false, 36) === null)) {
            // line 37
            echo "    \"pageLength\": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 37), "pageLength", [], "any", false, false, false, 37), "html", null, true);
            echo ",
";
        }
        // line 39
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 39), "pagingType", [], "any", false, false, false, 39) === null)) {
            // line 40
            echo "    \"pagingType\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 40), "pagingType", [], "any", false, false, false, 40), "html", null, true);
            echo "\",
";
        }
        // line 42
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 42), "renderer", [], "any", false, false, false, 42) === null)) {
            // line 43
            echo "    \"renderer\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 43), "renderer", [], "any", false, false, false, 43), "html", null, true);
            echo "\",
";
        }
        // line 45
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 45), "retrieve", [], "any", false, false, false, 45) === null)) {
            // line 46
            echo "    \"retrieve\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 46), "retrieve", [], "any", false, false, false, 46)), "html", null, true);
            echo ",
";
        }
        // line 48
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 48), "rowId", [], "any", false, false, false, 48) === null)) {
            // line 49
            echo "    \"rowId\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 49), "rowId", [], "any", false, false, false, 49), "html", null, true);
            echo "\",
";
        }
        // line 51
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 51), "scrollCollapse", [], "any", false, false, false, 51) === null)) {
            // line 52
            echo "    \"scrollCollapse\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 52), "scrollCollapse", [], "any", false, false, false, 52)), "html", null, true);
            echo ",
";
        }
        // line 54
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 54), "searchDelay", [], "any", false, false, false, 54) === null)) {
            // line 55
            echo "    \"searchDelay\": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 55), "searchDelay", [], "any", false, false, false, 55), "html", null, true);
            echo ",
";
        }
        // line 57
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 57), "stateDuration", [], "any", false, false, false, 57) === null)) {
            // line 58
            echo "    \"stateDuration\": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 58), "stateDuration", [], "any", false, false, false, 58), "html", null, true);
            echo ",
";
        }
        // line 60
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 60), "stripeClasses", [], "any", false, false, false, 60) === null)) {
            // line 61
            echo "    \"stripeClasses\": ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 61), "stripeClasses", [], "any", false, false, false, 61);
            echo ",
";
        }
        // line 63
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 63,  181 => 61,  179 => 60,  173 => 58,  171 => 57,  165 => 55,  163 => 54,  157 => 52,  155 => 51,  149 => 49,  147 => 48,  141 => 46,  139 => 45,  133 => 43,  131 => 42,  125 => 40,  123 => 39,  117 => 37,  115 => 36,  109 => 34,  107 => 33,  101 => 31,  99 => 30,  93 => 28,  91 => 27,  85 => 25,  83 => 24,  77 => 22,  75 => 21,  69 => 19,  67 => 18,  61 => 16,  59 => 15,  53 => 13,  51 => 12,  45 => 10,  43 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% if sg_datatables_view.options.deferLoading is not same as(null) %}
    \"deferLoading\": {{ sg_datatables_view.options.deferLoading }},
{% endif %}
{% if sg_datatables_view.options.displayStart is not same as(null) %}
    \"displayStart\": {{ sg_datatables_view.options.displayStart }},
{% endif %}
{% if sg_datatables_view.options.dom is not same as(null) %}
    \"dom\": \"{{ sg_datatables_view.options.dom|e('js') }}\",
{% endif %}
{% if sg_datatables_view.options.lengthMenu is not same as(null) %}
    \"lengthMenu\": {{ sg_datatables_view.options.lengthMenu|raw }},
{% endif %}
{% if sg_datatables_view.options.order is not same as(null) %}
    \"order\": {{ sg_datatables_view.options.order|raw }},
{% endif %}
{% if sg_datatables_view.options.orderCellsTop is not same as(null) %}
    \"orderCellsTop\": {{ sg_datatables_view.options.orderCellsTop|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.orderClasses is not same as(null) %}
    \"orderClasses\": {{ sg_datatables_view.options.orderClasses|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.orderFixed is not same as(null) %}
    \"orderFixed\": {{ sg_datatables_view.options.orderFixed|raw }},
{% endif %}
{% if sg_datatables_view.options.orderMulti is not same as(null) %}
    \"orderMulti\": {{ sg_datatables_view.options.orderMulti|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.pageLength is not same as(null) %}
    \"pageLength\": {{ sg_datatables_view.options.pageLength }},
{% endif %}
{% if sg_datatables_view.options.pagingType is not same as(null) %}
    \"pagingType\": \"{{ sg_datatables_view.options.pagingType }}\",
{% endif %}
{% if sg_datatables_view.options.renderer is not same as(null) %}
    \"renderer\": \"{{ sg_datatables_view.options.renderer }}\",
{% endif %}
{% if sg_datatables_view.options.retrieve is not same as(null) %}
    \"retrieve\": {{ sg_datatables_view.options.retrieve|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.rowId is not same as(null) %}
    \"rowId\": \"{{ sg_datatables_view.options.rowId }}\",
{% endif %}
{% if sg_datatables_view.options.scrollCollapse is not same as(null) %}
    \"scrollCollapse\": {{ sg_datatables_view.options.scrollCollapse|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.options.searchDelay is not same as(null) %}
    \"searchDelay\": {{ sg_datatables_view.options.searchDelay }},
{% endif %}
{% if sg_datatables_view.options.stateDuration is not same as(null) %}
    \"stateDuration\": {{ sg_datatables_view.options.stateDuration }},
{% endif %}
{% if sg_datatables_view.options.stripeClasses is not same as(null) %}
    \"stripeClasses\": {{ sg_datatables_view.options.stripeClasses|raw }},
{% endif %}


", "SgDatatablesBundle:datatable:options.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/options.html.twig");
    }
}
