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

/* SgDatatablesBundle:datatable:language.html.twig */
class __TwigTemplate_753df027ee5eb39b7346b1edcebe78fcda72644826fc63d529cf88f8ee4ac426 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:language.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:language.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "language", [], "any", false, false, false, 1), "language", [], "any", false, false, false, 1) === null)) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "language", [], "any", false, false, false, 2), "cdnLanguageByLocale", [], "any", false, false, false, 2) === true)) {
                // line 3
                echo "        \"language\": {
            \"url\": \"";
                // line 4
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "language", [], "any", false, false, false, 4), "languageCDNFile", [], "any", false, false, false, 4)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "locale", [], "any", false, false, false, 4), 0, 2)] ?? null) : null), "datatables_cdn"), "html", null, true);
                echo "\"
        }
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "language", [], "any", false, false, false, 8), "languageByLocale", [], "any", false, false, false, 8) === true)) {
                // line 9
                echo "        \"language\":
            ";
                // line 10
                $this->loadTemplate((("@SgDatatables/i18n/" . twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10), 0, 2)) . ".json.twig"), "SgDatatablesBundle:datatable:language.html.twig", 10)->display($context);
                // line 11
                echo "    ";
            }
        } else {
            // line 13
            echo "    \"language\":
        ";
            // line 14
            $this->loadTemplate((("@SgDatatables/i18n/" . twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "language", [], "any", false, false, false, 14), "language", [], "any", false, false, false, 14), 0, 2)) . ".json.twig"), "SgDatatablesBundle:datatable:language.html.twig", 14)->display($context);
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  71 => 13,  67 => 11,  65 => 10,  62 => 9,  60 => 8,  57 => 7,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if sg_datatables_view.language.language is same as(null) %}
    {% if sg_datatables_view.language.cdnLanguageByLocale is same as(true) %}
        \"language\": {
            \"url\": \"{{ asset(sg_datatables_view.language.languageCDNFile[app.request.locale|slice(0, 2)], 'datatables_cdn') }}\"
        }
    {% endif %}

    {% if sg_datatables_view.language.languageByLocale is same as(true) %}
        \"language\":
            {% include '@SgDatatables/i18n/' ~ app.request.locale|slice(0, 2) ~ '.json.twig' %}
    {% endif %}
{% else %}
    \"language\":
        {% include '@SgDatatables/i18n/' ~ sg_datatables_view.language.language|slice(0, 2) ~ '.json.twig' %}
{% endif %}
", "SgDatatablesBundle:datatable:language.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/language.html.twig");
    }
}
