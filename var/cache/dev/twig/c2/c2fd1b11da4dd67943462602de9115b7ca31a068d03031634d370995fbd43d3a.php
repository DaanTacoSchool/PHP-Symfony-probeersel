<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a27ab7c8705ef1254fdf8d0ec1bd6b94a9e43958fa53f7f36291fe9085a3203f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_228c445cec1383c82ec46d1705b28901ebf6dcb7271e8f9b693895c74a365593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228c445cec1383c82ec46d1705b28901ebf6dcb7271e8f9b693895c74a365593->enter($__internal_228c445cec1383c82ec46d1705b28901ebf6dcb7271e8f9b693895c74a365593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_43d8d73964cdace262159aed4f5062595d91c9043fbf4dc478dfe0b62baf4a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d8d73964cdace262159aed4f5062595d91c9043fbf4dc478dfe0b62baf4a02->enter($__internal_43d8d73964cdace262159aed4f5062595d91c9043fbf4dc478dfe0b62baf4a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_228c445cec1383c82ec46d1705b28901ebf6dcb7271e8f9b693895c74a365593->leave($__internal_228c445cec1383c82ec46d1705b28901ebf6dcb7271e8f9b693895c74a365593_prof);

        
        $__internal_43d8d73964cdace262159aed4f5062595d91c9043fbf4dc478dfe0b62baf4a02->leave($__internal_43d8d73964cdace262159aed4f5062595d91c9043fbf4dc478dfe0b62baf4a02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5f95d063100167a213b53ed7c629de57722cd268ba99cfcae30d62f034300a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f95d063100167a213b53ed7c629de57722cd268ba99cfcae30d62f034300a9->enter($__internal_a5f95d063100167a213b53ed7c629de57722cd268ba99cfcae30d62f034300a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5b6897fe07b71129543d6ac4300cf80fa370344d7820080d146771686f0dd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b6897fe07b71129543d6ac4300cf80fa370344d7820080d146771686f0dd25->enter($__internal_f5b6897fe07b71129543d6ac4300cf80fa370344d7820080d146771686f0dd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f5b6897fe07b71129543d6ac4300cf80fa370344d7820080d146771686f0dd25->leave($__internal_f5b6897fe07b71129543d6ac4300cf80fa370344d7820080d146771686f0dd25_prof);

        
        $__internal_a5f95d063100167a213b53ed7c629de57722cd268ba99cfcae30d62f034300a9->leave($__internal_a5f95d063100167a213b53ed7c629de57722cd268ba99cfcae30d62f034300a9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5811c1750e47e9c01f49e56b4acf0131ec2cd5c4a177d2707e0bd4dc7ecbff2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5811c1750e47e9c01f49e56b4acf0131ec2cd5c4a177d2707e0bd4dc7ecbff2a->enter($__internal_5811c1750e47e9c01f49e56b4acf0131ec2cd5c4a177d2707e0bd4dc7ecbff2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2671b4f0b9025007a69b2ebe81d802209fe8a751dd1996af2242ae080a2d9908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2671b4f0b9025007a69b2ebe81d802209fe8a751dd1996af2242ae080a2d9908->enter($__internal_2671b4f0b9025007a69b2ebe81d802209fe8a751dd1996af2242ae080a2d9908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2671b4f0b9025007a69b2ebe81d802209fe8a751dd1996af2242ae080a2d9908->leave($__internal_2671b4f0b9025007a69b2ebe81d802209fe8a751dd1996af2242ae080a2d9908_prof);

        
        $__internal_5811c1750e47e9c01f49e56b4acf0131ec2cd5c4a177d2707e0bd4dc7ecbff2a->leave($__internal_5811c1750e47e9c01f49e56b4acf0131ec2cd5c4a177d2707e0bd4dc7ecbff2a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e24df8a272a9cca70dc16fc6a5b77839fa94f91104d6002407324818f72c089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e24df8a272a9cca70dc16fc6a5b77839fa94f91104d6002407324818f72c089->enter($__internal_6e24df8a272a9cca70dc16fc6a5b77839fa94f91104d6002407324818f72c089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7bbb7c33be87c4dd81a57d63268f62bf1835a1e8e140217b526648efea778af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bbb7c33be87c4dd81a57d63268f62bf1835a1e8e140217b526648efea778af->enter($__internal_f7bbb7c33be87c4dd81a57d63268f62bf1835a1e8e140217b526648efea778af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f7bbb7c33be87c4dd81a57d63268f62bf1835a1e8e140217b526648efea778af->leave($__internal_f7bbb7c33be87c4dd81a57d63268f62bf1835a1e8e140217b526648efea778af_prof);

        
        $__internal_6e24df8a272a9cca70dc16fc6a5b77839fa94f91104d6002407324818f72c089->leave($__internal_6e24df8a272a9cca70dc16fc6a5b77839fa94f91104d6002407324818f72c089_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
