<?php

class __Mustache_4db21a9790b68f41673413b62ff3b760 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- bootstrap & fontawesome -->';
        $buffer .= "\n";
        $buffer .= $indent . '<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/bootstrap.min.css" />';
        $buffer .= '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.fontawesome')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- page specific plugin styles -->';
        $buffer .= "\n";
        // 'page.styles' section
        $buffer .= $this->section3cad4c990aac8bfcc3a92efe0cd6be15($context, $indent, $context->findDot('page.styles'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- text fonts -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.fonts')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- ace styles -->';
        $buffer .= "\n";
        $buffer .= $indent . '<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace.min.css" id="main-ace-style" />';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if lte IE 9]>';
        $buffer .= "\n";
        $buffer .= $indent . '	<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-part2.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '<![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-skins.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '<link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-rtl.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if lte IE 9]>';
        $buffer .= "\n";
        $buffer .= $indent . '  <link rel="stylesheet" href="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/css/ace-ie.min.css" />';
        $buffer .= "\n";
        $buffer .= $indent . '<![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- inline styles related to this page -->';
        $buffer .= "\n";
        // 'page.inline_styles' section
        $buffer .= $this->section34cf4e0468877d329d2157748eb3f995($context, $indent, $context->findDot('page.inline_styles'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- ace settings handler -->';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/ace-extra.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if lte IE 8]>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/html5shiv.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/respond.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<![endif]-->';

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
}
