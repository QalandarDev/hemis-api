<?php

class __Mustache_3f03b48cb51126e1fe3336a16d680b7e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '    .widget-user .widget-user-header {
';
        $buffer .= $indent . '        padding: 20px;
';
        $buffer .= $indent . '        height: 120px;
';
        $buffer .= $indent . '        border-top-right-radius: 3px;
';
        $buffer .= $indent . '        border-top-left-radius: 3px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .bg-blue {
';
        $buffer .= $indent . '        background-color: #0073b7 !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .bg-red, .bg-yellow, .bg-aqua, .bg-blue, .bg-light-blue, .bg-green, .bg-navy, .bg-teal, .bg-olive, .bg-lime, .bg-orange, .bg-fuchsia, .bg-purple, .bg-maroon, .bg-black, .bg-red-active, .bg-yellow-active, .bg-aqua-active, .bg-blue-active, .bg-light-blue-active, .bg-green-active, .bg-navy-active, .bg-teal-active, .bg-olive-active, .bg-lime-active, .bg-orange-active, .bg-fuchsia-active, .bg-purple-active, .bg-maroon-active, .bg-black-active, .callout.callout-danger, .callout.callout-warning, .callout.callout-info, .callout.callout-success, .alert-success, .alert-danger, .alert-error, .alert-warning, .alert-info, .label-danger, .label-info, .label-warning, .label-primary, .label-success, .modal-primary .modal-body, .modal-primary .modal-header, .modal-primary .modal-footer, .modal-warning .modal-body, .modal-warning .modal-header, .modal-warning .modal-footer, .modal-info .modal-body, .modal-info .modal-header, .modal-info .modal-footer, .modal-success .modal-body, .modal-success .modal-header, .modal-success .modal-footer, .modal-danger .modal-body, .modal-danger .modal-header, .modal-danger .modal-footer {
';
        $buffer .= $indent . '        color: #fff !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
';
        $buffer .= $indent . '        background-color: #dd4b39 !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .badge {
';
        $buffer .= $indent . '        display: inline-block;
';
        $buffer .= $indent . '        min-width: 10px;
';
        $buffer .= $indent . '        padding: 3px 7px;
';
        $buffer .= $indent . '        font-size: 12px;
';
        $buffer .= $indent . '        font-weight: bold;
';
        $buffer .= $indent . '        line-height: 1;
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '        white-space: nowrap;
';
        $buffer .= $indent . '        vertical-align: middle;
';
        $buffer .= $indent . '        background-color: #777777;
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .nav > li > a {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '        padding: 10px 15px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .nav-stacked > li > a {
';
        $buffer .= $indent . '        border-radius: 0;
';
        $buffer .= $indent . '        border-top: 0;
';
        $buffer .= $indent . '        border-left: 3px solid transparent;
';
        $buffer .= $indent . '        color: #444;
';
        $buffer .= $indent . '        text-decoration: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .nav-stacked > li > a:hover {
';
        $buffer .= $indent . '        border-color: green;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .box .nav-stacked > li {
';
        $buffer .= $indent . '        border-bottom: 1px solid #f4f4f4;
';
        $buffer .= $indent . '        margin: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .nav-stacked > li {
';
        $buffer .= $indent . '        float: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .nav > li {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .nav-stacked > li + li {
';
        $buffer .= $indent . '        margin-top: 2px;
';
        $buffer .= $indent . '        margin-left: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .pull-right {
';
        $buffer .= $indent . '        float: right !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '<section class="content">
';
        $buffer .= $indent . '    <div id="attendance-grid" data-pjax-container="">
';
        $buffer .= $indent . '        <div class="info-box box-mini" hidden="">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '                <div class="col-sm-6">
';
        $buffer .= $indent . '                    <span class="info-box-icon bg-green"><i class="fa fa-files-o"></i></span>
';
        $buffer .= $indent . '                    <div class="info-box-content ">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <span class="info-box-number">
';
        $buffer .= $indent . '                        IS 23-25                                    </span>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-sm-6">
';
        $buffer .= $indent . '                    <div class="info-box-content no-margin text-right text-center-sm">
';
        $buffer .= $indent . '                        <label class="hidden visible-xs plabel">Semestr</label>
';
        $buffer .= $indent . '                        <ul class="pagination pagination-sm psemester ">
';
        $buffer .= $indent . '                            <li class=" hidden-xs"><a href="#" class="plabel">Semestr</a></li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=11">1</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="active">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=12">2</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=13">3</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=14">4</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=15">5</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=16">6</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=17">7</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=18">8</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=19">9</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                            <li class="">
';
        $buffer .= $indent . '                                <a href="/education/subjects?semester=20">10</a>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="row">
';
        $value = $context->find('courses');
        $buffer .= $this->sectionF4c5ea38937152d3a857ac010720b1a4($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</section>
';

        return $buffer;
    }

    private function sectionF4c5ea38937152d3a857ac010720b1a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col col-md-6">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-blue">
                            <h5 class="widget-user-username">{{name}}</h5>
                            <h6 class="widget-user-desc">
                                {{subjectType}} |
                                {{total_acload}} soat | {{credit}}.0 kredit </h6>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li>
                                    <a href="/course/view.php?id={{id}}&filter=resource" data-pjax="0">
                                    Resurslar soni
                                    <span class="pull-right badge bg-blue">
                                    {{resources_count}}
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/education/tasks?subject=207" data-pjax="0">
                                        Topshiriqlar soni <span class="pull-right badge bg-red">
                                        0                                        /
                                        0                                    </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/test/index?subject=207" data-pjax="0">
                                        Mavzulashtirilgan testlar <span class="pull-right badge bg-red">
                                                0                                                /
                                                0                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="col col-md-6">
';
                $buffer .= $indent . '                    <!-- Widget: user widget style 1 -->
';
                $buffer .= $indent . '                    <div class="box box-widget widget-user">
';
                $buffer .= $indent . '                        <!-- Add the bg color to the header using any of the bg-* classes -->
';
                $buffer .= $indent . '                        <div class="widget-user-header bg-blue">
';
                $buffer .= $indent . '                            <h5 class="widget-user-username">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h5>
';
                $buffer .= $indent . '                            <h6 class="widget-user-desc">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('subjectType'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' |
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('total_acload'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' soat | ';
                $value = $this->resolveValue($context->find('credit'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '.0 kredit </h6>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="box-footer no-padding">
';
                $buffer .= $indent . '                            <ul class="nav nav-stacked">
';
                $buffer .= $indent . '                                <li>
';
                $buffer .= $indent . '                                    <a href="/course/view.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&filter=resource" data-pjax="0">
';
                $buffer .= $indent . '                                    Resurslar soni
';
                $buffer .= $indent . '                                    <span class="pull-right badge bg-blue">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('resources_count'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                                    </span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '                                <li>
';
                $buffer .= $indent . '                                    <a href="/education/tasks?subject=207" data-pjax="0">
';
                $buffer .= $indent . '                                        Topshiriqlar soni <span class="pull-right badge bg-red">
';
                $buffer .= $indent . '                                        0                                        /
';
                $buffer .= $indent . '                                        0                                    </span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                <li>
';
                $buffer .= $indent . '                                    <a href="/test/index?subject=207" data-pjax="0">
';
                $buffer .= $indent . '                                        Mavzulashtirilgan testlar <span class="pull-right badge bg-red">
';
                $buffer .= $indent . '                                                0                                                /
';
                $buffer .= $indent . '                                                0                                            </span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <!-- /.widget-user -->
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
