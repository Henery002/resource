<?php

class __Mustache_df34aaec69f85dc59fbb79525be50145 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="sidebar-shortcuts" id="sidebar-shortcuts">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-success"><i class="ace-icon fa fa-signal"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-info"><i class="ace-icon fa fa-pencil"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- #section:basics/sidebar.layout.shortcuts -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-warning"><i class="ace-icon fa fa-users"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn btn-danger"><i class="ace-icon fa fa-cogs"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- /section:basics/sidebar.layout.shortcuts -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-success"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-info"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-warning"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="btn btn-danger"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- /.sidebar-shortcuts -->';
        $buffer .= "\n";

        return $buffer;
    }
}
