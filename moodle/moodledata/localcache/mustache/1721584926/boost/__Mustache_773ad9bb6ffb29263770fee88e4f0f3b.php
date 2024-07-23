<?php

class __Mustache_773ad9bb6ffb29263770fee88e4f0f3b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-inline-block">
';
        $buffer .= $indent . '    <div class="alert alert-warning">
';
        $buffer .= $indent . '        <div class="lead">';
        $value = $context->find('str');
        $buffer .= $this->section885c1a69289a7b8b8282ba50aca15551($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="alert alert-primary">
';
        $buffer .= $indent . '        <div class="lead">';
        $value = $this->resolveValue($context->find('tokenname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '        <div class="d-flex justify-content-start align-middle">
';
        $buffer .= $indent . '            <div class="lead text-break pt-1" id="copytoclipboardtoken">';
        $value = $this->resolveValue($context->find('token'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '            <button class="btn btn-primary ml-2" data-action="copytoclipboard" data-clipboard-target="#copytoclipboardtoken" data-clipboard-success-message="';
        $value = $context->find('str');
        $buffer .= $this->section25cf197eefbfa4e9c8a04804b2656fba($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section5227ce59eed416aeb85192d17c4cb557($context, $indent, $value);
        $value = $context->find('str');
        $buffer .= $this->sectionE5e092b4cae11964cd4eeae1fb8f53b3($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section7e9e03f6b7a283d38286074fad7dcae2($context, $indent, $value);

        return $buffer;
    }

    private function section885c1a69289a7b8b8282ba50aca15551(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tokennewmessage, webservice';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tokennewmessage, webservice';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25cf197eefbfa4e9c8a04804b2656fba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tokencopied, webservice';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tokencopied, webservice';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5227ce59eed416aeb85192d17c4cb557(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/copy, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/copy, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5e092b4cae11964cd4eeae1fb8f53b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'copytoclipboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'copytoclipboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e9e03f6b7a283d38286074fad7dcae2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/copy_to_clipboard\']);
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core/copy_to_clipboard\']);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
