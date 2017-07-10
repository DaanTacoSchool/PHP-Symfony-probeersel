<?php

/* default/index.html.twig */
class __TwigTemplate_86f96822ecc2f5a2f26fac572780936195d6cfff81e7e381121ca4f9f7b17a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_b82cc799a003dc8671d25d10e227db58ed9ac2800a082ce625ca53d1ceb50ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82cc799a003dc8671d25d10e227db58ed9ac2800a082ce625ca53d1ceb50ba9->enter($__internal_b82cc799a003dc8671d25d10e227db58ed9ac2800a082ce625ca53d1ceb50ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_fbe68fce66463f0aba4b558b80934518148e348d6f0fca2449ab9762686c13d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe68fce66463f0aba4b558b80934518148e348d6f0fca2449ab9762686c13d6->enter($__internal_fbe68fce66463f0aba4b558b80934518148e348d6f0fca2449ab9762686c13d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82cc799a003dc8671d25d10e227db58ed9ac2800a082ce625ca53d1ceb50ba9->leave($__internal_b82cc799a003dc8671d25d10e227db58ed9ac2800a082ce625ca53d1ceb50ba9_prof);

        
        $__internal_fbe68fce66463f0aba4b558b80934518148e348d6f0fca2449ab9762686c13d6->leave($__internal_fbe68fce66463f0aba4b558b80934518148e348d6f0fca2449ab9762686c13d6_prof);

    }

    // line 3
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_0a705ac58a416c6f090a4f8fb533ca0612a0bbc0e468fef79b11b383d3799513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a705ac58a416c6f090a4f8fb533ca0612a0bbc0e468fef79b11b383d3799513->enter($__internal_0a705ac58a416c6f090a4f8fb533ca0612a0bbc0e468fef79b11b383d3799513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_943f73637ba71eee08260f24e941621e5982153732059b664f9896e2f92a23b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943f73637ba71eee08260f24e941621e5982153732059b664f9896e2f92a23b0->enter($__internal_943f73637ba71eee08260f24e941621e5982153732059b664f9896e2f92a23b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        echo "Home";
        
        $__internal_943f73637ba71eee08260f24e941621e5982153732059b664f9896e2f92a23b0->leave($__internal_943f73637ba71eee08260f24e941621e5982153732059b664f9896e2f92a23b0_prof);

        
        $__internal_0a705ac58a416c6f090a4f8fb533ca0612a0bbc0e468fef79b11b383d3799513->leave($__internal_0a705ac58a416c6f090a4f8fb533ca0612a0bbc0e468fef79b11b383d3799513_prof);

    }

    // line 4
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_e0d36d3b73701f8f7abfee759745c1cbf7e1302ac4c84113e5cb856eed921db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d36d3b73701f8f7abfee759745c1cbf7e1302ac4c84113e5cb856eed921db6->enter($__internal_e0d36d3b73701f8f7abfee759745c1cbf7e1302ac4c84113e5cb856eed921db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_47731c08634378d558f4b148a1bf8e27d594b3ae9fde426ab0bfa8bc09256a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47731c08634378d558f4b148a1bf8e27d594b3ae9fde426ab0bfa8bc09256a58->enter($__internal_47731c08634378d558f4b148a1bf8e27d594b3ae9fde426ab0bfa8bc09256a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        echo "Welcome to our homepage :) feel free to look around";
        
        $__internal_47731c08634378d558f4b148a1bf8e27d594b3ae9fde426ab0bfa8bc09256a58->leave($__internal_47731c08634378d558f4b148a1bf8e27d594b3ae9fde426ab0bfa8bc09256a58_prof);

        
        $__internal_e0d36d3b73701f8f7abfee759745c1cbf7e1302ac4c84113e5cb856eed921db6->leave($__internal_e0d36d3b73701f8f7abfee759745c1cbf7e1302ac4c84113e5cb856eed921db6_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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

{% block body_text_title %}Home{% endblock %}
{% block body_text_content %}Welcome to our homepage :) feel free to look around{% endblock %}


", "default/index.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\default\\index.html.twig");
    }
}
