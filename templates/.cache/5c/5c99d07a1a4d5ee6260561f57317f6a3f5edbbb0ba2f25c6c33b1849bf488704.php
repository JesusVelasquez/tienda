<?php

/* productos/create.twig */
class __TwigTemplate_36b86b359e83620ef227ab3acfc1a2d94b87d99ac69032cc8ef9f5ccc61323e7 extends Twig_Template
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
//var url = \"/sesion/\";
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
\t<form action=\"/productos/\" method=\"POST\" >
\t<label>Descripcion</label>
\t<input type=\"text\" id=\"descripcion\" name='descripcion' value=\"\">
\t<br>
\t<label>Observacion</label>
\t<input type=\"text\" id=\"observacion\" name='observacion' value=\"\">
\t<br>
\t<label>Tipo</label>
\t<input type=\"text\" id=\"id_tipo\" name='id_tipo' value=\"\">
\t<br>
\t<label>Tienda</label>
\t<input type=\"text\" id=\"id_tienda\" name='id_tienda' value=\"\">
\t<br>
\t<label>Precio venta</label>
\t<input type=\"text\" id=\"precio_venta\" name='precio_venta' value=\"\">
\t<br>
\t<label>Cantidad</label>
\t<input type=\"text\" id=\"cantidad\" name='cantidad' value=\"\">
\t<br>
\t<label>Fecha de inicio</label>
\t<input type=\"text\" id=\"fecha_inicial\" name='fecha_inicial' value=\"\">
\t<br>
\t<label>Fecha Final</label>
\t<input type=\"text\" id=\"fecha_final\" name='fecha_final' value=\"\">
\t<br>
\t<input type=\"submit\" value=\"Aceptar\" >
</form>
";
    }

    public function getTemplateName()
    {
        return "productos/create.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  43 => 6,  39 => 4,  36 => 3,  30 => 1,  26 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% block title 'Inicio de sesión' %}*/
/* */
/* {% block content %}*/
/* <script type="text/javascript">*/
/* //var url = "/sesion/";*/
/* //var id = {{ producto.id_producto }};*/
/* //var id_tienda = {{producto.id_tienda}};*/
/* </script>*/
/* <h4>Inicio de Sesion</h4>*/
/* 	<form action="/productos/" method="POST" >*/
/* 	<label>Descripcion</label>*/
/* 	<input type="text" id="descripcion" name='descripcion' value="">*/
/* 	<br>*/
/* 	<label>Observacion</label>*/
/* 	<input type="text" id="observacion" name='observacion' value="">*/
/* 	<br>*/
/* 	<label>Tipo</label>*/
/* 	<input type="text" id="id_tipo" name='id_tipo' value="">*/
/* 	<br>*/
/* 	<label>Tienda</label>*/
/* 	<input type="text" id="id_tienda" name='id_tienda' value="">*/
/* 	<br>*/
/* 	<label>Precio venta</label>*/
/* 	<input type="text" id="precio_venta" name='precio_venta' value="">*/
/* 	<br>*/
/* 	<label>Cantidad</label>*/
/* 	<input type="text" id="cantidad" name='cantidad' value="">*/
/* 	<br>*/
/* 	<label>Fecha de inicio</label>*/
/* 	<input type="text" id="fecha_inicial" name='fecha_inicial' value="">*/
/* 	<br>*/
/* 	<label>Fecha Final</label>*/
/* 	<input type="text" id="fecha_final" name='fecha_final' value="">*/
/* 	<br>*/
/* 	<input type="submit" value="Aceptar" >*/
/* </form>*/
/* {% endblock %}*/
/* */
