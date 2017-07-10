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
            'body_text_content' => array($this, 'block_body_text_content'),
            'body_results' => array($this, 'block_body_results'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c6659ea9bd439dba8a5a89a5121cd70526a2109e42297e6778b4fecac8b2d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6659ea9bd439dba8a5a89a5121cd70526a2109e42297e6778b4fecac8b2d5d->enter($__internal_5c6659ea9bd439dba8a5a89a5121cd70526a2109e42297e6778b4fecac8b2d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $__internal_5c81c44be290024992132cced8f92ad7930b4c7e10989390d922da2f8066adcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c81c44be290024992132cced8f92ad7930b4c7e10989390d922da2f8066adcd->enter($__internal_5c81c44be290024992132cced8f92ad7930b4c7e10989390d922da2f8066adcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchresults.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6659ea9bd439dba8a5a89a5121cd70526a2109e42297e6778b4fecac8b2d5d->leave($__internal_5c6659ea9bd439dba8a5a89a5121cd70526a2109e42297e6778b4fecac8b2d5d_prof);

        
        $__internal_5c81c44be290024992132cced8f92ad7930b4c7e10989390d922da2f8066adcd->leave($__internal_5c81c44be290024992132cced8f92ad7930b4c7e10989390d922da2f8066adcd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d911364056dfb9aaad11650eba574f0dea0daa1b47f46da93d0066823bd45c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d911364056dfb9aaad11650eba574f0dea0daa1b47f46da93d0066823bd45c72->enter($__internal_d911364056dfb9aaad11650eba574f0dea0daa1b47f46da93d0066823bd45c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6746e448321191755f0e8fe8f0688f22d4acf2d935c80b312269913eb2911eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6746e448321191755f0e8fe8f0688f22d4acf2d935c80b312269913eb2911eb2->enter($__internal_6746e448321191755f0e8fe8f0688f22d4acf2d935c80b312269913eb2911eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"site-wrapper\">
    <div id=\"site-wrapper-inner-resultpage\">

";
        // line 6
        $this->displayBlock('body_menu', $context, $blocks);
        // line 9
        $this->displayBlock('body_text_content', $context, $blocks);
        // line 24
        $this->displayBlock('body_results', $context, $blocks);
        // line 43
        echo "        </div>
    </div>
";
        
        $__internal_6746e448321191755f0e8fe8f0688f22d4acf2d935c80b312269913eb2911eb2->leave($__internal_6746e448321191755f0e8fe8f0688f22d4acf2d935c80b312269913eb2911eb2_prof);

        
        $__internal_d911364056dfb9aaad11650eba574f0dea0daa1b47f46da93d0066823bd45c72->leave($__internal_d911364056dfb9aaad11650eba574f0dea0daa1b47f46da93d0066823bd45c72_prof);

    }

    // line 6
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_1057c2f3b16e415a5920ba1c12a7f53845019d350b88c564dab4c916e74c1c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1057c2f3b16e415a5920ba1c12a7f53845019d350b88c564dab4c916e74c1c9c->enter($__internal_1057c2f3b16e415a5920ba1c12a7f53845019d350b88c564dab4c916e74c1c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_a9b47d1bbb631c49ed90378a5c9a7cc827a0b19e4078dfc2cae1a6e040f1ed6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b47d1bbb631c49ed90378a5c9a7cc827a0b19e4078dfc2cae1a6e040f1ed6d->enter($__internal_a9b47d1bbb631c49ed90378a5c9a7cc827a0b19e4078dfc2cae1a6e040f1ed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 7
        $this->displayParentBlock("body_menu", $context, $blocks);
        echo "
";
        
        $__internal_a9b47d1bbb631c49ed90378a5c9a7cc827a0b19e4078dfc2cae1a6e040f1ed6d->leave($__internal_a9b47d1bbb631c49ed90378a5c9a7cc827a0b19e4078dfc2cae1a6e040f1ed6d_prof);

        
        $__internal_1057c2f3b16e415a5920ba1c12a7f53845019d350b88c564dab4c916e74c1c9c->leave($__internal_1057c2f3b16e415a5920ba1c12a7f53845019d350b88c564dab4c916e74c1c9c_prof);

    }

    // line 9
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_f6054926dc9c10f69424a72481ab05642214948b6e9f38a26dfa9c82ce096314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6054926dc9c10f69424a72481ab05642214948b6e9f38a26dfa9c82ce096314->enter($__internal_f6054926dc9c10f69424a72481ab05642214948b6e9f38a26dfa9c82ce096314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_77242088cfa73ab1be04a7a78c407dbd136105fbcf1e5730cfa01831cddee51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77242088cfa73ab1be04a7a78c407dbd136105fbcf1e5730cfa01831cddee51b->enter($__internal_77242088cfa73ab1be04a7a78c407dbd136105fbcf1e5730cfa01831cddee51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'label', array("label_attr" => array("class" => "searchLabel"), "label" => "Search "));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'widget', array("attr" => array("class" => "searchBar")));
        echo "
    </div>

    <div>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "searchButton")));
        echo "
    </div>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_77242088cfa73ab1be04a7a78c407dbd136105fbcf1e5730cfa01831cddee51b->leave($__internal_77242088cfa73ab1be04a7a78c407dbd136105fbcf1e5730cfa01831cddee51b_prof);

        
        $__internal_f6054926dc9c10f69424a72481ab05642214948b6e9f38a26dfa9c82ce096314->leave($__internal_f6054926dc9c10f69424a72481ab05642214948b6e9f38a26dfa9c82ce096314_prof);

    }

    // line 24
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_78215bf6f7f4c0dd464a7e204e01b340014cec7c13b34bcb81c9337ae4af21de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78215bf6f7f4c0dd464a7e204e01b340014cec7c13b34bcb81c9337ae4af21de->enter($__internal_78215bf6f7f4c0dd464a7e204e01b340014cec7c13b34bcb81c9337ae4af21de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_a2e01ba2e68dbf4f73c76ff421c21ffa959d927d90ed390adf1a08d9b6c82a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e01ba2e68dbf4f73c76ff421c21ffa959d927d90ed390adf1a08d9b6c82a4e->enter($__internal_a2e01ba2e68dbf4f73c76ff421c21ffa959d927d90ed390adf1a08d9b6c82a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 25
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 26
            echo "       
        <div class=\"movieDiv-container\">
             <div class=\"movieDiv-image\">
            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "PosterPath", array(), "method"), "html", null, true);
            echo "\" alt=\"#\">
            </div>
            <div class=\"movieDiv-right-wrapper\">
                <div class=\"movieDiv-header\">
                    <h3>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Title", array(), "method"), "html", null, true);
            echo "</h3>
                </div>
           
                <div class=\"movieDiv-info\">
                    <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "Overview", array(), "method"), "html", null, true);
            echo "</p>
                </div>
            </div>
       </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a2e01ba2e68dbf4f73c76ff421c21ffa959d927d90ed390adf1a08d9b6c82a4e->leave($__internal_a2e01ba2e68dbf4f73c76ff421c21ffa959d927d90ed390adf1a08d9b6c82a4e_prof);

        
        $__internal_78215bf6f7f4c0dd464a7e204e01b340014cec7c13b34bcb81c9337ae4af21de->leave($__internal_78215bf6f7f4c0dd464a7e204e01b340014cec7c13b34bcb81c9337ae4af21de_prof);

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
        return array (  180 => 37,  173 => 33,  166 => 29,  161 => 26,  156 => 25,  147 => 24,  135 => 22,  130 => 20,  123 => 16,  119 => 15,  115 => 14,  109 => 11,  105 => 10,  96 => 9,  84 => 7,  75 => 6,  63 => 43,  61 => 24,  59 => 9,  57 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
{% block body_text_content %}
{{ form_start(form) }}
  {{ form_errors(form) }}

    <div>
        {{ form_label(form.searchObject, 'Search ', {'label_attr': {'class': 'searchLabel'}}) }}
        {{ form_errors(form.searchObject) }}
        {{ form_widget(form.searchObject, {'attr': {'class': 'searchBar'}}) }}
    </div>

    <div>
        {{ form_widget(form.save, {'attr': {'class': 'searchButton'}}) }}
    </div>
{{ form_end(form) }}
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
            </div>
       </div>
    {% endfor %}
{% endblock %}
        </div>
    </div>
{% endblock %}", "search/searchresults.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\searchresults.html.twig");
    }
}
