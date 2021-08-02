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

/* SgDatatablesBundle:render:action.html.twig */
class __TwigTemplate_de2ac95a970a75de8c8a15f8ff513204abad688c799727d05ebf9220363556b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:action.html.twig"));

        // line 9
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 10
        echo "
";
        // line 22
        echo "
";
        // line 28
        echo "
";
        // line 38
        echo "
";
        // line 54
        echo "
";
        // line 60
        echo "
";
        // line 61
        echo ($context["start_html_container"] ?? null);
        echo "

";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["actionKey"] => $context["action"]) {
            // line 64
            echo "    ";
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["render_if_actions"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["actionKey"]] ?? null) : null) === true)) {
                // line 65
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["action"], "button", [], "any", false, false, false, 65) === false)) {
                    // line 66
                    echo "            ";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "startHtml", [], "any", false, false, false, 66);
                    echo "
            <a ";
                    // line 67
                    echo twig_call_macro($macros["macros"], "macro_href", [$context["action"], (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["route_parameters"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["actionKey"]] ?? null) : null)], 67, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_call_macro($macros["macros"], "macro_attributes", [(($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["attributes"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["actionKey"]] ?? null) : null)], 67, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_call_macro($macros["macros"], "macro_confirm_dialog", [$context["action"]], 67, $context, $this->getSourceContext());
                    echo ">
                ";
                    // line 68
                    echo twig_call_macro($macros["macros"], "macro_link_title", [$context["action"]], 68, $context, $this->getSourceContext());
                    echo "
            </a>
            ";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "endHtml", [], "any", false, false, false, 70);
                    echo "
        ";
                } else {
                    // line 72
                    echo "            ";
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "startHtml", [], "any", false, false, false, 72);
                    echo "
            <button type=\"button\" ";
                    // line 73
                    echo twig_call_macro($macros["macros"], "macro_value", [(($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["values"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["actionKey"]] ?? null) : null)], 73, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_call_macro($macros["macros"], "macro_attributes", [(($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["attributes"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["actionKey"]] ?? null) : null)], 73, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_call_macro($macros["macros"], "macro_confirm_dialog", [$context["action"]], 73, $context, $this->getSourceContext());
                    echo ">
                ";
                    // line 74
                    echo twig_call_macro($macros["macros"], "macro_link_title", [$context["action"]], 74, $context, $this->getSourceContext());
                    echo "
            </button>
            ";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["action"], "endHtml", [], "any", false, false, false, 76);
                    echo "
        ";
                }
                // line 78
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actionKey'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
";
        // line 81
        echo ($context["end_html_container"] ?? null);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function macro_link_title($__action__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link_title"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link_title"));

            // line 12
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 12) === null) && (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 12) === null))) {
                // line 13
                echo "        ";
                if ( !(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "route", [], "any", false, false, false, 13) === null)) {
                    // line 14
                    echo "            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "route", [], "any", false, false, false, 14), "html", null, true);
                    echo "
        ";
                } else {
                    // line 16
                    echo "            null
        ";
                }
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 19), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 19), "html", null, true);
                echo "
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 23
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            // line 24
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 25
                echo "        ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_confirm_dialog($__action__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            // line 30
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "confirm", [], "any", false, false, false, 30) === true)) {
                // line 31
                echo "        ";
                if ( !(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "confirmMessage", [], "any", false, false, false, 31) === null)) {
                    // line 32
                    echo "            onclick=\"return confirm('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "confirmMessage", [], "any", false, false, false, 32), "html", null, true);
                    echo "')\"
        ";
                } else {
                    // line 34
                    echo "            onclick=\"return confirm('";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sg.datatables.confirmMessage", [], "messages"), "html", null, true);
                    echo "')\"
        ";
                }
                // line 36
                echo "    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 39
    public function macro_href($__action__ = null, $__route_parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "action" => $__action__,
            "route_parameters" => $__route_parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "href"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "href"));

            // line 40
            echo "    ";
            if ( !(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "routeParameters", [], "any", false, false, false, 40) === null)) {
                // line 41
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 41), "locale", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "locale", [], "any", false, false, false, 41)))) {
                    // line 42
                    echo "            ";
                    if (twig_in_filter("_locale", twig_get_array_keys_filter(($context["route_parameters"] ?? null)))) {
                        // line 43
                        echo "                ";
                        $context["route_parameters"] = twig_array_merge(($context["route_parameters"] ?? null), ["_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 43), "locale", [], "any", false, false, false, 43)]);
                        // line 44
                        echo "            ";
                    }
                    // line 45
                    echo "        ";
                }
                // line 46
                echo "    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ( !(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "route", [], "any", false, false, false, 48) === null)) {
                // line 49
                echo "        href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "route", [], "any", false, false, false, 49), ($context["route_parameters"] ?? null)), "html", null, true);
                echo "\"
    ";
            } else {
                // line 51
                echo "        href=\"javascript:void(0);\"
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_value($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "value"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "value"));

            // line 56
            echo "    ";
            if ( !(null === ($context["value"] ?? null))) {
                // line 57
                echo "        value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\"
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:render:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 57,  394 => 56,  375 => 55,  358 => 51,  352 => 49,  350 => 48,  347 => 47,  344 => 46,  341 => 45,  338 => 44,  335 => 43,  332 => 42,  329 => 41,  326 => 40,  306 => 39,  290 => 36,  284 => 34,  278 => 32,  275 => 31,  272 => 30,  253 => 29,  229 => 25,  224 => 24,  205 => 23,  184 => 19,  181 => 18,  177 => 16,  171 => 14,  168 => 13,  165 => 12,  146 => 11,  134 => 81,  131 => 80,  124 => 78,  119 => 76,  114 => 74,  106 => 73,  101 => 72,  96 => 70,  91 => 68,  83 => 67,  78 => 66,  75 => 65,  72 => 64,  68 => 63,  63 => 61,  60 => 60,  57 => 54,  54 => 38,  51 => 28,  48 => 22,  45 => 10,  43 => 9,);
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
{% import _self as macros %}

{% macro link_title(action) %}
    {% if action.label is same as(null) and action.icon is same as(null) %}
        {% if action.route is not same as(null) %}
            {{ action.route }}
        {% else %}
            null
        {% endif %}
    {% else %}
        <span class=\"{{ action.icon }}\"></span> {{ action.label }}
    {% endif %}
{% endmacro %}

{% macro attributes(attributes) %}
    {% for key, value in attributes %}
        {{ key }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{% macro confirm_dialog(action) %}
    {% if action.confirm is same as(true) %}
        {% if action.confirmMessage is not same as(null) %}
            onclick=\"return confirm('{{ action.confirmMessage }}')\"
        {% else %}
            onclick=\"return confirm('{{ 'sg.datatables.confirmMessage'|trans({}, 'messages') }}')\"
        {% endif %}
    {% endif %}
{% endmacro %}

{% macro href(action, route_parameters) %}
    {% if action.routeParameters is not same as(null) %}
        {% if app.request.locale is defined and app.request.locale is not null %}
            {% if '_locale' in route_parameters|keys %}
                {% set route_parameters = route_parameters|merge({ '_locale': app.request.locale }) %}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if action.route is not same as(null) %}
        href=\"{{ path(action.route, route_parameters) }}\"
    {% else %}
        href=\"javascript:void(0);\"
    {% endif %}
{% endmacro %}

{% macro value(value) %}
    {% if value is not null %}
        value=\"{{ value }}\"
    {% endif %}
{% endmacro %}

{{ start_html_container|raw }}

{% for actionKey, action in actions %}
    {% if render_if_actions[actionKey] is same as(true) %}
        {% if action.button is same as(false) %}
            {{ action.startHtml|raw }}
            <a {{ macros.href(action, route_parameters[actionKey]) }} {{ macros.attributes(attributes[actionKey]) }} {{ macros.confirm_dialog(action) }}>
                {{ macros.link_title(action) }}
            </a>
            {{ action.endHtml|raw }}
        {% else %}
            {{ action.startHtml|raw }}
            <button type=\"button\" {{ macros.value(values[actionKey]) }} {{ macros.attributes(attributes[actionKey]) }} {{ macros.confirm_dialog(action) }}>
                {{ macros.link_title(action) }}
            </button>
            {{ action.endHtml|raw }}
        {% endif %}
    {% endif %}
{% endfor %}

{{ end_html_container|raw }}
", "SgDatatablesBundle:render:action.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/render/action.html.twig");
    }
}
