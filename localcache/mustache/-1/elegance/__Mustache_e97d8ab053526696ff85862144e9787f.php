<?php

class __Mustache_e97d8ab053526696ff85862144e9787f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'hascrumbs' section
        $value = $context->find('hascrumbs');
        $buffer .= $this->section6aa020be0adf80d28e68a36cb7814c53($context, $indent, $value);

        return $buffer;
    }

    private function section6a11f73578668a98f0b09b96a8ccf480(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class={{class}}>{{{item}}}</li>
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
                
                $buffer .= $indent . '                        <li class=';
                $value = $this->resolveValue($context->find('class'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('item'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95145d39ca968b632db317d767008d4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="breadcrumb-button m-0">{{{button}}}</div>
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
                
                $buffer .= $indent . '            <div class="breadcrumb-button m-0">';
                $value = $this->resolveValue($context->find('button'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6aa020be0adf80d28e68a36cb7814c53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="page-navbar" >
    <div class="container-fluid">
        <div class="breadcrumbcontainer {{addclasses}}">
            <nav class="breadcrumb-nav elegancewidth" role="navigation" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    {{#breadcrumbs}}
                        <li class={{class}}>{{{item}}}</li>
                    {{/breadcrumbs}}
                </ol>
            </nav>
            {{#button}}
            <div class="breadcrumb-button m-0">{{{button}}}</div>
            {{/button}}
            <div class="clearfix"></div>
        </div>
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
                
                $buffer .= $indent . '<div id="page-navbar" >
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '        <div class="breadcrumbcontainer ';
                $value = $this->resolveValue($context->find('addclasses'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <nav class="breadcrumb-nav elegancewidth" role="navigation" aria-label="breadcrumb">
';
                $buffer .= $indent . '                <ol class="breadcrumb">
';
                // 'breadcrumbs' section
                $value = $context->find('breadcrumbs');
                $buffer .= $this->section6a11f73578668a98f0b09b96a8ccf480($context, $indent, $value);
                $buffer .= $indent . '                </ol>
';
                $buffer .= $indent . '            </nav>
';
                // 'button' section
                $value = $context->find('button');
                $buffer .= $this->section95145d39ca968b632db317d767008d4b($context, $indent, $value);
                $buffer .= $indent . '            <div class="clearfix"></div>
';
                $buffer .= $indent . '        </div>
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
