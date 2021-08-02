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

/* SgDatatablesBundle:i18n:lt.json.twig */
class __TwigTemplate_e95b80b9ee5accd9c8b53b88fc6e9cf1fc987fd0a11a89422ac9eded0e4e5daf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:lt.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:lt.json.twig"));

        // line 1
        echo "/**
 * Lithuanian translation
 *  @name Lithuanian
 *  @anchor Lithuanian
 *  @author <a href=\"http://www.kurdingopinigai.lt\">Kęstutis Morkūnas</a>
 *  @author Algirdas Brazas
 */
{
    \"sEmptyTable\":      \"Lentelėje nėra duomenų\",
    \"sInfo\":            \"Rodomi įrašai nuo _START_ iki _END_ iš _TOTAL_ įrašų\",
    \"sInfoEmpty\":       \"Rodomi įrašai nuo 0 iki 0 iš 0\",
    \"sInfoFiltered\":    \"(atrinkta iš _MAX_ įrašų)\",
    \"sInfoPostFix\":     \"\",
    \"sInfoThousands\":   \" \",
    \"sLengthMenu\":      \"Rodyti _MENU_ įrašus\",
    \"sLoadingRecords\":  \"Įkeliama...\",
    \"sProcessing\":      \"Apdorojama...\",
    \"sSearch\":          \"Ieškoti:\",
    \"sThousands\":       \" \",
    \"sUrl\":             \"\",
    \"sZeroRecords\":     \"Įrašų nerasta\",

    \"oPaginate\": {
        \"sFirst\": \"Pirmas\",
        \"sPrevious\": \"Ankstesnis\",
        \"sNext\": \"Tolimesnis\",
        \"sLast\": \"Paskutinis\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:lt.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Lithuanian translation
 *  @name Lithuanian
 *  @anchor Lithuanian
 *  @author <a href=\"http://www.kurdingopinigai.lt\">Kęstutis Morkūnas</a>
 *  @author Algirdas Brazas
 */
{
    \"sEmptyTable\":      \"Lentelėje nėra duomenų\",
    \"sInfo\":            \"Rodomi įrašai nuo _START_ iki _END_ iš _TOTAL_ įrašų\",
    \"sInfoEmpty\":       \"Rodomi įrašai nuo 0 iki 0 iš 0\",
    \"sInfoFiltered\":    \"(atrinkta iš _MAX_ įrašų)\",
    \"sInfoPostFix\":     \"\",
    \"sInfoThousands\":   \" \",
    \"sLengthMenu\":      \"Rodyti _MENU_ įrašus\",
    \"sLoadingRecords\":  \"Įkeliama...\",
    \"sProcessing\":      \"Apdorojama...\",
    \"sSearch\":          \"Ieškoti:\",
    \"sThousands\":       \" \",
    \"sUrl\":             \"\",
    \"sZeroRecords\":     \"Įrašų nerasta\",

    \"oPaginate\": {
        \"sFirst\": \"Pirmas\",
        \"sPrevious\": \"Ankstesnis\",
        \"sNext\": \"Tolimesnis\",
        \"sLast\": \"Paskutinis\"
    }
}
", "SgDatatablesBundle:i18n:lt.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/lt.json.twig");
    }
}
