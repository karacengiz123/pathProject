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

/* SgDatatablesBundle:i18n:vi.json.twig */
class __TwigTemplate_a8339b47f29fada554f1913e3291ece3b68474e6efaefd12d948724eded287b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:vi.json.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:i18n:vi.json.twig"));

        // line 1
        echo "/**
 * Vietnamese translation
 *  @name Vietnamese
 *  @anchor Vietnamese
 *  @author Trinh Phuoc Thai
 */
{
    \"sProcessing\":   \"Đang xử lý...\",
    \"sLengthMenu\":   \"Xem _MENU_ mục\",
    \"sZeroRecords\":  \"Không tìm thấy dòng nào phù hợp\",
    \"sInfo\":         \"Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục\",
    \"sInfoEmpty\":    \"Đang xem 0 đến 0 trong tổng số 0 mục\",
    \"sInfoFiltered\": \"(được lọc từ _MAX_ mục)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Tìm:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Đầu\",
        \"sPrevious\": \"Trước\",
        \"sNext\":     \"Tiếp\",
        \"sLast\":     \"Cuối\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:i18n:vi.json.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Vietnamese translation
 *  @name Vietnamese
 *  @anchor Vietnamese
 *  @author Trinh Phuoc Thai
 */
{
    \"sProcessing\":   \"Đang xử lý...\",
    \"sLengthMenu\":   \"Xem _MENU_ mục\",
    \"sZeroRecords\":  \"Không tìm thấy dòng nào phù hợp\",
    \"sInfo\":         \"Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục\",
    \"sInfoEmpty\":    \"Đang xem 0 đến 0 trong tổng số 0 mục\",
    \"sInfoFiltered\": \"(được lọc từ _MAX_ mục)\",
    \"sInfoPostFix\":  \"\",
    \"sSearch\":       \"Tìm:\",
    \"sUrl\":          \"\",
    \"oPaginate\": {
        \"sFirst\":    \"Đầu\",
        \"sPrevious\": \"Trước\",
        \"sNext\":     \"Tiếp\",
        \"sLast\":     \"Cuối\"
    }
}
", "SgDatatablesBundle:i18n:vi.json.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/i18n/vi.json.twig");
    }
}
