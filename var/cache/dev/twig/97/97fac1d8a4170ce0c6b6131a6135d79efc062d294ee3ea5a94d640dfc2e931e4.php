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

/* SgDatatablesBundle:i18n:id.json.twig */
class __TwigTemplate_10ba489152a9779c30426c93fcbaad472d9481c4444fe9635abc292f45b2a4cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:id.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:id.json.twig"));

        // line 1
        echo "/**
 * Indonesian translation
 *  @name Indonesian
 *  @anchor Indonesian
 *  @author Cipto Hadi
 */
{
    \"sProcessing\":   \"Sedang memproses...\",
    \"sLengthMenu\":   \"Tampilkan _MENU_ entri\",
    \"sZeroRecords\":  \"Tidak ditemukan data yang sesuai\",
    \"sInfo\":         \"Menampilkan _START_ sampai _END_ dari _TOTAL_ entri\",
    \"sInfoEmpty\":    \"Menampilkan 0 sampai 0 dari 0 entri\",
    \"sInfoFiltered\": \"(disaring dari _MAX_ entri keseluruhan)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Cari:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Pertama\",
        \"sPrevious\": \"Sebelumnya\",
        \"sNext\":     \"Selanjutnya\",
        \"sLast\":     \"Terakhir\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:id.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Indonesian translation
 *  @name Indonesian
 *  @anchor Indonesian
 *  @author Cipto Hadi
 */
{
    \"sProcessing\":   \"Sedang memproses...\",
    \"sLengthMenu\":   \"Tampilkan _MENU_ entri\",
    \"sZeroRecords\":  \"Tidak ditemukan data yang sesuai\",
    \"sInfo\":         \"Menampilkan _START_ sampai _END_ dari _TOTAL_ entri\",
    \"sInfoEmpty\":    \"Menampilkan 0 sampai 0 dari 0 entri\",
    \"sInfoFiltered\": \"(disaring dari _MAX_ entri keseluruhan)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Cari:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Pertama\",
        \"sPrevious\": \"Sebelumnya\",
        \"sNext\":     \"Selanjutnya\",
        \"sLast\":     \"Terakhir\"
    }
}
", "SgDatatablesBundle:i18n:id.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/id.json.twig");
    }
}
