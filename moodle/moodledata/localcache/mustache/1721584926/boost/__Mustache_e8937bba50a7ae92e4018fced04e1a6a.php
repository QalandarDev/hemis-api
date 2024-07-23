<?php

class __Mustache_e8937bba50a7ae92e4018fced04e1a6a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="coursecompetenciespage">
';
        $buffer .= $indent . '    <div data-region="actions" class="clearfix">
';
        $buffer .= $indent . '        <div class="float-sm-left">
';
        $value = $context->find('canmanagecoursecompetencies');
        $buffer .= $this->section792a569268537b707962688de4133a2d($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-region="configurecoursecompetencies">
';
        $value = $context->find('cangradecompetencies');
        $buffer .= $this->section02cd2e112bf96473916a5f1b640fc33f($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $value = $context->find('statistics');
        $buffer .= $this->sectionB501155168f9ceba653a4354a613a445($context, $indent, $value);
        $buffer .= $indent . '<div data-region="coursecompetencies">
';
        $buffer .= $indent . '<table class="generaltable fullwidth managecompetencies">
';
        $buffer .= $indent . '<tbody class="drag-parentnode">
';
        $value = $context->find('competencies');
        $buffer .= $this->sectionDabcaa5d5d4c91915fc69b27695267c6($context, $indent, $value);
        $buffer .= $indent . '</tbody>
';
        $buffer .= $indent . '</table>
';
        $value = $context->find('competencies');
        if (empty($value)) {
            
            $buffer .= $indent . '<p class="alert alert-info">
';
            $value = $context->find('moduleid');
            $buffer .= $this->section964b073a38fdd7bb782cf3629b01b56d($context, $indent, $value);
            $value = $context->find('moduleid');
            if (empty($value)) {
                
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section03e850bca9d66bc415422912b5bd6e07($context, $indent, $value);
                $buffer .= '
';
            }
            $buffer .= $indent . '</p>
';
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div data-region="actions">
';
        $value = $context->find('canmanagecompetencyframeworks');
        $buffer .= $this->sectionFa239ecc6370f798366ffc4b2fc48682($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section613613d384c0d3c987a261019bd6da90($context, $indent, $value);
        $value = $context->find('canconfigurecoursecompetencies');
        $buffer .= $this->section6452acc23e99b68630649c182e2455fe($context, $indent, $value);

        return $buffer;
    }

    private function section8e1a2521a451eb6a7b8b5f0ae4b72269(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcoursecompetencies, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addcoursecompetencies, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section792a569268537b707962688de4133a2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <button class="btn btn-secondary" disabled>{{#str}}addcoursecompetencies, tool_lp{{/str}}</button>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <button class="btn btn-secondary" disabled>';
                $value = $context->find('str');
                $buffer .= $this->section8e1a2521a451eb6a7b8b5f0ae4b72269($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0ed9b535ed171b00353f97e30f4d0eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencyratingsarepushedtouserplans, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursecompetencyratingsarepushedtouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE90f8c29c8184c27e498368c311f10e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#str}}coursecompetencyratingsarepushedtouserplans, tool_lp{{/str}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionA0ed9b535ed171b00353f97e30f4d0eb($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7728dc32f135d1e2924b0746299af745(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursecompetencyratingsarenotpushedtouserplans, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursecompetencyratingsarenotpushedtouserplans, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc1d4f1bf432cd9124ae3a835133dcf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core, {{#str}}edit{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c2bdc7141fc65ee703e3af7f89a2bab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#"
               data-action="configure-course-competency-settings"
               data-courseid="{{courseid}}"
               data-pushratingstouserplans="{{settings.pushratingstouserplans}}">
                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}
            </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#"
';
                $buffer .= $indent . '               data-action="configure-course-competency-settings"
';
                $buffer .= $indent . '               data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '               data-pushratingstouserplans="';
                $value = $this->resolveValue($context->findDot('settings.pushratingstouserplans'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionFc1d4f1bf432cd9124ae3a835133dcf6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02cd2e112bf96473916a5f1b640fc33f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="alert {{^settings.pushratingstouserplans}}alert-info{{/settings.pushratingstouserplans}}">
        {{#settings.pushratingstouserplans}}
            {{#str}}coursecompetencyratingsarepushedtouserplans, tool_lp{{/str}}
        {{/settings.pushratingstouserplans}}
        {{^settings.pushratingstouserplans}}
            {{#str}}coursecompetencyratingsarenotpushedtouserplans, tool_lp{{/str}}
        {{/settings.pushratingstouserplans}}
        {{#canconfigurecoursecompetencies}}
            <a href="#"
               data-action="configure-course-competency-settings"
               data-courseid="{{courseid}}"
               data-pushratingstouserplans="{{settings.pushratingstouserplans}}">
                {{#pix}}t/edit, core, {{#str}}edit{{/str}}{{/pix}}
            </a>
        {{/canconfigurecoursecompetencies}}
        </p>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <p class="alert ';
                $value = $context->findDot('settings.pushratingstouserplans');
                if (empty($value)) {
                    
                    $buffer .= 'alert-info';
                }
                $buffer .= '">
';
                $value = $context->findDot('settings.pushratingstouserplans');
                $buffer .= $this->sectionE90f8c29c8184c27e498368c311f10e0($context, $indent, $value);
                $value = $context->findDot('settings.pushratingstouserplans');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            ';
                    $value = $context->find('str');
                    $buffer .= $this->section7728dc32f135d1e2924b0746299af745($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('canconfigurecoursecompetencies');
                $buffer .= $this->section1c2bdc7141fc65ee703e3af7f89a2bab($context, $indent, $value);
                $buffer .= $indent . '        </p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB501155168f9ceba653a4354a613a445(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> tool_lp/course_competency_statistics }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_lp/course_competency_statistics')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1245898a9c4802f609e8da4fe72227c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core, {{#str}}delete{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/delete, core, ';
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94e87482559c81da2ea4fa534a587f74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="drag-handlecontainer float-sm-left"></span>
        <div class="float-sm-right">
            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">
                {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}
            </a>
        </div>
        <div class="clearfix"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="drag-handlecontainer float-sm-left"></span>
';
                $buffer .= $indent . '        <div class="float-sm-right">
';
                $buffer .= $indent . '            <a href="#" data-action="delete-competency-link" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section1245898a9c4802f609e8da4fe72227c2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="clearfix"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6d7bcd5d66932580fec7960232c9fc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewdetails, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewdetails, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0a93a830e1bdba7bd36bfc4f1d0fba4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{pluginbaseurl}}/user_competency_in_course.php?courseid={{courseid}}&competencyid={{competency.id}}&userid={{gradableuserid}}"
                   id="competency-info-link-{{competency.id}}"
                   title="{{#str}}viewdetails, tool_lp{{/str}}">
                <p><strong>{{{competency.shortname}}} <em>{{competency.idnumber}}</em></strong></p>
            </a>
            <p>{{{competency.description}}}</p>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/user_competency_in_course.php?courseid=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&competencyid=';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&userid=';
                $value = $this->resolveValue($context->find('gradableuserid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                   id="competency-info-link-';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                   title="';
                $value = $context->find('str');
                $buffer .= $this->sectionD6d7bcd5d66932580fec7960232c9fc4($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <p><strong>';
                $value = $this->resolveValue($context->findDot('competency.shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' <em>';
                $value = $this->resolveValue($context->findDot('competency.idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</em></strong></p>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->findDot('competency.description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5db15ba4d8fa7764751fbbe00561fbe0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'path, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'path, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFee07cb3b57ab052f0f7b9a745162387(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="float-sm-left">{{#str}}path, tool_lp{{/str}}&nbsp;</span>{{> tool_lp/competency_path }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="float-sm-left">';
                $value = $context->find('str');
                $buffer .= $this->section5db15ba4d8fa7764751fbbe00561fbe0($context, $indent, $value);
                $buffer .= '&nbsp;</span>';
                if ($partial = $this->mustache->loadPartial('tool_lp/competency_path')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfffa53e3f2f3ce01f095dbc2b2bec6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'bg-success';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'bg-success';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62f8658eee4e7258425e64d859117a64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="badge {{#proficiency}}bg-success{{/proficiency}}{{^proficiency}}bg-danger{{/proficiency}} text-white">{{gradename}}</span>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="badge ';
                $value = $context->find('proficiency');
                $buffer .= $this->sectionFfffa53e3f2f3ce01f095dbc2b2bec6c($context, $indent, $value);
                $value = $context->find('proficiency');
                if (empty($value)) {
                    
                    $buffer .= 'bg-danger';
                }
                $buffer .= ' text-white">';
                $value = $this->resolveValue($context->find('gradename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a43b7a75d8eb49c5344671498f30a44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#grade}}
            <span class="badge {{#proficiency}}bg-success{{/proficiency}}{{^proficiency}}bg-danger{{/proficiency}} text-white">{{gradename}}</span>
            {{/grade}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('grade');
                $buffer .= $this->section62f8658eee4e7258425e64d859117a64($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c0c437015e88b1da78736264f954838(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'uponcoursecompletion, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'uponcoursecompletion, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f47ba212e2fa1f3ed5e7ac388eacb09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                     <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                     <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08d9d84a4974a1be1392cd148f36cd22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div data-region="coursecompetency-ruleoutcome">
            <label>
                {{#str}}uponcoursecompletion, tool_lp{{/str}}
                <select data-field="ruleoutcome" data-id="{{coursecompetency.id}}" class="custom-select">
                  {{#ruleoutcomeoptions}}
                     <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                  {{/ruleoutcomeoptions}}
                </select>
            </label>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div data-region="coursecompetency-ruleoutcome">
';
                $buffer .= $indent . '            <label>
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section5c0c437015e88b1da78736264f954838($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <select data-field="ruleoutcome" data-id="';
                $value = $this->resolveValue($context->findDot('coursecompetency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="custom-select">
';
                $value = $context->find('ruleoutcomeoptions');
                $buffer .= $this->section0f47ba212e2fa1f3ed5e7ac388eacb09($context, $indent, $value);
                $buffer .= $indent . '                </select>
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24a67fa020473241f6bf9a69b69d7be2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'activities';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'activities';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72b9f473fc016778bf48360e31a552d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="list-inline-item"><a href="{{url}}"><img class="icon" src="{{iconurl}}"> {{name}} </a></li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><img class="icon" src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"> ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa4a803c089c26a0a2019bf1954e8a7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noactivities, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'noactivities, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a1322c6565f41374b0000292a58679d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userplans, core_competency';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'userplans, core_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF182fad0eb01f0350c53edfb807d2b34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="list-inline-item"><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="list-inline-item"><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/plan.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE284c88c7c4e1ebb61be5d7e54215ba3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nouserplanswithcompetency, core_competency';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nouserplanswithcompetency, core_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDabcaa5d5d4c91915fc69b27695267c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr class="drag-samenode" data-id="{{competency.id}}">
    <td>
        {{#canmanagecoursecompetencies}}
        <span class="drag-handlecontainer float-sm-left"></span>
        <div class="float-sm-right">
            <a href="#" data-action="delete-competency-link" data-id="{{competency.id}}">
                {{#pix}}t/delete, core, {{#str}}delete{{/str}}{{/pix}}
            </a>
        </div>
        <div class="clearfix"></div>
        {{/canmanagecoursecompetencies}}
        {{#competency}}
            <a href="{{pluginbaseurl}}/user_competency_in_course.php?courseid={{courseid}}&competencyid={{competency.id}}&userid={{gradableuserid}}"
                   id="competency-info-link-{{competency.id}}"
                   title="{{#str}}viewdetails, tool_lp{{/str}}">
                <p><strong>{{{competency.shortname}}} <em>{{competency.idnumber}}</em></strong></p>
            </a>
            <p>{{{competency.description}}}</p>
        {{/competency}}
        {{#comppath}}
            <span class="float-sm-left">{{#str}}path, tool_lp{{/str}}&nbsp;</span>{{> tool_lp/competency_path }}
        {{/comppath}}
        {{#usercompetencycourse}}
            {{#grade}}
            <span class="badge {{#proficiency}}bg-success{{/proficiency}}{{^proficiency}}bg-danger{{/proficiency}} text-white">{{gradename}}</span>
            {{/grade}}
        {{/usercompetencycourse}}
        {{#canmanagecoursecompetencies}}
        <div data-region="coursecompetency-ruleoutcome">
            <label>
                {{#str}}uponcoursecompletion, tool_lp{{/str}}
                <select data-field="ruleoutcome" data-id="{{coursecompetency.id}}" class="custom-select">
                  {{#ruleoutcomeoptions}}
                     <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
                  {{/ruleoutcomeoptions}}
                </select>
            </label>
        </div>
        {{/canmanagecoursecompetencies}}
        <div data-region="coursecompetencyactivities">
        <p>
        <strong>{{#str}}activities{{/str}}</strong>
        <ul class="inline list-inline p-2">
        {{#coursemodules}}
            <li class="list-inline-item"><a href="{{url}}"><img class="icon" src="{{iconurl}}"> {{name}} </a></li>
        {{/coursemodules}}
        {{^coursemodules}}
            <li class="list-inline-item">{{#str}}noactivities, tool_lp{{/str}}</li>
        {{/coursemodules}}
        </ul>
        </p>
        </div>
        <div data-region="learningplans">
        <p>
        <strong>{{#str}}userplans, core_competency{{/str}}</strong>
        <ul class="inline list-inline p-2">
        {{#plans}}
            <li class="list-inline-item"><a href="{{pluginbaseurl}}/plan.php?id={{id}}">{{{name}}}</a></li>
        {{/plans}}
        {{^plans}}
            <li class="list-inline-item">{{#str}}nouserplanswithcompetency, core_competency{{/str}}</li>
        {{/plans}}
        </ul>
        </p>
        </div>
    </td>
    </tr>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <tr class="drag-samenode" data-id="';
                $value = $this->resolveValue($context->findDot('competency.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '    <td>
';
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->section94e87482559c81da2ea4fa534a587f74($context, $indent, $value);
                $value = $context->find('competency');
                $buffer .= $this->sectionC0a93a830e1bdba7bd36bfc4f1d0fba4($context, $indent, $value);
                $value = $context->find('comppath');
                $buffer .= $this->sectionFee07cb3b57ab052f0f7b9a745162387($context, $indent, $value);
                $value = $context->find('usercompetencycourse');
                $buffer .= $this->section9a43b7a75d8eb49c5344671498f30a44($context, $indent, $value);
                $value = $context->find('canmanagecoursecompetencies');
                $buffer .= $this->section08d9d84a4974a1be1392cd148f36cd22($context, $indent, $value);
                $buffer .= $indent . '        <div data-region="coursecompetencyactivities">
';
                $buffer .= $indent . '        <p>
';
                $buffer .= $indent . '        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section24a67fa020473241f6bf9a69b69d7be2($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '        <ul class="inline list-inline p-2">
';
                $value = $context->find('coursemodules');
                $buffer .= $this->section72b9f473fc016778bf48360e31a552d0($context, $indent, $value);
                $value = $context->find('coursemodules');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="list-inline-item">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa4a803c089c26a0a2019bf1954e8a7d($context, $indent, $value);
                    $buffer .= '</li>
';
                }
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        </p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div data-region="learningplans">
';
                $buffer .= $indent . '        <p>
';
                $buffer .= $indent . '        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section6a1322c6565f41374b0000292a58679d($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '        <ul class="inline list-inline p-2">
';
                $value = $context->find('plans');
                $buffer .= $this->sectionF182fad0eb01f0350c53edfb807d2b34($context, $indent, $value);
                $value = $context->find('plans');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="list-inline-item">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionE284c88c7c4e1ebb61be5d7e54215ba3($context, $indent, $value);
                    $buffer .= '</li>
';
                }
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        </p>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82d921192368247c8321959f9fbbe9c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesinactivity, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocompetenciesinactivity, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section964b073a38fdd7bb782cf3629b01b56d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#str}}nocompetenciesinactivity, tool_lp{{/str}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section82d921192368247c8321959f9fbbe9c4($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03e850bca9d66bc415422912b5bd6e07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetenciesincourse, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocompetenciesincourse, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section162358c28b46626a5b0ef954763a36a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managecompetenciesandframeworks, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'managecompetenciesandframeworks, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa239ecc6370f798366ffc4b2fc48682(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p><a href="{{manageurl}}">{{#str}}managecompetenciesandframeworks, tool_lp{{/str}}</a></p>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <p><a href="';
                $value = $this->resolveValue($context->find('manageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section162358c28b46626a5b0ef954763a36a3($context, $indent, $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section613613d384c0d3c987a261019bd6da90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/competencies\'], function(mod) {
    (new mod({{courseid}}, \'course\', {{pagecontextid}}));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_lp/competencies\'], function(mod) {
';
                $buffer .= $indent . '    (new mod(';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', \'course\', ';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c49fd6a3b94bb73a903cd71326b01e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_lp/course_competency_settings\'], function(Mod) {
    (new Mod(\'[data-action=configure-course-competency-settings]\'));
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_lp/course_competency_settings\'], function(Mod) {
';
                $buffer .= $indent . '    (new Mod(\'[data-action=configure-course-competency-settings]\'));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6452acc23e99b68630649c182e2455fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{#js}}
require([\'tool_lp/course_competency_settings\'], function(Mod) {
    (new Mod(\'[data-action=configure-course-competency-settings]\'));
});
{{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section0c49fd6a3b94bb73a903cd71326b01e7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
