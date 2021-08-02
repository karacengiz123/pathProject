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

/* SgDatatablesBundle:datatable:features.html.twig */
class __TwigTemplate_e0ff8366a931134ae67837a52c9d815ce8c660eda82be3df9122168bf75b9cd6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:features.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:features.html.twig"));

        // line 9
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 9), "autoWidth", [], "any", false, false, false, 9) === null)) {
            // line 10
            echo "    \"autoWidth\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 10), "autoWidth", [], "any", false, false, false, 10)), "html", null, true);
            echo ",
";
        }
        // line 12
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 12), "deferRender", [], "any", false, false, false, 12) === null)) {
            // line 13
            echo "    \"deferRender\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 13), "deferRender", [], "any", false, false, false, 13)), "html", null, true);
            echo ",
";
        }
        // line 15
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 15), "info", [], "any", false, false, false, 15) === null)) {
            // line 16
            echo "    \"info\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 16), "info", [], "any", false, false, false, 16)), "html", null, true);
            echo ",
";
        }
        // line 18
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 18), "lengthChange", [], "any", false, false, false, 18) === null)) {
            // line 19
            echo "    \"lengthChange\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 19), "lengthChange", [], "any", false, false, false, 19)), "html", null, true);
            echo ",
";
        }
        // line 21
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 21), "ordering", [], "any", false, false, false, 21) === null)) {
            // line 22
            echo "    \"ordering\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 22), "ordering", [], "any", false, false, false, 22)), "html", null, true);
            echo ",
";
        }
        // line 24
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 24), "paging", [], "any", false, false, false, 24) === null)) {
            // line 25
            echo "    \"paging\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 25), "paging", [], "any", false, false, false, 25)), "html", null, true);
            echo ",
";
        }
        // line 27
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 27), "processing", [], "any", false, false, false, 27) === null)) {
            // line 28
            echo "    \"processing\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 28), "processing", [], "any", false, false, false, 28)), "html", null, true);
            echo ",
";
        }
        // line 30
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 30), "scrollX", [], "any", false, false, false, 30) === null)) {
            // line 31
            echo "    \"scrollX\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 31), "scrollX", [], "any", false, false, false, 31)), "html", null, true);
            echo ",
";
        }
        // line 33
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 33), "scrollY", [], "any", false, false, false, 33) === null)) {
            // line 34
            echo "    \"scrollY\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 34), "scrollY", [], "any", false, false, false, 34), "html", null, true);
            echo "\",
";
        }
        // line 36
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 36), "searching", [], "any", false, false, false, 36) === null)) {
            // line 37
            echo "    \"searching\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 37), "searching", [], "any", false, false, false, 37)), "html", null, true);
            echo ",
";
        }
        // line 39
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 39), "stateSave", [], "any", false, false, false, 39) === null)) {
            // line 40
            echo "    \"stateSave\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 40), "stateSave", [], "any", false, false, false, 40)), "html", null, true);
            echo ",
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  123 => 39,  117 => 37,  115 => 36,  109 => 34,  107 => 33,  101 => 31,  99 => 30,  93 => 28,  91 => 27,  85 => 25,  83 => 24,  77 => 22,  75 => 21,  69 => 19,  67 => 18,  61 => 16,  59 => 15,  53 => 13,  51 => 12,  45 => 10,  43 => 9,);
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
{% if sg_datatables_view.features.autoWidth is not same as(null) %}
    \"autoWidth\": {{ sg_datatables_view.features.autoWidth|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.deferRender is not same as(null) %}
    \"deferRender\": {{ sg_datatables_view.features.deferRender|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.info is not same as(null) %}
    \"info\": {{ sg_datatables_view.features.info|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.lengthChange is not same as(null) %}
    \"lengthChange\": {{ sg_datatables_view.features.lengthChange|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.ordering is not same as(null) %}
    \"ordering\": {{ sg_datatables_view.features.ordering|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.paging is not same as(null) %}
    \"paging\": {{ sg_datatables_view.features.paging|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.processing is not same as(null) %}
    \"processing\": {{ sg_datatables_view.features.processing|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.scrollX is not same as(null) %}
    \"scrollX\": {{ sg_datatables_view.features.scrollX|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.scrollY is not same as(null) %}
    \"scrollY\": \"{{ sg_datatables_view.features.scrollY }}\",
{% endif %}
{% if sg_datatables_view.features.searching is not same as(null) %}
    \"searching\": {{ sg_datatables_view.features.searching|sg_datatables_bool_var }},
{% endif %}
{% if sg_datatables_view.features.stateSave is not same as(null) %}
    \"stateSave\": {{ sg_datatables_view.features.stateSave|sg_datatables_bool_var }},
{% endif %}
", "SgDatatablesBundle:datatable:features.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/features.html.twig");
    }
}
