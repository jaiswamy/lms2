<?php

class __Mustache_3d7fdda9527ef457dff3d7d8b708cbfb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="main-navbar" class="';
        $value = $this->resolveValue($context->find('responsiveheader'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-12 p-0">
';
        $buffer .= $indent . '                <div class="navbar navbar-expand btco-hover-menu">
';
        $buffer .= $indent . '                    <nav aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionB5f3fe981d4e1c31c23b73eb1e4a081a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <ul class="navbar-nav">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('navigationmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('toolsmenu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </nav>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <ul class="navbar-nav ml-auto d-flex flex-wrap">
';
        $value = $context->find('showcog');
        $buffer .= $this->section1036187a2092a52b95fd1ffb62ac04dc($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('pageheadingbutton');
        $buffer .= $this->section36380c26947f65589f42eebf2d2d771f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('enablezoom');
        $buffer .= $this->section54f717240777e0ed61579af68a914dd7($context, $indent, $value);
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB5f3fe981d4e1c31c23b73eb1e4a081a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitelinkslabel, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitelinkslabel, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9802a7a3a2ddb38c7370c5c0934570b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item mr-2">
                            <div class="context-header-settings-menu">
                                {{{coursemenucontent}}}
                            </div>
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item mr-2">
';
                $buffer .= $indent . '                            <div class="context-header-settings-menu">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('coursemenucontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67644a43110ca7be1cef090bcc0275ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item mr-2">
                            <div id="region-main-settings-menu" class="region-main-settings-menu">
                                {{{othermenucontent}}}
                            </div>
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item mr-2">
';
                $buffer .= $indent . '                            <div id="region-main-settings-menu" class="region-main-settings-menu">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('othermenucontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1036187a2092a52b95fd1ffb62ac04dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#coursemenucontent}}
                        <li class="nav-item mr-2">
                            <div class="context-header-settings-menu">
                                {{{coursemenucontent}}}
                            </div>
                        </li>
                        {{/coursemenucontent}}

                        {{#othermenucontent}}
                        <li class="nav-item mr-2">
                            <div id="region-main-settings-menu" class="region-main-settings-menu">
                                {{{othermenucontent}}}
                            </div>
                        </li>
                        {{/othermenucontent}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('coursemenucontent');
                $buffer .= $this->section9802a7a3a2ddb38c7370c5c0934570b6($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('othermenucontent');
                $buffer .= $this->section67644a43110ca7be1cef090bcc0275ad($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36380c26947f65589f42eebf2d2d771f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li id="editingbutton" class="nav-item mx-0 my-auto">
                            {{{pageheadingbutton}}}
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li id="editingbutton" class="nav-item mx-0 my-auto">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a7c186b96d8d71a5750a3e8739e29e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fullscreen, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fullscreen, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06644b2a11a979411f3739708681a10d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class="zoomdesc">{{#str}}fullscreen, theme_adaptable{{/str}}</span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <span class="zoomdesc">';
                $value = $context->find('str');
                $buffer .= $this->section8a7c186b96d8d71a5750a3e8739e29e7($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7427f43aec250eace0045e20a2622b11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'standardview, theme_adaptable';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'standardview, theme_adaptable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section534e077fa6bf91fafd4f2466458c45e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <span class="zoomdesc">{{#str}}standardview, theme_adaptable{{/str}}</span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <span class="zoomdesc">';
                $value = $context->find('str');
                $buffer .= $this->section7427f43aec250eace0045e20a2622b11($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54f717240777e0ed61579af68a914dd7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li class="nav-item mx-0 hbll">
                            <a class="nav-link moodlewidth" href="javascript:void(0);" title="{{#str}}fullscreen, theme_adaptable{{/str}}">
                                <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
                                {{#enablezoomshowtext}}
                                <span class="zoomdesc">{{#str}}fullscreen, theme_adaptable{{/str}}</span>
                                {{/enablezoomshowtext}}
                            </a>
                        </li>
                        <li class="nav-item mx-0 sbll">
                            <a class="nav-link moodlewidth" href="javascript:void(0);" title="{{#str}}standardview, theme_adaptable{{/str}}">
                                <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
                                {{#enablezoomshowtext}}
                                <span class="zoomdesc">{{#str}}standardview, theme_adaptable{{/str}}</span>
                                {{/enablezoomshowtext}}
                            </a>
                        </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li class="nav-item mx-0 hbll">
';
                $buffer .= $indent . '                            <a class="nav-link moodlewidth" href="javascript:void(0);" title="';
                $value = $context->find('str');
                $buffer .= $this->section8a7c186b96d8d71a5750a3e8739e29e7($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <i class="fa fa-expand fa-lg" aria-hidden="true"></i>
';
                $value = $context->find('enablezoomshowtext');
                $buffer .= $this->section06644b2a11a979411f3739708681a10d($context, $indent, $value);
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li class="nav-item mx-0 sbll">
';
                $buffer .= $indent . '                            <a class="nav-link moodlewidth" href="javascript:void(0);" title="';
                $value = $context->find('str');
                $buffer .= $this->section7427f43aec250eace0045e20a2622b11($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
';
                $value = $context->find('enablezoomshowtext');
                $buffer .= $this->section534e077fa6bf91fafd4f2466458c45e4($context, $indent, $value);
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
