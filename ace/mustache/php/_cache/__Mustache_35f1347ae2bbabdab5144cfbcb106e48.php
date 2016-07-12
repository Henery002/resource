<?php

class __Mustache_35f1347ae2bbabdab5144cfbcb106e48 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="alert alert-block alert-success">';
        $buffer .= "\n";
        $buffer .= $indent . '	<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>';
        $buffer .= "\n";
        $buffer .= $indent . '	<i class="ace-icon fa fa-check green"></i> Welcome to <strong class="green">Ace <small>(v';
        $value = $this->resolveValue($context->findDot('site.version'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        $buffer .= ')</small></strong>,';
        $buffer .= "\n";
        $buffer .= $indent . '	the lightweight, feature-rich and easy to use admin template.';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="space-6"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-7 infobox-container">';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- #section:pages/dashboard.infobox -->';
        $buffer .= "\n";
        // 'page.stats1' section
        $buffer .= $this->section936caf211a929f929c7a0f57f2f7eb31($context, $indent, $context->findDot('page.stats1'));
        $buffer .= $indent . '	<!-- /section:pages/dashboard.infobox -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="space-6"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- #section:pages/dashboard.infobox.dark -->';
        $buffer .= "\n";
        // 'page.stats2' section
        $buffer .= $this->section936caf211a929f929c7a0f57f2f7eb31($context, $indent, $context->findDot('page.stats2'));
        $buffer .= $indent . '	<!-- /section:pages/dashboard.infobox.dark -->';
        $buffer .= "\n";
        $buffer .= $indent . ' </div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="vspace-12-sm"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-5">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-header widget-header-flat widget-header-small">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h5 class="widget-title"><i class="ace-icon fa fa-signal"></i> Traffic Sources</h5>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-toolbar no-border">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <div class="inline dropdown-hover">';
        $buffer .= "\n";
        $buffer .= $indent . '				<button class="btn btn-minier btn-primary">';
        $buffer .= "\n";
        $buffer .= $indent . '					This Week <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '				</button>';
        $buffer .= "\n";
        $buffer .= $indent . '				<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">';
        $buffer .= "\n";
        $buffer .= $indent . '					<li class="active">';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="#" class="blue">';
        $buffer .= "\n";
        $buffer .= $indent . '							<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i> This Week';
        $buffer .= "\n";
        $buffer .= $indent . '						</a>';
        $buffer .= "\n";
        $buffer .= $indent . '					</li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a href="#"><i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i> Last Week</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a href="#"><i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i> This Month</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a href="#"><i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i> Last Month</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '				</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '			 </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="widget-main">';
        $buffer .= "\n";
        $buffer .= $indent . '			<!-- #section:plugins/charts.flotchart -->';
        $buffer .= "\n";
        $buffer .= $indent . '			<div id="piechart-placeholder"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<!-- /section:plugins/charts.flotchart -->';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="hr hr8 hr-double"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="clearfix">';
        $buffer .= "\n";
        $buffer .= $indent . '				<!-- #section:custom/extra.grid -->';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="grid3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="grey"><i class="ace-icon fa fa-facebook-square fa-2x blue"></i> &nbsp; likes</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4 class="bigger pull-right">1,255</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="grid3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="grey"><i class="ace-icon fa fa-twitter-square fa-2x purple"></i> &nbsp; tweets</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4 class="bigger pull-right">941</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="grid3">';
        $buffer .= "\n";
        $buffer .= $indent . '					<span class="grey"><i class="ace-icon fa fa-pinterest-square fa-2x red"></i> &nbsp; pins</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4 class="bigger pull-right">1,050</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<!-- /section:custom/extra.grid -->';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		 </div><!-- /.widget-main -->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.widget-body -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.widget-box -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- /.col -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- /.row -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- #section:custom/extra.hr -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr32 hr-dotted"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- /section:custom/extra.hr -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="col-sm-5">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-box transparent">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-header widget-header-flat">';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4 class="widget-title lighter">';
        $buffer .= "\n";
        $buffer .= $indent . '					<i class="ace-icon fa fa-star orange"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '					Popular Domains';
        $buffer .= "\n";
        $buffer .= $indent . '				</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" data-action="collapse">';
        $buffer .= "\n";
        $buffer .= $indent . '						<i class="ace-icon fa fa-chevron-up"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '					</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <div class="widget-main no-padding">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.domains')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
        $buffer .= $indent . '			 </div><!-- /.widget-main -->';
        $buffer .= "\n";
        $buffer .= $indent . '			</div><!-- /.widget-body -->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.widget-box -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.col -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="col-sm-7">';
        $buffer .= "\n";
        $buffer .= $indent . '	  <div class="widget-box transparent">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-header widget-header-flat">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h4 class="widget-title lighter"><i class="ace-icon fa fa-signal"></i> Sale Stats</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-toolbar">';
        $buffer .= "\n";
        $buffer .= $indent . '				<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="widget-main padding-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div id="sales-charts"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		 </div><!-- /.widget-main -->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.widget-body -->';
        $buffer .= "\n";
        $buffer .= $indent . '	  </div><!-- /.widget-box -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.col -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- /.row -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="hr hr32 hr-dotted"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-box transparent" id="recent-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h4 class="widget-title lighter smaller"><i class="ace-icon fa fa-rss orange"></i>RECENT</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="widget-toolbar no-border">';
        $buffer .= "\n";
        $buffer .= $indent . '				<ul class="nav nav-tabs" id="recent-tab">';
        $buffer .= "\n";
        $buffer .= $indent . '					<li class="active"><a data-toggle="tab" href="#task-tab">Tasks</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a data-toggle="tab" href="#member-tab">Members</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a data-toggle="tab" href="#comment-tab">Comments</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '				</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="widget-main padding-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="tab-content padding-8">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div id="task-tab" class="tab-pane active">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h4 class="smaller lighter green">';
        $buffer .= "\n";
        $buffer .= $indent . '						<i class="ace-icon fa fa-list"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '						Sortable Lists';
        $buffer .= "\n";
        $buffer .= $indent . '					</h4>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.tasks')) {
            $buffer .= $partial->renderInternal($context, '					');
        }
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div id="member-tab" class="tab-pane">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.members')) {
            $buffer .= $partial->renderInternal($context, '					');
        }
        $buffer .= $indent . '				</div><!-- /.#member-tab -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '				<div id="comment-tab" class="tab-pane">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.comments')) {
            $buffer .= $partial->renderInternal($context, '					');
        }
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		 </div><!-- /.widget-main -->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.widget-body -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.widget-box -->';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- /.col -->';
        $buffer .= "\n";
        $buffer .= $indent . ' ';
        $buffer .= "\n";
        $buffer .= $indent . ' <div class="col-sm-6">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="widget-box ">';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h4 class="widget-title lighter smaller">';
        $buffer .= "\n";
        $buffer .= $indent . '				<i class="ace-icon fa fa-comment blue"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '				Conversation';
        $buffer .= "\n";
        $buffer .= $indent . '			</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="widget-body">';
        $buffer .= "\n";
        $buffer .= $indent . '		 <div class="widget-main no-padding">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('page.conversations')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= $indent . '		 </div><!-- /.widget-main -->';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.widget-body -->';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.widget-box -->';
        $buffer .= "\n";
        $buffer .= $indent . ' </div><!-- /.col -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '</div><!-- /.row -->';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";

        return $buffer;
    }

    private function section936caf211a929f929c7a0f57f2f7eb31(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 {{> page.infobox}}
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('page.infobox')) {
                    $buffer .= $partial->renderInternal($context, '	 ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
