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

/* SgDatatablesBundle:datatable:datatable_html.html.twig */
class __TwigTemplate_6f94e475e90914fbeb40fcbf4e53a36785ad35a7a211bd2d9f1bd64b40e3fa28 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable_html.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:datatable_html.html.twig"));

        // line 9
        $context["individual_filtering"] = false;
        // line 10
        echo "
";
        // line 11
        if ((true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 11), "individualFiltering", [], "any", false, false, false, 11))) {
            // line 12
            echo "    ";
            if (((true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 12), "searching", [], "any", false, false, false, 12)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "features", [], "any", false, false, false, 12), "searching", [], "any", false, false, false, 12) === null))) {
                // line 13
                echo "        ";
                $context["individual_filtering"] = true;
                // line 14
                echo "    ";
            }
        }
        // line 16
        echo "
<table id=\"sg-datatables-";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "uniqueName", [], "any", false, false, false, 17), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 17), "classes", [], "any", false, false, false, 17), "html", null, true);
        echo "\" cellspacing=\"0\" width=\"100%\">
    <thead>
        ";
        // line 19
        if ((true == ($context["individual_filtering"] ?? null))) {
            // line 20
            echo "            ";
            if ((("head" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 20), "individualFilteringPosition", [], "any", false, false, false, 20)) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 20), "individualFilteringPosition", [], "any", false, false, false, 20)))) {
                // line 21
                echo "                <tr>
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "columnBuilder", [], "any", false, false, false, 22), "columns", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 23
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "sentInResponse", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "                            <th>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 24), "html", null, true);
                        echo "</th>
                        ";
                    }
                    // line 26
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                </tr>
                <tr id=\"sg-datatables-";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "uniqueName", [], "any", false, false, false, 28), "html", null, true);
                echo "-filterrow\">
                    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "columnBuilder", [], "any", false, false, false, 29), "columns", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 30
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "sentInResponse", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "                            <th>
                                ";
                        // line 32
                        if (twig_get_attribute($this->env, $this->source, $context["column"], "searchable", [], "any", false, false, false, 32)) {
                            // line 33
                            echo "                                    ";
                            echo $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->datatablesRenderFilter($this->env, ($context["sg_datatables_view"] ?? null), $context["column"], "head");
                            echo "
                                ";
                        }
                        // line 35
                        echo "                            </th>
                        ";
                    }
                    // line 37
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                </tr>
            ";
            }
            // line 40
            echo "        ";
        }
        // line 41
        echo "    </thead>
        ";
        // line 42
        if ((true == ($context["individual_filtering"] ?? null))) {
            // line 43
            echo "            ";
            if ((("foot" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 43), "individualFilteringPosition", [], "any", false, false, false, 43)) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "options", [], "any", false, false, false, 43), "individualFilteringPosition", [], "any", false, false, false, 43)))) {
                // line 44
                echo "            <tfoot>
                    <tr>
                        ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "columnBuilder", [], "any", false, false, false, 46), "columns", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 47
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "sentInResponse", [], "any", false, false, false, 47)) {
                        // line 48
                        echo "                                <td>
                                    ";
                        // line 49
                        if (twig_get_attribute($this->env, $this->source, $context["column"], "searchable", [], "any", false, false, false, 49)) {
                            // line 50
                            echo "                                        ";
                            echo $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->datatablesRenderFilter($this->env, ($context["sg_datatables_view"] ?? null), $context["column"], "foot");
                            echo "
                                    ";
                        }
                        // line 52
                        echo "                                </td>
                            ";
                    }
                    // line 54
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                    </tr>
                </tfoot>
            ";
            }
            // line 58
            echo "        ";
        }
        // line 59
        echo "    <tbody>
    </tbody>
</table>

";
        // line 63
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "columnBuilder", [], "any", false, false, false, 63), "uniqueColumn", [0 => "multiselect"], "method", false, false, false, 63) === null)) {
            // line 64
            echo "    <div id=\"sg-datatables-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "uniqueName", [], "any", false, false, false, 64), "html", null, true);
            echo "-multiselect-actions\"></div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:datatable_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 64,  193 => 63,  187 => 59,  184 => 58,  179 => 55,  173 => 54,  169 => 52,  163 => 50,  161 => 49,  158 => 48,  155 => 47,  151 => 46,  147 => 44,  144 => 43,  142 => 42,  139 => 41,  136 => 40,  132 => 38,  126 => 37,  122 => 35,  116 => 33,  114 => 32,  111 => 31,  108 => 30,  104 => 29,  100 => 28,  97 => 27,  91 => 26,  85 => 24,  82 => 23,  78 => 22,  75 => 21,  72 => 20,  70 => 19,  63 => 17,  60 => 16,  56 => 14,  53 => 13,  50 => 12,  48 => 11,  45 => 10,  43 => 9,);
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
{% set individual_filtering = false %}

{% if true == sg_datatables_view.options.individualFiltering %}
    {% if true == sg_datatables_view.features.searching or sg_datatables_view.features.searching is same as(null) %}
        {% set individual_filtering = true %}
    {% endif %}
{% endif %}

<table id=\"sg-datatables-{{ sg_datatables_view.uniqueName }}\" class=\"{{ sg_datatables_view.options.classes }}\" cellspacing=\"0\" width=\"100%\">
    <thead>
        {% if true == individual_filtering %}
            {% if 'head' == sg_datatables_view.options.individualFilteringPosition or 'both' == sg_datatables_view.options.individualFilteringPosition%}
                <tr>
                    {% for column in sg_datatables_view.columnBuilder.columns %}
                        {% if column.sentInResponse %}
                            <th>{{ column.title }}</th>
                        {% endif %}
                    {% endfor %}
                </tr>
                <tr id=\"sg-datatables-{{ sg_datatables_view.uniqueName }}-filterrow\">
                    {% for column in sg_datatables_view.columnBuilder.columns %}
                        {% if column.sentInResponse %}
                            <th>
                                {% if column.searchable %}
                                    {{ sg_datatables_render_filter(sg_datatables_view, column, 'head') }}
                                {% endif %}
                            </th>
                        {% endif %}
                    {% endfor %}
                </tr>
            {% endif %}
        {% endif %}
    </thead>
        {% if true == individual_filtering %}
            {% if 'foot' == sg_datatables_view.options.individualFilteringPosition or 'both' == sg_datatables_view.options.individualFilteringPosition%}
            <tfoot>
                    <tr>
                        {% for column in sg_datatables_view.columnBuilder.columns %}
                            {% if column.sentInResponse %}
                                <td>
                                    {% if column.searchable %}
                                        {{ sg_datatables_render_filter(sg_datatables_view, column, 'foot') }}
                                    {% endif %}
                                </td>
                            {% endif %}
                        {% endfor %}
                    </tr>
                </tfoot>
            {% endif %}
        {% endif %}
    <tbody>
    </tbody>
</table>

{% if sg_datatables_view.columnBuilder.uniqueColumn('multiselect') is not same as(null) %}
    <div id=\"sg-datatables-{{ sg_datatables_view.uniqueName }}-multiselect-actions\"></div>
{% endif %}
", "SgDatatablesBundle:datatable:datatable_html.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/datatable_html.html.twig");
    }
}
