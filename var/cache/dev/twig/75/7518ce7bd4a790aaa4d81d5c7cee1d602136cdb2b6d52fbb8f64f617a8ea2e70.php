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
        $__internal_74407d8bc8eee3fa6b00777ec8f9aea505302aa52c8aa6d5a4034b3a86fae6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74407d8bc8eee3fa6b00777ec8f9aea505302aa52c8aa6d5a4034b3a86fae6c2->enter($__internal_74407d8bc8eee3fa6b00777ec8f9aea505302aa52c8aa6d5a4034b3a86fae6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_899b807d812c70ca6f46a6827826671a18dd8be226b81ecd21ba01e72f4cd83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899b807d812c70ca6f46a6827826671a18dd8be226b81ecd21ba01e72f4cd83e->enter($__internal_899b807d812c70ca6f46a6827826671a18dd8be226b81ecd21ba01e72f4cd83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_74407d8bc8eee3fa6b00777ec8f9aea505302aa52c8aa6d5a4034b3a86fae6c2->leave($__internal_74407d8bc8eee3fa6b00777ec8f9aea505302aa52c8aa6d5a4034b3a86fae6c2_prof);

        
        $__internal_899b807d812c70ca6f46a6827826671a18dd8be226b81ecd21ba01e72f4cd83e->leave($__internal_899b807d812c70ca6f46a6827826671a18dd8be226b81ecd21ba01e72f4cd83e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6411805f6e7abad90910f2db4be2f9010bbb99002dda723a6d6e654dbd4df9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6411805f6e7abad90910f2db4be2f9010bbb99002dda723a6d6e654dbd4df9c->enter($__internal_f6411805f6e7abad90910f2db4be2f9010bbb99002dda723a6d6e654dbd4df9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92016e1aadc17a61915dbcca7e7594fd8c6503987380222c9b5e505284bcdee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92016e1aadc17a61915dbcca7e7594fd8c6503987380222c9b5e505284bcdee6->enter($__internal_92016e1aadc17a61915dbcca7e7594fd8c6503987380222c9b5e505284bcdee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_92016e1aadc17a61915dbcca7e7594fd8c6503987380222c9b5e505284bcdee6->leave($__internal_92016e1aadc17a61915dbcca7e7594fd8c6503987380222c9b5e505284bcdee6_prof);

        
        $__internal_f6411805f6e7abad90910f2db4be2f9010bbb99002dda723a6d6e654dbd4df9c->leave($__internal_f6411805f6e7abad90910f2db4be2f9010bbb99002dda723a6d6e654dbd4df9c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b02fd9053ca8051f9bbb9648008c3d342730a166fbf1b45f8631002ccdacfd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02fd9053ca8051f9bbb9648008c3d342730a166fbf1b45f8631002ccdacfd4e->enter($__internal_b02fd9053ca8051f9bbb9648008c3d342730a166fbf1b45f8631002ccdacfd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1a1f62997c8dd015e578d6a051105dddf2954b6a3d67ee33ba04975bd75f932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a1f62997c8dd015e578d6a051105dddf2954b6a3d67ee33ba04975bd75f932->enter($__internal_e1a1f62997c8dd015e578d6a051105dddf2954b6a3d67ee33ba04975bd75f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e1a1f62997c8dd015e578d6a051105dddf2954b6a3d67ee33ba04975bd75f932->leave($__internal_e1a1f62997c8dd015e578d6a051105dddf2954b6a3d67ee33ba04975bd75f932_prof);

        
        $__internal_b02fd9053ca8051f9bbb9648008c3d342730a166fbf1b45f8631002ccdacfd4e->leave($__internal_b02fd9053ca8051f9bbb9648008c3d342730a166fbf1b45f8631002ccdacfd4e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d42bdfe9e04eb7a8f50264c6dfd0d79279444984f7647b8c18108773805bf9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d42bdfe9e04eb7a8f50264c6dfd0d79279444984f7647b8c18108773805bf9c->enter($__internal_5d42bdfe9e04eb7a8f50264c6dfd0d79279444984f7647b8c18108773805bf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1381e3da14d895cfe0004b22cc9ecc1908db0b3000d01b011824432c70453757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1381e3da14d895cfe0004b22cc9ecc1908db0b3000d01b011824432c70453757->enter($__internal_1381e3da14d895cfe0004b22cc9ecc1908db0b3000d01b011824432c70453757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1381e3da14d895cfe0004b22cc9ecc1908db0b3000d01b011824432c70453757->leave($__internal_1381e3da14d895cfe0004b22cc9ecc1908db0b3000d01b011824432c70453757_prof);

        
        $__internal_5d42bdfe9e04eb7a8f50264c6dfd0d79279444984f7647b8c18108773805bf9c->leave($__internal_5d42bdfe9e04eb7a8f50264c6dfd0d79279444984f7647b8c18108773805bf9c_prof);

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
