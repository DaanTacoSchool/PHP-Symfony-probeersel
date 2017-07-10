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
        $__internal_58520c0558cca188c4a3978b4d48239593bff0ad4f3c8c1b88e9c9c6d161a7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58520c0558cca188c4a3978b4d48239593bff0ad4f3c8c1b88e9c9c6d161a7b5->enter($__internal_58520c0558cca188c4a3978b4d48239593bff0ad4f3c8c1b88e9c9c6d161a7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $__internal_8ff19f23767998d0ba9e35d4aed50712010c6d8f1581dcc61c2021f75a664096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff19f23767998d0ba9e35d4aed50712010c6d8f1581dcc61c2021f75a664096->enter($__internal_8ff19f23767998d0ba9e35d4aed50712010c6d8f1581dcc61c2021f75a664096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58520c0558cca188c4a3978b4d48239593bff0ad4f3c8c1b88e9c9c6d161a7b5->leave($__internal_58520c0558cca188c4a3978b4d48239593bff0ad4f3c8c1b88e9c9c6d161a7b5_prof);

        
        $__internal_8ff19f23767998d0ba9e35d4aed50712010c6d8f1581dcc61c2021f75a664096->leave($__internal_8ff19f23767998d0ba9e35d4aed50712010c6d8f1581dcc61c2021f75a664096_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb80a08f0794cd96008402292e4fac226b0d9f9e225f2496257b81f020d0fc7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb80a08f0794cd96008402292e4fac226b0d9f9e225f2496257b81f020d0fc7e->enter($__internal_eb80a08f0794cd96008402292e4fac226b0d9f9e225f2496257b81f020d0fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79a77d900b79d706c412aca9a7620dab58d7b91ffacc4e2c2ae4dbb4cb6e0f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a77d900b79d706c412aca9a7620dab58d7b91ffacc4e2c2ae4dbb4cb6e0f7a->enter($__internal_79a77d900b79d706c412aca9a7620dab58d7b91ffacc4e2c2ae4dbb4cb6e0f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper\">
    <div id=\"site-wrapper-inner-resultpage\">

";
        // line 6
        $this->displayBlock('body_menu', $context, $blocks);
        // line 9
        $this->displayBlock('body_results', $context, $blocks);
        // line 42
        echo "        </div>
    </div>

";
        
        $__internal_79a77d900b79d706c412aca9a7620dab58d7b91ffacc4e2c2ae4dbb4cb6e0f7a->leave($__internal_79a77d900b79d706c412aca9a7620dab58d7b91ffacc4e2c2ae4dbb4cb6e0f7a_prof);

        
        $__internal_eb80a08f0794cd96008402292e4fac226b0d9f9e225f2496257b81f020d0fc7e->leave($__internal_eb80a08f0794cd96008402292e4fac226b0d9f9e225f2496257b81f020d0fc7e_prof);

    }

    // line 6
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_56db0dd9ff882c199c4eeba12a02a5c1c6c8a8642549c78dc8eb0e67dd46a751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56db0dd9ff882c199c4eeba12a02a5c1c6c8a8642549c78dc8eb0e67dd46a751->enter($__internal_56db0dd9ff882c199c4eeba12a02a5c1c6c8a8642549c78dc8eb0e67dd46a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_7fcd5a3667a26679cbe1da02fe70072e3fe6919e1aebefcb36752d9ed4315c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcd5a3667a26679cbe1da02fe70072e3fe6919e1aebefcb36752d9ed4315c95->enter($__internal_7fcd5a3667a26679cbe1da02fe70072e3fe6919e1aebefcb36752d9ed4315c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 7
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_7fcd5a3667a26679cbe1da02fe70072e3fe6919e1aebefcb36752d9ed4315c95->leave($__internal_7fcd5a3667a26679cbe1da02fe70072e3fe6919e1aebefcb36752d9ed4315c95_prof);

        
        $__internal_56db0dd9ff882c199c4eeba12a02a5c1c6c8a8642549c78dc8eb0e67dd46a751->leave($__internal_56db0dd9ff882c199c4eeba12a02a5c1c6c8a8642549c78dc8eb0e67dd46a751_prof);

    }

    // line 9
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_60fb9a70d9001b3c5e94dd58e3116f7bec23435e7e3ab48a48ab5175b2c3ee5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fb9a70d9001b3c5e94dd58e3116f7bec23435e7e3ab48a48ab5175b2c3ee5b->enter($__internal_60fb9a70d9001b3c5e94dd58e3116f7bec23435e7e3ab48a48ab5175b2c3ee5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_2bb660674e05c8be64bd6168f211f78ee621a5bb46d51c5db32d2c9a05741567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb660674e05c8be64bd6168f211f78ee621a5bb46d51c5db32d2c9a05741567->enter($__internal_2bb660674e05c8be64bd6168f211f78ee621a5bb46d51c5db32d2c9a05741567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 10
        echo "
 ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 12
            echo "       
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
            <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "PosterPath", array(), "method"), "html", null, true);
            echo "\" alt=\"#\">
            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Title", array(), "method"), "html", null, true);
            echo "</h3>
                </div>
           
                <div class=\"movieDiv-info\">
                    <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Overview", array(), "method"), "html", null, true);
            echo "</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table>
                    <tr><th>Release date</th><td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "ReleaseDate", array(), "method"), "html", null, true);
            echo "</td></tr>
                    <tr><th>Adult rated</th><td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "IsAdult", array(), "method"), "html", null, true);
            echo "</td></tr>
                    <tr><th>Popularity</th><td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Popularity", array(), "method"), "html", null, true);
            echo "</td></tr>
                </table>     
                </div>
            </div>
       </div>
       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "   <div class=\"paginationDiv\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "        <a href=\"/search/searchpage/";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "\" id=\"activeLink\" class=\"";
            if (((isset($context["currentpage"]) ? $context["currentpage"] : $this->getContext($context, "currentpage")) == $context["page"])) {
                echo "activeLink";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a> |
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
";
        
        $__internal_2bb660674e05c8be64bd6168f211f78ee621a5bb46d51c5db32d2c9a05741567->leave($__internal_2bb660674e05c8be64bd6168f211f78ee621a5bb46d51c5db32d2c9a05741567_prof);

        
        $__internal_60fb9a70d9001b3c5e94dd58e3116f7bec23435e7e3ab48a48ab5175b2c3ee5b->leave($__internal_60fb9a70d9001b3c5e94dd58e3116f7bec23435e7e3ab48a48ab5175b2c3ee5b_prof);

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
        return array (  179 => 40,  164 => 38,  160 => 37,  157 => 36,  144 => 29,  140 => 28,  136 => 27,  129 => 23,  122 => 19,  115 => 15,  110 => 12,  106 => 11,  103 => 10,  94 => 9,  82 => 7,  73 => 6,  60 => 42,  58 => 9,  56 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
            <img src=\"{{movie.PosterPath()}}\" alt=\"#\">
            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>{{ movie.Title() }}</h3>
                </div>
           
                <div class=\"movieDiv-info\">
                    <p>{{ movie.Overview()}}</p>
                </div>
                <div class=\"movieDiv-right-details\">
                <table>
                    <tr><th>Release date</th><td>{{movie.ReleaseDate()}}</td></tr>
                    <tr><th>Adult rated</th><td>{{movie.IsAdult()}}</td></tr>
                    <tr><th>Popularity</th><td>{{movie.Popularity()}}</td></tr>
                </table>     
                </div>
            </div>
       </div>
       
    {% endfor %}
   <div class=\"paginationDiv\">
    {% for page in pagination.pages %}
        <a href=\"/search/searchpage/{{page}}\" id=\"activeLink\" class=\"{% if currentpage == page %}activeLink{% endif %}\">{{ page }}</a> |
    {% endfor %}
</div>
{% endblock %}
        </div>
    </div>

{% endblock %}", "search/searchresults.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\searchresults.html.twig");
    }
}
