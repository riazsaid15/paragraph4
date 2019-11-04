<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/paragraph/templates/paragraph/paragraph--card.html.twig */
class __TwigTemplate_4db09df498cd3076885e0de00bd50346751e4ff5f3186a520759414ee9235c15 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 9];
        $filters = ["escape" => 10];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["align"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_text_alignment", []), "#items", [], "array"), "getString", [], "method");
        // line 2
        $context["width"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_width", []), "#items", [], "array"), "getString", [], "method");
        // line 3
        $context["pos"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_position", []), "#items", [], "array"), "getString", [], "method");
        // line 4
        $context["overlay"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_overlay", []), "#items", [], "array"), "getString", [], "method");
        // line 5
        $context["overlay"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image_overlay", []), "#items", [], "array"), "getString", [], "method");
        // line 6
        $context["vertical"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_vertical", []), "#items", [], "array"), "getString", [], "method");
        // line 7
        echo "

";
        // line 9
        if ((($context["vertical"] ?? null) == 0)) {
            // line 10
            echo "<div class=\"card text-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["align"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo "\" style=\"width: 18rem;\">
    <img src=\"";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "bp_image_field", []), 0, [], "array")), "html", null, true);
            echo " \" class=\"card-img-top order-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pos"] ?? null)), "html", null, true);
            echo "\" alt=\"...\">
    <div class=\"";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["overlay"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_card_body", [])), "html", null, true);
            echo "
    </div>
</div>
";
        }
        // line 17
        if ((($context["vertical"] ?? null) == 1)) {
            // line 18
            echo "<div class=\"card text-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["align"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
            echo "\" style=\"width: 18rem;\">
  <div class=\"row no-gutters\">
    <div class=\"col-md-4\">
    <img src=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "bp_image_field", []), 0, [], "array")), "html", null, true);
            echo " \" class=\"card-img-top order-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pos"] ?? null)), "html", null, true);
            echo "\" alt=\"...\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["overlay"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_card_body", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/paragraph/templates/paragraph/paragraph--card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 25,  116 => 24,  108 => 21,  99 => 18,  97 => 17,  90 => 13,  86 => 12,  80 => 11,  73 => 10,  71 => 9,  67 => 7,  65 => 6,  63 => 5,  61 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set align = content.field_text_alignment['#items'].getString() %}
{% set width = content.field_card_width['#items'].getString() %}
{% set pos = content.field_image_position['#items'].getString() %}
{% set overlay = content.field_image_overlay['#items'].getString() %}
{% set overlay = content.field_image_overlay['#items'].getString() %}
{% set vertical= content.field_vertical['#items'].getString() %}


{% if vertical==0 %}
<div class=\"card text-{{ align }} {{ width}}\" style=\"width: 18rem;\">
    <img src=\"{{ content.bp_image_field[0] }} \" class=\"card-img-top order-{{ pos }}\" alt=\"...\">
    <div class=\"{{ overlay }}\">
      {{ content.field_card_body }}
    </div>
</div>
{% endif %}
{% if vertical==1 %}
<div class=\"card text-{{ align }} {{ width}}\" style=\"width: 18rem;\">
  <div class=\"row no-gutters\">
    <div class=\"col-md-4\">
    <img src=\"{{ content.bp_image_field[0] }} \" class=\"card-img-top order-{{ pos }}\" alt=\"...\">
    </div>
    <div class=\"col-md-8\">
      <div class=\"{{ overlay }}\">
        {{ content.field_card_body }}
      </div>
    </div>
  </div>
</div>
{% endif %}", "themes/paragraph/templates/paragraph/paragraph--card.html.twig", "C:\\xampp\\htdocs\\paragraph4\\themes\\paragraph\\templates\\paragraph\\paragraph--card.html.twig");
    }
}
