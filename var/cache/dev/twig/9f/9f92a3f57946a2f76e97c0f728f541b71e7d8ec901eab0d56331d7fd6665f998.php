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

/* backend_layout/css.html.twig */
class __TwigTemplate_9a37f4fbd9d7e307bf53ff161497344c59976b34cf2e829ee7ae2fef564801f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/css.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/css.html.twig"));

        // line 3
        echo "<link href=\"";
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
";
        // line 10
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/timeCircles/css/timeCircles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        // line 13
        echo "<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
";
        // line 15
        echo "
";
        // line 21
        echo "
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/images/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/png\" sizes=\"16x16\">
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/toast-master/css/jquery.toast.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/css/pages/dashboard1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/crm/dist/css/pages/login-register-lock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/sweetalert2/dist/sweetalert2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/dropify/dist/css/dropify.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/css/pages/contact-app-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- Popup CSS -->
<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- form-icheck css -->
<link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/icheck/skins/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/css/pages/form-icheck.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/css/pages/login-register-lock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 41
        if ((isset($context["includeMorris"]) || array_key_exists("includeMorris", $context))) {
            // line 42
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/morrisjs/morris.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend_layout/css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  128 => 36,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  72 => 21,  69 => 15,  66 => 13,  60 => 10,  56 => 6,  52 => 5,  48 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{#<link href=\"{{ asset('assets/fixedPlugins/bootstrap/css/bootstrap4.min.css') }}\" rel=\"stylesheet\">#}
{#<link href=\"{{ asset('assets/fixedPlugins/bootstrap/css/dataTables.bootstrap4.min.css') }}\" rel=\"stylesheet\">#}
<link href=\"{{ asset('assets/fixedPlugins/vue/css/vue-select.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/select2/css/select2.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/vue/css/select2totree.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/fixedPlugins/vue/css/vue-treeselect.min.css') }}\" rel=\"stylesheet\">
{#<link href=\"{{ asset('assets/fixedPlugins/jquery/css/jquery.dataTables.min.css') }}\" rel=\"stylesheet\">#}
{#<link href=\"{{ asset('assets/fixedPlugins/morris/css/morris.css') }}\" rel=\"stylesheet\">#}
{#<link href=\"{{ asset('assets/fixedPlugins/sweetalert2/css/sweetalert2.min.css') }}\" rel=\"stylesheet\">#}
<link href=\"{{ asset('assets/fixedPlugins/timeCircles/css/timeCircles.css') }}\" rel=\"stylesheet\">

{#<script src=\"{{ asset('assets/fixedPlugins/jquery/js/jquery-3.4.1.min.js') }}\"></script>#}
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
{#<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>#}

{# TODO: <-------------------------------------------------------------------------------------------------------------------------------------> SKELETON #}
{# TODO: PUBLİC ASSETS İÇİNDE [CKEDİTOR],[CSS],[FONTAWESOME],[İMAGES],[JS],[OPENLİVESTREAMPUBS],[OPENLİVESTREAMSUBS],[TEMP],[UPLOADS] İSKELET DOSYALARINI SİLMEYİN WE DEĞİŞTİRMEYİN #}
{# TODO: İÇİNE ATICAĞINIZ TEMPLATE 'İ [TEMP] KLASÖRÜNÜN İÇİNE BİR KLASÖR AÇIP ORAYA ATINIZ #}
{# TODO: ATACAĞINIZ TEMPLATE 'İN LOGİNİ DEĞİLDE BAĞIMSIZ BİR LOGİN SAYFASI KULLANACAKSANIZ [TEMP/LOGİN_PAGE] KLASÖRÜNÜN İÇİNE ATINIZ #}
{# TODO: <-------------------------------------------------------------------------------------------------------------------------------------> SKELETON #}

<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/jquery/jquery-3.2.1.min.js') }}\"></script>
<link href=\"{{ asset('assets/themes/eliteadmin/assets/images/favicon.png') }}\" rel=\"icon\" type=\"image/png\" sizes=\"16x16\">
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/toast-master/css/jquery.toast.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/css/style.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/css/pages/dashboard1.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/crm/dist/css/pages/login-register-lock.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/sweetalert2/dist/sweetalert2.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/switchery/dist/switchery.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/dropify/dist/css/dropify.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/css/pages/contact-app-page.css') }}\" rel=\"stylesheet\">
<!-- Popup CSS -->
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/Magnific-Popup-master/dist/magnific-popup.css') }}\" rel=\"stylesheet\">
<!-- form-icheck css -->
<link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/icheck/skins/all.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/css/pages/form-icheck.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/css/pages/login-register-lock.css') }}\" rel=\"stylesheet\">
{% if includeMorris is defined %}
    <link href=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/morrisjs/morris.css') }}\" rel=\"stylesheet\">
{% endif %}", "backend_layout/css.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/backend_layout/css.html.twig");
    }
}
