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

/* SgDatatablesBundle:i18n:hu.json.twig */
class __TwigTemplate_fdbb5de9fc8a5bac6b98f1a29828357d961bc003a027130f2a51f187737bf92c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:hu.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:hu.json.twig"));

        // line 1
        echo "/**
 * Hungarian translation
 *  @name Hungarian
 *  @anchor Hungarian
 *  @author <a href=\"http://www.maschek.hu\">Adam Maschek</a> and Lajos Cseppentő
 */
{
   \"sEmptyTable\":     \"Nincs rendelkezésre álló adat\",
   \"sInfo\":           \"Találatok: _START_ - _END_ Összesen: _TOTAL_\",
   \"sInfoEmpty\":      \"Nulla találat\",
   \"sInfoFiltered\":   \"(_MAX_ összes rekord közül szűrve)\",
   \"sInfoPostFix\":    \"\",
   \"sInfoThousands\":  \" \",
   \"sLengthMenu\":     \"_MENU_ találat oldalanként\",
   \"sLoadingRecords\": \"Betöltés...\",
   \"sProcessing\":     \"Feldolgozás...\",
   \"sSearch\":         \"Keresés:\",
   \"sZeroRecords\":    \"Nincs a keresésnek megfelelő találat\",
   \"oPaginate\": {
       \"sFirst\":    \"Első\",
       \"sPrevious\": \"Előző\",
       \"sNext\":     \"Következő\",
       \"sLast\":     \"Utolsó\"
   },
   \"oAria\": {
       \"sSortAscending\":  \": aktiválja a növekvő rendezéshez\",
       \"sSortDescending\": \": aktiválja a csökkenő rendezéshez\"
   }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:hu.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Hungarian translation
 *  @name Hungarian
 *  @anchor Hungarian
 *  @author <a href=\"http://www.maschek.hu\">Adam Maschek</a> and Lajos Cseppentő
 */
{
   \"sEmptyTable\":     \"Nincs rendelkezésre álló adat\",
   \"sInfo\":           \"Találatok: _START_ - _END_ Összesen: _TOTAL_\",
   \"sInfoEmpty\":      \"Nulla találat\",
   \"sInfoFiltered\":   \"(_MAX_ összes rekord közül szűrve)\",
   \"sInfoPostFix\":    \"\",
   \"sInfoThousands\":  \" \",
   \"sLengthMenu\":     \"_MENU_ találat oldalanként\",
   \"sLoadingRecords\": \"Betöltés...\",
   \"sProcessing\":     \"Feldolgozás...\",
   \"sSearch\":         \"Keresés:\",
   \"sZeroRecords\":    \"Nincs a keresésnek megfelelő találat\",
   \"oPaginate\": {
       \"sFirst\":    \"Első\",
       \"sPrevious\": \"Előző\",
       \"sNext\":     \"Következő\",
       \"sLast\":     \"Utolsó\"
   },
   \"oAria\": {
       \"sSortAscending\":  \": aktiválja a növekvő rendezéshez\",
       \"sSortDescending\": \": aktiválja a csökkenő rendezéshez\"
   }
}
", "SgDatatablesBundle:i18n:hu.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/hu.json.twig");
    }
}
