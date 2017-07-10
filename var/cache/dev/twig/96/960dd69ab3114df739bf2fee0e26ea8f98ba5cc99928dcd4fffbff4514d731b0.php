<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc233c586490ea0bf63ca5ac8be9e7e47cf7c8c0c67240329a61f0b86bedfe0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc233c586490ea0bf63ca5ac8be9e7e47cf7c8c0c67240329a61f0b86bedfe0e->enter($__internal_bc233c586490ea0bf63ca5ac8be9e7e47cf7c8c0c67240329a61f0b86bedfe0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_572c1b7f1e38b6163014e1d30bed221a7179536f99cbc860d0f26b7dc1dbb9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572c1b7f1e38b6163014e1d30bed221a7179536f99cbc860d0f26b7dc1dbb9df->enter($__internal_572c1b7f1e38b6163014e1d30bed221a7179536f99cbc860d0f26b7dc1dbb9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc233c586490ea0bf63ca5ac8be9e7e47cf7c8c0c67240329a61f0b86bedfe0e->leave($__internal_bc233c586490ea0bf63ca5ac8be9e7e47cf7c8c0c67240329a61f0b86bedfe0e_prof);

        
        $__internal_572c1b7f1e38b6163014e1d30bed221a7179536f99cbc860d0f26b7dc1dbb9df->leave($__internal_572c1b7f1e38b6163014e1d30bed221a7179536f99cbc860d0f26b7dc1dbb9df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_970412031cfaf0f0cd926193d68202271258f582eebe5546a0a0f55caf274c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970412031cfaf0f0cd926193d68202271258f582eebe5546a0a0f55caf274c28->enter($__internal_970412031cfaf0f0cd926193d68202271258f582eebe5546a0a0f55caf274c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5162ee822af2d545422aa0f3fc5d0ad6745c8fa1bf385cef2fcbe91a21538256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5162ee822af2d545422aa0f3fc5d0ad6745c8fa1bf385cef2fcbe91a21538256->enter($__internal_5162ee822af2d545422aa0f3fc5d0ad6745c8fa1bf385cef2fcbe91a21538256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5162ee822af2d545422aa0f3fc5d0ad6745c8fa1bf385cef2fcbe91a21538256->leave($__internal_5162ee822af2d545422aa0f3fc5d0ad6745c8fa1bf385cef2fcbe91a21538256_prof);

        
        $__internal_970412031cfaf0f0cd926193d68202271258f582eebe5546a0a0f55caf274c28->leave($__internal_970412031cfaf0f0cd926193d68202271258f582eebe5546a0a0f55caf274c28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91ef68f6d600fd04a232ee0861d2d90ede348ced6671bd062b07cef61e7df118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ef68f6d600fd04a232ee0861d2d90ede348ced6671bd062b07cef61e7df118->enter($__internal_91ef68f6d600fd04a232ee0861d2d90ede348ced6671bd062b07cef61e7df118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9bed7099bea84bfca053bf833a502ef36431109403a8adcd262caf4610a2535d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bed7099bea84bfca053bf833a502ef36431109403a8adcd262caf4610a2535d->enter($__internal_9bed7099bea84bfca053bf833a502ef36431109403a8adcd262caf4610a2535d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9bed7099bea84bfca053bf833a502ef36431109403a8adcd262caf4610a2535d->leave($__internal_9bed7099bea84bfca053bf833a502ef36431109403a8adcd262caf4610a2535d_prof);

        
        $__internal_91ef68f6d600fd04a232ee0861d2d90ede348ced6671bd062b07cef61e7df118->leave($__internal_91ef68f6d600fd04a232ee0861d2d90ede348ced6671bd062b07cef61e7df118_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_479df29f4cc13fe92227fdc444f0d552293e6e4c982d35878bec1e470015a7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479df29f4cc13fe92227fdc444f0d552293e6e4c982d35878bec1e470015a7ff->enter($__internal_479df29f4cc13fe92227fdc444f0d552293e6e4c982d35878bec1e470015a7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7b509afcc985e662b3971fa7d95a0730488fe3ae6fabcae7b86a768d5f80267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b509afcc985e662b3971fa7d95a0730488fe3ae6fabcae7b86a768d5f80267->enter($__internal_c7b509afcc985e662b3971fa7d95a0730488fe3ae6fabcae7b86a768d5f80267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7b509afcc985e662b3971fa7d95a0730488fe3ae6fabcae7b86a768d5f80267->leave($__internal_c7b509afcc985e662b3971fa7d95a0730488fe3ae6fabcae7b86a768d5f80267_prof);

        
        $__internal_479df29f4cc13fe92227fdc444f0d552293e6e4c982d35878bec1e470015a7ff->leave($__internal_479df29f4cc13fe92227fdc444f0d552293e6e4c982d35878bec1e470015a7ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
