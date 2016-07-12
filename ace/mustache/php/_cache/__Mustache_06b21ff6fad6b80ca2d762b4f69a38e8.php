<?php

class __Mustache_06b21ff6fad6b80ca2d762b4f69a38e8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'site.demo' section
        $buffer .= $this->section2f9e557b1a468261da69ba059367dad0($context, $indent, $context->findDot('site.demo'));
        $buffer .= $indent . '<div>';
        $buffer .= "\n";
        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
        $buffer .= $value;
        $buffer .= '/dummy.html" class="dropzone" id="dropzone">';
        $buffer .= "\n";
        $buffer .= $indent . '  <div class="fallback">';
        $buffer .= "\n";
        $buffer .= $indent . '    <input name="file" type="file" multiple />';
        $buffer .= "\n";
        $buffer .= $indent . '  </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section2f9e557b1a468261da69ba059367dad0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <div class="alert alert-info">
   <i class="ace-icon fa fa-hand-o-right"></i> Please note that demo server is not configured to save uploaded files, therefore you may get an error message.
   <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
 </div>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . ' <div class="alert alert-info">';
                $buffer .= "\n";
                $buffer .= $indent . '   <i class="ace-icon fa fa-hand-o-right"></i> Please note that demo server is not configured to save uploaded files, therefore you may get an error message.';
                $buffer .= "\n";
                $buffer .= $indent . '   <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . ' </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
