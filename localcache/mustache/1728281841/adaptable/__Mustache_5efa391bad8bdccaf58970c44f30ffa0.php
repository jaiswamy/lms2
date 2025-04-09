<?php

class __Mustache_5efa391bad8bdccaf58970c44f30ffa0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="tertiary-navigation">
';
        if ($partial = $this->mustache->loadPartial('core/url_select')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
