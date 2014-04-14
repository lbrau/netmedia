<?php

/* NetMediaBundle::Admin/admin_layout.html.twig */
class __TwigTemplate_872d85993438ea732dfaa8bf37fee84b72a3c75992fad0800e53c0c81aa64222 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    \t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b2ae65_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b2ae65_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b2ae65_design_1.css");
            // line 6
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "8b2ae65"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b2ae65") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8b2ae65.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "    </head>
    <body>
        <div id = \"header\">
            Layout du coté admin a définir
        </div>
        <div id = \"wrapper\">
            ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        </div>
        ";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        // line 22
        echo "        <div id = \"footer\">footer</div>
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil des producteurs";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
            ";
    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        // line 19
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/netmedia/js/jq.js"), "html", null, true);
        echo "\">
            </script>
    ";
    }

    public function getTemplateName()
    {
        return "NetMediaBundle::Admin/admin_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  85 => 18,  80 => 15,  77 => 14,  71 => 4,  64 => 22,  62 => 18,  59 => 17,  57 => 14,  49 => 8,  35 => 6,  27 => 4,  22 => 1,  31 => 5,  28 => 2,);
    }
}
