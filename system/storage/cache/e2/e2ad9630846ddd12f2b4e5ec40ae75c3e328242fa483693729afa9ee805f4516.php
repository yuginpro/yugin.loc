<?php

/* basecart/template/extension/module/featured.twig */
class __TwigTemplate_dba4d454134d499ddec06acd398b6205e8a8598bbbcdc3e0af95b24784075e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h3>";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
<div class=\"row\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "  <div class=\"product-layout product-grid col-sm-6 col-md-3\">
    <div class=\"product-thumb\">
      <div class=\"image\"><a href=\"";
            // line 6
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
      <div>
        <div class=\"caption\">
          <h4><a href=\"";
            // line 9
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
          <p>";
            // line 10
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
          ";
            // line 11
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 12
                echo "          <div class=\"rating\">
            ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "            ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 15
                        echo "            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    } else {
                        // line 17
                        echo "            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    }
                    // line 19
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "          </div>
          ";
            }
            // line 22
            echo "          ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 23
                echo "          <p class=\"price\">
            ";
                // line 24
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 25
                    echo "            <strong>";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</strong>
            ";
                } else {
                    // line 27
                    echo "            <p class=\"text-danger\"><strong>";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</strong></p>
            ";
                }
                // line 29
                echo "          </p>
          ";
            }
            // line 31
            echo "        </div>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default\" onclick=\"cart.add('";
            // line 33
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</button>
          <button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 34
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
          <button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 35
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-bar-chart\"></i></button>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "basecart/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  125 => 35,  119 => 34,  113 => 33,  109 => 31,  105 => 29,  99 => 27,  93 => 25,  91 => 24,  88 => 23,  85 => 22,  81 => 20,  75 => 19,  71 => 17,  67 => 15,  64 => 14,  60 => 13,  57 => 12,  55 => 11,  51 => 10,  45 => 9,  33 => 6,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h3>{{ heading_title }}</h3>*/
/* <div class="row">*/
/*   {% for product in products %}*/
/*   <div class="product-layout product-grid col-sm-6 col-md-3">*/
/*     <div class="product-thumb">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*       <div>*/
/*         <div class="caption">*/
/*           <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*           <p>{{ product.description }}</p>*/
/*           {% if product.rating %}*/
/*           <div class="rating">*/
/*             {% for i in 1..5 %}*/
/*             {% if product.rating < i %}*/
/*             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*             {% else %}*/
/*             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if product.price %}*/
/*           <p class="price">*/
/*             {% if not product.special %}*/
/*             <strong>{{ product.price }}</strong>*/
/*             {% else %}*/
/*             <p class="text-danger"><strong>{{ product.special }}</strong></p>*/
/*             {% endif %}*/
/*           </p>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="btn-group">*/
/*           <button type="button" class="btn btn-default" onclick="cart.add('{{ product.product_id }}');">{{ button_cart }}</button>*/
/*           <button type="button" class="btn btn-default" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*           <button type="button" class="btn btn-default" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-bar-chart"></i></button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
