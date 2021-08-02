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

/* SgDatatablesBundle:datatable:events.html.twig */
class __TwigTemplate_5449b0865b1ef22455c4f6ad37b988483d2dc218080b578dcc21a970e1e71fa2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:events.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:events.html.twig"));

        // line 9
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 9), "columnSizing", [], "any", false, false, false, 9) === null)) {
            // line 10
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 10), "columnSizing", [], "any", false, true, false, 10), "vars", [], "array", true, true, false, 10)) {
                // line 11
                echo "        ";
                $context["vars"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 11), "columnSizing", [], "any", false, false, false, 11)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["vars"] ?? null) : null);
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "        ";
                $context["vars"] = [];
                // line 14
                echo "    ";
            }
            // line 15
            echo "    .on('column-sizing.dt', ";
            $this->loadTemplate((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 15), "columnSizing", [], "any", false, false, false, 15)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 15)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 17
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 17), "columnVisibility", [], "any", false, false, false, 17) === null)) {
            // line 18
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 18), "columnVisibility", [], "any", false, true, false, 18), "vars", [], "array", true, true, false, 18)) {
                // line 19
                echo "        ";
                $context["vars"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 19), "columnVisibility", [], "any", false, false, false, 19)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["vars"] ?? null) : null);
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["vars"] = [];
                // line 22
                echo "    ";
            }
            // line 23
            echo "    .on('column-visibility.dt', ";
            $this->loadTemplate((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 23), "columnVisibility", [], "any", false, false, false, 23)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 23)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 25
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 25), "destroy", [], "any", false, false, false, 25) === null)) {
            // line 26
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 26), "destroy", [], "any", false, true, false, 26), "vars", [], "array", true, true, false, 26)) {
                // line 27
                echo "        ";
                $context["vars"] = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 27), "destroy", [], "any", false, false, false, 27)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["vars"] ?? null) : null);
                // line 28
                echo "    ";
            } else {
                // line 29
                echo "        ";
                $context["vars"] = [];
                // line 30
                echo "    ";
            }
            // line 31
            echo "    .on('destroy.dt', ";
            $this->loadTemplate((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 31), "destroy", [], "any", false, false, false, 31)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 31)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 33
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 33), "error", [], "any", false, false, false, 33) === null)) {
            // line 34
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 34), "error", [], "any", false, true, false, 34), "vars", [], "array", true, true, false, 34)) {
                // line 35
                echo "        ";
                $context["vars"] = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 35), "error", [], "any", false, false, false, 35)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["vars"] ?? null) : null);
                // line 36
                echo "    ";
            } else {
                // line 37
                echo "        ";
                $context["vars"] = [];
                // line 38
                echo "    ";
            }
            // line 39
            echo "    .on('error.dt', ";
            $this->loadTemplate((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 39), "error", [], "any", false, false, false, 39)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 39)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 41
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 41), "length", [], "any", false, false, false, 41) === null)) {
            // line 42
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 42), "length", [], "any", false, true, false, 42), "vars", [], "array", true, true, false, 42)) {
                // line 43
                echo "        ";
                $context["vars"] = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 43), "length", [], "any", false, false, false, 43)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["vars"] ?? null) : null);
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "        ";
                $context["vars"] = [];
                // line 46
                echo "    ";
            }
            // line 47
            echo "    .on('length.dt', ";
            $this->loadTemplate((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 47), "length", [], "any", false, false, false, 47)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 47)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 49
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 49), "order", [], "any", false, false, false, 49) === null)) {
            // line 50
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 50), "order", [], "any", false, true, false, 50), "vars", [], "array", true, true, false, 50)) {
                // line 51
                echo "        ";
                $context["vars"] = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 51), "order", [], "any", false, false, false, 51)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["vars"] ?? null) : null);
                // line 52
                echo "    ";
            } else {
                // line 53
                echo "        ";
                $context["vars"] = [];
                // line 54
                echo "    ";
            }
            // line 55
            echo "    .on('order.dt', ";
            $this->loadTemplate((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 55), "order", [], "any", false, false, false, 55)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 55)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 57
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 57), "page", [], "any", false, false, false, 57) === null)) {
            // line 58
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 58), "page", [], "any", false, true, false, 58), "vars", [], "array", true, true, false, 58)) {
                // line 59
                echo "        ";
                $context["vars"] = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 59), "page", [], "any", false, false, false, 59)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["vars"] ?? null) : null);
                // line 60
                echo "    ";
            } else {
                // line 61
                echo "        ";
                $context["vars"] = [];
                // line 62
                echo "    ";
            }
            // line 63
            echo "    .on('page.dt', ";
            $this->loadTemplate((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 63), "page", [], "any", false, false, false, 63)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 63)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 65
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 65), "preInit", [], "any", false, false, false, 65) === null)) {
            // line 66
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 66), "preInit", [], "any", false, true, false, 66), "vars", [], "array", true, true, false, 66)) {
                // line 67
                echo "        ";
                $context["vars"] = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 67), "preInit", [], "any", false, false, false, 67)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["vars"] ?? null) : null);
                // line 68
                echo "    ";
            } else {
                // line 69
                echo "        ";
                $context["vars"] = [];
                // line 70
                echo "    ";
            }
            // line 71
            echo "    .on('preInit.dt', ";
            $this->loadTemplate((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 71), "preInit", [], "any", false, false, false, 71)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 71)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 73
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 73), "preXhr", [], "any", false, false, false, 73) === null)) {
            // line 74
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 74), "preXhr", [], "any", false, true, false, 74), "vars", [], "array", true, true, false, 74)) {
                // line 75
                echo "        ";
                $context["vars"] = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 75), "preXhr", [], "any", false, false, false, 75)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["vars"] ?? null) : null);
                // line 76
                echo "    ";
            } else {
                // line 77
                echo "        ";
                $context["vars"] = [];
                // line 78
                echo "    ";
            }
            // line 79
            echo "    .on('preXhr.dt', ";
            $this->loadTemplate((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 79), "preXhr", [], "any", false, false, false, 79)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 79)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 81
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 81), "processing", [], "any", false, false, false, 81) === null)) {
            // line 82
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 82), "processing", [], "any", false, true, false, 82), "vars", [], "array", true, true, false, 82)) {
                // line 83
                echo "        ";
                $context["vars"] = (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 83), "processing", [], "any", false, false, false, 83)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["vars"] ?? null) : null);
                // line 84
                echo "    ";
            } else {
                // line 85
                echo "        ";
                $context["vars"] = [];
                // line 86
                echo "    ";
            }
            // line 87
            echo "    .on('processing.dt', ";
            $this->loadTemplate((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 87), "processing", [], "any", false, false, false, 87)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 87)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 89
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 89), "search", [], "any", false, false, false, 89) === null)) {
            // line 90
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 90), "search", [], "any", false, true, false, 90), "vars", [], "array", true, true, false, 90)) {
                // line 91
                echo "        ";
                $context["vars"] = (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 91), "search", [], "any", false, false, false, 91)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["vars"] ?? null) : null);
                // line 92
                echo "    ";
            } else {
                // line 93
                echo "        ";
                $context["vars"] = [];
                // line 94
                echo "    ";
            }
            // line 95
            echo "    .on('search.dt', ";
            $this->loadTemplate((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 95), "search", [], "any", false, false, false, 95)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 95)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 97
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 97), "stateLoaded", [], "any", false, false, false, 97) === null)) {
            // line 98
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 98), "stateLoaded", [], "any", false, true, false, 98), "vars", [], "array", true, true, false, 98)) {
                // line 99
                echo "        ";
                $context["vars"] = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 99), "stateLoaded", [], "any", false, false, false, 99)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["vars"] ?? null) : null);
                // line 100
                echo "    ";
            } else {
                // line 101
                echo "        ";
                $context["vars"] = [];
                // line 102
                echo "    ";
            }
            // line 103
            echo "    .on('stateLoaded.dt', ";
            $this->loadTemplate((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 103), "stateLoaded", [], "any", false, false, false, 103)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 103)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 105
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 105), "stateLoadParams", [], "any", false, false, false, 105) === null)) {
            // line 106
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 106), "stateLoadParams", [], "any", false, true, false, 106), "vars", [], "array", true, true, false, 106)) {
                // line 107
                echo "        ";
                $context["vars"] = (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 107), "stateLoadParams", [], "any", false, false, false, 107)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["vars"] ?? null) : null);
                // line 108
                echo "    ";
            } else {
                // line 109
                echo "        ";
                $context["vars"] = [];
                // line 110
                echo "    ";
            }
            // line 111
            echo "    .on('stateLoadParams.dt', ";
            $this->loadTemplate((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 111), "stateLoadParams", [], "any", false, false, false, 111)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 111)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 113
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 113), "stateSaveParams", [], "any", false, false, false, 113) === null)) {
            // line 114
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 114), "stateSaveParams", [], "any", false, true, false, 114), "vars", [], "array", true, true, false, 114)) {
                // line 115
                echo "        ";
                $context["vars"] = (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 115), "stateSaveParams", [], "any", false, false, false, 115)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["vars"] ?? null) : null);
                // line 116
                echo "    ";
            } else {
                // line 117
                echo "        ";
                $context["vars"] = [];
                // line 118
                echo "    ";
            }
            // line 119
            echo "    .on('stateSaveParams.dt', ";
            $this->loadTemplate((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 119), "stateSaveParams", [], "any", false, false, false, 119)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 119)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        // line 121
        if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 121), "xhr", [], "any", false, false, false, 121) === null)) {
            // line 122
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, true, false, 122), "xhr", [], "any", false, true, false, 122), "vars", [], "array", true, true, false, 122)) {
                // line 123
                echo "        ";
                $context["vars"] = (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 123), "xhr", [], "any", false, false, false, 123)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["vars"] ?? null) : null);
                // line 124
                echo "    ";
            } else {
                // line 125
                echo "        ";
                $context["vars"] = [];
                // line 126
                echo "    ";
            }
            // line 127
            echo "    .on('xhr.dt', ";
            $this->loadTemplate((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sg_datatables_view"] ?? null), "events", [], "any", false, false, false, 127), "xhr", [], "any", false, false, false, 127)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["template"] ?? null) : null), "SgDatatablesBundle:datatable:events.html.twig", 127)->display(twig_array_merge($context, ($context["vars"] ?? null)));
            echo ")
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 127,  379 => 126,  376 => 125,  373 => 124,  370 => 123,  367 => 122,  365 => 121,  359 => 119,  356 => 118,  353 => 117,  350 => 116,  347 => 115,  344 => 114,  342 => 113,  336 => 111,  333 => 110,  330 => 109,  327 => 108,  324 => 107,  321 => 106,  319 => 105,  313 => 103,  310 => 102,  307 => 101,  304 => 100,  301 => 99,  298 => 98,  296 => 97,  290 => 95,  287 => 94,  284 => 93,  281 => 92,  278 => 91,  275 => 90,  273 => 89,  267 => 87,  264 => 86,  261 => 85,  258 => 84,  255 => 83,  252 => 82,  250 => 81,  244 => 79,  241 => 78,  238 => 77,  235 => 76,  232 => 75,  229 => 74,  227 => 73,  221 => 71,  218 => 70,  215 => 69,  212 => 68,  209 => 67,  206 => 66,  204 => 65,  198 => 63,  195 => 62,  192 => 61,  189 => 60,  186 => 59,  183 => 58,  181 => 57,  175 => 55,  172 => 54,  169 => 53,  166 => 52,  163 => 51,  160 => 50,  158 => 49,  152 => 47,  149 => 46,  146 => 45,  143 => 44,  140 => 43,  137 => 42,  135 => 41,  129 => 39,  126 => 38,  123 => 37,  120 => 36,  117 => 35,  114 => 34,  112 => 33,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  94 => 27,  91 => 26,  89 => 25,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  66 => 17,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  43 => 9,);
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
{% if sg_datatables_view.events.columnSizing is not same as(null) %}
    {% if sg_datatables_view.events.columnSizing['vars'] is defined %}
        {% set vars = sg_datatables_view.events.columnSizing['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('column-sizing.dt', {% include sg_datatables_view.events.columnSizing['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.columnVisibility is not same as(null) %}
    {% if sg_datatables_view.events.columnVisibility['vars'] is defined %}
        {% set vars = sg_datatables_view.events.columnVisibility['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('column-visibility.dt', {% include sg_datatables_view.events.columnVisibility['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.destroy is not same as(null) %}
    {% if sg_datatables_view.events.destroy['vars'] is defined %}
        {% set vars = sg_datatables_view.events.destroy['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('destroy.dt', {% include sg_datatables_view.events.destroy['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.error is not same as(null) %}
    {% if sg_datatables_view.events.error['vars'] is defined %}
        {% set vars = sg_datatables_view.events.error['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('error.dt', {% include sg_datatables_view.events.error['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.length is not same as(null) %}
    {% if sg_datatables_view.events.length['vars'] is defined %}
        {% set vars = sg_datatables_view.events.length['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('length.dt', {% include sg_datatables_view.events.length['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.order is not same as(null) %}
    {% if sg_datatables_view.events.order['vars'] is defined %}
        {% set vars = sg_datatables_view.events.order['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('order.dt', {% include sg_datatables_view.events.order['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.page is not same as(null) %}
    {% if sg_datatables_view.events.page['vars'] is defined %}
        {% set vars = sg_datatables_view.events.page['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('page.dt', {% include sg_datatables_view.events.page['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.preInit is not same as(null) %}
    {% if sg_datatables_view.events.preInit['vars'] is defined %}
        {% set vars = sg_datatables_view.events.preInit['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('preInit.dt', {% include sg_datatables_view.events.preInit['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.preXhr is not same as(null) %}
    {% if sg_datatables_view.events.preXhr['vars'] is defined %}
        {% set vars = sg_datatables_view.events.preXhr['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('preXhr.dt', {% include sg_datatables_view.events.preXhr['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.processing is not same as(null) %}
    {% if sg_datatables_view.events.processing['vars'] is defined %}
        {% set vars = sg_datatables_view.events.processing['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('processing.dt', {% include sg_datatables_view.events.processing['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.search is not same as(null) %}
    {% if sg_datatables_view.events.search['vars'] is defined %}
        {% set vars = sg_datatables_view.events.search['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('search.dt', {% include sg_datatables_view.events.search['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.stateLoaded is not same as(null) %}
    {% if sg_datatables_view.events.stateLoaded['vars'] is defined %}
        {% set vars = sg_datatables_view.events.stateLoaded['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateLoaded.dt', {% include sg_datatables_view.events.stateLoaded['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.stateLoadParams is not same as(null) %}
    {% if sg_datatables_view.events.stateLoadParams['vars'] is defined %}
        {% set vars = sg_datatables_view.events.stateLoadParams['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateLoadParams.dt', {% include sg_datatables_view.events.stateLoadParams['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.stateSaveParams is not same as(null) %}
    {% if sg_datatables_view.events.stateSaveParams['vars'] is defined %}
        {% set vars = sg_datatables_view.events.stateSaveParams['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateSaveParams.dt', {% include sg_datatables_view.events.stateSaveParams['template'] with vars %})
{% endif %}
{% if sg_datatables_view.events.xhr is not same as(null) %}
    {% if sg_datatables_view.events.xhr['vars'] is defined %}
        {% set vars = sg_datatables_view.events.xhr['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('xhr.dt', {% include sg_datatables_view.events.xhr['template'] with vars %})
{% endif %}
", "SgDatatablesBundle:datatable:events.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/datatable/events.html.twig");
    }
}
