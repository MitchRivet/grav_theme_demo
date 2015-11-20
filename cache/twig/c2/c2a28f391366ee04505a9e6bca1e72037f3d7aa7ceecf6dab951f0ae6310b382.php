<?php

/* partials/navigation.html.twig */
class __TwigTemplate_640b9e387251d0895d31688d8d8d215c1aa91759620c58c8b84d95ae9a7cef92 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">Grav</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 15
            echo "                    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 16
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "bootstrap", array()), "dropdown", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()), "count", array()) > 0))) {
                // line 17
                echo "                        <li class=\"dropdown ";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
                // line 18
                echo $this->getAttribute($context["page"], "menu", array());
                echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                ";
                // line 20
                $context["current_parent"] = (($this->getAttribute($context["page"], "active", array())) ? ("active") : (""));
                // line 21
                echo "                                <li class=\"";
                echo (isset($context["current_parent"]) ? $context["current_parent"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                                <li class=\"divider\"></li>
                                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 24
                    echo "                                    ";
                    $context["current_child"] = ((($this->getAttribute($context["child"], "active", array()) || $this->getAttribute($context["child"], "activeChild", array()))) ? ("active") : (""));
                    // line 25
                    echo "                                    <li class=\"";
                    echo (isset($context["current_child"]) ? $context["current_child"] : null);
                    echo "\"><a href=\"";
                    echo $this->getAttribute($context["child"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["child"], "menu", array());
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </ul>
                        </li>
                    ";
            } else {
                // line 30
                echo "                        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                    ";
            }
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 34
            echo "                    <li>
                        <a href=\"";
            // line 35
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                ";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "user", array()), "username", array()))) {
            // line 40
            echo "                    <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 40)->display($context);
            echo "</li>
                ";
        }
        // line 42
        echo "            </ul>
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  134 => 40,  132 => 39,  129 => 38,  118 => 35,  115 => 34,  110 => 33,  104 => 32,  94 => 30,  89 => 27,  76 => 25,  73 => 24,  69 => 23,  59 => 21,  57 => 20,  52 => 18,  47 => 17,  44 => 16,  41 => 15,  37 => 14,  30 => 10,  19 => 1,);
    }
}
/* <nav class="navbar navbar-default navbar-static-top" role="navigation">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ base_url == '' ? '/' : base_url }}">Grav</a>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {% for page in pages.children.visible %}*/
/*                     {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}*/
/*                     {% if config.themes.bootstrap.dropdown.enabled and page.children.visible.count > 0 %}*/
/*                         <li class="dropdown {{ current_page }}">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ page.menu }} <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu" role="menu">*/
/*                                 {% set current_parent = page.active ? 'active' : '' %}*/
/*                                 <li class="{{ current_parent }}"><a href="{{ page.url }}">{{ page.menu }}</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 {% for child in page.children.visible %}*/
/*                                     {% set current_child = (child.active or child.activeChild) ? 'active' : '' %}*/
/*                                     <li class="{{ current_child }}"><a href="{{ child.url }}">{{ child.menu }}</a></li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li class="{{ current_page }}"><a href="{{ page.url }}">{{ page.menu }}</a></li>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% for mitem in site.menu %}*/
/*                     <li>*/
/*                         <a href="{{ mitem.url }}">{{ mitem.text }}</a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/* */
/*                 {% if config.plugins.login.enabled and grav.user.username %}*/
/*                     <li><i class="fa fa-lock"></i> {% include 'partials/login-status.html.twig' %}</li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */
