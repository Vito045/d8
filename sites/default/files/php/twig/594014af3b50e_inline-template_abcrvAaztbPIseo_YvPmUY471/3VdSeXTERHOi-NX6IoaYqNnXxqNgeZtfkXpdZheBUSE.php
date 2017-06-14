<?php

/* {# inline_template_start #}{% set attributes = create_attribute() %}
<h2{{ attributes.setAttribute('id', 'custom').setAttribute('style', 'color:' ~ data.color) }}>
  Hello {{ data.first_name }} {{ data.last_name }}!!!
</h2>
<p>You are {{ ('now'|date('Y')) - (data.date_of_birth|date('Y'))  }} years old.</p>
 */
class __TwigTemplate_bb970ca086eecde355635d2370f3600a2a64455e01d33651c5fc02162d919680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 1);
        $filters = array("date" => 5);
        $functions = array("create_attribute" => 1);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('date'),
                array('create_attribute')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $context["attributes"] = $this->env->getExtension('drupal_core')->createAttribute();
        // line 2
        echo "<h2";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "id", 1 => "custom"), "method"), "setAttribute", array(0 => "style", 1 => ("color:" . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "color", array()))), "method"), "html", null, true));
        echo ">
  Hello ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "first_name", array()), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_name", array()), "html", null, true));
        echo "!!!
</h2>
<p>You are ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "date_of_birth", array()), "Y")), "html", null, true));
        echo " years old.</p>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% set attributes = create_attribute() %}
<h2{{ attributes.setAttribute('id', 'custom').setAttribute('style', 'color:' ~ data.color) }}>
  Hello {{ data.first_name }} {{ data.last_name }}!!!
</h2>
<p>You are {{ ('now'|date('Y')) - (data.date_of_birth|date('Y'))  }} years old.</p>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 5,  55 => 3,  50 => 2,  48 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{% set attributes = create_attribute() %}
<h2{{ attributes.setAttribute('id', 'custom').setAttribute('style', 'color:' ~ data.color) }}>
  Hello {{ data.first_name }} {{ data.last_name }}!!!
</h2>
<p>You are {{ ('now'|date('Y')) - (data.date_of_birth|date('Y'))  }} years old.</p>
";
    }
}
