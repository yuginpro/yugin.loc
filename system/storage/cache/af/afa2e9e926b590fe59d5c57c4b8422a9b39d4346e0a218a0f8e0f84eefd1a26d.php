<?php

/* basecart/template/common/footer.twig */
class __TwigTemplate_3e34db0b3d0eaffe30dcd6719066096ef2ff3c334579354cf32fc17024b06e53 extends Twig_Template
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
        echo "<div class=\"container\">
  <footer>
      <div class=\"row\">
        ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "        <div class=\"col-sm-3\">
          <h4>";
            // line 6
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h4>
          <ul class=\"list-group\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "            <li class=\"list-group-item\"><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "          </ul>
        </div>
        ";
        }
        // line 14
        echo "        <div class=\"col-sm-3\">
          <h4>";
        // line 15
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h4>
          <ul class=\"list-group\">
            <li class=\"list-group-item\"><a href=\"";
        // line 17
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 18
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 19
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h4>";
        // line 23
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h4>
          <ul class=\"list-group\">
            <li class=\"list-group-item\"><a href=\"";
        // line 25
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 26
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 27
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 28
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h4>";
        // line 32
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h4>
          <ul class=\"list-group\">
            <li class=\"list-group-item\"><a href=\"";
        // line 34
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 35
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 36
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 37
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <p class=\"text-center text-uppercase text-muted powered\">Design by <a href=\"//themefiber.com/\">themefiber</a>. Powered by <a href=\"https://www.opencart.com/\">OpenCart</a></p>
  </footer>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 37,  132 => 36,  126 => 35,  120 => 34,  115 => 32,  106 => 28,  100 => 27,  94 => 26,  88 => 25,  83 => 23,  74 => 19,  68 => 18,  62 => 17,  57 => 15,  54 => 14,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/*   <footer>*/
/*       <div class="row">*/
/*         {% if informations %}*/
/*         <div class="col-sm-3">*/
/*           <h4>{{ text_information }}</h4>*/
/*           <ul class="list-group">*/
/*             {% for information in informations %}*/
/*             <li class="list-group-item"><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="col-sm-3">*/
/*           <h4>{{ text_service }}</h4>*/
/*           <ul class="list-group">*/
/*             <li class="list-group-item"><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ return }}">{{ text_return }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*           <h4>{{ text_extra }}</h4>*/
/*           <ul class="list-group">*/
/*             <li class="list-group-item"><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ special }}">{{ text_special }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*           <h4>{{ text_account }}</h4>*/
/*           <ul class="list-group">*/
/*             <li class="list-group-item"><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <p class="text-center text-uppercase text-muted powered">Design by <a href="//themefiber.com/">themefiber</a>. Powered by <a href="https://www.opencart.com/">OpenCart</a></p>*/
/*   </footer>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
