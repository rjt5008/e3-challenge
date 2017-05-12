<?php

/* {# inline_template_start #}<div class="datebox">
<p class="month">{{ field_date }}</p>
<p class="day">{{ field_date_1 }} </p>
</div> */
class __TwigTemplate_5be62ffdc82c5e390ccbe01f00184f7ff0b5db07c27f7486ab3dcc6a82a31150 extends Twig_Template
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
<p class=\"month\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_date"]) ? $context["field_date"] : null), "html", null, true));
        echo "</p>
<p class=\"day\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_date_1"]) ? $context["field_date_1"] : null), "html", null, true));
        echo " </p>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"datebox\">
<p class=\"month\">{{ field_date }}</p>
<p class=\"day\">{{ field_date_1 }} </p>
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
<p class=\"month\">{{ field_date }}</p>
<p class=\"day\">{{ field_date_1 }} </p>
</div>";
    }
}
