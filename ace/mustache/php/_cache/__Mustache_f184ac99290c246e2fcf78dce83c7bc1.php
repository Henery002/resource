<?php

class __Mustache_f184ac99290c246e2fcf78dce83c7bc1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<title>';
        $value = $this->resolveValue($context->findDot('page.title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ' - ';
        $value = $this->resolveValue($context->findDot('site.title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '</title>	';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.styles' section
        $buffer .= $this->section3cad4c990aac8bfcc3a92efe0cd6be15($context, $indent, $context->findDot('page.styles'));
        // 'page.inline_styles' section
        $buffer .= $this->section34cf4e0468877d329d2157748eb3f995($context, $indent, $context->findDot('page.inline_styles'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- ajax layout which only needs content area -->';
        $buffer .= "\n";
        // 'page.no-header' inverted section
        $value = $context->findDot('page.no-header');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="page-header">';
            $buffer .= "\n";
            $buffer .= $indent . '	<h1>';
            $value = $this->resolveValue($context->findDot('page.title'), $context, $indent);
            $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
            $buffer .= ' ';
            // 'page.description' section
            $buffer .= $this->sectionC4e15ab0893e4ee48db6644d970f6aa4($context, $indent, $context->findDot('page.description'));
            $buffer .= '</h1>';
            $buffer .= "\n";
            $buffer .= $indent . '</div><!-- /.page-header -->';
            $buffer .= "\n";
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '  <div class="col-xs-12">';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- PAGE CONTENT BEGINS -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.content')) {
            $buffer .= $partial->renderInternal($context, '   ');
        }
        $buffer .= $indent . '	<!-- PAGE CONTENT ENDS -->';
        $buffer .= "\n";
        $buffer .= $indent . '  </div><!-- /.col -->';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- /.row -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- page specific plugin scripts -->';
        $buffer .= "\n";
        // 'page.ie_scripts' section
        $buffer .= $this->sectionD1bea1300a91f8955474d723b0ca3fa9($context, $indent, $context->findDot('page.ie_scripts'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . 'var scripts = [null,';
        // 'page.scripts' section
        $buffer .= $this->section4c8bec79bdec741b36e44b92ddee694c($context, $indent, $context->findDot('page.scripts'));
        $buffer .= ' null]';
        $buffer .= "\n";
        $buffer .= $indent . 'ace.load_ajax_scripts(scripts, function() {';
        $buffer .= "\n";
        $buffer .= $indent . '  //inline scripts related to this page';
        $buffer .= "\n";
        // 'page.inline_scripts' section
        $buffer .= $this->sectionA4fe9a69bd0c4855d998d8788b117922($context, $indent, $context->findDot('page.inline_scripts'));
        $buffer .= $indent . '});';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";

        return $buffer;
    }

    private function section3cad4c990aac8bfcc3a92efe0cd6be15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<link rel="stylesheet" href="{{{path.assets}}}/css/{{{.}}}" />
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/css/';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= $value;
                $buffer .= '" />';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34cf4e0468877d329d2157748eb3f995(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<style>
{{{page.inline_styles}}}
</style>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<style>';
                $buffer .= "\n";
                $value = $this->resolveValue($context->findDot('page.inline_styles'), $context, $indent);
                $buffer .= $indent . $value;
                $buffer .= '';
                $buffer .= "\n";
                $buffer .= $indent . '</style>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4e15ab0893e4ee48db6644d970f6aa4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<small><i class="ace-icon fa fa-angle-double-right"></i> {{page.description}}</small>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<small><i class="ace-icon fa fa-angle-double-right"></i> ';
                $value = $this->resolveValue($context->findDot('page.description'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</small>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1bea1300a91f8955474d723b0ca3fa9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--[if lte IE {{version}}]>
  <script src="{{{path.assets}}}/js/{{{file_name}}}"></script>
<![endif]-->
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<!--[if lte IE ';
                $value = $this->resolveValue($context->find('version'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ']>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/';
                $value = $this->resolveValue($context->find('file_name'), $context, $indent);
                $buffer .= $value;
                $buffer .= '"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '<![endif]-->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c8bec79bdec741b36e44b92ddee694c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '"{{{path.assets}}}/js/{{{.}}}",';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '"';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= $value;
                $buffer .= '",';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4fe9a69bd0c4855d998d8788b117922(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 {{{page.inline_scripts}}}
  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 ';
                $value = $this->resolveValue($context->findDot('page.inline_scripts'), $context, $indent);
                $buffer .= $value;
                $buffer .= '';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
