<?php

class __Mustache_ba89db7b49f3409b1a3e2469690829ab extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!-- #section:plugins/fuelux.treeview -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '  <div class="widget-box widget-color-blue2">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h4 class="widget-title lighter smaller">Choose Categories</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '	 <div class="widget-main padding-8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div id="tree1" class="tree"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '  </div>';
        $buffer .= "\n";
        $buffer .= $indent . ' </div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '  <div class="widget-box widget-color-green2">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h4 class="widget-title lighter smaller">Browse Files</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-main padding-8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div id="tree2" class="tree"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '  </div>';
        $buffer .= "\n";
        $buffer .= $indent . ' </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- /section:plugins/fuelux.treeview -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . 'var $assets = "';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= $value;
        $buffer .= '";//this will be used in fuelux.tree-sampledata.js';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';

        return $buffer;
    }
}
