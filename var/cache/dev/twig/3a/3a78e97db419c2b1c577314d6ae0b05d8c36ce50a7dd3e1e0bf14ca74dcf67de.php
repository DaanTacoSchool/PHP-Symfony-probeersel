<?php

/* default/index.html.twig */
class __TwigTemplate_551798d0a894eec6440d0301989d0f685a4a78817ca36b8fb6c7d5e8217d7f25 extends Twig_Template
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
        $__internal_0b490b63ec2134377d0e4d9886f1d77e48aa63715ed8fe78833acd22fea259f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b490b63ec2134377d0e4d9886f1d77e48aa63715ed8fe78833acd22fea259f8->enter($__internal_0b490b63ec2134377d0e4d9886f1d77e48aa63715ed8fe78833acd22fea259f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_7161adcc7637fb37b1ef599ee31f26fe91ddb8c3545ad8f029f59efcd5a83f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7161adcc7637fb37b1ef599ee31f26fe91ddb8c3545ad8f029f59efcd5a83f43->enter($__internal_7161adcc7637fb37b1ef599ee31f26fe91ddb8c3545ad8f029f59efcd5a83f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b490b63ec2134377d0e4d9886f1d77e48aa63715ed8fe78833acd22fea259f8->leave($__internal_0b490b63ec2134377d0e4d9886f1d77e48aa63715ed8fe78833acd22fea259f8_prof);

        
        $__internal_7161adcc7637fb37b1ef599ee31f26fe91ddb8c3545ad8f029f59efcd5a83f43->leave($__internal_7161adcc7637fb37b1ef599ee31f26fe91ddb8c3545ad8f029f59efcd5a83f43_prof);

    }

    // line 3
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_9169229ad52c14e4b89531b3686613b4451a3be2d6985672043471c0c5fd0320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9169229ad52c14e4b89531b3686613b4451a3be2d6985672043471c0c5fd0320->enter($__internal_9169229ad52c14e4b89531b3686613b4451a3be2d6985672043471c0c5fd0320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_afd836e0edfaad3bf87be2b15997ec8642ce2d75b8c6e654526dfa54fa048627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd836e0edfaad3bf87be2b15997ec8642ce2d75b8c6e654526dfa54fa048627->enter($__internal_afd836e0edfaad3bf87be2b15997ec8642ce2d75b8c6e654526dfa54fa048627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        echo "Home";
        
        $__internal_afd836e0edfaad3bf87be2b15997ec8642ce2d75b8c6e654526dfa54fa048627->leave($__internal_afd836e0edfaad3bf87be2b15997ec8642ce2d75b8c6e654526dfa54fa048627_prof);

        
        $__internal_9169229ad52c14e4b89531b3686613b4451a3be2d6985672043471c0c5fd0320->leave($__internal_9169229ad52c14e4b89531b3686613b4451a3be2d6985672043471c0c5fd0320_prof);

    }

    // line 4
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_876241dc50bd16e649c132ca85057a796bc267d7c53e904997b81bd50ce9d57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876241dc50bd16e649c132ca85057a796bc267d7c53e904997b81bd50ce9d57d->enter($__internal_876241dc50bd16e649c132ca85057a796bc267d7c53e904997b81bd50ce9d57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_0ad80f56710021ad53563a5caf3c5ae2ba7404db06548458f4c0640a0050d368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad80f56710021ad53563a5caf3c5ae2ba7404db06548458f4c0640a0050d368->enter($__internal_0ad80f56710021ad53563a5caf3c5ae2ba7404db06548458f4c0640a0050d368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        echo "Welcome to our homepage :) feel free to look around";
        
        $__internal_0ad80f56710021ad53563a5caf3c5ae2ba7404db06548458f4c0640a0050d368->leave($__internal_0ad80f56710021ad53563a5caf3c5ae2ba7404db06548458f4c0640a0050d368_prof);

        
        $__internal_876241dc50bd16e649c132ca85057a796bc267d7c53e904997b81bd50ce9d57d->leave($__internal_876241dc50bd16e649c132ca85057a796bc267d7c53e904997b81bd50ce9d57d_prof);

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
