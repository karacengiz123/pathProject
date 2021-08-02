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

/* layout/css.html.twig */
class __TwigTemplate_74db92e4f3db66cb0acee1231b40ac68adcf375ad415b4a0f9a24d3648f2f4e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/css.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/css.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/bootstrap/css/bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/bootstrap/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/css/vue-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/css/select2totree.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/css/vue-treeselect.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/jquery/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/morris/css/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/sweetalert2/css/sweetalert2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/timeCircles/css/timeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/jquery/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
";
        // line 15
        echo "
";
        // line 21
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  90 => 15,  85 => 12,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('assets/fixedPlugins/bootstrap/css/bootstrap4.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/bootstrap/css/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/vue/css/vue-select.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/select2/css/select2.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/vue/css/select2totree.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/vue/css/vue-treeselect.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/jquery/css/jquery.dataTables.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/morris/css/morris.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/sweetalert2/css/sweetalert2.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/timeCircles/css/timeCircles.css') }}\" rel=\"stylesheet\">

<script src=\"{{ asset('assets/fixedPlugins/jquery/js/jquery-3.4.1.min.js') }}\"></script>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
{#<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>#}

{# TODO: <-------------------------------------------------------------------------------------------------------------------------------------> SKELETON #}
{# TODO: PUBLİC ASSETS İÇİNDE [CKEDİTOR],[CSS],[FONTAWESOME],[İMAGES],[JS],[OPENLİVESTREAMPUBS],[OPENLİVESTREAMSUBS],[TEMP],[UPLOADS] İSKELET DOSYALARINI SİLMEYİN WE DEĞİŞTİRMEYİN #}
{# TODO: İÇİNE ATICAĞINIZ TEMPLATE 'İ [TEMP] KLASÖRÜNÜN İÇİNE BİR KLASÖR AÇIP ORAYA ATINIZ #}
{# TODO: ATACAĞINIZ TEMPLATE 'İN LOGİNİ DEĞİLDE BAĞIMSIZ BİR LOGİN SAYFASI KULLANACAKSANIZ [TEMP/LOGİN_PAGE] KLASÖRÜNÜN İÇİNE ATINIZ #}
{# TODO: <-------------------------------------------------------------------------------------------------------------------------------------> SKELETON #}

", "layout/css.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/layout/css.html.twig");
    }
}
