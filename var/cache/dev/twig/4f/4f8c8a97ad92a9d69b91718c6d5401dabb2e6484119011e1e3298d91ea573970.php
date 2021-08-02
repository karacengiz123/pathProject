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

/* test2/index.html.twig */
class __TwigTemplate_e76cb1c55e3ce1c4004947f5cb0f141eae00dfa63f120f232112aa95cfecdb44 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'customScript' => [$this, 'block_customScript'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test2/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test2/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test2/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("homePage"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_customScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customScript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customScript"));

        // line 8
        echo "    <script>
        const pageVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#page',
            data: {
                test: function () {
                    let _this = this;
                    \$.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/api/login_check',
                        // url: 'https://api.hooop.de/api/login_check',
                        headers: {
                            'accept': \"application/json\",
                            'Content-Type': \"application/json\",
                        },
                        data: JSON.stringify({
                            // \"username\": \"kosan-ahmet@hotmail.de\",
                            // \"password\": \"Fener@1907\"
                            \"username\": \"test\",
                            \"password\": \"0123456\"
                        }),
                        success: function (data) {
                            console.log(data);
                            _this.token = data.token;
                        },
                        error: function (data) {
                            console.log(data.responseJSON);
                        }
                    });
                },
                test2: function () {
                    let _this = this;
                    \$.ajax({
                        type: 'POST',
                        url: '/tr/api/mobil-function/create-order',
                        headers: {
                            'Authorization': \"Bearer \" + _this.token,
                            'accept': \"application/json\",
                            'Content-Type': \"application/json\",
                        },
                        // data: JSON.stringify({
                        //     \"email\": \"test@test.com\"
                        // }),
                        data: JSON.stringify({
                            'quantity': 1,
                            'address': \"asdasdsaaaa\",
                            'product': 1,
                        }),
                        success: function (data) {
                            console.log(data);
                        },
                        error: function (data) {
                            console.log(data.responseJSON);
                        }
                    });
                },

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

    // line 79
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 80
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("homePage"), "html", null, true);
        echo "</h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test2/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 80,  168 => 79,  89 => 8,  79 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ \"homePage\"|trans }}{% endblock %}



{% block customScript %}
    <script>
        const pageVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#page',
            data: {
                test: function () {
                    let _this = this;
                    \$.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/api/login_check',
                        // url: 'https://api.hooop.de/api/login_check',
                        headers: {
                            'accept': \"application/json\",
                            'Content-Type': \"application/json\",
                        },
                        data: JSON.stringify({
                            // \"username\": \"kosan-ahmet@hotmail.de\",
                            // \"password\": \"Fener@1907\"
                            \"username\": \"test\",
                            \"password\": \"0123456\"
                        }),
                        success: function (data) {
                            console.log(data);
                            _this.token = data.token;
                        },
                        error: function (data) {
                            console.log(data.responseJSON);
                        }
                    });
                },
                test2: function () {
                    let _this = this;
                    \$.ajax({
                        type: 'POST',
                        url: '/tr/api/mobil-function/create-order',
                        headers: {
                            'Authorization': \"Bearer \" + _this.token,
                            'accept': \"application/json\",
                            'Content-Type': \"application/json\",
                        },
                        // data: JSON.stringify({
                        //     \"email\": \"test@test.com\"
                        // }),
                        data: JSON.stringify({
                            'quantity': 1,
                            'address': \"asdasdsaaaa\",
                            'product': 1,
                        }),
                        success: function (data) {
                            console.log(data);
                        },
                        error: function (data) {
                            console.log(data.responseJSON);
                        }
                    });
                },

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
    <h1>{{ \"homePage\"|trans }}</h1>
{% endblock %}
", "test2/index.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/test2/index.html.twig");
    }
}
