<?php

class __Mustache_b15df240165db4962b3e6395c3516f05 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        // 'hasicons' section
        $value = $context->find('hasicons');
        $buffer .= $this->section328195258d5a31123d81a914ddc22a57($context, $indent, $value);

        return $buffer;
    }

    private function sectionB31a7f6acc3c429ee3a33abb0f82ce30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' ios, theme_elegance';
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
                
                $buffer .= ' ios, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7949fa518470f03962d657acc09a1fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{ios}}} class="socialicon ios">
        <i class="fa fa-apple fa-inverse"></i>
        <span class="sr-only">{{#str}} ios, theme_elegance{{/str}}</span>
        </a>  
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('ios'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon ios">
';
                $buffer .= $indent . '        <i class="fa fa-apple fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB31a7f6acc3c429ee3a33abb0f82ce30($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>  
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60b7e3fddaae7f57e725784cb6b453ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' android, theme_elegance';
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
                
                $buffer .= ' android, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB38f3ec09e7254b97039fd809f7d8ea9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{android}}} class="socialicon android">
        <i class="fa fa-android fa-inverse"></i>
        <span class="sr-only">{{#str}} android, theme_elegance{{/str}}</span>
        </a>  
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('android'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon android">
';
                $buffer .= $indent . '        <i class="fa fa-android fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section60b7e3fddaae7f57e725784cb6b453ba($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>  
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97e2250623995255e6a246eafbfe30e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' winphone, theme_elegance';
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
                
                $buffer .= ' winphone, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5bd526ed32ed27fa77884cd63c14439(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{winphone}}} class="socialicon winphone">
        <i class="fa fa-windows fa-inverse"></i>
        <span class="sr-only">{{#str}} winphone, theme_elegance{{/str}}</span>
        </a>  
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('winphone'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon winphone">
';
                $buffer .= $indent . '        <i class="fa fa-windows fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section97e2250623995255e6a246eafbfe30e6($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>  
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0186813d9621a901a2ee9ca876e0af8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' windows, theme_elegance';
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
                
                $buffer .= ' windows, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section122568c741609bc8befcaf718605a5cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{windows}}} class="socialicon windows">
        <i class="fa fa-windows fa-inverse"></i>
        <span class="sr-only">{{#str}} windows, theme_elegance{{/str}}</span>
        </a>  
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('windows'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon windows">
';
                $buffer .= $indent . '        <i class="fa fa-windows fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0186813d9621a901a2ee9ca876e0af8f($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>  
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33de621fa8929ab185e46270bfabd4bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociofacebook, theme_elegance';
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
                
                $buffer .= ' sociofacebook, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a97f730e7e066af3f830294c01f4025(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{facebook}}} class="socialicon facebook">
        <i class="fa fa-facebook fa-inverse"></i>
        <span class="sr-only">{{#str}} sociofacebook, theme_elegance{{/str}}</span>
        </a>  
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('facebook'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon facebook">
';
                $buffer .= $indent . '        <i class="fa fa-facebook fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section33de621fa8929ab185e46270bfabd4bf($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>  
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4417dfde59be4caa3c7a9d9218faeb33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociotwitter, theme_elegance';
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
                
                $buffer .= ' sociotwitter, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6e8a08587caf87b14c8a1dfe90b44a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{twitter}}} class="socialicon twitter">
        <i class="fa fa-twitter fa-inverse"></i>
        <span class="sr-only">{{#str}} sociotwitter, theme_elegance{{/str}}</span>
        </a>   
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('twitter'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon twitter">
';
                $buffer .= $indent . '        <i class="fa fa-twitter fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section4417dfde59be4caa3c7a9d9218faeb33($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>   
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6411a63cd942df10e025084b197bffc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociogoogleplus, theme_elegance';
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
                
                $buffer .= ' sociogoogleplus, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7eb32fee28cb56b93005988390c004d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{googleplus}}} class="socialicon googleplus">
        <i class="fa fa-google-plus fa-inverse"></i>
        <span class="sr-only">{{#str}} sociogoogleplus, theme_elegance{{/str}}</span>
        </a>    
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('googleplus'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon googleplus">
';
                $buffer .= $indent . '        <i class="fa fa-google-plus fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6411a63cd942df10e025084b197bffc7($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>    
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81bbe21b680b0b27536d1f3e666c79e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociolinkedin, theme_elegance';
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
                
                $buffer .= ' sociolinkedin, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa7495ded32fba5dbd2dd13eb30caadf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{linkedin}}} class="socialicon linkedin">
        <i class="fa fa-linkedin fa-inverse"></i>
        <span class="sr-only">{{#str}} sociolinkedin, theme_elegance{{/str}}</span>
        </a> 
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('linkedin'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon linkedin">
';
                $buffer .= $indent . '        <i class="fa fa-linkedin fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section81bbe21b680b0b27536d1f3e666c79e8($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFad108deec55a2c99789d8268f510fb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' socioyoutube, theme_elegance';
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
                
                $buffer .= ' socioyoutube, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f2c28aaa87bbcad822e0d288aebc1b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{youtube}}} class="socialicon youtube">
        <i class="fa fa-youtube fa-inverse"></i>
        <span class="sr-only">{{#str}} socioyoutube, theme_elegance{{/str}}</span>
        </a> 
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('youtube'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon youtube">
';
                $buffer .= $indent . '        <i class="fa fa-youtube fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFad108deec55a2c99789d8268f510fb6($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b8d02928393d9894d275a217a93a4c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' socioflickr, theme_elegance';
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
                
                $buffer .= ' socioflickr, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7c9a285af23c57bf00fc1bddead7828(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{flickr}}} class="socialicon flickr">
        <i class="fa fa-flickr fa-inverse"></i>
        <span class="sr-only">{{#str}} socioflickr, theme_elegance{{/str}}</span>
        </a> 
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('flickr'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon flickr">
';
                $buffer .= $indent . '        <i class="fa fa-flickr fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0b8d02928393d9894d275a217a93a4c8($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa4716eb4ecd96e18088a66b4bc56b0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociovk, theme_elegance';
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
                
                $buffer .= ' sociovk, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8712733717e56d0a1d6bbccb9e74b54c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{vk}}} class="socialicon vk">
        <i class="fa fa-vk fa-inverse"></i>
        <span class="sr-only">{{#str}} sociovk, theme_elegance{{/str}}</span>
        </a>
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('vk'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon vk">
';
                $buffer .= $indent . '        <i class="fa fa-vk fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEa4716eb4ecd96e18088a66b4bc56b0d($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7cb884511b58097a5834b7fc63069135(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociopinterest, theme_elegance';
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
                
                $buffer .= ' sociopinterest, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9af44d76c163f3ce0e0831871c3107c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{pinterest}}} class="socialicon pinterest">
        <i class="fa fa-pinterest fa-inverse"></i>
        <span class="sr-only">{{#str}} sociopinterest, theme_elegance{{/str}}</span>
        </a> 
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('pinterest'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon pinterest">
';
                $buffer .= $indent . '        <i class="fa fa-pinterest fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section7cb884511b58097a5834b7fc63069135($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2bb47bd0fc7eaeb85dedaf87c3106a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' socioinstagram, theme_elegance';
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
                
                $buffer .= ' socioinstagram, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36443419f03cb6e27dbbc9ca1e84bcd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{instagram}}} class="socialicon instagram">
        <i class="fa fa-instagram fa-inverse"></i>
        <span class="sr-only">{{#str}} socioinstagram, theme_elegance{{/str}}</span>
        </a>
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('instagram'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon instagram">
';
                $buffer .= $indent . '        <i class="fa fa-instagram fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD2bb47bd0fc7eaeb85dedaf87c3106a6($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section544006a4f6355c615f873324c98255ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' socioskype, theme_elegance';
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
                
                $buffer .= ' socioskype, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE10921cc640c5f33a1c33aa78bca2db9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="skype:{{{skype}}}?call" class="socialicon skype">
        <i class="fa fa-skype fa-inverse"></i>
        <span class="sr-only">{{#str}} socioskype, theme_elegance{{/str}}</span>
        </a>
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
                
                $buffer .= $indent . '        <a href="skype:';
                $value = $this->resolveValue($context->find('skype'), $context, $indent);
                $buffer .= $value;
                $buffer .= '?call" class="socialicon skype">
';
                $buffer .= $indent . '        <i class="fa fa-skype fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section544006a4f6355c615f873324c98255ce($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbb7d37761d23df7d7ac64e0d0848cfe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociowebsite, theme_elegance';
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
                
                $buffer .= ' sociowebsite, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section133f3515a1f87b69716b037a7ca57571(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{website}}} class="socialicon website">
        <i class="fa fa-globe fa-inverse"></i>
        <span class="sr-only">{{#str}} sociowebsite, theme_elegance{{/str}}</span>
        </a>
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('website'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon website">
';
                $buffer .= $indent . '        <i class="fa fa-globe fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAbb7d37761d23df7d7ac64e0d0848cfe($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79fd3216a349007d0eef476e3c0a017a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' socioblog, theme_elegance';
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
                
                $buffer .= ' socioblog, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF135ea1aff30f4a6a4b190ce998a703b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{blog}}} class="socialicon blog">
        <i class="fa fa-bookmark fa-inverse"></i>
        <span class="sr-only">{{#str}} socioblog, theme_elegance{{/str}}</span>
        </a>
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('blog'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon blog">
';
                $buffer .= $indent . '        <i class="fa fa-bookmark fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section79fd3216a349007d0eef476e3c0a017a($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2df7f56d440510c584418477c4e58b1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociovimeo, theme_elegance';
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
                
                $buffer .= ' sociovimeo, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb1d8463b1e04936f133427dd58440c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{vimeo}}} class="socialicon vimeo">
        <i class="fa fa-vimeo-square fa-inverse"></i>
        <span class="sr-only">{{#str}} sociovimeo, theme_elegance{{/str}}</span>
        </a>
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('vimeo'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon vimeo">
';
                $buffer .= $indent . '        <i class="fa fa-vimeo-square fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2df7f56d440510c584418477c4e58b1e($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section074f56c145afd3f91c783207ee384cfd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' sociotumblr, theme_elegance';
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
                
                $buffer .= ' sociotumblr, theme_elegance';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5554bac8453d3c7bbb0b5dccedae2d8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href={{{tumblr}}} class="socialicon tumblr">
        <i class="fa fa-tumblr-square fa-inverse"></i>
        <span class="sr-only">{{#str}} sociotumblr, theme_elegance{{/str}}</span>
        </a>
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
                
                $buffer .= $indent . '        <a href=';
                $value = $this->resolveValue($context->find('tumblr'), $context, $indent);
                $buffer .= $value;
                $buffer .= ' class="socialicon tumblr">
';
                $buffer .= $indent . '        <i class="fa fa-tumblr-square fa-inverse"></i>
';
                $buffer .= $indent . '        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section074f56c145afd3f91c783207ee384cfd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section328195258d5a31123d81a914ddc22a57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<ul class="socials unstyled">
    {{#ios}}
        <a href={{{ios}}} class="socialicon ios">
        <i class="fa fa-apple fa-inverse"></i>
        <span class="sr-only">{{#str}} ios, theme_elegance{{/str}}</span>
        </a>  
    {{/ios}}
    {{#android}}
        <a href={{{android}}} class="socialicon android">
        <i class="fa fa-android fa-inverse"></i>
        <span class="sr-only">{{#str}} android, theme_elegance{{/str}}</span>
        </a>  
    {{/android}}
    {{#winphone}}
        <a href={{{winphone}}} class="socialicon winphone">
        <i class="fa fa-windows fa-inverse"></i>
        <span class="sr-only">{{#str}} winphone, theme_elegance{{/str}}</span>
        </a>  
    {{/winphone}}
    {{#windows}}
        <a href={{{windows}}} class="socialicon windows">
        <i class="fa fa-windows fa-inverse"></i>
        <span class="sr-only">{{#str}} windows, theme_elegance{{/str}}</span>
        </a>  
    {{/windows}}
    {{#facebook}}
        <a href={{{facebook}}} class="socialicon facebook">
        <i class="fa fa-facebook fa-inverse"></i>
        <span class="sr-only">{{#str}} sociofacebook, theme_elegance{{/str}}</span>
        </a>  
    {{/facebook}}
    {{#twitter}}
        <a href={{{twitter}}} class="socialicon twitter">
        <i class="fa fa-twitter fa-inverse"></i>
        <span class="sr-only">{{#str}} sociotwitter, theme_elegance{{/str}}</span>
        </a>   
    {{/twitter}}
    {{#googleplus}}
        <a href={{{googleplus}}} class="socialicon googleplus">
        <i class="fa fa-google-plus fa-inverse"></i>
        <span class="sr-only">{{#str}} sociogoogleplus, theme_elegance{{/str}}</span>
        </a>    
    {{/googleplus}}
    {{#linkedin}}
        <a href={{{linkedin}}} class="socialicon linkedin">
        <i class="fa fa-linkedin fa-inverse"></i>
        <span class="sr-only">{{#str}} sociolinkedin, theme_elegance{{/str}}</span>
        </a> 
    {{/linkedin}}
    {{#youtube}}
        <a href={{{youtube}}} class="socialicon youtube">
        <i class="fa fa-youtube fa-inverse"></i>
        <span class="sr-only">{{#str}} socioyoutube, theme_elegance{{/str}}</span>
        </a> 
    {{/youtube}}
    {{#flickr}}
        <a href={{{flickr}}} class="socialicon flickr">
        <i class="fa fa-flickr fa-inverse"></i>
        <span class="sr-only">{{#str}} socioflickr, theme_elegance{{/str}}</span>
        </a> 
    {{/flickr}}
    {{#vk}}
        <a href={{{vk}}} class="socialicon vk">
        <i class="fa fa-vk fa-inverse"></i>
        <span class="sr-only">{{#str}} sociovk, theme_elegance{{/str}}</span>
        </a>
    {{/vk}}
    {{#pinterest}}
        <a href={{{pinterest}}} class="socialicon pinterest">
        <i class="fa fa-pinterest fa-inverse"></i>
        <span class="sr-only">{{#str}} sociopinterest, theme_elegance{{/str}}</span>
        </a> 
    {{/pinterest}}
    {{#instagram}}
        <a href={{{instagram}}} class="socialicon instagram">
        <i class="fa fa-instagram fa-inverse"></i>
        <span class="sr-only">{{#str}} socioinstagram, theme_elegance{{/str}}</span>
        </a>
    {{/instagram}}
    {{#skype}}
        <a href="skype:{{{skype}}}?call" class="socialicon skype">
        <i class="fa fa-skype fa-inverse"></i>
        <span class="sr-only">{{#str}} socioskype, theme_elegance{{/str}}</span>
        </a>
    {{/skype}}
    {{#website}}
        <a href={{{website}}} class="socialicon website">
        <i class="fa fa-globe fa-inverse"></i>
        <span class="sr-only">{{#str}} sociowebsite, theme_elegance{{/str}}</span>
        </a>
    {{/website}}
    {{#blog}}
        <a href={{{blog}}} class="socialicon blog">
        <i class="fa fa-bookmark fa-inverse"></i>
        <span class="sr-only">{{#str}} socioblog, theme_elegance{{/str}}</span>
        </a>
    {{/blog}}
    {{#vimeo}}
        <a href={{{vimeo}}} class="socialicon vimeo">
        <i class="fa fa-vimeo-square fa-inverse"></i>
        <span class="sr-only">{{#str}} sociovimeo, theme_elegance{{/str}}</span>
        </a>
    {{/vimeo}}
    {{#tumblr}}
        <a href={{{tumblr}}} class="socialicon tumblr">
        <i class="fa fa-tumblr-square fa-inverse"></i>
        <span class="sr-only">{{#str}} sociotumblr, theme_elegance{{/str}}</span>
        </a>
    {{/tumblr}}
</ul>
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
                
                $buffer .= $indent . '<ul class="socials unstyled">
';
                // 'ios' section
                $value = $context->find('ios');
                $buffer .= $this->sectionF7949fa518470f03962d657acc09a1fe($context, $indent, $value);
                // 'android' section
                $value = $context->find('android');
                $buffer .= $this->sectionB38f3ec09e7254b97039fd809f7d8ea9($context, $indent, $value);
                // 'winphone' section
                $value = $context->find('winphone');
                $buffer .= $this->sectionB5bd526ed32ed27fa77884cd63c14439($context, $indent, $value);
                // 'windows' section
                $value = $context->find('windows');
                $buffer .= $this->section122568c741609bc8befcaf718605a5cc($context, $indent, $value);
                // 'facebook' section
                $value = $context->find('facebook');
                $buffer .= $this->section4a97f730e7e066af3f830294c01f4025($context, $indent, $value);
                // 'twitter' section
                $value = $context->find('twitter');
                $buffer .= $this->sectionF6e8a08587caf87b14c8a1dfe90b44a8($context, $indent, $value);
                // 'googleplus' section
                $value = $context->find('googleplus');
                $buffer .= $this->section7eb32fee28cb56b93005988390c004d8($context, $indent, $value);
                // 'linkedin' section
                $value = $context->find('linkedin');
                $buffer .= $this->sectionAa7495ded32fba5dbd2dd13eb30caadf($context, $indent, $value);
                // 'youtube' section
                $value = $context->find('youtube');
                $buffer .= $this->section3f2c28aaa87bbcad822e0d288aebc1b8($context, $indent, $value);
                // 'flickr' section
                $value = $context->find('flickr');
                $buffer .= $this->sectionB7c9a285af23c57bf00fc1bddead7828($context, $indent, $value);
                // 'vk' section
                $value = $context->find('vk');
                $buffer .= $this->section8712733717e56d0a1d6bbccb9e74b54c($context, $indent, $value);
                // 'pinterest' section
                $value = $context->find('pinterest');
                $buffer .= $this->section9af44d76c163f3ce0e0831871c3107c9($context, $indent, $value);
                // 'instagram' section
                $value = $context->find('instagram');
                $buffer .= $this->section36443419f03cb6e27dbbc9ca1e84bcd0($context, $indent, $value);
                // 'skype' section
                $value = $context->find('skype');
                $buffer .= $this->sectionE10921cc640c5f33a1c33aa78bca2db9($context, $indent, $value);
                // 'website' section
                $value = $context->find('website');
                $buffer .= $this->section133f3515a1f87b69716b037a7ca57571($context, $indent, $value);
                // 'blog' section
                $value = $context->find('blog');
                $buffer .= $this->sectionF135ea1aff30f4a6a4b190ce998a703b($context, $indent, $value);
                // 'vimeo' section
                $value = $context->find('vimeo');
                $buffer .= $this->sectionEb1d8463b1e04936f133427dd58440c4($context, $indent, $value);
                // 'tumblr' section
                $value = $context->find('tumblr');
                $buffer .= $this->section5554bac8453d3c7bbb0b5dccedae2d8b($context, $indent, $value);
                $buffer .= $indent . '</ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
