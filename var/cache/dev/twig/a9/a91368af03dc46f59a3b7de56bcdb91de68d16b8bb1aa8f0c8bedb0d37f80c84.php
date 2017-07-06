<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e1f7c4110a8589269679854d36d1778cd00a056ff70f139ab1fffed6dcf0c96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adc35f49ce62c7363e0080a01b79c971fdfc1b6afdc713b7fc8b83bb068407fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc35f49ce62c7363e0080a01b79c971fdfc1b6afdc713b7fc8b83bb068407fa->enter($__internal_adc35f49ce62c7363e0080a01b79c971fdfc1b6afdc713b7fc8b83bb068407fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ae21f592382c93bf5d4b9a9729621befa227b133a7d5f8b37a64d65a377e1bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae21f592382c93bf5d4b9a9729621befa227b133a7d5f8b37a64d65a377e1bee->enter($__internal_ae21f592382c93bf5d4b9a9729621befa227b133a7d5f8b37a64d65a377e1bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc35f49ce62c7363e0080a01b79c971fdfc1b6afdc713b7fc8b83bb068407fa->leave($__internal_adc35f49ce62c7363e0080a01b79c971fdfc1b6afdc713b7fc8b83bb068407fa_prof);

        
        $__internal_ae21f592382c93bf5d4b9a9729621befa227b133a7d5f8b37a64d65a377e1bee->leave($__internal_ae21f592382c93bf5d4b9a9729621befa227b133a7d5f8b37a64d65a377e1bee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc48cd5d5033c204b5ac445fdbc5126cb7f35663bb823ee3c31127df64150265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc48cd5d5033c204b5ac445fdbc5126cb7f35663bb823ee3c31127df64150265->enter($__internal_fc48cd5d5033c204b5ac445fdbc5126cb7f35663bb823ee3c31127df64150265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_133396abe36bb2048b2a3ff033f7bbc59a6812cab732873c07c2d395661a3b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133396abe36bb2048b2a3ff033f7bbc59a6812cab732873c07c2d395661a3b15->enter($__internal_133396abe36bb2048b2a3ff033f7bbc59a6812cab732873c07c2d395661a3b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_133396abe36bb2048b2a3ff033f7bbc59a6812cab732873c07c2d395661a3b15->leave($__internal_133396abe36bb2048b2a3ff033f7bbc59a6812cab732873c07c2d395661a3b15_prof);

        
        $__internal_fc48cd5d5033c204b5ac445fdbc5126cb7f35663bb823ee3c31127df64150265->leave($__internal_fc48cd5d5033c204b5ac445fdbc5126cb7f35663bb823ee3c31127df64150265_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
