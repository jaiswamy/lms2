<?php

class __Mustache_c5c37a78940619a9ab11cdc8b9498739 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="adaptable-page-header-wrapper"';
        $value = $this->resolveValue($context->find('headerbg'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div id="header2" class="above-header container">
';
        $buffer .= $indent . '        <div class="row';
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= ' justify-content-lg-between';
        }
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="d-none d-lg-block';
        $value = $context->find('pageheaderoriginal');
        $buffer .= $this->section4517068a892c11f2bc08615ccfc897ac($context, $indent, $value);
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= ' col';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                <div class="d-flex justify-content-start align-items-center h-100 bd-highlight">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('headerlogo');
        $buffer .= $this->section0d814267cc139e99e5247ea03c8ff82b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $context->find('headertitle');
        $buffer .= $this->section34cbe2515838ed94ba30a12b2e22ce25($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    <div id="course-header">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="';
        $value = $context->find('pageheaderoriginal');
        $buffer .= $this->section20257d7c962caf44ac0f8942da166da3($context, $indent, $value);
        $value = $context->find('pageheaderoriginal');
        if (empty($value)) {
            
            $buffer .= 'col-lg-auto ';
        }
        $buffer .= 'pr-0 my-auto">
';
        $buffer .= $indent . '                <nav class="navbar navbar-expand btco-hover-menu">
';
        $value = $context->find('hasmobileprimarynav');
        $buffer .= $this->sectionF3acc5217d7b056d68b664a0983e4ca4($context, $indent, $value);
        $buffer .= $indent . '                    <div class="collapse navbar-collapse">
';
        $buffer .= $indent . '                        <ul class="navbar-nav ml-auto">
';
        $buffer .= $indent . '
';
        $value = $context->find('pageheaderoriginal');
        $buffer .= $this->section988f1b9a28b859816a587412d15b1889($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('topmenus');
        $buffer .= $this->sectionB25807809c9cc36edfb2098104a1d672($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('shownavbar');
        $buffer .= $this->sectionA2165cd4f1c59d15c55dc9336868f040($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('langmenu');
        $buffer .= $this->sectionC8f727cdf6df17f814da84838f8bc84e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('loginoruser'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </nav>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('shownavbar');
        $buffer .= $this->section12adbc97ba0dbc28e22606abc255f396($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</header>
';
        $buffer .= $indent . '
';
        $value = $context->find('hasmobileprimarynav');
        $buffer .= $this->sectionA17b1b82657c800c8796ec365d876fdb($context, $indent, $value);

        return $buffer;
    }

    private function section4517068a892c11f2bc08615ccfc897ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-lg-6';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-lg-6';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d814267cc139e99e5247ea03c8ff82b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{headerlogo}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('headerlogo'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34cbe2515838ed94ba30a12b2e22ce25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{headertitle}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('headertitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20257d7c962caf44ac0f8942da166da3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-lg-6 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-lg-6 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3acc5217d7b056d68b664a0983e4ca4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <button class="navbar-toggler nav-link aabtn d-block d-lg-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_adaptable-drawers-primary">
                        {{{mobileprimarynavicon}}}
                        <span class="sr-only">{{#str}}sidepanel, core{{/str}}</span>
                    </button>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <button class="navbar-toggler nav-link aabtn d-block d-lg-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_adaptable-drawers-primary">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('mobileprimarynavicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section988f1b9a28b859816a587412d15b1889(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="nav-item navbarsearchsocial mx-md-1 my-auto">
                                {{{navbarsearch}}}
                            </li>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="nav-item navbarsearchsocial mx-md-1 my-auto">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('navbarsearch'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB25807809c9cc36edfb2098104a1d672(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="my-auto m-1">{{{topmenus}}}</li>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="my-auto m-1">';
                $value = $this->resolveValue($context->find('topmenus'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2165cd4f1c59d15c55dc9336868f040(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li id="nav-popover-container" class="my-auto mx-1 d-flex">
                                {{{output.navbar_plugin_output}}}
                            </li>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li id="nav-popover-container" class="my-auto mx-1 d-flex">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8f727cdf6df17f814da84838f8bc84e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{{langmenu}}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('langmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12adbc97ba0dbc28e22606abc255f396(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_adaptable/headernavbar}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_adaptable/headernavbar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA17b1b82657c800c8796ec365d876fdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{< theme_adaptable/primary-drawer-mobile }}
{{/ theme_adaptable/primary-drawer-mobile }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($parent = $this->mustache->loadPartial('theme_adaptable/primary-drawer-mobile')) {
                    $buffer .= $parent->renderInternal($context, $indent);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
