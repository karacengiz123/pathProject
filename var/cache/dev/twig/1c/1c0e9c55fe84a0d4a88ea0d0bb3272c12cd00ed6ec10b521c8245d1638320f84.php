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

/* SgDatatablesBundle:i18n:ro.json.twig */
class __TwigTemplate_5e251fd43b86a7cbed817f8b2d31fc9e1d6ba491bd677d34a6e2e314e0842d01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ro.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ro.json.twig"));

        // line 1
        echo "/**
 * Romanian translation
 *  @name Romanian
 *  @anchor Romanian
 *  @author <a href=\"http://www.jurubita.ro/\">Alexandru Jurubita</a>
 */
{
    \"sProcessing\":   \"Proceseaza...\",
    \"sLengthMenu\":   \"Afiseaza _MENU_ inregistrari pe pagina\",
    \"sZeroRecords\":  \"Nu am gasit nimic - ne pare rau\",
    \"sInfo\":         \"Afisate de la _START_ la _END_ din _TOTAL_ inregistrari\",
    \"sInfoEmpty\":    \"Afisate de la 0 la 0 din 0 inregistrari\",
    \"sInfoFiltered\": \"(filtrate dintr-un total de _MAX_ inregistrari)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Cauta:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Prima\",
        \"sPrevious\": \"Precedenta\",
        \"sNext\":     \"Urmatoarea\",
        \"sLast\":     \"Ultima\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ro.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Romanian translation
 *  @name Romanian
 *  @anchor Romanian
 *  @author <a href=\"http://www.jurubita.ro/\">Alexandru Jurubita</a>
 */
{
    \"sProcessing\":   \"Proceseaza...\",
    \"sLengthMenu\":   \"Afiseaza _MENU_ inregistrari pe pagina\",
    \"sZeroRecords\":  \"Nu am gasit nimic - ne pare rau\",
    \"sInfo\":         \"Afisate de la _START_ la _END_ din _TOTAL_ inregistrari\",
    \"sInfoEmpty\":    \"Afisate de la 0 la 0 din 0 inregistrari\",
    \"sInfoFiltered\": \"(filtrate dintr-un total de _MAX_ inregistrari)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Cauta:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Prima\",
        \"sPrevious\": \"Precedenta\",
        \"sNext\":     \"Urmatoarea\",
        \"sLast\":     \"Ultima\"
    }
}
", "SgDatatablesBundle:i18n:ro.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ro.json.twig");
    }
}
