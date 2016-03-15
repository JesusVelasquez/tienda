<?php

/* inicio/inicio.twig */
class __TwigTemplate_8d6cd8d63a57a3bb800ed4bc942f8321b7af8a88819e760b152c41a8679775c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "

";
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Inicio de sesión";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<script type=\"text/javascript\">
var url = \"/sesion/\";
//var id = ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_producto", array()), "html", null, true);
        echo ";
//var id_tienda = ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_tienda", array()), "html", null, true);
        echo ";
</script>
<h4>Inicio de Sesion</h4>
\t<form action=\"/sesion/\" method=\"GET\" >
\t<label>Id Usuario</label>
\t<input type=\"text\" id=\"id_trabajador\" name='id_trabajador' value=\"\">
\t<br>
\t<label>Contraseña</label>
\t<input type=\"password\" id=\"contraseña\"name='contraseña' value=\"\" title=\"Ingrese contraseña\" required />
\t<br>
\t<input type=\"submit\" value=\"Procesar\" >
</form>
";
    }

    public function getTemplateName()
    {
        return "inicio/inicio.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 4,  40 => 3,  34 => 1,  28 => 20,  26 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% block title 'Inicio de sesión' %}*/
/* */
/* {% block content %}*/
/* <script type="text/javascript">*/
/* var url = "/sesion/";*/
/* //var id = {{ producto.id_producto }};*/
/* //var id_tienda = {{producto.id_tienda}};*/
/* </script>*/
/* <h4>Inicio de Sesion</h4>*/
/* 	<form action="/sesion/" method="GET" >*/
/* 	<label>Id Usuario</label>*/
/* 	<input type="text" id="id_trabajador" name='id_trabajador' value="">*/
/* 	<br>*/
/* 	<label>Contraseña</label>*/
/* 	<input type="password" id="contraseña"name='contraseña' value="" title="Ingrese contraseña" required />*/
/* 	<br>*/
/* 	<input type="submit" value="Procesar" >*/
/* </form>*/
/* {% endblock %}*/
/* */
/* */
/* */
