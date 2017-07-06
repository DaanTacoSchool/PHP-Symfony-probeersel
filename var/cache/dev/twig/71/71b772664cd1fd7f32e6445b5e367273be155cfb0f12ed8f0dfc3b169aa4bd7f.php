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
        $__internal_8c28640af59f7206148a6d84d50a6e326b72636804a4bfe28fca3ad159636b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c28640af59f7206148a6d84d50a6e326b72636804a4bfe28fca3ad159636b9c->enter($__internal_8c28640af59f7206148a6d84d50a6e326b72636804a4bfe28fca3ad159636b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_a08a5c8122e056eb2cfeac1d257f2a184df0ecd40be66e9c7975d142abaebf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08a5c8122e056eb2cfeac1d257f2a184df0ecd40be66e9c7975d142abaebf76->enter($__internal_a08a5c8122e056eb2cfeac1d257f2a184df0ecd40be66e9c7975d142abaebf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c28640af59f7206148a6d84d50a6e326b72636804a4bfe28fca3ad159636b9c->leave($__internal_8c28640af59f7206148a6d84d50a6e326b72636804a4bfe28fca3ad159636b9c_prof);

        
        $__internal_a08a5c8122e056eb2cfeac1d257f2a184df0ecd40be66e9c7975d142abaebf76->leave($__internal_a08a5c8122e056eb2cfeac1d257f2a184df0ecd40be66e9c7975d142abaebf76_prof);

    }

    // line 3
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_e150366f38372a14db1d75a9d90d3c85d0cdfd4c038c04f80e8709f79ecb5e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e150366f38372a14db1d75a9d90d3c85d0cdfd4c038c04f80e8709f79ecb5e74->enter($__internal_e150366f38372a14db1d75a9d90d3c85d0cdfd4c038c04f80e8709f79ecb5e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_43c24425ffffd8d8d0cc3f7cfd157116e18750da127a3ef2178e1f3b483aa07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c24425ffffd8d8d0cc3f7cfd157116e18750da127a3ef2178e1f3b483aa07d->enter($__internal_43c24425ffffd8d8d0cc3f7cfd157116e18750da127a3ef2178e1f3b483aa07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        echo "Home";
        
        $__internal_43c24425ffffd8d8d0cc3f7cfd157116e18750da127a3ef2178e1f3b483aa07d->leave($__internal_43c24425ffffd8d8d0cc3f7cfd157116e18750da127a3ef2178e1f3b483aa07d_prof);

        
        $__internal_e150366f38372a14db1d75a9d90d3c85d0cdfd4c038c04f80e8709f79ecb5e74->leave($__internal_e150366f38372a14db1d75a9d90d3c85d0cdfd4c038c04f80e8709f79ecb5e74_prof);

    }

    // line 4
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_eb14cb9abd142601eaf94ab3969c12253eea451d210910f65342b68a463e7d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb14cb9abd142601eaf94ab3969c12253eea451d210910f65342b68a463e7d30->enter($__internal_eb14cb9abd142601eaf94ab3969c12253eea451d210910f65342b68a463e7d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_9dbe6e1d63e16d7609486801a950e172baeb6d1d13b9204a14afb25ca6d4137b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbe6e1d63e16d7609486801a950e172baeb6d1d13b9204a14afb25ca6d4137b->enter($__internal_9dbe6e1d63e16d7609486801a950e172baeb6d1d13b9204a14afb25ca6d4137b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        echo "Welcome to our homepage :) feel free to look around";
        
        $__internal_9dbe6e1d63e16d7609486801a950e172baeb6d1d13b9204a14afb25ca6d4137b->leave($__internal_9dbe6e1d63e16d7609486801a950e172baeb6d1d13b9204a14afb25ca6d4137b_prof);

        
        $__internal_eb14cb9abd142601eaf94ab3969c12253eea451d210910f65342b68a463e7d30->leave($__internal_eb14cb9abd142601eaf94ab3969c12253eea451d210910f65342b68a463e7d30_prof);

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
