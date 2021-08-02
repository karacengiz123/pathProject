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

/* SgDatatablesBundle:render:boolean.html.twig */
class __TwigTemplate_dda41ff99810fde6ef03e357230d5a90b61033ace60bc10a60d831fdecb96451 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:boolean.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:boolean.html.twig"));

        // line 9
        if ((isset($context["column_class_editable_selector"]) || array_key_exists("column_class_editable_selector", $context))) {
            // line 10
            echo "    ";
            if ((($context["data"] ?? null) === true)) {
                // line 11
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ((($context["true_icon"] ?? null) . " ") . ($context["column_class_editable_selector"] ?? null)), "html", null, true);
                echo "\" data-pk=\"";
                echo twig_escape_filter($this->env, ($context["pk"] ?? null), "html", null, true);
                echo "\" ";
                if ( !(($context["path"] ?? null) === null)) {
                    echo "data-path=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ($context["true_label"] ?? null), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 12
($context["data"] ?? null) === false)) {
                // line 13
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ((($context["false_icon"] ?? null) . " ") . ($context["column_class_editable_selector"] ?? null)), "html", null, true);
                echo "\" data-pk=\"";
                echo twig_escape_filter($this->env, ($context["pk"] ?? null), "html", null, true);
                echo "\" ";
                if ( !(($context["path"] ?? null) === null)) {
                    echo "data-path=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ($context["false_label"] ?? null), "html", null, true);
                echo "</span>
    ";
            } elseif ((            // line 14
($context["data"] ?? null) === null)) {
                // line 15
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ($context["column_class_editable_selector"] ?? null), "html", null, true);
                echo "\" data-pk=\"";
                echo twig_escape_filter($this->env, ($context["pk"] ?? null), "html", null, true);
                echo "\" ";
                if ( !(($context["path"] ?? null) === null)) {
                    echo "data-path=\"";
                    echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 16
                if ( !(($context["default_content"] ?? null) === null)) {
                    // line 17
                    echo "                ";
                    echo twig_escape_filter($this->env, ($context["default_content"] ?? null), "html", null, true);
                    echo "
            ";
                } else {
                    // line 19
                    echo "                ";
                    echo twig_escape_filter($this->env, ($context["empty_text"] ?? null), "html", null, true);
                    echo "
            ";
                }
                // line 21
                echo "        </span>
    ";
            }
        } else {
            // line 24
            echo "    ";
            if ((($context["data"] ?? null) === true)) {
                // line 25
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ($context["true_icon"] ?? null), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, ($context["true_label"] ?? null), "html", null, true);
                echo "
    ";
            } elseif ((            // line 26
($context["data"] ?? null) === false)) {
                // line 27
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, ($context["false_icon"] ?? null), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, ($context["false_label"] ?? null), "html", null, true);
                echo "
    ";
            } elseif ((            // line 28
($context["data"] ?? null) === null)) {
                // line 29
                echo "        ";
                if ( !(($context["default_content"] ?? null) === null)) {
                    // line 30
                    echo "            ";
                    echo twig_escape_filter($this->env, ($context["default_content"] ?? null), "html", null, true);
                    echo "
        ";
                } else {
                    // line 32
                    echo "            ";
                    echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
                    echo "
        ";
                }
                // line 34
                echo "    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:render:boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 34,  144 => 32,  138 => 30,  135 => 29,  133 => 28,  126 => 27,  124 => 26,  117 => 25,  114 => 24,  109 => 21,  103 => 19,  97 => 17,  95 => 16,  82 => 15,  80 => 14,  65 => 13,  63 => 12,  48 => 11,  45 => 10,  43 => 9,);
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
{% if column_class_editable_selector is defined %}
    {% if data is same as(true) %}
        <span class=\"{{ true_icon ~ ' ' ~ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}>{{ true_label }}</span>
    {% elseif data is same as(false) %}
        <span class=\"{{ false_icon ~ ' ' ~ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}>{{ false_label }}</span>
    {% elseif data is same as(null) %}
        <span class=\"{{ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}>
            {% if default_content is not same as(null) %}
                {{ default_content }}
            {% else %}
                {{ empty_text }}
            {% endif %}
        </span>
    {% endif %}
{% else %}
    {% if data is same as(true) %}
        <span class=\"{{ true_icon }}\"></span> {{ true_label }}
    {% elseif data is same as(false) %}
        <span class=\"{{ false_icon }}\"></span> {{ false_label }}
    {% elseif data is same as(null) %}
        {% if default_content is not same as(null) %}
            {{ default_content }}
        {% else %}
            {{ data }}
        {% endif %}
    {% endif %}
{% endif %}
", "SgDatatablesBundle:render:boolean.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/render/boolean.html.twig");
    }
}
