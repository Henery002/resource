<?php

class __Mustache_99c6b522a15759a3404971286e7489f6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="';
        // 'class' section
        $buffer .= $this->section515b6d001b504db447c7048c12e3d161($context, $indent, $context->find('class'));
        $buffer .= ' ';
        // 'page.horizontal-menu' section
        $buffer .= $this->section23fa4c2f7149a182c150c484c77a3dde($context, $indent, $context->findDot('page.horizontal-menu'));
        $buffer .= '">';
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '  <a ';
        // 'link' section
        $buffer .= $this->section1ab1d72f5e8e1e1e09a18aef5eae3d8e($context, $indent, $context->find('link'));
        $buffer .= ' href="';
        // 'link' section
        $buffer .= $this->sectionA89e8b71234101e2f90434619e44d4c8($context, $indent, $context->find('link'));
        // 'link' inverted section
        $value = $context->find('link');
        if (empty($value)) {
            
            $buffer .= '#';
        }
        $buffer .= '"';
        // 'submenu?' section
        $buffer .= $this->section2fd0628d963daf86d2fde973edd59498($context, $indent, $context->find('submenu?'));
        // 'data-loader' section
        $buffer .= $this->section36c70159ba96ed433bdc6a3439214525($context, $indent, $context->find('data-loader'));
        $buffer .= '>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        // 'icon' section
        $buffer .= $this->section7e04459a4e82d2a56bf9f0b27ce7d702($context, $indent, $context->find('icon'));
        $buffer .= '';
        $buffer .= "\n";
        // 'level-1' section
        $buffer .= $this->section51ab3b199aeee5f6e11b22899ca7af87($context, $indent, $context->find('level-1'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'level-2' section
        $buffer .= $this->section4910535e867f14d0d5476ccc2758299d($context, $indent, $context->find('level-2'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	  ';
        $value = $this->resolveValue($context->find('title'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= '';
        $buffer .= "\n";
        // 'badge' section
        $buffer .= $this->section44518c966e1920b693e5b0b5a2afc3a6($context, $indent, $context->find('badge'));
        // 'label' section
        $buffer .= $this->section09878732b0a9c926ec8b470979839ef0($context, $indent, $context->find('label'));
        // 'level-1' section
        $buffer .= $this->section0518c6287955afe01cb30f41a790ea3b($context, $indent, $context->find('level-1'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        // 'submenu?' section
        $buffer .= $this->sectionBe761f2ef8d0ecbc27aac746d5ab37e1($context, $indent, $context->find('submenu?'));
        $buffer .= '';
        $buffer .= "\n";
        $buffer .= $indent . '  </a>';
        $buffer .= "\n";
        $buffer .= $indent . '  <b class="arrow"></b>';
        $buffer .= "\n";
        // 'submenu?' section
        $buffer .= $this->section9d8d2fe1dfa9d6fba30a669740222b56($context, $indent, $context->find('submenu?'));
        $buffer .= $indent . '</li>';
        $buffer .= "\n";

        return $buffer;
    }

    private function section515b6d001b504db447c7048c12e3d161(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{class}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $value = $this->resolveValue($context->find('class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23fa4c2f7149a182c150c484c77a3dde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'hover';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'hover';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ab1d72f5e8e1e1e09a18aef5eae3d8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-url="page/{{link}}"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'data-url="page/';
                $value = $this->resolveValue($context->find('link'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4e79cc86c3196e5bf3c56812364fd5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{link}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $value = $this->resolveValue($context->find('link'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d8a44e46ea0b712150bdb510600bbbc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#createLinkFunction}}{{link}}{{/createLinkFunction}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'createLinkFunction' section
                $buffer .= $this->sectionF4e79cc86c3196e5bf3c56812364fd5d($context, $indent, $context->find('createLinkFunction'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA89e8b71234101e2f90434619e44d4c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#no-ajax}}{{#createLinkFunction}}{{link}}{{/createLinkFunction}}{{/no-ajax}}{{^no-ajax}}{{#createAjaxLinkFunction}}{{link}}{{/createAjaxLinkFunction}}{{/no-ajax}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'no-ajax' section
                $buffer .= $this->section3d8a44e46ea0b712150bdb510600bbbc($context, $indent, $context->find('no-ajax'));
                // 'no-ajax' inverted section
                $value = $context->find('no-ajax');
                if (empty($value)) {
                    
                    // 'createAjaxLinkFunction' section
                    $buffer .= $this->sectionF4e79cc86c3196e5bf3c56812364fd5d($context, $indent, $context->find('createAjaxLinkFunction'));
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fd0628d963daf86d2fde973edd59498(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' class="dropdown-toggle"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' class="dropdown-toggle"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36c70159ba96ed433bdc6a3439214525(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-loader="{{data-loader}}"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' data-loader="';
                $value = $this->resolveValue($context->find('data-loader'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e04459a4e82d2a56bf9f0b27ce7d702(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<i class="menu-icon {{icon}}"></i>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<i class="menu-icon ';
                $value = $this->resolveValue($context->find('icon'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"></i>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51ab3b199aeee5f6e11b22899ca7af87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <span class="menu-text">
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <span class="menu-text">';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4910535e867f14d0d5476ccc2758299d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! if this item is level-2 and no icon assigned to it, use this icon}}
		{{^icon}}<i class="menu-icon fa fa-caret-right"></i>{{/icon}}
	 ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		';
                // 'icon' inverted section
                $value = $context->find('icon');
                if (empty($value)) {
                    
                    $buffer .= '<i class="menu-icon fa fa-caret-right"></i>';
                }
                $buffer .= '';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfb33b09a80b4b4bfb257c3df2325e2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' title="{{{tooltip}}}"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('tooltip'), $context, $indent);
                $buffer .= $value;
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44518c966e1920b693e5b0b5a2afc3a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<!-- #section:basics/sidebar.layout.badge -->
			<span class="badge {{badge-class}} {{tooltip-class}}"{{#tooltip}} title="{{{tooltip}}}"{{/tooltip}}>{{{badge}}}</span>
			<!-- /section:basics/sidebar.layout.badge -->
	  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<!-- #section:basics/sidebar.layout.badge -->';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="badge ';
                $value = $this->resolveValue($context->find('badge-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('tooltip-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                // 'tooltip' section
                $buffer .= $this->sectionFfb33b09a80b4b4bfb257c3df2325e2b($context, $indent, $context->find('tooltip'));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('badge'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<!-- /section:basics/sidebar.layout.badge -->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf19b645c02b374feac25bdf8e7b96da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' title="{{label-title}}"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('label-title'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09878732b0a9c926ec8b470979839ef0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<span class="label {{label-class}}"{{#label-title}} title="{{label-title}}"{{/label-title}}>{{{label}}}</span>
	  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<span class="label ';
                $value = $this->resolveValue($context->find('label-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"';
                // 'label-title' section
                $buffer .= $this->sectionCf19b645c02b374feac25bdf8e7b96da($context, $indent, $context->find('label-title'));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0518c6287955afe01cb30f41a790ea3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 </span>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 </span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe761f2ef8d0ecbc27aac746d5ab37e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<b class="arrow fa fa-angle-down"></b>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<b class="arrow fa fa-angle-down"></b>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD54f7799d12f106121976a1a1f2a4b4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{> layout.sidebar.item}}
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('layout.sidebar.item')) {
                    $buffer .= $partial->renderInternal($context, '		');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d8d2fe1dfa9d6fba30a669740222b56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! if we have submenu items, print them recursively }}
	<ul class="submenu">
	{{#submenu}}
		{{> layout.sidebar.item}}
	{{/submenu}}
	</ul>
  ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<ul class="submenu">';
                $buffer .= "\n";
                // 'submenu' section
                $buffer .= $this->sectionD54f7799d12f106121976a1a1f2a4b4b($context, $indent, $context->find('submenu'));
                $buffer .= $indent . '	</ul>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
