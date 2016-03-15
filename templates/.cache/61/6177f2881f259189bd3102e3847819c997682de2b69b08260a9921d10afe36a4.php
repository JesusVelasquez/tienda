<?php

/* productos/productos.twig */
class __TwigTemplate_bc6a60122ea512c1d1637708d67d566aeadd69afb30291aa890095a887c5d8d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "productos/productos.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Productos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<script type=\"text/javascript\">
\t";
        // line 8
        echo "\t\tvar productos = ";
        echo (isset($context["productos"]) ? $context["productos"] : null);
        echo "
\t";
        // line 10
        echo "</script>
<h4>Tabla de productos ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : null), "html", null, true);
        echo "</h4>
<div class=\"col-sm-12\">
<div class=\"table-responsive\">
<table class= \"table table-hovere\" >
\t<thead> 
\t<tr>
\t\t<th>Id</th>
\t\t<th>Descripcion</th>
\t\t<th>Observacion</th>
\t\t<th>Id tipo</th>
\t\t<th>Precio venta</th>
\t\t<th>Cantidad</th>
\t\t<th>Fecha Inicial</th>
\t\t<th>Fecha Final</th>
\t\t<th>Fecha Alta</th>
\t\t<th>Tienda</th>
\t\t<th>Acciones</th>
\t</tr>
\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 30
            echo "\t<tr>
\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id_producto", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "observacion", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id_tipo", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio_venta", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "fecha_inicial", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "fecha_final", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "fecha_alta", array()), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id_tienda", array()), "html", null, true);
            echo "</td>

\t\t<td><a href=\"/productos/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id_producto", array()), "html", null, true);
            echo "/almacenes/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id_tienda", array()), "html", null, true);
            echo "/\">Modificar</a></td>

\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t</thead>
      <tbody id=\"body\">
      \t
      </tbody>
</table>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "productos/productos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  118 => 42,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  77 => 31,  74 => 30,  70 => 29,  49 => 11,  46 => 10,  41 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.twig' %}*/
/* */
/* {% block title 'Productos' %}*/
/* */
/* {% block content %}*/
/* <script type="text/javascript">*/
/* 	{% autoescape false%}*/
/* 		var productos = {{ productos }}*/
/* 	{% endautoescape %}*/
/* </script>*/
/* <h4>Tabla de productos {{ nombre }}</h4>*/
/* <div class="col-sm-12">*/
/* <div class="table-responsive">*/
/* <table class= "table table-hovere" >*/
/* 	<thead> */
/* 	<tr>*/
/* 		<th>Id</th>*/
/* 		<th>Descripcion</th>*/
/* 		<th>Observacion</th>*/
/* 		<th>Id tipo</th>*/
/* 		<th>Precio venta</th>*/
/* 		<th>Cantidad</th>*/
/* 		<th>Fecha Inicial</th>*/
/* 		<th>Fecha Final</th>*/
/* 		<th>Fecha Alta</th>*/
/* 		<th>Tienda</th>*/
/* 		<th>Acciones</th>*/
/* 	</tr>*/
/* 	{% for producto in productos %}*/
/* 	<tr>*/
/* 		<td>{{ producto.id_producto }}</td>*/
/* 		<td>{{ producto.descripcion }}</td>*/
/* 		<td>{{ producto.observacion }}</td>*/
/* 		<td>{{ producto.id_tipo }}</td>*/
/* 		<td>{{ producto.precio_venta }}</td>*/
/* 		<td>{{ producto.cantidad }}</td>*/
/* 		<td>{{ producto.fecha_inicial }}</td>*/
/* 		<td>{{ producto.fecha_final }}</td>*/
/* 		<td>{{ producto.fecha_alta }}</td>*/
/* 		<td>{{ producto.id_tienda }}</td>*/
/* */
/* 		<td><a href="/productos/{{producto.id_producto}}/almacenes/{{producto.id_tienda}}/">Modificar</a></td>*/
/* */
/* 	</tr>*/
/* 	{% endfor %}*/
/* */
/* 	</thead>*/
/*       <tbody id="body">*/
/*       	*/
/*       </tbody>*/
/* </table>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
