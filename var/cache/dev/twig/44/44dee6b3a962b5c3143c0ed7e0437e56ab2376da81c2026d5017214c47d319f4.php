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

/* SgDatatablesBundle:column:column_post_create_dt.js.twig */
class __TwigTemplate_55dd3eed4dc3838365510df5e165fc9ee09fb655bdcfd337329d5df88300db43 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column_post_create_dt.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column_post_create_dt.js.twig"));

        // line 9
        $context["token"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("sg-datatables-editable");
        // line 10
        echo "
\$(\".";
        // line 11
        echo ($context["column_class_editable_selector"] ?? null);
        echo "\").editable({
    url: '";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "url", [], "any", false, false, false, 12));
        echo "',
    params: function (params) {
        params.entityClassName = '";
        // line 14
        echo twig_escape_filter($this->env, ($context["entity_class_name"] ?? null), "js", null, true);
        echo "';
        params.token = '";
        // line 15
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
        echo "';
        params.originalTypeOfField = '";
        // line 16
        echo twig_escape_filter($this->env, ($context["original_type_of_field"] ?? null), "js", null, true);
        echo "';
        params.path = \$(this).editable().data('path');

        ";
        // line 19
        if ( !(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "params", [], "any", false, false, false, 19) === null)) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "params", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["key"] => $context["param"]) {
                // line 21
                echo "                params.";
                echo twig_escape_filter($this->env, $context["key"], "js", null, true);
                echo " = '";
                echo twig_escape_filter($this->env, $context["param"], "js", null, true);
                echo "';
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['param'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        return params;
    },
    ";
        // line 27
        if ( !(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "defaultValue", [], "any", false, false, false, 27) === null)) {
            // line 28
            echo "    defaultValue: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "defaultValue", [], "any", false, false, false, 28), "js", null, true);
            echo "',
    ";
        }
        // line 30
        echo "    emptyclass: '";
        echo twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "emptyClass", [], "any", false, false, false, 30);
        echo "',
    emptytext: '";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "emptyText", [], "any", false, false, false, 31);
        echo "',
    highlight: '";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "highlight", [], "any", false, false, false, 32);
        echo "',
    mode: '";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "mode", [], "any", false, false, false, 33), "js", null, true);
        echo "',
    ";
        // line 34
        if ( !(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "name", [], "any", false, false, false, 34) === null)) {
            // line 35
            echo "    name: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "name", [], "any", false, false, false, 35), "js", null, true);
            echo "',
    ";
        } else {
            // line 37
            echo "    name: '";
            echo twig_escape_filter($this->env, ($context["column_dql"] ?? null), "js", null, true);
            echo "',
    ";
        }
        // line 39
        echo "    type: '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "type", [], "any", false, false, false, 39), "js", null, true);
        echo "',
    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "source", [], "any", true, true, false, 40)) {
            // line 41
            echo "    source: ";
            echo twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "source", [], "any", false, false, false, 41);
            echo ",
    ";
        }
        // line 43
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "clear", [], "any", true, true, false, 43)) {
            // line 44
            echo "    clear: ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "clear", [], "any", false, false, false, 44)), "js", null, true);
            echo ",
    ";
        }
        // line 46
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "placeholder", [], "any", true, true, false, 46) &&  !(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "placeholder", [], "any", false, false, false, 46) === null))) {
            // line 47
            echo "    placeholder: '";
            echo twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "placeholder", [], "any", false, false, false, 47);
            echo "',
    ";
        }
        // line 49
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "rows", [], "any", true, true, false, 49)) {
            // line 50
            echo "    rows: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "rows", [], "any", false, false, false, 50), "js", null, true);
            echo ",
    ";
        }
        // line 52
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "format", [], "any", true, true, false, 52)) {
            // line 53
            echo "    format: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "format", [], "any", false, false, false, 53), "js", null, true);
            echo "',
    ";
        }
        // line 55
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "viewFormat", [], "any", true, true, false, 55) &&  !(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "viewFormat", [], "any", false, false, false, 55) === null))) {
            // line 56
            echo "    viewformat: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "viewFormat", [], "any", false, false, false, 56), "js", null, true);
            echo "',
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (("combodate" == twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "type", [], "any", false, false, false, 59))) {
            // line 60
            echo "        combodate: {
            minYear: ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "minYear", [], "any", false, false, false, 61), "js", null, true);
            echo ",
            maxYear: ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "maxYear", [], "any", false, false, false, 62), "js", null, true);
            echo ",
            minuteStep: ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "minuteStep", [], "any", false, false, false, 63), "js", null, true);
            echo ",
            secondStep: ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "secondStep", [], "any", false, false, false, 64), "js", null, true);
            echo ",
            smartDays: ";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, ($context["editable_options"] ?? null), "smartDays", [], "any", false, false, false, 65)), "js", null, true);
            echo ",
        },
    ";
        }
        // line 68
        echo "
    success: function() {
        if (pipeline > 0) {
            oTable.clearPipeline().draw();
        } else {
            oTable.draw();
        }
    }
});
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:column:column_post_create_dt.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 68,  218 => 65,  214 => 64,  210 => 63,  206 => 62,  202 => 61,  199 => 60,  197 => 59,  194 => 58,  188 => 56,  185 => 55,  179 => 53,  176 => 52,  170 => 50,  167 => 49,  161 => 47,  158 => 46,  152 => 44,  149 => 43,  143 => 41,  141 => 40,  136 => 39,  130 => 37,  124 => 35,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  105 => 30,  99 => 28,  97 => 27,  92 => 24,  89 => 23,  78 => 21,  73 => 20,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  52 => 12,  48 => 11,  45 => 10,  43 => 9,);
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
{% set token = csrf_token('sg-datatables-editable') %}

