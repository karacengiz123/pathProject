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

/* SgDatatablesBundle:i18n:ne.json.twig */
class __TwigTemplate_af4d1a00747d846a87a80ff05fb9b6cee978c8810db68d8dbcb5c88527d72982 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ne.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:ne.json.twig"));

        // line 1
        echo "/**
 * Nepali
 *  @name Nepali
 *  @anchor Nepali
 *  @author Bishwo Adhikari
 */
{
    \"sEmptyTable\":   \"टेबलमा डाटा उपलब्ध भएन\",
    \"sInfo\":         \"_TOTAL_ रेकर्ड मध्य _START_ देखि _END_ रेकर्ड देखाउंदै\",
    \"sInfoEmpty\":    \"0 मध्य 0 देखि 0 रेकर्ड देखाउंदै\",
    \"sInfoFiltered\": \"(_MAX_ कुल रेकर्डबाट छनौट गरिएको)\",
    \"sInfoPostFix\":  \"\",
    \"sInfoThousands\": \",\",
    \"sLengthMenu\":   \" _MENU_ रेकर्ड देखाउने \",
    \"sLoadingRecords\": \"लोड हुँदैछ...\",
    \"sProcessing\":   \"प्रगति हुदैंछ ...\",
    \"sSearch\":       \"खोजी:\",
    \"sUrl\":          \"\",
    \"sZeroRecords\":  \"कुनै मिल्ने रेकर्ड फेला परेन\",
    \"oPaginate\": {
        \"sFirst\":    \"प्रथम\",
        \"sPrevious\": \"पछिल्लो\",
        \"sNext\":     \"अघिल्लो\",
        \"sLast\":     \"अन्तिम\"
    },
    \"oAria\": {
        \"sSortAscending\": \": अगाडिबाट अक्षरात्मक रूपमा क्रमबद्ध गराउने\",
        \"sSortDescending\": \": पछाडिबाट अक्षरात्मक रूपमा क्रमबद्ध गराउने\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:ne.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Nepali
 *  @name Nepali
 *  @anchor Nepali
 *  @author Bishwo Adhikari
 */
{
    \"sEmptyTable\":   \"टेबलमा डाटा उपलब्ध भएन\",
    \"sInfo\":         \"_TOTAL_ रेकर्ड मध्य _START_ देखि _END_ रेकर्ड देखाउंदै\",
    \"sInfoEmpty\":    \"0 मध्य 0 देखि 0 रेकर्ड देखाउंदै\",
    \"sInfoFiltered\": \"(_MAX_ कुल रेकर्डबाट छनौट गरिएको)\",
    \"sInfoPostFix\":  \"\",
    \"sInfoThousands\": \",\",
    \"sLengthMenu\":   \" _MENU_ रेकर्ड देखाउने \",
    \"sLoadingRecords\": \"लोड हुँदैछ...\",
    \"sProcessing\":   \"प्रगति हुदैंछ ...\",
    \"sSearch\":       \"खोजी:\",
    \"sUrl\":          \"\",
    \"sZeroRecords\":  \"कुनै मिल्ने रेकर्ड फेला परेन\",
    \"oPaginate\": {
        \"sFirst\":    \"प्रथम\",
        \"sPrevious\": \"पछिल्लो\",
        \"sNext\":     \"अघिल्लो\",
        \"sLast\":     \"अन्तिम\"
    },
    \"oAria\": {
        \"sSortAscending\": \": अगाडिबाट अक्षरात्मक रूपमा क्रमबद्ध गराउने\",
        \"sSortDescending\": \": पछाडिबाट अक्षरात्मक रूपमा क्रमबद्ध गराउने\"
    }
}
", "SgDatatablesBundle:i18n:ne.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/ne.json.twig");
    }
}
