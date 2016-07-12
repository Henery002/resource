<?php

class __Mustache_52b8e41b4284c6d1a8c4d0c82d692713 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- #section:pages/dashboard.tasks -->';
        $buffer .= "\n";
        $buffer .= $indent . '<ul id="tasks" class="item-list">';
        $buffer .= "\n";
        // 'page.tasks' section
        $buffer .= $this->section55909c8e8b51ff1027eac757459584fa($context, $indent, $context->findDot('page.tasks'));
        $buffer .= $indent . '</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- /section:pages/dashboard.tasks -->';

        return $buffer;
    }

    private function section91f123b8467f1d28f105e647e0d3bb74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="{{progress}}">
			<span class="percent">{{progress}}</span>%
		</div>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="';
                $value = $this->resolveValue($context->find('progress'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="percent">';
                $value = $this->resolveValue($context->find('progress'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>%';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF83949d18c5bb5d8079ee487678df9e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<!-- #section:custom/extra.action-buttons -->
		<div class="pull-right action-buttons">
			<a href="#" class="blue"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="red"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="green"><i class="ace-icon fa fa-flag bigger-130"></i></a>
		</div>
		<!-- /section:custom/extra.action-buttons -->
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<!-- #section:custom/extra.action-buttons -->';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="pull-right action-buttons">';
                $buffer .= "\n";
                $buffer .= $indent . '			<a href="#" class="blue"><i class="ace-icon fa fa-pencil bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="vbar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<a href="#" class="red"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="vbar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<a href="#" class="green"><i class="ace-icon fa fa-flag bigger-130"></i></a>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<!-- /section:custom/extra.action-buttons -->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0763e03565b278d61793d642689e3d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<!-- #section:elements.dropdown.hover -->
		<div class="inline pull-right position-relative dropdown-hover">
			<button class="btn btn-minier bigger btn-primary"><i class="ace-icon fa fa-cog icon-only bigger-120"></i></button>
			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>
				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span></a></li>
			</ul>
		</div>
		<!-- /section:elements.dropdown.hover -->
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<!-- #section:elements.dropdown.hover -->';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="inline pull-right position-relative dropdown-hover">';
                $buffer .= "\n";
                $buffer .= $indent . '			<button class="btn btn-minier bigger btn-primary"><i class="ace-icon fa fa-cog icon-only bigger-120"></i></button>';
                $buffer .= "\n";
                $buffer .= $indent . '			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">';
                $buffer .= "\n";
                $buffer .= $indent . '				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span></a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '			</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<!-- /section:elements.dropdown.hover -->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55909c8e8b51ff1027eac757459584fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<li class="item-{{color}} clearfix">
		<label class="inline"><input type="checkbox" class="ace" /><span class="lbl"> {{title}}</span></label>
		{{#progress}}
		<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="{{progress}}">
			<span class="percent">{{progress}}</span>%
		</div>
		{{/progress}}
		{{#toolbar}}
		<!-- #section:custom/extra.action-buttons -->
		<div class="pull-right action-buttons">
			<a href="#" class="blue"><i class="ace-icon fa fa-pencil bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="red"><i class="ace-icon fa fa-trash-o bigger-130"></i></a>
			<span class="vbar"></span>
			<a href="#" class="green"><i class="ace-icon fa fa-flag bigger-130"></i></a>
		</div>
		<!-- /section:custom/extra.action-buttons -->
		{{/toolbar}}
		{{#menu}}
		<!-- #section:elements.dropdown.hover -->
		<div class="inline pull-right position-relative dropdown-hover">
			<button class="btn btn-minier bigger btn-primary"><i class="ace-icon fa fa-cog icon-only bigger-120"></i></button>
			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
				<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done"><span class="green"><i class="ace-icon fa fa-check bigger-110"></i></span></a></li>
				<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete"><span class="red"><i class="ace-icon fa fa-trash-o bigger-110"></i></span></a></li>
			</ul>
		</div>
		<!-- /section:elements.dropdown.hover -->
		{{/menu}}
	</li>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<li class="item-';
                $value = $this->resolveValue($context->find('color'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ' clearfix">';
                $buffer .= "\n";
                $buffer .= $indent . '		<label class="inline"><input type="checkbox" class="ace" /><span class="lbl"> ';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span></label>';
                $buffer .= "\n";
                // 'progress' section
                $buffer .= $this->section91f123b8467f1d28f105e647e0d3bb74($context, $indent, $context->find('progress'));
                // 'toolbar' section
                $buffer .= $this->sectionF83949d18c5bb5d8079ee487678df9e0($context, $indent, $context->find('toolbar'));
                // 'menu' section
                $buffer .= $this->sectionE0763e03565b278d61793d642689e3d0($context, $indent, $context->find('menu'));
                $buffer .= $indent . '	</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
