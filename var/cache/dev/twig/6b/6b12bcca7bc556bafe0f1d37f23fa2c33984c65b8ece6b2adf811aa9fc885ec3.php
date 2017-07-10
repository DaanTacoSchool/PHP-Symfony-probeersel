<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_413750e5031d1795d4006759d99f7e019f3bb2981f322fdd4412e19fe4c266be extends Twig_Template
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
        $__internal_5ec57028f9895013d3f68f8c936d0509746732865f6e934e0e290b2cadc4d93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec57028f9895013d3f68f8c936d0509746732865f6e934e0e290b2cadc4d93f->enter($__internal_5ec57028f9895013d3f68f8c936d0509746732865f6e934e0e290b2cadc4d93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c8b1427665bbaf7ab124da16e9315287a2d912285e99a1f8ac32289e64884c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b1427665bbaf7ab124da16e9315287a2d912285e99a1f8ac32289e64884c00->enter($__internal_c8b1427665bbaf7ab124da16e9315287a2d912285e99a1f8ac32289e64884c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec57028f9895013d3f68f8c936d0509746732865f6e934e0e290b2cadc4d93f->leave($__internal_5ec57028f9895013d3f68f8c936d0509746732865f6e934e0e290b2cadc4d93f_prof);

        
        $__internal_c8b1427665bbaf7ab124da16e9315287a2d912285e99a1f8ac32289e64884c00->leave($__internal_c8b1427665bbaf7ab124da16e9315287a2d912285e99a1f8ac32289e64884c00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4fd42d1e749851463b5dc8412b8e318bd51d2b77aa9ca5ef25808a732308db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fd42d1e749851463b5dc8412b8e318bd51d2b77aa9ca5ef25808a732308db1->enter($__internal_a4fd42d1e749851463b5dc8412b8e318bd51d2b77aa9ca5ef25808a732308db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_156cd030dacb915c759e03772eaa4db4d591ac09abe8372bdf8ece1a55ff6bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156cd030dacb915c759e03772eaa4db4d591ac09abe8372bdf8ece1a55ff6bec->enter($__internal_156cd030dacb915c759e03772eaa4db4d591ac09abe8372bdf8ece1a55ff6bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_156cd030dacb915c759e03772eaa4db4d591ac09abe8372bdf8ece1a55ff6bec->leave($__internal_156cd030dacb915c759e03772eaa4db4d591ac09abe8372bdf8ece1a55ff6bec_prof);

        
        $__internal_a4fd42d1e749851463b5dc8412b8e318bd51d2b77aa9ca5ef25808a732308db1->leave($__internal_a4fd42d1e749851463b5dc8412b8e318bd51d2b77aa9ca5ef25808a732308db1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e43a9b470db37446fc0af431be45eea7297f29006d50e648acabd6aab0de7d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43a9b470db37446fc0af431be45eea7297f29006d50e648acabd6aab0de7d9a->enter($__internal_e43a9b470db37446fc0af431be45eea7297f29006d50e648acabd6aab0de7d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9446feb67d547d277002980b19c2ada99fea2cd5f5817d326c2cd56b1e450e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9446feb67d547d277002980b19c2ada99fea2cd5f5817d326c2cd56b1e450e96->enter($__internal_9446feb67d547d277002980b19c2ada99fea2cd5f5817d326c2cd56b1e450e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9446feb67d547d277002980b19c2ada99fea2cd5f5817d326c2cd56b1e450e96->leave($__internal_9446feb67d547d277002980b19c2ada99fea2cd5f5817d326c2cd56b1e450e96_prof);

        
        $__internal_e43a9b470db37446fc0af431be45eea7297f29006d50e648acabd6aab0de7d9a->leave($__internal_e43a9b470db37446fc0af431be45eea7297f29006d50e648acabd6aab0de7d9a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca70350ccd5f13ca4b4f953db0fa7f886a5fda55b92b42579c638bbfac117161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca70350ccd5f13ca4b4f953db0fa7f886a5fda55b92b42579c638bbfac117161->enter($__internal_ca70350ccd5f13ca4b4f953db0fa7f886a5fda55b92b42579c638bbfac117161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f0f0d32d34b5678f4562708dcbd5c3c26e15eed65365f2cf0ad3e9ab8999482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0f0d32d34b5678f4562708dcbd5c3c26e15eed65365f2cf0ad3e9ab8999482->enter($__internal_4f0f0d32d34b5678f4562708dcbd5c3c26e15eed65365f2cf0ad3e9ab8999482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4f0f0d32d34b5678f4562708dcbd5c3c26e15eed65365f2cf0ad3e9ab8999482->leave($__internal_4f0f0d32d34b5678f4562708dcbd5c3c26e15eed65365f2cf0ad3e9ab8999482_prof);

        
        $__internal_ca70350ccd5f13ca4b4f953db0fa7f886a5fda55b92b42579c638bbfac117161->leave($__internal_ca70350ccd5f13ca4b4f953db0fa7f886a5fda55b92b42579c638bbfac117161_prof);

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
