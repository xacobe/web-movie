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

/* core/themes/claro/templates/admin/update-version.html.twig */
class __TwigTemplate_06d6225b14d780d5a10673adabda72017beef729aba55bd86776430bd4400246 extends \Twig\Template
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
        // line 26
        echo "<div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo " project-update__version\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 26, $this->source), "class"), "html", null, true);
        echo ">
  <div class=\"layout-row clearfix\">
    <div class=\"project-update__version-title layout-column layout-column--quarter\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 28, $this->source), "html", null, true);
        echo "</div>
    <div class=\"project-update__version-details layout-column layout-column--quarter\">
      <a href=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["version"] ?? null), "release_link", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["version"] ?? null), "version", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "</a>
      <span class=\"project-update__version-date\">(";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["version"] ?? null), "date", [], "any", false, false, true, 31), 31, $this->source), "Y-M-d"), "html", null, true);
        echo ")</span>
    </div>
    <div class=\"layout-column layout-column--half\">
      <ul class=\"project-update__version-links\">
        ";
        // line 35
        if (( !twig_get_attribute($this->env, $this->source, ($context["version"] ?? null), "core_compatible", [], "any", true, true, true, 35) || twig_get_attribute($this->env, $this->source, ($context["version"] ?? null), "core_compatible", [], "any", false, false, true, 35))) {
            // line 36
            echo "          <li class=\"project-update__download-link\">
            <a href=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["version"] ?? null), "download_link", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Download"));
            echo "</a>
          </li>
        ";
        }
        // line 40
        echo "        <li class=\"project-update__release-notes-link\">
          <a href=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["version"] ?? null), "release_link", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Release notes"));
        echo "</a>
        </li>
        ";
        // line 43
        if (($context["core_compatibility_details"] ?? null)) {
            // line 44
            echo "          <li class=\"project-update__compatibility-details\">
            ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["core_compatibility_details"] ?? null), 45, $this->source), "html", null, true);
            echo "
          </li>
        ";
        }
        // line 48
        echo "      </ul>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/admin/update-version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 48,  93 => 45,  90 => 44,  88 => 43,  81 => 41,  78 => 40,  70 => 37,  67 => 36,  65 => 35,  58 => 31,  52 => 30,  47 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the version display of a project.
 *
 * Available variables:
 * - attributes: HTML attributes suitable for a container element.
 * - title: The title of the project.
 * - core_compatibility_details: Render array of core compatibility details.
 * - version:  A list of data about the latest released version, containing:
 *   - version: The version number.
 *   - date: The date of the release.
 *   - download_link: The URL for the downloadable file.
 *   - release_link: The URL for the release notes.
 *   - core_compatible: A flag indicating whether the project is compatible
 *     with the currently installed version of Drupal core. This flag is not
 *     set for the Drupal core project itself.
 *   - core_compatibility_message: A message indicating the versions of Drupal
 *     core with which this project is compatible. This message is also
 *     contained within the 'core_compatibility_details' variable documented
 *     above. This message is not set for the Drupal core project itself.
 *
 * @see template_preprocess_update_version()
 */
#}
<div class=\"{{ attributes.class }} project-update__version\"{{ attributes|without('class') }}>
  <div class=\"layout-row clearfix\">
    <div class=\"project-update__version-title layout-column layout-column--quarter\">{{ title }}</div>
    <div class=\"project-update__version-details layout-column layout-column--quarter\">
      <a href=\"{{ version.release_link }}\">{{ version.version }}</a>
      <span class=\"project-update__version-date\">({{ version.date|date('Y-M-d') }})</span>
    </div>
    <div class=\"layout-column layout-column--half\">
      <ul class=\"project-update__version-links\">
        {% if version.core_compatible is not defined or version.core_compatible %}
          <li class=\"project-update__download-link\">
            <a href=\"{{ version.download_link }}\">{{ 'Download'|t }}</a>
          </li>
        {% endif %}
        <li class=\"project-update__release-notes-link\">
          <a href=\"{{ version.release_link }}\">{{ 'Release notes'|t }}</a>
        </li>
        {% if core_compatibility_details %}
          <li class=\"project-update__compatibility-details\">
            {{ core_compatibility_details }}
          </li>
        {% endif %}
      </ul>
    </div>
  </div>
</div>
", "core/themes/claro/templates/admin/update-version.html.twig", "/var/www/html/web/core/themes/claro/templates/admin/update-version.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35);
        static $filters = array("escape" => 26, "without" => 26, "date" => 31, "t" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 'date', 't'],
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
