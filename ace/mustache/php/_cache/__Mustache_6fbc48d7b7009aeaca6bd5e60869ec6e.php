<?php

class __Mustache_6fbc48d7b7009aeaca6bd5e60869ec6e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="infobox infobox-';
        $value = $this->resolveValue($context->find('color'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ' ';
        // 'small' section
        $buffer .= $this->section4801bf06ab018ac97204cb2ac16bd5fa($context, $indent, $context->find('small'));
        $buffer .= ' ';
        // 'dark' section
        $buffer .= $this->section39e2d88bd0f1ce823c167e2b41e1e46b($context, $indent, $context->find('dark'));
        $buffer .= '">';
        $buffer .= "\n";
        // 'icon' section
        $buffer .= $this->sectionF59c08db7ff23e9ea5cb40372de32d7e($context, $indent, $context->find('icon'));
        // 'progress' section
        $buffer .= $this->section9551fc00cfab51659c61ac4852999bb7($context, $indent, $context->find('progress'));
        // 'chart' section
        $buffer .= $this->section8426b7fd69c6d4638bea910b5d1bf08a($context, $indent, $context->find('chart'));
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="infobox-data">';
        $buffer .= "\n";
        // 'number' section
        $buffer .= $this->section540b1853020520d087ca720e5317362c($context, $indent, $context->find('number'));
        // 'text' section
        $buffer .= $this->section0bfeba88dc48d687ecc6e4810f9d07ab($context, $indent, $context->find('text'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'content' section
        $buffer .= $this->section713941c1468bb3c7491d9c197df1a567($context, $indent, $context->find('content'));
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        // 'stat-success' section
        $buffer .= $this->section527af9b9cad5e198c0fee3c607abe0d4($context, $indent, $context->find('stat-success'));
        // 'stat-important' section
        $buffer .= $this->section9d9767f477f52f60f35085e968f33ce3($context, $indent, $context->find('stat-important'));
        // 'badge-success' section
        $buffer .= $this->sectionB7fb7bc12f8740b7d83046b8c3fa5f95($context, $indent, $context->find('badge-success'));
        // 'badge-important' section
        $buffer .= $this->sectionAdbdc57f46293eee121a0dac2e151a33($context, $indent, $context->find('badge-important'));
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section4801bf06ab018ac97204cb2ac16bd5fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'infobox-small';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'infobox-small';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39e2d88bd0f1ce823c167e2b41e1e46b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'infobox-dark';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'infobox-dark';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF59c08db7ff23e9ea5cb40372de32d7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="infobox-icon">
		<i class="ace-icon {{icon}}"></i>
	 </div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <div class="infobox-icon">';
                $buffer .= "\n";
                $buffer .= $indent . '		<i class="ace-icon ';
                $value = $this->resolveValue($context->find('icon'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '	 </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section653a1b77ffe301ac2d353c6a29da89ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '39';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '39';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9551fc00cfab51659c61ac4852999bb7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="infobox-progress">
		<!-- #section:pages/dashboard.infobox.easypiechart -->
		<div class="easy-pie-chart percentage" data-percent="{{progress}}" data-size="{{^small}}46{{/small}}{{#small}}39{{/small}}">
			<span class="percent">{{progress}}</span>%
		</div>
		<!-- /section:pages/dashboard.infobox.easypiechart -->
	 </div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <div class="infobox-progress">';
                $buffer .= "\n";
                $buffer .= $indent . '		<!-- #section:pages/dashboard.infobox.easypiechart -->';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="easy-pie-chart percentage" data-percent="';
                $value = $this->resolveValue($context->find('progress'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '" data-size="';
                // 'small' inverted section
                $value = $context->find('small');
                if (empty($value)) {
                    
                    $buffer .= '46';
                }
                // 'small' section
                $buffer .= $this->section653a1b77ffe301ac2d353c6a29da89ef($context, $indent, $context->find('small'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="percent">';
                $value = $this->resolveValue($context->find('progress'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>%';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<!-- /section:pages/dashboard.infobox.easypiechart -->';
                $buffer .= "\n";
                $buffer .= $indent . '	 </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8426b7fd69c6d4638bea910b5d1bf08a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <!-- #section:pages/dashboard.infobox.sparkline -->
	 <div class="infobox-chart">
		<span class="sparkline" data-values="{{chart}}"></span>
	 </div>
	 <!-- /section:pages/dashboard.infobox.sparkline -->
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <!-- #section:pages/dashboard.infobox.sparkline -->';
                $buffer .= "\n";
                $buffer .= $indent . '	 <div class="infobox-chart">';
                $buffer .= "\n";
                $buffer .= $indent . '		<span class="sparkline" data-values="';
                $value = $this->resolveValue($context->find('chart'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '	 </div>';
                $buffer .= "\n";
                $buffer .= $indent . '	 <!-- /section:pages/dashboard.infobox.sparkline -->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section540b1853020520d087ca720e5317362c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<span class="infobox-data-number">{{number}}</span>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<span class="infobox-data-number">';
                $value = $this->resolveValue($context->find('number'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bfeba88dc48d687ecc6e4810f9d07ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<span class="infobox-text">{{text}}</span>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<span class="infobox-text">';
                $value = $this->resolveValue($context->find('text'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section713941c1468bb3c7491d9c197df1a567(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! sometimes we have two content texts like in smaller infoboxes, so use a loop }}
		<div class="infobox-content">{{{.}}}</div>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<div class="infobox-content">';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= $value;
                $buffer .= '</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section527af9b9cad5e198c0fee3c607abe0d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <!-- #section:pages/dashboard.infobox.stat -->
	 <div class="stat stat-success">{{stat-success}}</div>
	 <!-- /section:pages/dashboard.infobox.stat -->
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <!-- #section:pages/dashboard.infobox.stat -->';
                $buffer .= "\n";
                $buffer .= $indent . '	 <div class="stat stat-success">';
                $value = $this->resolveValue($context->find('stat-success'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	 <!-- /section:pages/dashboard.infobox.stat -->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d9767f477f52f60f35085e968f33ce3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="stat stat-important">{{stat-important}}</div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <div class="stat stat-important">';
                $value = $this->resolveValue($context->find('stat-important'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7fb7bc12f8740b7d83046b8c3fa5f95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="badge badge-success">{{badge-success}} <i class="ace-icon fa fa-arrow-up"></i></div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <div class="badge badge-success">';
                $value = $this->resolveValue($context->find('badge-success'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ' <i class="ace-icon fa fa-arrow-up"></i></div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdbdc57f46293eee121a0dac2e151a33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 <div class="badge badge-danger">{{badge-important}} <i class="ace-icon fa fa-arrow-down"></i></div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	 <div class="badge badge-danger">';
                $value = $this->resolveValue($context->find('badge-important'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ' <i class="ace-icon fa fa-arrow-down"></i></div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
