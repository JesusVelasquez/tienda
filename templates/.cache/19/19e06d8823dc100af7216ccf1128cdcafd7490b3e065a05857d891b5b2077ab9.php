<?php

/* layout.twig */
class __TwigTemplate_2822169d1893506aa12a91b95b0ff19f1a2774642f90cfa1dc257569a1564863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "\t
\t
</head>
<body>
\t ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "\t ";
        $this->displayBlock('js', $context, $blocks);
        // line 18
        echo "</body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "            <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" /-->
            <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " Principal</title>
    ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t contenido por defecto
\t ";
    }

    // line 14
    public function block_js($context, array $blocks = array())
    {
        // line 15
        echo "\t <script type=\"text/javascript\" src=\"/public/lib/jquery.min.js\"></script>
\t <script type=\"text/javascript\" src=\"/public/js/main.js\"></script>
\t ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  69 => 14,  64 => 12,  61 => 11,  51 => 5,  48 => 4,  45 => 3,  40 => 18,  37 => 14,  35 => 11,  29 => 7,  27 => 3,  23 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* 	{% block head %}*/
/*             <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /-->*/
/*             <title>{% block title %}{% endblock %} Principal</title>*/
/*     {% endblock %}*/
/* 	*/
/* 	*/
/* </head>*/
/* <body>*/
/* 	 {% block content %}*/
/* 	 contenido por defecto*/
/* 	 {% endblock %}*/
/* 	 {% block js %}*/
/* 	 <script type="text/javascript" src="/public/lib/jquery.min.js"></script>*/
/* 	 <script type="text/javascript" src="/public/js/main.js"></script>*/
/* 	 {% endblock %}*/
/* </body>*/
/* </html>*/
