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

/* SgDatatablesBundle:column:column.html.twig */
class __TwigTemplate_4402b8b7e23846e7a68e12c3f119f754ef1b053e3155fb7187b2d6285fc87b92 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'common' => [$this, 'block_common'],
            'title' => [$this, 'block_title'],
            'data' => [$this, 'block_data'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column.html.twig"));

        // line 9
        echo "{
    ";
        // line 10
        $this->displayBlock('common', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('data', $context, $blocks);
        // line 64
        echo "},
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_common($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "common"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "common"));

        // line 11
        echo "        ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "cellType", [], "any", false, false, false, 11) === null)) {
            // line 12
            echo "            \"cellType\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "cellType", [], "any", false, false, false, 12), "html", null, true);
            echo "\",
        ";
        }
        // line 14
        echo "        ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "contentPadding", [], "any", false, false, false, 14) === null)) {
            // line 15
            echo "            \"contentPadding\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "contentPadding", [], "any", false, false, false, 15), "html", null, true);
            echo "\",
        ";
        }
        // line 17
        echo "        ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "defaultContent", [], "any", false, false, false, 17) === null)) {
            // line 18
            echo "            \"defaultContent\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "defaultContent", [], "any", false, false, false, 18));
            echo ",
        ";
        }
        // line 20
        echo "        ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 20) === null)) {
            // line 21
            echo "            \"name\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "\",
        ";
        }
        // line 23
        echo "        ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "width", [], "any", false, false, false, 23) === null)) {
            // line 24
            echo "            \"width\": \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "width", [], "any", false, false, false, 24), "html", null, true);
            echo "\",
        ";
        }
        // line 26
        echo "        ";
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "searchable", [], "any", false, false, false, 31) === true) || (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "searchable", [], "any", false, false, false, 31) === false))) {
            // line 32
            echo "            \"searchable\": ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "searchable", [], "any", false, false, false, 32)), "html", null, true);
            echo ",
        ";
        }
        // line 34
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "visible", [], "any", false, false, false, 34) === true)) {
            // line 35
            echo "            \"visible\": true,
            ";
            // line 36
            if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "className", [], "any", false, false, false, 36) === null)) {
                // line 37
                echo "                \"className\": \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "className", [], "any", false, false, false, 37), "html", null, true);
                echo "\",
            ";
            }
            // line 39
            echo "        ";
        }
        // line 40
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "visible", [], "any", false, false, false, 40) === false)) {
            // line 41
            echo "            \"visible\": false,
            \"className\": \"never ";
            // line 42
            if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "className", [], "any", false, false, false, 42) === null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "className", [], "any", false, false, false, 42), "html", null, true);
            }
            echo "\",
        ";
        }
        // line 44
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "orderable", [], "any", false, false, false, 44) === true)) {
            // line 45
            echo "            \"orderable\": true,
            ";
            // line 46
            if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "orderSequence", [], "any", false, false, false, 46) === null)) {
                // line 47
                echo "                \"orderSequence\": ";
                echo twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "orderSequence", [], "any", false, false, false, 47);
                echo ",
            ";
            }
            // line 49
            echo "            ";
            if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "orderData", [], "any", false, false, false, 49) === null)) {
                // line 50
                echo "                \"orderData\": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "orderData", [], "any", false, false, false, 50), "html", null, true);
                echo ",
            ";
            }
            // line 52
            echo "        ";
        }
        // line 53
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "orderable", [], "any", false, false, false, 53) === false)) {
            // line 54
            echo "            \"orderable\": false,
        ";
        }
        // line 56
        echo "        ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "responsivePriority", [], "any", false, false, false, 56) === null)) {
            // line 57
            echo "            \"responsivePriority\": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "responsivePriority", [], "any", false, false, false, 57), "html", null, true);
            echo ",
        ";
        }
        // line 59
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 27
        echo "            ";
        if ( !(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "title", [], "any", false, false, false, 27) === null)) {
            // line 28
            echo "                \"title\": ";
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "title", [], "any", false, false, false, 28));
            echo ",
            ";
        }
        // line 30
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "data"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "data"));

        // line 62
        echo "        \"data\": \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", [], "any", false, false, false, 62), "html", null, true);
        echo "\",
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:column:column.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  255 => 62,  245 => 61,  235 => 30,  229 => 28,  226 => 27,  216 => 26,  206 => 59,  200 => 57,  197 => 56,  193 => 54,  190 => 53,  187 => 52,  181 => 50,  178 => 49,  172 => 47,  170 => 46,  167 => 45,  164 => 44,  157 => 42,  154 => 41,  151 => 40,  148 => 39,  142 => 37,  140 => 36,  137 => 35,  134 => 34,  128 => 32,  125 => 31,  122 => 26,  116 => 24,  113 => 23,  107 => 21,  104 => 20,  98 => 18,  95 => 17,  89 => 15,  86 => 14,  80 => 12,  77 => 11,  67 => 10,  56 => 64,  54 => 61,  51 => 60,  49 => 10,  46 => 9,);
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
{
    {% block common %}
        {% if column.cellType is not same as(null) %}
            \"cellType\": \"{{ column.cellType }}\",
        {% endif %}
        {% if column.contentPadding is not same as(null) %}
            \"contentPadding\": \"{{ column.contentPadding }}\",
        {% endif %}
        {% if column.defaultContent is not same as(null) %}
            \"defaultContent\": {{ column.defaultContent|json_encode|raw }},
        {% endif %}
        {% if column.name is not same as(null) %}
            \"name\": \"{{ column.name }}\",
        {% endif %}
        {% if column.width is not same as(null) %}
            \"width\": \"{{ column.width }}\",
        {% endif %}
        {% block title %}
            {% if column.title is not same as(null) %}
                \"title\": {{ column.title|json_encode|raw }},
            {% endif %}
        {% endblock %}
        {% if column.searchable is same as(true) or column.searchable is same as(false) %}
            \"searchable\": {{ column.searchable|sg_datatables_bool_var }},
        {% endif %}
        {% if column.visible is same as(true) %}
            \"visible\": true,
            {% if column.className is not same as(null) %}
                \"className\": \"{{ column.className }}\",
            {% endif %}
        {% endif %}
        {% if column.visible is same as(false) %}
            \"visible\": false,
            \"className\": \"never {% if column.className is not same as(null) %}{{ column.className }}{% endif %}\",
        {% endif %}
        {% if column.orderable is same as(true) %}
            \"orderable\": true,
            {% if column.orderSequence is not same as(null) %}
                \"orderSequence\": {{ column.orderSequence|raw }},
            {% endif %}
            {% if column.orderData is not same as(null) %}
                \"orderData\": {{ column.orderData }},
            {% endif %}
        {% endif %}
        {% if column.orderable is same as(false) %}
            \"orderable\": false,
        {% endif %}
        {% if column.responsivePriority is not same as(null) %}
            \"responsivePriority\": {{ column.responsivePriority }},
        {% endif %}
    {% endblock %}

    {% block data %}
        \"data\": \"{{ column.data }}\",
    {% endblock %}
},
", "SgDatatablesBundle:column:column.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/column/column.html.twig");
    }
}
