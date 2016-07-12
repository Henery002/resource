<?php

class __Mustache_7b5c1ddab91174fc49377b44091f7043 extends Mustache_Template
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
        $buffer .= $indent . '<!-- page specific plugin scripts -->';
        $buffer .= "\n";
        // 'page.ie_scripts' section
        $buffer .= $this->sectionD1bea1300a91f8955474d723b0ca3fa9($context, $indent, $context->findDot('page.ie_scripts'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'page.scripts' section
        $buffer .= $this->sectionF3807ae2748cd4c0767304a59de4fc36($context, $indent, $context->findDot('page.scripts'));
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
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- inline scripts related to this page -->';
        $buffer .= "\n";
        // 'page.inline_scripts' section
        $buffer .= $this->section458013a5eeea0061124ccd780977da71($context, $indent, $context->findDot('page.inline_scripts'));
        $buffer .= $indent . '';
        $buffer .= "\n";
        $buffer .= $indent . '';
        $buffer .= "\n";
        // 'site.onpage_help' section
        $buffer .= $this->sectionD9cc846c57c2ebffa69f1bf22bfa0897($context, $indent, $context->findDot('site.onpage_help'));

        return $buffer;
    }

    private function sectionD1bea1300a91f8955474d723b0ca3fa9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<!--[if lte IE {{version}}]>
  <script src="{{{path.assets}}}/js/{{{file_name}}}"></script>
<![endif]-->
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<!--[if lte IE ';
                $value = $this->resolveValue($context->find('version'), $context, $indent);
                $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                $buffer .= ']>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/';
                $value = $this->resolveValue($context->find('file_name'), $context, $indent);
                $buffer .= $value;
                $buffer .= '"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '<![endif]-->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3807ae2748cd4c0767304a59de4fc36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script src="{{{path.assets}}}/js/{{{.}}}"></script>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/';
                $value = $this->resolveValue($context->last(), $context, $indent);
                $buffer .= $value;
                $buffer .= '"></script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
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

    private function section458013a5eeea0061124ccd780977da71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script type="text/javascript">
{{{page.inline_scripts}}}
</script>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<script type="text/javascript">';
                $buffer .= "\n";
                $value = $this->resolveValue($context->findDot('page.inline_scripts'), $context, $indent);
                $buffer .= $indent . $value;
                $buffer .= '';
                $buffer .= "\n";
                $buffer .= $indent . '</script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9cc846c57c2ebffa69f1bf22bfa0897(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{! enable on page help }}
  <!-- the following scripts are used in demo only for onpage help and you don\'t need them -->
  <link rel="stylesheet" href="{{{path.assets}}}/css/ace.onpage-help.css" />
  <link rel="stylesheet" href="{{{path.base}}}/docs/assets/js/themes/sunburst.css" />

  <script type="text/javascript">ace.vars[\'base\'] = \'{{{path.base}}}\';</script>
  <script src="{{{path.assets}}}/js/ace/elements.onpage-help.js"></script>
  <script src="{{{path.assets}}}/js/ace/ace.onpage-help.js"></script>
  <script src="{{{path.base}}}/docs/assets/js/rainbow.js"></script>
  <script src="{{{path.base}}}/docs/assets/js/language/generic.js"></script>
  <script src="{{{path.base}}}/docs/assets/js/language/html.js"></script>
  <script src="{{{path.base}}}/docs/assets/js/language/css.js"></script>  
  <script src="{{{path.base}}}/docs/assets/js/language/javascript.js"></script>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '  <!-- the following scripts are used in demo only for onpage help and you don\'t need them -->';
                $buffer .= "\n";
                $buffer .= $indent . '  <link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/css/ace.onpage-help.css" />';
                $buffer .= "\n";
                $buffer .= $indent . '  <link rel="stylesheet" href="';
                $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/themes/sunburst.css" />';
                $buffer .= "\n";
                $buffer .= $indent . '';
                $buffer .= "\n";
                $buffer .= $indent . '  <script type="text/javascript">ace.vars[\'base\'] = \'';
                $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
                $buffer .= $value;
                $buffer .= '\';</script>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/ace/elements.onpage-help.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.assets'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/js/ace/ace.onpage-help.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/rainbow.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/language/generic.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/language/html.js"></script>';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/language/css.js"></script>  ';
                $buffer .= "\n";
                $buffer .= $indent . '  <script src="';
                $value = $this->resolveValue($context->findDot('path.base'), $context, $indent);
                $buffer .= $value;
                $buffer .= '/docs/assets/js/language/javascript.js"></script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
