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
        $__internal_527524bf374acff3a38bf801f448946b4251d438c2588b7b5dc21c636ea090a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527524bf374acff3a38bf801f448946b4251d438c2588b7b5dc21c636ea090a8->enter($__internal_527524bf374acff3a38bf801f448946b4251d438c2588b7b5dc21c636ea090a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/details.html.twig"));

        $__internal_6e537a01e817e01cafc160564f8700089aeb3e18766861fc3032504bdffb5b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e537a01e817e01cafc160564f8700089aeb3e18766861fc3032504bdffb5b17->enter($__internal_6e537a01e817e01cafc160564f8700089aeb3e18766861fc3032504bdffb5b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527524bf374acff3a38bf801f448946b4251d438c2588b7b5dc21c636ea090a8->leave($__internal_527524bf374acff3a38bf801f448946b4251d438c2588b7b5dc21c636ea090a8_prof);

        
        $__internal_6e537a01e817e01cafc160564f8700089aeb3e18766861fc3032504bdffb5b17->leave($__internal_6e537a01e817e01cafc160564f8700089aeb3e18766861fc3032504bdffb5b17_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1096d6cb016a4c1dae41192671ab756ba5ee74476c2ac8e68a6518307510159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1096d6cb016a4c1dae41192671ab756ba5ee74476c2ac8e68a6518307510159->enter($__internal_c1096d6cb016a4c1dae41192671ab756ba5ee74476c2ac8e68a6518307510159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_490f1dc2591d46f29dae7e9578843706065f22e8c4c939aad87747f602f11e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490f1dc2591d46f29dae7e9578843706065f22e8c4c939aad87747f602f11e0f->enter($__internal_490f1dc2591d46f29dae7e9578843706065f22e8c4c939aad87747f602f11e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["backdroppath"]) ? $context["backdroppath"] : $this->getContext($context, "backdroppath")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "backdrop_path", array()), "html", null, true);
        echo "); background-size: cover;\">
    <div id=\"site-wrapper-inner-resultpage\" >
";
        // line 5
        $this->displayBlock('body_menu', $context, $blocks);
        // line 8
        $this->displayBlock('body_results', $context, $blocks);
        // line 67
        echo "    </div>
</div>

";
        
        $__internal_490f1dc2591d46f29dae7e9578843706065f22e8c4c939aad87747f602f11e0f->leave($__internal_490f1dc2591d46f29dae7e9578843706065f22e8c4c939aad87747f602f11e0f_prof);

        
        $__internal_c1096d6cb016a4c1dae41192671ab756ba5ee74476c2ac8e68a6518307510159->leave($__internal_c1096d6cb016a4c1dae41192671ab756ba5ee74476c2ac8e68a6518307510159_prof);

    }

    // line 5
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_07f1104c87b04e648650bc82fb8f6ed9489a26a710421e96a467816279c32e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f1104c87b04e648650bc82fb8f6ed9489a26a710421e96a467816279c32e1e->enter($__internal_07f1104c87b04e648650bc82fb8f6ed9489a26a710421e96a467816279c32e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_fdddf3ccbd9fc6b2c8ee650feb3642de72c8f9b2073e27573878e3b947b289c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdddf3ccbd9fc6b2c8ee650feb3642de72c8f9b2073e27573878e3b947b289c7->enter($__internal_fdddf3ccbd9fc6b2c8ee650feb3642de72c8f9b2073e27573878e3b947b289c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_fdddf3ccbd9fc6b2c8ee650feb3642de72c8f9b2073e27573878e3b947b289c7->leave($__internal_fdddf3ccbd9fc6b2c8ee650feb3642de72c8f9b2073e27573878e3b947b289c7_prof);

        
        $__internal_07f1104c87b04e648650bc82fb8f6ed9489a26a710421e96a467816279c32e1e->leave($__internal_07f1104c87b04e648650bc82fb8f6ed9489a26a710421e96a467816279c32e1e_prof);

    }

    // line 8
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_d39662bdbdf8205a4b24a5e5a44dc2f9495014ab563f5b15d9be1c61c3b5537a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39662bdbdf8205a4b24a5e5a44dc2f9495014ab563f5b15d9be1c61c3b5537a->enter($__internal_d39662bdbdf8205a4b24a5e5a44dc2f9495014ab563f5b15d9be1c61c3b5537a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_9d641eb15e3b71e4d7d49247015d2fc5d1fdfe6a18f35de0ec9174213d30106b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d641eb15e3b71e4d7d49247015d2fc5d1fdfe6a18f35de0ec9174213d30106b->enter($__internal_9d641eb15e3b71e4d7d49247015d2fc5d1fdfe6a18f35de0ec9174213d30106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        echo "      
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
                 ";
        // line 11
        if ( !(is_string($__internal_067afff5220b8ef46de4ff453df27e35cb2cb328c14d027cb5dde1892d5852d9 = $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "poster_path", array())) && is_string($__internal_6ca17233205ab94830edaf1abad04c5f568fc60ff54c24ac45fd897bd45ac846 = ".jpg") && ('' === $__internal_6ca17233205ab94830edaf1abad04c5f568fc60ff54c24ac45fd897bd45ac846 || $__internal_6ca17233205ab94830edaf1abad04c5f568fc60ff54c24ac45fd897bd45ac846 === substr($__internal_067afff5220b8ef46de4ff453df27e35cb2cb328c14d027cb5dde1892d5852d9, -strlen($__internal_6ca17233205ab94830edaf1abad04c5f568fc60ff54c24ac45fd897bd45ac846))))) {
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
        
        $__internal_9d641eb15e3b71e4d7d49247015d2fc5d1fdfe6a18f35de0ec9174213d30106b->leave($__internal_9d641eb15e3b71e4d7d49247015d2fc5d1fdfe6a18f35de0ec9174213d30106b_prof);

        
        $__internal_d39662bdbdf8205a4b24a5e5a44dc2f9495014ab563f5b15d9be1c61c3b5537a->leave($__internal_d39662bdbdf8205a4b24a5e5a44dc2f9495014ab563f5b15d9be1c61c3b5537a_prof);

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
        return array (  205 => 59,  196 => 57,  192 => 56,  182 => 49,  175 => 45,  169 => 42,  162 => 38,  156 => 35,  149 => 31,  143 => 28,  134 => 22,  128 => 19,  123 => 16,  116 => 14,  112 => 12,  110 => 11,  97 => 8,  84 => 6,  75 => 5,  62 => 67,  60 => 8,  58 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
<div class=\"site-wrapper\" style=\"background-image:url({{backdroppath}}{{movie.backdrop_path}}); background-size: cover;\">
    <div id=\"site-wrapper-inner-resultpage\" >
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
