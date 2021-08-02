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

/* backend_layout/meta.html.twig */
class __TwigTemplate_a1d4297ab81be1ae153146f0291b2341ee396215978d99b9ca8c5eaed88b0655 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/meta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend_layout/meta.html.twig"));

        // line 1
        echo "<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
";
        // line 4
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta property=\"al:ios:url\" content=\"****://https://www.*****.com/\"/>
<meta property=\"al:ios:app_store_id\" content=\"*******\"/>
<meta property=\"al:ios:app_name\" content=\"******\"/>
<meta property=\"al:android:url\" content=\"****://https://www.****.com/\"/>
<meta property=\"al:android:package\" content=\"com.maxithings.****\"/>
<meta property=\"al:android:app_name\" content=\"******\"/>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backend_layout/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
{# TODO: Tell the browser to be responsive to screen width #}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<meta property=\"al:ios:url\" content=\"****://https://www.*****.com/\"/>
<meta property=\"al:ios:app_store_id\" content=\"*******\"/>
<meta property=\"al:ios:app_name\" content=\"******\"/>
<meta property=\"al:android:url\" content=\"****://https://www.****.com/\"/>
<meta property=\"al:android:package\" content=\"com.maxithings.****\"/>
<meta property=\"al:android:app_name\" content=\"******\"/>
", "backend_layout/meta.html.twig", "/Users/cengizkara/PhpstormProjects/pathproject/templates/backend_layout/meta.html.twig");
    }
}
