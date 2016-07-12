<?php

class __Mustache_5cda6e0c37c0f81fc44635bcc9c2d4be extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>';
        $buffer .= "\n";
        $buffer .= $indent . '<html lang="en">';
        $buffer .= "\n";
        $buffer .= $indent . '	<head>';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta charset="utf-8" />';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<title>Welcome - ';
        $value = $this->resolveValue($context->findDot('site.title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '</title>	';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.styles')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '	</head>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<body class="no-skin">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.navbar')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="main-container" id="main-container">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '		 try{ace.settings.check(\'main-container\' , \'fixed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '		 </script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.sidebar')) {
            $buffer .= $partial->renderInternal($context, '		 ');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="main-content">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.breadcrumbs')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="page-content">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.settings')) {
            $buffer .= $partial->renderInternal($context, '					');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				   <div class="page-content-area">';
        $buffer .= "\n";
        $buffer .= $indent . '						<!-- ajax content goes here -->';
        $buffer .= "\n";
        $buffer .= $indent . '				   </div><!-- /.page-content-area -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				</div><!-- /.page-content -->';
        $buffer .= "\n";
        $buffer .= $indent . '			</div><!-- /.main-content -->';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.footer')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">';
        $buffer .= "\n";
        $buffer .= $indent . '				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.main-container -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.scripts')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '	</body>';
        $buffer .= "\n";
        $buffer .= $indent . '</html>';
        $buffer .= "\n";

        return $buffer;
    }
}
