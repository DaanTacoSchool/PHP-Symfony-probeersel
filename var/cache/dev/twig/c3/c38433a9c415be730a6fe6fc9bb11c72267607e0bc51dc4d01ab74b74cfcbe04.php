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
        $__internal_2753c924b63b2f760ed9fbfb053b69a39e11c83c1e556a2d4dfc34dda90d8415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2753c924b63b2f760ed9fbfb053b69a39e11c83c1e556a2d4dfc34dda90d8415->enter($__internal_2753c924b63b2f760ed9fbfb053b69a39e11c83c1e556a2d4dfc34dda90d8415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3d7577120c3cb229df08d99152813fd68e269970560d19ff7a6d5468c29e164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7577120c3cb229df08d99152813fd68e269970560d19ff7a6d5468c29e164d->enter($__internal_3d7577120c3cb229df08d99152813fd68e269970560d19ff7a6d5468c29e164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 69
        echo "    </body>
</html>
";
        
        $__internal_2753c924b63b2f760ed9fbfb053b69a39e11c83c1e556a2d4dfc34dda90d8415->leave($__internal_2753c924b63b2f760ed9fbfb053b69a39e11c83c1e556a2d4dfc34dda90d8415_prof);

        
        $__internal_3d7577120c3cb229df08d99152813fd68e269970560d19ff7a6d5468c29e164d->leave($__internal_3d7577120c3cb229df08d99152813fd68e269970560d19ff7a6d5468c29e164d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8231a1eedde2250d70e0921c107846d9826f44c1672a4298a5648dc84842d438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8231a1eedde2250d70e0921c107846d9826f44c1672a4298a5648dc84842d438->enter($__internal_8231a1eedde2250d70e0921c107846d9826f44c1672a4298a5648dc84842d438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_850186998a78c38df3e087f5d5f0de6eb2fef78d611a58444049dbe1f7e93483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850186998a78c38df3e087f5d5f0de6eb2fef78d611a58444049dbe1f7e93483->enter($__internal_850186998a78c38df3e087f5d5f0de6eb2fef78d611a58444049dbe1f7e93483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Movies";
        
        $__internal_850186998a78c38df3e087f5d5f0de6eb2fef78d611a58444049dbe1f7e93483->leave($__internal_850186998a78c38df3e087f5d5f0de6eb2fef78d611a58444049dbe1f7e93483_prof);

        
        $__internal_8231a1eedde2250d70e0921c107846d9826f44c1672a4298a5648dc84842d438->leave($__internal_8231a1eedde2250d70e0921c107846d9826f44c1672a4298a5648dc84842d438_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd7f9476fbefe813807785a65bdc2b9314c66ad87b8d71eafc96cfc03c269671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7f9476fbefe813807785a65bdc2b9314c66ad87b8d71eafc96cfc03c269671->enter($__internal_dd7f9476fbefe813807785a65bdc2b9314c66ad87b8d71eafc96cfc03c269671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_253c215775680bed0c0b872b7a220b02e263567abcced8d8d8c24e8bf8ff57fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253c215775680bed0c0b872b7a220b02e263567abcced8d8d8c24e8bf8ff57fd->enter($__internal_253c215775680bed0c0b872b7a220b02e263567abcced8d8d8c24e8bf8ff57fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_253c215775680bed0c0b872b7a220b02e263567abcced8d8d8c24e8bf8ff57fd->leave($__internal_253c215775680bed0c0b872b7a220b02e263567abcced8d8d8c24e8bf8ff57fd_prof);

        
        $__internal_dd7f9476fbefe813807785a65bdc2b9314c66ad87b8d71eafc96cfc03c269671->leave($__internal_dd7f9476fbefe813807785a65bdc2b9314c66ad87b8d71eafc96cfc03c269671_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5bf071b4aaa395436b01faa94c053419a1419706a695853b65713ef3374af12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bf071b4aaa395436b01faa94c053419a1419706a695853b65713ef3374af12->enter($__internal_a5bf071b4aaa395436b01faa94c053419a1419706a695853b65713ef3374af12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_019c0d4ab3a3a884eef66d0593402b48970d35ed4721a7571791cc9f18e1f465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019c0d4ab3a3a884eef66d0593402b48970d35ed4721a7571791cc9f18e1f465->enter($__internal_019c0d4ab3a3a884eef66d0593402b48970d35ed4721a7571791cc9f18e1f465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_019c0d4ab3a3a884eef66d0593402b48970d35ed4721a7571791cc9f18e1f465->leave($__internal_019c0d4ab3a3a884eef66d0593402b48970d35ed4721a7571791cc9f18e1f465_prof);

        
        $__internal_a5bf071b4aaa395436b01faa94c053419a1419706a695853b65713ef3374af12->leave($__internal_a5bf071b4aaa395436b01faa94c053419a1419706a695853b65713ef3374af12_prof);

    }

    // line 22
    public function block_body_menu($context, array $blocks = array())
    {
        $__internal_485bd893d823440edcdcef4c191da76b360de9f26ffed026490e7d7a95bb9a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485bd893d823440edcdcef4c191da76b360de9f26ffed026490e7d7a95bb9a93->enter($__internal_485bd893d823440edcdcef4c191da76b360de9f26ffed026490e7d7a95bb9a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        $__internal_201189f93754c57fbff73cc8814c788c6601b0f1397b15064b3482c0b09858bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201189f93754c57fbff73cc8814c788c6601b0f1397b15064b3482c0b09858bf->enter($__internal_201189f93754c57fbff73cc8814c788c6601b0f1397b15064b3482c0b09858bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_menu"));

        // line 23
        echo "          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h3 class=\"masthead-brand\">Movie assignment</h3>
              <nav>
                <ul class=\"nav masthead-nav\">
                  <li class=\"";
        // line 28
        if ((is_string($__internal_3f3489d9833caf29d1990f73b3076378c82375148cd037ee2a5442d24a7c992f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7be5f1821315fb4e7ee2537fec863e75d85ed5ef43eee503c1cd95744f355255 = "homepage") && ('' === $__internal_7be5f1821315fb4e7ee2537fec863e75d85ed5ef43eee503c1cd95744f355255 || 0 === strpos($__internal_3f3489d9833caf29d1990f73b3076378c82375148cd037ee2a5442d24a7c992f, $__internal_7be5f1821315fb4e7ee2537fec863e75d85ed5ef43eee503c1cd95744f355255)))) {
            echo "active";
        }
        echo "\"><a href=\"../../\">Home</a></li>
                  <li class=\"";
        // line 29
        if ((is_string($__internal_0f55f73c69129dfc17a81ab82039ffb4d01c360fa18f6ede9be43dba6d8bb795 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_078b552db293316d713880472071b2c0a7985ae8971f3005c91e4a1797d0d671 = "lucky") && ('' === $__internal_078b552db293316d713880472071b2c0a7985ae8971f3005c91e4a1797d0d671 || 0 === strpos($__internal_0f55f73c69129dfc17a81ab82039ffb4d01c360fa18f6ede9be43dba6d8bb795, $__internal_078b552db293316d713880472071b2c0a7985ae8971f3005c91e4a1797d0d671)))) {
            echo "active";
        }
        echo "\"><a href=\"../../lucky/number\">Lucky number</a></li>
                  <li class=\"";
        // line 30
        if ((is_string($__internal_58ab8d5b2b7fb9f36a48c8c206a52c777460aca445ecb0916f42e97557d5f973 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7e15497bcf44cc8a49ebbf5193f3f007a18fca925e627a8207e16556f29a4cae = "search") && ('' === $__internal_7e15497bcf44cc8a49ebbf5193f3f007a18fca925e627a8207e16556f29a4cae || 0 === strpos($__internal_58ab8d5b2b7fb9f36a48c8c206a52c777460aca445ecb0916f42e97557d5f973, $__internal_7e15497bcf44cc8a49ebbf5193f3f007a18fca925e627a8207e16556f29a4cae)))) {
            echo "active";
        }
        echo "\"><a href=\"../../search/searchpage\">Search</a></li>
                </ul>
              </nav>
            </div>
          </div>
\t\t  ";
        
        $__internal_201189f93754c57fbff73cc8814c788c6601b0f1397b15064b3482c0b09858bf->leave($__internal_201189f93754c57fbff73cc8814c788c6601b0f1397b15064b3482c0b09858bf_prof);

        
        $__internal_485bd893d823440edcdcef4c191da76b360de9f26ffed026490e7d7a95bb9a93->leave($__internal_485bd893d823440edcdcef4c191da76b360de9f26ffed026490e7d7a95bb9a93_prof);

    }

    // line 37
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_6bc1bb46604e5d068e4297524da01fc0b913e4f4525a78b89c99a241f3651a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc1bb46604e5d068e4297524da01fc0b913e4f4525a78b89c99a241f3651a3a->enter($__internal_6bc1bb46604e5d068e4297524da01fc0b913e4f4525a78b89c99a241f3651a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        $__internal_504e192a6d69813ecb3e7250304ffd074af4eb055db2799732a9c05688f01314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504e192a6d69813ecb3e7250304ffd074af4eb055db2799732a9c05688f01314->enter($__internal_504e192a6d69813ecb3e7250304ffd074af4eb055db2799732a9c05688f01314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

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
        
        $__internal_504e192a6d69813ecb3e7250304ffd074af4eb055db2799732a9c05688f01314->leave($__internal_504e192a6d69813ecb3e7250304ffd074af4eb055db2799732a9c05688f01314_prof);

        
        $__internal_6bc1bb46604e5d068e4297524da01fc0b913e4f4525a78b89c99a241f3651a3a->leave($__internal_6bc1bb46604e5d068e4297524da01fc0b913e4f4525a78b89c99a241f3651a3a_prof);

    }

    // line 39
    public function block_body_text_title($context, array $blocks = array())
    {
        $__internal_28ae75469496a405ccd0c66ebb605a39bb4db20ae4552c2b0b2c2e2cb87fa967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ae75469496a405ccd0c66ebb605a39bb4db20ae4552c2b0b2c2e2cb87fa967->enter($__internal_28ae75469496a405ccd0c66ebb605a39bb4db20ae4552c2b0b2c2e2cb87fa967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        $__internal_c0510335705da7209cc642b5b9421bb8b3dc6e06067b168892b1e46533c5f3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0510335705da7209cc642b5b9421bb8b3dc6e06067b168892b1e46533c5f3c6->enter($__internal_c0510335705da7209cc642b5b9421bb8b3dc6e06067b168892b1e46533c5f3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_title"));

        
        $__internal_c0510335705da7209cc642b5b9421bb8b3dc6e06067b168892b1e46533c5f3c6->leave($__internal_c0510335705da7209cc642b5b9421bb8b3dc6e06067b168892b1e46533c5f3c6_prof);

        
        $__internal_28ae75469496a405ccd0c66ebb605a39bb4db20ae4552c2b0b2c2e2cb87fa967->leave($__internal_28ae75469496a405ccd0c66ebb605a39bb4db20ae4552c2b0b2c2e2cb87fa967_prof);

    }

    // line 40
    public function block_body_text_content($context, array $blocks = array())
    {
        $__internal_fe73fa97d20979dd3bb6ee11f60c9a80f6e76ff6564d3a73bc05bb1c9c271927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe73fa97d20979dd3bb6ee11f60c9a80f6e76ff6564d3a73bc05bb1c9c271927->enter($__internal_fe73fa97d20979dd3bb6ee11f60c9a80f6e76ff6564d3a73bc05bb1c9c271927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        $__internal_ccbe9b1190ac1942629679b8b7c7a2b58df7227e4fb6e0cfe2f5265102ca9931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbe9b1190ac1942629679b8b7c7a2b58df7227e4fb6e0cfe2f5265102ca9931->enter($__internal_ccbe9b1190ac1942629679b8b7c7a2b58df7227e4fb6e0cfe2f5265102ca9931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text_content"));

        
        $__internal_ccbe9b1190ac1942629679b8b7c7a2b58df7227e4fb6e0cfe2f5265102ca9931->leave($__internal_ccbe9b1190ac1942629679b8b7c7a2b58df7227e4fb6e0cfe2f5265102ca9931_prof);

        
        $__internal_fe73fa97d20979dd3bb6ee11f60c9a80f6e76ff6564d3a73bc05bb1c9c271927->leave($__internal_fe73fa97d20979dd3bb6ee11f60c9a80f6e76ff6564d3a73bc05bb1c9c271927_prof);

    }

    // line 41
    public function block_body_content_other($context, array $blocks = array())
    {
        $__internal_0eab00464c8d46a6093188649ec949735cdc30fc8af816eb7bf24abdd7b65399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eab00464c8d46a6093188649ec949735cdc30fc8af816eb7bf24abdd7b65399->enter($__internal_0eab00464c8d46a6093188649ec949735cdc30fc8af816eb7bf24abdd7b65399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        $__internal_17bb18260580f9913a613f5bbf989459c9f80ee225b60857c477dca710557cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bb18260580f9913a613f5bbf989459c9f80ee225b60857c477dca710557cad->enter($__internal_17bb18260580f9913a613f5bbf989459c9f80ee225b60857c477dca710557cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content_other"));

        
        $__internal_17bb18260580f9913a613f5bbf989459c9f80ee225b60857c477dca710557cad->leave($__internal_17bb18260580f9913a613f5bbf989459c9f80ee225b60857c477dca710557cad_prof);

        
        $__internal_0eab00464c8d46a6093188649ec949735cdc30fc8af816eb7bf24abdd7b65399->leave($__internal_0eab00464c8d46a6093188649ec949735cdc30fc8af816eb7bf24abdd7b65399_prof);

    }

    // line 43
    public function block_body_results($context, array $blocks = array())
    {
        $__internal_f330e9bb2d11bc86971462fd7ae1338bba01f70350ac4d3dbe38ed89ce2b1624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f330e9bb2d11bc86971462fd7ae1338bba01f70350ac4d3dbe38ed89ce2b1624->enter($__internal_f330e9bb2d11bc86971462fd7ae1338bba01f70350ac4d3dbe38ed89ce2b1624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        $__internal_c1cd34fb3c96c10e36a55864f96a2896685a78c96d167616b5d01a3f315935e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cd34fb3c96c10e36a55864f96a2896685a78c96d167616b5d01a3f315935e2->enter($__internal_c1cd34fb3c96c10e36a55864f96a2896685a78c96d167616b5d01a3f315935e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_results"));

        // line 44
        echo "    ";
        
        $__internal_c1cd34fb3c96c10e36a55864f96a2896685a78c96d167616b5d01a3f315935e2->leave($__internal_c1cd34fb3c96c10e36a55864f96a2896685a78c96d167616b5d01a3f315935e2_prof);

        
        $__internal_f330e9bb2d11bc86971462fd7ae1338bba01f70350ac4d3dbe38ed89ce2b1624->leave($__internal_f330e9bb2d11bc86971462fd7ae1338bba01f70350ac4d3dbe38ed89ce2b1624_prof);

    }

    // line 46
    public function block_body_footer($context, array $blocks = array())
    {
        $__internal_8ef3dde3dde5b77222741b02c883c6fae383500e59b0cf9a4d4cb7b6f3d24f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef3dde3dde5b77222741b02c883c6fae383500e59b0cf9a4d4cb7b6f3d24f56->enter($__internal_8ef3dde3dde5b77222741b02c883c6fae383500e59b0cf9a4d4cb7b6f3d24f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        $__internal_61f16d0d1d74a6fae1b5d4e890af3a5f0e5039beabda191d1282c3d93f93cb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f16d0d1d74a6fae1b5d4e890af3a5f0e5039beabda191d1282c3d93f93cb68->enter($__internal_61f16d0d1d74a6fae1b5d4e890af3a5f0e5039beabda191d1282c3d93f93cb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_footer"));

        // line 47
        echo "          <div class=\"mastfoot\">
            <div class=\"inner\">
           <p>Daan van Essen</p>
            </div>
          </div>
";
        
        $__internal_61f16d0d1d74a6fae1b5d4e890af3a5f0e5039beabda191d1282c3d93f93cb68->leave($__internal_61f16d0d1d74a6fae1b5d4e890af3a5f0e5039beabda191d1282c3d93f93cb68_prof);

        
        $__internal_8ef3dde3dde5b77222741b02c883c6fae383500e59b0cf9a4d4cb7b6f3d24f56->leave($__internal_8ef3dde3dde5b77222741b02c883c6fae383500e59b0cf9a4d4cb7b6f3d24f56_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_034d475fe5e918b9b0f9669d177b19b1a63bfb86e3980aaa042cf5c021f6b8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034d475fe5e918b9b0f9669d177b19b1a63bfb86e3980aaa042cf5c021f6b8fb->enter($__internal_034d475fe5e918b9b0f9669d177b19b1a63bfb86e3980aaa042cf5c021f6b8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9b9885ef702b42d6c4ea36a3fd2d818514b591987fe3a6f74b70959bb1d438ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9885ef702b42d6c4ea36a3fd2d818514b591987fe3a6f74b70959bb1d438ba->enter($__internal_9b9885ef702b42d6c4ea36a3fd2d818514b591987fe3a6f74b70959bb1d438ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>";
        
        $__internal_9b9885ef702b42d6c4ea36a3fd2d818514b591987fe3a6f74b70959bb1d438ba->leave($__internal_9b9885ef702b42d6c4ea36a3fd2d818514b591987fe3a6f74b70959bb1d438ba_prof);

        
        $__internal_034d475fe5e918b9b0f9669d177b19b1a63bfb86e3980aaa042cf5c021f6b8fb->leave($__internal_034d475fe5e918b9b0f9669d177b19b1a63bfb86e3980aaa042cf5c021f6b8fb_prof);

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
        return array (  351 => 61,  342 => 60,  327 => 47,  318 => 46,  308 => 44,  299 => 43,  282 => 41,  265 => 40,  248 => 39,  238 => 43,  235 => 42,  233 => 41,  229 => 40,  225 => 39,  222 => 38,  213 => 37,  195 => 30,  189 => 29,  183 => 28,  176 => 23,  167 => 22,  151 => 53,  149 => 46,  147 => 37,  144 => 36,  142 => 22,  135 => 17,  126 => 16,  114 => 11,  110 => 10,  106 => 9,  101 => 8,  92 => 7,  74 => 6,  62 => 69,  59 => 60,  57 => 16,  50 => 13,  48 => 7,  44 => 6,  41 => 5,  36 => 1,);
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
    <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\php\\netvlies_opdracht\\app\\Resources\\views\\base.html.twig");
    }
}
