<?php

/* base.html.twig */
class __TwigTemplate_b54c99e1954ad0c9cbdba3a8435bf86bd8330d79e119b51bd063a80239849cc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'body_menu' => array($this, 'block_body_menu'),
            'body_content' => array($this, 'block_body_content'),
            'body_text_title' => array($this, 'block_body_text_title'),
            'body_text_content' => array($this, 'block_body_text_content'),
            'body_content_other' => array($this, 'block_body_content_other'),
            'body_results' => array($this, 'block_body_results'),
            'body_footer' => array($this, 'block_body_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82a409dae747863800b798ccf58c1d24f9d2b83a52291d9ac85ee74c2e48b881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a409dae747863800b798ccf58c1d24f9d2b83a52291d9ac85ee74c2e48b881->enter($__internal_82a409dae747863800b798ccf58c1d24f9d2b83a52291d9ac85ee74c2e48b881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_da21be310adfc088956ae5d548da404d49f555db1174d9ff3bdb03c7ef8e20ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da21be310adfc088956ae5d548da404d49f555db1174d9ff3bdb03c7ef8e20ae->enter($__internal_da21be310adfc088956ae5d548da404d49f555db1174d9ff3bdb03c7ef8e20ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 5
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    </body>
</html>
";
        
        $__internal_82a409dae747863800b798ccf58c1d24f9d2b83a52291d9ac85ee74c2e48b881->leave($__internal_82a409dae747863800b798ccf58c1d24f9d2b83a52291d9ac85ee74c2e48b881_prof);

        
        $__internal_da21be310adfc088956ae5d548da404d49f555db1174d9ff3bdb03c7ef8e20ae->leave($__internal_da21be310adfc088956ae5d548da404d49f555db1174d9ff3bdb03c7ef8e20ae_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ea5e3f9c2ca9ae2c3c610edd7f9cf46c60c20eb329d66a66f4a9f7e7d7df33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea5e3f9c2ca9ae2c3c610edd7f9cf46c60c20eb329d66a66f4a9f7e7d7df33b->enter($__internal_3ea5e3f9c2ca9ae2c3c610edd7f9cf46c60c20eb329d66a66f4a9f7e7d7df33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bf09e39a3fb84d6014a08374619ca6ce65fbe08f78b38ca6d1c1297dbfc9c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf09e39a3fb84d6014a08374619ca6ce65fbe08f78b38ca6d1c1297dbfc9c2c->enter($__internal_4bf09e39a3fb84d6014a08374619ca6ce65fbe08f78b38ca6d1c1297dbfc9c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies";
        
        $__internal_4bf09e39a3fb84d6014a08374619ca6ce65fbe08f78b38ca6d1c1297dbfc9c2c->leave($__internal_4bf09e39a3fb84d6014a08374619ca6ce65fbe08f78b38ca6d1c1297dbfc9c2c_prof);

        
        $__internal_3ea5e3f9c2ca9ae2c3c610edd7f9cf46c60c20eb329d66a66f4a9f7e7d7df33b->leave($__internal_3ea5e3f9c2ca9ae2c3c610edd7f9cf46c60c20eb329d66a66f4a9f7e7d7df33b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b18fa031724a9faa162becb15b9d483444654d3a859286fa2b6b1c460e6acb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18fa031724a9faa162becb15b9d483444654d3a859286fa2b6b1c460e6acb9a->enter($__internal_b18fa031724a9faa162becb15b9d483444654d3a859286fa2b6b1c460e6acb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_85e70e0f2a9cd5eedd2fb89f4aef778f5305281cb946fc2c0b6fab516f9bea88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e70e0f2a9cd5eedd2fb89f4aef778f5305281cb946fc2c0b6fab516f9bea88->enter($__internal_85e70e0f2a9cd5eedd2fb89f4aef778f5305281cb946fc2c0b6fab516f9bea88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cover.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_85e70e0f2a9cd5eedd2fb89f4aef778f5305281cb946fc2c0b6fab516f9bea88->leave($__internal_85e70e0f2a9cd5eedd2fb89f4aef778f5305281cb946fc2c0b6fab516f9bea88_prof);

        
        $__internal_b18fa031724a9faa162becb15b9d483444654d3a859286fa2b6b1c460e6acb9a->leave($__internal_b18fa031724a9faa162becb15b9d483444654d3a859286fa2b6b1c460e6acb9a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab9326815c9137a9cdf34b6c822064578c8919ca6f5f69a5aa2756b8fc8b43fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9326815c9137a9cdf34b6c822064578c8919ca6f5f69a5aa2756b8fc8b43fa->enter($__internal_ab9326815c9137a9cdf34b6c822064578c8919ca6f5f69a5aa2756b8fc8b43fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3aed7a48dd6972cffcf530abdaf85dbfb940eee74c5075451aac106ac1ed6192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aed7a48dd6972cffcf530abdaf85dbfb940eee74c5075451aac106ac1ed6192->enter($__internal_3aed7a48dd6972cffcf530abdaf85dbfb940eee74c5075451aac106ac1ed6192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "\t\t<div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        
";
        // line 22
        $this->displayBlock('body_menu', $context, $blocks);
        // line 36
        echo "<div class=\"cover-container\">
";
        // line 37
        $this->displayBlock('body_content', $context, $blocks);
        // line 46
        $this->displayBlock('body_footer', $context, $blocks);
        // line 53
        echo "        </div>

      </div>

    </div>

";
        
        $__internal_3aed7a48dd6972cffcf530abdaf85dbfb940eee74c5075451aac106ac1ed6192->leave($__internal_3aed7a48dd6972cffcf530abdaf85dbfb940eee74c5075451aac106ac1ed6192_prof);

        
        $__internal_ab9326815c9137a9cdf34b6c822064578c8919ca6f5f69a5aa2756b8fc8b43fa->leave($__internal_ab9326815c9137a9cdf34b6c822064578c8919ca6f5f69a5aa2756b8fc8b43fa_prof);

    }

    // line 22
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_86fe03dfd99848692a041dfe36f78a82265b5ab196adb37dcf292265d56c5556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fe03dfd99848692a041dfe36f78a82265b5ab196adb37dcf292265d56c5556->enter($__internal_86fe03dfd99848692a041dfe36f78a82265b5ab196adb37dcf292265d56c5556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_574de6a19773be19c8b52de11bc48a416aae00a366034d62f1fb963af3e1c706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574de6a19773be19c8b52de11bc48a416aae00a366034d62f1fb963af3e1c706->enter($__internal_574de6a19773be19c8b52de11bc48a416aae00a366034d62f1fb963af3e1c706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 23
        echo "          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Movie assignment</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"";
        // line 28
        if ((is_string($__internal_8bf3774a7b1830ae165cff48234d4aeb67205606e46a6d0767d6bc68a9d4c1a1 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_019c3bad8fc955e7b91001405e9e1084633ebe0c366f2bddb2ff4b8f84f54311 = "homepage") && ('' === $__internal_019c3bad8fc955e7b91001405e9e1084633ebe0c366f2bddb2ff4b8f84f54311 || 0 === strpos($__internal_8bf3774a7b1830ae165cff48234d4aeb67205606e46a6d0767d6bc68a9d4c1a1, $__internal_019c3bad8fc955e7b91001405e9e1084633ebe0c366f2bddb2ff4b8f84f54311)))) {
            echo "active";
        }
        echo "\"><a href=\"../../\">Home</a></li>
                  <li class=\"";
        // line 29
        if ((is_string($__internal_659fd69df1bf34a8fa3c335d1169e2daf4c1b001444a890dd612c932cf9202a1 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d2e587ac5ec4b21f0781948dda0332dcfd26c6f75e4484a1c45486dff1e99382 = "lucky") && ('' === $__internal_d2e587ac5ec4b21f0781948dda0332dcfd26c6f75e4484a1c45486dff1e99382 || 0 === strpos($__internal_659fd69df1bf34a8fa3c335d1169e2daf4c1b001444a890dd612c932cf9202a1, $__internal_d2e587ac5ec4b21f0781948dda0332dcfd26c6f75e4484a1c45486dff1e99382)))) {
            echo "active";
        }
        echo "\"><a href=\"../../lucky/number\">Lucky number</a></li>
                  <li class=\"";
        // line 30
        if ((is_string($__internal_e290d20c7a05737ad61876a4d401241723e08dc1c388f05b9a3ed9bb5cd0ee7f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_25ca521ea1179ef480d95bb3d499397f978e442c108be9fc827166338b228519 = "search") && ('' === $__internal_25ca521ea1179ef480d95bb3d499397f978e442c108be9fc827166338b228519 || 0 === strpos($__internal_e290d20c7a05737ad61876a4d401241723e08dc1c388f05b9a3ed9bb5cd0ee7f, $__internal_25ca521ea1179ef480d95bb3d499397f978e442c108be9fc827166338b228519)))) {
            echo "active";
        }
        echo "\"><a href=\"../../search/searchpage\">Search</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  ";
        
        $__internal_574de6a19773be19c8b52de11bc48a416aae00a366034d62f1fb963af3e1c706->leave($__internal_574de6a19773be19c8b52de11bc48a416aae00a366034d62f1fb963af3e1c706_prof);

        
        $__internal_86fe03dfd99848692a041dfe36f78a82265b5ab196adb37dcf292265d56c5556->leave($__internal_86fe03dfd99848692a041dfe36f78a82265b5ab196adb37dcf292265d56c5556_prof);

    }

    // line 37
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_28689db186ac3edfa54ef5d7cd6541b57ff549f6fffbbe6b09c912c71827d8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28689db186ac3edfa54ef5d7cd6541b57ff549f6fffbbe6b09c912c71827d8e9->enter($__internal_28689db186ac3edfa54ef5d7cd6541b57ff549f6fffbbe6b09c912c71827d8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_f7555a8a1f148227b1cfe2fd00e6b9de781cea6ef98751337fe016577ac53104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7555a8a1f148227b1cfe2fd00e6b9de781cea6ef98751337fe016577ac53104->enter($__internal_f7555a8a1f148227b1cfe2fd00e6b9de781cea6ef98751337fe016577ac53104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 38
        echo "          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">";
        // line 39
        $this->displayBlock('body_text_title', $context, $blocks);
        echo "</h1>
            <p class=\"lead\">";
        // line 40
        $this->displayBlock('body_text_content', $context, $blocks);
        echo "</p>
              ";
        // line 41
        $this->displayBlock('body_content_other', $context, $blocks);
        // line 42
        echo "          </div>
    ";
        // line 43
        $this->displayBlock('body_results', $context, $blocks);
        
        $__internal_f7555a8a1f148227b1cfe2fd00e6b9de781cea6ef98751337fe016577ac53104->leave($__internal_f7555a8a1f148227b1cfe2fd00e6b9de781cea6ef98751337fe016577ac53104_prof);

        
        $__internal_28689db186ac3edfa54ef5d7cd6541b57ff549f6fffbbe6b09c912c71827d8e9->leave($__internal_28689db186ac3edfa54ef5d7cd6541b57ff549f6fffbbe6b09c912c71827d8e9_prof);

    }

    // line 39
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_7da99b921005ccd8e5d4d86a181364f2665527203dd7512a5aee24b93a80891c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da99b921005ccd8e5d4d86a181364f2665527203dd7512a5aee24b93a80891c->enter($__internal_7da99b921005ccd8e5d4d86a181364f2665527203dd7512a5aee24b93a80891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_86482787e73b4846131130178629d55221695558b26015e19f99b7a72f4fe750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86482787e73b4846131130178629d55221695558b26015e19f99b7a72f4fe750->enter($__internal_86482787e73b4846131130178629d55221695558b26015e19f99b7a72f4fe750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        
        $__internal_86482787e73b4846131130178629d55221695558b26015e19f99b7a72f4fe750->leave($__internal_86482787e73b4846131130178629d55221695558b26015e19f99b7a72f4fe750_prof);

        
        $__internal_7da99b921005ccd8e5d4d86a181364f2665527203dd7512a5aee24b93a80891c->leave($__internal_7da99b921005ccd8e5d4d86a181364f2665527203dd7512a5aee24b93a80891c_prof);

    }

    // line 40
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_502b7d1c190c7d87361cc3401351396aa12fea3886a10c3f60c7591f65a5a302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502b7d1c190c7d87361cc3401351396aa12fea3886a10c3f60c7591f65a5a302->enter($__internal_502b7d1c190c7d87361cc3401351396aa12fea3886a10c3f60c7591f65a5a302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_b874d0e0b2914c533effaebb748898a1466ddf87eb0884434b70a95bc18fb8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b874d0e0b2914c533effaebb748898a1466ddf87eb0884434b70a95bc18fb8bf->enter($__internal_b874d0e0b2914c533effaebb748898a1466ddf87eb0884434b70a95bc18fb8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        
        $__internal_b874d0e0b2914c533effaebb748898a1466ddf87eb0884434b70a95bc18fb8bf->leave($__internal_b874d0e0b2914c533effaebb748898a1466ddf87eb0884434b70a95bc18fb8bf_prof);

        
        $__internal_502b7d1c190c7d87361cc3401351396aa12fea3886a10c3f60c7591f65a5a302->leave($__internal_502b7d1c190c7d87361cc3401351396aa12fea3886a10c3f60c7591f65a5a302_prof);

    }

    // line 41
    public function block_body_content_other($context, array $blocks = array())
    {
        $__internal_8ae23fb009c2bf76be147c678e15a66ff6033d3b8dd5fab4e5888f1e54320051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae23fb009c2bf76be147c678e15a66ff6033d3b8dd5fab4e5888f1e54320051->enter($__internal_8ae23fb009c2bf76be147c678e15a66ff6033d3b8dd5fab4e5888f1e54320051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        $__internal_c842b6e6e20e9bbe0a4c83815267b28b28ef69034498dcaa18cc420c0572ea49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c842b6e6e20e9bbe0a4c83815267b28b28ef69034498dcaa18cc420c0572ea49->enter($__internal_c842b6e6e20e9bbe0a4c83815267b28b28ef69034498dcaa18cc420c0572ea49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        
        $__internal_c842b6e6e20e9bbe0a4c83815267b28b28ef69034498dcaa18cc420c0572ea49->leave($__internal_c842b6e6e20e9bbe0a4c83815267b28b28ef69034498dcaa18cc420c0572ea49_prof);

        
        $__internal_8ae23fb009c2bf76be147c678e15a66ff6033d3b8dd5fab4e5888f1e54320051->leave($__internal_8ae23fb009c2bf76be147c678e15a66ff6033d3b8dd5fab4e5888f1e54320051_prof);

    }

    // line 43
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_349bfdd3c39c8748fa5177d43d7dc925e59407339fc00aa636a2e39256f1e5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349bfdd3c39c8748fa5177d43d7dc925e59407339fc00aa636a2e39256f1e5db->enter($__internal_349bfdd3c39c8748fa5177d43d7dc925e59407339fc00aa636a2e39256f1e5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_d80dcd105a51886b03fe5f8a912bf5f609de0ac36a169a69dbb5c4ce994c35d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80dcd105a51886b03fe5f8a912bf5f609de0ac36a169a69dbb5c4ce994c35d3->enter($__internal_d80dcd105a51886b03fe5f8a912bf5f609de0ac36a169a69dbb5c4ce994c35d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 44
        echo "    ";
        
        $__internal_d80dcd105a51886b03fe5f8a912bf5f609de0ac36a169a69dbb5c4ce994c35d3->leave($__internal_d80dcd105a51886b03fe5f8a912bf5f609de0ac36a169a69dbb5c4ce994c35d3_prof);

        
        $__internal_349bfdd3c39c8748fa5177d43d7dc925e59407339fc00aa636a2e39256f1e5db->leave($__internal_349bfdd3c39c8748fa5177d43d7dc925e59407339fc00aa636a2e39256f1e5db_prof);

    }

    // line 46
    public function block_body_footer($context, array $blocks = array())
    {
        $__internal_d03e725075eba0ccbf9b4657b263ece68819aa823e386180c1fcfb6abb98fa0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03e725075eba0ccbf9b4657b263ece68819aa823e386180c1fcfb6abb98fa0a->enter($__internal_d03e725075eba0ccbf9b4657b263ece68819aa823e386180c1fcfb6abb98fa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        $__internal_000d1f9319007b277eb73d6570d1bb6779a5674705b3c2a356f3622d78293440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000d1f9319007b277eb73d6570d1bb6779a5674705b3c2a356f3622d78293440->enter($__internal_000d1f9319007b277eb73d6570d1bb6779a5674705b3c2a356f3622d78293440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        // line 47
        echo "          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
";
        
        $__internal_000d1f9319007b277eb73d6570d1bb6779a5674705b3c2a356f3622d78293440->leave($__internal_000d1f9319007b277eb73d6570d1bb6779a5674705b3c2a356f3622d78293440_prof);

        
        $__internal_d03e725075eba0ccbf9b4657b263ece68819aa823e386180c1fcfb6abb98fa0a->leave($__internal_d03e725075eba0ccbf9b4657b263ece68819aa823e386180c1fcfb6abb98fa0a_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_910acfee59c25b76f2d9b4cff300e03bbb73a23c31e2b1d249f15ba228bf6c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910acfee59c25b76f2d9b4cff300e03bbb73a23c31e2b1d249f15ba228bf6c1b->enter($__internal_910acfee59c25b76f2d9b4cff300e03bbb73a23c31e2b1d249f15ba228bf6c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1a6b420994b70f0e6e717d0f2b102aad2bcc8035d55b7a0dec2912882dcb6265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6b420994b70f0e6e717d0f2b102aad2bcc8035d55b7a0dec2912882dcb6265->enter($__internal_1a6b420994b70f0e6e717d0f2b102aad2bcc8035d55b7a0dec2912882dcb6265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
        ";
        
        $__internal_1a6b420994b70f0e6e717d0f2b102aad2bcc8035d55b7a0dec2912882dcb6265->leave($__internal_1a6b420994b70f0e6e717d0f2b102aad2bcc8035d55b7a0dec2912882dcb6265_prof);

        
        $__internal_910acfee59c25b76f2d9b4cff300e03bbb73a23c31e2b1d249f15ba228bf6c1b->leave($__internal_910acfee59c25b76f2d9b4cff300e03bbb73a23c31e2b1d249f15ba228bf6c1b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 61,  342 => 60,  327 => 47,  318 => 46,  308 => 44,  299 => 43,  282 => 41,  265 => 40,  248 => 39,  238 => 43,  235 => 42,  233 => 41,  229 => 40,  225 => 39,  222 => 38,  213 => 37,  195 => 30,  189 => 29,  183 => 28,  176 => 23,  167 => 22,  151 => 53,  149 => 46,  147 => 37,  144 => 36,  142 => 22,  135 => 17,  126 => 16,  114 => 11,  110 => 10,  106 => 9,  101 => 8,  92 => 7,  74 => 6,  62 => 70,  59 => 60,  57 => 16,  50 => 13,  48 => 7,  44 => 6,  41 => 5,  36 => 1,);
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
        {# THIS IS THE MASTER TEMPLATE #}
        <meta charset=\"utf-8\">
        <title>{% block title %}Movies{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/cover.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
\t\t<div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        
{% block body_menu %}
          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Movie assignment</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'homepage' %}active{% endif %}\"><a href=\"../../\">Home</a></li>
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'lucky' %}active{% endif %}\"><a href=\"../../lucky/number\">Lucky number</a></li>
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'search' %}active{% endif %}\"><a href=\"../../search/searchpage\">Search</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  {% endblock %}{# end of body_menu block #}
<div class=\"cover-container\">
{% block body_content %}
          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">{% block body_text_title %}{% endblock %}</h1>
            <p class=\"lead\">{% block body_text_content %}{% endblock %}</p>
              {% block body_content_other %}{% endblock %}
          </div>
    {% block body_results %}
    {% endblock %}
{% endblock %}{# end of body_content block #}
{% block body_footer %}
          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
{% endblock %}{# end of body_footer block #}
        </div>

      </div>

    </div>

{% endblock %}{# end of body block #}
        {% block javascripts %}
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\base.html.twig");
    }
}
