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

/* SgDatatablesBundle:i18n:fi.json.twig */
class __TwigTemplate_b4d0e720fb1decd0e546ea7918f14f94c34961bb7d033fa7a8d0315aa91454aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:fi.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:fi.json.twig"));

        // line 1
        echo "/**
 * Finnish translation
 *  @name Finnish
 *  @anchor Finnish
 *  @author Seppo Äyräväinen
 */
{
    \"sProcessing\":   \"Hetkinen...\",
    \"sLengthMenu\":   \"Näytä kerralla _MENU_ riviä\",
    \"sZeroRecords\":  \"Tietoja ei löytynyt\",
    \"sInfo\":         \"Näytetään rivit _START_ - _END_ (yhteensä _TOTAL_ )\",
    \"sInfoEmpty\":    \"Näytetään 0 - 0 (yhteensä 0)\",
    \"sInfoFiltered\": \"(suodatettu _MAX_ tuloksen joukosta)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Etsi:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Ensimmäinen\",
        \"sPrevious\": \"Edellinen\",
        \"sNext\":     \"Seuraava\",
        \"sLast\":     \"Viimeinen\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:fi.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Finnish translation
 *  @name Finnish
 *  @anchor Finnish
 *  @author Seppo Äyräväinen
 */
{
    \"sProcessing\":   \"Hetkinen...\",
    \"sLengthMenu\":   \"Näytä kerralla _MENU_ riviä\",
    \"sZeroRecords\":  \"Tietoja ei löytynyt\",
    \"sInfo\":         \"Näytetään rivit _START_ - _END_ (yhteensä _TOTAL_ )\",
    \"sInfoEmpty\":    \"Näytetään 0 - 0 (yhteensä 0)\",
    \"sInfoFiltered\": \"(suodatettu _MAX_ tuloksen joukosta)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Etsi:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Ensimmäinen\",
        \"sPrevious\": \"Edellinen\",
        \"sNext\":     \"Seuraava\",
        \"sLast\":     \"Viimeinen\"
    }
}
", "SgDatatablesBundle:i18n:fi.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/fi.json.twig");
    }
}
