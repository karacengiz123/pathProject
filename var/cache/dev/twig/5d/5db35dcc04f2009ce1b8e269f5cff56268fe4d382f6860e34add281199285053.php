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

/* SgDatatablesBundle:i18n:he.json.twig */
class __TwigTemplate_1442ba3c4a3e66842b98b19a3d3855e7ce4bd1aa38cf2e62e62693580be0c663 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:he.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:he.json.twig"));

        // line 1
        echo "/**
 * Hebrew translation
 *  @name Hebrew
 *  @anchor Hebrew
 *  @author <a href=\"http://ww3.co.il/\">Neil Osman (WW3)</a>
 */
{
    \"sProcessing\":   \"מעבד...\",
    \"sLengthMenu\":   \"הצג _MENU_ פריטים\",
    \"sZeroRecords\":  \"לא נמצאו רשומות מתאימות\",
    \"sEmptyTable\":   \"לא נמצאו רשומות מתאימות\",
    \"sInfo\": \"_START_ עד _END_ מתוך _TOTAL_ רשומות\" ,
    \"sInfoEmpty\":    \"0 עד 0 מתוך 0 רשומות\",
    \"sInfoFiltered\": \"(מסונן מסך _MAX_  רשומות)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"חפש:\",
    \"url\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"ראשון\",
        \"sPrevious\": \"קודם\",
        \"sNext\":     \"הבא\",
        \"sLast\":     \"אחרון\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:he.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Hebrew translation
 *  @name Hebrew
 *  @anchor Hebrew
 *  @author <a href=\"http://ww3.co.il/\">Neil Osman (WW3)</a>
 */
{
    \"sProcessing\":   \"מעבד...\",
    \"sLengthMenu\":   \"הצג _MENU_ פריטים\",
    \"sZeroRecords\":  \"לא נמצאו רשומות מתאימות\",
    \"sEmptyTable\":   \"לא נמצאו רשומות מתאימות\",
    \"sInfo\": \"_START_ עד _END_ מתוך _TOTAL_ רשומות\" ,
    \"sInfoEmpty\":    \"0 עד 0 מתוך 0 רשומות\",
    \"sInfoFiltered\": \"(מסונן מסך _MAX_  רשומות)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"חפש:\",
    \"url\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"ראשון\",
        \"sPrevious\": \"קודם\",
        \"sNext\":     \"הבא\",
        \"sLast\":     \"אחרון\"
    }
}
", "SgDatatablesBundle:i18n:he.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/he.json.twig");
    }
}
