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

/* SgDatatablesBundle:i18n:ta.json.twig */
class __TwigTemplate_d488aaa4da45b7f4f5fb88e40da9aff33b44cb6f5789f38d8d93bfe48093f5f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ta.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ta.json.twig"));

        // line 1
        echo "/**
 * Tamil translation
 *  @name Tamil
 *  @anchor Tamil
 *  @author Sam Arul Raj
 */
{
    \"sEmptyTable\":     \"அட்டவணையில் தரவு கிடைக்கவில்லை\",
    \"sInfo\":           \"உள்ளீடுகளை் _START_ முதல _END_ உள்ள _TOTAL_ காட்டும்\",
    \"sInfoEmpty\":      \"0 உள்ளீடுகளை 0 0 காட்டும்\",
    \"sInfoFiltered\":   \"(_MAX_ மொத்த உள்ளீடுகளை இருந்து வடிகட்டி)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"_MENU_ காண்பி\",
    \"sLoadingRecords\": \"ஏற்றுகிறது ...\",
    \"sProcessing\":     \"செயலாக்க ...\",
    \"sSearch\":         \"தேடல்:\",
    \"sZeroRecords\":    \"பொருத்தமான பதிவுகள் இல்லை\",
    \"oPaginate\": {
        \"sFirst\":    \"முதல்\",
        \"sLast\":     \"இறுதி\",
        \"sNext\":     \"அடுத்து\",
        \"sPrevious\": \"முந்தைய\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": நிரலை ஏறுவரிசையில் வரிசைப்படுத்த செயல்படுத்த\",
        \"sSortDescending\": \": நிரலை இறங்கு வரிசைப்படுத்த செயல்படுத்த\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ta.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Tamil translation
 *  @name Tamil
 *  @anchor Tamil
 *  @author Sam Arul Raj
 */
{
    \"sEmptyTable\":     \"அட்டவணையில் தரவு கிடைக்கவில்லை\",
    \"sInfo\":           \"உள்ளீடுகளை் _START_ முதல _END_ உள்ள _TOTAL_ காட்டும்\",
    \"sInfoEmpty\":      \"0 உள்ளீடுகளை 0 0 காட்டும்\",
    \"sInfoFiltered\":   \"(_MAX_ மொத்த உள்ளீடுகளை இருந்து வடிகட்டி)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"_MENU_ காண்பி\",
    \"sLoadingRecords\": \"ஏற்றுகிறது ...\",
    \"sProcessing\":     \"செயலாக்க ...\",
    \"sSearch\":         \"தேடல்:\",
    \"sZeroRecords\":    \"பொருத்தமான பதிவுகள் இல்லை\",
    \"oPaginate\": {
        \"sFirst\":    \"முதல்\",
        \"sLast\":     \"இறுதி\",
        \"sNext\":     \"அடுத்து\",
        \"sPrevious\": \"முந்தைய\"
    },
    \"oAria\": {
        \"sSortAscending\":  \": நிரலை ஏறுவரிசையில் வரிசைப்படுத்த செயல்படுத்த\",
        \"sSortDescending\": \": நிரலை இறங்கு வரிசைப்படுத்த செயல்படுத்த\"
    }
}
", "SgDatatablesBundle:i18n:ta.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ta.json.twig");
    }
}
