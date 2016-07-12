<?php

class __Mustache_45dd0b9f34e87101c375e146518aff66 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!-- #section:basics/content.searchbox -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="nav-search" id="nav-search">';
        $buffer .= "\n";
        $buffer .= $indent . '	<form class="form-search">';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="input-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="ace-icon fa fa-search nav-search-icon"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '		</span>';
        $buffer .= "\n";
        $buffer .= $indent . '	</form>';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- /.nav-search -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- /section:basics/content.searchbox -->';

        return $buffer;
    }
}
