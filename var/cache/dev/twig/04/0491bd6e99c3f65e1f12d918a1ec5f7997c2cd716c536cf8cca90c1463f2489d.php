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

/* backend_base.html.twig */
class __TwigTemplate_57ba6262a621b818a2bfdb7828b77becdee7c84f76dde5996240424ae8baf666 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_base.html.twig"));

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
        echo twig_include($this->env, $context, "backend_layout/meta.html.twig");
        echo " ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        $this->displayBlock('customMeta', $context, $blocks);
        // line 8
        echo "
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title> ";
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('customCss', $context, $blocks);
        echo " ";
        // line 21
        echo "</head>
<body class=\"skin-default fixed-layout\">
";
        // line 23
        $context["baseChangeUriData"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 23), "requestUri", [], "any", false, false, false, 23), 4, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 23), "requestUri", [], "any", false, false, false, 23)));
        // line 24
        echo "    <div id=\"main-wrapper\">
        ";
        // line 25
        if ( !(isset($context["notInclude"]) || array_key_exists("notInclude", $context))) {
            // line 26
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) != "fos_user_security_login")) {
                // line 27
                echo "                <div id=\"headerVue\">
                    ";
                // line 28
                echo twig_include($this->env, $context, "backend_layout/header.html.twig");
                echo "
                </div>
                <div id=\"sidebarVue\">
                    ";
                // line 31
                echo twig_include($this->env, $context, "backend_layout/sidebar.html.twig");
                echo "
                </div>
            ";
            }
            // line 34
            echo "        ";
        }
        // line 35
        echo "        <div id=\"page\"> ";
        // line 36
        echo "            ";
        if ( !(isset($context["notInclude"]) || array_key_exists("notInclude", $context))) {
            // line 37
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "attributes", [], "any", false, false, false, 37), "get", [0 => "_route"], "method", false, false, false, 37) != "fos_user_security_login")) {
                // line 38
                echo "                    <div class=\"page-wrapper\">
                        <div class=\"container-fluid\">
                ";
            }
            // line 41
            echo "            ";
        }
        // line 42
        echo "                            ";
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            ";
        if ( !(isset($context["notInclude"]) || array_key_exists("notInclude", $context))) {
            // line 45
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45) != "fos_user_security_login")) {
                // line 46
                echo "                        </div>
                    </div>
                ";
            }
            // line 49
            echo "            ";
        }
        // line 50
        echo "        </div>
    </div>
    ";
        // line 52
        if ( !(isset($context["notInclude"]) || array_key_exists("notInclude", $context))) {
            // line 53
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 53), "attributes", [], "any", false, false, false, 53), "get", [0 => "_route"], "method", false, false, false, 53) != "fos_user_security_login")) {
                // line 54
                echo "            <div id=\"footerVue\">
                ";
                // line 55
                echo twig_include($this->env, $context, "backend_layout/footer.html.twig");
                echo "
                ";
                // line 56
                echo twig_include($this->env, $context, "backend_layout/image_zoom_modal.html.twig");
                echo "
            </div>
        ";
            }
            // line 59
            echo "    ";
        }
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 190
        $this->displayBlock('customScript', $context, $blocks);
        echo " ";
        // line 191
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
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

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        ";
        echo twig_include($this->env, $context, "backend_layout/css.html.twig");
        echo " ";
        // line 14
        echo "        ";
        // line 15
        echo "
        ";
        // line 17
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/backend/css/custom.css"), "html", null, true);
        echo "\" media=\"all\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
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

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        // line 63
        echo "    ";
        echo twig_include($this->env, $context, "backend_layout/js.html.twig");
        // line 64
        echo "    ";
        // line 65
        echo "
    ";
        // line 67
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/backend/js/custom.js"), "html", null, true);
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
        const sidebarVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#sidebarVue',
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
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pleaseWaitTitle"), "html", null, true);
        echo "',
                        html: '";
        // line 166
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

    // line 190
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
        return "backend_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 190,  429 => 166,  425 => 165,  323 => 67,  320 => 65,  318 => 64,  315 => 63,  313 => 62,  303 => 61,  293 => 43,  283 => 42,  265 => 20,  252 => 17,  249 => 15,  247 => 14,  243 => 13,  241 => 12,  231 => 11,  212 => 9,  194 => 7,  182 => 191,  179 => 190,  177 => 61,  174 => 60,  171 => 59,  165 => 56,  161 => 55,  158 => 54,  155 => 53,  153 => 52,  149 => 50,  146 => 49,  141 => 46,  138 => 45,  135 => 44,  132 => 42,  129 => 41,  124 => 38,  121 => 37,  118 => 36,  116 => 35,  113 => 34,  107 => 31,  101 => 28,  98 => 27,  95 => 26,  93 => 25,  90 => 24,  88 => 23,  84 => 21,  81 => 20,  78 => 19,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  62 => 6,  58 => 5,  53 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ locale }}\">
