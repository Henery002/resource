<?php

class __Mustache_62b7ca17228e18a3317aa2c5d0f97b47 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'site.remote_bootstrap_js' section
        $buffer .= $this->section42521d14f46cf67eccbc410d5dd8cf3d($context, $indent, $context->findDot('site.remote_bootstrap_js'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'site.remote_bootstrap_js' inverted section
        $value = $context->findDot('site.remote_bootstrap_js');
        if (empty($value)) {
            
            $buffer .= $indent . '<script src="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
            $buffer .= $value;
            $buffer .= '/js/bootstrap.min.js"></script>';
            $buffer .= "\n";
        }

        return $buffer;
    }

    private function section42521d14f46cf67eccbc410d5dd8cf3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script src="{{{site.protocol}}}//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('site.protocol'), $context, $indent);
                $buffer .= $value;
                $buffer .= '//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
