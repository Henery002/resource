<?php

class __Mustache_f86b2deaf74abf99b321bce4e614123d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'site.remote_fontawesome' section
        $buffer .= $this->section20c47832844c9e9576395641b991c198($context, $indent, $context->findDot('site.remote_fontawesome'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'site.remote_fontawesome' inverted section
        $value = $context->findDot('site.remote_fontawesome');
        if (empty($value)) {
            
            $buffer .= $indent . '<link rel="stylesheet" href="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
            $buffer .= $value;
            $buffer .= '/css/font-awesome.min.css" />';
            $buffer .= "\n";
        }

        return $buffer;
    }

    private function section20c47832844c9e9576395641b991c198(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<link rel="stylesheet" href="{{{site.protocol}}}//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context, $indent);
                $buffer .= $value;
                $buffer .= '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
