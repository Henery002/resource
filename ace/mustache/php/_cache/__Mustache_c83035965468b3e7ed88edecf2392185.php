<?php

class __Mustache_c83035965468b3e7ed88edecf2392185 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '#page/';
        $value = $this->resolveValue($context->find('link'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');

        return $buffer;
    }
}
