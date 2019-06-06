<?php

/* extension/module/basecart.twig */
class __TwigTemplate_57e2eaa9e1ee66ce6e913894891f6c5525df5ea55976f8b786d10a1301f56e64 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-basecart\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
        <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
        <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-basecart\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-nav\">";
        // line 29
        echo (isset($context["entry_nav"]) ? $context["entry_nav"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
            <select name=\"basecart_nav\" id=\"input-nav\" class=\"form-control\">
                <option value=\"navbar-default\" ";
        // line 32
        echo ((((isset($context["basecart_nav"]) ? $context["basecart_nav"] : null) == "navbar-default")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</option>
                <option value=\"navbar-inverse\" ";
        // line 33
        echo ((((isset($context["basecart_nav"]) ? $context["basecart_nav"] : null) == "navbar-inverse")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_inverse"]) ? $context["entry_inverse"] : null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 38
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"basecart_theme\" id=\"input-theme\" class=\"form-control\">
                <option value=\"default\" ";
        // line 41
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "default")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</option>
                <option value=\"cerulean\" ";
        // line 42
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "cerulean")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_cerulean"]) ? $context["entry_cerulean"] : null);
        echo "</option>
                <option value=\"cosmo\" ";
        // line 43
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "cosmo")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_cosmo"]) ? $context["entry_cosmo"] : null);
        echo "</option>
                <option value=\"cyborg\" ";
        // line 44
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "cyborg")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_cyborg"]) ? $context["entry_cyborg"] : null);
        echo "</option>
                <option value=\"darkly\" ";
        // line 45
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "darkly")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_darkly"]) ? $context["entry_darkly"] : null);
        echo "</option>
                <option value=\"flatly\" ";
        // line 46
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "flatly")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_flatly"]) ? $context["entry_flatly"] : null);
        echo "</option>
                <option value=\"journal\" ";
        // line 47
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "journal")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_journal"]) ? $context["entry_journal"] : null);
        echo "</option>
                <option value=\"lumen\" ";
        // line 48
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "lumen")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_lumen"]) ? $context["entry_lumen"] : null);
        echo "</option>
                <option value=\"paper\" ";
        // line 49
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "paper")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_paper"]) ? $context["entry_paper"] : null);
        echo "</option>
                <option value=\"readable\" ";
        // line 50
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "readable")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_readable"]) ? $context["entry_readable"] : null);
        echo "</option>
                <option value=\"sandstone\" ";
        // line 51
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "sandstone")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_sandstone"]) ? $context["entry_sandstone"] : null);
        echo "</option>
                <option value=\"simplex\" ";
        // line 52
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "simplex")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_simplex"]) ? $context["entry_simplex"] : null);
        echo "</option>
                <option value=\"slate\" ";
        // line 53
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "slate")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_slate"]) ? $context["entry_slate"] : null);
        echo "</option>
                <option value=\"spacelab\" ";
        // line 54
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "spacelab")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_spacelab"]) ? $context["entry_spacelab"] : null);
        echo "</option>
                <option value=\"superhero\" ";
        // line 55
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "superhero")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_superhero"]) ? $context["entry_superhero"] : null);
        echo "</option>
                <option value=\"united\" ";
        // line 56
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "united")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_united"]) ? $context["entry_united"] : null);
        echo "</option>
                <option value=\"yeti\" ";
        // line 57
        echo ((((isset($context["basecart_theme"]) ? $context["basecart_theme"] : null) == "yeti")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["entry_yeti"]) ? $context["entry_yeti"] : null);
        echo "</option>
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 66
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/basecart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 66,  213 => 57,  207 => 56,  201 => 55,  195 => 54,  189 => 53,  183 => 52,  177 => 51,  171 => 50,  165 => 49,  159 => 48,  153 => 47,  147 => 46,  141 => 45,  135 => 44,  129 => 43,  123 => 42,  117 => 41,  111 => 38,  101 => 33,  95 => 32,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-basecart" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*         <h1>{{ heading_title }}</h1>*/
/*         <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-basecart" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-nav">{{ entry_nav }}</label>*/
/*             <div class="col-sm-10">*/
/*             <select name="basecart_nav" id="input-nav" class="form-control">*/
/*                 <option value="navbar-default" {{ basecart_nav == 'navbar-default' ? 'selected' : '' }}>{{ entry_default }}</option>*/
/*                 <option value="navbar-inverse" {{ basecart_nav == 'navbar-inverse' ? 'selected' : '' }}>{{ entry_inverse }}</option>*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="basecart_theme" id="input-theme" class="form-control">*/
/*                 <option value="default" {{ basecart_theme == 'default' ? 'selected' : '' }}>{{ entry_default }}</option>*/
/*                 <option value="cerulean" {{ basecart_theme == 'cerulean' ? 'selected' : '' }}>{{ entry_cerulean }}</option>*/
/*                 <option value="cosmo" {{ basecart_theme == 'cosmo' ? 'selected' : '' }}>{{ entry_cosmo }}</option>*/
/*                 <option value="cyborg" {{ basecart_theme == 'cyborg' ? 'selected' : '' }}>{{ entry_cyborg }}</option>*/
/*                 <option value="darkly" {{ basecart_theme == 'darkly' ? 'selected' : '' }}>{{ entry_darkly }}</option>*/
/*                 <option value="flatly" {{ basecart_theme == 'flatly' ? 'selected' : '' }}>{{ entry_flatly }}</option>*/
/*                 <option value="journal" {{ basecart_theme == 'journal' ? 'selected' : '' }}>{{ entry_journal }}</option>*/
/*                 <option value="lumen" {{ basecart_theme == 'lumen' ? 'selected' : '' }}>{{ entry_lumen }}</option>*/
/*                 <option value="paper" {{ basecart_theme == 'paper' ? 'selected' : '' }}>{{ entry_paper }}</option>*/
/*                 <option value="readable" {{ basecart_theme == 'readable' ? 'selected' : '' }}>{{ entry_readable }}</option>*/
/*                 <option value="sandstone" {{ basecart_theme == 'sandstone' ? 'selected' : '' }}>{{ entry_sandstone }}</option>*/
/*                 <option value="simplex" {{ basecart_theme == 'simplex' ? 'selected' : '' }}>{{ entry_simplex }}</option>*/
/*                 <option value="slate" {{ basecart_theme == 'slate' ? 'selected' : '' }}>{{ entry_slate }}</option>*/
/*                 <option value="spacelab" {{ basecart_theme == 'spacelab' ? 'selected' : '' }}>{{ entry_spacelab }}</option>*/
/*                 <option value="superhero" {{ basecart_theme == 'superhero' ? 'selected' : '' }}>{{ entry_superhero }}</option>*/
/*                 <option value="united" {{ basecart_theme == 'united' ? 'selected' : '' }}>{{ entry_united }}</option>*/
/*                 <option value="yeti" {{ basecart_theme == 'yeti' ? 'selected' : '' }}>{{ entry_yeti }}</option>*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
