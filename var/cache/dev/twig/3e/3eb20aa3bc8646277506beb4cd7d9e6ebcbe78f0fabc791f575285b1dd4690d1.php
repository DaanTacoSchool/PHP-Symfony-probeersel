<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08021e003091c97510b8dd0472acc4de60301c96798466fd17136e37c00522a2 extends Twig_Template
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
        $__internal_eb4076a28edde8b82e36d6f9ac008aace3a35e71993d15a6b085d8d8572593c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4076a28edde8b82e36d6f9ac008aace3a35e71993d15a6b085d8d8572593c3->enter($__internal_eb4076a28edde8b82e36d6f9ac008aace3a35e71993d15a6b085d8d8572593c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1ca9d8660554fff94ba24e6c2b766764d8da531cb6a07bd2358b55ab7b563dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca9d8660554fff94ba24e6c2b766764d8da531cb6a07bd2358b55ab7b563dd4->enter($__internal_1ca9d8660554fff94ba24e6c2b766764d8da531cb6a07bd2358b55ab7b563dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb4076a28edde8b82e36d6f9ac008aace3a35e71993d15a6b085d8d8572593c3->leave($__internal_eb4076a28edde8b82e36d6f9ac008aace3a35e71993d15a6b085d8d8572593c3_prof);

        
        $__internal_1ca9d8660554fff94ba24e6c2b766764d8da531cb6a07bd2358b55ab7b563dd4->leave($__internal_1ca9d8660554fff94ba24e6c2b766764d8da531cb6a07bd2358b55ab7b563dd4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e20860943b331124be763b99b64d91ea062f91ee05eb6ee90c277854ca0bd34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20860943b331124be763b99b64d91ea062f91ee05eb6ee90c277854ca0bd34c->enter($__internal_e20860943b331124be763b99b64d91ea062f91ee05eb6ee90c277854ca0bd34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e2f2abec3e23218b961cbda4bc4c405f0c63229c9bff2ad5607e4ac1f8d6f9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f2abec3e23218b961cbda4bc4c405f0c63229c9bff2ad5607e4ac1f8d6f9f3->enter($__internal_e2f2abec3e23218b961cbda4bc4c405f0c63229c9bff2ad5607e4ac1f8d6f9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2f2abec3e23218b961cbda4bc4c405f0c63229c9bff2ad5607e4ac1f8d6f9f3->leave($__internal_e2f2abec3e23218b961cbda4bc4c405f0c63229c9bff2ad5607e4ac1f8d6f9f3_prof);

        
        $__internal_e20860943b331124be763b99b64d91ea062f91ee05eb6ee90c277854ca0bd34c->leave($__internal_e20860943b331124be763b99b64d91ea062f91ee05eb6ee90c277854ca0bd34c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c266446055832f2138d250eb9bca547a1b7e512ad9e082fcb170bb31318aab5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c266446055832f2138d250eb9bca547a1b7e512ad9e082fcb170bb31318aab5c->enter($__internal_c266446055832f2138d250eb9bca547a1b7e512ad9e082fcb170bb31318aab5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7b13d387c880b7237b8a68fc8ee1830b902531e81c49b352dcc011ea5d947ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b13d387c880b7237b8a68fc8ee1830b902531e81c49b352dcc011ea5d947ac3->enter($__internal_7b13d387c880b7237b8a68fc8ee1830b902531e81c49b352dcc011ea5d947ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7b13d387c880b7237b8a68fc8ee1830b902531e81c49b352dcc011ea5d947ac3->leave($__internal_7b13d387c880b7237b8a68fc8ee1830b902531e81c49b352dcc011ea5d947ac3_prof);

        
        $__internal_c266446055832f2138d250eb9bca547a1b7e512ad9e082fcb170bb31318aab5c->leave($__internal_c266446055832f2138d250eb9bca547a1b7e512ad9e082fcb170bb31318aab5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84f601bb0f6dad09aaebcab1661079f61f52e0e46c0c66c53c08ed235b2cb017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f601bb0f6dad09aaebcab1661079f61f52e0e46c0c66c53c08ed235b2cb017->enter($__internal_84f601bb0f6dad09aaebcab1661079f61f52e0e46c0c66c53c08ed235b2cb017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0511d50abc00e89c5105ffab0919967c800391f9934e1dcc544f0afcf2dfa14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0511d50abc00e89c5105ffab0919967c800391f9934e1dcc544f0afcf2dfa14->enter($__internal_f0511d50abc00e89c5105ffab0919967c800391f9934e1dcc544f0afcf2dfa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0511d50abc00e89c5105ffab0919967c800391f9934e1dcc544f0afcf2dfa14->leave($__internal_f0511d50abc00e89c5105ffab0919967c800391f9934e1dcc544f0afcf2dfa14_prof);

        
        $__internal_84f601bb0f6dad09aaebcab1661079f61f52e0e46c0c66c53c08ed235b2cb017->leave($__internal_84f601bb0f6dad09aaebcab1661079f61f52e0e46c0c66c53c08ed235b2cb017_prof);

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
