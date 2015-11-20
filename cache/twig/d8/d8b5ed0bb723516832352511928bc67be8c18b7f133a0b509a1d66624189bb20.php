<?php

/* partials/header.html.twig */
class __TwigTemplate_ab201b3572ce4e3830430dcf0d4e139311084a6b5e4736e955bf4d32319c3e44 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-inverse navbar-static-top\" role=\"navigation\">  
\t<div class=\"container\"> 
\t\t<div class=\"navbar-header\"> 
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> 
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>  
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span> 
\t\t\t\t<span class=\"icon-bar\"></span> 
\t\t\t</button> 
\t\t\t<a class=\"navbar-brand\" href=\"#\">Grav</a> 
\t\t</div> 
\t\t<div class=\"navbar-collapse collapse\"> 
\t\t\t<ul class=\"nav navbar-nav navbar-right\"> 
\t\t\t\t";
        // line 15
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            echo " 
\t\t\t\t";
            // line 16
            if ($this->getAttribute($context["page"], "visible", array())) {
                echo " 
\t\t\t\t";
                // line 17
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                echo " 
\t\t\t\t<li class=\"";
                // line 18
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\"> ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li> 
\t\t\t\t";
            }
            // line 19
            echo " 
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo " 
\t\t\t</ul> 
\t\t</div> 
\t</div> 
</nav> 
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  58 => 19,  49 => 18,  45 => 17,  41 => 16,  34 => 15,  19 => 1,);
    }
}
/* <nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">  */
/* 	<div class="container"> */
/* 		<div class="navbar-header"> */
/* 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> */
/* 				<span class="sr-only">Toggle navigation</span>  */
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span> */
/* 				<span class="icon-bar"></span> */
/* 			</button> */
/* 			<a class="navbar-brand" href="#">Grav</a> */
/* 		</div> */
/* 		<div class="navbar-collapse collapse"> */
/* 			<ul class="nav navbar-nav navbar-right"> */
/* 				{# this for loop will loop through the top-level pages and display a menu item for each of them #}*/
/* 				{% for page in pages.children %} */
/* 				{% if page.visible %} */
/* 				{% set current_page = (page.active or page.activeChild) ? 'active' : '' %} */
/* 				<li class="{{ current_page }}"><a href="{{ page.url }}"> {{ page.menu }}</a></li> */
/* 				{% endif %} */
/* 				{% endfor %} */
/* 			</ul> */
/* 		</div> */
/* 	</div> */
/* </nav> */
/* */
