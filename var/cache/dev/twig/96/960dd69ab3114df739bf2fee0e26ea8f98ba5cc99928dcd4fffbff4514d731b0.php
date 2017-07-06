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
        $__internal_11336cbcf62a2dbe41e43f31f82016a5360a9d71084de103ffc3bbb20a3c98d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11336cbcf62a2dbe41e43f31f82016a5360a9d71084de103ffc3bbb20a3c98d3->enter($__internal_11336cbcf62a2dbe41e43f31f82016a5360a9d71084de103ffc3bbb20a3c98d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aaec6d8ff892e438558c69a412990077bbd444fd1e9ad1ae61e3c80a8dc1bef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaec6d8ff892e438558c69a412990077bbd444fd1e9ad1ae61e3c80a8dc1bef4->enter($__internal_aaec6d8ff892e438558c69a412990077bbd444fd1e9ad1ae61e3c80a8dc1bef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11336cbcf62a2dbe41e43f31f82016a5360a9d71084de103ffc3bbb20a3c98d3->leave($__internal_11336cbcf62a2dbe41e43f31f82016a5360a9d71084de103ffc3bbb20a3c98d3_prof);

        
        $__internal_aaec6d8ff892e438558c69a412990077bbd444fd1e9ad1ae61e3c80a8dc1bef4->leave($__internal_aaec6d8ff892e438558c69a412990077bbd444fd1e9ad1ae61e3c80a8dc1bef4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8276442b0b9ef23288dcdcd971c9b6de4c1b047bb0e8d6cd5fca965aec148d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8276442b0b9ef23288dcdcd971c9b6de4c1b047bb0e8d6cd5fca965aec148d53->enter($__internal_8276442b0b9ef23288dcdcd971c9b6de4c1b047bb0e8d6cd5fca965aec148d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b4ae1f4980f9c0bdae4213b1d48f9948e4276bc77be4edff26caf80641006c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ae1f4980f9c0bdae4213b1d48f9948e4276bc77be4edff26caf80641006c6c->enter($__internal_b4ae1f4980f9c0bdae4213b1d48f9948e4276bc77be4edff26caf80641006c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4ae1f4980f9c0bdae4213b1d48f9948e4276bc77be4edff26caf80641006c6c->leave($__internal_b4ae1f4980f9c0bdae4213b1d48f9948e4276bc77be4edff26caf80641006c6c_prof);

        
        $__internal_8276442b0b9ef23288dcdcd971c9b6de4c1b047bb0e8d6cd5fca965aec148d53->leave($__internal_8276442b0b9ef23288dcdcd971c9b6de4c1b047bb0e8d6cd5fca965aec148d53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34b50c242c2ada93a4a83d06b2712fd5a4065be1070a903d7da268e6778787e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b50c242c2ada93a4a83d06b2712fd5a4065be1070a903d7da268e6778787e3->enter($__internal_34b50c242c2ada93a4a83d06b2712fd5a4065be1070a903d7da268e6778787e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e1b013b23bb297e0838cb09006861e9fe50ace18dbe112d9c221497e62506a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1b013b23bb297e0838cb09006861e9fe50ace18dbe112d9c221497e62506a8->enter($__internal_7e1b013b23bb297e0838cb09006861e9fe50ace18dbe112d9c221497e62506a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e1b013b23bb297e0838cb09006861e9fe50ace18dbe112d9c221497e62506a8->leave($__internal_7e1b013b23bb297e0838cb09006861e9fe50ace18dbe112d9c221497e62506a8_prof);

        
        $__internal_34b50c242c2ada93a4a83d06b2712fd5a4065be1070a903d7da268e6778787e3->leave($__internal_34b50c242c2ada93a4a83d06b2712fd5a4065be1070a903d7da268e6778787e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_915f757144965d23186caacc12a35d6047fcaeb6f97b42b20e5e65e83ef8984f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915f757144965d23186caacc12a35d6047fcaeb6f97b42b20e5e65e83ef8984f->enter($__internal_915f757144965d23186caacc12a35d6047fcaeb6f97b42b20e5e65e83ef8984f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db501a02a860edd9562104bdcfbc1407c86c2aa69c2a2ca1a9f95dba50e58dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db501a02a860edd9562104bdcfbc1407c86c2aa69c2a2ca1a9f95dba50e58dca->enter($__internal_db501a02a860edd9562104bdcfbc1407c86c2aa69c2a2ca1a9f95dba50e58dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db501a02a860edd9562104bdcfbc1407c86c2aa69c2a2ca1a9f95dba50e58dca->leave($__internal_db501a02a860edd9562104bdcfbc1407c86c2aa69c2a2ca1a9f95dba50e58dca_prof);

        
        $__internal_915f757144965d23186caacc12a35d6047fcaeb6f97b42b20e5e65e83ef8984f->leave($__internal_915f757144965d23186caacc12a35d6047fcaeb6f97b42b20e5e65e83ef8984f_prof);

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
