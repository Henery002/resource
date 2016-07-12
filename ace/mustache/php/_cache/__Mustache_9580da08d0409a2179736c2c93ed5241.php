<?php

class __Mustache_9580da08d0409a2179736c2c93ed5241 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
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
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<title>';
        $value = $this->resolveValue($context->findDot('page.title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ' - ';
        $value = $this->resolveValue($context->findDot('site.title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '</title>	';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta name="description" content="';
        $value = $this->resolveValue($context->findDot('page.description'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '" />';
        $buffer .= "\n";
        $buffer .= $indent . '		';
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
        // 'page.no-breadcrumbs' inverted section
        $value = $context->findDot('page.no-breadcrumbs');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('layout.breadcrumbs')) {
                $buffer .= $partial->renderInternal($context, '				');
            }
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
        // 'page.no-header' inverted section
        $value = $context->findDot('page.no-header');
        if (empty($value)) {
            
            $buffer .= $indent . '					<div class="page-header">';
            $buffer .= "\n";
            $buffer .= $indent . '						<h1>';
            $value = $this->resolveValue($context->findDot('page.title'), $context, $indent);
            $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
            $buffer .= ' ';
            // 'page.description' section
            $buffer .= $this->sectionC4e15ab0893e4ee48db6644d970f6aa4($context, $indent, $context->findDot('page.description'));
            $buffer .= '</h1>';
            $buffer .= "\n";
            $buffer .= $indent . '					</div><!-- /.page-header -->';
            $buffer .= "\n";
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '					 <div class="col-xs-12">';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- PAGE CONTENT BEGINS -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.content')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '<!-- PAGE CONTENT ENDS -->';
        $buffer .= "\n";
        $buffer .= $indent . '					 </div><!-- /.col -->';
        $buffer .= "\n";
        $buffer .= $indent . '					</div><!-- /.row -->';
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

    private function sectionC4e15ab0893e4ee48db6644d970f6aa4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<small><i class="ace-icon fa fa-angle-double-right"></i> {{page.description}}</small>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<small><i class="ace-icon fa fa-angle-double-right"></i> ';
                $value = $this->resolveValue($context->findDot('page.description'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</small>';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
