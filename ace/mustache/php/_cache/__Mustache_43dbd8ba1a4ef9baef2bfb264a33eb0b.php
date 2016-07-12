<?php

class __Mustache_43dbd8ba1a4ef9baef2bfb264a33eb0b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
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
        $buffer .= $indent . '<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if lte IE 8]>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/html5shiv.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/respond.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<![endif]-->';

        return $buffer;
    }
}
