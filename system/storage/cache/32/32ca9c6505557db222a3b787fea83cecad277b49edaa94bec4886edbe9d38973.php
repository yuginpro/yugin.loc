<?php

/* basecart/template/common/header.twig */
class __TwigTemplate_d24e23fad993a2e967a018c42bbb7da9853e096feca6aae0897f7e88c690aaaa extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content= \"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<link href=\"catalog/view/theme/basecart/css/font-awesome.min.css\" rel=\"stylesheet\">
";
        // line 21
        if ( !(isset($context["theme"]) ? $context["theme"] : null)) {
            // line 22
            echo "  ";
            $context["theme"] = "default";
        }
        // line 24
        echo "<link href=\"catalog/view/theme/basecart/css/";
        echo (isset($context["theme"]) ? $context["theme"] : null);
        echo ".css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/basecart/css/main.css\" rel=\"stylesheet\">
<script src=\"catalog/view/theme/basecart/js/jquery.min.js\"></script>
<script src=\"catalog/view/theme/basecart/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/theme/basecart/js/common.js\"></script>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 33
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 36
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 39
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</head>
<body>
<header>
";
        // line 44
        if ( !(isset($context["nav"]) ? $context["nav"] : null)) {
            // line 45
            echo "  ";
            $context["nav"] = "navbar-default";
        }
        // line 47
        echo "<nav class=\"navbar ";
        echo (isset($context["nav"]) ? $context["nav"] : null);
        echo "\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 56
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 57
            echo "      <a class=\"navbar-brand\" href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>
      ";
        } else {
            // line 59
            echo "      <a class=\"navbar-brand\" href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a>
      ";
        }
        // line 61
        echo "    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      ";
        // line 63
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
      <ul class=\"nav navbar-nav navbar-right\">
        <li id=\"hiddenM\"><a class=\"btn btn-link\" role=\"button\" data-toggle=\"collapse\" href=\"#hiddenMenu\" aria-expanded=\"false\" aria-controls=\"hiddenMenu\"><i class=\"fa fa-ellipsis-h\"></i></a></li>
        ";
        // line 66
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
        <li class=\"dropdown\"><a href=\"";
        // line 67
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i><span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 69
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 70
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 71
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 72
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 73
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 74
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 76
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 77
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 79
        echo "          </ul>
        </li>
      </ul>
    </div>
    <div class=\"collapse\" id=\"hiddenMenu\">
      <div class=\"row\">
        <div class=\"col-sm-4\">
          ";
        // line 86
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
        </div>
        <div class=\"col-sm-4\">
          ";
        // line 89
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
        </div>
          <div class=\"col-sm-4\">
          ";
        // line 92
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
        </div>
      </div>
    </div>
  </div>
</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 92,  276 => 89,  270 => 86,  261 => 79,  254 => 77,  247 => 76,  240 => 74,  234 => 73,  228 => 72,  222 => 71,  215 => 70,  213 => 69,  206 => 67,  202 => 66,  196 => 63,  192 => 61,  184 => 59,  172 => 57,  170 => 56,  157 => 47,  153 => 45,  151 => 44,  146 => 41,  138 => 39,  134 => 38,  125 => 36,  121 => 35,  108 => 33,  104 => 32,  93 => 30,  89 => 29,  80 => 24,  76 => 22,  74 => 21,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content= "{{ keywords }}" />*/
/* {% endif %}*/
/* <link href="catalog/view/theme/basecart/css/font-awesome.min.css" rel="stylesheet">*/
/* {% if not theme %}*/
/*   {% set theme = 'default' %}*/
/* {% endif %}*/
/* <link href="catalog/view/theme/basecart/css/{{ theme }}.css" rel="stylesheet">*/
/* <link href="catalog/view/theme/basecart/css/main.css" rel="stylesheet">*/
/* <script src="catalog/view/theme/basecart/js/jquery.min.js"></script>*/
/* <script src="catalog/view/theme/basecart/js/bootstrap.min.js"></script>*/
/* <script src="catalog/view/theme/basecart/js/common.js"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}">*/
/* {% endfor %}*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}">*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}"></script>*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* <header>*/
/* {% if not nav %}*/
/*   {% set nav = 'navbar-default' %}*/
/* {% endif %}*/
/* <nav class="navbar {{ nav }}">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       {% if logo %}*/
/*       <a class="navbar-brand" href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*       {% else %}*/
/*       <a class="navbar-brand" href="{{ home }}">{{ name }}</a>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       {{ menu }}*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li id="hiddenM"><a class="btn btn-link" role="button" data-toggle="collapse" href="#hiddenMenu" aria-expanded="false" aria-controls="hiddenMenu"><i class="fa fa-ellipsis-h"></i></a></li>*/
/*         {{ cart }}*/
/*         <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span class="caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*     <div class="collapse" id="hiddenMenu">*/
/*       <div class="row">*/
/*         <div class="col-sm-4">*/
/*           {{ currency }}*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*           {{ language }}*/
/*         </div>*/
/*           <div class="col-sm-4">*/
/*           {{ search }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* </header>*/
/* */
