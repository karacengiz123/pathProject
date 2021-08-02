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

/* backend_layout/header.html.twig */
class __TwigTemplate_3955bf1e3641d3313515323baa7a386098aabf4f9244297444525cc50fb33520 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/header.html.twig"));

        // line 1
        echo "<header class=\"topbar\">
    <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_home_page");
        echo "\">
                <!-- Logo icon --><b>
                    <!-- Dark Logo icon -->
                    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/backend/images/logo.jpg"), "html", null, true);
        echo "\" width=\"140\" height=\"50\" alt=\"";
        echo twig_escape_filter($this->env, ($context["hostingName"] ?? null), "html", null, true);
        echo "\" class=\"dark-logo\" />
                    <!-- Light Logo icon -->
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/backend/images/logo.jpg"), "html", null, true);
        echo "\" width=\"140\" height=\"50\" alt=\"";
        echo twig_escape_filter($this->env, ($context["hostingName"] ?? null), "html", null, true);
        echo "\" class=\"light-logo\" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span></span>
            </a>
        </div>
        <div class=\"navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
                <!-- This is  -->
                <li class=\"nav-item\"> <a class=\"nav-link nav-toggler d-block d-md-none waves-effect waves-dark\" href=\"javascript:void(0)\" ><i class=\"ti-menu\"></i></a> </li>
                <li class=\"nav-item\"> <a class=\"nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"icon-menu\"></i></a> </li>
            </ul>
            <ul class=\"navbar-nav my-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/tr/";
        // line 24
        echo twig_escape_filter($this->env, ($context["baseChangeUriData"] ?? null), "html", null, true);
        echo "\"><i class=\"flag-icon flag-icon-tr\" title=\"tr\" id=\"tr\"></i> TR</a>
                </li>
                <li class=\"nav-item dropdown u-pro\">
                    <a class=\"nav-link dropdown-toggle waves-effect waves-dark profile-pic\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"hidden-md-down\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28), "html", null, true);
        echo " &nbsp;<i class=\"fa fa-angle-down\"></i></span> </a>
                    <div class=\"dropdown-menu dropdown-menu-right animated flipInY\">
                        <!-- text-->
                        <div class=\"dropdown-divider\"></div>
                        <!-- text-->
                        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\" class=\"dropdown-item\"><i class=\"fa fa-power-off\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("logout"), "html", null, true);
        echo "</a>
                        <!-- text-->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend_layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  88 => 28,  81 => 24,  61 => 9,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"topbar\">
    <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"{{ path('admin_home_page') }}\">
                <!-- Logo icon --><b>
                    <!-- Dark Logo icon -->
                    <img src=\"{{ asset('assets/backend/images/logo.jpg') }}\" width=\"140\" height=\"50\" alt=\"{{ hostingName }}\" class=\"dark-logo\" />
                    <!-- Light Logo icon -->
                    <img src=\"{{ asset('assets/backend/images/logo.jpg') }}\" width=\"140\" height=\"50\" alt=\"{{ hostingName }}\" class=\"light-logo\" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span></span>
            </a>
        </div>
        <div class=\"navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
                <!-- This is  -->
                <li class=\"nav-item\"> <a class=\"nav-link nav-toggler d-block d-md-none waves-effect waves-dark\" href=\"javascript:void(0)\" ><i class=\"ti-menu\"></i></a> </li>
                <li class=\"nav-item\"> <a class=\"nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"icon-menu\"></i></a> </li>
            </ul>
            <ul class=\"navbar-nav my-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/tr/{{ baseChangeUriData }}\"><i class=\"flag-icon flag-icon-tr\" title=\"tr\" id=\"tr\"></i> TR</a>
                </li>
                <li class=\"nav-item dropdown u-pro\">
                    <a class=\"nav-link dropdown-toggle waves-effect waves-dark profile-pic\" href=\"\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"hidden-md-down\">{{ app.user.username }} &nbsp;<i class=\"fa fa-angle-down\"></i></span> </a>
                    <div class=\"dropdown-menu dropdown-menu-right animated flipInY\">
                        <!-- text-->
                        <div class=\"dropdown-divider\"></div>
                        <!-- text-->
                        <a href=\"{{ path('fos_user_security_logout') }}\" class=\"dropdown-item\"><i class=\"fa fa-power-off\"></i> {{ 'logout'|trans }}</a>
                        <!-- text-->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
", "backend_layout/header.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/backend_layout/header.html.twig");
    }
}
