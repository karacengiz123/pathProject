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

/* SgDatatablesBundle:datatable:button.html.twig */
class __TwigTemplate_3d20a6bb8230b2a0ceeaf3587526181e949f2acc7bc6b323ba61cdffddcb32cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:button.html.twig"));

        // line 1
        echo "{
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", true, true, false, 2) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", false, false, false, 2) === null))) {
            // line 3
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", false, true, false, 3), "vars", [], "array", true, true, false, 3)) {
                // line 4
                echo "            ";
                $context["vars"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", false, false, false, 4)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["vars"] ?? null) : null);
                // line 5
                echo "        ";
            } else {
                // line 6
                echo "            ";
                $context["vars"] = [];
                // line 7
                echo "        ";
            }
            // line 8
            echo "        action: ";
            $this->loadTemplate((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", false, false, false, 8)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["template"] ?? null) : null), "SgDatatablesBundle:datatable:button.html.twig", 8)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ",
    ";
        }
        // line 10
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "available", [], "any", true, true, false, 10) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "available", [], "any", false, false, false, 10) === null))) {
            // line 11
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "available", [], "any", false, true, false, 11), "vars", [], "array", true, true, false, 11)) {
                // line 12
                echo "            ";
                $context["vars"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "available", [], "any", false, false, false, 12)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["vars"] ?? null) : null);
                // line 13
                echo "        ";
            } else {
                // line 14
                echo "            ";
                $context["vars"] = [];
                // line 15
                echo "        ";
            }
            // line 16
            echo "        available: ";
            $this->loadTemplate((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "available", [], "any", false, false, false, 16)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["template"] ?? null) : null), "SgDatatablesBundle:datatable:button.html.twig", 16)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ",
    ";
        }
        // line 18
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "className", [], "any", true, true, false, 18) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "className", [], "any", false, false, false, 18) === null))) {
            // line 19
            echo "        className: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "className", [], "any", false, false, false, 19), "html", null, true);
            echo "\",
    ";
        }
        // line 21
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "destroy", [], "any", true, true, false, 21) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "destroy", [], "any", false, false, false, 21) === null))) {
            // line 22
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "destroy", [], "any", false, true, false, 22), "vars", [], "array", true, true, false, 22)) {
                // line 23
                echo "            ";
                $context["vars"] = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "destroy", [], "any", false, false, false, 23)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["vars"] ?? null) : null);
                // line 24
                echo "        ";
            } else {
                // line 25
                echo "            ";
                $context["vars"] = [];
                // line 26
                echo "        ";
            }
            // line 27
            echo "        destroy: ";
            $this->loadTemplate((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "destroy", [], "any", false, false, false, 27)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["template"] ?? null) : null), "SgDatatablesBundle:datatable:button.html.twig", 27)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ",
    ";
        }
        // line 29
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "enabled", [], "any", true, true, false, 29) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "enabled", [], "any", false, false, false, 29) === null))) {
            // line 30
            echo "        enabled: ";
            echo twig_escape_filter($this->env, $this->extensions['Sg\DatatablesBundle\Twig\DatatableTwigExtension']->boolVar(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "enabled", [], "any", false, false, false, 30)), "html", null, true);
            echo ",
    ";
        }
        // line 32
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "extend", [], "any", true, true, false, 32) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "extend", [], "any", false, false, false, 32) === null))) {
            // line 33
            echo "        extend: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "extend", [], "any", false, false, false, 33), "html", null, true);
            echo "\",
    ";
        }
        // line 35
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "init", [], "any", true, true, false, 35) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "init", [], "any", false, false, false, 35) === null))) {
            // line 36
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "init", [], "any", false, true, false, 36), "vars", [], "array", true, true, false, 36)) {
                // line 37
                echo "            ";
                $context["vars"] = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "init", [], "any", false, false, false, 37)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["vars"] ?? null) : null);
                // line 38
                echo "        ";
            } else {
                // line 39
                echo "            ";
                $context["vars"] = [];
                // line 40
                echo "        ";
            }
            // line 41
            echo "        init: ";
            $this->loadTemplate((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "init", [], "any", false, false, false, 41)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["template"] ?? null) : null), "SgDatatablesBundle:datatable:button.html.twig", 41)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ",
    ";
        }
        // line 43
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "key", [], "any", true, true, false, 43) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "key", [], "any", false, false, false, 43) === null))) {
            // line 44
            echo "        key: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "key", [], "any", false, false, false, 44), "html", null, true);
            echo "\",
    ";
        }
        // line 46
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", true, true, false, 46) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 46) === null))) {
            // line 47
            echo "        name: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
            echo "\",
    ";
        }
        // line 49
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "namespace", [], "any", true, true, false, 49) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "namespace", [], "any", false, false, false, 49) === null))) {
            // line 50
            echo "        namespace: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "namespace", [], "any", false, false, false, 50), "html", null, true);
            echo "\",
    ";
        }
        // line 52
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "text", [], "any", true, true, false, 52) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "text", [], "any", false, false, false, 52) === null))) {
            // line 53
            echo "        text: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "text", [], "any", false, false, false, 53), "html", null, true);
            echo "\",
    ";
        }
        // line 55
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "titleAttr", [], "any", true, true, false, 55) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "titleAttr", [], "any", false, false, false, 55) === null))) {
            // line 56
            echo "        titleAttr: \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "titleAttr", [], "any", false, false, false, 56), "html", null, true);
            echo "\",
    ";
        }
        // line 58
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "buttonOptions", [], "any", true, true, false, 58) &&  !(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "buttonOptions", [], "any", false, false, false, 58) === null))) {
            // line 59
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "buttonOptions", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 60
                echo "            ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ": ";
                echo json_encode($context["option"]);
                echo ",
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    ";
        }
        // line 63
        echo "},
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 63,  232 => 62,  221 => 60,  216 => 59,  213 => 58,  207 => 56,  204 => 55,  198 => 53,  195 => 52,  189 => 50,  186 => 49,  180 => 47,  177 => 46,  171 => 44,  168 => 43,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 37,  147 => 36,  144 => 35,  138 => 33,  135 => 32,  129 => 30,  126 => 29,  120 => 27,  117 => 26,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  102 => 21,  96 => 19,  93 => 18,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    {% if button.action is defined and button.action is not same as(null) %}
        {% if button.action['vars'] is defined %}
            {% set vars = button.action['vars'] %}
        {% else %}
            {% set vars = {} %}
        {% endif %}
        action: {% include button.action['template'] with vars %},
    {% endif %}
    {% if button.available is defined and button.available is not same as(null) %}
        {% if button.available['vars'] is defined %}
            {% set vars = button.available['vars'] %}
        {% else %}
            {% set vars = {} %}
        {% endif %}
        available: {% include button.available['template'] with vars %},
    {% endif %}
    {% if button.className is defined and button.className is not same as(null) %}
        className: \"{{ button.className  }}\",
    {% endif %}
    {% if button.destroy is defined and button.destroy is not same as(null) %}
        {% if button.destroy['vars'] is defined %}
            {% set vars = button.destroy['vars'] %}
        {% else %}
            {% set vars = {} %}
        {% endif %}
        destroy: {% include button.destroy['template'] with vars %},
    {% endif %}
    {% if button.enabled is defined and button.enabled is not same as(null) %}
        enabled: {{ button.enabled|sg_datatables_bool_var }},
    {% endif %}
    {% if button.extend is defined and button.extend is not same as(null) %}
        extend: \"{{ button.extend }}\",
    {% endif %}
    {% if button.init is defined and button.init is not same as(null) %}
        {% if button.init['vars'] is defined %}
            {% set vars = button.init['vars'] %}
        {% else %}
            {% set vars = {} %}
        {% endif %}
        init: {% include button.init['template'] with vars %},
    {% endif %}
    {% if button.key is defined and button.key is not same as(null) %}
        key: \"{{ button.key }}\",
    {% endif %}
    {% if button.name is defined and button.name is not same as(null) %}
        name: \"{{ button.name }}\",
    {% endif %}
    {% if button.namespace is defined and button.namespace is not same as(null) %}
        namespace: \"{{ button.namespace }}\",
    {% endif %}
    {% if button.text is defined and button.text is not same as(null) %}
        text: \"{{ button.text }}\",
    {% endif %}
    {% if button.titleAttr is defined and button.titleAttr is not same as(null) %}
        titleAttr: \"{{ button.titleAttr }}\",
    {% endif %}
    {% if button.buttonOptions is defined and button.buttonOptions is not same as(null) %}
        {% for key, option in button.buttonOptions %}
            {{ key }}: {{ option|json_encode|raw }},
        {% endfor %}
    {% endif %}
},
", "SgDatatablesBundle:datatable:button.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/button.html.twig");
    }
}
