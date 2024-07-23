<?php

class __Mustache_e671b77aca79d7467cff9141f7143de3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="btn-group">
';
        $buffer .= $indent . '    HELLO WORLD
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
