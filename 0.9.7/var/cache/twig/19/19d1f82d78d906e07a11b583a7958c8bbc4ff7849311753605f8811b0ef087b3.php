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

/* themes/docs/templates/default.html */
class __TwigTemplate_8c7bcc5058a795e666dc672277525bdbe7bc13f1524eccd3f59defc21cd39ced extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "themes/docs/templates/partials/base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("themes/docs/templates/partials/base.html", "themes/docs/templates/default.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"page-content pl-10 pr-10\">
    <h1>
        ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "
    </h1>
    <div class=\"flex flex-col-reverse lg:flex-row relative\">
        <div class=\"";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "on_this_page", [], "any", false, false, false, 9)) {
            echo "w-full lg:w-9/12";
        } else {
            echo "w-full";
        }
        echo "\">
            ";
        // line 10
        echo $this->extensions['Flextype\MarkdownTwigExtension']->markdown($this->extensions['Flextype\ShortcodesTwigExtension']->shortcode(twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "content", [], "any", false, false, false, 10)));
        echo "
        </div>
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "on_this_page", [], "any", false, false, false, 12)) {
            // line 13
            echo "        <div class=\"w-full lg:w-3/12 block relative\">
            <div class=\"lg:sticky lg:top-0\">
                <div class=\"p-0 mb-10 lg:mb-0 lg:pl-6\">
                    <h4 class=\"m-0 p-0 pb-1\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 16), "common", [], "any", false, false, false, 16), "on_this_page", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>
                    <ul class=\"list-none m-0 p-0\">
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "on_this_page", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "                            <li><a class=\"text-decoration-none\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 19), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 19), "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                    </ul>
                </div>
            </div>
        </div>
        ";
        }
        // line 26
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/docs/templates/default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  100 => 21,  89 => 19,  85 => 18,  80 => 16,  75 => 13,  73 => 12,  68 => 10,  60 => 9,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/docs/templates/default.html", "/Applications/MAMP/htdocs/docs.flextype.org/site/themes/docs/templates/default.html");
    }
}
