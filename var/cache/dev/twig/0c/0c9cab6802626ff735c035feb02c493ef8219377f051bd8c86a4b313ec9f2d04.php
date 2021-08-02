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

/* layout/js.html.twig */
class __TwigTemplate_b2d73ee20e7e589c0ba42ed18582962ac19e9e3d7f77688d63ed8ce90e3928bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/js.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/bootstrap/js/bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/bootstrap/js/bootstrap4.popper.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/fontawesome/fontawesome.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/vue.min.js"), "html", null, true);
        echo "\"></script>
<!-- include Vue 2.x -->
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/vue@^2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/vue-select.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/select2/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/select2totree.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/jquery/jquery-maskmoney-master/src/jquery.maskMoney.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/jquery/jQuery-Mask-Plugin-master/src/jquery.mask.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/accounting-js/accounting.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/jquery/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/jquery/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/accounting-js/accounting.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 19
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/moment/js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/morris/js/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/sweetalert2/js/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/timeCircles/js/timeCircles.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/sentry-bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/sentry-vue.min.js"), "html", null, true);
        echo "\"></script>
<!-- include vue-treeselect & its styles. you can change the version tag to better suit your needs. -->
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/vue-treeselect.umd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/VueStarRating.umd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/vue.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/vue/js/v-mask.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fixedPlugins/wavesurfer/js/wavesurfer.min.js"), "html", null, true);
        echo "\"></script>
<script>
    // As a plugin
    Vue.use(VueMask.VueMaskPlugin);
    // Or as a directive
    Vue.directive('mask', VueMask.VueMaskDirective);
</script>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 30,  144 => 29,  140 => 28,  136 => 27,  132 => 26,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  106 => 19,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  57 => 5,  52 => 4,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ asset('assets/fixedPlugins/bootstrap/js/bootstrap4.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/bootstrap/js/bootstrap4.popper.min.js') }}\"></script>
{#<script src=\"{{ asset('assets/fixedPlugins/bootstrap/js/dataTables.bootstrap4.min.js') }}\"></script>#}
<script src=\"{{ asset('assets/fixedPlugins/fontawesome/fontawesome.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/vue/js/vue.min.js') }}\"></script>
<!-- include Vue 2.x -->
<script src=\"{{ asset('assets/fixedPlugins/vue/js/vue@^2.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/vue/js/vue-select.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/select2/js/select2.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/vue/js/select2totree.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/jquery/jquery-maskmoney-master/src/jquery.maskMoney.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/jquery/jQuery-Mask-Plugin-master/src/jquery.mask.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/accounting-js/accounting.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/ckeditor/ckeditor.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/jquery/js/jquery.validate.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/jquery/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/accounting-js/accounting.min.js') }}\"></script>
{#<script src=\"{{ asset('assets/fixedPlugins/googlemap/js/googleMaps.js') }}\"></script>#}
<script src=\"{{ asset('assets/fixedPlugins/moment/js/moment.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/morris/js/morris.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/sweetalert2/js/sweetalert2.all.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/timeCircles/js/timeCircles.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/vue/js/sentry-bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/vue/js/sentry-vue.min.js') }}\"></script>
<!-- include vue-treeselect & its styles. you can change the version tag to better suit your needs. -->
<script src=\"{{ asset('assets/fixedPlugins/vue/js/vue-treeselect.umd.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/vue/js/VueStarRating.umd.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/vue/js/vue.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/vue/js/v-mask.min.js') }}\"></script>
<script src=\"{{ asset('assets/fixedPlugins/wavesurfer/js/wavesurfer.min.js') }}\"></script>
<script>
    // As a plugin
    Vue.use(VueMask.VueMaskPlugin);
    // Or as a directive
    Vue.directive('mask', VueMask.VueMaskDirective);
</script>


{# TODO: <-------------------------------------------------------------------------------------------------------------------------------------> SKELETON #}
{# TODO: PUBLİC ASSETS İÇİNDE [CKEDİTOR],[CSS],[FONTAWESOME],[İMAGES],[JS],[OPENLİVESTREAMPUBS],[OPENLİVESTREAMSUBS],[TEMP],[UPLOADS] İSKELET DOSYALARINI SİLMEYİN WE DEĞİŞTİRMEYİN #}
{# TODO: İÇİNE ATICAĞINIZ TEMPLATE 'İ [TEMP] KLASÖRÜNÜN İÇİNE BİR KLASÖR AÇIP ORAYA ATINIZ #}
{# TODO: ATACAĞINIZ TEMPLATE 'İN LOGİNİ DEĞİLDE BAĞIMSIZ BİR LOGİN SAYFASI KULLANACAKSANIZ [TEMP/LOGİN_PAGE] KLASÖRÜNÜN İÇİNE ATINIZ #}
{# TODO: <-------------------------------------------------------------------------------------------------------------------------------------> SKELETON #}
", "layout/js.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/layout/js.html.twig");
    }
}
