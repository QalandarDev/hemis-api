<?php

class __Mustache_eef2aa9ac0dbf95ed1c409027db1cc63 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="block-myoverview block-cards" data-region="myoverview" role="navigation">
';
        $buffer .= $indent . '    <hr class="mt-0"/>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid p-0">
';
        $buffer .= $indent . '        <div class="text-xs-center text-center mt-3" data-region="empty-message">
';
        $buffer .= $indent . '            <img class="empty-placeholder-image-lg mt-1"
';
        $buffer .= $indent . '                    src="';
        $value = $this->resolveValue($context->find('nocoursesimg'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                    alt=""
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '            <h5 class="h5 mt-3 mb-0">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h5>
';
        $buffer .= $indent . '            <p class="mt-3 mb-0">';
        $value = $this->resolveValue($context->find('intro'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="mt-5 mb-0 whitebutton" id="action_bar">
';
        $value = $context->find('buttons');
        $buffer .= $this->section852013df32481efe9ecb4378d45678d0($context, $indent, $value);
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

    private function section852013df32481efe9ecb4378d45678d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>core/single_button}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
