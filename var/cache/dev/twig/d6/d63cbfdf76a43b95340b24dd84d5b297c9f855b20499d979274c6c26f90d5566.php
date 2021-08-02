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

/* batman/index.html.twig */
class __TwigTemplate_f983c0e7fee4c55ec19d713e406968f9d0e5899bb73f1891cf091327e42cc29d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'customCss' => [$this, 'block_customCss'],
            'customScript' => [$this, 'block_customScript'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "batman/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "batman/index.html.twig"));

        $this->parent = $this->loadTemplate("backend_base.html.twig", "batman/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batmanList"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_customCss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customCss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customCss"));

        // line 5
        echo "    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .inner {
            display: table;
            margin: 0 auto;
            border-radius: 25px !important;
        }

        .inner > img {
            -moz-border-radius-topleft: 25px !important;
            -moz-border-radius-topright: 25px !important;
        }

        .outer {
            width: 100%;
            margin-top: 10px !important;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_customScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customScript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customScript"));

        // line 41
        echo "    <script>
        const pageVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#page',
            data: {
                batmans: ";
        // line 46
        echo ($context["batmans"] ?? null);
        echo "
            },
            methods: {},
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {

                })
            }
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "    <div style=\"text-align: center\">
        <h1>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batmanGameList"), "html", null, true);
        echo "</h1>
        <hr>
    </div>

    <div class=\"row col-md-n12\">
        <div class=\"col col-md-3 outer\" v-for=\"batman in batmans\" style=\"height: 350px; display: flex; \">
            <div class=\" card inner\" style=\"width: 283px; position:relative;\">
               <div>
                   <img :src=\"batman.thumb\" style=\"height:150px;width: 283px; border-top-left-radius: 25px!important; border-top-right-radius: 25px!important\">
                   <div style=\"margin-top: 10px; padding: 10px; bottom: 10px;\">
                       \${ batman.title }
                   </div>
                   <div style=\"margin-top: 10px; position: absolute; bottom: 40px;\">
                       <span style=\"padding: 10px; color: red\">\${ batman.discountRate } indirim</span>
                   </div>
               </div>
                <div class=\"col-sm-12 row\" style=\"position: absolute; bottom: 10px;\">
                    <div class=\"col-sm-4\" style=\"float: left\">
                        <span style=\"font-size: large\"> \${ batman.salePrice } ₺</span>
                    </div>
                    <div class=\"col-sm-4\" style=\"float: left\">
                        <span style=\"text-decoration: line-through; color: red; \"> \${ batman.normalPrice } ₺</span>
                    </div>
                    <div class=\"col-sm-4\" style=\"float: left\">
                        <button class=\"btn btn-sm btn-success\" style=\"float: right\"> ORDER</button>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 93
        echo "        ";
        // line 94
        echo "        ";
        // line 95
        echo "        ";
        // line 96
        echo "        ";
        // line 97
        echo "        ";
        // line 98
        echo "        ";
        // line 99
        echo "        ";
        // line 100
        echo "
        ";
        // line 102
        echo "        ";
        // line 103
        echo "        ";
        // line 104
        echo "        ";
        // line 105
        echo "        ";
        // line 106
        echo "        ";
        // line 107
        echo "        ";
        // line 108
        echo "        ";
        // line 109
        echo "        ";
        // line 110
        echo "        ";
        // line 111
        echo "
        ";
        // line 113
        echo "        ";
        // line 114
        echo "        ";
        // line 115
        echo "        ";
        // line 116
        echo "        ";
        // line 117
        echo "        ";
        // line 118
        echo "        ";
        // line 119
        echo "        ";
        // line 120
        echo "        ";
        // line 121
        echo "        ";
        // line 122
        echo "
        ";
        // line 124
        echo "        ";
        // line 125
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "batman/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 125,  276 => 124,  273 => 122,  271 => 121,  269 => 120,  267 => 119,  265 => 118,  263 => 117,  261 => 116,  259 => 115,  257 => 114,  255 => 113,  252 => 111,  250 => 110,  248 => 109,  246 => 108,  244 => 107,  242 => 106,  240 => 105,  238 => 104,  236 => 103,  234 => 102,  231 => 100,  229 => 99,  227 => 98,  225 => 97,  223 => 96,  221 => 95,  219 => 94,  217 => 93,  185 => 63,  182 => 62,  172 => 61,  148 => 46,  141 => 41,  131 => 40,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"backend_base.html.twig\" %}

