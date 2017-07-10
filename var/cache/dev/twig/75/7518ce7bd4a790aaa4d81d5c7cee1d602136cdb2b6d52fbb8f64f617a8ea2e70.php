<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_239d33d300abc6707f02b89ece7f9e920d827fd87fdba361fa1e2664a8dbcf29 extends Twig_Template
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
        $__internal_85b52d48a6c2b4b569271e1dbd291c1ce846727a4fd242992c672d0b3740be5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b52d48a6c2b4b569271e1dbd291c1ce846727a4fd242992c672d0b3740be5f->enter($__internal_85b52d48a6c2b4b569271e1dbd291c1ce846727a4fd242992c672d0b3740be5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2edfd904b66508cd9edac6857c6016f545af17e61a4a7c5f01990b935245f19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edfd904b66508cd9edac6857c6016f545af17e61a4a7c5f01990b935245f19f->enter($__internal_2edfd904b66508cd9edac6857c6016f545af17e61a4a7c5f01990b935245f19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_85b52d48a6c2b4b569271e1dbd291c1ce846727a4fd242992c672d0b3740be5f->leave($__internal_85b52d48a6c2b4b569271e1dbd291c1ce846727a4fd242992c672d0b3740be5f_prof);

        
        $__internal_2edfd904b66508cd9edac6857c6016f545af17e61a4a7c5f01990b935245f19f->leave($__internal_2edfd904b66508cd9edac6857c6016f545af17e61a4a7c5f01990b935245f19f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ea9dda237b9eb398ff6abf8ab15cca30cc59c542428c58287559c5f03731008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea9dda237b9eb398ff6abf8ab15cca30cc59c542428c58287559c5f03731008->enter($__internal_3ea9dda237b9eb398ff6abf8ab15cca30cc59c542428c58287559c5f03731008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5b98cce55b83303aab78de25e62856ed795aeff1cdd5030d4e7ea071f3ab36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b98cce55b83303aab78de25e62856ed795aeff1cdd5030d4e7ea071f3ab36f->enter($__internal_b5b98cce55b83303aab78de25e62856ed795aeff1cdd5030d4e7ea071f3ab36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b5b98cce55b83303aab78de25e62856ed795aeff1cdd5030d4e7ea071f3ab36f->leave($__internal_b5b98cce55b83303aab78de25e62856ed795aeff1cdd5030d4e7ea071f3ab36f_prof);

        
        $__internal_3ea9dda237b9eb398ff6abf8ab15cca30cc59c542428c58287559c5f03731008->leave($__internal_3ea9dda237b9eb398ff6abf8ab15cca30cc59c542428c58287559c5f03731008_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_29baaaa766b098b8ceadc1d0232a1240fd41d554302e783b40460d6f4b63a070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29baaaa766b098b8ceadc1d0232a1240fd41d554302e783b40460d6f4b63a070->enter($__internal_29baaaa766b098b8ceadc1d0232a1240fd41d554302e783b40460d6f4b63a070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c201d74eda810afaf86ed6f9bf710fb87fc260b1f686ed2fa492818ba2b8867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c201d74eda810afaf86ed6f9bf710fb87fc260b1f686ed2fa492818ba2b8867->enter($__internal_4c201d74eda810afaf86ed6f9bf710fb87fc260b1f686ed2fa492818ba2b8867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4c201d74eda810afaf86ed6f9bf710fb87fc260b1f686ed2fa492818ba2b8867->leave($__internal_4c201d74eda810afaf86ed6f9bf710fb87fc260b1f686ed2fa492818ba2b8867_prof);

        
        $__internal_29baaaa766b098b8ceadc1d0232a1240fd41d554302e783b40460d6f4b63a070->leave($__internal_29baaaa766b098b8ceadc1d0232a1240fd41d554302e783b40460d6f4b63a070_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f7765a9ca1f0a75fe98a6746b55a6e830ad2f402a58f2c5d089ea99904ffd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7765a9ca1f0a75fe98a6746b55a6e830ad2f402a58f2c5d089ea99904ffd36->enter($__internal_4f7765a9ca1f0a75fe98a6746b55a6e830ad2f402a58f2c5d089ea99904ffd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a19e2f8df0c396422441b528e0f60cc00d80b90a37fac305451c300f3a173b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a19e2f8df0c396422441b528e0f60cc00d80b90a37fac305451c300f3a173b9->enter($__internal_2a19e2f8df0c396422441b528e0f60cc00d80b90a37fac305451c300f3a173b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a19e2f8df0c396422441b528e0f60cc00d80b90a37fac305451c300f3a173b9->leave($__internal_2a19e2f8df0c396422441b528e0f60cc00d80b90a37fac305451c300f3a173b9_prof);

        
        $__internal_4f7765a9ca1f0a75fe98a6746b55a6e830ad2f402a58f2c5d089ea99904ffd36->leave($__internal_4f7765a9ca1f0a75fe98a6746b55a6e830ad2f402a58f2c5d089ea99904ffd36_prof);

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
