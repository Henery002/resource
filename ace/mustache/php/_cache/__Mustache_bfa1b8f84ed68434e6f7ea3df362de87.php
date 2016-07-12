<?php

class __Mustache_bfa1b8f84ed68434e6f7ea3df362de87 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . 'index.php?page=';
        $value = $this->resolveValue($context->find('link'), $context, $indent);
        $buffer .= htmlspecialchars($value, ENT_COMPAT, 'UTF-8');

        return $buffer;
    }
}