{% block title %}{{ \"batmanList\"|trans }}{% endblock %}
{% block customCss %}
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .inner {
            display: table;
            margin: 0 auto;
            border-radius: 25px !important;
        }

        .inner > img {
            -moz-border-radius-topleft: 25px !important;
            -moz-border-radius-topright: 25px !important;
        }

        .outer {
            width: 100%;
            margin-top: 10px !important;
        }
    </style>
{% endblock %}



{% block customScript %}
    <script>
        const pageVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#page',
            data: {
                batmans: {{ batmans|raw }}
            },
            methods: {},
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {

                })
            }
        })
    </script>
{% endblock %}

{% block body %}
    <div style=\"text-align: center\">
        <h1>{{ \"batmanGameList\"|trans }}</h1>
        <hr>
    </div>

    <div class=\"row col-md-n12\">
        <div class=\"col col-md-3 outer\" v-for=\"batman in batmans\" style=\"height: 350px; display: flex; \">
            <div class=\" card inner\" style=\"width: 283px; position:relative;\">
               <div>
                   <img :src=\"batman.thumb\" style=\"height:150px;width: 283px; border-top-left-radius: 25px!important; border-top-right-radius: 25px!important\">
                   <div style=\"margin-top: 10px; padding: 10px; bottom: 10px;\">
                       \${ batman.title }
                   </div>
                   <div style=\"margin-top: 10px; position: absolute; bottom: 40px;\">
                       <span style=\"padding: 10px; color: red\">\${ batman.discountRate } indirim</span>
                   </div>
               </div>
                <div class=\"col-sm-12 row\" style=\"position: absolute; bottom: 10px;\">
                    <div class=\"col-sm-4\" style=\"float: left\">
                        <span style=\"font-size: large\"> \${ batman.salePrice } ₺</span>
                    </div>
                    <div class=\"col-sm-4\" style=\"float: left\">
                        <span style=\"text-decoration: line-through; color: red; \"> \${ batman.normalPrice } ₺</span>
                    </div>
                    <div class=\"col-sm-4\" style=\"float: left\">
                        <button class=\"btn btn-sm btn-success\" style=\"float: right\"> ORDER</button>
                    </div>
                </div>
            </div>
        </div>
        {# <div class=\"col px-md-3 outer\"> #}
        {# <div class=\" card p-12 border bg-ligh inner\" style=\"width: 183px\"> #}
        {# <img src=\"https://cdn.cloudflare.steamstatic.com/steam/apps/208650/capsule_sm_120.jpg?t=1591738126\" height=\"100px\"> #}
        {# Custom column padding #}
        {# <div> #}
        {# <span>aaa</span> #}
        {# <span>bbbb</span> #}
        {# </div> #}

        {# </div> #}
        {# </div> #}
        {# <div class=\"col px-md-3 outer\"> #}
        {# <div class=\" card p-12 border bg-ligh inner\" style=\"width: 183px\"> #}
        {# <img src=\"https://cdn.cloudflare.steamstatic.com/steam/apps/208650/capsule_sm_120.jpg?t=1591738126\" height=\"100px\"> #}
        {# Custom column padding #}
        {# <div> #}
        {# <span>aaa</span> #}
        {# <span>bbbb</span> #}
        {# </div> #}

        {# </div> #}
        {# </div> #}
        {# <div class=\"col px-md-3 outer\"> #}
        {# <div class=\" card p-12 border bg-ligh inner\" style=\"width: 183px\"> #}
        {# <img src=\"https://cdn.cloudflare.steamstatic.com/steam/apps/208650/capsule_sm_120.jpg?t=1591738126\" height=\"100px\"> #}
        {# Custom column padding #}
        {# <div> #}
        {# <span>aaa</span> #}
        {# <span>bbbb</span> #}
        {# </div> #}

        {# </div> #}
        {# </div> #}
    </div>
{% endblock %}
", "batman/index.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/batman/index.html.twig");
    }
}
