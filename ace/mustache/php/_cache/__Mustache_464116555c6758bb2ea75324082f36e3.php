<?php

class __Mustache_464116555c6758bb2ea75324082f36e3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="light-blue';
        // 'page.side_menu_collapsible' section
        $buffer .= $this->section851add562f14f64a406fa91788a79ce9($context, $indent, $context->findDot('page.side_menu_collapsible'));
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '	<a data-toggle="dropdown" href="#" class="dropdown-toggle">';
        $buffer .= "\n";
        $buffer .= $indent . '		<img class="nav-user-photo" src="';
        $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '/avatars/user.jpg" alt="Jason\'s Photo" />';
        $buffer .= "\n";
        $buffer .= $indent . '		<span class="user-info">';
        $buffer .= "\n";
        $buffer .= $indent . '			<small>Welcome,</small> Jason';
        $buffer .= "\n";
        $buffer .= $indent . '		</span>';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="ace-icon fa fa-caret-down"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '	</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-cog"></i> Settings</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="';
        // 'createLinkFunction' section
        $buffer .= $this->sectionFf31a99dbdfb4f3ced56be051ebc9c0e($context, $indent, $context->find('createLinkFunction'));
        $buffer .= '"><i class="ace-icon fa fa-user"></i> Profile</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li class="divider"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a href="#"><i class="ace-icon fa fa-power-off"></i> Logout</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section851add562f14f64a406fa91788a79ce9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' user-min';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' user-min';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf31a99dbdfb4f3ced56be051ebc9c0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'profile';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'profile';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
