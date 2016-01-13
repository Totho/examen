<?php

class __Mustache_8ffb09e043a456b5519299cf8e5ac412 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'frontpagetext' section
        $value = $context->find('frontpagetext');
        $buffer .= $this->section4ec1787650a4e290d1578a19afb0c4a6($context, $indent, $value);

        return $buffer;
    }

    private function section4ec1787650a4e290d1578a19afb0c4a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="container-fluid">
    <div id="fontpagecontent">
        {{{frontpagetext}}}
    </div>
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="container-fluid">
';
                $buffer .= $indent . '    <div id="fontpagecontent">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('frontpagetext'), $context, $indent);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
