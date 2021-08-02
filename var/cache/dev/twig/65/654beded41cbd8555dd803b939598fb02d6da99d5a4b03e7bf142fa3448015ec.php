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

/* SgDatatablesBundle:i18n:es.json.twig */
class __TwigTemplate_fd41cc6e78ccdf80defa493198a82f08e04c2a819eb77a21996f0e6256217b81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:es.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:es.json.twig"));

        // line 1
        echo "/**
 * Spanish translation
 *  @name Spanish
 *  @anchor Spanish
 *  @author Giovanni Ariza, Aristobulo Gomez and Roberto Poo
 */
{
    \"sProcessing\":     \"Procesando...\",
    \"sLengthMenu\":     \"Mostrar _MENU_ registros\",
    \"sZeroRecords\":    \"No se encontraron resultados\",
    \"sEmptyTable\":     \"Ningún dato disponible en esta tabla\",
    \"sInfo\":           \"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros\",
    \"sInfoEmpty\":      \"Mostrando registros del 0 al 0 de un total de 0 registros\",
    \"sInfoFiltered\":   \"(filtrado de un total de _MAX_ registros)\",
    \"sInfoPostFix\":    \"\",
    \"sSearch\":         \"Buscar:\",
    \"sUrl\":            \"\",
    \"sInfoThousands\":  \",\",
    \"sLoadingRecords\": \"Cargando...\",
    \"oPaginate\": {
        \"sFirst\":    \"Primero\",
        \"sLast\":     \"Último\",
        \"sNext\":     \"Siguiente\",
        \"sPrevious\": \"Anterior\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": Activar para ordenar la columna de manera ascendente\",
        \"sSortDescending\": \": Activar para ordenar la columna de manera descendente\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:es.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Spanish translation
 *  @name Spanish
 *  @anchor Spanish
 *  @author Giovanni Ariza, Aristobulo Gomez and Roberto Poo
 */
{
    \"sProcessing\":     \"Procesando...\",
    \"sLengthMenu\":     \"Mostrar _MENU_ registros\",
    \"sZeroRecords\":    \"No se encontraron resultados\",
    \"sEmptyTable\":     \"Ningún dato disponible en esta tabla\",
    \"sInfo\":           \"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros\",
    \"sInfoEmpty\":      \"Mostrando registros del 0 al 0 de un total de 0 registros\",
    \"sInfoFiltered\":   \"(filtrado de un total de _MAX_ registros)\",
    \"sInfoPostFix\":    \"\",
    \"sSearch\":         \"Buscar:\",
    \"sUrl\":            \"\",
    \"sInfoThousands\":  \",\",
    \"sLoadingRecords\": \"Cargando...\",
    \"oPaginate\": {
        \"sFirst\":    \"Primero\",
        \"sLast\":     \"Último\",
        \"sNext\":     \"Siguiente\",
        \"sPrevious\": \"Anterior\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": Activar para ordenar la columna de manera ascendente\",
        \"sSortDescending\": \": Activar para ordenar la columna de manera descendente\"
    }
}
", "SgDatatablesBundle:i18n:es.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/es.json.twig");
    }
}