<head>
    {# TODO: PAGE META SKELETON START #}
    {{ include('backend_layout/meta.html.twig') }} {# TODO: META 'LARINIZI META.HTML 'İN İÇİNE YAZINIZ #}
    {# TODO: PAGE META SKELETON STOP #}
    {% block customMeta %}{% endblock %}

    <title>{% block title %}{{ hostingName }}{% endblock %}</title> {# TODO: ÇALIŞAN SAYFAYIN TİTLE 'INI DEĞİŞTİRMEK İÇİN BU BULOĞU ÇAĞIRARAK DEĞİŞTİRİNİZ #}

    {% block stylesheets %}
        {# TODO: PAGE CSS SKELETON START #}
        {{ include('backend_layout/css.html.twig') }} {# TODO: CSS 'LERİNİZİ CSS.HTML 'İN İÇİNE ---SKELETON 'NUN ALTINA YAZINIZ #}
        {# TODO: PAGE CSS SKELETON STOP #}

        {# TODO: CUSTOM.CSS HER ZAMAN EN ALTTA KALSIN --- BURAYA TÜM PROJEDE EVRENSEL OLAN CSS 'LERİNİZİ YAZINIZ #}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/backend/css/custom.css') }}\" media=\"all\"/>
    {% endblock %}

    {% block customCss %}{% endblock %} {# TODO: SADECE ÇALIŞILAN SAYFA İÇİN OLACAK CSS DEĞİŞİKLİKLERİNİ BU BLOĞU ÇAĞIRARAK YAZINIZ #}
</head>
<body class=\"skin-default fixed-layout\">
{% set baseChangeUriData = app.request.requestUri|slice(4,app.request.requestUri|length) %}
    <div id=\"main-wrapper\">
        {% if notInclude is not defined %}
            {% if app.request.attributes.get(\"_route\") != \"fos_user_security_login\" %}
                <div id=\"headerVue\">
                    {{ include('backend_layout/header.html.twig') }}
                </div>
                <div id=\"sidebarVue\">
                    {{ include('backend_layout/sidebar.html.twig') }}
                </div>
            {% endif %}
        {% endif %}
        <div id=\"page\"> {# TODO: PAGE İD 'SİNİ DEĞİŞTİRMEYİN VUE.JS 'İN BÜTÜN SAYFAYI ETKİLEYEBİLMESİ İÇİN BU İD 'Yİ KULLANIYORUZ #}
            {% if notInclude is not defined %}
                {% if app.request.attributes.get(\"_route\") != \"fos_user_security_login\" %}
                    <div class=\"page-wrapper\">
                        <div class=\"container-fluid\">
                {% endif %}
            {% endif %}
                            {% block body %}
                            {% endblock %}
            {% if notInclude is not defined %}
                {% if app.request.attributes.get(\"_route\") != \"fos_user_security_login\" %}
                        </div>
                    </div>
                {% endif %}
            {% endif %}
        </div>
    </div>
    {% if notInclude is not defined %}
        {% if app.request.attributes.get(\"_route\") != \"fos_user_security_login\" %}
            <div id=\"footerVue\">
                {{ include('backend_layout/footer.html.twig') }}
                {{ include('backend_layout/image_zoom_modal.html.twig') }}
            </div>
        {% endif %}
    {% endif %}

{% block javascripts %}
    {# TODO: PAGE JS SKELETON START #}
    {{ include('backend_layout/js.html.twig') }}{# TODO: JS 'LERİNİZİ JS.HTML 'İN İÇİNE ---SKELETON 'NUN ALTINA YAZINIZ #}
    {# TODO: PAGE JS SKELETON STOP #}

    {# TODO: CUSTOM.JS WE ROUTE START/STOP KOD BLOĞU HER ZAMAN EN ALTTA KALSIN --- BURAYA TÜM PROJEDE EVRENSEL OLAN JS 'LERİNİZİ YAZINIZ #}
    <script type=\"text/javascript\" src=\"{{ asset('assets/backend/js/custom.js') }}\"></script>
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
        const sidebarVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#sidebarVue',
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
", "backend_base.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/backend_base.html.twig");
    }
}
