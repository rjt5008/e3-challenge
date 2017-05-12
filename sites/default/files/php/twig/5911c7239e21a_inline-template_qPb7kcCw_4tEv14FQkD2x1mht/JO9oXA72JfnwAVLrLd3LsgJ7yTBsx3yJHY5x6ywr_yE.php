<?php

/* {# inline_template_start #}<div class="datebox">
<span class="month">{{ field_date }}</span>
<span class="day">{{ field_date_1 }} </span>
</div> */
class __TwigTemplate_017811f3c9754121a4897c4a7ba11a5551eb58314b443badd2d45e0e37b5bdb7 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
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
        echo "<div class=\"datebox\">
<span class=\"month\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_date"]) ? $context["field_date"] : null), "html", null, true));
        echo "</span>
<span class=\"day\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_date_1"]) ? $context["field_date_1"] : null), "html", null, true));
        echo " </span>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"datebox\">
<span class=\"month\">{{ field_date }}</span>
<span class=\"day\">{{ field_date_1 }} </span>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  49 => 2,  46 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"datebox\">
<span class=\"month\">{{ field_date }}</span>
<span class=\"day\">{{ field_date_1 }} </span>
</div>";
    }
}
