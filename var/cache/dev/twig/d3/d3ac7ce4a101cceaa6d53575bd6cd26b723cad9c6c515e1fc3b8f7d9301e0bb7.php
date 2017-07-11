<?php

/* search/details.html.twig */
class __TwigTemplate_9c3a658e63be20c95997dac5c0596501909a4f245ffa040a75fe38361c9cd302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/details.html.twig", 1);
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
        $__internal_de8937f6f4e44d9103dbe2ce66980dcc9fb1952b06d86b7b79e277dfd367f0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8937f6f4e44d9103dbe2ce66980dcc9fb1952b06d86b7b79e277dfd367f0fc->enter($__internal_de8937f6f4e44d9103dbe2ce66980dcc9fb1952b06d86b7b79e277dfd367f0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/details.html.twig"));

        $__internal_fd1a27a24d77156e28af3fd1654f07ccf7810599cc2595295dc43c39b56a8d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1a27a24d77156e28af3fd1654f07ccf7810599cc2595295dc43c39b56a8d48->enter($__internal_fd1a27a24d77156e28af3fd1654f07ccf7810599cc2595295dc43c39b56a8d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8937f6f4e44d9103dbe2ce66980dcc9fb1952b06d86b7b79e277dfd367f0fc->leave($__internal_de8937f6f4e44d9103dbe2ce66980dcc9fb1952b06d86b7b79e277dfd367f0fc_prof);

        
        $__internal_fd1a27a24d77156e28af3fd1654f07ccf7810599cc2595295dc43c39b56a8d48->leave($__internal_fd1a27a24d77156e28af3fd1654f07ccf7810599cc2595295dc43c39b56a8d48_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7991f32d5b6703e1796b4debdc7e26f0be0884be648e66e3f541155e77b41882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7991f32d5b6703e1796b4debdc7e26f0be0884be648e66e3f541155e77b41882->enter($__internal_7991f32d5b6703e1796b4debdc7e26f0be0884be648e66e3f541155e77b41882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd86c22969ff2e818c6e3ec0afcaa8601b4037b2e226c368f4bff1f676f6f550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd86c22969ff2e818c6e3ec0afcaa8601b4037b2e226c368f4bff1f676f6f550->enter($__internal_dd86c22969ff2e818c6e3ec0afcaa8601b4037b2e226c368f4bff1f676f6f550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper\">
    <div id=\"site-wrapper-inner-resultpage\">
";
        // line 5
        $this->displayBlock('body_menu', $context, $blocks);
        // line 8
        $this->displayBlock('body_results', $context, $blocks);
        // line 67
        echo "    </div>
</div>

";
        
        $__internal_dd86c22969ff2e818c6e3ec0afcaa8601b4037b2e226c368f4bff1f676f6f550->leave($__internal_dd86c22969ff2e818c6e3ec0afcaa8601b4037b2e226c368f4bff1f676f6f550_prof);

        
        $__internal_7991f32d5b6703e1796b4debdc7e26f0be0884be648e66e3f541155e77b41882->leave($__internal_7991f32d5b6703e1796b4debdc7e26f0be0884be648e66e3f541155e77b41882_prof);

    }

    // line 5
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_df7b99869f0fe65efbc747acfc8980c646458e96edb9a73ff03f5d933de18199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7b99869f0fe65efbc747acfc8980c646458e96edb9a73ff03f5d933de18199->enter($__internal_df7b99869f0fe65efbc747acfc8980c646458e96edb9a73ff03f5d933de18199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_3fe18b984a4acf41e75eca90c160901a7d0d6ead48ecadb66c1d0f9fd9660f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe18b984a4acf41e75eca90c160901a7d0d6ead48ecadb66c1d0f9fd9660f32->enter($__internal_3fe18b984a4acf41e75eca90c160901a7d0d6ead48ecadb66c1d0f9fd9660f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_3fe18b984a4acf41e75eca90c160901a7d0d6ead48ecadb66c1d0f9fd9660f32->leave($__internal_3fe18b984a4acf41e75eca90c160901a7d0d6ead48ecadb66c1d0f9fd9660f32_prof);

        
        $__internal_df7b99869f0fe65efbc747acfc8980c646458e96edb9a73ff03f5d933de18199->leave($__internal_df7b99869f0fe65efbc747acfc8980c646458e96edb9a73ff03f5d933de18199_prof);

    }

    // line 8
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_8628ef7e5cdfea9b72986684069182545d638c758bf39f423fcd29763f3b878c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8628ef7e5cdfea9b72986684069182545d638c758bf39f423fcd29763f3b878c->enter($__internal_8628ef7e5cdfea9b72986684069182545d638c758bf39f423fcd29763f3b878c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_79c714ea1c203319b350175256980efcb477889bc127dab6bfb0ab1ca9e1ffee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c714ea1c203319b350175256980efcb477889bc127dab6bfb0ab1ca9e1ffee->enter($__internal_79c714ea1c203319b350175256980efcb477889bc127dab6bfb0ab1ca9e1ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        echo "      
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
                 ";
        // line 11
        if ( !(is_string($__internal_73df3f43ff30d9a44429a425fd166231e012c9420434cea0d193cc28e72d31b4 = $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "poster_path", array())) && is_string($__internal_83d747b7d12cafe96082d228f4a92bce9ef8f2c674b024448617e13033f612ca = ".jpg") && ('' === $__internal_83d747b7d12cafe96082d228f4a92bce9ef8f2c674b024448617e13033f612ca || $__internal_83d747b7d12cafe96082d228f4a92bce9ef8f2c674b024448617e13033f612ca === substr($__internal_73df3f43ff30d9a44429a425fd166231e012c9420434cea0d193cc28e72d31b4, -strlen($__internal_83d747b7d12cafe96082d228f4a92bce9ef8f2c674b024448617e13033f612ca))))) {
            // line 12
            echo "                 <p>No image found!</p>
                 ";
        } else {
            // line 14
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["imgpath"]) ? $context["imgpath"] : $this->getContext($context, "imgpath")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "poster_path", array()), "html", null, true);
            echo "\" alt=\"#\">
                 ";
        }
        // line 16
        echo "            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "title", array()), "html", null, true);
        echo "</h3>
                </div>       
                <div class=\"movieDiv-info\">
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "overview", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table class=\"smallDetailsTable\">
                    <tr>
                        <th>Release date</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "release_date", array()), "html", null, true);
        echo "</td>
                            <td></td>
                        <th>Budget</th>
                            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "budget", array()), 2, ".", ","), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Average score</th>
                            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "vote_average", array()), "html", null, true);
        echo "</td>
                            <td></td>
                        <th>Revenue</th>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "revenue", array()), 2, ".", ","), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Total votes</th>
                            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "vote_count", array()), "html", null, true);
        echo "</td>
                            <td></td>
                        <th>Duration</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "runtime", array()), "html", null, true);
        echo "min</td>
                    </tr>
                    <tr>
                        <th>Popularity rating</th>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "popularity", array()), "html", null, true);
        echo "</td>
                            <td></td>      
                    </tr>
                     </table>  
                    <table class=\"tableGenre\">
                    <tr>
                        <th class=\"cellGenre\">Genres</th>
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "genres", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 57
            echo "                            <td class=\"cellGenre\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
            echo "</td>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tr>
                    
                </table>     
                </div>
            </div>
       </div>
      
