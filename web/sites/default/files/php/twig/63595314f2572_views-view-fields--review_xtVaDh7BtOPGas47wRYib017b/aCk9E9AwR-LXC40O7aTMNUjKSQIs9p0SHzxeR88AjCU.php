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

/* themes/contrib/bootstrap5/templates/views/views-view-fields--reviews--block.html.twig */
class __TwigTemplate_658c739d6bf5f25ecb0e837319a9a5e020009b7ca17fa8ac5de2daa0739bd248 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<article class=\"card\">
  <h2 class=\"card__title\">";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "subject", [], "any", false, false, true, 33), "content", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "</h2>
  <div class=\"row\">
    <div class=\"col-4 card__cover\">";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_cover", [], "any", false, false, true, 35), "content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "</div>
    <div class=\"col-8 card__body\">";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "comment_body", [], "any", false, false, true, 36), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "</div>
  </div>
  <p class=\"card__content\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_tags", [], "any", false, false, true, 38), "content", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "</p>
</article>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/views/views-view-fields--reviews--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 38,  51 => 36,  47 => 35,  42 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display all the fields in a row.
*
* Available variables:
* - view: The view in use.
* - fields: A list of fields, each one contains:
* - content: The output of the field.
* - raw: The raw data for the field, if it exists. This is NOT output safe.
* - class: The safe class ID to use.
* - handler: The Views field handler controlling this field.
* - inline: Whether or not the field should be inline.
* - wrapper_element: An HTML element for a wrapper.
* - wrapper_attributes: List of attributes for wrapper element.
* - separator: An optional separator that may appear before a field.
* - label: The field's label text.
* - label_element: An HTML element for a label wrapper.
* - label_attributes: List of attributes for label wrapper.
* - label_suffix: Colon after the label.
* - element_type: An HTML element for the field content.
* - element_attributes: List of attributes for HTML element for field content.
* - has_label_colon: A boolean indicating whether to display a colon after
* the label.
* - element_type: An HTML element for the field content.
* - element_attributes: List of attributes for HTML element for field content.
* - row: The raw result from the query, with all data it fetched.
*
* @see template_preprocess_views_view_fields()
*/
#}
<article class=\"card\">
  <h2 class=\"card__title\">{{ (fields.subject.content) }}</h2>
  <div class=\"row\">
    <div class=\"col-4 card__cover\">{{ (fields.field_cover.content) }}</div>
    <div class=\"col-8 card__body\">{{ (fields.comment_body.content) }}</div>
  </div>
  <p class=\"card__content\">{{ (fields.field_tags.content) }}</p>
</article>

", "themes/contrib/bootstrap5/templates/views/views-view-fields--reviews--block.html.twig", "/var/www/html/web/themes/contrib/bootstrap5/templates/views/views-view-fields--reviews--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
