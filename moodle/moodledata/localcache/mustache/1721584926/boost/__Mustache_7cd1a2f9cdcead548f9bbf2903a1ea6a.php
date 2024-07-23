<?php

class __Mustache_7cd1a2f9cdcead548f9bbf2903a1ea6a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('showaddsection');
        $buffer .= $this->section0c4b15761143f52b94afb826681b3b1d($context, $indent, $value);

        return $buffer;
    }

    private function section95103e0b0ba93f642b5a789ad318f6ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-id="{{id}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b089e00077ec061918a3e4dd2d05479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/add, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/add, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA58638c2e5150a4ef7288147731a5595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< core_courseformat/local/content/divider}}
        {{$extraclasses}}always-hidden mt-2{{/extraclasses}}
        {{$content}}
            <a href="{{{url}}}"
                class="btn add-content section-modchooser section-modchooser-link activitychooser-button d-flex justify-content-center align-items-center p-1 icon-no-margin"
                data-add-sections="{{title}}"
                data-new-sections="{{newsection}}"
                data-action="addSection"
                {{#insertafter}} data-id="{{id}}" {{/insertafter}}
                title="{{title}}"
            >
                {{#pix}} t/add, core {{/pix}}
                <span class="sr-only">{{title}}</span>
            </a>
        {{/content}}
    {{/ core_courseformat/local/content/divider}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('core_courseformat/local/content/divider')) {
                    $context->pushBlockContext(array(
                        'extraclasses' => array($this, 'block3af99b2d90b859d376606ea486417d9b'),
                        'content' => array($this, 'block566515e7fe8958da921f6b142277d017'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c4b15761143f52b94afb826681b3b1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="changenumsections bulk-hidden" data-region="section-addsection">
    {{#addsections}}
    {{< core_courseformat/local/content/divider}}
        {{$extraclasses}}always-hidden mt-2{{/extraclasses}}
        {{$content}}
            <a href="{{{url}}}"
                class="btn add-content section-modchooser section-modchooser-link activitychooser-button d-flex justify-content-center align-items-center p-1 icon-no-margin"
                data-add-sections="{{title}}"
                data-new-sections="{{newsection}}"
                data-action="addSection"
                {{#insertafter}} data-id="{{id}}" {{/insertafter}}
                title="{{title}}"
            >
                {{#pix}} t/add, core {{/pix}}
                <span class="sr-only">{{title}}</span>
            </a>
        {{/content}}
    {{/ core_courseformat/local/content/divider}}
    {{/addsections}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="changenumsections bulk-hidden" data-region="section-addsection">
';
                $value = $context->find('addsections');
                $buffer .= $this->sectionA58638c2e5150a4ef7288147731a5595($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block3af99b2d90b859d376606ea486417d9b($context)
    {
        $indent = $buffer = '';
        $buffer .= 'always-hidden mt-2';
    
        return $buffer;
    }

    public function block566515e7fe8958da921f6b142277d017($context)
    {
        $indent = $buffer = '';
        $buffer .= '            <a href="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                class="btn add-content section-modchooser section-modchooser-link activitychooser-button d-flex justify-content-center align-items-center p-1 icon-no-margin"
';
        $buffer .= $indent . '                data-add-sections="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                data-new-sections="';
        $value = $this->resolveValue($context->find('newsection'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '                data-action="addSection"
';
        $buffer .= $indent . '                ';
        $value = $context->find('insertafter');
        $buffer .= $this->section95103e0b0ba93f642b5a789ad318f6ca($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                title="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '                ';
        $value = $context->find('pix');
        $buffer .= $this->section9b089e00077ec061918a3e4dd2d05479($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                <span class="sr-only">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            </a>
';
    
        return $buffer;
    }
}
