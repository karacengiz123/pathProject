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

/* SgDatatablesBundle:filter:select2.html.twig */
class __TwigTemplate_caabb9531853cc189bea6ec1a4462b94b445b014519c4e26ebd18e7b7ef52e75 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "@SgDatatables/filter/select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:select2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:select2.html.twig"));

        $this->parent = $this->loadTemplate("@SgDatatables/filter/select.html.twig", "SgDatatablesBundle:filter:select2.html.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(\"#";
        // line 15
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
        echo "\").select2({
            ";
        // line 16
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 16), "placeholder", [], "any", false, false, false, 16) === null)) {
            // line 17
            echo "                placeholder: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 17), "placeholder", [], "any", false, false, false, 17), "html", null, true);
            echo "\",
            ";
        }
        // line 19
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 19), "allowClear", [], "any", false, false, false, 19) === null)) {
            // line 20
            echo "                allowClear: ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 20), "allowClear", [], "any", false, false, false, 20)), "html", null, true);
            echo ",
            ";
        }
        // line 22
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 22), "tags", [], "any", false, false, false, 22) === null)) {
            // line 23
            echo "                tags: ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 23), "tags", [], "any", false, false, false, 23)), "html", null, true);
            echo ",
            ";
        }
        // line 25
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 25), "language", [], "any", false, false, false, 25) === null)) {
            // line 26
            echo "                language: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 26), "language", [], "any", false, false, false, 26), "html", null, true);
            echo "\",
            ";
        } else {
            // line 28
            echo "                language: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "locale", [], "any", false, false, false, 28), "html", null, true);
            echo "\",
            ";
        }
        // line 30
        echo "            dropdownAutoWidth : true,
            ";
        // line 31
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 31), "url", [], "any", false, false, false, 31) === null)) {
            // line 32
            echo "                ajax: {
                    url: \"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 33), "url", [], "any", false, false, false, 33));
            echo "\",
                    dataType: 'json',
                    delay: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 35), "delay", [], "any", false, false, false, 35), "html", null, true);
            echo ",
                    cache: ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 36), "cache", [], "any", false, false, false, 36)), "html", null, true);
            echo ",
                    data: function (params) {
                        return {
                            q: params.term,
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        var resultArray = [];
                        for (var id in data) {
                            resultArray.push({
                                id : data[id],
                                text : data[id]
                            });
                        }

                        return {
                            results: resultArray,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    }
                },
            ";
        }
        // line 63
        echo "        });
        ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filter", [], "any", false, false, false, 64), "searchColumn", [], "any", false, false, false, 64)) {
            // line 65
            echo "            \$(\"#";
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
            echo "\").val(\$('#";
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? null), "html", null, true);
            echo " option:first-child').val()).trigger('change');
        ";
        }
        // line 67
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:filter:select2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 67,  172 => 65,  170 => 64,  167 => 63,  137 => 36,  133 => 35,  128 => 33,  125 => 32,  123 => 31,  120 => 30,  114 => 28,  108 => 26,  105 => 25,  99 => 23,  96 => 22,  90 => 20,  87 => 19,  81 => 17,  79 => 16,  75 => 15,  68 => 12,  58 => 11,  35 => 9,);
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
{% extends '@SgDatatables/filter/select.html.twig' %}

{% block javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(\"#{{ filter_id_selector }}\").select2({
            {% if column.filter.placeholder is not same as(null) %}
                placeholder: \"{{ column.filter.placeholder }}\",
            {% endif %}
            {% if column.filter.allowClear is not same as(null) %}
                allowClear: {{ column.filter.allowClear|sg_datatables_bool_var }},
            {% endif %}
            {% if column.filter.tags is not same as(null) %}
                tags: {{ column.filter.tags|sg_datatables_bool_var }},
            {% endif %}
            {% if column.filter.language is not same as(null) %}
                language: \"{{ column.filter.language }}\",
            {% else %}
                language: \"{{ app.request.locale }}\",
            {% endif %}
            dropdownAutoWidth : true,
            {% if column.filter.url is not same as(null) %}
                ajax: {
                    url: \"{{ path(column.filter.url) }}\",
                    dataType: 'json',
                    delay: {{ column.filter.delay }},
                    cache: {{ column.filter.cache|sg_datatables_bool_var }},
                    data: function (params) {
                        return {
                            q: params.term,
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        var resultArray = [];
                        for (var id in data) {
                            resultArray.push({
                                id : data[id],
                                text : data[id]
                            });
                        }

                        return {
                            results: resultArray,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    }
                },
            {% endif %}
        });
        {% if column.filter.searchColumn %}
            \$(\"#{{ filter_id_selector }}\").val(\$('#{{ filter_id_selector }} option:first-child').val()).trigger('change');
        {% endif %}
    </script>
{% endblock %}
", "SgDatatablesBundle:filter:select2.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/filter/select2.html.twig");
    }
}
