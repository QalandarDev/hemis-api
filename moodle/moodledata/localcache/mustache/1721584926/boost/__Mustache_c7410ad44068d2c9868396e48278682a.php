<?php

class __Mustache_c7410ad44068d2c9868396e48278682a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="tertiary-navigation-selector">
';
        if ($partial = $this->mustache->loadPartial('core/select_menu')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</nav>
';
        $value = $context->find('js');
        $buffer .= $this->section5e89e72e7251ea18b0c78908cd81733e($context, $indent, $value);

        return $buffer;
    }

    private function section5e89e72e7251ea18b0c78908cd81733e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    document.querySelector(\'#{{baseid}}\').addEventListener(\'change\', function(e) {
        window.location.href = e.target.value;
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    document.querySelector(\'#';
                $value = $this->resolveValue($context->find('baseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\').addEventListener(\'change\', function(e) {
';
                $buffer .= $indent . '        window.location.href = e.target.value;
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
