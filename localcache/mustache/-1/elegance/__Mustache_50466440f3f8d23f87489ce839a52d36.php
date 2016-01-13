<?php

class __Mustache_50466440f3f8d23f87489ce839a52d36 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="footnote">';
        $value = $this->resolveValue($context->find('footnote'), $context, $indent);
        $buffer .= $value;
        $buffer .= '</div>';

        return $buffer;
    }
}
