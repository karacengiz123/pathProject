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

/* backend_layout/js.html.twig */
class __TwigTemplate_82a6931225422e026d9d3d1d4df187dbc4d8bd439a56666d3df1864062b10c2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/js.html.twig"));

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
        // line 22
        echo "<script src=\"";
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
        // line 43
        echo "
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/js/waves.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/toast-master/js/jquery.toast.js"), "html", null, true);
        echo "\"></script>
<!-- This is data table -->
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sweet-Alert  -->
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/sweetalert2/sweet-alert.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/moment/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/dropify/dist/js/dropify.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/toast-master/js/jquery.toast.js"), "html", null, true);
        echo "\"></script>
<!-- Magnific popup JavaScript -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"), "html", null, true);
        echo "\"></script>
<!-- icheck -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/icheck/icheck.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/inputmask/dist/min/jquery.inputmask.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/js/pages/mask.init.js"), "html", null, true);
        echo "\"></script>
";
        // line 74
        if ((isset($context["includeMorris"]) || array_key_exists("includeMorris", $context))) {
            // line 75
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/assets/node_modules/morrisjs/morris.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/themes/eliteadmin/eliteadmin/dist/js/dashboard1.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 78
        echo "

<!-- start - This is for export functionality only -->
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js\"></script>
<!-- end - This is for export functionality only -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend_layout/js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 78,  256 => 76,  251 => 75,  249 => 74,  245 => 73,  241 => 72,  237 => 71,  233 => 70,  228 => 68,  224 => 67,  219 => 65,  215 => 64,  211 => 63,  207 => 62,  203 => 61,  199 => 60,  195 => 59,  190 => 57,  186 => 56,  181 => 54,  177 => 53,  173 => 52,  169 => 51,  165 => 50,  161 => 49,  157 => 48,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  138 => 43,  127 => 30,  123 => 29,  119 => 28,  115 => 27,  111 => 26,  106 => 24,  102 => 23,  97 => 22,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  57 => 8,  53 => 7,  48 => 5,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#<script src=\"{{ asset('assets/fixedPlugins/bootstrap/js/bootstrap4.min.js') }}\"></script>#}
{#<script src=\"{{ asset('assets/fixedPlugins/bootstrap/js/bootstrap4.popper.min.js') }}\"></script>#}
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
{#<script src=\"{{ asset('assets/fixedPlugins/moment/js/moment.js') }}\"></script>#}
{#<script src=\"{{ asset('assets/fixedPlugins/morris/js/morris.min.js') }}\"></script>#}
{#<script src=\"{{ asset('assets/fixedPlugins/sweetalert2/js/sweetalert2.all.min.js') }}\"></script>#}
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

<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/popper/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/js/perfect-scrollbar.jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/js/waves.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/js/sidebarmenu.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/js/custom.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/skycons/skycons.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/raphael/raphael-min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/toast-master/js/jquery.toast.js') }}\"></script>
<!-- This is data table -->
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js') }}\"></script>
<!-- Sweet-Alert  -->
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/sweetalert2/sweet-alert.init.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/moment/moment.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/switchery/dist/switchery.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/dropify/dist/js/dropify.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/toast-master/js/jquery.toast.js') }}\"></script>
<!-- Magnific popup JavaScript -->
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}\"></script>
<!-- icheck -->
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/icheck/icheck.min.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/icheck/icheck.init.js') }}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}\"></script>
<script src=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/js/pages/mask.init.js') }}\"></script>
{% if includeMorris is defined %}
    <script src=\"{{ asset('assets/themes/eliteadmin/assets/node_modules/morrisjs/morris.js') }}\"></script>
    <script src=\"{{ asset('assets/themes/eliteadmin/eliteadmin/dist/js/dashboard1.js') }}\"></script>
{% endif %}


<!-- start - This is for export functionality only -->
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js\"></script>
<script src=\"https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js\"></script>
<!-- end - This is for export functionality only -->
", "backend_layout/js.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/backend_layout/js.html.twig");
    }
}
