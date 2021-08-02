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

/* SgDatatablesBundle:filter:daterange.html.twig */
class __TwigTemplate_0ef9efb40fcb76125eb6cf5cf6a6e08c182e618ff7f096b16b5c92af6ffd8052 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html' => [$this, 'block_html'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:daterange.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:daterange.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 10), "type", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
";
        $context["filter_input_type"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        ob_start();
        // line 14
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-filter-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 14), "html", null, true);
        $context["filter_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        ob_start();
        // line 18
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
        echo "\"";
        $context["filter_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        ob_start();
        // line 22
        echo "    class=\"sg-datatables-individual-filtering";
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 22), "classes", [], "any", false, false, false, 22) === null)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 22), "classes", [], "any", false, false, false, 22), "html", null, true);
        }
        echo "\"
";
        $context["filter_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
";
        // line 25
        ob_start();
        // line 26
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "width", [], "any", false, false, false, 26) === null)) {
            echo "style=\"width:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "width", [], "any", false, false, false, 26), "html", null, true);
            echo ";\"";
        }
        $context["filter_width"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 30), "placeholder", [], "any", false, false, false, 30) === true)) {
            // line 31
            echo "        placeholder=\"";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 31), "placeholderText", [], "any", false, false, false, 31) === null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 31), "placeholderText", [], "any", false, false, false, 31), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "title", [], "any", false, false, false, 31))), "html", null, true);
            }
            echo "\"
    ";
        }
        $context["filter_input_placeholder"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start();
        // line 36
        echo "    data-search-column-index=\"";
        echo twig_escape_filter($this->env, ($context["search_column_index"] ?? null), "html", null, true);
        echo "\"
";
        $context["filter_search_column_index"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 40) === null)) {
            echo "name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
            echo "\"";
        }
        $context["filter_column_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 44), "initialSearch", [], "any", false, false, false, 44)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 44), "initialSearch", [], "any", false, false, false, 44), "html", null, true);
            echo "\"";
        }
        $context["filter_input_initial_search"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        ob_start();
        // line 48
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-filter-cancel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 48), "html", null, true);
        $context["cancel_button_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        ob_start();
        // line 52
        echo "    ";
        if ((true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 52), "cancelButton", [], "any", false, false, false, 52))) {
            // line 53
            echo "        <button type=\"button\"
                id=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? null), "html", null, true);
            echo "\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    ";
        }
        $context["cancel_button_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "
";
        // line 60
        ob_start();
        // line 61
        echo "    ";
        if ((true == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 61), "cancelButton", [], "any", false, false, false, 61))) {
            // line 62
            echo "        <script type=\"text/javascript\">
            \$(\"#";
            // line 63
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? null), "html", null, true);
            echo "\").click(function() {
                if ('' != \$(\"#";
            // line 64
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
            echo "\").val()) {
                    \$(\"#";
            // line 65
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
            echo "\")
                        .val('')
                        .change();
                }
            });
        </script>
    ";
        }
        $context["cancel_button_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('html', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 74
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        // line 75
        echo "    <input ";
        echo twig_escape_filter($this->env, ($context["filter_input_type"] ?? null), "html", null, true);
        echo "            ";
        // line 76
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_selector"] ?? null), "html", null, true);
        echo "             ";
        // line 77
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_classes"] ?? null), "html", null, true);
        echo "              ";
        // line 78
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_width"] ?? null), "html", null, true);
        echo "                ";
        // line 79
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_placeholder"] ?? null), "html", null, true);
        echo "    ";
        // line 80
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_search_column_index"] ?? null), "html", null, true);
        echo "  ";
        // line 81
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? null), "html", null, true);
        echo "          ";
        // line 82
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_input_initial_search"] ?? null), "html", null, true);
        echo " ";
        // line 83
        echo "    />
    ";
        // line 84
        echo twig_escape_filter($this->env, ($context["cancel_button_html"] ?? null), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 88
        echo "    <script type=\"text/javascript\">
        moment.locale(\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 89), "locale", [], "any", false, false, false, 89), "html", null, true);
        echo "\");
        \$(\"#";
        // line 90
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
        echo "\").daterangepicker({
            autoUpdateInput: false,
            locale: {
                format: \"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sg.datatables.daterange.format", [], "messages"), "html", null, true);
        echo "\",
                applyLabel: \"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sg.datatables.daterange.apply", [], "messages"), "html", null, true);
        echo "\",
                cancelLabel: \"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sg.datatables.daterange.cancel", [], "messages"), "html", null, true);
        echo "\",
                daysOfWeek: moment.weekdaysMin(),
                monthNames: moment.monthsShort(),
                firstDay: moment.localeData().firstDayOfWeek()
            }
        }).on('cancel.daterangepicker', function (ev, picker) {
            \$(this).val('');
            \$(this).change();
          })
          .on('apply.daterangepicker', function (ev, picker) {
                \$(this).val(picker.startDate.format(\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sg.datatables.daterange.format", [], "messages"), "html", null, true);
        echo "\") + ' - ' + picker.endDate.format(\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sg.datatables.daterange.format", [], "messages"), "html", null, true);
        echo "\"));
                \$(this).change();
          });
    </script>
    ";
        // line 109
        echo twig_escape_filter($this->env, ($context["cancel_button_js"] ?? null), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:filter:daterange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 109,  325 => 105,  312 => 95,  308 => 94,  304 => 93,  298 => 90,  294 => 89,  291 => 88,  281 => 87,  269 => 84,  266 => 83,  262 => 82,  258 => 81,  254 => 80,  250 => 79,  246 => 78,  242 => 77,  238 => 76,  234 => 75,  224 => 74,  214 => 87,  211 => 86,  209 => 74,  206 => 73,  195 => 65,  191 => 64,  187 => 63,  184 => 62,  181 => 61,  179 => 60,  176 => 59,  168 => 54,  165 => 53,  162 => 52,  160 => 51,  152 => 48,  150 => 47,  142 => 44,  140 => 43,  137 => 42,  129 => 40,  127 => 39,  124 => 38,  118 => 36,  116 => 35,  113 => 34,  102 => 31,  99 => 30,  97 => 29,  94 => 28,  86 => 26,  84 => 25,  81 => 24,  72 => 22,  70 => 21,  65 => 18,  63 => 17,  55 => 14,  53 => 13,  47 => 10,  45 => 9,);
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
{% set filter_input_type %}
    type=\"{{ column.filter.type }}\"
{% endset %}

