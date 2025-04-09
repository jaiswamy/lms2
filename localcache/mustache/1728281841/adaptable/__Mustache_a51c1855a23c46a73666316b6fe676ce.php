<?php

class __Mustache_a51c1855a23c46a73666316b6fe676ce extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table border="0" cellpadding="3" cellspacing="0" class="forumpost">
';
        $buffer .= $indent . '    <tr class="header">
';
        $buffer .= $indent . '        <td width="35" valign="top" class="picture left">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('authorpicture'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '        <td class="topic ';
        $value = $context->find('firstpost');
        $buffer .= $this->section9434d5771c4657afdd045de3a17d59b3($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="subject">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="author">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionC9016969d99135c987ec0fb5d8ec5284($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $value = $context->find('isprivatereply');
        $buffer .= $this->sectionF5cedc7f76baf0612e7c5a17cff128bb($context, $indent, $value);
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <td class="left side" valign="top">
';
        $value = $context->find('grouppicture');
        $buffer .= $this->sectionDd3d7257ddceffcbe77247b5b3a7c321($context, $indent, $value);
        $value = $context->find('grouppicture');
        if (empty($value)) {
            
            $buffer .= $indent . '                &nbsp;
';
        }
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '        <td class="content">
';
        $value = $context->find('attachments');
        $buffer .= $this->section230300a600c51b008cec801266493f47($context, $indent, $value);
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="commands">
';
        $value = $context->find('firstpost');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <a target="_blank" href="';
            $value = $this->resolveValue($context->find('parentpostlink'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '">
';
            $buffer .= $indent . '                        ';
            $value = $context->find('str');
            $buffer .= $this->section08cb9137143cabe4f717457d440b51b2($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </a>
';
            $value = $context->find('canreply');
            $buffer .= $this->section0c62acf5bb0502247316b93de132c139($context, $indent, $value);
        }
        $value = $context->find('canreply');
        $buffer .= $this->section54612e66441e4aa22c6ebbf264dffd25($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="link">
';
        $buffer .= $indent . '                <a target="_blank" href="';
        $value = $this->resolveValue($context->find('permalink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section9717eb53ad3b343a31f7f2350a5c3b05($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </td>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section9434d5771c4657afdd045de3a17d59b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'starter';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'starter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6239dd54c1dadeaf5476db1874bed6fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a target=\'_blank\' href=\'';
                $value = $this->resolveValue($context->find('authorlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('authorfullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE63a53b1895395e45a30eff532a83baf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ postdate }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('postdate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9016969d99135c987ec0fb5d8ec5284(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bynameondate, forum, {
                        "name": {{# quote }}<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>{{/ quote }},
                        "date": {{# quote }}{{ postdate }}{{/ quote }}
                    } ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' bynameondate, forum, {
';
                $buffer .= $indent . '                        "name": ';
                $value = $context->find('quote');
                $buffer .= $this->section6239dd54c1dadeaf5476db1874bed6fc($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '                        "date": ';
                $value = $context->find('quote');
                $buffer .= $this->sectionE63a53b1895395e45a30eff532a83baf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8e8c40f40ebf9b17e52b5d63f27ff2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postisprivatereply, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' postisprivatereply, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5cedc7f76baf0612e7c5a17cff128bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="privatereplyinfo">
                {{# str }} postisprivatereply, forum {{/ str }}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="privatereplyinfo">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->sectionC8e8c40f40ebf9b17e52b5d63f27ff2c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd3d7257ddceffcbe77247b5b3a7c321(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ grouppicture }}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('grouppicture'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section230300a600c51b008cec801266493f47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="attachments">
                    {{{ attachments }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="attachments">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('attachments'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08cb9137143cabe4f717457d440b51b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parent, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' parent, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c62acf5bb0502247316b93de132c139(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^ isprivatereply }}
                        |
                        {{/ isprivatereply }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isprivatereply');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        |
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD469667440754f9f1f6f320a0cf89269(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reply, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reply, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54612e66441e4aa22c6ebbf264dffd25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{^ isprivatereply }}
                    <a target="_blank" href="{{{ replylink }}}">
                        {{# str }} reply, forum {{/ str }}
                    </a>
                    {{/ isprivatereply }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isprivatereply');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a target="_blank" href="';
                    $value = $this->resolveValue($context->find('replylink'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                        ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionD469667440754f9f1f6f320a0cf89269($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9717eb53ad3b343a31f7f2350a5c3b05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postincontext, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' postincontext, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
