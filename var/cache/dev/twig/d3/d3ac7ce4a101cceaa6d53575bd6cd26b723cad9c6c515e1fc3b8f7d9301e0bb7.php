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
        $__internal_ca2e2728dc3955f737b520c3c53ba6746a8add91d91baa822cb82aa5ed2fc41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2e2728dc3955f737b520c3c53ba6746a8add91d91baa822cb82aa5ed2fc41e->enter($__internal_ca2e2728dc3955f737b520c3c53ba6746a8add91d91baa822cb82aa5ed2fc41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/details.html.twig"));

        $__internal_8737efc872c2e7dea4348f4d4cd8b48604ddf38e737dd90277cb5c4f1e798981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8737efc872c2e7dea4348f4d4cd8b48604ddf38e737dd90277cb5c4f1e798981->enter($__internal_8737efc872c2e7dea4348f4d4cd8b48604ddf38e737dd90277cb5c4f1e798981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2e2728dc3955f737b520c3c53ba6746a8add91d91baa822cb82aa5ed2fc41e->leave($__internal_ca2e2728dc3955f737b520c3c53ba6746a8add91d91baa822cb82aa5ed2fc41e_prof);

        
        $__internal_8737efc872c2e7dea4348f4d4cd8b48604ddf38e737dd90277cb5c4f1e798981->leave($__internal_8737efc872c2e7dea4348f4d4cd8b48604ddf38e737dd90277cb5c4f1e798981_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf0070d144559ac60d26e8baa98defa90fd403260f5b56974a35eb599612a497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0070d144559ac60d26e8baa98defa90fd403260f5b56974a35eb599612a497->enter($__internal_bf0070d144559ac60d26e8baa98defa90fd403260f5b56974a35eb599612a497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f167ce438b8ea0403f7463229e93ed36dd6a447cc1e1accaca02689590401bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f167ce438b8ea0403f7463229e93ed36dd6a447cc1e1accaca02689590401bb->enter($__internal_3f167ce438b8ea0403f7463229e93ed36dd6a447cc1e1accaca02689590401bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["backdroppath"]) ? $context["backdroppath"] : $this->getContext($context, "backdroppath")), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "BackdropPath", array(), "method"), "html", null, true);
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
        
        $__internal_3f167ce438b8ea0403f7463229e93ed36dd6a447cc1e1accaca02689590401bb->leave($__internal_3f167ce438b8ea0403f7463229e93ed36dd6a447cc1e1accaca02689590401bb_prof);

        
        $__internal_bf0070d144559ac60d26e8baa98defa90fd403260f5b56974a35eb599612a497->leave($__internal_bf0070d144559ac60d26e8baa98defa90fd403260f5b56974a35eb599612a497_prof);

    }

    // line 5
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_a65898514644674fdfa7ed2b0fd702074ea8ee5b9885848b26857716e90a8817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65898514644674fdfa7ed2b0fd702074ea8ee5b9885848b26857716e90a8817->enter($__internal_a65898514644674fdfa7ed2b0fd702074ea8ee5b9885848b26857716e90a8817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_c00e224eca7398b52708ff38beaea07f81927023f6549ae2a29c811c427512e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00e224eca7398b52708ff38beaea07f81927023f6549ae2a29c811c427512e5->enter($__internal_c00e224eca7398b52708ff38beaea07f81927023f6549ae2a29c811c427512e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_c00e224eca7398b52708ff38beaea07f81927023f6549ae2a29c811c427512e5->leave($__internal_c00e224eca7398b52708ff38beaea07f81927023f6549ae2a29c811c427512e5_prof);

        
        $__internal_a65898514644674fdfa7ed2b0fd702074ea8ee5b9885848b26857716e90a8817->leave($__internal_a65898514644674fdfa7ed2b0fd702074ea8ee5b9885848b26857716e90a8817_prof);

    }

    // line 8
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_f5d0b751f44d37e1c2c0bc1b9bc8eeec7b6a23b258d6cac1a4cf6356068a3c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d0b751f44d37e1c2c0bc1b9bc8eeec7b6a23b258d6cac1a4cf6356068a3c3a->enter($__internal_f5d0b751f44d37e1c2c0bc1b9bc8eeec7b6a23b258d6cac1a4cf6356068a3c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_d0a8f7fa8830611e98b381254db5ef4732fe9b258255b445d8eef9f00eaeb2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a8f7fa8830611e98b381254db5ef4732fe9b258255b445d8eef9f00eaeb2f1->enter($__internal_d0a8f7fa8830611e98b381254db5ef4732fe9b258255b445d8eef9f00eaeb2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        echo "      
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
                 ";
        // line 11
        if ( !(is_string($__internal_da495cc2ff7591946c6dede0fbffc03ab768c2996af865c6377bbf84cf3b1f42 = $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "PosterPath", array(), "method")) && is_string($__internal_fedd3967729a4f02e95b02245cbc5140c2a12dabc68a43338a61b43a39e3fa85 = ".jpg") && ('' === $__internal_fedd3967729a4f02e95b02245cbc5140c2a12dabc68a43338a61b43a39e3fa85 || $__internal_fedd3967729a4f02e95b02245cbc5140c2a12dabc68a43338a61b43a39e3fa85 === substr($__internal_da495cc2ff7591946c6dede0fbffc03ab768c2996af865c6377bbf84cf3b1f42, -strlen($__internal_fedd3967729a4f02e95b02245cbc5140c2a12dabc68a43338a61b43a39e3fa85))))) {
            // line 12
            echo "                 <p>No image found!</p>
                 ";
        } else {
            // line 14
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "PosterPath", array(), "method"), "html", null, true);
            echo "\" alt=\"#\">
                 ";
        }
        // line 16
        echo "            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "Title", array(), "method"), "html", null, true);
        echo "</h3>
                </div>       
                <div class=\"movieDiv-info\">
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "Overview", array(), "method"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table class=\"smallDetailsTable\">
                    <tr>
                        <th>Release date</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "ReleaseDate", array(), "method"), "html", null, true);
        echo "</td>
                            <td></td>
                        <th>Budget</th>
                            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "Budget", array(), "method"), 2, ".", ","), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Average score</th>
                            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "VoteAverage", array(), "method"), "html", null, true);
        echo "</td>
                            <td></td>
                        <th>Revenue</th>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "Revenue", array(), "method"), 2, ".", ","), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Total votes</th>
                            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "VoteCount", array(), "method"), "html", null, true);
        echo "</td>
                            <td></td>
                        <th>Duration</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "Runtime", array(), "method"), "html", null, true);
        echo "min</td>
                    </tr>
                    <tr>
                        <th>Popularity rating</th>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "Popularity", array(), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "GenreIds", array(), "method"));
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
        
        $__internal_d0a8f7fa8830611e98b381254db5ef4732fe9b258255b445d8eef9f00eaeb2f1->leave($__internal_d0a8f7fa8830611e98b381254db5ef4732fe9b258255b445d8eef9f00eaeb2f1_prof);

        
        $__internal_f5d0b751f44d37e1c2c0bc1b9bc8eeec7b6a23b258d6cac1a4cf6356068a3c3a->leave($__internal_f5d0b751f44d37e1c2c0bc1b9bc8eeec7b6a23b258d6cac1a4cf6356068a3c3a_prof);

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
        return array (  204 => 59,  195 => 57,  191 => 56,  181 => 49,  174 => 45,  168 => 42,  161 => 38,  155 => 35,  148 => 31,  142 => 28,  133 => 22,  127 => 19,  122 => 16,  116 => 14,  112 => 12,  110 => 11,  97 => 8,  84 => 6,  75 => 5,  62 => 67,  60 => 8,  58 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
<div class=\"site-wrapper\" style=\"background-image:url({{backdroppath}}{{movie.BackdropPath()}}); background-size: cover;\">
    <div id=\"site-wrapper-inner-resultpage\" >
{% block body_menu %}
    {{parent()}}
{% endblock %}
{% block body_results %}      
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
                    <tr>
                        <th>Release date</th>
                            <td>{{movie.ReleaseDate()}}</td>
                            <td></td>
                        <th>Budget</th>
                            <td>{{movie.Budget() |number_format(2, '.', ',')}}</td>
                    </tr>
                    <tr>
                        <th>Average score</th>
                            <td>{{movie.VoteAverage()}}</td>
                            <td></td>
                        <th>Revenue</th>
                            <td>{{movie.Revenue() |number_format(2, '.', ',')}}</td>
                    </tr>
                    <tr>
                        <th>Total votes</th>
                            <td>{{movie.VoteCount()}}</td>
                            <td></td>
                        <th>Duration</th>
                            <td>{{movie.Runtime()}}min</td>
                    </tr>
                    <tr>
                        <th>Popularity rating</th>
                            <td>{{movie.Popularity()}}</td>
                            <td></td>      
                    </tr>
                     </table>  
                    <table class=\"tableGenre\">
                    <tr>
                        <th class=\"cellGenre\">Genres</th>
                        {% for genre in movie.GenreIds() %}
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
