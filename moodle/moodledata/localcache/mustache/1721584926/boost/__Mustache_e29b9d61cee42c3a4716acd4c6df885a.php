<?php

class __Mustache_e29b9d61cee42c3a4716acd4c6df885a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('competencycount');
        $buffer .= $this->sectionE52c1595176c98ac08db02f1c9d42bdd($context, $indent, $value);

        return $buffer;
    }

    private function sectionAbee49c427ef59303f760c27eb9fe51e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'xcompetenciesproficientoutofyincourse, tool_lp, { "x": "';
                $value = $this->resolveValue($context->find('proficientcompetencycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('competencycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE17eafe8835503e34fef1ed744a8d148(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientcompetencypercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientcompetencypercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('tool_lp/progress_bar')) {
                    $context->pushBlockContext(array(
                        'progresstext' => array($this, 'blockA54072f3ec59161fe5b96cdde575a5b6'),
                        'percentage' => array($this, 'blockA4db2577884a6084f913e7abed7b6d81'),
                        'percentlabel' => array($this, 'blockB5a4ed45a76c9670a749290a62fb4465'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99630888f48fb1a71fef2aba23a7f491(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competenciesmostoftennotproficientincourse, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'competenciesmostoftennotproficientincourse, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e8d5793b8304d47915f61b3cda2cb40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="#competency-info-link-{{id}}">
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="#competency-info-link-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div><p>';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' <em>';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</em></p></div>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section555dfe1f4b74914a3c26c170bb49ef2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                <a href="#competency-info-link-{{id}}">
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                </a>
            {{/leastproficient}}
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '    <div>
';
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <p>';
                $value = $context->find('str');
                $buffer .= $this->section99630888f48fb1a71fef2aba23a7f491($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div>
';
                $value = $context->find('leastproficient');
                $buffer .= $this->section3e8d5793b8304d47915f61b3cda2cb40($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cd11b30d33987b9aaad83bbc7d6dabb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#leastproficientcount}}
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                <a href="#competency-info-link-{{id}}">
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                </a>
            {{/leastproficient}}
        </div>
    </div>
    {{/leastproficientcount}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('leastproficientcount');
                $buffer .= $this->section555dfe1f4b74914a3c26c170bb49ef2a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE52c1595176c98ac08db02f1c9d42bdd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="coursecompetencystatistics" class="border p-2 mb-2">
    {{#canbegradedincourse}}
        {{< tool_lp/progress_bar}}
            {{$progresstext}}
                {{#str}}xcompetenciesproficientoutofyincourse, tool_lp, { "x": "{{proficientcompetencycount}}", "y": "{{competencycount}}" } {{/str}}
            {{/progresstext}}
            {{$percentage}}{{proficientcompetencypercentage}}{{/percentage}}
            {{$percentlabel}}{{proficientcompetencypercentageformatted}}&nbsp;%{{/percentlabel}}
        {{/tool_lp/progress_bar}}
    {{/canbegradedincourse}}
    {{#canmanagecoursecompetencies}}
    {{#leastproficientcount}}
    <div>
        <div>
            <p>{{#str}}competenciesmostoftennotproficientincourse, tool_lp{{/str}}</p>
        </div>
        <div>
            {{#leastproficient}}
                <a href="#competency-info-link-{{id}}">
                <div><p>{{{shortname}}} <em>{{idnumber}}</em></p></div>
                </a>
            {{/leastproficient}}
        </div>
    </div>
    {{/leastproficientcount}}
    {{/canmanagecoursecompetencies}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div data-region="coursecompetencystatistics" class="border p-2 mb-2">
';
                $value = $context->find('canbegradedincourse');
                $buffer .= $this->sectionE17eafe8835503e34fef1ed744a8d148($context, $indent, $value);
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->section8cd11b30d33987b9aaad83bbc7d6dabb($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockA54072f3ec59161fe5b96cdde575a5b6($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionAbee49c427ef59303f760c27eb9fe51e($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockA4db2577884a6084f913e7abed7b6d81($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientcompetencypercentage'), $context);
        $buffer .= $indent . ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockB5a4ed45a76c9670a749290a62fb4465($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('proficientcompetencypercentageformatted'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '&nbsp;%';
    
        return $buffer;
    }
}
