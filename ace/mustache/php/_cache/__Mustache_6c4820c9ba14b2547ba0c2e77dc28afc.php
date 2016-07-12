<?php

class __Mustache_6c4820c9ba14b2547ba0c2e77dc28afc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'page.user_menu_collapsible' section
        $buffer .= $this->section0a1e340d4177db157af8a33c22a687ae($context, $indent, $context->findDot('page.user_menu_collapsible'));
        // 'page.or_use_an_icon_instead' section
        $buffer .= $this->section4647dbc33e5975a4ce19684c2475673d($context, $indent, $context->findDot('page.or_use_an_icon_instead'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.side_menu_collapsible' section
        $buffer .= $this->sectionB5e7b4b669332871f8677e5432f4d44c($context, $indent, $context->findDot('page.side_menu_collapsible'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.user_menu_collapsible' inverted section
        $value = $context->findDot('page.user_menu_collapsible');
        if (empty($value)) {
            
            // 'page.top_menu' section
            $buffer .= $this->section7f3cb6ff37df0886b6d1699805db1773($context, $indent, $context->findDot('page.top_menu'));
        }

        return $buffer;
    }

    private function section95c91aa128669ca4023d583ca1eb8cc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ',.navbar-menu';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ',.navbar-menu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a1e340d4177db157af8a33c22a687ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse"
 data-target=".navbar-buttons{{#page.top_menu}},.navbar-menu{{/page.top_menu}}">
	<span class="sr-only">Toggle user menu</span>
	<img src="{{path.assets}}/avatars/user.jpg" alt="Jason\'s Photo" />
</button>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse"';
                $buffer .= "\n";
                $buffer .= $indent . ' data-target=".navbar-buttons';
                // 'page.top_menu' section
                $buffer .= $this->section95c91aa128669ca4023d583ca1eb8cc0($context, $indent, $context->findDot('page.top_menu'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="sr-only">Toggle user menu</span>';
                $buffer .= "\n";
                $buffer .= $indent . '	<img src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '/avatars/user.jpg" alt="Jason\'s Photo" />';
                $buffer .= "\n";
                $buffer .= $indent . '</button>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4647dbc33e5975a4ce19684c2475673d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="anytarget">
	<span class="sr-only">Toggle user menu</span>
	<i class="ace-icon fa fa-user fa-2x white"></i>
</button>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="anytarget">';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="sr-only">Toggle user menu</span>';
                $buffer .= "\n";
                $buffer .= $indent . '	<i class="ace-icon fa fa-user fa-2x white"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '</button>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5e7b4b669332871f8677e5432f4d44c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".sidebar">
	<span class="sr-only">Toggle sidebar</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".sidebar">';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="sr-only">Toggle sidebar</span>';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '</button>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f3cb6ff37df0886b6d1699805db1773(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-menu">
	<span class="sr-only">Toggle top menu</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-menu">';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="sr-only">Toggle top menu</span>';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '	<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '</button>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
