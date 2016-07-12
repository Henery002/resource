<?php

class __Mustache_1d36ea93a47eff27b0dbdf6e6d02f666 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- #section:basics/navbar.layout -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="navbar" class="navbar navbar-default';
        $buffer .= "\n";
        // 'page.user_menu_collapsible' section
        $buffer .= $this->sectionC9cbe018439bef1cd577b1968eff150a($context, $indent, $context->findDot('page.user_menu_collapsible'));
        $buffer .= '';
        $buffer .= "\n";
        // 'page.user_menu_collapsible' inverted section
        $value = $context->findDot('page.user_menu_collapsible');
        if (empty($value)) {
            
            // 'page.top_menu' section
            $buffer .= $this->sectionC9cbe018439bef1cd577b1968eff150a($context, $indent, $context->findDot('page.top_menu'));
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.horizontal-menu' section
        $buffer .= $this->sectionEababbf00f047499031d7842bf0315f9($context, $indent, $context->findDot('page.horizontal-menu'));
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '  <script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	try{ace.settings.check(\'navbar\' , \'fixed\')}catch(e){}';
        $buffer .= "\n";
        $buffer .= $indent . '  </script>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '  <div class="navbar-container" id="navbar-container">';
        $buffer .= "\n";
        // 'page.side_menu_collapsible' inverted section
        $value = $context->findDot('page.side_menu_collapsible');
        if (empty($value)) {
            
            // 'page.responsive_style_2' inverted section
            $value = $context->findDot('page.responsive_style_2');
            if (empty($value)) {
                
                $buffer .= $indent . '	    <!-- #section:basics/sidebar.mobile.toggle -->';
                $buffer .= "\n";
                $buffer .= $indent . '		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="sr-only">Toggle sidebar</span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="icon-bar"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '		</button>';
                $buffer .= "\n";
                $buffer .= $indent . '		<!-- /section:basics/sidebar.mobile.toggle -->';
                $buffer .= "\n";
            }
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="navbar-header pull-left">';
        $buffer .= "\n";
        $buffer .= $indent . '	 <!-- #section:basics/navbar.layout.brand -->';
        $buffer .= "\n";
        $buffer .= $indent . '	 <a href="#" class="navbar-brand">';
        $buffer .= "\n";
        $buffer .= $indent . '		<small>';
        $buffer .= "\n";
        $buffer .= $indent . '			<i class="';
        $value = $this->resolveValue($context->findDot('site.brand_icon'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $value = $this->resolveValue($context->findDot('site.brand_text'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '		</small>';
        $buffer .= "\n";
        $buffer .= $indent . '	 </a>';
        $buffer .= "\n";
        $buffer .= $indent . '	 <!-- /section:basics/navbar.layout.brand -->';
        $buffer .= "\n";
        $buffer .= $indent . '	 ';
        $buffer .= "\n";
        $buffer .= $indent . '	 <!-- #section:basics/navbar.toggle -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.navbar.toggle_buttons')) {
            $buffer .= $partial->renderInternal($context, '	 ');
        }
        $buffer .= $indent . '	 <!-- /section:basics/navbar.toggle -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- #section:basics/navbar.dropdown -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="navbar-buttons navbar-header pull-right ';
        // 'page.user_menu_collapsible' section
        $buffer .= $this->section44800381d400d22c07366a09c2440a03($context, $indent, $context->findDot('page.user_menu_collapsible'));
        $buffer .= '" role="navigation">';
        $buffer .= "\n";
        $buffer .= $indent . '	  <ul class="nav ace-nav">';
        $buffer .= "\n";
        // 'page.user_menu_collapsible' section
        $buffer .= $this->section32f60db556684a8bf74f35da56231e64($context, $indent, $context->findDot('page.user_menu_collapsible'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.user_menu_collapsible' inverted section
        $value = $context->findDot('page.user_menu_collapsible');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('layout.navbar.tasks')) {
                $buffer .= $partial->renderInternal($context, '			  ');
            }
            if ($partial = $this->mustache->loadPartial('layout.navbar.notifications')) {
                $buffer .= $partial->renderInternal($context, '			  ');
            }
            if ($partial = $this->mustache->loadPartial('layout.navbar.messages')) {
                $buffer .= $partial->renderInternal($context, '			  ');
            }
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			<!-- #section:basics/navbar.user_menu -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout.navbar.user_menu')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= $indent . '			<!-- /section:basics/navbar.user_menu -->';
        $buffer .= "\n";
        $buffer .= $indent . '	  </ul>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- /section:basics/navbar.dropdown -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.top_menu' section
        $buffer .= $this->section930c82181cade57a7c1dc405c7efb3eb($context, $indent, $context->findDot('page.top_menu'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '  </div><!-- /.navbar-container -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- /section:basics/navbar.layout -->';

        return $buffer;
    }

    private function sectionC9cbe018439bef1cd577b1968eff150a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' navbar-collapse';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . ' navbar-collapse';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEababbf00f047499031d7842bf0315f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' h-navbar';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . ' h-navbar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44800381d400d22c07366a09c2440a03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse navbar-collapse';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' collapse navbar-collapse';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32f60db556684a8bf74f35da56231e64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			  {{> layout.navbar.tabbed_user_notifications}}
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('layout.navbar.tabbed_user_notifications')) {
                    $buffer .= $partial->renderInternal($context, '			  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section930c82181cade57a7c1dc405c7efb3eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	  {{> layout.navbar.topmenu}}
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('layout.navbar.topmenu')) {
                    $buffer .= $partial->renderInternal($context, '	  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
