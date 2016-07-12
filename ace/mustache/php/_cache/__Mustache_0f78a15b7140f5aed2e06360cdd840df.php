<?php

class __Mustache_0f78a15b7140f5aed2e06360cdd840df extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!-- #section:settings.box -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="ace-settings-container" id="ace-settings-container">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="ace-icon fa fa-cog bigger-150"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="ace-settings-box clearfix" id="ace-settings-box">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="pull-left width-50">';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- #section:settings.skins -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="pull-left">';
        $buffer .= "\n";
        $buffer .= $indent . '				<select id="skin-colorpicker" class="hide">';
        $buffer .= "\n";
        $buffer .= $indent . '					<option data-skin="no-skin" value="#438EB9">#438EB9</option>';
        $buffer .= "\n";
        $buffer .= $indent . '					<option data-skin="skin-1" value="#222A2D">#222A2D</option>';
        $buffer .= "\n";
        $buffer .= $indent . '					<option data-skin="skin-2" value="#C6487E">#C6487E</option>';
        $buffer .= "\n";
        $buffer .= $indent . '					<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>';
        $buffer .= "\n";
        $buffer .= $indent . '				</select>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<span>&nbsp; Choose Skin</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- /section:settings.skins -->';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- #section:settings.navbar -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- /section:settings.navbar -->';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- #section:settings.sidebar -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- /section:settings.sidebar -->';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- #section:settings.breadcrumbs -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- /section:settings.breadcrumbs -->';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- #section:settings.rtl -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- /section:settings.rtl -->';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- #section:settings.container -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="lbl" for="ace-settings-add-container"> Inside <b>.container</b> </label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- /section:settings.container -->';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div><!-- /.pull-left -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="pull-left width-50">';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- #section:basics/sidebar.options -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="ace-settings-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />';
        $buffer .= "\n";
        $buffer .= $indent . '			<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- /section:basics/sidebar.options -->';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div><!-- /.pull-left -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.ace-settings-box -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- /.ace-settings-container -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- /section:settings.box -->';
        $buffer .= "\n";

        return $buffer;
    }
}
