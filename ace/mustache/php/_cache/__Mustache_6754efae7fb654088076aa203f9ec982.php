<?php

class __Mustache_6754efae7fb654088076aa203f9ec982 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!-- #section:basics/content.breadcrumbs -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="breadcrumbs" id="breadcrumbs">';
        $buffer .= "\n";
        $buffer .= $indent . '	<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	try{ace.settings.check(\'breadcrumbs\' , \'fixed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '	</script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="breadcrumb">';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><i class="ace-icon fa fa-home home-icon"></i> <a href="#">Home</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul><!-- /.breadcrumb -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.searchbox')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- /section:basics/content.breadcrumbs -->';

        return $buffer;
    }
}
