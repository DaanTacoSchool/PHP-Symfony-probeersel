<?php

/* search/searchresults.html.twig */
class __TwigTemplate_eba3785be30405c93a230effeb734c41eeb326a1e6484eeed09f363a10475e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/searchresults.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'body_menu' => array($this, 'block_body_menu'),
            'body_results' => array($this, 'block_body_results'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_497a5f6a441d48e203644c39454f78d7247bec7e9456a0ffcb6d30d7fa043a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497a5f6a441d48e203644c39454f78d7247bec7e9456a0ffcb6d30d7fa043a35->enter($__internal_497a5f6a441d48e203644c39454f78d7247bec7e9456a0ffcb6d30d7fa043a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $__internal_553e930e1328a321279623a99501c175be1ceb6571e63f66bbbd4119311ae18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553e930e1328a321279623a99501c175be1ceb6571e63f66bbbd4119311ae18c->enter($__internal_553e930e1328a321279623a99501c175be1ceb6571e63f66bbbd4119311ae18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_497a5f6a441d48e203644c39454f78d7247bec7e9456a0ffcb6d30d7fa043a35->leave($__internal_497a5f6a441d48e203644c39454f78d7247bec7e9456a0ffcb6d30d7fa043a35_prof);

        
        $__internal_553e930e1328a321279623a99501c175be1ceb6571e63f66bbbd4119311ae18c->leave($__internal_553e930e1328a321279623a99501c175be1ceb6571e63f66bbbd4119311ae18c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccb449a7fff0abf4980a90eca39fe285c116eb12004f388b252c12a860503107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb449a7fff0abf4980a90eca39fe285c116eb12004f388b252c12a860503107->enter($__internal_ccb449a7fff0abf4980a90eca39fe285c116eb12004f388b252c12a860503107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6549f9de15bc60ef3da7328b16268ed2cd539ca63d37768a8de59a73349d744d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6549f9de15bc60ef3da7328b16268ed2cd539ca63d37768a8de59a73349d744d->enter($__internal_6549f9de15bc60ef3da7328b16268ed2cd539ca63d37768a8de59a73349d744d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper\">
    <div id=\"site-wrapper-inner-resultpage\">
";
        // line 5
        $this->displayBlock('body_menu', $context, $blocks);
        // line 8
        $this->displayBlock('body_results', $context, $blocks);
        // line 50
        echo "    </div>
</div>

";
        
        $__internal_6549f9de15bc60ef3da7328b16268ed2cd539ca63d37768a8de59a73349d744d->leave($__internal_6549f9de15bc60ef3da7328b16268ed2cd539ca63d37768a8de59a73349d744d_prof);

        
        $__internal_ccb449a7fff0abf4980a90eca39fe285c116eb12004f388b252c12a860503107->leave($__internal_ccb449a7fff0abf4980a90eca39fe285c116eb12004f388b252c12a860503107_prof);

    }

    // line 5
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_0f4b1c20c351ffa2d28750dbd674041b8f15a351023715e1e578432cb7170b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4b1c20c351ffa2d28750dbd674041b8f15a351023715e1e578432cb7170b0a->enter($__internal_0f4b1c20c351ffa2d28750dbd674041b8f15a351023715e1e578432cb7170b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_42273066860f2e1f1eb1a66149fe4e827805619706ebae618bc1c5e6e0142f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42273066860f2e1f1eb1a66149fe4e827805619706ebae618bc1c5e6e0142f4b->enter($__internal_42273066860f2e1f1eb1a66149fe4e827805619706ebae618bc1c5e6e0142f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_42273066860f2e1f1eb1a66149fe4e827805619706ebae618bc1c5e6e0142f4b->leave($__internal_42273066860f2e1f1eb1a66149fe4e827805619706ebae618bc1c5e6e0142f4b_prof);

        
        $__internal_0f4b1c20c351ffa2d28750dbd674041b8f15a351023715e1e578432cb7170b0a->leave($__internal_0f4b1c20c351ffa2d28750dbd674041b8f15a351023715e1e578432cb7170b0a_prof);

    }

    // line 8
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_27689e4975364c4cb04820a8590ff39ce05a8a73148fc8cb5c813c4e5206dcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27689e4975364c4cb04820a8590ff39ce05a8a73148fc8cb5c813c4e5206dcf1->enter($__internal_27689e4975364c4cb04820a8590ff39ce05a8a73148fc8cb5c813c4e5206dcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_b42330fbc827972cc069cd61ec4a9f9fac5c9973886c20b8021490bada7b144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42330fbc827972cc069cd61ec4a9f9fac5c9973886c20b8021490bada7b144a->enter($__internal_b42330fbc827972cc069cd61ec4a9f9fac5c9973886c20b8021490bada7b144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 10
            echo "       
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
                 ";
            // line 13
            if ( !(is_string($__internal_5f0d0916bc86491fc932623d0dcbbf067250b57c64fea60e13400154df0ee9e0 = $this->getAttribute($context["movie"], "PosterPath", array(), "method")) && is_string($__internal_9362c3633c13737d0406ef218fcacd23e62a9473bba27c354e5225889d15506b = ".jpg") && ('' === $__internal_9362c3633c13737d0406ef218fcacd23e62a9473bba27c354e5225889d15506b || $__internal_9362c3633c13737d0406ef218fcacd23e62a9473bba27c354e5225889d15506b === substr($__internal_5f0d0916bc86491fc932623d0dcbbf067250b57c64fea60e13400154df0ee9e0, -strlen($__internal_9362c3633c13737d0406ef218fcacd23e62a9473bba27c354e5225889d15506b))))) {
                // line 14
                echo "                 <p>No image found!</p>
                 ";
            } else {
                // line 16
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "PosterPath", array(), "method"), "html", null, true);
                echo "\" alt=\"#\">
                 ";
            }
            // line 18
            echo "            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Title", array(), "method"), "html", null, true);
            echo "</h3>
                </div>       
                <div class=\"movieDiv-info\">
                    <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Overview", array(), "method"), "html", null, true);
            echo "</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table class=\"smallDetailsTable\">
                    <tr><th>Release date</th><td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "ReleaseDate", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Average score</th><td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "VoteAverage", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Total votes</th><td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "VoteCount", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Popularity rating</th><td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Popularity", array(), "method"), "html", null, true);
            echo "</td><td><a href=\"../../search/searchpage/details/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "MovieId", array(), "method"), "html", null, true);
            echo "\">Details</a></td></tr>
                    
                </table>     
                </div>
            </div>
       </div>
       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "       <p>";
        echo twig_escape_filter($this->env, (isset($context["totalitems"]) ? $context["totalitems"] : $this->getContext($context, "totalitems")), "html", null, true);
        echo " Movies found!</p> 
        
   <div class=\"paginationDiv\">
       ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 43
            echo "       ";
            if (($context["page"] <= (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")))) {
                // line 44
                echo "           <a href=\"/search/searchpage/";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "\"  class=\"";
                if (((isset($context["currentpage"]) ? $context["currentpage"] : $this->getContext($context, "currentpage")) == $context["page"])) {
                    echo "activeLink";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a> |
       ";
            }
            // line 46
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "       of <a href=\"/search/searchpage/";
        echo twig_escape_filter($this->env, (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "html", null, true);
        echo "\" class=\"lastPageLink\">";
        echo twig_escape_filter($this->env, (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "html", null, true);
        echo "</a>   
    </div>
";
        
        $__internal_b42330fbc827972cc069cd61ec4a9f9fac5c9973886c20b8021490bada7b144a->leave($__internal_b42330fbc827972cc069cd61ec4a9f9fac5c9973886c20b8021490bada7b144a_prof);

        
        $__internal_27689e4975364c4cb04820a8590ff39ce05a8a73148fc8cb5c813c4e5206dcf1->leave($__internal_27689e4975364c4cb04820a8590ff39ce05a8a73148fc8cb5c813c4e5206dcf1_prof);

    }

    public function getTemplateName()
    {
        return "search/searchresults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 47,  197 => 46,  185 => 44,  182 => 43,  178 => 42,  171 => 39,  155 => 31,  151 => 30,  147 => 29,  143 => 28,  136 => 24,  130 => 21,  125 => 18,  119 => 16,  115 => 14,  113 => 13,  108 => 10,  103 => 9,  94 => 8,  81 => 6,  72 => 5,  59 => 50,  57 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"site-wrapper\">
    <div id=\"site-wrapper-inner-resultpage\">
{% block body_menu %}
    {{parent()}}
{% endblock %}
{% block body_results %}
    {% for movie in movies %}
       
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
                 {% if not (movie.PosterPath() ends with '.jpg') %}
                 <p>No image found!</p>
                 {% else %}
            <img src=\"{{movie.PosterPath()}}\" alt=\"#\">
                 {% endif %}
            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>{{ movie.Title() }}</h3>
                </div>       
                <div class=\"movieDiv-info\">
                    <p>{{ movie.Overview()}}</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table class=\"smallDetailsTable\">
                    <tr><th>Release date</th><td>{{movie.ReleaseDate()}}</td><td></td></tr>
                    <tr><th>Average score</th><td>{{movie.VoteAverage()}}</td><td></td></tr>
                    <tr><th>Total votes</th><td>{{movie.VoteCount()}}</td><td></td></tr>
                    <tr><th>Popularity rating</th><td>{{movie.Popularity()}}</td><td><a href=\"../../search/searchpage/details/{{movie.MovieId()}}\">Details</a></td></tr>
                    
                </table>     
                </div>
            </div>
       </div>
       
    {% endfor %}
       <p>{{totalitems}} Movies found!</p> 
        
   <div class=\"paginationDiv\">
       {% for page in pagination.pages %}
       {% if page <= totalpages %}
           <a href=\"/search/searchpage/{{page}}\"  class=\"{% if currentpage == page %}activeLink{% endif %}\">{{ page }}</a> |
       {% endif %}
       {% endfor %}
       of <a href=\"/search/searchpage/{{totalpages}}\" class=\"lastPageLink\">{{ totalpages }}</a>   
    </div>
{% endblock %}{# body_results #}
    </div>
</div>

{% endblock %}{# body #}", "search/searchresults.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\searchresults.html.twig");
    }
}
