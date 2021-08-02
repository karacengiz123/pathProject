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

/* SgDatatablesBundle:datatable:datatable_js.html.twig */
class __TwigTemplate_e8e4c1a7ec2ce7d8d2e7f93371db31885a86865772e9092b2a46e8f93b70eb7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable_js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable_js.html.twig"));

        // line 9
        echo "<script type=\"text/javascript\">

    \$(document).ready(function () {

        var selector = \"#sg-datatables-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "uniqueName", [], "any", false, false, false, 13), "html", null, true);
        echo "\";
        var oTable;

        var defaults = {
        };

        var language = {
            ";
        // line 20
        $this->loadTemplate("@SgDatatables/datatable/language.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 20)->display($context);
        // line 21
        echo "        };

        var ajax = {
            ";
        // line 24
        $this->loadTemplate("@SgDatatables/datatable/ajax.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 24)->display($context);
        // line 25
        echo "        };

        var options = {
            ";
        // line 28
        $this->loadTemplate("@SgDatatables/datatable/options.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 28)->display($context);
        // line 29
        echo "        };

        var features = {
            ";
        // line 32
        $this->loadTemplate("@SgDatatables/datatable/features.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 32)->display($context);
        // line 33
        echo "        };

        var callbacks = {
            ";
        // line 36
        $this->loadTemplate("@SgDatatables/datatable/callbacks.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 36)->display($context);
        // line 37
        echo "        };

        var extensions = {
            ";
        // line 40
        $this->loadTemplate("@SgDatatables/datatable/extensions.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 40)->display($context);
        // line 41
        echo "        };

        var columns = {
            ";
        // line 44
        $this->loadTemplate("@SgDatatables/datatable/columns.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 44)->display($context);
        // line 45
        echo "        };

        var initialSearch = {
            ";
        // line 48
        $this->loadTemplate("@SgDatatables/datatable/initial_search.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 48)->display($context);
        // line 49
        echo "        };

        function postCreateDatatable(pipeline) {
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "columnBuilder", [], "any", false, false, false, 52), "columns", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 53
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["column"], "sentInResponse", [], "any", false, false, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, $context["column"], "renderPostCreateDatatableJsContent", [], "any", false, false, false, 53)))) {
                // line 54
                echo "                    ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "renderPostCreateDatatableJsContent", [], "any", false, false, false, 54);
                echo "
                ";
            }
            // line 56
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        }

        function createDatatable() {
            \$.extend(defaults, language);
            \$.extend(defaults, ajax);
            \$.extend(defaults, options);
            \$.extend(defaults, features);
            \$.extend(defaults, callbacks);
            \$.extend(defaults, extensions);
            \$.extend(defaults, columns);
            \$.extend(defaults, initialSearch);

            if (!\$.fn.dataTable.isDataTable(selector)) {
                \$(selector)
                    ";
        // line 71
        $this->loadTemplate("@SgDatatables/datatable/events.html.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 71)->display($context);
        // line 72
        echo "                ;
            
                oTable = \$(selector)
                    .DataTable(defaults)
                        .on('draw.dt', function() { postCreateDatatable(";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 76), "pipeline", [], "any", false, false, false, 76), "html", null, true);
        echo ") })
                    ;

                ";
        // line 79
        if ((true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 79), "individualFiltering", [], "any", false, false, false, 79))) {
            // line 80
            echo "                    ";
            $this->loadTemplate("@SgDatatables/datatable/search.js.twig", "SgDatatablesBundle:datatable:datatable_js.html.twig", 80)->display($context);
            // line 81
            echo "                ";
        }
        // line 82
        echo "            }
        }

        createDatatable();

        ";
        // line 87
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "columnBuilder", [], "any", false, false, false, 87), "uniqueColumn", [0 => "multiselect"], "method", false, false, false, 87))) {
            // line 88
            echo "            ";
            echo $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->datatablesRenderMultiselectActions($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "columnBuilder", [], "any", false, false, false, 88), "uniqueColumn", [0 => "multiselect"], "method", false, false, false, 88), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 88), "pipeline", [], "any", false, false, false, 88));
            echo "
        ";
        }
        // line 90
        echo "    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:datatable_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 90,  181 => 88,  179 => 87,  172 => 82,  169 => 81,  166 => 80,  164 => 79,  158 => 76,  152 => 72,  150 => 71,  134 => 57,  128 => 56,  122 => 54,  119 => 53,  115 => 52,  110 => 49,  108 => 48,  103 => 45,  101 => 44,  96 => 41,  94 => 40,  89 => 37,  87 => 36,  82 => 33,  80 => 32,  75 => 29,  73 => 28,  68 => 25,  66 => 24,  61 => 21,  59 => 20,  49 => 13,  43 => 9,);
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
<script type=\"text/javascript\">

    \$(document).ready(function () {

        var selector = \"#sg-datatables-{{ sg_datatables_view.uniqueName }}\";
        var oTable;

        var defaults = {
        };

        var language = {
            {% include '@SgDatatables/datatable/language.html.twig' %}
        };

        var ajax = {
            {% include '@SgDatatables/datatable/ajax.html.twig' %}
        };

        var options = {
            {% include '@SgDatatables/datatable/options.html.twig' %}
        };

        var features = {
            {% include '@SgDatatables/datatable/features.html.twig' %}
        };

        var callbacks = {
            {% include '@SgDatatables/datatable/callbacks.html.twig' %}
        };

        var extensions = {
            {% include '@SgDatatables/datatable/extensions.html.twig' %}
        };

        var columns = {
            {% include '@SgDatatables/datatable/columns.html.twig' %}
        };

        var initialSearch = {
            {% include '@SgDatatables/datatable/initial_search.html.twig' %}
        };

        function postCreateDatatable(pipeline) {
            {% for column in sg_datatables_view.columnBuilder.columns %}
                {% if column.sentInResponse and column.renderPostCreateDatatableJsContent is not null %}
                    {{ column.renderPostCreateDatatableJsContent|raw }}
                {% endif %}
            {% endfor %}
        }

        function createDatatable() {
            \$.extend(defaults, language);
            \$.extend(defaults, ajax);
            \$.extend(defaults, options);
            \$.extend(defaults, features);
            \$.extend(defaults, callbacks);
            \$.extend(defaults, extensions);
            \$.extend(defaults, columns);
            \$.extend(defaults, initialSearch);

            if (!\$.fn.dataTable.isDataTable(selector)) {
                \$(selector)
                    {% include '@SgDatatables/datatable/events.html.twig' %}
                ;
            
                oTable = \$(selector)
                    .DataTable(defaults)
                        .on('draw.dt', function() { postCreateDatatable({{ sg_datatables_view.ajax.pipeline}}) })
                    ;

                {% if true == sg_datatables_view.options.individualFiltering %}
                    {% include '@SgDatatables/datatable/search.js.twig' %}
                {% endif %}
            }
        }

        createDatatable();

        {% if sg_datatables_view.columnBuilder.uniqueColumn('multiselect') is not null %}
            {{ sg_datatables_render_multiselect_actions( sg_datatables_view.columnBuilder.uniqueColumn('multiselect'), sg_datatables_view.ajax.pipeline) }}
        {% endif %}
    });

</script>
", "SgDatatablesBundle:datatable:datatable_js.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/datatable_js.html.twig");
    }
}
