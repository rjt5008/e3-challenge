<?php

/* {# inline_template_start #}<div id="feature" class="row">
<div class="col-md-6 pull-left">
<img class="img-responsive">{{ field_image }}
</div>
<div class="col-md-6 pull-right">
<span class="date">{{ field_date }}</span>
<h2>{{ title }}</h2>
<p>{{ body }}</p>
</div>
</div> */
class __TwigTemplate_a73f5110c7f58f243d6606dac651c559c4e11f02f45a82c58e87b0a886f2b952 extends Twig_Template
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
        echo "<div id=\"feature\" class=\"row\">
<div class=\"col-md-6 pull-left\">
<img class=\"img-responsive\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
</div>
<div class=\"col-md-6 pull-right\">
<span class=\"date\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_date"]) ? $context["field_date"] : null), "html", null, true));
        echo "</span>
<h2>";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
<p>";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</p>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div id=\"feature\" class=\"row\">
<div class=\"col-md-6 pull-left\">
<img class=\"img-responsive\">{{ field_image }}
</div>
<div class=\"col-md-6 pull-right\">
<span class=\"date\">{{ field_date }}</span>
<h2>{{ title }}</h2>
<p>{{ body }}</p>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  66 => 7,  62 => 6,  56 => 3,  52 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div id=\"feature\" class=\"row\">
<div class=\"col-md-6 pull-left\">
<img class=\"img-responsive\">{{ field_image }}
</div>
<div class=\"col-md-6 pull-right\">
<span class=\"date\">{{ field_date }}</span>
<h2>{{ title }}</h2>
<p>{{ body }}</p>
</div>
</div>";
    }
}
