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

/* SgDatatablesBundle:i18n:ca.json.twig */
class __TwigTemplate_5f0a75cf7e3cf611a384a50abfd4237416ba845bc19e43bec1964b0c76a2fde7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ca.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ca.json.twig"));

        // line 1
        echo "/**
 * Catalan translation
 *  @name Catalan
 *  @anchor Catalan
 *  @author Sergi
 */
{
    \"sProcessing\":   \"Processant...\",
    \"sLengthMenu\":   \"Mostra _MENU_ registres\",
    \"sZeroRecords\":  \"No s'han trobat registres.\",
    \"sInfo\":         \"Mostrant de _START_ a _END_ de _TOTAL_ registres\",
    \"sInfoEmpty\":    \"Mostrant de 0 a 0 de 0 registres\",
    \"sInfoFiltered\": \"(filtrat de _MAX_ total registres)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Filtrar:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Primer\",
        \"sPrevious\": \"Anterior\",
        \"sNext\":     \"Següent\",
        \"sLast\":     \"Últim\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ca.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Catalan translation
 *  @name Catalan
 *  @anchor Catalan
 *  @author Sergi
 */
{
    \"sProcessing\":   \"Processant...\",
    \"sLengthMenu\":   \"Mostra _MENU_ registres\",
    \"sZeroRecords\":  \"No s'han trobat registres.\",
    \"sInfo\":         \"Mostrant de _START_ a _END_ de _TOTAL_ registres\",
    \"sInfoEmpty\":    \"Mostrant de 0 a 0 de 0 registres\",
    \"sInfoFiltered\": \"(filtrat de _MAX_ total registres)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Filtrar:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Primer\",
        \"sPrevious\": \"Anterior\",
        \"sNext\":     \"Següent\",
        \"sLast\":     \"Últim\"
    }
}
", "SgDatatablesBundle:i18n:ca.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ca.json.twig");
    }
}
