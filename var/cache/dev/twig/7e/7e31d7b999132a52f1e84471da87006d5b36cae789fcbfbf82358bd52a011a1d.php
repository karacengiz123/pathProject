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

/* SgDatatablesBundle:datatable:ajax.html.twig */
class __TwigTemplate_413a888f3e68c15dabd8724492821fb7bf1979c909e2f218edccf269d270f104 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:ajax.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    ";
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 10), "url", [], "any", false, false, false, 10) === null)) {
            // line 11
            echo "        \"url\": \"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 11), "url", [], "any", false, false, false, 11);
            echo "\",
    ";
        }
        // line 13
        echo "    \"method\": \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 13), "method", [], "any", false, false, false, 13), "html", null, true);
        echo "\",
    ";
        // line 14
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 14), "data", [], "any", false, false, false, 14) === null)) {
            // line 15
            echo "        \"data\": ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 15), "data", [], "any", false, false, false, 15);
            echo ",
    ";
        }
        $context["ajax_vars"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        echo "
\"serverSide\": true,
";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 20), "pipeline", [], "any", false, false, false, 20) > 0)) {
            // line 21
            echo "    \"ajax\": \$.fn.dataTable.pipeline({
        ";
            // line 22
            echo twig_escape_filter($this->env, ($context["ajax_vars"] ?? null), "html", null, true);
            echo "
        \"pages\": ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "ajax", [], "any", false, false, false, 23), "pipeline", [], "any", false, false, false, 23), "html", null, true);
            echo "
    }),
";
        } else {
            // line 26
            echo "    \"ajax\": {
        ";
            // line 27
            echo twig_escape_filter($this->env, ($context["ajax_vars"] ?? null), "html", null, true);
            echo "
    },
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  87 => 26,  81 => 23,  77 => 22,  74 => 21,  72 => 20,  68 => 18,  61 => 15,  59 => 14,  54 => 13,  48 => 11,  45 => 10,  43 => 9,);
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
{% set ajax_vars %}
    {% if sg_datatables_view.ajax.url is not same as(null) %}
        \"url\": \"{{ sg_datatables_view.ajax.url|raw }}\",
    {% endif %}
    \"method\": \"{{ sg_datatables_view.ajax.method }}\",
    {% if sg_datatables_view.ajax.data is not same as(null) %}
        \"data\": {{ sg_datatables_view.ajax.data|raw }},
    {% endif %}
{% endset %}

\"serverSide\": true,
{% if sg_datatables_view.ajax.pipeline > 0 %}
    \"ajax\": \$.fn.dataTable.pipeline({
        {{ ajax_vars }}
        \"pages\": {{ sg_datatables_view.ajax.pipeline }}
    }),
{% else %}
    \"ajax\": {
        {{ ajax_vars }}
    },
{% endif %}
", "SgDatatablesBundle:datatable:ajax.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/ajax.html.twig");
    }
}
