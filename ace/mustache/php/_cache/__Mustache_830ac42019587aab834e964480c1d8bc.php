<?php

class __Mustache_830ac42019587aab834e964480c1d8bc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!-- basic scripts -->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('layout._template.jquery')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        if ($partial = $this->mustache->loadPartial('layout._template.bootstrap')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- ace scripts -->';
        $buffer .= "\n";
        // 'site.development' inverted section
        $value = $context->findDot('site.development');
        if (empty($value)) {
            
            $buffer .= $indent . ' <script src="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
            $buffer .= $value;
            $buffer .= '/js/ace-elements.min.js"></script>';
            $buffer .= "\n";
            $buffer .= $indent . ' <script src="';
            $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
            $buffer .= $value;
            $buffer .= '/js/ace.min.js"></script>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'site.development' section
        $buffer .= $this->section9975b6577d734404d1c8312b254e5be3($context, $indent, $context->findDot('site.development'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '//Load content via ajax';
        $buffer .= "\n";
        $buffer .= $indent . 'jQuery(function($) {';
        $buffer .= "\n";
        $buffer .= $indent . '  if(\'enable_ajax_content\' in ace) {';
        $buffer .= "\n";
        $buffer .= $indent . '	var options = {';
        $buffer .= "\n";
        $buffer .= $indent . '	  content_url: function(url) {';
        $buffer .= "\n";
        $buffer .= $indent . '		//this is for Ace demo only, you should change it';
        $buffer .= "\n";
        $buffer .= $indent . '		//please refer to documentation for more info';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '		if(!url.match(/^page\\//)) return false;';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		var path = document.location.pathname;';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		//for Ace HTML demo version, convert ajax.html#page/gallery to > gallery.html and load it';
        $buffer .= "\n";
        $buffer .= $indent . '		if(path.match(/ajax\\.html/)) return path.replace(/ajax\\.html/, url.replace(/^page\\//, \'\')+\'.html\') ;';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '		//for Ace PHP demo version convert "page/dashboard" to "?page=dashboard" and load it';
        $buffer .= "\n";
        $buffer .= $indent . '		return path + "?" + url.replace(/\\//, "=");';
        $buffer .= "\n";
        $buffer .= $indent . '	  },';
        $buffer .= "\n";
        $buffer .= $indent . '	  default_url: \'page/index\'//default url';
        $buffer .= "\n";
        $buffer .= $indent . '	}';
        $buffer .= "\n";
        $buffer .= $indent . '	ace.enable_ajax_content($, options)';
        $buffer .= "\n";
        $buffer .= $indent . '  }';
        $buffer .= "\n";
        $buffer .= $indent . '    ';
        $buffer .= "\n";
        $buffer .= $indent . '})';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";

        return $buffer;
    }

    private function section46dd3d57a7f3164f290e469a7c2ce846(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <script src="{{{path.assets}}}/js/ace/{{{.}}}"></script>
 ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/ace/';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= $value;
                $buffer .= '"></script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9975b6577d734404d1c8312b254e5be3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! in development mode use separate script files }}
 {{#site.ace_scripts}}
  <script src="{{{path.assets}}}/js/ace/{{{.}}}"></script>
 {{/site.ace_scripts}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'site.ace_scripts' section
                $buffer .= $this->section46dd3d57a7f3164f290e469a7c2ce846($context, $indent, $context->findDot('site.ace_scripts'));
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
