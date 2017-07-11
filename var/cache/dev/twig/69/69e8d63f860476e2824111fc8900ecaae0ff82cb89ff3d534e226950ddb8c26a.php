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
        $__internal_359016e2c599a121eafb7486f4b7f3194d423487e8a9bbfaf242aa7609355795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359016e2c599a121eafb7486f4b7f3194d423487e8a9bbfaf242aa7609355795->enter($__internal_359016e2c599a121eafb7486f4b7f3194d423487e8a9bbfaf242aa7609355795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $__internal_0d2e0f65dc5accb725e1d11b2605b4ff601cba65a51d8535e383d2aa14006340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2e0f65dc5accb725e1d11b2605b4ff601cba65a51d8535e383d2aa14006340->enter($__internal_0d2e0f65dc5accb725e1d11b2605b4ff601cba65a51d8535e383d2aa14006340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359016e2c599a121eafb7486f4b7f3194d423487e8a9bbfaf242aa7609355795->leave($__internal_359016e2c599a121eafb7486f4b7f3194d423487e8a9bbfaf242aa7609355795_prof);

        
        $__internal_0d2e0f65dc5accb725e1d11b2605b4ff601cba65a51d8535e383d2aa14006340->leave($__internal_0d2e0f65dc5accb725e1d11b2605b4ff601cba65a51d8535e383d2aa14006340_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8da9cb897d039aa8f3e5091e0bd776fac51cef1b80eb5d7ea4ecc61823657b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da9cb897d039aa8f3e5091e0bd776fac51cef1b80eb5d7ea4ecc61823657b05->enter($__internal_8da9cb897d039aa8f3e5091e0bd776fac51cef1b80eb5d7ea4ecc61823657b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7e2d98e6c82e82760106d8516ffd98b4844298205bc3440ea1dc9e44e63a5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e2d98e6c82e82760106d8516ffd98b4844298205bc3440ea1dc9e44e63a5bc->enter($__internal_a7e2d98e6c82e82760106d8516ffd98b4844298205bc3440ea1dc9e44e63a5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 60
        echo "    </div>
</div>

";
        
        $__internal_a7e2d98e6c82e82760106d8516ffd98b4844298205bc3440ea1dc9e44e63a5bc->leave($__internal_a7e2d98e6c82e82760106d8516ffd98b4844298205bc3440ea1dc9e44e63a5bc_prof);

        
        $__internal_8da9cb897d039aa8f3e5091e0bd776fac51cef1b80eb5d7ea4ecc61823657b05->leave($__internal_8da9cb897d039aa8f3e5091e0bd776fac51cef1b80eb5d7ea4ecc61823657b05_prof);

    }

    // line 6
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_30ed240abe21b8488579b64a049f985ce99bc52079ae173077967b8020824420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ed240abe21b8488579b64a049f985ce99bc52079ae173077967b8020824420->enter($__internal_30ed240abe21b8488579b64a049f985ce99bc52079ae173077967b8020824420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_4d6bf9bf873c6c07176ca764cf60fef84cd18b58c3fcfd4eca98df0cb21fddb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6bf9bf873c6c07176ca764cf60fef84cd18b58c3fcfd4eca98df0cb21fddb4->enter($__internal_4d6bf9bf873c6c07176ca764cf60fef84cd18b58c3fcfd4eca98df0cb21fddb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 7
        echo "    ";
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_4d6bf9bf873c6c07176ca764cf60fef84cd18b58c3fcfd4eca98df0cb21fddb4->leave($__internal_4d6bf9bf873c6c07176ca764cf60fef84cd18b58c3fcfd4eca98df0cb21fddb4_prof);

        
        $__internal_30ed240abe21b8488579b64a049f985ce99bc52079ae173077967b8020824420->leave($__internal_30ed240abe21b8488579b64a049f985ce99bc52079ae173077967b8020824420_prof);

    }

    // line 9
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_036276ab53d6f31e404fca0783adb6779687bc56a1f5ffea5e40771cb3cdd0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036276ab53d6f31e404fca0783adb6779687bc56a1f5ffea5e40771cb3cdd0f9->enter($__internal_036276ab53d6f31e404fca0783adb6779687bc56a1f5ffea5e40771cb3cdd0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_50a53be6a4a87f60f1a50074d6d8f2cd7eb61f6f779360b8f0c2ef8c5ad30486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a53be6a4a87f60f1a50074d6d8f2cd7eb61f6f779360b8f0c2ef8c5ad30486->enter($__internal_50a53be6a4a87f60f1a50074d6d8f2cd7eb61f6f779360b8f0c2ef8c5ad30486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 10
        echo "        <div class=\"paginationDiv-top\">
       ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 12
            echo "       ";
            if (($context["page"] <= (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")))) {
                // line 13
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
            // line 15
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "       of <a href=\"/search/searchpage/";
        echo twig_escape_filter($this->env, (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "html", null, true);
        echo "\" class=\"lastPageLink\">";
        echo twig_escape_filter($this->env, (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "html", null, true);
        echo "</a>   
    </div>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 19
            echo "       
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
                 ";
            // line 22
            if ( !(is_string($__internal_9634b79dd857a6c18544387eafdb4fa111bab299af6ee54de8e13ff6e9c58a21 = $this->getAttribute($context["movie"], "PosterPath", array(), "method")) && is_string($__internal_b490d92c8608e792c8f85d3d41657253a1c6480adfef2ed016bd1f947cd632c7 = ".jpg") && ('' === $__internal_b490d92c8608e792c8f85d3d41657253a1c6480adfef2ed016bd1f947cd632c7 || $__internal_b490d92c8608e792c8f85d3d41657253a1c6480adfef2ed016bd1f947cd632c7 === substr($__internal_9634b79dd857a6c18544387eafdb4fa111bab299af6ee54de8e13ff6e9c58a21, -strlen($__internal_b490d92c8608e792c8f85d3d41657253a1c6480adfef2ed016bd1f947cd632c7))))) {
                // line 23
                echo "                 <p>No image found!</p>
                 ";
            } else {
                // line 25
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "PosterPath", array(), "method"), "html", null, true);
                echo "\" alt=\"#\">
                 ";
            }
            // line 27
            echo "            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Title", array(), "method"), "html", null, true);
            echo "</h3>
                </div>       
                <div class=\"movieDiv-info\">
                    <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Overview", array(), "method"), "html", null, true);
            echo "</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table class=\"smallDetailsTable\">
                    <tr><th>Release date</th><td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "ReleaseDate", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Average score</th><td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "VoteAverage", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Total votes</th><td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "VoteCount", array(), "method"), "html", null, true);
            echo "</td><td></td></tr>
                    <tr><th>Popularity rating</th><td>";
            // line 40
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
        // line 48
        echo "       <p>";
        echo twig_escape_filter($this->env, (isset($context["totalitems"]) ? $context["totalitems"] : $this->getContext($context, "totalitems")), "html", null, true);
        echo " Movies found!</p> 
        ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "html", null, true);
        echo "
        
   <div class=\"paginationDiv\">
       ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 53
            echo "       ";
            if (($context["page"] <= (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")))) {
                // line 54
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
            // line 56
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "       of <a href=\"/search/searchpage/";
        echo twig_escape_filter($this->env, (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "html", null, true);
        echo "\" class=\"lastPageLink\">";
        echo twig_escape_filter($this->env, (isset($context["totalpages"]) ? $context["totalpages"] : $this->getContext($context, "totalpages")), "html", null, true);
        echo "</a>   
    </div>
";
        
        $__internal_50a53be6a4a87f60f1a50074d6d8f2cd7eb61f6f779360b8f0c2ef8c5ad30486->leave($__internal_50a53be6a4a87f60f1a50074d6d8f2cd7eb61f6f779360b8f0c2ef8c5ad30486_prof);

        
        $__internal_036276ab53d6f31e404fca0783adb6779687bc56a1f5ffea5e40771cb3cdd0f9->leave($__internal_036276ab53d6f31e404fca0783adb6779687bc56a1f5ffea5e40771cb3cdd0f9_prof);

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
        return array (  245 => 57,  239 => 56,  227 => 54,  224 => 53,  220 => 52,  214 => 49,  209 => 48,  193 => 40,  189 => 39,  185 => 38,  181 => 37,  174 => 33,  168 => 30,  163 => 27,  157 => 25,  153 => 23,  151 => 22,  146 => 19,  142 => 18,  134 => 16,  128 => 15,  116 => 13,  113 => 12,  109 => 11,  106 => 10,  97 => 9,  84 => 7,  75 => 6,  62 => 60,  60 => 9,  58 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
       {% for page in pagination.pages %}
       {% if page <= totalpages %}
           <a href=\"/search/searchpage/{{page}}\"  class=\"{% if currentpage == page %}activeLink{% endif %}\">{{ page }}</a> |
       {% endif %}
       {% endfor %}
       of <a href=\"/search/searchpage/{{totalpages}}\" class=\"lastPageLink\">{{ totalpages }}</a>   
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
        {{test}}
        
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
