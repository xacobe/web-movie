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

/* themes/contrib/bootstrap5/templates/block/block--boostrap-tabs.html.twig */
class __TwigTemplate_70801c85476c185c336d6a10b9a93e178bda1293bf70b76bd083f90f2bfdecb2 extends \Twig\Template
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
        // line 29
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 31
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 31), 31, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id"] ?? null), 32, $this->source)))];
        // line 35
        echo "
<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
  <li class=\"nav-item\" role=\"presentation\">
    <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\"
      data-bs-target=\"#home-tab-pane\" type=\"button\" role=\"tab\"
      aria-controls=\"home-tab-pane\" aria-selected=\"true\">Noticias películas</button>
  </li>
  <li class=\"nav-item\" role=\"presentation\">
    <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\"
      data-bs-target=\"#profile-tab-pane\" type=\"button\" role=\"tab\"
      aria-controls=\"profile-tab-pane\" aria-selected=\"false\">Noticias celebridades</button>
  </li>
</ul>
<div class=\"tab-content\" id=\"myTabContent\">
  <div class=\"tab-pane fade show active\" id=\"home-tab-pane\" role=\"tabpanel\"
    aria-labelledby=\"home-tab\" tabindex=\"0\">
  <div class=\"primero\">";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_referencia", [], "any", false, false, true, 51), 0, [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"tab-pane fade\" id=\"profile-tab-pane\" role=\"tabpanel\"
    aria-labelledby=\"profile-tab\" tabindex=\"0\">
  <div class=\"segundo\">";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_referencia", [], "any", false, false, true, 55)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null), 55, $this->source), "html", null, true);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/block/block--boostrap-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 55,  61 => 51,  43 => 35,  41 => 32,  40 => 31,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}

<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
  <li class=\"nav-item\" role=\"presentation\">
    <button class=\"nav-link active\" id=\"home-tab\" data-bs-toggle=\"tab\"
      data-bs-target=\"#home-tab-pane\" type=\"button\" role=\"tab\"
      aria-controls=\"home-tab-pane\" aria-selected=\"true\">Noticias películas</button>
  </li>
  <li class=\"nav-item\" role=\"presentation\">
    <button class=\"nav-link\" id=\"profile-tab\" data-bs-toggle=\"tab\"
      data-bs-target=\"#profile-tab-pane\" type=\"button\" role=\"tab\"
      aria-controls=\"profile-tab-pane\" aria-selected=\"false\">Noticias celebridades</button>
  </li>
</ul>
<div class=\"tab-content\" id=\"myTabContent\">
  <div class=\"tab-pane fade show active\" id=\"home-tab-pane\" role=\"tabpanel\"
    aria-labelledby=\"home-tab\" tabindex=\"0\">
  <div class=\"primero\">{{ content.field_referencia.0 }}</div>
  </div>
  <div class=\"tab-pane fade\" id=\"profile-tab-pane\" role=\"tabpanel\"
    aria-labelledby=\"profile-tab\" tabindex=\"0\">
  <div class=\"segundo\">{{ content.field_referencia[1] }}</div>
  </div>
</div>
", "themes/contrib/bootstrap5/templates/block/block--boostrap-tabs.html.twig", "/var/www/html/web/themes/contrib/bootstrap5/templates/block/block--boostrap-tabs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29);
        static $filters = array("clean_class" => 31, "escape" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
