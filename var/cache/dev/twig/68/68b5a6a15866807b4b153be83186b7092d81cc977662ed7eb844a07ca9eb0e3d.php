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

/* @KnpPaginator/Pagination/materialize_pagination.html.twig */
class __TwigTemplate_d228a8f10d9d5574d000abcdb1f8f093288f0ee8f99b7dfe0f5628cf35caf707 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/materialize_pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/materialize_pagination.html.twig"));

        // line 13
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 14
            echo "    <ul class=\"pagination\">
        ";
            // line 15
            if (((isset($context["first"]) || array_key_exists("first", $context)) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 16
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            } else {
                // line 22
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 30
                echo "            <li class=\"waves-effect\">
                <a rel=\"prev\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            } else {
                // line 36
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 45
                    echo "                <li class=\"waves-effect\">
                    <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 49
                    echo "                <li class=\"active\">
                    <a href=\"#!\">";
                    // line 50
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
        ";
            // line 55
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 56
                echo "            <li class=\"waves-effect\">
                <a rel=\"next\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            } else {
                // line 62
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            }
            // line 68
            echo "
        ";
            // line 69
            if (((isset($context["last"]) || array_key_exists("last", $context)) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 70
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            } else {
                // line 76
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            }
            // line 82
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/materialize_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 82,  169 => 76,  161 => 71,  158 => 70,  156 => 69,  153 => 68,  145 => 62,  137 => 57,  134 => 56,  132 => 55,  129 => 54,  123 => 53,  117 => 50,  114 => 49,  106 => 46,  103 => 45,  100 => 44,  96 => 43,  93 => 42,  85 => 36,  77 => 31,  74 => 30,  72 => 29,  69 => 28,  61 => 22,  53 => 17,  50 => 16,  48 => 15,  45 => 14,  43 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Materialize pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Materialize CSS
 * https://materializecss.com/pagination.html
 *
 * @author Leonardo Bressan Motyczka <leomoty@gmail.com>
 */
#}
{% if pageCount > 1 %}
    <ul class=\"pagination\">
        {% if first is defined and current != first %}
            <li class=\"waves-effect\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        {% endif %}

        {% if previous is defined %}
            <li class=\"waves-effect\">
                <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li class=\"waves-effect\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                </li>
            {% else %}
                <li class=\"active\">
                    <a href=\"#!\">{{ page }}</a>
                </li>
            {% endif %}
        {% endfor %}

        {% if next is defined %}
            <li class=\"waves-effect\">
                <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        {% endif %}

        {% if last is defined and current != last %}
            <li class=\"waves-effect\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}
", "@KnpPaginator/Pagination/materialize_pagination.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/knplabs/knp-paginator-bundle/templates/Pagination/materialize_pagination.html.twig");
    }
}
