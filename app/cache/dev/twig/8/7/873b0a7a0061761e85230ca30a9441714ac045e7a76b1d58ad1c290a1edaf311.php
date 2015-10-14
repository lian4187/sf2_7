<?php

/* base.html.twig */
class __TwigTemplate_2d44f68611919157c1f4c119501de9fb2e1add5d2f778b0819f1b365e4f8b870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f182b6909c9d7b821d5a103967859140399ae9e034989e43fa61120147dee1c = $this->env->getExtension("native_profiler");
        $__internal_7f182b6909c9d7b821d5a103967859140399ae9e034989e43fa61120147dee1c->enter($__internal_7f182b6909c9d7b821d5a103967859140399ae9e034989e43fa61120147dee1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7f182b6909c9d7b821d5a103967859140399ae9e034989e43fa61120147dee1c->leave($__internal_7f182b6909c9d7b821d5a103967859140399ae9e034989e43fa61120147dee1c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f536b02166c31bf3dbd75e46a379b6eb24e4655d1a29f0ca650f5fbd85ee1d0 = $this->env->getExtension("native_profiler");
        $__internal_9f536b02166c31bf3dbd75e46a379b6eb24e4655d1a29f0ca650f5fbd85ee1d0->enter($__internal_9f536b02166c31bf3dbd75e46a379b6eb24e4655d1a29f0ca650f5fbd85ee1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9f536b02166c31bf3dbd75e46a379b6eb24e4655d1a29f0ca650f5fbd85ee1d0->leave($__internal_9f536b02166c31bf3dbd75e46a379b6eb24e4655d1a29f0ca650f5fbd85ee1d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ce74402252f026d29f2a4247e712e521ac164f928ecddd5f8c52076878d91da = $this->env->getExtension("native_profiler");
        $__internal_7ce74402252f026d29f2a4247e712e521ac164f928ecddd5f8c52076878d91da->enter($__internal_7ce74402252f026d29f2a4247e712e521ac164f928ecddd5f8c52076878d91da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ce74402252f026d29f2a4247e712e521ac164f928ecddd5f8c52076878d91da->leave($__internal_7ce74402252f026d29f2a4247e712e521ac164f928ecddd5f8c52076878d91da_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da42f50f23d4c7cce9c73c27fde815187e37fbf535001c0ed96f0f0defbcad18 = $this->env->getExtension("native_profiler");
        $__internal_da42f50f23d4c7cce9c73c27fde815187e37fbf535001c0ed96f0f0defbcad18->enter($__internal_da42f50f23d4c7cce9c73c27fde815187e37fbf535001c0ed96f0f0defbcad18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da42f50f23d4c7cce9c73c27fde815187e37fbf535001c0ed96f0f0defbcad18->leave($__internal_da42f50f23d4c7cce9c73c27fde815187e37fbf535001c0ed96f0f0defbcad18_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7811f9acaa6c9955348c72cd9078c844a8f739d46714deee723fe14ca08a68b = $this->env->getExtension("native_profiler");
        $__internal_b7811f9acaa6c9955348c72cd9078c844a8f739d46714deee723fe14ca08a68b->enter($__internal_b7811f9acaa6c9955348c72cd9078c844a8f739d46714deee723fe14ca08a68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b7811f9acaa6c9955348c72cd9078c844a8f739d46714deee723fe14ca08a68b->leave($__internal_b7811f9acaa6c9955348c72cd9078c844a8f739d46714deee723fe14ca08a68b_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
