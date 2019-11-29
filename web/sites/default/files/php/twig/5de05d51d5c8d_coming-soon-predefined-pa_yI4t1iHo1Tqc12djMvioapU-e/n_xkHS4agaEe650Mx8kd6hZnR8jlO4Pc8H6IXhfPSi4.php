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

/* modules/contrib/coming_soon/templates/coming-soon-predefined-page.html.twig */
class __TwigTemplate_1ac2e468cdbd1d72f8b7c73083114d8744a7b3a065d9a421234495bc6f0888af extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["t" => 7, "escape" => 7, "raw" => 15, "date" => 72];
        $functions = ["file_url" => 66];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'raw', 'date'],
                ['file_url']
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
        echo "<div id=\"wrapper\" class=\"cs-wrapper\">
  <div class=\"container cs-container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 6
        echo "        ";
        if (($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_logo"], "method") && ($context["logo"] ?? null))) {
            // line 7
            echo "        <img alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true));
            echo "\" id=\"cs-logo\"/>
        ";
        }
        // line 9
        echo "        ";
        // line 10
        echo "        ";
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_heading"], "method")) {
            // line 11
            echo "        <h1 id=\"cs-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_heading"], "method")), "html", null, true));
            echo "</h1>
        ";
        }
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_body.value"], "method")) {
            // line 15
            echo "        <div class=\"subtitle\" id=\"cs-subtitle\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_body.value"], "method"))));
            echo "</div>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_end_date"], "method")) {
            // line 19
            echo "          <div id=\"countdown\"></div>
        ";
        }
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_notification"], "method")) {
            // line 24
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "html", null, true));
            echo "
        ";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true));
            echo "
        ";
        }
        // line 27
        echo "
        ";
        // line 29
        echo "        <div class=\"social\" id=\"cs-social-networks\">
          ";
        // line 30
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_facebook"], "method")) {
            // line 31
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_facebook"], "method")), "html", null, true));
            echo "\" title=\"Facebook\" target=\"_blank\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
          ";
        }
        // line 33
        echo "          ";
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_twitter"], "method")) {
            // line 34
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_twitter"], "method")), "html", null, true));
            echo "\" title=\"Twitter\" target=\"_blank\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
          ";
        }
        // line 36
        echo "          ";
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_googleplus"], "method")) {
            // line 37
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_googleplus"], "method")), "html", null, true));
            echo "\" title=\"Google+\" target=\"_blank\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a>
          ";
        }
        // line 39
        echo "          ";
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_linkedin"], "method")) {
            // line 40
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_linkedin"], "method")), "html", null, true));
            echo "\" title=\"Linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
          ";
        }
        // line 42
        echo "        </div>
      </div>

    </div>
    <div class=\"row\">
      <div class=\"col-lg-6 col-lg-offset-3\">
        ";
        // line 49
        echo "        <p class=\"copyright\" id=\"cs-copyrights\">
          ";
        // line 50
        if ($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_copyrights"], "method")) {
            // line 51
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_copyrights"], "method"))));
            echo "
          ";
        }
        // line 53
        echo "        </p>
        <div class=\"credits\">
        </div>
      </div>
    </div>
  </div>
</div>

";
        // line 63
        echo "<script type=\"text/javascript\">
  ";
        // line 64
        if ($this->getAttribute(($context["background"] ?? null), "getFileUri", [], "method")) {
            // line 65
            echo "  document.body.classList.add(\"path-coming-soon\");
  document.body.style.background = \"url('";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["background"] ?? null), "getFileUri", [], "method"))]), "html", null, true));
            echo "') no-repeat center center fixed\";
  document.body.style.backgroundSize = \"cover\";
  ";
        }
        // line 69
        echo "  var checkExist = setInterval(function() {
    if (jQuery('#countdown').length) {
      clearInterval(checkExist);
      jQuery('#countdown').countdown('";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\flag\TwigExtension\FlagCount')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["config"] ?? null), "get", [0 => "coming_soon_end_date"], "method")), "Y/m/d"), "html", null, true));
        echo "', function(event) {
        jQuery(this).html(event.strftime('<strong>%w</strong> weeks <strong>%d</strong> days <br /> %H:%M:%S'));
      });
    }
  }, 100);
</script>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/coming_soon/templates/coming-soon-predefined-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 72,  203 => 69,  197 => 66,  194 => 65,  192 => 64,  189 => 63,  179 => 53,  173 => 51,  171 => 50,  168 => 49,  160 => 42,  154 => 40,  151 => 39,  145 => 37,  142 => 36,  136 => 34,  133 => 33,  127 => 31,  125 => 30,  122 => 29,  119 => 27,  114 => 25,  109 => 24,  106 => 23,  103 => 21,  99 => 19,  97 => 18,  94 => 17,  88 => 15,  85 => 14,  83 => 13,  77 => 11,  74 => 10,  72 => 9,  64 => 7,  61 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/coming_soon/templates/coming-soon-predefined-page.html.twig", "/var/www/html/web/modules/contrib/coming_soon/templates/coming-soon-predefined-page.html.twig");
    }
}
