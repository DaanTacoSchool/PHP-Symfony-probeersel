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
        $__internal_2fce2406f4cea9640442c9f577c4e3d360c1878a4911b248bf857eb247afff16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fce2406f4cea9640442c9f577c4e3d360c1878a4911b248bf857eb247afff16->enter($__internal_2fce2406f4cea9640442c9f577c4e3d360c1878a4911b248bf857eb247afff16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $__internal_c0d80e42e764482f39802562f7c9de6fed1c1a9b98ccefac54100bdd69590774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d80e42e764482f39802562f7c9de6fed1c1a9b98ccefac54100bdd69590774->enter($__internal_c0d80e42e764482f39802562f7c9de6fed1c1a9b98ccefac54100bdd69590774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fce2406f4cea9640442c9f577c4e3d360c1878a4911b248bf857eb247afff16->leave($__internal_2fce2406f4cea9640442c9f577c4e3d360c1878a4911b248bf857eb247afff16_prof);

        
        $__internal_c0d80e42e764482f39802562f7c9de6fed1c1a9b98ccefac54100bdd69590774->leave($__internal_c0d80e42e764482f39802562f7c9de6fed1c1a9b98ccefac54100bdd69590774_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d0186ff7a696dcdc379393e1962f40d7ec781d85820ad8dd92b88dcf4c86bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0186ff7a696dcdc379393e1962f40d7ec781d85820ad8dd92b88dcf4c86bd6->enter($__internal_8d0186ff7a696dcdc379393e1962f40d7ec781d85820ad8dd92b88dcf4c86bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_186ba0328caffd26f61ffd2eea8894227999696129cd1dc8e3c6ad133b362603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186ba0328caffd26f61ffd2eea8894227999696129cd1dc8e3c6ad133b362603->enter($__internal_186ba0328caffd26f61ffd2eea8894227999696129cd1dc8e3c6ad133b362603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper\">
    <div id=\"site-wrapper-inner-resultpage\">

";
        // line 6
        $this->displayBlock('body_menu', $context, $blocks);
        // line 9
        $this->displayBlock('body_results', $context, $blocks);
        // line 38
        echo "        </div>
    </div>
";
        
        $__internal_186ba0328caffd26f61ffd2eea8894227999696129cd1dc8e3c6ad133b362603->leave($__internal_186ba0328caffd26f61ffd2eea8894227999696129cd1dc8e3c6ad133b362603_prof);

        
        $__internal_8d0186ff7a696dcdc379393e1962f40d7ec781d85820ad8dd92b88dcf4c86bd6->leave($__internal_8d0186ff7a696dcdc379393e1962f40d7ec781d85820ad8dd92b88dcf4c86bd6_prof);

    }

    // line 6
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_4c0c9f4f81309cdc95a916e23e1ca97abbe865b303dcfbe9e806ce1e427156d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0c9f4f81309cdc95a916e23e1ca97abbe865b303dcfbe9e806ce1e427156d3->enter($__internal_4c0c9f4f81309cdc95a916e23e1ca97abbe865b303dcfbe9e806ce1e427156d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_07cf709f7cec5d200a142bc82087e18dd0e8726c11fa72cbe3b895cddea8df06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cf709f7cec5d200a142bc82087e18dd0e8726c11fa72cbe3b895cddea8df06->enter($__internal_07cf709f7cec5d200a142bc82087e18dd0e8726c11fa72cbe3b895cddea8df06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 7
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_07cf709f7cec5d200a142bc82087e18dd0e8726c11fa72cbe3b895cddea8df06->leave($__internal_07cf709f7cec5d200a142bc82087e18dd0e8726c11fa72cbe3b895cddea8df06_prof);

        
        $__internal_4c0c9f4f81309cdc95a916e23e1ca97abbe865b303dcfbe9e806ce1e427156d3->leave($__internal_4c0c9f4f81309cdc95a916e23e1ca97abbe865b303dcfbe9e806ce1e427156d3_prof);

    }

    // line 9
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_214e2b83184b286dede4dd885f6a14b09de2f925c640745f0686ea063c2cdb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214e2b83184b286dede4dd885f6a14b09de2f925c640745f0686ea063c2cdb92->enter($__internal_214e2b83184b286dede4dd885f6a14b09de2f925c640745f0686ea063c2cdb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_701906ffcec0647fd801633b82ba011675de63c9ed73ca7289a2cb8dbfeb550a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701906ffcec0647fd801633b82ba011675de63c9ed73ca7289a2cb8dbfeb550a->enter($__internal_701906ffcec0647fd801633b82ba011675de63c9ed73ca7289a2cb8dbfeb550a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

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
        echo "   
";
        
        $__internal_701906ffcec0647fd801633b82ba011675de63c9ed73ca7289a2cb8dbfeb550a->leave($__internal_701906ffcec0647fd801633b82ba011675de63c9ed73ca7289a2cb8dbfeb550a_prof);

        
        $__internal_214e2b83184b286dede4dd885f6a14b09de2f925c640745f0686ea063c2cdb92->leave($__internal_214e2b83184b286dede4dd885f6a14b09de2f925c640745f0686ea063c2cdb92_prof);

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
        return array (  156 => 36,  143 => 29,  139 => 28,  135 => 27,  128 => 23,  121 => 19,  114 => 15,  109 => 12,  105 => 11,  102 => 10,  93 => 9,  81 => 7,  72 => 6,  60 => 38,  58 => 9,  56 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
   
{% endblock %}
        </div>
    </div>
{% endblock %}", "search/searchresults.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\searchresults.html.twig");
    }
}
