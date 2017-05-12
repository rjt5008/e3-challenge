<?php

/* {# inline_template_start #}<div id="caption">
<div class="time">{{ field_run_time }}</div>
<h3>{{ title }}</h3>
<div class"more"><span class="link"><a href="/node/{{ did }}">Learn More <i class="fa fa-chevron-circle-right" aria-hidden="true"></I></a></span></div>
</div> */
class __TwigTemplate_522d49e7b9e9ffa55ea87ccebd7063af30674a46ffa086ca54104e3b83dcf3ab extends Twig_Template
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
        echo "<div id=\"caption\">
<div class=\"time\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_run_time"]) ? $context["field_run_time"] : null), "html", null, true));
        echo "</div>
<h3>";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h3>
<div class\"more\"><span class=\"link\"><a href=\"/node/";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["did"]) ? $context["did"] : null), "html", null, true));
        echo "\">Learn More <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></I></a></span></div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div id=\"caption\">
<div class=\"time\">{{ field_run_time }}</div>
<h3>{{ title }}</h3>
<div class\"more\"><span class=\"link\"><a href=\"/node/{{ did }}\">Learn More <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></I></a></span></div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  50 => 2,  47 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div id=\"caption\">
<div class=\"time\">{{ field_run_time }}</div>
<h3>{{ title }}</h3>
<div class\"more\"><span class=\"link\"><a href=\"/node/{{ did }}\">Learn More <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></I></a></span></div>
</div>";
    }
}
