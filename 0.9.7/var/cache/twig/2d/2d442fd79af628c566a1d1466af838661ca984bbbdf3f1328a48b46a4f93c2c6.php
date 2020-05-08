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

/* themes/docs/templates/partials/base.html */
class __TwigTemplate_b97b6021868909740ecab94be8b8a48bd3434ea9e86c2821d3c8b2569993f38a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 3
        $context["entry_locale"] = twig_get_attribute($this->env, $this->source, ($context["entries"] ?? null), "fetch", [0 => ($context["locale"] ?? null)], "method", false, false, false, 3);
        // line 4
        echo "    ";
        $context["static_version"] = 2;
        // line 5
        echo "    <head>
        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 90
        echo "    </head>
    <body>
        <div class=\"w-full flex\">
            <div id=\"shadow\" onclick=\"hideMenu();\" class=\"hidden z-30 fixed block opacity-75 h-full w-full\" style=\"background: black;\"></div>
            <div id=\"menu\" class=\"hidden lg:block w-3/12 pl-12 pt-6 pb-10 text-brand-white bg-brand-black sidebar\">
                <div class=\"flextype-docs-logo\">
                    <h2>FLEXTYPE</h2>
                    <h3>DOCUMENTATION</h3>
                </div>
                <h4>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 99), "categories", [], "any", false, false, false, 99), "basics", [], "any", false, false, false, 99), "title", [], "any", false, false, false, 99), "html", null, true);
        echo "</h4>
                <ul class=\"m-0 p-0 list-none\">
                    <li class=\"";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 101) == ($context["locale"] ?? null))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 102), "categories", [], "any", false, false, false, 102), "basics", [], "any", false, false, false, 102), "what_is_flextype", [], "any", false, false, false, 102), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 104) == (($context["locale"] ?? null) . "/basics/requirements"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/basics/requirements\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 105), "categories", [], "any", false, false, false, 105), "basics", [], "any", false, false, false, 105), "requirements", [], "any", false, false, false, 105), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 107) == (($context["locale"] ?? null) . "/basics/installation"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/basics/installation\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 108), "categories", [], "any", false, false, false, 108), "basics", [], "any", false, false, false, 108), "installation", [], "any", false, false, false, 108), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 110) == (($context["locale"] ?? null) . "/basics/configuration"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/basics/configuration\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 111), "categories", [], "any", false, false, false, 111), "basics", [], "any", false, false, false, 111), "configuration", [], "any", false, false, false, 111), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 113
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 113) == (($context["locale"] ?? null) . "/basics/folder-structure"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/basics/folder-structure\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 114), "categories", [], "any", false, false, false, 114), "basics", [], "any", false, false, false, 114), "folder_structure", [], "any", false, false, false, 114), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 116
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 116) == (($context["locale"] ?? null) . "/basics/php-constants"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/basics/php-constants\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 117), "categories", [], "any", false, false, false, 117), "basics", [], "any", false, false, false, 117), "php_constants", [], "any", false, false, false, 117), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 119
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 119) == (($context["locale"] ?? null) . "/basics/coc"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/basics/coc\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 120), "categories", [], "any", false, false, false, 120), "basics", [], "any", false, false, false, 120), "coc", [], "any", false, false, false, 120), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 122) == (($context["locale"] ?? null) . "/basics/getting-help"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/basics/getting-help\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 123), "categories", [], "any", false, false, false, 123), "basics", [], "any", false, false, false, 123), "getting_help", [], "any", false, false, false, 123), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 125) == (($context["locale"] ?? null) . "/basics/license"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/basics/license\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 126), "categories", [], "any", false, false, false, 126), "basics", [], "any", false, false, false, 126), "license", [], "any", false, false, false, 126), "html", null, true);
        echo "</a>
                    </li>
                </ul>
                <h4 class=\"pt-8\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 129), "categories", [], "any", false, false, false, 129), "content", [], "any", false, false, false, 129), "title", [], "any", false, false, false, 129), "html", null, true);
        echo "</h4>
                <ul class=\"m-0 p-0 list-none\">
                    <li class=\"";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 131) == (($context["locale"] ?? null) . "/content/entries"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/content/entries\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 132), "categories", [], "any", false, false, false, 132), "content", [], "any", false, false, false, 132), "entries", [], "any", false, false, false, 132), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 134) == (($context["locale"] ?? null) . "/content/media"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/content/media\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 135), "categories", [], "any", false, false, false, 135), "content", [], "any", false, false, false, 135), "media", [], "any", false, false, false, 135), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 137) == (($context["locale"] ?? null) . "/content/shortcodes"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/content/shortcodes\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 138), "categories", [], "any", false, false, false, 138), "content", [], "any", false, false, false, 138), "shortcodes", [], "any", false, false, false, 138), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 140) == (($context["locale"] ?? null) . "/content/snippets"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/content/snippets\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 141), "categories", [], "any", false, false, false, 141), "content", [], "any", false, false, false, 141), "snippets", [], "any", false, false, false, 141), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 143) == (($context["locale"] ?? null) . "/fieldsets/fieldsets"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/fieldsets/fieldsets\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 144), "categories", [], "any", false, false, false, 144), "content", [], "any", false, false, false, 144), "fieldsets", [], "any", false, false, false, 144), "html", null, true);
        echo "</a>
                    </li>
                </ul>
                <h4 class=\"pt-8\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 147), "categories", [], "any", false, false, false, 147), "themes", [], "any", false, false, false, 147), "title", [], "any", false, false, false, 147), "html", null, true);
        echo "</h4>
                <ul class=\"m-0 p-0 list-none\">
                    <li class=\"";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 149) == (($context["locale"] ?? null) . "/themes/installation"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/themes/installation\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 150), "categories", [], "any", false, false, false, 150), "themes", [], "any", false, false, false, 150), "theme_installation", [], "any", false, false, false, 150), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 152
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 152) == (($context["locale"] ?? null) . "/themes/theme-configuration"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/themes/theme-configuration\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 153), "categories", [], "any", false, false, false, 153), "themes", [], "any", false, false, false, 153), "theme_configuration", [], "any", false, false, false, 153), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 155
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 155) == (($context["locale"] ?? null) . "/themes/theme-variables"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/themes/theme-variables\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 156), "categories", [], "any", false, false, false, 156), "themes", [], "any", false, false, false, 156), "theme_variables", [], "any", false, false, false, 156), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 158
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 158) == (($context["locale"] ?? null) . "/themes/twig-filters-functions"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/themes/twig-filters-functions\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 159), "categories", [], "any", false, false, false, 159), "themes", [], "any", false, false, false, 159), "twig_filters_functions", [], "any", false, false, false, 159), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 161
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 161) == (($context["locale"] ?? null) . "/themes/entries-fetch"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/themes/entries-fetch\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 162), "categories", [], "any", false, false, false, 162), "themes", [], "any", false, false, false, 162), "entries_fetch", [], "any", false, false, false, 162), "html", null, true);
        echo "</a>
                    </li>
                </ul>
                <h4 class=\"pt-8\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 165), "categories", [], "any", false, false, false, 165), "plugins", [], "any", false, false, false, 165), "title", [], "any", false, false, false, 165), "html", null, true);
        echo "</h4>
                <ul class=\"m-0 p-0 list-none\">
                    <li class=\"";
        // line 167
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 167) == (($context["locale"] ?? null) . "/plugins/installation"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/plugins/installation\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 168), "categories", [], "any", false, false, false, 168), "plugins", [], "any", false, false, false, 168), "installation", [], "any", false, false, false, 168), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 170) == (($context["locale"] ?? null) . "/plugins/configuration"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/plugins/configuration\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 171), "categories", [], "any", false, false, false, 171), "plugins", [], "any", false, false, false, 171), "configuration", [], "any", false, false, false, 171), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 173
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 173) == (($context["locale"] ?? null) . "/plugins/hooks"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/plugins/hooks\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 174), "categories", [], "any", false, false, false, 174), "plugins", [], "any", false, false, false, 174), "event_hooks", [], "any", false, false, false, 174), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 176
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 176) == (($context["locale"] ?? null) . "/plugins/toasts"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/plugins/toasts\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 177), "categories", [], "any", false, false, false, 177), "plugins", [], "any", false, false, false, 177), "toasts_notifications", [], "any", false, false, false, 177), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 179
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 179) == (($context["locale"] ?? null) . "/plugins/navigation"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/plugins/navigation\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 180), "categories", [], "any", false, false, false, 180), "plugins", [], "any", false, false, false, 180), "navigation", [], "any", false, false, false, 180), "html", null, true);
        echo "</a>
                    </li>
                </ul>
                <h4 class=\"pt-8\">";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 183), "categories", [], "any", false, false, false, 183), "advanced", [], "any", false, false, false, 183), "title", [], "any", false, false, false, 183), "html", null, true);
        echo "</h4>
                <ul class=\"m-0 p-0 list-none\">
                    <li class=\"";
        // line 185
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 185) == (($context["locale"] ?? null) . "/advanced/performance-and-caching"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/advanced/performance-and-caching\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 186), "categories", [], "any", false, false, false, 186), "advanced", [], "any", false, false, false, 186), "performance_and_caching", [], "any", false, false, false, 186), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 188
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 188) == (($context["locale"] ?? null) . "/advanced/yaml-syntax"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/advanced/yaml-syntax\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 189), "categories", [], "any", false, false, false, 189), "advanced", [], "any", false, false, false, 189), "yaml_syntax", [], "any", false, false, false, 189), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 191
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 191) == (($context["locale"] ?? null) . "/advanced/password-recovery"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/advanced/password-recovery\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 192), "categories", [], "any", false, false, false, 192), "advanced", [], "any", false, false, false, 192), "password_recovery", [], "any", false, false, false, 192), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 194
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 194) == (($context["locale"] ?? null) . "/advanced/api"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/advanced/api\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 195), "categories", [], "any", false, false, false, 195), "advanced", [], "any", false, false, false, 195), "api", [], "any", false, false, false, 195), "html", null, true);
        echo "</a>
                    </li>
                </ul>
                <h4 class=\"pt-8\">";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 198), "categories", [], "any", false, false, false, 198), "cookbook", [], "any", false, false, false, 198), "title", [], "any", false, false, false, 198), "html", null, true);
        echo "</h4>
                <ul class=\"m-0 p-0 list-none\">
                    <li class=\"";
        // line 200
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 200) == (($context["locale"] ?? null) . "/cookbook/tutorials"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/cookbook/tutorials\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 201), "categories", [], "any", false, false, false, 201), "cookbook", [], "any", false, false, false, 201), "tutorials", [], "any", false, false, false, 201), "title", [], "any", false, false, false, 201), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 203) == (($context["locale"] ?? null) . "/cookbook/setup"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/cookbook/setup\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 204), "categories", [], "any", false, false, false, 204), "cookbook", [], "any", false, false, false, 204), "setup", [], "any", false, false, false, 204), "title", [], "any", false, false, false, 204), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"";
        // line 206
        if ((twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 206) == (($context["locale"] ?? null) . "/cookbook/templating"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "/cookbook/templating\" class=\"no-underline\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 207), "categories", [], "any", false, false, false, 207), "cookbook", [], "any", false, false, false, 207), "templating", [], "any", false, false, false, 207), "title", [], "any", false, false, false, 207), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
            <div class=\"w-full lg:w-9/12\">
                <a href=\"javascript:;\" onclick=\"showMenu();\" class=\"absolute lg:hidden right-0 top-0 mr-10 mt-12\">
                    <i class=\"fas fa-bars\"></i>
                </a>
                ";
        // line 215
        $this->displayBlock('content', $context, $blocks);
        // line 216
        echo "                <div class=\"border-t-3 ml-10 mr-10 pt-5 mt-2 pb-6 flex\">
                    <div class=\"w-3/12 text-left\">
                        ";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 218), "common", [], "any", false, false, false, 218), "language", [], "any", false, false, false, 218), "html", null, true);
        echo ":
                        <a href=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/en\">en</a>,
                        <a href=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/ru\">ru</a>
                    </div>
                    <div class=\"w-9/12 text-right\">
                        ";
        // line 223
        if ((($context["locale"] ?? null) == "en")) {
            // line 224
            echo "                            <a href=\"https://github.com/flextype/docs.flextype.org/tree/dev/site/entries/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 224), "html", null, true);
            echo "/entry.md\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt", [], "any", false, false, false, 224), "common", [], "any", false, false, false, 224), "edit_this_page", [], "any", false, false, false, 224), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 226
            echo "                            <a href=\"https://crowdin.com/project/flextype-documentation/";
            echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry_locale"] ?? null), "txt_link_edit_this_page", [], "any", false, false, false, 226), "html", null, true);
            echo "</a>
                        ";
        }
        // line 228
        echo "                    </div>
                </div>
            </div>
        </div>

        ";
        // line 233
        $context["highlight_js"] = ((($this->extensions['Slim\Views\TwigExtension']->baseUrl() . "/site/themes/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "flextype", [], "any", false, false, false, 233), "theme", [], "any", false, false, false, 233)) . "/assets/highlight/highlight.pack.js");
        // line 234
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, ($context["highlight_js"] ?? null), "html", null, true);
        echo "\"></script>

        <script>
            function showMenu() {
                document.getElementById(\"menu\").className = document.getElementById(\"menu\").className.replace(/(?:^|\\s)hidden(?!\\S)/g, '');
                document.getElementById(\"menu\").className = document.getElementById(\"menu\").className.replace(/(?:^|\\s)w-3\\/12(?!\\S)/g, '');
                document.getElementById(\"menu\").className += \" w-full\";
                document.getElementById(\"menu\").className += \" absolute\";
                document.getElementById(\"menu\").className += \" z-50\";
                document.getElementById(\"shadow\").className = document.getElementById(\"shadow\").className.replace(/(?:^|\\s)hidden(?!\\S)/g, '');
            }

            function hideMenu() {
                document.getElementById(\"menu\").className = document.getElementById(\"menu\").className.replace(/(?:^|\\s)absolute(?!\\S)/g, '');
                document.getElementById(\"menu\").className = document.getElementById(\"menu\").className.replace(/(?:^|\\s)w-full(?!\\S)/g, '');
                document.getElementById(\"menu\").className = document.getElementById(\"menu\").className.replace(/(?:^|\\s)z-50(?!\\S)/g, '');
                document.getElementById(\"menu\").className += \" hidden\";
                document.getElementById(\"menu\").className += \" 3/12\";
                document.getElementById(\"shadow\").className += \" hidden\";
            }

            hljs.configure({useBR: false});
            document.querySelectorAll('pre code').forEach((block) => {
                hljs.highlightBlock(block);
            });
        </script>
        ";
        // line 260
        twig_get_attribute($this->env, $this->source,         // line 261
($context["emitter"] ?? null), "emit", [0 => "onThemeTail"], "method", false, false, false, 261);
        // line 262
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <meta charset=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "flextype", [], "any", false, false, false, 7), "charset", [], "any", false, false, false, 7)), "html", null, true);
        echo "\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "description", [], "any", false, false, false, 9)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "description", [], "any", false, false, false, 9), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "flextype", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9), "html", null, true);
        }
        echo "\">
            <meta name=\"keywords\" content=\"";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "keywords", [], "any", false, false, false, 10)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "keywords", [], "any", false, false, false, 10), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "flextype", [], "any", false, false, false, 10), "keywords", [], "any", false, false, false, 10), "html", null, true);
        }
        echo "\">
            <meta name=\"robots\" content=\"";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "robots", [], "any", false, false, false, 11)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "robots", [], "any", false, false, false, 11), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "flextype", [], "any", false, false, false, 11), "robots", [], "any", false, false, false, 11), "html", null, true);
        }
        echo "\">
            <meta name=\"generator\" content=\"Powered by Flextype ";
        // line 12
        echo twig_escape_filter($this->env, ($context["FLEXTYPE_VERSION"] ?? null), "html", null, true);
        echo "\"/>

            <meta name=\"image\" content=\"https://github.com/flextype/flextype/raw/dev/site/plugins/admin/preview.png\">

            <meta name=\"twitter:card\" content=\"summary_large_image\">
            <meta name=\"twitter:site\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
            <meta name=\"twitter:title\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
            <meta name=\"twitter:description\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
            <meta name=\"twitter:image\" content=\"https://github.com/flextype/flextype/raw/dev/site/plugins/admin/preview.png\">

            <meta property=\"og:url\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
            <meta property=\"og:title\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
            <meta property=\"og:description\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
            <meta property=\"og:type\" content=\"website\">
            <meta property=\"og:image\" content=\"https://github.com/flextype/flextype/raw/dev/site/plugins/admin/preview.png\">
            <meta property=\"og:image:type\" content=\"image/png\">

            <meta name=\"yandex-verification\" content=\"920bbfc83bbe3fbe\"/>

            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/apple-touch-icon.png\">
            <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/favicon-32x32.png\">
            <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/favicon-16x16.png\">
            <link rel=\"manifest\" href=\"/site.webmanifest\">

            <!-- Yandex.Metrika counter -->
            <script type=\"text/javascript\">
                (function (m, e, t, r, i, k, a) {
                    m[i] = m[i] || function () {
                        (m[i].a = m[i].a || []).push(arguments)
                    };
                    m[i].l = 1 * new Date();
                    k = e.createElement(t),
                    a = e.getElementsByTagName(t)[0],
                    k.async = 1,
                    k.src = r,
                    a.parentNode.insertBefore(k, a)
                })(window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

                ym(56663935, \"init\", {
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            </script>
            <noscript>
                <div><img src=\"https://mc.yandex.ru/watch/56663935\" style=\"position:absolute; left:-9999px;\" alt=\"\"/></div>
            </noscript>
            <!-- /Yandex.Metrika counter -->

            <link rel=\"canonical\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "slug", [], "any", false, false, false, 62), "html", null, true);
        echo "\">

            ";
        // line 64
        twig_get_attribute($this->env, $this->source,         // line 65
($context["emitter"] ?? null), "emit", [0 => "onThemeMeta"], "method", false, false, false, 65);
        // line 66
        echo "
            <title>
                ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "title", [], "any", false, false, false, 68)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entry"] ?? null), "title", [], "any", false, false, false, 68), "html");
            echo "
                    |
                ";
        }
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "plugins", [], "any", false, false, false, 70), "site", [], "any", false, false, false, 70), "title", [], "any", false, false, false, 70), "html");
        echo "</title>

            <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext\" rel=\"stylesheet\">
            <script src=\"https://kit.fontawesome.com/588226d8c5.js\"></script>

            ";
        // line 75
        $context["highlight_css"] = ((($this->extensions['Slim\Views\TwigExtension']->baseUrl() . "/site/themes/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "flextype", [], "any", false, false, false, 75), "theme", [], "any", false, false, false, 75)) . "/assets/highlight/styles/tomorrow-night-bright.css");
        // line 76
        echo "            ";
        $context["docs_css"] = ((($this->extensions['Slim\Views\TwigExtension']->baseUrl() . "/site/themes/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registry"] ?? null), "flextype", [], "any", false, false, false, 76), "theme", [], "any", false, false, false, 76)) . "/assets/dist/css/build.min.css");
        // line 77
        echo "            ";
        twig_get_attribute($this->env, $this->source,         // line 78
($context["assets"] ?? null), "add", [0 => "css", 1 => ($context["highlight_css"] ?? null), 2 => "site", 3 => 1], "method", false, false, false, 78);
        // line 79
        echo "            ";
        twig_get_attribute($this->env, $this->source,         // line 80
($context["assets"] ?? null), "add", [0 => "css", 1 => ($context["docs_css"] ?? null), 2 => "site", 3 => 2], "method", false, false, false, 80);
        // line 81
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "get", [0 => "css", 1 => "site"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["assets_site"]) {
            // line 82
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["assets_site"]);
            foreach ($context['_seq'] as $context["_key"] => $context["assets_by_priorities"]) {
                // line 83
                echo "                    <link href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["assets_by_priorities"], "asset", [], "any", false, false, false, 83), "html", null, true);
                echo "?v=";
                echo twig_escape_filter($this->env, ($context["static_version"] ?? null), "html", null, true);
                echo "\" rel=\"stylesheet\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assets_by_priorities'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assets_site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
            ";
        // line 87
        twig_get_attribute($this->env, $this->source,         // line 88
($context["emitter"] ?? null), "emit", [0 => "onThemeHeader"], "method", false, false, false, 88);
        // line 89
        echo "        ";
    }

    // line 215
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "themes/docs/templates/partials/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 215,  843 => 89,  841 => 88,  840 => 87,  837 => 86,  831 => 85,  820 => 83,  815 => 82,  810 => 81,  808 => 80,  806 => 79,  804 => 78,  802 => 77,  799 => 76,  797 => 75,  789 => 70,  782 => 68,  778 => 66,  776 => 65,  775 => 64,  768 => 62,  727 => 24,  723 => 23,  717 => 22,  711 => 19,  707 => 18,  701 => 17,  693 => 12,  685 => 11,  677 => 10,  669 => 9,  663 => 7,  659 => 6,  653 => 262,  651 => 261,  650 => 260,  620 => 234,  618 => 233,  611 => 228,  603 => 226,  595 => 224,  593 => 223,  587 => 220,  583 => 219,  579 => 218,  575 => 216,  573 => 215,  558 => 207,  552 => 206,  543 => 204,  537 => 203,  528 => 201,  522 => 200,  517 => 198,  507 => 195,  501 => 194,  492 => 192,  486 => 191,  477 => 189,  471 => 188,  462 => 186,  456 => 185,  451 => 183,  441 => 180,  435 => 179,  426 => 177,  420 => 176,  411 => 174,  405 => 173,  396 => 171,  390 => 170,  381 => 168,  375 => 167,  370 => 165,  360 => 162,  354 => 161,  345 => 159,  339 => 158,  330 => 156,  324 => 155,  315 => 153,  309 => 152,  300 => 150,  294 => 149,  289 => 147,  279 => 144,  273 => 143,  264 => 141,  258 => 140,  249 => 138,  243 => 137,  234 => 135,  228 => 134,  219 => 132,  213 => 131,  208 => 129,  198 => 126,  192 => 125,  183 => 123,  177 => 122,  168 => 120,  162 => 119,  153 => 117,  147 => 116,  138 => 114,  132 => 113,  123 => 111,  117 => 110,  108 => 108,  102 => 107,  93 => 105,  87 => 104,  78 => 102,  72 => 101,  67 => 99,  56 => 90,  54 => 6,  51 => 5,  48 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/docs/templates/partials/base.html", "/Applications/MAMP/htdocs/docs.flextype.org/site/themes/docs/templates/partials/base.html");
    }
}
