<?php

class __Mustache_01fc2158226b7a37d889df8be3b53137 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dropdown select-menu" id="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('label');
        $buffer .= $this->sectionE1ecd488252146adb262071d1c83e287($context, $indent, $value);
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="btn dropdown-toggle"
';
        $buffer .= $indent . '        role="combobox"
';
        $buffer .= $indent . '        data-toggle="dropdown"
';
        $buffer .= $indent . '        ';
        $value = $context->find('label');
        $buffer .= $this->section21eed3cb7c61228a17106dfafdd2ae8a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        aria-haspopup="listbox"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        aria-controls="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-listbox"
';
        $buffer .= $indent . '        data-input-element="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-input"
';
        $buffer .= $indent . '        tabindex="0"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('selectedoption'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <ul class="dropdown-menu" role="listbox" id="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-listbox" ';
        $value = $context->find('label');
        $buffer .= $this->section21eed3cb7c61228a17106dfafdd2ae8a($context, $indent, $value);
        $buffer .= '>
';
        $value = $context->find('options');
        $buffer .= $this->sectionB34e906423aefe63eedd93cda020dad3($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '    <input type="hidden" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('baseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-input">
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section0a15d5cbdbb6ce7298ad59318a53ec23($context, $indent, $value);

        return $buffer;
    }

    private function sectionAd20463c348991d5bbd2fb97358ea7c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1ecd488252146adb262071d1c83e287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <label id="{{baseid}}-label"{{#labelattributes}} {{name}}="{{value}}"{{/labelattributes}}>{{label}}</label>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <label id="';
                $value = $this->resolveValue($context->find('baseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-label"';
                $value = $context->find('labelattributes');
                $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21eed3cb7c61228a17106dfafdd2ae8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-labelledby="{{baseid}}-label"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-labelledby="';
                $value = $this->resolveValue($context->find('baseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-label"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe04cacc15f032e9e9f826b761c9b814(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-selected="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-selected="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section440a526cdf668315f15fa2d1335bb89c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <li class="dropdown-item" role="option" id="{{id}}" data-value="{{value}}" {{#selected}}aria-selected="true"{{/selected}}>
                                {{name}}
                            </li>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <li class="dropdown-item" role="option" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->sectionCe04cacc15f032e9e9f826b761c9b814($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE08806b5ebfff625fa8f22458ed8d796(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li role="none">
                    <ul role="group" aria-labelledby="{{id}}">
                        <li role="presentation" id="{{id}}">{{name}}</li>
                        {{#options}}
                            <li class="dropdown-item" role="option" id="{{id}}" data-value="{{value}}" {{#selected}}aria-selected="true"{{/selected}}>
                                {{name}}
                            </li>
                        {{/options}}
                    </ul>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li role="none">
';
                $buffer .= $indent . '                    <ul role="group" aria-labelledby="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <li role="presentation" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</li>
';
                $value = $context->find('options');
                $buffer .= $this->section440a526cdf668315f15fa2d1335bb89c($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB34e906423aefe63eedd93cda020dad3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#isgroup}}
                <li role="none">
                    <ul role="group" aria-labelledby="{{id}}">
                        <li role="presentation" id="{{id}}">{{name}}</li>
                        {{#options}}
                            <li class="dropdown-item" role="option" id="{{id}}" data-value="{{value}}" {{#selected}}aria-selected="true"{{/selected}}>
                                {{name}}
                            </li>
                        {{/options}}
                    </ul>
                </li>
            {{/isgroup}}
            {{^isgroup}}
                <li class="dropdown-item" role="option" id="{{id}}" data-value="{{value}}" {{#selected}}aria-selected="true"{{/selected}}>
                    {{name}}
                </li>
            {{/isgroup}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isgroup');
                $buffer .= $this->sectionE08806b5ebfff625fa8f22458ed8d796($context, $indent, $value);
                $value = $context->find('isgroup');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="dropdown-item" role="option" id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-value="';
                    $value = $this->resolveValue($context->find('value'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" ';
                    $value = $context->find('selected');
                    $buffer .= $this->sectionCe04cacc15f032e9e9f826b761c9b814($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                    $buffer .= $indent . '                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a15d5cbdbb6ce7298ad59318a53ec23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    var label = document.getElementById(\'{{baseid}}-label\');
    if (label) {
        label.addEventListener(\'click\', function() {
            this.parentElement.querySelector(\'.dropdown-toggle\').focus();
        });
    }
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    var label = document.getElementById(\'';
                $value = $this->resolveValue($context->find('baseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-label\');
';
                $buffer .= $indent . '    if (label) {
';
                $buffer .= $indent . '        label.addEventListener(\'click\', function() {
';
                $buffer .= $indent . '            this.parentElement.querySelector(\'.dropdown-toggle\').focus();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
