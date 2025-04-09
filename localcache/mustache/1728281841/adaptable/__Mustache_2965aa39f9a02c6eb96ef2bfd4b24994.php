<?php

class __Mustache_2965aa39f9a02c6eb96ef2bfd4b24994 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="secondary-navigation">
';
        if ($partial = $this->mustache->loadPartial('core/moremenu')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
