<?php

/* search/searchpage.html.twig */
class __TwigTemplate_539fcd87ceb1cae68bc6d6655a8bc2f94212f13e625ca1b52c7bd85e0ac64524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/searchpage.html.twig", 1);
        $this->blocks = array(
            'body_text_title' => array($this, 'block_body_text_title'),
            'body_text_content' => array($this, 'block_body_text_content'),
            'body_content_other' => array($this, 'block_body_content_other'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b1236e5b461b4ad10ddf675855a175fc3aeb3038af4d9da292e2c728d00347e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1236e5b461b4ad10ddf675855a175fc3aeb3038af4d9da292e2c728d00347e->enter($__internal_6b1236e5b461b4ad10ddf675855a175fc3aeb3038af4d9da292e2c728d00347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchpage.html.twig"));

        $__internal_7110263b29fdd9a6c25dd6ee4043690a85e2109fc700d0ba147384170539e735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7110263b29fdd9a6c25dd6ee4043690a85e2109fc700d0ba147384170539e735->enter($__internal_7110263b29fdd9a6c25dd6ee4043690a85e2109fc700d0ba147384170539e735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/searchpage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b1236e5b461b4ad10ddf675855a175fc3aeb3038af4d9da292e2c728d00347e->leave($__internal_6b1236e5b461b4ad10ddf675855a175fc3aeb3038af4d9da292e2c728d00347e_prof);

        
        $__internal_7110263b29fdd9a6c25dd6ee4043690a85e2109fc700d0ba147384170539e735->leave($__internal_7110263b29fdd9a6c25dd6ee4043690a85e2109fc700d0ba147384170539e735_prof);

    }

    // line 3
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_e56adfae49f46bb4a8c080ae09b247289e605a6691941bf334230a1669407864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56adfae49f46bb4a8c080ae09b247289e605a6691941bf334230a1669407864->enter($__internal_e56adfae49f46bb4a8c080ae09b247289e605a6691941bf334230a1669407864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_3bf524cbdac7c7ef40e7bd644e668bc3c41cd34944920d9a8f3c4c761da65d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf524cbdac7c7ef40e7bd644e668bc3c41cd34944920d9a8f3c4c761da65d05->enter($__internal_3bf524cbdac7c7ef40e7bd644e668bc3c41cd34944920d9a8f3c4c761da65d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        echo "Search for your movie here!";
        
        $__internal_3bf524cbdac7c7ef40e7bd644e668bc3c41cd34944920d9a8f3c4c761da65d05->leave($__internal_3bf524cbdac7c7ef40e7bd644e668bc3c41cd34944920d9a8f3c4c761da65d05_prof);

        
        $__internal_e56adfae49f46bb4a8c080ae09b247289e605a6691941bf334230a1669407864->leave($__internal_e56adfae49f46bb4a8c080ae09b247289e605a6691941bf334230a1669407864_prof);

    }

    // line 4
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_0c8493fbdcd14ea49ccee17974f892ae017d9bf72f4b11fb06610e595ddb7a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8493fbdcd14ea49ccee17974f892ae017d9bf72f4b11fb06610e595ddb7a89->enter($__internal_0c8493fbdcd14ea49ccee17974f892ae017d9bf72f4b11fb06610e595ddb7a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_498da722e6967812291281573350d8b0dd9f6ecbec41a92fcd4cc94985fe1eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498da722e6967812291281573350d8b0dd9f6ecbec41a92fcd4cc94985fe1eff->enter($__internal_498da722e6967812291281573350d8b0dd9f6ecbec41a92fcd4cc94985fe1eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        // line 5
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["searchObject"]) ? $context["searchObject"] : $this->getContext($context, "searchObject")), "html", null, true);
        echo "
";
        
        $__internal_498da722e6967812291281573350d8b0dd9f6ecbec41a92fcd4cc94985fe1eff->leave($__internal_498da722e6967812291281573350d8b0dd9f6ecbec41a92fcd4cc94985fe1eff_prof);

        
        $__internal_0c8493fbdcd14ea49ccee17974f892ae017d9bf72f4b11fb06610e595ddb7a89->leave($__internal_0c8493fbdcd14ea49ccee17974f892ae017d9bf72f4b11fb06610e595ddb7a89_prof);

    }

    // line 7
    public function block_body_content_other($context, array $blocks = array())
    {
        $__internal_ebb2f392bf1dab4eb3da123599aa52571069d771f2ffe2c0878d2507ea8ba465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb2f392bf1dab4eb3da123599aa52571069d771f2ffe2c0878d2507ea8ba465->enter($__internal_ebb2f392bf1dab4eb3da123599aa52571069d771f2ffe2c0878d2507ea8ba465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        $__internal_99ced025b012e8ddb770096a5ec22343c5988463f138c1570274adaed0c3ca41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ced025b012e8ddb770096a5ec22343c5988463f138c1570274adaed0c3ca41->enter($__internal_99ced025b012e8ddb770096a5ec22343c5988463f138c1570274adaed0c3ca41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'label', array("label_attr" => array("class" => "searchLabel"), "label" => "Search "));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'errors');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchObject", array()), 'widget', array("attr" => array("class" => "searchBar")));
        echo "
    </div>

  

    <div>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "searchButton")));
        echo "
    </div>
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_99ced025b012e8ddb770096a5ec22343c5988463f138c1570274adaed0c3ca41->leave($__internal_99ced025b012e8ddb770096a5ec22343c5988463f138c1570274adaed0c3ca41_prof);

        
        $__internal_ebb2f392bf1dab4eb3da123599aa52571069d771f2ffe2c0878d2507ea8ba465->leave($__internal_ebb2f392bf1dab4eb3da123599aa52571069d771f2ffe2c0878d2507ea8ba465_prof);

    }

    public function getTemplateName()
    {
        return "search/searchpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 23,  121 => 21,  112 => 15,  108 => 14,  104 => 13,  98 => 10,  94 => 9,  91 => 8,  82 => 7,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block body_text_title %}Search for your movie here!{% endblock %}
{% block body_text_content %}
 {{searchObject}}
{% endblock %}
{% block body_content_other %}

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

", "search/searchpage.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\search\\searchpage.html.twig");
    }
}
