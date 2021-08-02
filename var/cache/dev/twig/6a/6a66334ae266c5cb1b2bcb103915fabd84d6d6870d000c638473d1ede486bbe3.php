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

/* SgDatatablesBundle:i18n:sr.json.twig */
class __TwigTemplate_a5dd386ed064f7435fe77b7038d5ebcf8b33b23f244729581477c8d1b77ecf4c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sr.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sr.json.twig"));

        // line 1
        echo "/**
 * Serbian translation (Latin alphabet)
 *  @name Serbian (Latin)
 *  @anchor Serbian (Latin)
 *  @author <a href=\"http://mnovakovic.byteout.com\">Marko Novakovic</a>
 */
{
    \"sProcessing\":   \"Procesiranje u toku...\",
    \"sLengthMenu\":   \"Prikaži _MENU_ elemenata\",
    \"sZeroRecords\":  \"Nije pronađen nijedan rezultat\",
    \"sInfo\":         \"Prikaz _START_ do _END_ od ukupno _TOTAL_ elemenata\",
    \"sInfoEmpty\":    \"Prikaz 0 do 0 od ukupno 0 elemenata\",
    \"sInfoFiltered\": \"(filtrirano od ukupno _MAX_ elemenata)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Pretraga:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Početna\",
        \"sPrevious\": \"Prethodna\",
        \"sNext\":     \"Sledeća\",
        \"sLast\":     \"Poslednja\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:sr.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Serbian translation (Latin alphabet)
 *  @name Serbian (Latin)
 *  @anchor Serbian (Latin)
 *  @author <a href=\"http://mnovakovic.byteout.com\">Marko Novakovic</a>
 */
{
    \"sProcessing\":   \"Procesiranje u toku...\",
    \"sLengthMenu\":   \"Prikaži _MENU_ elemenata\",
    \"sZeroRecords\":  \"Nije pronađen nijedan rezultat\",
    \"sInfo\":         \"Prikaz _START_ do _END_ od ukupno _TOTAL_ elemenata\",
    \"sInfoEmpty\":    \"Prikaz 0 do 0 od ukupno 0 elemenata\",
    \"sInfoFiltered\": \"(filtrirano od ukupno _MAX_ elemenata)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Pretraga:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Početna\",
        \"sPrevious\": \"Prethodna\",
        \"sNext\":     \"Sledeća\",
        \"sLast\":     \"Poslednja\"
    }
}
", "SgDatatablesBundle:i18n:sr.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/sr.json.twig");
    }
}