{%- set filter_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-{{ column.index }}
{%- endset -%}

{%- set filter_selector -%}
    id=\"{{ filter_id_selector }}\"
{%- endset -%}

{% set filter_classes %}
    class=\"sg-datatables-individual-filtering{% if column.filter.classes is not same as(null) %} {{ column.filter.classes }}{% endif %}\"
{% endset %}

{% set filter_width %}
    {% if column.width is not same as(null) %}style=\"width:{{ column.width }};\"{% endif %}
{% endset %}

{% set filter_input_placeholder %}
    {% if column.filter.placeholder is same as(true) %}
        placeholder=\"{% if column.filter.placeholderText is not same as(null) %}{{ column.filter.placeholderText }}{% else %}{{ column.title|striptags|trim }}{% endif %}\"
    {% endif %}
{% endset %}

{% set filter_search_column_index %}
    data-search-column-index=\"{{ search_column_index }}\"
{% endset %}

{% set filter_column_name %}
    {% if column.name is not same as(null) %}name=\"{{ column.name }}\"{% endif %}
{% endset %}

{% set filter_input_initial_search %}
    {% if column.filter.initialSearch %}value=\"{{ column.filter.initialSearch }}\"{% endif %}
{% endset %}

{%- set cancel_button_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-cancel-{{ column.index }}
{%- endset -%}

{% set cancel_button_html %}
    {% if true == column.filter.cancelButton %}
        <button type=\"button\"
                id=\"{{ cancel_button_id_selector }}\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    {% endif %}
{% endset %}

{% set cancel_button_js %}
    {% if true == column.filter.cancelButton %}
        <script type=\"text/javascript\">
            \$(\"#{{ cancel_button_id_selector }}\").click(function() {
                if ('' != \$(\"#{{ filter_id_selector }}\").val()) {
                    \$(\"#{{ filter_id_selector }}\")
                        .val('')
                        .change();
                }
            });
        </script>
    {% endif %}
{% endset %}

{% block html %}
    <input {{ filter_input_type }}            {# type = \"text\" #}
            {{ filter_selector }}             {# id = \"\" #}
            {{ filter_classes }}              {# class = \"\" #}
            {{ filter_width }}                {# style = \"width:\" #}
            {{ filter_input_placeholder }}    {# placeholder = \"\" #}
            {{ filter_search_column_index }}  {# data-search-column-index = \"\" #}
            {{ filter_column_name }}          {# name = \"\" #}
            {{ filter_input_initial_search }} {# value = \"\" #}
    />
    {{ cancel_button_html }}
{% endblock %}

{% block javascript %}
    <script type=\"text/javascript\">
        moment.locale(\"{{ app.request.locale }}\");
        \$(\"#{{ filter_id_selector }}\").daterangepicker({
            autoUpdateInput: false,
            locale: {
                format: \"{{ 'sg.datatables.daterange.format'|trans({}, 'messages') }}\",
                applyLabel: \"{{ 'sg.datatables.daterange.apply'|trans({}, 'messages') }}\",
                cancelLabel: \"{{ 'sg.datatables.daterange.cancel'|trans({}, 'messages') }}\",
                daysOfWeek: moment.weekdaysMin(),
                monthNames: moment.monthsShort(),
                firstDay: moment.localeData().firstDayOfWeek()
            }
        }).on('cancel.daterangepicker', function (ev, picker) {
            \$(this).val('');
            \$(this).change();
          })
          .on('apply.daterangepicker', function (ev, picker) {
                \$(this).val(picker.startDate.format(\"{{ 'sg.datatables.daterange.format'|trans({}, 'messages') }}\") + ' - ' + picker.endDate.format(\"{{ 'sg.datatables.daterange.format'|trans({}, 'messages') }}\"));
                \$(this).change();
          });
    </script>
    {{ cancel_button_js }}
{% endblock %}
", "SgDatatablesBundle:filter:daterange.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/filter/daterange.html.twig");
    }
}
