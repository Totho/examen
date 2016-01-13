<?php

class __Mustache_0bc6f5be023322c6d1dd746e75ab9a36 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<nav role="navigation" class="navbar ';
        $value = $this->resolveValue($context->find('navbartype'), $context, $indent);
        $buffer .= $value;
        $buffer .= ' eboxshadow">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid">
';
        $buffer .= $indent . '        <div class="navbar-header pull-left">
';
        $buffer .= $indent . '            <a class="navbar-brand" href="';
        $value = $this->resolveValue($context->find('homeurl'), $context, $indent);
        $buffer .= $value;
        $buffer .= '">';
        $value = $this->resolveValue($context->find('logo'), $context, $indent);
        $buffer .= $value;
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="navbar-header pull-right">
';
        $buffer .= $indent . '            <ul class="nav navbar-nav hidden-xs hidden-sm">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('messagemenu'), $context, $indent);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('usermenu'), $context, $indent);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            
';
        // 'hascustom' section
        $value = $context->find('hascustom');
        $buffer .= $this->section2326df87a20bcbed2e18c9a208433f02($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        // 'hascustom' section
        $value = $context->find('hascustom');
        $buffer .= $this->sectionD054b037705f968c91d14fb0711d8eb6($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</nav>';

        return $buffer;
    }

    private function section2326df87a20bcbed2e18c9a208433f02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#moodle-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
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
                
                $buffer .= $indent . '            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#moodle-navbar">
';
                $buffer .= $indent . '                <span class="sr-only">Toggle navigation</span>
';
                $buffer .= $indent . '                <span class="icon-bar"></span>
';
                $buffer .= $indent . '                <span class="icon-bar"></span>
';
                $buffer .= $indent . '                <span class="icon-bar"></span>
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD054b037705f968c91d14fb0711d8eb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div id="moodle-navbar" class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav pull-right">
            {{{custommenu}}}
            </ul>
            
            <ul class="nav pull-right">
                <li>{{{headingmenu}}}</li>
            </ul>
            
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
                
                $buffer .= $indent . '        <div id="moodle-navbar" class="navbar-collapse collapse navbar-right">
';
                $buffer .= $indent . '            <ul class="nav navbar-nav pull-right">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('custommenu'), $context, $indent);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '            
';
                $buffer .= $indent . '            <ul class="nav pull-right">
';
                $buffer .= $indent . '                <li>';
                $value = $this->resolveValue($context->find('headingmenu'), $context, $indent);
                $buffer .= $value;
                $buffer .= '</li>
';
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '            
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
