<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08eda9fd8f4586963fcd9b6037d2dd27f2cf59667da62654227fb0c8ec97dfd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b74ebb2089a02ceeff88c3180b1b75df62aeeb129115b0a1b1900a04389ac14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b74ebb2089a02ceeff88c3180b1b75df62aeeb129115b0a1b1900a04389ac14->enter($__internal_2b74ebb2089a02ceeff88c3180b1b75df62aeeb129115b0a1b1900a04389ac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1913ac307ad8c01ca9444b2541de84c28f5f5daf1f5fc36936ad719a6e6e69b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1913ac307ad8c01ca9444b2541de84c28f5f5daf1f5fc36936ad719a6e6e69b6->enter($__internal_1913ac307ad8c01ca9444b2541de84c28f5f5daf1f5fc36936ad719a6e6e69b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b74ebb2089a02ceeff88c3180b1b75df62aeeb129115b0a1b1900a04389ac14->leave($__internal_2b74ebb2089a02ceeff88c3180b1b75df62aeeb129115b0a1b1900a04389ac14_prof);

        
        $__internal_1913ac307ad8c01ca9444b2541de84c28f5f5daf1f5fc36936ad719a6e6e69b6->leave($__internal_1913ac307ad8c01ca9444b2541de84c28f5f5daf1f5fc36936ad719a6e6e69b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2482d432bd4a1993ccee007ad78b49adda670afd537d2030bb65a906d7184dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2482d432bd4a1993ccee007ad78b49adda670afd537d2030bb65a906d7184dd3->enter($__internal_2482d432bd4a1993ccee007ad78b49adda670afd537d2030bb65a906d7184dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0479171266ff365e49a4c86a8d77a7cf05d4a45cb3b1e8953bc73bbb41d53cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0479171266ff365e49a4c86a8d77a7cf05d4a45cb3b1e8953bc73bbb41d53cb->enter($__internal_e0479171266ff365e49a4c86a8d77a7cf05d4a45cb3b1e8953bc73bbb41d53cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e0479171266ff365e49a4c86a8d77a7cf05d4a45cb3b1e8953bc73bbb41d53cb->leave($__internal_e0479171266ff365e49a4c86a8d77a7cf05d4a45cb3b1e8953bc73bbb41d53cb_prof);

        
        $__internal_2482d432bd4a1993ccee007ad78b49adda670afd537d2030bb65a906d7184dd3->leave($__internal_2482d432bd4a1993ccee007ad78b49adda670afd537d2030bb65a906d7184dd3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_92363ba0eaa28b894f2ea673287b75b9fe12bec1e80ead0d7598d35ca644eaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92363ba0eaa28b894f2ea673287b75b9fe12bec1e80ead0d7598d35ca644eaea->enter($__internal_92363ba0eaa28b894f2ea673287b75b9fe12bec1e80ead0d7598d35ca644eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbaf79596b03f90fde08a3967398eef83ae598d19aec8d0d66608d879e696a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbaf79596b03f90fde08a3967398eef83ae598d19aec8d0d66608d879e696a74->enter($__internal_cbaf79596b03f90fde08a3967398eef83ae598d19aec8d0d66608d879e696a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cbaf79596b03f90fde08a3967398eef83ae598d19aec8d0d66608d879e696a74->leave($__internal_cbaf79596b03f90fde08a3967398eef83ae598d19aec8d0d66608d879e696a74_prof);

        
        $__internal_92363ba0eaa28b894f2ea673287b75b9fe12bec1e80ead0d7598d35ca644eaea->leave($__internal_92363ba0eaa28b894f2ea673287b75b9fe12bec1e80ead0d7598d35ca644eaea_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5146b8a3f6e106708ef3b6be4dcc3b2cc6d5849bd80daea19c9475933af7d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5146b8a3f6e106708ef3b6be4dcc3b2cc6d5849bd80daea19c9475933af7d38->enter($__internal_a5146b8a3f6e106708ef3b6be4dcc3b2cc6d5849bd80daea19c9475933af7d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71810b01c4ff46a5b2c15a6156ccc3f00f6060d45d09127fa23552dd7e4fee44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71810b01c4ff46a5b2c15a6156ccc3f00f6060d45d09127fa23552dd7e4fee44->enter($__internal_71810b01c4ff46a5b2c15a6156ccc3f00f6060d45d09127fa23552dd7e4fee44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_71810b01c4ff46a5b2c15a6156ccc3f00f6060d45d09127fa23552dd7e4fee44->leave($__internal_71810b01c4ff46a5b2c15a6156ccc3f00f6060d45d09127fa23552dd7e4fee44_prof);

        
        $__internal_a5146b8a3f6e106708ef3b6be4dcc3b2cc6d5849bd80daea19c9475933af7d38->leave($__internal_a5146b8a3f6e106708ef3b6be4dcc3b2cc6d5849bd80daea19c9475933af7d38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
