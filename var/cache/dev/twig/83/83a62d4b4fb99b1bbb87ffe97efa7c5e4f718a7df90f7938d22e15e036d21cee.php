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

/* SgDatatablesBundle:skeleton:datatable.php.twig */
class __TwigTemplate_40d0d400f492206399c5b4c1df7a402eb3bcd2a57b2c5d7cc2a89996c885987b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'use_statements' => [$this, 'block_use_statements'],
            'class_definition' => [$this, 'block_class_definition'],
            'class_body' => [$this, 'block_class_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:skeleton:datatable.php.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SgDatatablesBundle:skeleton:datatable.php.twig"));

        // line 1
        echo "<?php

namespace ";
        // line 3
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Datatables;

";
        // line 5
        $this->displayBlock('use_statements', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('class_definition', $context, $blocks);
        // line 33
        echo "{
";
        // line 34
        $this->displayBlock('class_body', $context, $blocks);
        // line 118
        echo "}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_use_statements($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "use_statements"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "use_statements"));

        // line 6
        echo "use Sg\\DatatablesBundle\\Datatable\\AbstractDatatable;
use Sg\\DatatablesBundle\\Datatable\\Style;
use Sg\\DatatablesBundle\\Datatable\\Column\\Column;
use Sg\\DatatablesBundle\\Datatable\\Column\\BooleanColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\ActionColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\MultiselectColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\VirtualColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\DateTimeColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\ImageColumn;
use Sg\\DatatablesBundle\\Datatable\\Filter\\TextFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\NumberFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\SelectFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\DateRangeFilter;
use Sg\\DatatablesBundle\\Datatable\\Editable\\CombodateEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\SelectEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\TextareaEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\TextEditable;
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_class_definition($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_definition"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_definition"));

        // line 26
        echo "/**
 * Class ";
        // line 27
        echo twig_escape_filter($this->env, ($context["datatable_class"] ?? null), "html", null, true);
        echo "
 *
 * @package ";
        // line 29
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Datatables
 */
class ";
        // line 31
        echo twig_escape_filter($this->env, ($context["datatable_class"] ?? null), "html", null, true);
        echo " extends AbstractDatatable
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_class_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "class_body"));

        // line 35
        echo "    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array \$options = array())
    {
        \$this->language->set(array(
            'cdn_language_by_locale' => true
            //'language' => 'de'
        ));

        \$this->ajax->set(array(
        ));

        \$this->options->set(array(
            'individual_filtering' => true,
            'individual_filtering_position' => 'head',
            'order_cells_top' => true,
        ));

        \$this->features->set(array(
        ));

        \$this->columnBuilder
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 59
            echo "->add('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 59), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "column_type", [], "any", false, false, false, 59), "html", null, true);
            echo ", array(
                'title' => '";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 60), "html", null, true);
            echo "',
                ";
            // line 61
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["field"], "data", [], "any", false, false, false, 61))) {
                // line 62
                echo "'data' => '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "data", [], "any", false, false, false, 62), "html", null, true);
                echo "'
                ";
            }
            // line 64
            echo "))
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "->add(null, ActionColumn::class, array(
                'title' => \$this->translator->trans('sg.datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => '";
        // line 70
        echo twig_escape_filter($this->env, ($context["route_pref"] ?? null), "html", null, true);
        echo "_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('sg.datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('sg.datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => '";
        // line 84
        echo twig_escape_filter($this->env, ($context["route_pref"] ?? null), "html", null, true);
        echo "_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('sg.datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('sg.datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return '";
        // line 107
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Entity";
        ((($context["entity_namespace"] ?? null)) ? (print (twig_escape_filter($this->env, ("\\" . ($context["entity_namespace"] ?? null)), "html", null, true))) : (print ("")));
        echo "\\";
        echo twig_escape_filter($this->env, ($context["entity_class"] ?? null), "html", null, true);
        echo "';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '";
        // line 115
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? null), "html", null, true);
        echo "';
    }
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:skeleton:datatable.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 115,  264 => 107,  238 => 84,  221 => 70,  215 => 66,  208 => 64,  202 => 62,  200 => 61,  196 => 60,  189 => 59,  185 => 58,  160 => 35,  150 => 34,  138 => 31,  133 => 29,  128 => 27,  125 => 26,  115 => 25,  88 => 6,  78 => 5,  67 => 118,  65 => 34,  62 => 33,  60 => 25,  57 => 24,  55 => 5,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace {{ namespace }}\\Datatables;

{% block use_statements %}
use Sg\\DatatablesBundle\\Datatable\\AbstractDatatable;
use Sg\\DatatablesBundle\\Datatable\\Style;
use Sg\\DatatablesBundle\\Datatable\\Column\\Column;
use Sg\\DatatablesBundle\\Datatable\\Column\\BooleanColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\ActionColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\MultiselectColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\VirtualColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\DateTimeColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\ImageColumn;
use Sg\\DatatablesBundle\\Datatable\\Filter\\TextFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\NumberFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\SelectFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\DateRangeFilter;
use Sg\\DatatablesBundle\\Datatable\\Editable\\CombodateEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\SelectEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\TextareaEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\TextEditable;
{% endblock use_statements %}

{% block class_definition %}
/**
 * Class {{ datatable_class }}
 *
 * @package {{ namespace }}\\Datatables
 */
class {{ datatable_class }} extends AbstractDatatable
{% endblock class_definition %}
{
{% block class_body %}
    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array \$options = array())
    {
        \$this->language->set(array(
            'cdn_language_by_locale' => true
            //'language' => 'de'
        ));

        \$this->ajax->set(array(
        ));

        \$this->options->set(array(
            'individual_filtering' => true,
            'individual_filtering_position' => 'head',
            'order_cells_top' => true,
        ));

        \$this->features->set(array(
        ));

        \$this->columnBuilder
            {% for field in fields -%}
            ->add('{{ field.property }}', {{ field.column_type }}, array(
                'title' => '{{ field.title }}',
                {% if field.data is not null -%}
                    'data' => '{{ field.data }}'
                {% endif -%}
                ))
            {% endfor -%}
            ->add(null, ActionColumn::class, array(
                'title' => \$this->translator->trans('sg.datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => '{{ route_pref }}_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('sg.datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('sg.datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => '{{ route_pref }}_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('sg.datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('sg.datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return '{{ namespace }}\\Entity{{ entity_namespace ? '\\\\' ~ entity_namespace : '' }}\\{{ entity_class }}';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '{{ datatable_name }}';
    }
{% endblock class_body %}
}
", "SgDatatablesBundle:skeleton:datatable.php.twig", "/Users/cengizkara/PhpstormProjects/pathproject/vendor/sg/datatablesbundle/Resources/views/skeleton/datatable.php.twig");
    }
}
