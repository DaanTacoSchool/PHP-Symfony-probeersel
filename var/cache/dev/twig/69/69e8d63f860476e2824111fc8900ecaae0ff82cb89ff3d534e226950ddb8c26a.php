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
        $__internal_f4247d84629b37be6e8b641d2fdccfce2928de8a96a5b6cfaa3389091dbd115f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4247d84629b37be6e8b641d2fdccfce2928de8a96a5b6cfaa3389091dbd115f->enter($__internal_f4247d84629b37be6e8b641d2fdccfce2928de8a96a5b6cfaa3389091dbd115f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $__internal_002259283d82274a2a0ab061436a5c88d96fea58ab12202aacf825f951a87e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002259283d82274a2a0ab061436a5c88d96fea58ab12202aacf825f951a87e2c->enter($__internal_002259283d82274a2a0ab061436a5c88d96fea58ab12202aacf825f951a87e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4247d84629b37be6e8b641d2fdccfce2928de8a96a5b6cfaa3389091dbd115f->leave($__internal_f4247d84629b37be6e8b641d2fdccfce2928de8a96a5b6cfaa3389091dbd115f_prof);

        
        $__internal_002259283d82274a2a0ab061436a5c88d96fea58ab12202aacf825f951a87e2c->leave($__internal_002259283d82274a2a0ab061436a5c88d96fea58ab12202aacf825f951a87e2c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_de2b1d7aed6f84efb0c41191de66be98be2d205302b6fa87829e6f53e2c0858e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2b1d7aed6f84efb0c41191de66be98be2d205302b6fa87829e6f53e2c0858e->enter($__internal_de2b1d7aed6f84efb0c41191de66be98be2d205302b6fa87829e6f53e2c0858e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c17ee294bc99d848375c57c8e4c8a0562effeecc25a1feb2c5c449b68258bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c17ee294bc99d848375c57c8e4c8a0562effeecc25a1feb2c5c449b68258bd9->enter($__internal_7c17ee294bc99d848375c57c8e4c8a0562effeecc25a1feb2c5c449b68258bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c17ee294bc99d848375c57c8e4c8a0562effeecc25a1feb2c5c449b68258bd9->leave($__internal_7c17ee294bc99d848375c57c8e4c8a0562effeecc25a1feb2c5c449b68258bd9_prof);

        
        $__internal_de2b1d7aed6f84efb0c41191de66be98be2d205302b6fa87829e6f53e2c0858e->leave($__internal_de2b1d7aed6f84efb0c41191de66be98be2d205302b6fa87829e6f53e2c0858e_prof);

    }

    // line 6
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_70f42b6066e4af9752d78b4d9aedece267bdf3f21ae2bf613f5fc743d4fa269a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f42b6066e4af9752d78b4d9aedece267bdf3f21ae2bf613f5fc743d4fa269a->enter($__internal_70f42b6066e4af9752d78b4d9aedece267bdf3f21ae2bf613f5fc743d4fa269a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_f7ab6ff97b678d74109a5facab743733624be389e8dcb42412a9d47d7651535e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ab6ff97b678d74109a5facab743733624be389e8dcb42412a9d47d7651535e->enter($__internal_f7ab6ff97b678d74109a5facab743733624be389e8dcb42412a9d47d7651535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 7
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_f7ab6ff97b678d74109a5facab743733624be389e8dcb42412a9d47d7651535e->leave($__internal_f7ab6ff97b678d74109a5facab743733624be389e8dcb42412a9d47d7651535e_prof);

        
        $__internal_70f42b6066e4af9752d78b4d9aedece267bdf3f21ae2bf613f5fc743d4fa269a->leave($__internal_70f42b6066e4af9752d78b4d9aedece267bdf3f21ae2bf613f5fc743d4fa269a_prof);

    }

    // line 9
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_73a873cc5d048b59937cede75953abce7ca9119f0d2439a831a6f8549d5472f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a873cc5d048b59937cede75953abce7ca9119f0d2439a831a6f8549d5472f6->enter($__internal_73a873cc5d048b59937cede75953abce7ca9119f0d2439a831a6f8549d5472f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_c74c332092f50baaaa1752fbee279452aac892127c28a144b17404d07d4ea63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74c332092f50baaaa1752fbee279452aac892127c28a144b17404d07d4ea63d->enter($__internal_c74c332092f50baaaa1752fbee279452aac892127c28a144b17404d07d4ea63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

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
        echo "   <div>
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "        <a href=\"../../search/searchpage/";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
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
        
        $__internal_c74c332092f50baaaa1752fbee279452aac892127c28a144b17404d07d4ea63d->leave($__internal_c74c332092f50baaaa1752fbee279452aac892127c28a144b17404d07d4ea63d_prof);

        
        $__internal_73a873cc5d048b59937cede75953abce7ca9119f0d2439a831a6f8549d5472f6->leave($__internal_73a873cc5d048b59937cede75953abce7ca9119f0d2439a831a6f8549d5472f6_prof);

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
        return array (  174 => 40,  163 => 38,  159 => 37,  156 => 36,  143 => 29,  139 => 28,  135 => 27,  128 => 23,  121 => 19,  114 => 15,  109 => 12,  105 => 11,  102 => 10,  93 => 9,  81 => 7,  72 => 6,  60 => 42,  58 => 9,  56 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
   <div>
    {% for page in pagination.pages %}
        <a href=\"../../search/searchpage/{{page}}\">{{ page }}</a> |
    {% endfor %}
</div>
{% endblock %}
        </div>
    </div>
{% endblock %}", "search/searchresults.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\searchresults.html.twig");
    }
}
