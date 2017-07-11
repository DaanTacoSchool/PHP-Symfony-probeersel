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
        $__internal_68522077f870c4aafdbe62f3e1f460b73a4dcb9bb02a665f5c1f1ac56b3b6825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68522077f870c4aafdbe62f3e1f460b73a4dcb9bb02a665f5c1f1ac56b3b6825->enter($__internal_68522077f870c4aafdbe62f3e1f460b73a4dcb9bb02a665f5c1f1ac56b3b6825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7d2945ff22ea4729aac57d73ec38e04a4ccfe328b8b4301e47759f7d14afe6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2945ff22ea4729aac57d73ec38e04a4ccfe328b8b4301e47759f7d14afe6ef->enter($__internal_7d2945ff22ea4729aac57d73ec38e04a4ccfe328b8b4301e47759f7d14afe6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_68522077f870c4aafdbe62f3e1f460b73a4dcb9bb02a665f5c1f1ac56b3b6825->leave($__internal_68522077f870c4aafdbe62f3e1f460b73a4dcb9bb02a665f5c1f1ac56b3b6825_prof);

        
        $__internal_7d2945ff22ea4729aac57d73ec38e04a4ccfe328b8b4301e47759f7d14afe6ef->leave($__internal_7d2945ff22ea4729aac57d73ec38e04a4ccfe328b8b4301e47759f7d14afe6ef_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d82241bf274067dae888ff45b8f8a7b195e65d6591fa64081305911c7f5c514f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82241bf274067dae888ff45b8f8a7b195e65d6591fa64081305911c7f5c514f->enter($__internal_d82241bf274067dae888ff45b8f8a7b195e65d6591fa64081305911c7f5c514f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5178d25b555ab05553f12b45875a0f55596f4d04c5ea69c74dd58b44eaa142c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5178d25b555ab05553f12b45875a0f55596f4d04c5ea69c74dd58b44eaa142c->enter($__internal_c5178d25b555ab05553f12b45875a0f55596f4d04c5ea69c74dd58b44eaa142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies";
        
        $__internal_c5178d25b555ab05553f12b45875a0f55596f4d04c5ea69c74dd58b44eaa142c->leave($__internal_c5178d25b555ab05553f12b45875a0f55596f4d04c5ea69c74dd58b44eaa142c_prof);

        
        $__internal_d82241bf274067dae888ff45b8f8a7b195e65d6591fa64081305911c7f5c514f->leave($__internal_d82241bf274067dae888ff45b8f8a7b195e65d6591fa64081305911c7f5c514f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5be92d689fbe70e2b161619a829d07e35514e91e2ae62041bfa3fb50826bc503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be92d689fbe70e2b161619a829d07e35514e91e2ae62041bfa3fb50826bc503->enter($__internal_5be92d689fbe70e2b161619a829d07e35514e91e2ae62041bfa3fb50826bc503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1e86c1d361158c64be4f215111264783489cea9cdd3a813b368adfb398535de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e86c1d361158c64be4f215111264783489cea9cdd3a813b368adfb398535de9->enter($__internal_1e86c1d361158c64be4f215111264783489cea9cdd3a813b368adfb398535de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1e86c1d361158c64be4f215111264783489cea9cdd3a813b368adfb398535de9->leave($__internal_1e86c1d361158c64be4f215111264783489cea9cdd3a813b368adfb398535de9_prof);

        
        $__internal_5be92d689fbe70e2b161619a829d07e35514e91e2ae62041bfa3fb50826bc503->leave($__internal_5be92d689fbe70e2b161619a829d07e35514e91e2ae62041bfa3fb50826bc503_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad553f7a99723dddaf4d138f3dcfa1a9bf3155b40a6f71ac5016bf14c7f98c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad553f7a99723dddaf4d138f3dcfa1a9bf3155b40a6f71ac5016bf14c7f98c76->enter($__internal_ad553f7a99723dddaf4d138f3dcfa1a9bf3155b40a6f71ac5016bf14c7f98c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9468ba7c98bec21d2c05991bb1d5339739e9bd776673426942cecbba1a9334d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9468ba7c98bec21d2c05991bb1d5339739e9bd776673426942cecbba1a9334d3->enter($__internal_9468ba7c98bec21d2c05991bb1d5339739e9bd776673426942cecbba1a9334d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9468ba7c98bec21d2c05991bb1d5339739e9bd776673426942cecbba1a9334d3->leave($__internal_9468ba7c98bec21d2c05991bb1d5339739e9bd776673426942cecbba1a9334d3_prof);

        
        $__internal_ad553f7a99723dddaf4d138f3dcfa1a9bf3155b40a6f71ac5016bf14c7f98c76->leave($__internal_ad553f7a99723dddaf4d138f3dcfa1a9bf3155b40a6f71ac5016bf14c7f98c76_prof);

    }

    // line 22
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_5ba901dcde541ce70e79437e2e7de25e8eb3f7a8e6ac944d706982a720e3084b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba901dcde541ce70e79437e2e7de25e8eb3f7a8e6ac944d706982a720e3084b->enter($__internal_5ba901dcde541ce70e79437e2e7de25e8eb3f7a8e6ac944d706982a720e3084b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_b5d91a8e60b1838f052b3b833cc6007759ebfddffe1125e53c26a98aa1e84126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d91a8e60b1838f052b3b833cc6007759ebfddffe1125e53c26a98aa1e84126->enter($__internal_b5d91a8e60b1838f052b3b833cc6007759ebfddffe1125e53c26a98aa1e84126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 23
        echo "          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Movie assignment</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"";
        // line 28
        if ((is_string($__internal_0d7a974557101a755ac79bb4e52aa9439588c86cf3583003a7fd1fd776aa99c0 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_faa8e2edb58f0727caf58de763bc7703306c498ddfb054955e481e2debd2c961 = "homepage") && ('' === $__internal_faa8e2edb58f0727caf58de763bc7703306c498ddfb054955e481e2debd2c961 || 0 === strpos($__internal_0d7a974557101a755ac79bb4e52aa9439588c86cf3583003a7fd1fd776aa99c0, $__internal_faa8e2edb58f0727caf58de763bc7703306c498ddfb054955e481e2debd2c961)))) {
            echo "active";
        }
        echo "\"><a href=\"/\">Home</a></li>
                  <li class=\"";
        // line 29
        if ((is_string($__internal_379d66680f52869d78160c0b9fac812455a13b10a2277db15d4362dd62faa484 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_81d30aa78ee3f67435254cbfc21631bd01852ec0103c15a9f0a0bc6176ef4e9d = "lucky") && ('' === $__internal_81d30aa78ee3f67435254cbfc21631bd01852ec0103c15a9f0a0bc6176ef4e9d || 0 === strpos($__internal_379d66680f52869d78160c0b9fac812455a13b10a2277db15d4362dd62faa484, $__internal_81d30aa78ee3f67435254cbfc21631bd01852ec0103c15a9f0a0bc6176ef4e9d)))) {
            echo "active";
        }
        echo "\"><a href=\"/lucky/number\">Lucky number</a></li>
                  <li class=\"";
        // line 30
        if ((is_string($__internal_6142564d93bc8592df86d7cab783caef2d57361bb512fe7407022529829374a7 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8db8dc9630606b3425532b7c5f376b2f141b975253389e1d74f4a57a466e82ef = "search") && ('' === $__internal_8db8dc9630606b3425532b7c5f376b2f141b975253389e1d74f4a57a466e82ef || 0 === strpos($__internal_6142564d93bc8592df86d7cab783caef2d57361bb512fe7407022529829374a7, $__internal_8db8dc9630606b3425532b7c5f376b2f141b975253389e1d74f4a57a466e82ef)))) {
            echo "active";
        }
        echo "\"><a href=\"/search/searchpage\">Search</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  ";
        
        $__internal_b5d91a8e60b1838f052b3b833cc6007759ebfddffe1125e53c26a98aa1e84126->leave($__internal_b5d91a8e60b1838f052b3b833cc6007759ebfddffe1125e53c26a98aa1e84126_prof);

        
        $__internal_5ba901dcde541ce70e79437e2e7de25e8eb3f7a8e6ac944d706982a720e3084b->leave($__internal_5ba901dcde541ce70e79437e2e7de25e8eb3f7a8e6ac944d706982a720e3084b_prof);

    }

    // line 37
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_88a6cce2b05f2dafd8592644f283cafe9f95174635c95ee12318c852e57d9b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a6cce2b05f2dafd8592644f283cafe9f95174635c95ee12318c852e57d9b48->enter($__internal_88a6cce2b05f2dafd8592644f283cafe9f95174635c95ee12318c852e57d9b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_9216fbdaee898bbc6244ed634aab0266419e6ca0f777a44cf02968049753ec9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9216fbdaee898bbc6244ed634aab0266419e6ca0f777a44cf02968049753ec9e->enter($__internal_9216fbdaee898bbc6244ed634aab0266419e6ca0f777a44cf02968049753ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

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
        
        $__internal_9216fbdaee898bbc6244ed634aab0266419e6ca0f777a44cf02968049753ec9e->leave($__internal_9216fbdaee898bbc6244ed634aab0266419e6ca0f777a44cf02968049753ec9e_prof);

        
        $__internal_88a6cce2b05f2dafd8592644f283cafe9f95174635c95ee12318c852e57d9b48->leave($__internal_88a6cce2b05f2dafd8592644f283cafe9f95174635c95ee12318c852e57d9b48_prof);

    }

    // line 39
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_deea72def4f5453a538061c3c03227d569ab0ec4fa7470e73393408357ceb8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deea72def4f5453a538061c3c03227d569ab0ec4fa7470e73393408357ceb8ed->enter($__internal_deea72def4f5453a538061c3c03227d569ab0ec4fa7470e73393408357ceb8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_94506b88c3ac97e11c1d75091b97abac07dfd93077f53ebbe6654ccb4cdaeb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94506b88c3ac97e11c1d75091b97abac07dfd93077f53ebbe6654ccb4cdaeb58->enter($__internal_94506b88c3ac97e11c1d75091b97abac07dfd93077f53ebbe6654ccb4cdaeb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        
        $__internal_94506b88c3ac97e11c1d75091b97abac07dfd93077f53ebbe6654ccb4cdaeb58->leave($__internal_94506b88c3ac97e11c1d75091b97abac07dfd93077f53ebbe6654ccb4cdaeb58_prof);

        
        $__internal_deea72def4f5453a538061c3c03227d569ab0ec4fa7470e73393408357ceb8ed->leave($__internal_deea72def4f5453a538061c3c03227d569ab0ec4fa7470e73393408357ceb8ed_prof);

    }

    // line 40
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_a4b53dd4597c9d5e4cb5914b5784624e4eefac6b849a7567d55cd5f4edf75cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b53dd4597c9d5e4cb5914b5784624e4eefac6b849a7567d55cd5f4edf75cf5->enter($__internal_a4b53dd4597c9d5e4cb5914b5784624e4eefac6b849a7567d55cd5f4edf75cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_9c942eb5825f897eae94247f57b3ed266a81d4f5f6416b085383d92a3e95fa26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c942eb5825f897eae94247f57b3ed266a81d4f5f6416b085383d92a3e95fa26->enter($__internal_9c942eb5825f897eae94247f57b3ed266a81d4f5f6416b085383d92a3e95fa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        
        $__internal_9c942eb5825f897eae94247f57b3ed266a81d4f5f6416b085383d92a3e95fa26->leave($__internal_9c942eb5825f897eae94247f57b3ed266a81d4f5f6416b085383d92a3e95fa26_prof);

        
        $__internal_a4b53dd4597c9d5e4cb5914b5784624e4eefac6b849a7567d55cd5f4edf75cf5->leave($__internal_a4b53dd4597c9d5e4cb5914b5784624e4eefac6b849a7567d55cd5f4edf75cf5_prof);

    }

    // line 41
    public function block_body_content_other($context, array $blocks = array())
    {
        $__internal_43f4ccaf0c73d5eb43e1bb97b7d1eacd33307f8dab9b80a7c85e701fe4ff0416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f4ccaf0c73d5eb43e1bb97b7d1eacd33307f8dab9b80a7c85e701fe4ff0416->enter($__internal_43f4ccaf0c73d5eb43e1bb97b7d1eacd33307f8dab9b80a7c85e701fe4ff0416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        $__internal_3bbb6f76a1c95748e566f3f2132ddd88ad481007b39723dac9883fa1d3f9c757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbb6f76a1c95748e566f3f2132ddd88ad481007b39723dac9883fa1d3f9c757->enter($__internal_3bbb6f76a1c95748e566f3f2132ddd88ad481007b39723dac9883fa1d3f9c757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        
        $__internal_3bbb6f76a1c95748e566f3f2132ddd88ad481007b39723dac9883fa1d3f9c757->leave($__internal_3bbb6f76a1c95748e566f3f2132ddd88ad481007b39723dac9883fa1d3f9c757_prof);

        
        $__internal_43f4ccaf0c73d5eb43e1bb97b7d1eacd33307f8dab9b80a7c85e701fe4ff0416->leave($__internal_43f4ccaf0c73d5eb43e1bb97b7d1eacd33307f8dab9b80a7c85e701fe4ff0416_prof);

    }

    // line 43
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_e28b570549d236c03c8ddef0996ef45a106428ca5a2cfcf594b228d52cde9559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28b570549d236c03c8ddef0996ef45a106428ca5a2cfcf594b228d52cde9559->enter($__internal_e28b570549d236c03c8ddef0996ef45a106428ca5a2cfcf594b228d52cde9559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_ce6bcb4cc295c7b873b360c17b05ffe6ad99191146c8e6947f81f05099e21411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6bcb4cc295c7b873b360c17b05ffe6ad99191146c8e6947f81f05099e21411->enter($__internal_ce6bcb4cc295c7b873b360c17b05ffe6ad99191146c8e6947f81f05099e21411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 44
        echo "    ";
        
        $__internal_ce6bcb4cc295c7b873b360c17b05ffe6ad99191146c8e6947f81f05099e21411->leave($__internal_ce6bcb4cc295c7b873b360c17b05ffe6ad99191146c8e6947f81f05099e21411_prof);

        
        $__internal_e28b570549d236c03c8ddef0996ef45a106428ca5a2cfcf594b228d52cde9559->leave($__internal_e28b570549d236c03c8ddef0996ef45a106428ca5a2cfcf594b228d52cde9559_prof);

    }

    // line 46
    public function block_body_footer($context, array $blocks = array())
    {
        $__internal_620a79b52e39c6115099a2f9bd21b885d20978f7f19b0eabc7bd7eb2621aa21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620a79b52e39c6115099a2f9bd21b885d20978f7f19b0eabc7bd7eb2621aa21c->enter($__internal_620a79b52e39c6115099a2f9bd21b885d20978f7f19b0eabc7bd7eb2621aa21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        $__internal_36d52643a059190e36538981d1900c32d6e6c9db0e046cde55511e9aad4ee420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d52643a059190e36538981d1900c32d6e6c9db0e046cde55511e9aad4ee420->enter($__internal_36d52643a059190e36538981d1900c32d6e6c9db0e046cde55511e9aad4ee420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        // line 47
        echo "          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
";
        
        $__internal_36d52643a059190e36538981d1900c32d6e6c9db0e046cde55511e9aad4ee420->leave($__internal_36d52643a059190e36538981d1900c32d6e6c9db0e046cde55511e9aad4ee420_prof);

        
        $__internal_620a79b52e39c6115099a2f9bd21b885d20978f7f19b0eabc7bd7eb2621aa21c->leave($__internal_620a79b52e39c6115099a2f9bd21b885d20978f7f19b0eabc7bd7eb2621aa21c_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5e194dbbffc8c61e87119d969b361dc998bc4177befa7e83e49d3335fb920f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e194dbbffc8c61e87119d969b361dc998bc4177befa7e83e49d3335fb920f4->enter($__internal_d5e194dbbffc8c61e87119d969b361dc998bc4177befa7e83e49d3335fb920f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d9f217b6f0b2174c4802981251651d765d015860ac1e4e9548f07bfb9f4e9666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f217b6f0b2174c4802981251651d765d015860ac1e4e9548f07bfb9f4e9666->enter($__internal_d9f217b6f0b2174c4802981251651d765d015860ac1e4e9548f07bfb9f4e9666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d9f217b6f0b2174c4802981251651d765d015860ac1e4e9548f07bfb9f4e9666->leave($__internal_d9f217b6f0b2174c4802981251651d765d015860ac1e4e9548f07bfb9f4e9666_prof);

        
        $__internal_d5e194dbbffc8c61e87119d969b361dc998bc4177befa7e83e49d3335fb920f4->leave($__internal_d5e194dbbffc8c61e87119d969b361dc998bc4177befa7e83e49d3335fb920f4_prof);

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
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'homepage' %}active{% endif %}\"><a href=\"/\">Home</a></li>
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'lucky' %}active{% endif %}\"><a href=\"/lucky/number\">Lucky number</a></li>
                  <li class=\"{% if app.request.attributes.get('_route') starts with 'search' %}active{% endif %}\"><a href=\"/search/searchpage\">Search</a></li>
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
