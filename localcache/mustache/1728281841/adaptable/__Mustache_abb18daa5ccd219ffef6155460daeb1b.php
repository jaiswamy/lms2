<?php

class __Mustache_abb18daa5ccd219ffef6155460daeb1b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h3>';
        $value = $context->find('templateoverridden');
        $buffer .= $this->section427dce5086c2942a35416c6332b3d14a($context, $indent, $value);
        $value = $context->find('templateoverridden');
        if (empty($value)) {
            
            $value = $context->find('str');
            $buffer .= $this->sectionE4e36a4f7786641e80674d5f953f7ec6($context, $indent, $value);
        }
        $buffer .= '</h3>
';
        $buffer .= $indent . '<div class="jumbotron">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('templatepreview'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section255307024b3d84345f2b6eace9385e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'overriddentemplatepreview, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'overriddentemplatepreview, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section427dce5086c2942a35416c6332b3d14a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}overriddentemplatepreview, theme_adaptable{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section255307024b3d84345f2b6eace9385e1d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4e36a4f7786641e80674d5f953f7ec6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'originaltemplatepreview, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'originaltemplatepreview, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
