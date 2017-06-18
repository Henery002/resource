<?php

class __Mustache_320a87d2598fdd2cf30d9767a9d82ced extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li class="transparent">';
        $buffer .= "\n";
        $buffer .= $indent . '	<a data-toggle="dropdown" class="dropdown-toggle" href="#">';
        $buffer .= "\n";
        $buffer .= $indent . '		<i class="ace-icon fa fa-bell icon-animated-bell"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '	</a>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="tabbable">';
        $buffer .= "\n";
        $buffer .= $indent . '            ';
        $buffer .= "\n";
        $buffer .= $indent . '			<ul class="nav nav-tabs">';
        $buffer .= "\n";
        $buffer .= $indent . '              <li class="active">';
        $buffer .= "\n";
        $buffer .= $indent . '				<a data-toggle="tab" href="#navbar-tasks">';
        $buffer .= "\n";
        $buffer .= $indent . '					Tasks';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="badge badge-danger">4</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</a>';
        $buffer .= "\n";
        $buffer .= $indent . '			  </li>';
        $buffer .= "\n";
        $buffer .= $indent . '              <li>';
        $buffer .= "\n";
        $buffer .= $indent . '				<a data-toggle="tab" href="#navbar-messages">';
        $buffer .= "\n";
        $buffer .= $indent . '					Messages';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="badge badge-danger">5</span>';
        $buffer .= "\n";
        $buffer .= $indent . '				</a>';
        $buffer .= "\n";
        $buffer .= $indent . '			  </li>';
        $buffer .= "\n";
        $buffer .= $indent . '            </ul><!-- .nav-tabs -->';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="tab-content">';
        $buffer .= "\n";
        $buffer .= $indent . '			  <div id="navbar-tasks" class="tab-pane in active">';
        $buffer .= "\n";
        $buffer .= $indent . '					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">';
        $buffer .= "\n";
        // 'layout.navbar_tasks.latest' section
        $buffer .= $this->section42f3447c5d9a40e493f17f7eab1fcab4($context, $indent, $context->findDot('layout.navbar_tasks.latest'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '						<li class="dropdown-footer">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="#">';
        $buffer .= "\n";
        $buffer .= $indent . '								See tasks with details';
        $buffer .= "\n";
        $buffer .= $indent . '								<i class="ace-icon fa fa-arrow-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</li>';
        $buffer .= "\n";
        $buffer .= $indent . '					</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '			  </div><!-- /.tab-pane -->';
        $buffer .= "\n";
        $buffer .= $indent . '			  ';
        $buffer .= "\n";
        $buffer .= $indent . '			  <div id="navbar-messages" class="tab-pane">';
        $buffer .= "\n";
        $buffer .= $indent . '					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '						<li class="dropdown-content">';
        $buffer .= "\n";
        $buffer .= $indent . '							<ul class="dropdown-menu dropdown-navbar">';
        $buffer .= "\n";
        // 'layout.navbar_messages.latest' section
        $buffer .= $this->section6a6eb4cce376bcb9c479fdad01044e4b($context, $indent, $context->findDot('layout.navbar_messages.latest'));
        $buffer .= $indent . '							</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '						</li>';
        $buffer .= "\n";
        $buffer .= $indent . '						';
        $buffer .= "\n";
        $buffer .= $indent . '						<li class="dropdown-footer">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="';
        // 'createLinkFunction' section
        $buffer .= $this->sectionFc875a68f3095c7a553812dec53af0df($context, $indent, $context->find('createLinkFunction'));
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '								See all messages';
        $buffer .= "\n";
        $buffer .= $indent . '								<i class="ace-icon fa fa-arrow-right"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</li>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '					</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '			  </div><!-- /.tab-pane -->';
        $buffer .= "\n";
        $buffer .= $indent . '            </div><!-- /.tab-content -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.tabbable -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.dropdown-menu -->';
        $buffer .= "\n";
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section42f3447c5d9a40e493f17f7eab1fcab4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<li>
							<a href="#">
								<div class="clearfix">
									<span class="pull-left">{{title}}</span>
									<span class="pull-right">{{percentage}}%</span>
								</div>
								<div class="progress progress-mini {{progress-class}}">
									<div style="width:{{percentage}}%" class="progress-bar {{progress-bar-class}}"></div>
								</div>
							</a>
						</li>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<li>';
                $buffer .= "\n";
                $buffer .= $indent . '							<a href="#">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="clearfix">';
                $buffer .= "\n";
                $buffer .= $indent . '									<span class="pull-left">';
                $value = $this->resolveValue($context->find('title'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '									<span class="pull-right">';
                $value = $this->resolveValue($context->find('percentage'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '%</span>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="progress progress-mini ';
                $value = $this->resolveValue($context->find('progress-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '									<div style="width:';
                $value = $this->resolveValue($context->find('percentage'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '%" class="progress-bar ';
                $value = $this->resolveValue($context->find('progress-bar-class'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '"></div>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a6eb4cce376bcb9c479fdad01044e4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<li>
									<a href="#">
										<img src="{{path.assets}}/avatars/{{img}}" class="msg-photo" alt="{{name}}\'s Avatar">
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">{{name}}:</span>
												{{summary}}
											</span>
											<span class="msg-time">
												<i class="ace-icon fa fa-clock-o"></i> <span>{{time}}</span>
											</span>
										</span>
									</a>
								</li>
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '								<li>';
                $buffer .= "\n";
                $buffer .= $indent . '									<a href="#">';
                $buffer .= "\n";
                $buffer .= $indent . '										<img src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '/avatars/';
                $value = $this->resolveValue($context->find('img'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '" class="msg-photo" alt="';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '\'s Avatar">';
                $buffer .= "\n";
                $buffer .= $indent . '										<span class="msg-body">';
                $buffer .= "\n";
                $buffer .= $indent . '											<span class="msg-title">';
                $buffer .= "\n";
                $buffer .= $indent . '												<span class="blue">';
                $value = $this->resolveValue($context->find('name'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ':</span>';
                $buffer .= "\n";
                $buffer .= $indent . '												';
                $value = $this->resolveValue($context->find('summary'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '';
                $buffer .= "\n";
                $buffer .= $indent . '											</span>';
                $buffer .= "\n";
                $buffer .= $indent . '											<span class="msg-time">';
                $buffer .= "\n";
                $buffer .= $indent . '												<i class="ace-icon fa fa-clock-o"></i> <span>';
                $value = $this->resolveValue($context->find('time'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '											</span>';
                $buffer .= "\n";
                $buffer .= $indent . '										</span>';
                $buffer .= "\n";
                $buffer .= $indent . '									</a>';
                $buffer .= "\n";
                $buffer .= $indent . '								</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc875a68f3095c7a553812dec53af0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'inbox';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'inbox';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
