<?php

class __Mustache_c10549a2c4ce0f3d6c035d3b8651a07a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'site.demo' section
        $buffer .= $this->sectionDcc49af29f492299e8115b4a73bfe48b($context, $indent, $context->findDot('site.demo'));
        // 'site.demo' inverted section
        $value = $context->findDot('site.demo');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="well well-sm">';
            $buffer .= "\n";
            $buffer .= $indent . '	<button type="button" class="close line-height-0" data-dismiss="alert">';
            $buffer .= "\n";
            $buffer .= $indent . '		<i class="ace-icon fa fa-times smaller-75"></i>';
            $buffer .= "\n";
            $buffer .= $indent . '	</button>';
            $buffer .= "\n";
            $buffer .= $indent . '';
            $buffer .= "\n";
            $buffer .= $indent . '	You can have a custom jqGrid download here:';
            $buffer .= "\n";
            $buffer .= $indent . '	<a href="http://www.trirand.com/blog/?page_id=6" target="_blank">		';
            $buffer .= "\n";
            $buffer .= $indent . '		http://www.trirand.com/blog/?page_id=6';
            $buffer .= "\n";
            $buffer .= $indent . '		<i class="fa fa-external-link bigger-110"></i>';
            $buffer .= "\n";
            $buffer .= $indent . '	</a>';
            $buffer .= "\n";
            $buffer .= $indent . '</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<table id="grid-table"></table>';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="grid-pager"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . 'var $path_base = "';
        $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
        $buffer .= $value;
        $buffer .= '";//in Ace demo this will be used for editurl parameter';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function sectionDcc49af29f492299e8115b4a73bfe48b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
 <div class="alert alert-info">
   <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
   <i class="ace-icon fa fa-hand-o-right"></i> Please note that demo server is not configured to save the changes, therefore you may get an error message.
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
                $buffer .= $indent . '   <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '   <i class="ace-icon fa fa-hand-o-right"></i> Please note that demo server is not configured to save the changes, therefore you may get an error message.';
                $buffer .= "\n";
                $buffer .= $indent . ' </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
