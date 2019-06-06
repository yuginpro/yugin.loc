<?php

/* default/template/partial/d_breadcrumb.twig */
class __TwigTemplate_e41bed3df8d368964427881600de232ff68c8561069672e4285d5f7065554c57 extends Twig_Template
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
        echo "<!-- > d_breadcrumb -->
<div id=\"breadcrumb\">
  <div class=\"wrapper\">
    <div class=\"container\">
      <ul class=\"breadcrumb\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "            ";
            if ($this->getAttribute($context["breadcrumb"], "href", array())) {
                // line 8
                echo "                <li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>
            ";
            } else {
                // line 10
                echo "                <li>";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</li>
            ";
            }
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
</div>
<!-- /> d_breadcrumb -->";
    }

    public function getTemplateName()
    {
        return "default/template/partial/d_breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  47 => 12,  41 => 10,  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!-- > d_breadcrumb -->*/
/* <div id="breadcrumb">*/
/*   <div class="wrapper">*/
/*     <div class="container">*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             {% if breadcrumb.href %}*/
/*                 <li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/*             {% else %}*/
/*                 <li>{{breadcrumb.text}}</li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <!-- /> d_breadcrumb -->*/
