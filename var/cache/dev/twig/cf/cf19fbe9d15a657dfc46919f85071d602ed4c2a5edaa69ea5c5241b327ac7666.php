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

/* SgDatatablesBundle:render:thumb.html.twig */
class __TwigTemplate_beae6b810dcd7c2dfd5e83359a9dc189d6c3283578f4cf714d62e281ae14486b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:thumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:render:thumb.html.twig"));

        // line 9
        if (($context["data"] ?? null)) {
            // line 10
            echo "    ";
            $context["path"] = ((twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "relativePath", [], "any", false, false, false, 10) . "/") . ($context["data"] ?? null));
            // line 11
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "enlarge", [], "any", false, false, false, 11) === true)) {
                // line 12
                echo "        ";
                $context["enlargedPath"] = $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["path"] ?? null)), twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "imagineFilterEnlarged", [], "any", false, false, false, 12));
                // line 13
                echo "        <a href=\"javascript:void(0);\" data-featherlight=\"";
                echo twig_escape_filter($this->env, (((isset($context["enlargedPath"]) || array_key_exists("enlargedPath", $context))) ? (_twig_default_filter(($context["enlargedPath"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["path"] ?? null)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["path"] ?? null)))), "html", null, true);
                echo "\">
            <img class=\"";
                // line 14
                echo twig_escape_filter($this->env, ($context["image_class"] ?? null), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["path"] ?? null), twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "imagineFilter", [], "any", false, false, false, 14)), "html", null, true);
                echo "\" />
        </a>
    ";
            } else {
                // line 17
                echo "        <img class=\"";
                echo twig_escape_filter($this->env, ($context["image_class"] ?? null), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["path"] ?? null), twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "imagineFilter", [], "any", false, false, false, 17)), "html", null, true);
                echo "\" />
    ";
            }
        } else {
            // line 20
            echo "    ";
            if ( !(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "holderUrl", [], "any", false, false, false, 20) === null)) {
                // line 21
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "holderUrl", [], "any", false, false, false, 21), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "holderWidth", [], "any", false, false, false, 21), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "holderHeight", [], "any", false, false, false, 21), "html", null, true);
                echo "\" />
    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:render:thumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  76 => 20,  67 => 17,  59 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  43 => 9,);
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
{% if data %}
    {% set path = image.relativePath ~ '/' ~ data %}
    {% if image.enlarge is same as(true) %}
        {% set enlargedPath = asset(path)|imagine_filter(image.imagineFilterEnlarged) %}
        <a href=\"javascript:void(0);\" data-featherlight=\"{{ enlargedPath | default(asset(path)) }}\">
            <img class=\"{{ image_class }}\" src=\"{{ path | imagine_filter(image.imagineFilter) }}\" />
        </a>
    {% else %}
        <img class=\"{{ image_class }}\" src=\"{{ path | imagine_filter(image.imagineFilter) }}\" />
    {% endif %}
{% else %}
    {% if image.holderUrl is not same as(null) %}
        <img src=\"{{ image.holderUrl }}/{{ image.holderWidth }}x{{ image.holderHeight }}\" />
    {% endif %}
{% endif %}
", "SgDatatablesBundle:render:thumb.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/render/thumb.html.twig");
    }
}
