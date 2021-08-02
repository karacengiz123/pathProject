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

/* SgDatatablesBundle:i18n:si.json.twig */
class __TwigTemplate_0fe39ba0e3b5641af54a2d4d31ab20607ba5f52021fe41c1addeb1771884836d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:si.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:si.json.twig"));

        // line 1
        echo "/**
 * Sinhala translation
 *  @name Sinhala
 *  @anchor Sinhala
 *  @author Isuru Sampath Ratnayake
 */
{
    \"sEmptyTable\":     \"වගුවේ දත්ත කිසිවක් නොමැත\",
    \"sInfo\":           \"_TOTAL_ න් _START_ සිට _END_ දක්වා\",
    \"sInfoEmpty\":      \"0 න් 0 සිට 0 දක්වා\",
    \"sInfoFiltered\":   \"(_MAX_ න් තෝරාගත් )\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"_MENU_ ක් පෙන්වන්න\",
    \"sLoadingRecords\": \"පූරණය වෙමින් පවතී...\",
    \"sProcessing\":     \"සැකසෙමින් පවතී...\",
    \"sSearch\":         \"සොයන්න :\",
    \"sZeroRecords\":    \"ගැලපෙන වාර්තා නොමැත.\",
    \"oPaginate\": {
        \"sFirst\":    \"පළමු\",
        \"sLast\":     \"අන්තිම\",
        \"sNext\":     \"ඊළග\",
        \"sPrevious\": \"පසුගිය\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": තීරුව ආරෝහනව තෝරන්න\",
        \"sSortDescending\": \": තීරුව අවරෝහනව තෝරන්න\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:si.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Sinhala translation
 *  @name Sinhala
 *  @anchor Sinhala
 *  @author Isuru Sampath Ratnayake
 */
{
    \"sEmptyTable\":     \"වගුවේ දත්ත කිසිවක් නොමැත\",
    \"sInfo\":           \"_TOTAL_ න් _START_ සිට _END_ දක්වා\",
    \"sInfoEmpty\":      \"0 න් 0 සිට 0 දක්වා\",
    \"sInfoFiltered\":   \"(_MAX_ න් තෝරාගත් )\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"_MENU_ ක් පෙන්වන්න\",
    \"sLoadingRecords\": \"පූරණය වෙමින් පවතී...\",
    \"sProcessing\":     \"සැකසෙමින් පවතී...\",
    \"sSearch\":         \"සොයන්න :\",
    \"sZeroRecords\":    \"ගැලපෙන වාර්තා නොමැත.\",
    \"oPaginate\": {
        \"sFirst\":    \"පළමු\",
        \"sLast\":     \"අන්තිම\",
        \"sNext\":     \"ඊළග\",
        \"sPrevious\": \"පසුගිය\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": තීරුව ආරෝහනව තෝරන්න\",
        \"sSortDescending\": \": තීරුව අවරෝහනව තෝරන්න\"
    }
}
", "SgDatatablesBundle:i18n:si.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/si.json.twig");
    }
}
