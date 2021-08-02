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

/* GosWebSocketBundle:Collector:websocket.html.twig */
class __TwigTemplate_87c5fca62e39f4743aefc8c43d87ed54dc04d04ca242dfa866ab35749c1a7f56 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GosWebSocketBundle:Collector:websocket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GosWebSocketBundle:Collector:websocket.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "GosWebSocketBundle:Collector:websocket.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 5
        echo "
    <div class=\"sf-toolbar-block\">
        ";
        // line 7
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 8
            echo "            <div class=\"sf-toolbar-icon\">
                <a href=\"#\">
                    <img width=\"28\" height=\"28\" alt=\"Redis\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAACvElEQVR42u2WS2hTQRSG00IR62ORGjUaF7pIYjAJIc8mMdmrUBB8QN24UZC6ERSrK92qK8G9IL4WCkqhoBUEQQpC6cKFCt0UpRRU0L4ErX4/zIXhYpNpbpcdOGTunXPON3POmXMTCq2PtR79/f3hWq12kNF0kUwmsz0QMJfLRQBeaTQaE8hkO6nX63fz+Xw0CLObUybZ/cNms/kb+dtKgC4BHYnFYuEg0K5CoZDA2RPkTzuoNgb0VSqVCgfN524cHeG0J/1SrVbP8/vOioKgI3Z4i8XiHtJznGmPE5AwbSyVSnsrlcp+SSQS2Wyv47AB5K0FXVIqsImzoQNEZ0zvmF8ol8tb2wJRLOLwGU4+StLpdNOvg/NjOP5hhXcO3dvY3We+6L3jpJfR7WsJVNmrEj1n5PW0r6J34fgmOgtWEX3h3SUAQ8ynkGUjs7wb1rVzBvI8jkHVgt1i/bscWsCv6F1X/ojQKeYz5v2y7BW1FYFU3U52dQ/lX15hYPSGfB4FdsMP8xzrNDqludPD1tqkDtEyrHSSGEajdjUqZxguWLCfOhXP8x4U4HvdZ+YnVgXUiMfj24C+XqkRCIbaBhwOIt9M+D4hqY6AGtFoVNBRdZb/dJt51gaTyWQfJzvD87Sp7M6BGtlsVo3gMYZzyGcViBdWnQzoWaNzDnmhuxsIqEEnSeL4DoYXkWsqEKv0pwVThXLRB5AdQYFd6iAAH1AQQ3KsalSBKGf8fkBeojNgulI3uodMPrX+HLuSM00Vi+EYO13kd0r3TKVvvi4picKokwkmm0QiscVbo3HsI0K9zkA1Yu9Omkqc0T1T2FyEDR5mM7HV5K9HjVi90X/hXUSfOjb5lE0mlB4nqLq+OdVsp1By+UhpcIaq6xvouMvfEL8AngB6lZrY5Bxefd3ViF3/bPkFcINm0htaH2s9/gH39f9Ki6w5qQAAAABJRU5ErkJggg==\" />
                    <span class=\"sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "pushTotal", [], "any", false, false, false, 11), "html", null, true);
            echo "</span>
                </a>
            </div>
        ";
        } else {
            // line 15
            echo "            <a href=\"#\">
                <div class=\"sf-toolbar-icon\">
                    <img alt=\"Redis\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAUCAYAAACeXl35AAAAAXNSR0IArs4c6QAAAAlwSFlzAAALEwAACxMBAJqcGAAABCRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIgogICAgICAgICAgICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgICAgICAgICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyI+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjI8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDx0aWZmOkNvbXByZXNzaW9uPjU8L3RpZmY6Q29tcHJlc3Npb24+CiAgICAgICAgIDx0aWZmOlhSZXNvbHV0aW9uPjcyPC90aWZmOlhSZXNvbHV0aW9uPgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICAgICA8dGlmZjpZUmVzb2x1dGlvbj43MjwvdGlmZjpZUmVzb2x1dGlvbj4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjI4PC9leGlmOlBpeGVsWERpbWVuc2lvbj4KICAgICAgICAgPGV4aWY6Q29sb3JTcGFjZT4xPC9leGlmOkNvbG9yU3BhY2U+CiAgICAgICAgIDxleGlmOlBpeGVsWURpbWVuc2lvbj4yMDwvZXhpZjpQaXhlbFlEaW1lbnNpb24+CiAgICAgICAgIDxkYzpzdWJqZWN0PgogICAgICAgICAgICA8cmRmOkJhZy8+CiAgICAgICAgIDwvZGM6c3ViamVjdD4KICAgICAgICAgPHhtcDpNb2RpZnlEYXRlPjIwMTYtMDMtMTRUMTg6MDM6MzU8L3htcDpNb2RpZnlEYXRlPgogICAgICAgICA8eG1wOkNyZWF0b3JUb29sPlBpeGVsbWF0b3IgMy40LjI8L3htcDpDcmVhdG9yVG9vbD4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CimISN0AAAOwSURBVEgNnZVdSJNhFMffd3Nzc4MsEK+yC62ICKSohK4jKpAyRKfT1CQnpVRCI+omQtSbIAo0EYrpppZZEnUVBFHgRV0k0X3OLrQLa83p3Fe/8+ar73R+1APH53mf8/E//3POM1Wv13u6qLDwkaIocSSFZF6qqpjQxxKJVo/HM5rZaPNbNZVKmUdGRrxZWVntnJUkoq7jpwKaTCZD0Wi0vrq6+r9Al2MPDw9fAvQeYhbgTCsWiykmk0lBvwBoE6C+THYb3S0DilEgEHDZbLYzi4uLkBHyKaPeBthJJEts0ccXFhauAvpAvpeW2tfXV9DY2PhNv1i9GwOu1q35HhgYOE9CPShsogQ8FYlEbrrd7g75pkpdVqu1LhwON9TU1LySu9UrDZDsipxO52OyNyMKJbwMg09Gp/7+/lK73R6AvUPuaYEyNzfXwe7kviWRSEif56hSQ1VV1ROjr5wZvJWFg9NsNh/Lzs4ugUmJxWLZtqL9eyKRfE5m/Z7gUc5TyLSAiWDjIIbP7/dfWNWWdMB4PC6NE2YKZ4nZhtN2Ocji7CWphxxtYre0kgD8qKysbIdVK2WOkYSoskm+mzLv1g1lT2OI43eMJ+iDBkiWp2A56vP5Chio24B1otfaIDayALZj5x8aGroI6H0SvSFlFlDiSSXsmuHSn7Qeyt3g4OBOHJ4S8Cijr/UIxtM45yMSRMoWBGgMNk2IRe4AWgyFQoUktQt5L4AIpomD9HJCB01jKJculys4Pz9fCthbMteYUhrpm7DREiDQc9i08N0A2LwAclaxs5KA9mzEPtNaAyhGtbW1M0xeGaAvBVSyJZjGjj4psPfQm+sVFRUDMKsC7LcAsZYbmwlM7jICiqK+vv6nfXa2ksc9xMQK00mAwwLMbqW3XYDeAfQFZTuHywzAFvHdaK3pYSZjHnwPZe7KycnZB+OAPBdhza7w8Lvz8vJag8FgMVWZzM3NPeBwON6IXqadZIop/2c97roMdQOewgkCHAeslh+B1wCUEegdpR0HYBzGR6ampupow8fm5uYZdL+oyjjtGAfsA+ewHkv2DRkysWfpl5+hsMtgwPIuE9dmDPCv5w0nigxD9CUsgFIeenmNvh0CZNoIJBNq/Maeq5RKsqloJDLmcrsDuj7NUL807vTvMH0bYQILBFT6Jmy3ssSOYUvgd4U+av9VtuTJr8x+gJ4he2G9FSzNRt6ICVABBvRWeXl555YAxbu3t3cPjqO88B18bvrexMewBMf89csXzx+AidtNbJfEnAAAAABJRU5ErkJggg==\" />
                    <span class=\"sf-toolbar-value\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "pushTotal", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                </div>
            </a>
        ";
        }
        // line 22
        echo "
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Push</b>
                <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "pushTotal", [], "any", false, false, false, 26), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "durations", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["pusher"] => $context["duration"]) {
            // line 30
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 31
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["pusher"]), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "pusherCounts", [], "any", false, false, false, 31)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["pusher"]] ?? null) : null), "html", null, true);
            echo ")</b>
                    <span class=\"sf-toolbar-status\">";
            // line 32
            echo twig_escape_filter($this->env, sprintf("%0.2f", $context["duration"]), "html", null, true);
            echo " ms</span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['pusher'], $context['duration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span class=\"sf-toolbar-status\">";
        // line 38
        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "totalDuration", [], "any", false, false, false, 38)), "html", null, true);
        echo " ms</span>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GosWebSocketBundle:Collector:websocket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  135 => 35,  126 => 32,  120 => 31,  117 => 30,  113 => 29,  107 => 26,  101 => 22,  94 => 18,  89 => 15,  82 => 11,  77 => 8,  75 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <div class=\"sf-toolbar-block\">
        {% if profiler_markup_version == 1 %}
            <div class=\"sf-toolbar-icon\">
                <a href=\"#\">
                    <img width=\"28\" height=\"28\" alt=\"Redis\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAACvElEQVR42u2WS2hTQRSG00IR62ORGjUaF7pIYjAJIc8mMdmrUBB8QN24UZC6ERSrK92qK8G9IL4WCkqhoBUEQQpC6cKFCt0UpRRU0L4ErX4/zIXhYpNpbpcdOGTunXPON3POmXMTCq2PtR79/f3hWq12kNF0kUwmsz0QMJfLRQBeaTQaE8hkO6nX63fz+Xw0CLObUybZ/cNms/kb+dtKgC4BHYnFYuEg0K5CoZDA2RPkTzuoNgb0VSqVCgfN524cHeG0J/1SrVbP8/vOioKgI3Z4i8XiHtJznGmPE5AwbSyVSnsrlcp+SSQS2Wyv47AB5K0FXVIqsImzoQNEZ0zvmF8ol8tb2wJRLOLwGU4+StLpdNOvg/NjOP5hhXcO3dvY3We+6L3jpJfR7WsJVNmrEj1n5PW0r6J34fgmOgtWEX3h3SUAQ8ynkGUjs7wb1rVzBvI8jkHVgt1i/bscWsCv6F1X/ojQKeYz5v2y7BW1FYFU3U52dQ/lX15hYPSGfB4FdsMP8xzrNDqludPD1tqkDtEyrHSSGEajdjUqZxguWLCfOhXP8x4U4HvdZ+YnVgXUiMfj24C+XqkRCIbaBhwOIt9M+D4hqY6AGtFoVNBRdZb/dJt51gaTyWQfJzvD87Sp7M6BGtlsVo3gMYZzyGcViBdWnQzoWaNzDnmhuxsIqEEnSeL4DoYXkWsqEKv0pwVThXLRB5AdQYFd6iAAH1AQQ3KsalSBKGf8fkBeojNgulI3uodMPrX+HLuSM00Vi+EYO13kd0r3TKVvvi4picKokwkmm0QiscVbo3HsI0K9zkA1Yu9Omkqc0T1T2FyEDR5mM7HV5K9HjVi90X/hXUSfOjb5lE0mlB4nqLq+OdVsp1By+UhpcIaq6xvouMvfEL8AngB6lZrY5Bxefd3ViF3/bPkFcINm0htaH2s9/gH39f9Ki6w5qQAAAABJRU5ErkJggg==\" />
                    <span class=\"sf-toolbar-status\">{{ collector.pushTotal }}</span>
                </a>
            </div>
        {% else %}
            <a href=\"#\">
                <div class=\"sf-toolbar-icon\">
                    <img alt=\"Redis\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAUCAYAAACeXl35AAAAAXNSR0IArs4c6QAAAAlwSFlzAAALEwAACxMBAJqcGAAABCRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIgogICAgICAgICAgICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgICAgICAgICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyI+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjI8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDx0aWZmOkNvbXByZXNzaW9uPjU8L3RpZmY6Q29tcHJlc3Npb24+CiAgICAgICAgIDx0aWZmOlhSZXNvbHV0aW9uPjcyPC90aWZmOlhSZXNvbHV0aW9uPgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICAgICA8dGlmZjpZUmVzb2x1dGlvbj43MjwvdGlmZjpZUmVzb2x1dGlvbj4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjI4PC9leGlmOlBpeGVsWERpbWVuc2lvbj4KICAgICAgICAgPGV4aWY6Q29sb3JTcGFjZT4xPC9leGlmOkNvbG9yU3BhY2U+CiAgICAgICAgIDxleGlmOlBpeGVsWURpbWVuc2lvbj4yMDwvZXhpZjpQaXhlbFlEaW1lbnNpb24+CiAgICAgICAgIDxkYzpzdWJqZWN0PgogICAgICAgICAgICA8cmRmOkJhZy8+CiAgICAgICAgIDwvZGM6c3ViamVjdD4KICAgICAgICAgPHhtcDpNb2RpZnlEYXRlPjIwMTYtMDMtMTRUMTg6MDM6MzU8L3htcDpNb2RpZnlEYXRlPgogICAgICAgICA8eG1wOkNyZWF0b3JUb29sPlBpeGVsbWF0b3IgMy40LjI8L3htcDpDcmVhdG9yVG9vbD4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CimISN0AAAOwSURBVEgNnZVdSJNhFMffd3Nzc4MsEK+yC62ICKSohK4jKpAyRKfT1CQnpVRCI+omQtSbIAo0EYrpppZZEnUVBFHgRV0k0X3OLrQLa83p3Fe/8+ar73R+1APH53mf8/E//3POM1Wv13u6qLDwkaIocSSFZF6qqpjQxxKJVo/HM5rZaPNbNZVKmUdGRrxZWVntnJUkoq7jpwKaTCZD0Wi0vrq6+r9Al2MPDw9fAvQeYhbgTCsWiykmk0lBvwBoE6C+THYb3S0DilEgEHDZbLYzi4uLkBHyKaPeBthJJEts0ccXFhauAvpAvpeW2tfXV9DY2PhNv1i9GwOu1q35HhgYOE9CPShsogQ8FYlEbrrd7g75pkpdVqu1LhwON9TU1LySu9UrDZDsipxO52OyNyMKJbwMg09Gp/7+/lK73R6AvUPuaYEyNzfXwe7kviWRSEif56hSQ1VV1ROjr5wZvJWFg9NsNh/Lzs4ugUmJxWLZtqL9eyKRfE5m/Z7gUc5TyLSAiWDjIIbP7/dfWNWWdMB4PC6NE2YKZ4nZhtN2Ocji7CWphxxtYre0kgD8qKysbIdVK2WOkYSoskm+mzLv1g1lT2OI43eMJ+iDBkiWp2A56vP5Chio24B1otfaIDayALZj5x8aGroI6H0SvSFlFlDiSSXsmuHSn7Qeyt3g4OBOHJ4S8Cijr/UIxtM45yMSRMoWBGgMNk2IRe4AWgyFQoUktQt5L4AIpomD9HJCB01jKJculys4Pz9fCthbMteYUhrpm7DREiDQc9i08N0A2LwAclaxs5KA9mzEPtNaAyhGtbW1M0xeGaAvBVSyJZjGjj4psPfQm+sVFRUDMKsC7LcAsZYbmwlM7jICiqK+vv6nfXa2ksc9xMQK00mAwwLMbqW3XYDeAfQFZTuHywzAFvHdaK3pYSZjHnwPZe7KycnZB+OAPBdhza7w8Lvz8vJag8FgMVWZzM3NPeBwON6IXqadZIop/2c97roMdQOewgkCHAeslh+B1wCUEegdpR0HYBzGR6ampupow8fm5uYZdL+oyjjtGAfsA+ewHkv2DRkysWfpl5+hsMtgwPIuE9dmDPCv5w0nigxD9CUsgFIeenmNvh0CZNoIJBNq/Maeq5RKsqloJDLmcrsDuj7NUL807vTvMH0bYQILBFT6Jmy3ssSOYUvgd4U+av9VtuTJr8x+gJ4he2G9FSzNRt6ICVABBvRWeXl555YAxbu3t3cPjqO88B18bvrexMewBMf89csXzx+AidtNbJfEnAAAAABJRU5ErkJggg==\" />
                    <span class=\"sf-toolbar-value\">{{ collector.pushTotal }}</span>
                </div>
            </a>
        {% endif %}

        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Push</b>
                <span class=\"sf-toolbar-status\">{{ collector.pushTotal }}</span>
            </div>

            {% for pusher, duration in collector.durations %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ pusher|upper }} ({{ collector.pusherCounts[pusher] }})</b>
                    <span class=\"sf-toolbar-status\">{{ '%0.2f'|format(duration) }} ms</span>
                </div>
            {% endfor %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span class=\"sf-toolbar-status\">{{ '%0.2f'|format(collector.totalDuration) }} ms</span>
            </div>
        </div>
    </div>
{% endblock %}
", "GosWebSocketBundle:Collector:websocket.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/gos/web-socket-bundle/Resources/views/Collector/websocket.html.twig");
    }
}
