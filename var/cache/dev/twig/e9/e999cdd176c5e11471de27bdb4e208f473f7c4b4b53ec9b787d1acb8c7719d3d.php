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

/* base.html.twig */
class __TwigTemplate_e24f38ffe401169d23a9f150030e3e291c9efb0492769e49e67ff6dc11bb138f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'customMeta' => [$this, 'block_customMeta'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'customCss' => [$this, 'block_customCss'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'customScript' => [$this, 'block_customScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\">
<head>
    ";
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "layout/meta.html.twig");
        echo " ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        $this->displayBlock('customMeta', $context, $blocks);
        // line 10
        echo "
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title> ";
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    ";
        $this->displayBlock('customCss', $context, $blocks);
        echo " ";
        // line 22
        echo "</head>
<body>
<div id=\"headerVue\">
    ";
        // line 25
        echo twig_include($this->env, $context, "layout/header.html.twig");
        echo "
</div>
<div id=\"navVue\">
    ";
        // line 28
        echo twig_include($this->env, $context, "layout/nav_bar.html.twig");
        echo "
</div>
<div id=\"page\"> ";
        // line 31
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "</div>
<div id=\"footerVue\">
    ";
        // line 36
        echo twig_include($this->env, $context, "layout/footer.html.twig");
        echo "
</div>
";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('customScript', $context, $blocks);
        echo " ";
        // line 170
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_customMeta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customMeta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customMeta"));

        // line 8
        echo "        <meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, ($context["hostingName"] ?? null), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ($context["hostingName"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        ";
        // line 15
        echo "        ";
        echo twig_include($this->env, $context, "layout/css.html.twig");
        echo " ";
        // line 16
        echo "        ";
        // line 17
        echo "
        ";
        // line 19
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend/css/custom.css"), "html", null, true);
        echo "\" media=\"all\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_customCss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customCss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customCss"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    ";
        // line 40
        echo "    ";
        echo twig_include($this->env, $context, "layout/js.html.twig");
        // line 41
        echo "    ";
        // line 42
        echo "
    ";
        // line 44
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontend/js/custom.js"), "html", null, true);
        echo "\"></script>

    <script>
        const headerVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#headerVue',
            data: {},
            methods: {},
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {
                })
            }
        });
        const navVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#navVue',
            data: {},
            methods: {},
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {
                })
            }
        });
        const footerVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#footerVue',
            data: {},
            methods: {
                imageZoom: function (imgId, resultId) {
                    var img = \$(imgId),
                        imgSrc = img.attr(\"src\"),
                        result = \$(resultId);


                    var lens = \$(\"<div></div>\", {
                        \"class\": \"img-zoom-lens\"
                    }).prependTo(img.parent());

                    var cx = result.width() / lens.width(),
                        cy = result.height() / lens.height();


                    result.css({
                        \"background-image\": \"url(\" + imgSrc + \")\",
                        \"background-size\": img.width() * cx + \"px \" + img.height() * cy + \"px\",
                    });

                    lens.mousemove(lensMove);
                    img.mousemove(lensMove);

                    function lensMove(e) {
                        e.preventDefault();
                        var x = e.pageX,
                            y = e.pageY,
                            imageOffset = img.offset(),
                            boundXLeft = imageOffset.left,
                            boundXRight = imageOffset.left + img.width(),
                            boundYTop = imageOffset.top,
                            boundYBottom = imageOffset.top + img.height(),
                            lensWidth = lens.width(),
                            lensWidthHalf = lensWidth / 2,
                            lensHeight = lens.height(),
                            lensHeightHalf = lensHeight / 2;

                        if (x < boundXLeft + lensWidthHalf) {
                            x = boundXLeft + lensWidthHalf
                        }
                        if (x > boundXRight - lensWidthHalf) {
                            x = boundXRight - lensWidthHalf
                        }
                        if (y < boundYTop + lensHeightHalf) {
                            y = boundYTop + lensHeightHalf
                        }
                        if (y > boundYBottom - lensHeightHalf) {
                            y = boundYBottom - lensHeightHalf
                        }

                        lens.offset({
                            top: y - lensHeightHalf,
                            left: x - lensWidthHalf
                        });


                        x = x - boundXLeft - lensWidthHalf;
                        y = y - boundYTop - lensHeightHalf;

                        result.css(\"background-position\", \"-\" + x * cx + \"px -\" + y * cy + \"px\");

                    }
                },
                pleaseWaitProcessor: function() {
                    // TODO: BURADAKİ UYARI MESAJI DİLE GÖRE DEĞİŞECEK
                    swal.fire({
                        title: '";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pleaseWaitTitle"), "html", null, true);
        echo "',
                        html: '";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yourTransactionIsInProgress"), "html", null, true);
        echo "',
                        timer: 999999999,
                        allowOutsideClick: false,
                        closeOnClickOutside: false,
                        allowEscapeKey: false,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                priceMask: function (data) {
                    return accounting.formatMoney(data, {symbol: \"₺\", format: \"%v %s\"});
                },
            },
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {
                })
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_customScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customScript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customScript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 169,  372 => 144,  368 => 143,  265 => 44,  262 => 42,  260 => 41,  257 => 40,  255 => 39,  245 => 38,  234 => 32,  224 => 31,  206 => 21,  193 => 19,  190 => 17,  188 => 16,  184 => 15,  182 => 14,  172 => 13,  153 => 11,  140 => 8,  130 => 7,  118 => 170,  115 => 169,  112 => 168,  110 => 38,  105 => 36,  101 => 34,  98 => 31,  93 => 28,  87 => 25,  82 => 22,  78 => 21,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 7,  62 => 6,  58 => 5,  53 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ locale }}\">
<head>
    {# TODO: PAGE META SKELETON START #}
    {{ include('layout/meta.html.twig') }} {# TODO: META 'LARINIZI META.HTML 'İN İÇİNE YAZINIZ #}
    {# TODO: PAGE META SKELETON STOP #}
    {% block customMeta %}
        <meta name=\"description\" content=\"{{ hostingName }}\">
    {% endblock %}

    <title>{% block title %}{{ hostingName }}{% endblock %}</title> {# TODO: ÇALIŞAN SAYFAYIN TİTLE 'INI DEĞİŞTİRMEK İÇİN BU BULOĞU ÇAĞIRARAK DEĞİŞTİRİNİZ #}

    {% block stylesheets %}
        {# TODO: PAGE CSS SKELETON START #}
        {{ include('layout/css.html.twig') }} {# TODO: CSS 'LERİNİZİ CSS.HTML 'İN İÇİNE ---SKELETON 'NUN ALTINA YAZINIZ #}
        {# TODO: PAGE CSS SKELETON STOP #}

        {# TODO: CUSTOM.CSS HER ZAMAN EN ALTTA KALSIN --- BURAYA TÜM PROJEDE EVRENSEL OLAN CSS 'LERİNİZİ YAZINIZ #}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/frontend/css/custom.css') }}\" media=\"all\"/>
    {% endblock %}
    {% block customCss %}{% endblock %} {# TODO: SADECE ÇALIŞILAN SAYFA İÇİN OLACAK CSS DEĞİŞİKLİKLERİNİ BU BLOĞU ÇAĞIRARAK YAZINIZ #}
</head>
<body>
<div id=\"headerVue\">
    {{ include('layout/header.html.twig') }}
</div>
<div id=\"navVue\">
    {{ include('layout/nav_bar.html.twig') }}
</div>
<div id=\"page\"> {# TODO: PAGE İD 'SİNİ DEĞİŞTİRMEYİN VUE.JS 'İN BÜTÜN SAYFAYI ETKİLEYEBİLMESİ İÇİN BU İD 'Yİ KULLANIYORUZ #}
    {% block body %}

    {% endblock %}
</div>
<div id=\"footerVue\">
    {{ include('layout/footer.html.twig') }}
</div>
{% block javascripts %}
    {# TODO: PAGE JS SKELETON START #}
    {{ include('layout/js.html.twig') }}{# TODO: JS 'LERİNİZİ JS.HTML 'İN İÇİNE ---SKELETON 'NUN ALTINA YAZINIZ #}
    {# TODO: PAGE JS SKELETON STOP #}

    {# TODO: CUSTOM.JS WE ROUTE START/STOP KOD BLOĞU HER ZAMAN EN ALTTA KALSIN --- BURAYA TÜM PROJEDE EVRENSEL OLAN JS 'LERİNİZİ YAZINIZ #}
    <script type=\"text/javascript\" src=\"{{ asset('assets/frontend/js/custom.js') }}\"></script>

    <script>
        const headerVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#headerVue',
            data: {},
            methods: {},
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {
                })
            }
        });
        const navVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#navVue',
            data: {},
            methods: {},
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {
                })
            }
        });
        const footerVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#footerVue',
            data: {},
            methods: {
                imageZoom: function (imgId, resultId) {
                    var img = \$(imgId),
                        imgSrc = img.attr(\"src\"),
                        result = \$(resultId);


                    var lens = \$(\"<div></div>\", {
                        \"class\": \"img-zoom-lens\"
                    }).prependTo(img.parent());

                    var cx = result.width() / lens.width(),
                        cy = result.height() / lens.height();


                    result.css({
                        \"background-image\": \"url(\" + imgSrc + \")\",
                        \"background-size\": img.width() * cx + \"px \" + img.height() * cy + \"px\",
                    });

                    lens.mousemove(lensMove);
                    img.mousemove(lensMove);

                    function lensMove(e) {
                        e.preventDefault();
                        var x = e.pageX,
                            y = e.pageY,
                            imageOffset = img.offset(),
                            boundXLeft = imageOffset.left,
                            boundXRight = imageOffset.left + img.width(),
                            boundYTop = imageOffset.top,
                            boundYBottom = imageOffset.top + img.height(),
                            lensWidth = lens.width(),
                            lensWidthHalf = lensWidth / 2,
                            lensHeight = lens.height(),
                            lensHeightHalf = lensHeight / 2;

                        if (x < boundXLeft + lensWidthHalf) {
                            x = boundXLeft + lensWidthHalf
                        }
                        if (x > boundXRight - lensWidthHalf) {
                            x = boundXRight - lensWidthHalf
                        }
                        if (y < boundYTop + lensHeightHalf) {
                            y = boundYTop + lensHeightHalf
                        }
                        if (y > boundYBottom - lensHeightHalf) {
                            y = boundYBottom - lensHeightHalf
                        }

                        lens.offset({
                            top: y - lensHeightHalf,
                            left: x - lensWidthHalf
                        });


                        x = x - boundXLeft - lensWidthHalf;
                        y = y - boundYTop - lensHeightHalf;

                        result.css(\"background-position\", \"-\" + x * cx + \"px -\" + y * cy + \"px\");

                    }
                },
                pleaseWaitProcessor: function() {
                    // TODO: BURADAKİ UYARI MESAJI DİLE GÖRE DEĞİŞECEK
                    swal.fire({
                        title: '{{ \"pleaseWaitTitle\"|trans }}',
                        html: '{{ \"yourTransactionIsInProgress\"|trans }}',
                        timer: 999999999,
                        allowOutsideClick: false,
                        closeOnClickOutside: false,
                        allowEscapeKey: false,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                priceMask: function (data) {
                    return accounting.formatMoney(data, {symbol: \"₺\", format: \"%v %s\"});
                },
            },
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {
                })
            }
        });
    </script>
{% endblock %}

{% block customScript %}{% endblock %} {# TODO: SADECE ÇALIŞILAN SAYFA İÇİN OLACAK JS DEĞİŞİKLİKLERİNİ BU BLOĞU ÇAĞIRARAK YAZINIZ #}
</body>
</html>
", "base.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/base.html.twig");
    }
}
