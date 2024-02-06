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

/* diagnosis.html.twig */
class __TwigTemplate_89a12b432346da78ff4d71134bf8be1f extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Diagnostic</title>
    <link rel=\"stylesheet\" href=\"/css/styles.css\">
    <script src=\"/js/script.js\" defer></script>
</head>

<body>
<h1>Entrez l'index de santé pour le diagnostic</h1>
<form id=\"diagnosisForm\">
    <label for=\"healthIndex\">Index de santé :</label>
    <input type=\"number\" id=\"healthIndex\" name=\"healthIndex\">
    <input type=\"submit\" value=\"Diagnostiquer\">
</form>

<div id=\"diagnosisResult\"></div>
</body>
</html>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "diagnosis.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Diagnostic</title>
    <link rel=\"stylesheet\" href=\"/css/styles.css\">
    <script src=\"/js/script.js\" defer></script>
</head>

<body>
<h1>Entrez l'index de santé pour le diagnostic</h1>
<form id=\"diagnosisForm\">
    <label for=\"healthIndex\">Index de santé :</label>
    <input type=\"number\" id=\"healthIndex\" name=\"healthIndex\">
    <input type=\"submit\" value=\"Diagnostiquer\">
</form>

<div id=\"diagnosisResult\"></div>
</body>
</html>

", "diagnosis.html.twig", "/var/www/softway_medical/src/View/templates/diagnosis.html.twig");
    }
}
