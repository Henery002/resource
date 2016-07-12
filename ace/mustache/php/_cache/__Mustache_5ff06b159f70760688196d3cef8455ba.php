<?php

class __Mustache_5ff06b159f70760688196d3cef8455ba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'page.responsive_style_2' section
        $buffer .= $this->sectionF3128e96c29ddac5c5f5c1e1add4ba0b($context, $indent, $context->findDot('page.responsive_style_2'));
        $buffer .= $indent . '<!-- #section:basics/sidebar';
        // 'page.horizontal-menu' section
        $buffer .= $this->section29cad25ea54234fa3f57eb735b16c10b($context, $indent, $context->findDot('page.horizontal-menu'));
        $buffer .= ' -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="sidebar" class="sidebar';
        $buffer .= "\n";
        // 'page.horizontal-menu' section
        $buffer .= $this->section354f699f28029884180a31044b8407e2($context, $indent, $context->findDot('page.horizontal-menu'));
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.side_menu_collapsible' inverted section
        $value = $context->findDot('page.side_menu_collapsible');
        if (empty($value)) {
            
            // 'page.responsive_style_2' inverted section
            $value = $context->findDot('page.responsive_style_2');
            if (empty($value)) {
                
                $buffer .= $indent . '   responsive';
                $buffer .= "\n";
            }
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.side_menu_collapsible' section
        $buffer .= $this->section7f594a477efd4164675bdf4471b93ed5($context, $indent, $context->findDot('page.side_menu_collapsible'));
        $buffer .= '';
        $buffer .= "\n";
        // 'page.responsive_style_2' section
        $buffer .= $this->sectionB1a9f05bdf14e3a75bb4b2f434e346f1($context, $indent, $context->findDot('page.responsive_style_2'));
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	try{ace.settings.check(\'sidebar\' , \'fixed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '	</script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.sidebar.shortcuts')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="nav nav-list">';
        $buffer .= "\n";
        // 'layout.sidebar_items' section
        $buffer .= $this->section8abc2c7ee3889845d8d5c75faf21f8a6($context, $indent, $context->findDot('layout.sidebar_items'));
        $buffer .= $indent . '	</ul><!-- /.nav-list -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- #section:basics/sidebar.layout.minimize -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        // 'page.responsive_style_2' section
        $buffer .= $this->sectionB6de87d631c68deee907298345434237($context, $indent, $context->findDot('page.responsive_style_2'));
        $buffer .= $indent . '	<!-- /section:basics/sidebar.layout.minimize -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	try{ace.settings.check(\'sidebar\' , \'collapsed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '	</script>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- /section:basics/sidebar';
        // 'page.horizontal-menu' section
        $buffer .= $this->section29cad25ea54234fa3f57eb735b16c10b($context, $indent, $context->findDot('page.horizontal-menu'));
        $buffer .= ' -->';

        return $buffer;
    }

    private function sectionF3128e96c29ddac5c5f5c1e1add4ba0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <a href="#" class="menu-toggler invisible" id="menu-toggler"></a>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '  <a href="#" class="menu-toggler invisible" id="menu-toggler"></a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29cad25ea54234fa3f57eb735b16c10b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '.horizontal';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '.horizontal';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section354f699f28029884180a31044b8407e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' h-sidebar';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . ' h-sidebar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f594a477efd4164675bdf4471b93ed5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' navbar-collapse collapse';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . ' navbar-collapse collapse';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1a9f05bdf14e3a75bb4b2f434e346f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' responsive-min';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . ' responsive-min';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8abc2c7ee3889845d8d5c75faf21f8a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{! the item array}}
			{{> layout.sidebar.item}} {{! the item partial template}}
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('layout.sidebar.item')) {
                    $buffer .= $partial->renderInternal($context, '			');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6de87d631c68deee907298345434237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!for expanding minimized menu in small devices}}
	<div class="sidebar-toggle sidebar-expand" id="sidebar-expand">
		<i class="ace-icon fa fa-angle-double-right" data-icon1="ace-icon fa fa-angle-double-right" data-icon2="ace-icon fa fa-angle-double-left"></i>
	</div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<div class="sidebar-toggle sidebar-expand" id="sidebar-expand">';
                $buffer .= "\n";
                $buffer .= $indent . '		<i class="ace-icon fa fa-angle-double-right" data-icon1="ace-icon fa fa-angle-double-right" data-icon2="ace-icon fa fa-angle-double-left"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
