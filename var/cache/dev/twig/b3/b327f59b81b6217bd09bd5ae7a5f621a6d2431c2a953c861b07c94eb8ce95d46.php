<?php

/* lucky/number.html.twig */
class __TwigTemplate_e2b2b7a86b7a7738fd0d878175b8d8d3a3b1a713e07e3c95268101e2c345f17e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'body_text_title' => array($this, 'block_body_text_title'),
            'body_text_content' => array($this, 'block_body_text_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84d9eaf4f995acbdacaa5053929d3ba50051c1448ae2a2c5b8ab430a4c009dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d9eaf4f995acbdacaa5053929d3ba50051c1448ae2a2c5b8ab430a4c009dfb->enter($__internal_84d9eaf4f995acbdacaa5053929d3ba50051c1448ae2a2c5b8ab430a4c009dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_2b8ffffdf1000cea4b840485074c8bc5359fefad23e18765e613f1dd6f4cff7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8ffffdf1000cea4b840485074c8bc5359fefad23e18765e613f1dd6f4cff7c->enter($__internal_2b8ffffdf1000cea4b840485074c8bc5359fefad23e18765e613f1dd6f4cff7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84d9eaf4f995acbdacaa5053929d3ba50051c1448ae2a2c5b8ab430a4c009dfb->leave($__internal_84d9eaf4f995acbdacaa5053929d3ba50051c1448ae2a2c5b8ab430a4c009dfb_prof);

        
        $__internal_2b8ffffdf1000cea4b840485074c8bc5359fefad23e18765e613f1dd6f4cff7c->leave($__internal_2b8ffffdf1000cea4b840485074c8bc5359fefad23e18765e613f1dd6f4cff7c_prof);

    }

    // line 3
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_f9ce7452e9ead9f7542312d82677a854898208c53e4d8b37c51db915edd1c3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ce7452e9ead9f7542312d82677a854898208c53e4d8b37c51db915edd1c3ae->enter($__internal_f9ce7452e9ead9f7542312d82677a854898208c53e4d8b37c51db915edd1c3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_b0ece8fd9e1cfc2d7a02b351d928fdeee5cff498577bc6bc9b3ef72b38f2f81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ece8fd9e1cfc2d7a02b351d928fdeee5cff498577bc6bc9b3ef72b38f2f81b->enter($__internal_b0ece8fd9e1cfc2d7a02b351d928fdeee5cff498577bc6bc9b3ef72b38f2f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        
        $__internal_b0ece8fd9e1cfc2d7a02b351d928fdeee5cff498577bc6bc9b3ef72b38f2f81b->leave($__internal_b0ece8fd9e1cfc2d7a02b351d928fdeee5cff498577bc6bc9b3ef72b38f2f81b_prof);

        
        $__internal_f9ce7452e9ead9f7542312d82677a854898208c53e4d8b37c51db915edd1c3ae->leave($__internal_f9ce7452e9ead9f7542312d82677a854898208c53e4d8b37c51db915edd1c3ae_prof);

    }

    // line 4
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_43479e5ab29d92129da793bb5c541cd7555f3383df0e45895a42a730086d76c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43479e5ab29d92129da793bb5c541cd7555f3383df0e45895a42a730086d76c9->enter($__internal_43479e5ab29d92129da793bb5c541cd7555f3383df0e45895a42a730086d76c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_7dd68db480b135506c5478c97bf20f463be569e0e59ebdaae48dd86dd7576d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd68db480b135506c5478c97bf20f463be569e0e59ebdaae48dd86dd7576d80->enter($__internal_7dd68db480b135506c5478c97bf20f463be569e0e59ebdaae48dd86dd7576d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        echo "This is your lucky number";
        
        $__internal_7dd68db480b135506c5478c97bf20f463be569e0e59ebdaae48dd86dd7576d80->leave($__internal_7dd68db480b135506c5478c97bf20f463be569e0e59ebdaae48dd86dd7576d80_prof);

        
        $__internal_43479e5ab29d92129da793bb5c541cd7555f3383df0e45895a42a730086d76c9->leave($__internal_43479e5ab29d92129da793bb5c541cd7555f3383df0e45895a42a730086d76c9_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  41 => 3,  11 => 1,);
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

{% block body_text_title %}{{number}}{% endblock %}
{% block body_text_content %}This is your lucky number{% endblock %}


", "lucky/number.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\lucky\\number.html.twig");
    }
}
