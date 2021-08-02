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

/* error_Page/error_page.html.twig */
class __TwigTemplate_6d0a91d104beb69d28e36c4716e70f047881e58c5f8e6d103b9e16ec294cfaed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error_Page/error_page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error_Page/error_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "error_Page/error_page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_customScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customScript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customScript"));

        // line 3
        echo "    <script>
        const pageVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#page',
            data: {
                exception: `";
        // line 8
        echo ($context["exception"] ?? null);
        echo "`,
                fk: `";
        // line 9
        echo ($context["fk"] ?? null);
        echo "`,
                searchResult: ''
            },
            methods: {
                myFunction: function () {
                    let _this = this;
                    // _this.searchResult= _this.exception.indexOf(\"foreign key\");
                    let index = _this.exception.indexOf('a foreign key');
                    if (index > -1) {
                        _this.searchResult = `The field you are trying to delete is used in another table.<br> (Relational Code:` + _this.fk + `)`;
                    } else {
                        _this.searchResult = _this.exception;
                    }
                }
            },
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {
                    _this.myFunction();
                })
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <div class=\"list-sfs-holder\">
        <div>
            <div>
                <img style=\"position: absolute; width: 100%!important; height: 100%!important; left: 0!important; right: 0!important; bottom: 0!important; top: 180px!important;\"
                     src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/backend/images/errorOpps.jpg"), "html", null, true);
        echo "\">
                <h4 style=\"position: relative; padding: 320px!important; color: red!important; padding-left: 280px!important;\">
                    <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("errorPageTitle"), "html", null, true);
        echo "</span><br>
                    <br>
                    <b>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("exceptionMessage"), "html", null, true);
        echo ": </b><br/>
                    <b v-html=\"searchResult\"></b><br/>
                </h4>
            </div>
            <div class=\"alert alert-error\" style=\"position: relative;\">
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "error_Page/error_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  137 => 42,  132 => 40,  126 => 36,  116 => 35,  80 => 9,  76 => 8,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block customScript %}
    <script>
        const pageVue = new Vue({
            delimiters: ['\${', '}'],
            el: '#page',
            data: {
                exception: `{{ exception|raw }}`,
                fk: `{{ fk|raw }}`,
                searchResult: ''
            },
            methods: {
                myFunction: function () {
                    let _this = this;
                    // _this.searchResult= _this.exception.indexOf(\"foreign key\");
                    let index = _this.exception.indexOf('a foreign key');
                    if (index > -1) {
                        _this.searchResult = `The field you are trying to delete is used in another table.<br> (Relational Code:` + _this.fk + `)`;
                    } else {
                        _this.searchResult = _this.exception;
                    }
                }
            },
            computed: {},
            watch: {},
            created() {
                let _this = this;
                \$(document).ready(function () {
                    _this.myFunction();
                })
            }
        });
    </script>
{% endblock %}
{% block body %}
    <div class=\"list-sfs-holder\">
        <div>
            <div>
                <img style=\"position: absolute; width: 100%!important; height: 100%!important; left: 0!important; right: 0!important; bottom: 0!important; top: 180px!important;\"
                     src=\"{{ asset('assets/backend/images/errorOpps.jpg') }}\">
                <h4 style=\"position: relative; padding: 320px!important; color: red!important; padding-left: 280px!important;\">
                    <span>{{ \"errorPageTitle\"|trans }}</span><br>
                    <br>
                    <b>{{ \"exceptionMessage\"|trans }}: </b><br/>
                    <b v-html=\"searchResult\"></b><br/>
                </h4>
            </div>
            <div class=\"alert alert-error\" style=\"position: relative;\">
            </div>
        </div>
    </div>
{% endblock %}
", "error_Page/error_page.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/error_Page/error_page.html.twig");
    }
}
