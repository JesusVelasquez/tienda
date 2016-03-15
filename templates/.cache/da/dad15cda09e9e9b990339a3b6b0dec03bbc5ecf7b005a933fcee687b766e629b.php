<?php

/* productos/update.twig */
class __TwigTemplate_3880f5a0aa9cf23a80ab8303aab8795ee38eaf0202a95698fb41688736c3f1f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.twig", "productos/update.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Modificando ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "descripcion", array()), "html", null, true);
        echo "</h1>

<script type=\"text/javascript\">
var url = \"/productos/";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_producto", array()), "html", null, true);
        echo "/almacen/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_tienda", array()), "html", null, true);
        echo "/\";
var id = ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_producto", array()), "html", null, true);
        echo ";
var id_tienda = ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_tienda", array()), "html", null, true);
        echo ";
</script>

<form>
<label>Descripcion</label>
<input type=\"text\" id=\"descripcion\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "descripcion", array()), "html", null, true);
        echo "\">
<br>
<label>Observacion</label>
<input type=\"text\" id=\"observacion\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "observacion", array()), "html", null, true);
        echo "\">
<br>
<label>Tipo</label>
<input type=\"text\" id=\"id_tipo\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_tipo", array()), "html", null, true);
        echo "\">
<br>
<label>Precio de venta</label>
<input type=\"text\" id=\"precio_venta\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "precio_venta", array()), "html", null, true);
        echo "\">
<br>
<label>Cantidad</label>
<input type=\"number\" id=\"cantidad\" name=\"cantidad\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "cantidad", array()), "html", null, true);
        echo "\" title=\"Ingrese cantidad\" required />
<br>
<label>Fecha Inicial</label>
<input type=\"date\" id=\"fecha_inicial\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "fecha_inicial", array()), "html", null, true);
        echo "\"  />

<br>
<label>Fecha Final</label>
<input type=\"date\" id=\"fecha_final\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "fecha_final", array()), "html", null, true);
        echo "\" >
<br>
<label>Id Tienda</label>
<label>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_tienda", array()), "html", null, true);
        echo "</label>
<!--input type=\"text\" id=\"id_tienda\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : null), "id_tienda", array()), "html", null, true);
        echo "\"-->

<br>
<input type=\"button\" id=\"enviar\" value=\"enviar\">
</form>
";
    }

    // line 45
    public function block_js($context, array $blocks = array())
    {
        // line 46
        $this->displayParentBlock("js", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"/public/js/productos/update.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "productos/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  114 => 45,  104 => 38,  100 => 37,  94 => 34,  87 => 30,  81 => 27,  75 => 24,  69 => 21,  63 => 18,  57 => 15,  49 => 10,  45 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'layout.twig' %}*/
/* */
/* {% block content %}*/
/* <h1>Modificando {{ producto.descripcion }}</h1>*/
/* */
/* <script type="text/javascript">*/
/* var url = "/productos/{{ producto.id_producto }}/almacen/{{producto.id_tienda}}/";*/
/* var id = {{ producto.id_producto }};*/
/* var id_tienda = {{producto.id_tienda}};*/
/* </script>*/
/* */
/* <form>*/
/* <label>Descripcion</label>*/
/* <input type="text" id="descripcion" value="{{ producto.descripcion }}">*/
/* <br>*/
/* <label>Observacion</label>*/
/* <input type="text" id="observacion" value="{{ producto.observacion }}">*/
/* <br>*/
/* <label>Tipo</label>*/
/* <input type="text" id="id_tipo" value="{{ producto.id_tipo }}">*/
/* <br>*/
/* <label>Precio de venta</label>*/
/* <input type="text" id="precio_venta" value="{{ producto.precio_venta }}">*/
/* <br>*/
/* <label>Cantidad</label>*/
/* <input type="number" id="cantidad" name="cantidad" value="{{ producto.cantidad }}" title="Ingrese cantidad" required />*/
/* <br>*/
/* <label>Fecha Inicial</label>*/
/* <input type="date" id="fecha_inicial" value="{{ producto.fecha_inicial }}"  />*/
/* */
/* <br>*/
/* <label>Fecha Final</label>*/
/* <input type="date" id="fecha_final" value="{{ producto.fecha_final }}" >*/
/* <br>*/
/* <label>Id Tienda</label>*/
/* <label>{{ producto.id_tienda }}</label>*/
/* <!--input type="text" id="id_tienda" value="{{ producto.id_tienda }}"-->*/
/* */
/* <br>*/
/* <input type="button" id="enviar" value="enviar">*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/* {{ parent() }}*/
/* <script type="text/javascript" src="/public/js/productos/update.js"></script>*/
/* {% endblock %}*/
