<?php

/* NetMediaBundle:Front:maquette/clientConsultation.html.twig */
class __TwigTemplate_01f6ff4b9e406f968e8c9d3ebbfdf8ca6f04049958752791a61dc9d8505d12f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NetMediaBundle::Admin/admin_layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NetMediaBundle::Admin/admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "        <div id=\"header\">
                <div>banniere client consultation</div>
        </div>
        <div id=\"menu\">\t\t\t\t
                        <div id=\"carousel\" >
                                <img src=\"img/b1.jpeg\"/>
                                <img src=\"img/b2.jpeg\"/>
                                <img src=\"img/b3.jpeg\"/>
                                <img src=\"img/b4.jpeg\"/>
                                <img src=\"img/b5.jpeg\"/>
                                <img src=\"img/b6.jpeg\"/>
                                <img src=\"img/b7.jpeg\"/>
                                <img src=\"img/b13.jpeg\"/>
                                <img src=\"img/b1.jpeg\"/>
                                <img src=\"img/b2.jpeg\"/>
                                <img src=\"img/b3.jpeg\"/>
                                <img src=\"img/b4.jpeg\"/>
                                <img src=\"img/b5.jpeg\"/>
                                <img src=\"img/b6.jpeg\"/>
                                <img src=\"img/b7.jpeg\"/>
                                <img src=\"img/b13.jpeg\"/>
                        </div>
        </div>
        <div id=\"menu-h\">
                <ul><div>menu</div>
                </ul>
                <ul><div>menu</div>
                </ul>
                <ul><div>menu</div>
                </ul>
        </div>

        <div id=\"wrapper\">
                <div class=\"wrapper\"><div>Theme1</div>
                        <div class=\"item\"><img src=\"img/b3.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b24.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b7.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b18.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b9.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/promo.jpeg\"></div>
                </div>
                <div class=\"wrapper\"><div>Theme2</div>
                        <div class=\"item\"><img src=\"img/b1.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b2.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b3.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b4.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b5.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b6.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b7.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b18.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b9.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b10.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b11.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b12.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b13.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b14.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b15.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/B16.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b17.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b18.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b19.jpeg\"/></div>
                        <div class=\"item\"><img src=\"img/b20.jpeg\"/></div>
                </div>
        </div>

        <div id=\"footer\">
                <div class=\"subfooter\"></div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "NetMediaBundle:Front:maquette/clientConsultation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
