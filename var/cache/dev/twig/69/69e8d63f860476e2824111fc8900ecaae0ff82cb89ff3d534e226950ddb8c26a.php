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
        $__internal_67d5bab3f5ff0b99a63204ee5e068c9d53dfa0a16f484318142a5e2b031a4cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d5bab3f5ff0b99a63204ee5e068c9d53dfa0a16f484318142a5e2b031a4cf0->enter($__internal_67d5bab3f5ff0b99a63204ee5e068c9d53dfa0a16f484318142a5e2b031a4cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $__internal_2854629887191bd6e2877b6d937a49649928c1f5cd639a707e522a71ec8a5fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2854629887191bd6e2877b6d937a49649928c1f5cd639a707e522a71ec8a5fc4->enter($__internal_2854629887191bd6e2877b6d937a49649928c1f5cd639a707e522a71ec8a5fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d5bab3f5ff0b99a63204ee5e068c9d53dfa0a16f484318142a5e2b031a4cf0->leave($__internal_67d5bab3f5ff0b99a63204ee5e068c9d53dfa0a16f484318142a5e2b031a4cf0_prof);

        
        $__internal_2854629887191bd6e2877b6d937a49649928c1f5cd639a707e522a71ec8a5fc4->leave($__internal_2854629887191bd6e2877b6d937a49649928c1f5cd639a707e522a71ec8a5fc4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d8613e4ecfc43968520cad9cba6419c1f5048d4b5a3c1c24e7a23a7b3ed016e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8613e4ecfc43968520cad9cba6419c1f5048d4b5a3c1c24e7a23a7b3ed016e->enter($__internal_5d8613e4ecfc43968520cad9cba6419c1f5048d4b5a3c1c24e7a23a7b3ed016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51afed61875a30bbc7f7acb7aa5ef9dc74ffef4f219f0a623a983d8439bdeb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51afed61875a30bbc7f7acb7aa5ef9dc74ffef4f219f0a623a983d8439bdeb1e->enter($__internal_51afed61875a30bbc7f7acb7aa5ef9dc74ffef4f219f0a623a983d8439bdeb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper bgMovieResults\"style=\"background-image:url('";
        echo twig_escape_filter($this->env, (isset($context["background"]) ? $context["background"] : $this->getContext($context, "background")), "html", null, true);
        echo "'); 
    \">
    <div id=\"site-wrapper-inner-resultpage\" >
";
        // line 6
        $this->displayBlock('body_menu', $context, $blocks);
        // line 9
        $this->displayBlock('body_results', $context, $blocks);
        // line 62
        echo "    </div>
</div>

";
        
        $__internal_51afed61875a30bbc7f7acb7aa5ef9dc74ffef4f219f0a623a983d8439bdeb1e->leave($__internal_51afed61875a30bbc7f7acb7aa5ef9dc74ffef4f219f0a623a983d8439bdeb1e_prof);

        
        $__internal_5d8613e4ecfc43968520cad9cba6419c1f5048d4b5a3c1c24e7a23a7b3ed016e->leave($__internal_5d8613e4ecfc43968520cad9cba6419c1f5048d4b5a3c1c24e7a23a7b3ed016e_prof);

    }

    // line 6
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_1d5f859b164619afcaddf52e8f128ed96a94f440dde0e579506dadfac58f3d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5f859b164619afcaddf52e8f128ed96a94f440dde0e579506dadfac58f3d14->enter($__internal_1d5f859b164619afcaddf52e8f128ed96a94f440dde0e579506dadfac58f3d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_d0f02a323a3f146c998751f0c5d5306beb331f4689050dd2c80212dbf451992c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f02a323a3f146c998751f0c5d5306beb331f4689050dd2c80212dbf451992c->enter($__internal_d0f02a323a3f146c998751f0c5d5306beb331f4689050dd2c80212dbf451992c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 7
        echo "    ";
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_d0f02a323a3f146c998751f0c5d5306beb331f4689050dd2c80212dbf451992c->leave($__internal_d0f02a323a3f146c998751f0c5d5306beb331f4689050dd2c80212dbf451992c_prof);

        
        $__internal_1d5f859b164619afcaddf52e8f128ed96a94f440dde0e579506dadfac58f3d14->leave($__internal_1d5f859b164619afcaddf52e8f128ed96a94f440dde0e579506dadfac58f3d14_prof);

    }

    // line 9
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_9d4e062b74a515b5a723bd4b5e5f0f4ecc2d568001dc9d4b97081482197ede27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4e062b74a515b5a723bd4b5e5f0f4ecc2d568001dc9d4b97081482197ede27->enter($__internal_9d4e062b74a515b5a723bd4b5e5f0f4ecc2d568001dc9d4b97081482197ede27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_b380e0267b77cc34f0a44ede069c95a59b325aeaf567fa602e4dc3627dc3840a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b380e0267b77cc34f0a44ede069c95a59b325aeaf567fa602e4dc3627dc3840a->enter($__internal_b380e0267b77cc34f0a44ede069c95a59b325aeaf567fa602e4dc3627dc3840a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 10
        echo "        <div class=\"paginationDiv-top\">
            <div class=\"paginationDiv-top-inner\">
       ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 13
            echo "       ";
            if (($context["page"] <= (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")))) {
                // line 14
                echo "           <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_results", array("page" => $context["page"], "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")))), "html", null, true);
                echo "\" class=\"";
                if (((isset($context["currentpage"]) ? $context["currentpage"] : $this->getContext($context, "currentpage")) == $context["page"])) {
                    echo "activeLink";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a> |
       ";
            }
            // line 16
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "       of <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_results", array("page" => (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")))), "html", null, true);
        echo "\" class=\"lastPageLink\">";
        echo twig_escape_filter($this->env, (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "html", null, true);
        echo "</a>   
            </div>
    </div>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 21
            echo "       
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
                 ";
            // line 24
            if ( !(is_string($__internal_6113b828375bd120a5f2890148eaced65e9572b1488eb0d5fe63f776c69219ea = $this->getAttribute($context["movie"], "PosterPath", array(), "method")) && is_string($__internal_c2b92dfb8a4b74f6ab2af31e196c5615797b087bd9a94fc6e70a91f94b7c2e39 = ".jpg") && ('' === $__internal_c2b92dfb8a4b74f6ab2af31e196c5615797b087bd9a94fc6e70a91f94b7c2e39 || $__internal_c2b92dfb8a4b74f6ab2af31e196c5615797b087bd9a94fc6e70a91f94b7c2e39 === substr($__internal_6113b828375bd120a5f2890148eaced65e9572b1488eb0d5fe63f776c69219ea, -strlen($__internal_c2b92dfb8a4b74f6ab2af31e196c5615797b087bd9a94fc6e70a91f94b7c2e39))))) {
                // line 25
                echo "                 <p>No image found!</p>
                 ";
            } else {
                // line 27
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "PosterPath", array(), "method"), "html", null, true);
                echo "\" alt=\"#\">
                 ";
            }
            // line 29
            echo "            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Title", array(), "method"), "html", null, true);
            echo "</h3>
                </div>       
                <div class=\"movieDiv-info\">
                    <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Overview", array(), "method"), "html", null, true);
            echo "</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table class=\"smallDetailsTable\">
                    <tr><th>Release date</th><td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "ReleaseDate", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Average score</th><td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "VoteAverage", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Total votes</th><td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "VoteCount", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Popularity rating</th><td>";
            // line 42
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
        // line 50
        echo "       <p>";
        echo twig_escape_filter($this->env, (isset($context["totalitems"]) ? $context["totalitems"] : $this->getContext($context, "totalitems")), "html", null, true);
        echo " Movies found!</p> 
   
        
   <div class=\"paginationDiv\">
       ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 55
            echo "       ";
            if (($context["page"] <= (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")))) {
                // line 56
                echo "           <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_results", array("page" => $context["page"], "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")))), "html", null, true);
                echo "\" class=\"";
                if (((isset($context["currentpage"]) ? $context["currentpage"] : $this->getContext($context, "currentpage")) == $context["page"])) {
                    echo "activeLink";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a> |
       ";
            }
            // line 58
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "       of <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_results", array("page" => (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "search" => (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")))), "html", null, true);
        echo "\" class=\"lastPageLink\">";
        echo twig_escape_filter($this->env, (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "html", null, true);
        echo "</a>   
    </div>
";
        
        $__internal_b380e0267b77cc34f0a44ede069c95a59b325aeaf567fa602e4dc3627dc3840a->leave($__internal_b380e0267b77cc34f0a44ede069c95a59b325aeaf567fa602e4dc3627dc3840a_prof);

        
        $__internal_9d4e062b74a515b5a723bd4b5e5f0f4ecc2d568001dc9d4b97081482197ede27->leave($__internal_9d4e062b74a515b5a723bd4b5e5f0f4ecc2d568001dc9d4b97081482197ede27_prof);

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
        return array (  244 => 59,  238 => 58,  226 => 56,  223 => 55,  219 => 54,  211 => 50,  195 => 42,  191 => 41,  187 => 40,  183 => 39,  176 => 35,  170 => 32,  165 => 29,  159 => 27,  155 => 25,  153 => 24,  148 => 21,  144 => 20,  135 => 17,  129 => 16,  117 => 14,  114 => 13,  110 => 12,  106 => 10,  97 => 9,  84 => 7,  75 => 6,  62 => 62,  60 => 9,  58 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
<div class=\"site-wrapper bgMovieResults\"style=\"background-image:url('{{background}}'); 
    \">
    <div id=\"site-wrapper-inner-resultpage\" >
{% block body_menu %}
    {{parent()}}
{% endblock %}
{% block body_results %}
        <div class=\"paginationDiv-top\">
            <div class=\"paginationDiv-top-inner\">
       {% for page in pagination.pages %}
       {% if page <= totalpages %}
           <a href=\"{{ path('movie_results', {'page': page,'search': search}) }}\" class=\"{% if currentpage == page %}activeLink{% endif %}\">{{ page }}</a> |
       {% endif %}
       {% endfor %}
       of <a href=\"{{ path('movie_results', {'page': totalpages,'search': search}) }}\" class=\"lastPageLink\">{{ totalpages }}</a>   
            </div>
    </div>
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
           <a href=\"{{ path('movie_results', {'page': page,'search': search}) }}\" class=\"{% if currentpage == page %}activeLink{% endif %}\">{{ page }}</a> |
       {% endif %}
       {% endfor %}
       of <a href=\"{{ path('movie_results', {'page': totalpages,'search': search}) }}\" class=\"lastPageLink\">{{ totalpages }}</a>   
    </div>
{% endblock %}{# body_results #}
    </div>
</div>

{% endblock %}{# body #}", "search/searchresults.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\searchresults.html.twig");
    }
}
