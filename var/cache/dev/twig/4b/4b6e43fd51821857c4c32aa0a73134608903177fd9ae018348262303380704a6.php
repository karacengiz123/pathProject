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

/* SgDatatablesBundle:render:datetime.html.twig */
class __TwigTemplate_8116db95b786c1c632218e4f7ca3419374d4eb4c7a89dcdbc9a651ba58257ed7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:datetime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:datetime.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "-datetime-";
        echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
        $context["datetime_id_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        ob_start();
        // line 14
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["datetime_id_selector"] ?? null), "html", null, true);
        echo "\"";
        $context["datetime_selector"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        if ((isset($context["column_class_editable_selector"]) || array_key_exists("column_class_editable_selector", $context))) {
            // line 18
            echo "    <div ";
            echo twig_escape_filter($this->env, ($context["datetime_selector"] ?? null), "html", null, true);
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["column_class_editable_selector"] ?? null), "html", null, true);
            echo "\" data-pk=\"";
            echo twig_escape_filter($this->env, ($context["pk"] ?? null), "html", null, true);
            echo "\" ";
            if ( !(($context["path"] ?? null) === null)) {
                echo "data-path=\"";
                echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
                echo "\"";
            }
            echo "></div>
";
        } else {
            // line 20
            echo "    <div ";
            echo twig_escape_filter($this->env, ($context["datetime_selector"] ?? null), "html", null, true);
            echo ">
        ";
            // line 21
            if (((($context["data"] ?? null) === null) &&  !(($context["default_content"] ?? null) === null))) {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, ($context["default_content"] ?? null), "html", null, true);
                echo "
        ";
            }
            // line 24
            echo "    </div>
";
        }
        // line 26
        echo "
";
        // line 27
        if ( !(($context["data"] ?? null) === null)) {
            // line 28
            echo "    <script type=\"text/javascript\">
        \$(function() {
            moment.locale(\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 30), "locale", [], "any", false, false, false, 30), "html", null, true);
            echo "\");

            ";
            // line 32
            if ((($context["timeago"] ?? null) === false)) {
                // line 33
                echo "                \$(\"#";
                echo twig_escape_filter($this->env, ($context["datetime_id_selector"] ?? null), "html", null, true);
                echo "\").html(moment.unix(";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["data"] ?? null), "U"), "html", null, true);
                echo ").format(\"";
                echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
                echo "\"));
            ";
            } else {
                // line 35
                echo "                \$(\"#";
                echo twig_escape_filter($this->env, ($context["datetime_id_selector"] ?? null), "html", null, true);
                echo "\").html(moment.unix(";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["data"] ?? null), "U"), "html", null, true);
                echo ").fromNow());
            ";
            }
            // line 37
            echo "        });
    </script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:render:datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  119 => 35,  109 => 33,  107 => 32,  102 => 30,  98 => 28,  96 => 27,  93 => 26,  89 => 24,  83 => 22,  81 => 21,  76 => 20,  60 => 18,  58 => 17,  53 => 14,  51 => 13,  45 => 10,  43 => 9,);
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
{%- set datetime_id_selector -%}
    sg-datatables-{{ datatable_name }}-datetime-{{ row_id }}
{%- endset -%}

{%- set datetime_selector -%}
    id=\"{{ datetime_id_selector }}\"
{%- endset -%}

{% if column_class_editable_selector is defined %}
    <div {{ datetime_selector }} class=\"{{ column_class_editable_selector }}\" data-pk=\"{{ pk }}\" {% if path is not same as(null) %}data-path=\"{{ path }}\"{% endif %}></div>
{% else %}
    <div {{ datetime_selector }}>
        {% if data is same as(null) and default_content is not same as(null) %}
            {{ default_content }}
        {% endif %}
    </div>
{% endif %}

{% if data is not same as(null) %}
    <script type=\"text/javascript\">
        \$(function() {
            moment.locale(\"{{ app.request.locale }}\");

            {% if timeago is same as(false) %}
                \$(\"#{{ datetime_id_selector }}\").html(moment.unix({{ data|date('U') }}).format(\"{{ date_format }}\"));
            {% else %}
                \$(\"#{{ datetime_id_selector }}\").html(moment.unix({{ data|date('U') }}).fromNow());
            {% endif %}
        });
    </script>
{% endif %}
", "SgDatatablesBundle:render:datetime.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/render/datetime.html.twig");
    }
}
