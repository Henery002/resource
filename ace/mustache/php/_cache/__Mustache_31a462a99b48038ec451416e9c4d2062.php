<?php

class __Mustache_31a462a99b48038ec451416e9c4d2062 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'site.remote_jquery' section
        $buffer .= $this->section96ea6160c95365f4013b241ed82d6335($context, $indent, $context->findDot('site.remote_jquery'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if !IE]> -->';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . ' window.jQuery || document.write("<script src=\'';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/jquery.min.js\'>"+"<"+"/script>");';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- <![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if IE]>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . ' window.jQuery || document.write("<script src=\'';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/jquery1x.min.js\'>"+"<"+"/script>");';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<![endif]-->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	if(\'ontouchstart\' in document.documentElement) document.write("<script src=\'';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/js/jquery.mobile.custom.min.js\'>"+"<"+"/script>");';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";

        return $buffer;
    }

    private function section96ea6160c95365f4013b241ed82d6335(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--[if !IE]> -->
<script src="{{{site.protocol}}}//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="{{{site.protocol}}}//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<!--[if !IE]> -->';
                $buffer .= "\n";
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context, $indent);
                $buffer .= $value;
                $buffer .= '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '<!-- <![endif]-->';
                $buffer .= "\n";
                $buffer .= $indent . '<!--[if IE]>';
                $buffer .= "\n";
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context, $indent);
                $buffer .= $value;
                $buffer .= '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '<![endif]-->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
