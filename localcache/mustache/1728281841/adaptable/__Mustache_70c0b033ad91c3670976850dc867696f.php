<?php

class __Mustache_70c0b033ad91c3670976850dc867696f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h3>';
        $value = $context->find('str');
        $buffer .= $this->section67579a6c0251ccd1c764775e7687cbe4($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '<pre>
';
        $value = $this->resolveValue($context->find('templatesource'), $context);
        $buffer .= $indent . ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '</pre>
';

        return $buffer;
    }

    private function section67579a6c0251ccd1c764775e7687cbe4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'originaltemplatesource, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'originaltemplatesource, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
