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

/* SgDatatablesBundle:i18n:sw.json.twig */
class __TwigTemplate_dcc7e1ea0a34c0f32b842998e8184cc369be23743765252add79946f2976b752 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sw.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:sw.json.twig"));

        // line 1
        echo "/**
 * Swahili translation
 *  @name Swahili
 *  @anchor Swahili
 *  @author <a href=\"http://zoop.co.tz/schoolpesa/\">Roy Owino</a>
 */
{
    \"sEmptyTable\":     \"Hakuna data iliyo patikana\",
    \"sInfo\":           \"Inaonyesha _START_ mpaka _END_ ya matokeo _TOTAL_\",
    \"sInfoEmpty\":      \"Inaonyesha 0 hadi 0 ya matokeo 0\",
    \"sInfoFiltered\":   \"(uschujo kutoka matokeo idadi _MAX_)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"Onyesha _MENU_ matokeo\",
    \"sLoadingRecords\": \"Inapakia...\",
    \"sProcessing\":     \"Processing...\",
    \"sSearch\":         \"Tafuta:\",
    \"sZeroRecords\":    \"Rekodi vinavyolingana haziku patikana\",
    \"oPaginate\": {
        \"sFirst\":    \"Mwanzo\",
        \"sLast\":     \"Mwisho\",
        \"sNext\":     \"Ijayo\",
        \"sPrevious\": \"Kabla\"
    },
    \"oAria\": {
        \"sSortAscending\": \": seti kulainisha sanjari kwa mtindo wa upandaji\",
        \"sSortDescending\": \": seti kulainisha sanjari kwa mtindo wa mteremko\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:sw.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Swahili translation
 *  @name Swahili
 *  @anchor Swahili
 *  @author <a href=\"http://zoop.co.tz/schoolpesa/\">Roy Owino</a>
 */
{
    \"sEmptyTable\":     \"Hakuna data iliyo patikana\",
    \"sInfo\":           \"Inaonyesha _START_ mpaka _END_ ya matokeo _TOTAL_\",
    \"sInfoEmpty\":      \"Inaonyesha 0 hadi 0 ya matokeo 0\",
    \"sInfoFiltered\":   \"(uschujo kutoka matokeo idadi _MAX_)\",
    \"sInfoPostFix\":    \"\",
    \"sInfoThousands\":  \",\",
    \"sLengthMenu\":     \"Onyesha _MENU_ matokeo\",
    \"sLoadingRecords\": \"Inapakia...\",
    \"sProcessing\":     \"Processing...\",
    \"sSearch\":         \"Tafuta:\",
    \"sZeroRecords\":    \"Rekodi vinavyolingana haziku patikana\",
    \"oPaginate\": {
        \"sFirst\":    \"Mwanzo\",
        \"sLast\":     \"Mwisho\",
        \"sNext\":     \"Ijayo\",
        \"sPrevious\": \"Kabla\"
    },
    \"oAria\": {
        \"sSortAscending\": \": seti kulainisha sanjari kwa mtindo wa upandaji\",
        \"sSortDescending\": \": seti kulainisha sanjari kwa mtindo wa mteremko\"
    }
}
", "SgDatatablesBundle:i18n:sw.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/sw.json.twig");
    }
}
