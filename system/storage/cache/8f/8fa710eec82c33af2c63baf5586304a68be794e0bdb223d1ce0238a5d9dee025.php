<?php

/* default/template/partial/d_notification.twig */
class __TwigTemplate_13f777be9ffc9b768e5464ea6eb9d9c6e1aa98bd70331fc32dabba363af3f7e3 extends Twig_Template
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
        echo "<!-- > d_notification -->
";
        // line 2
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 3
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
";
        }
        // line 7
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 8
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
";
        }
        // line 12
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 13
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
";
        }
        // line 17
        echo "<!-- /> d_notification -->
";
    }

    public function getTemplateName()
    {
        return "default/template/partial/d_notification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  44 => 13,  42 => 12,  34 => 8,  32 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- > d_notification -->*/
/* {% if attention %}*/
/*     <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{attention}}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/* {% endif %}*/
/* {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{success}}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/* {% endif %}*/
/* {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{error_warning}}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/* {% endif %}*/
/* <!-- /> d_notification -->*/
/* */
