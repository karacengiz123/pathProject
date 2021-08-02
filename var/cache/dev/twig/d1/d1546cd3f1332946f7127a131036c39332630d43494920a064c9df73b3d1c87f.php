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

/* SgDatatablesBundle:filter:select.html.twig */
class __TwigTemplate_de56e20f3541d7e70e61f1d51cc1fb02c24f42f7cff3fe4a9277d5335c309a84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:select.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 10), "multiple", [], "any", false, false, false, 10) === true)) {
            // line 11
            echo "        multiple=\"multiple\"
    ";
        }
        $context["filter_select_multiple"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        ob_start();
        // line 16
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-filter-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 16), "html", null, true);
        $context["filter_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        ob_start();
        // line 20
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
        echo "\"";
        $context["filter_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        ob_start();
        // line 24
        echo "    class=\"sg-datatables-individual-filtering";
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 24), "classes", [], "any", false, false, false, 24) === null)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 24), "classes", [], "any", false, false, false, 24), "html", null, true);
        }
        echo "\"
";
        $context["filter_classes"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
";
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "width", [], "any", false, false, false, 28) === null)) {
            echo "style=\"width:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "width", [], "any", false, false, false, 28), "html", null, true);
            echo ";\"";
        }
        $context["filter_width"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
";
        // line 31
        ob_start();
        // line 32
        echo "    data-search-column-index=\"";
        echo twig_escape_filter($this->env, ($context["search_column_index"] ?? null), "html", null, true);
        echo "\"
";
        $context["filter_search_column_index"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        ob_start();
        // line 36
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 36) === null)) {
            echo "name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
            echo "\"";
        }
        $context["filter_column_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 40), "selectOptions", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 41
            echo "        ";
            if (( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 41), "initialSearch", [], "any", false, false, false, 41) === null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 41), "initialSearch", [], "any", false, false, false, 41) === $context["key"]))) {
                // line 42
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
        ";
            } else {
                // line 44
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
        ";
            }
            // line 46
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["filter_select_select_options"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        ob_start();
        // line 50
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "-filter-cancel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "index", [], "any", false, false, false, 50), "html", null, true);
        $context["cancel_button_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        ob_start();
        // line 54
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 54), "cancelButton", [], "any", false, false, false, 54) === true)) {
            // line 55
            echo "        <button type=\"button\"
                id=\"";
            // line 56
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? null), "html", null, true);
            echo "\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    ";
        }
        $context["cancel_button_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
";
        // line 62
        ob_start();
        // line 63
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 63), "cancelButton", [], "any", false, false, false, 63) === true)) {
            // line 64
            echo "        <script type=\"text/javascript\">
            \$(\"#";
            // line 65
            echo twig_escape_filter($this->env, ($context["cancel_button_id_selector"] ?? null), "html", null, true);
            echo "\").click(function() {
                if ('' != \$(\"#";
            // line 66
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
            echo "\").val()) {
                    \$(\"#";
            // line 67
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
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('html', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "html"));

        // line 77
        echo "    <select
            ";
        // line 78
        echo twig_escape_filter($this->env, ($context["filter_select_multiple"] ?? null), "html", null, true);
        echo "     ";
        // line 79
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_selector"] ?? null), "html", null, true);
        echo "            ";
        // line 80
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_classes"] ?? null), "html", null, true);
        echo "             ";
        // line 81
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_width"] ?? null), "html", null, true);
        echo "               ";
        // line 82
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_search_column_index"] ?? null), "html", null, true);
        echo " ";
        // line 83
        echo "            ";
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? null), "html", null, true);
        echo "         ";
        // line 84
        echo "    >
        ";
        // line 85
        echo twig_escape_filter($this->env, ($context["filter_select_select_options"] ?? null), "html", null, true);
        echo "
    </select>
    ";
        // line 87
        echo twig_escape_filter($this->env, ($context["cancel_button_html"] ?? null), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 91
        echo "    ";
        echo twig_escape_filter($this->env, ($context["cancel_button_js"] ?? null), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:filter:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 91,  286 => 90,  274 => 87,  269 => 85,  266 => 84,  262 => 83,  258 => 82,  254 => 81,  250 => 80,  246 => 79,  243 => 78,  240 => 77,  230 => 76,  220 => 90,  217 => 89,  215 => 76,  212 => 75,  201 => 67,  197 => 66,  193 => 65,  190 => 64,  187 => 63,  185 => 62,  182 => 61,  174 => 56,  171 => 55,  168 => 54,  166 => 53,  158 => 50,  156 => 49,  149 => 46,  141 => 44,  133 => 42,  130 => 41,  125 => 40,  123 => 39,  120 => 38,  112 => 36,  110 => 35,  107 => 34,  101 => 32,  99 => 31,  96 => 30,  88 => 28,  86 => 27,  83 => 26,  74 => 24,  72 => 23,  67 => 20,  65 => 19,  57 => 16,  55 => 15,  50 => 11,  47 => 10,  45 => 9,);
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
{% set filter_select_multiple %}
    {% if column.filter.multiple is same as(true) %}
        multiple=\"multiple\"
    {% endif %}
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

{% set filter_search_column_index %}
    data-search-column-index=\"{{ search_column_index }}\"
{% endset %}

{% set filter_column_name %}
    {% if column.name is not same as(null) %}name=\"{{ column.name }}\"{% endif %}
{% endset %}

{% set filter_select_select_options %}
    {% for key, name in column.filter.selectOptions %}
        {% if column.filter.initialSearch is not same as(null) and column.filter.initialSearch is same as(key) %}
            <option value=\"{{ key }}\" selected=\"selected\">{{ name }}</option>
        {% else %}
            <option value=\"{{ key }}\">{{ name }}</option>
        {% endif %}
    {% endfor %}
{% endset %}

{%- set cancel_button_id_selector -%}
    sg-datatables-{{ datatable_name }}-{{ position }}-filter-cancel-{{ column.index }}
{%- endset -%}

{% set cancel_button_html %}
    {% if column.filter.cancelButton is same as(true) %}
        <button type=\"button\"
                id=\"{{ cancel_button_id_selector }}\"
                class=\"btn btn-default btn-xs\"
        >&times;</button>
    {% endif %}
{% endset %}

{% set cancel_button_js %}
    {% if column.filter.cancelButton is same as(true) %}
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
    <select
            {{ filter_select_multiple }}     {# multiple=\"multiple\" #}
            {{ filter_selector }}            {# id=\"\" #}
            {{ filter_classes }}             {# class=\"\" #}
            {{ filter_width }}               {# style = \"width:\" #}
            {{ filter_search_column_index }} {# data-search-column-index = \"\" #}
            {{ filter_column_name }}         {# name = \"\" #}
    >
        {{ filter_select_select_options }}
    </select>
    {{ cancel_button_html }}
{% endblock %}

{% block javascript %}
    {{ cancel_button_js }}
{% endblock %}
", "SgDatatablesBundle:filter:select.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/filter/select.html.twig");
    }
}