";
        
        $__internal_79c714ea1c203319b350175256980efcb477889bc127dab6bfb0ab1ca9e1ffee->leave($__internal_79c714ea1c203319b350175256980efcb477889bc127dab6bfb0ab1ca9e1ffee_prof);

        
        $__internal_8628ef7e5cdfea9b72986684069182545d638c758bf39f423fcd29763f3b878c->leave($__internal_8628ef7e5cdfea9b72986684069182545d638c758bf39f423fcd29763f3b878c_prof);

    }

    public function getTemplateName()
    {
        return "search/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 59,  193 => 57,  189 => 56,  179 => 49,  172 => 45,  166 => 42,  159 => 38,  153 => 35,  146 => 31,  140 => 28,  131 => 22,  125 => 19,  120 => 16,  113 => 14,  109 => 12,  107 => 11,  94 => 8,  81 => 6,  72 => 5,  59 => 67,  57 => 8,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
                 {% if not (movie.poster_path ends with '.jpg') %}
                 <p>No image found!</p>
                 {% else %}
            <img src=\"{{imgpath}}{{movie.poster_path}}\" alt=\"#\">
                 {% endif %}
            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>{{ movie.title }}</h3>
                </div>       
                <div class=\"movieDiv-info\">
                    <p>{{ movie.overview}}</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table class=\"smallDetailsTable\">
                    <tr>
                        <th>Release date</th>
                            <td>{{movie.release_date}}</td>
                            <td></td>
                        <th>Budget</th>
                            <td>{{movie.budget |number_format(2, '.', ',')}}</td>
                    </tr>
                    <tr>
                        <th>Average score</th>
                            <td>{{movie.vote_average}}</td>
                            <td></td>
                        <th>Revenue</th>
                            <td>{{movie.revenue |number_format(2, '.', ',')}}</td>
                    </tr>
                    <tr>
                        <th>Total votes</th>
                            <td>{{movie.vote_count}}</td>
                            <td></td>
                        <th>Duration</th>
                            <td>{{movie.runtime}}min</td>
                    </tr>
                    <tr>
                        <th>Popularity rating</th>
                            <td>{{movie.popularity}}</td>
                            <td></td>      
                    </tr>
                     </table>  
                    <table class=\"tableGenre\">
                    <tr>
                        <th class=\"cellGenre\">Genres</th>
                        {% for genre in movie.genres %}
                            <td class=\"cellGenre\">{{genre.name}}</td>
                        {% endfor %}
                    </tr>
                    
                </table>     
                </div>
            </div>
       </div>
      
{% endblock %}{# body_results #}
    </div>
</div>

{% endblock %}{# body #}", "search/details.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\details.html.twig");
    }
}