\$(\".{{ column_class_editable_selector|raw }}\").editable({
    url: '{{ path(editable_options.url)|raw }}',
    params: function (params) {
        params.entityClassName = '{{ entity_class_name }}';
        params.token = '{{ token }}';
        params.originalTypeOfField = '{{ original_type_of_field }}';
        params.path = \$(this).editable().data('path');

        {% if editable_options.params is not same as(null) %}
            {% for key, param in editable_options.params %}
                params.{{ key }} = '{{ param }}';
            {% endfor %}
        {% endif %}

        return params;
    },
    {% if editable_options.defaultValue is not same as(null) %}
    defaultValue: '{{ editable_options.defaultValue }}',
    {% endif %}
    emptyclass: '{{ editable_options.emptyClass|raw }}',
    emptytext: '{{ editable_options.emptyText|raw }}',
    highlight: '{{ editable_options.highlight|raw }}',
    mode: '{{ editable_options.mode }}',
    {% if editable_options.name is not same as(null) %}
    name: '{{ editable_options.name }}',
    {% else %}
    name: '{{ column_dql }}',
    {% endif %}
    type: '{{ editable_options.type }}',
    {% if editable_options.source is defined %}
    source: {{ editable_options.source|raw }},
    {% endif %}
    {% if editable_options.clear is defined %}
    clear: {{ editable_options.clear|sg_datatables_bool_var }},
    {% endif %}
    {% if editable_options.placeholder is defined and editable_options.placeholder is not same as(null) %}
    placeholder: '{{ editable_options.placeholder|raw }}',
    {% endif %}
    {% if editable_options.rows is defined %}
    rows: {{ editable_options.rows }},
    {% endif %}
    {% if editable_options.format is defined %}
    format: '{{ editable_options.format }}',
    {% endif %}
    {% if editable_options.viewFormat is defined and editable_options.viewFormat is not same as(null) %}
    viewformat: '{{ editable_options.viewFormat }}',
    {% endif %}

    {% if 'combodate' == editable_options.type %}
        combodate: {
            minYear: {{ editable_options.minYear }},
            maxYear: {{ editable_options.maxYear }},
            minuteStep: {{ editable_options.minuteStep }},
            secondStep: {{ editable_options.secondStep }},
            smartDays: {{ editable_options.smartDays|sg_datatables_bool_var }},
        },
    {% endif %}

    success: function() {
        if (pipeline > 0) {
            oTable.clearPipeline().draw();
        } else {
            oTable.draw();
        }
    }
});
", "SgDatatablesBundle:column:column_post_create_dt.js.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/column/column_post_create_dt.js.twig");
    }
}
