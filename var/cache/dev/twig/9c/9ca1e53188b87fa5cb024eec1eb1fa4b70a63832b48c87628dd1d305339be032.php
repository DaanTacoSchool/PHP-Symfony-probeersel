<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_caf1634c3b58a25cb0639489fb964ed93c6c0fb1e5f0a44971797307c36ee331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4d47ee44f534750d5461a795dd3423f22f6b33a7b06284c4749c0ae302f6065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d47ee44f534750d5461a795dd3423f22f6b33a7b06284c4749c0ae302f6065->enter($__internal_b4d47ee44f534750d5461a795dd3423f22f6b33a7b06284c4749c0ae302f6065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_19bbf9f733c50ebb4d28554124408781ad2e67441192e75c4e2700a2ab752f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bbf9f733c50ebb4d28554124408781ad2e67441192e75c4e2700a2ab752f8a->enter($__internal_19bbf9f733c50ebb4d28554124408781ad2e67441192e75c4e2700a2ab752f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b4d47ee44f534750d5461a795dd3423f22f6b33a7b06284c4749c0ae302f6065->leave($__internal_b4d47ee44f534750d5461a795dd3423f22f6b33a7b06284c4749c0ae302f6065_prof);

        
        $__internal_19bbf9f733c50ebb4d28554124408781ad2e67441192e75c4e2700a2ab752f8a->leave($__internal_19bbf9f733c50ebb4d28554124408781ad2e67441192e75c4e2700a2ab752f8a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4b19e86f4eaf71b537dd80363d6c50bc13e7761a5b34c7cd42f0e236c195b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b19e86f4eaf71b537dd80363d6c50bc13e7761a5b34c7cd42f0e236c195b46->enter($__internal_b4b19e86f4eaf71b537dd80363d6c50bc13e7761a5b34c7cd42f0e236c195b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65921d89a39ca106e8a48262a47a8300736e9edfb86a1600b2f127996727038c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65921d89a39ca106e8a48262a47a8300736e9edfb86a1600b2f127996727038c->enter($__internal_65921d89a39ca106e8a48262a47a8300736e9edfb86a1600b2f127996727038c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_65921d89a39ca106e8a48262a47a8300736e9edfb86a1600b2f127996727038c->leave($__internal_65921d89a39ca106e8a48262a47a8300736e9edfb86a1600b2f127996727038c_prof);

        
        $__internal_b4b19e86f4eaf71b537dd80363d6c50bc13e7761a5b34c7cd42f0e236c195b46->leave($__internal_b4b19e86f4eaf71b537dd80363d6c50bc13e7761a5b34c7cd42f0e236c195b46_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4db558e660826bc939c0ab0d1e7bdeb09777ca7db9e71c6de000f6d2110ef24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4db558e660826bc939c0ab0d1e7bdeb09777ca7db9e71c6de000f6d2110ef24->enter($__internal_d4db558e660826bc939c0ab0d1e7bdeb09777ca7db9e71c6de000f6d2110ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c4f9265b8214b99bd8a4cfc9863d6acdb7ac77b23572277689f0d7adfd1ab43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4f9265b8214b99bd8a4cfc9863d6acdb7ac77b23572277689f0d7adfd1ab43->enter($__internal_2c4f9265b8214b99bd8a4cfc9863d6acdb7ac77b23572277689f0d7adfd1ab43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2c4f9265b8214b99bd8a4cfc9863d6acdb7ac77b23572277689f0d7adfd1ab43->leave($__internal_2c4f9265b8214b99bd8a4cfc9863d6acdb7ac77b23572277689f0d7adfd1ab43_prof);

        
        $__internal_d4db558e660826bc939c0ab0d1e7bdeb09777ca7db9e71c6de000f6d2110ef24->leave($__internal_d4db558e660826bc939c0ab0d1e7bdeb09777ca7db9e71c6de000f6d2110ef24_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_be41ba43bab9c354c720e657c59ddb4c74b0e9ce68e30d49e2487fdb7c7a8c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be41ba43bab9c354c720e657c59ddb4c74b0e9ce68e30d49e2487fdb7c7a8c9e->enter($__internal_be41ba43bab9c354c720e657c59ddb4c74b0e9ce68e30d49e2487fdb7c7a8c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92bd016611db4fe42bacd0fee70b539c8afceb4c2858ee5146c45caeecad6b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92bd016611db4fe42bacd0fee70b539c8afceb4c2858ee5146c45caeecad6b0a->enter($__internal_92bd016611db4fe42bacd0fee70b539c8afceb4c2858ee5146c45caeecad6b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_92bd016611db4fe42bacd0fee70b539c8afceb4c2858ee5146c45caeecad6b0a->leave($__internal_92bd016611db4fe42bacd0fee70b539c8afceb4c2858ee5146c45caeecad6b0a_prof);

        
        $__internal_be41ba43bab9c354c720e657c59ddb4c74b0e9ce68e30d49e2487fdb7c7a8c9e->leave($__internal_be41ba43bab9c354c720e657c59ddb4c74b0e9ce68e30d49e2487fdb7c7a8c9e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
