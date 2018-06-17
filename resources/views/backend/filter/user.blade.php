<?php /* ?>
<div class="row shadow-bg">
    <div class="col-xs-12 col-sm-12 bg-white">
        {{ Form::open(['method' => 'post', 'class' => 'form-horizontal form-filter', 'role' => 'search'])}}
        <div class="bg-white">
            <?php
                $title = "";
                $button = "";
                $type = "";
                $showInfo = 0;
            if (Route::currentRouteName() == 'contact.index') {
                $title = trans('app.list_contact');
                $button = "contact";
                $type = "contact";
            } elseif (Route::currentRouteName() == 'contact.favorite') {
                $title = trans('app.fav_contact');
                $button = "contact";
                $type = "favorite";
            } else {
                $title = trans('app.user_list');
                $showInfo = 1;
            }
            ?>
            @include("includes.page_header", ['title' => $title, 'icon' => '/image/title_icon_list.png', 'button' => $button, 'type' => $type ])
            <div class="box-body margin-top-25">
                <div class="form-group">
                    <div class="col-sm-4">
                        {!! Form::label('username', trans('app.fullname'), ['class' => 'col-sm-4 col-xs-4 control-label nowrap']) !!}
                        <div class="col-sm-8">
                            <?php $name = isset($filters['suggest_name']) ? $filters['suggest_name'] : '' ?>
                            {!! CommonHelper::createInputSuggestionUser('suggest_name', $name) !!}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('status', trans('app.status'), ['class' => 'col-sm-4 col-xs-4 control-label nowrap']) !!}
                        <div class="col-sm-8">
                            <?php $status = isset($filters['status']) ? $filters['status'] : '' ?>
                            {!! CommonHelper::createSelectBox($arrStatus, array("name" => "status", "class" => "form-control status"), $status, true, "app") !!}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('role', trans('app.user_type'), ['class' => 'col-sm-4 col-xs-4 control-label nowrap']) !!}
                        <div class="col-sm-8">
                            <?php $type = isset($filters['userType']) ? $filters['userType'] : '' ?>
                            {!! CommonHelper::createSelectBox($userType, array("name" => "userType", "class" => "form-control role"), $type, true, "") !!}
                        </div>
                    </div>
                </div>
                <div class="form-group margin-top-25">
                    @if ($showInfo == 1)
                    <div class="col-sm-4">
                        {!! Form::label('company_id', trans('app.company'), ['class' => 'col-sm-4 col-xs-4 control-label nowrap']) !!}
                        <div class="col-sm-8">
                            <?php $company = isset($filters['company']) ? $filters['company'] : '' ?>
                            {!! CommonHelper::createSelectBox($arrCompany, array("name" => "company", "class" => "form-control company"), $company, true) !!}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('team_id', trans('app.team'), ['class' => 'col-sm-4 col-xs-4 control-label nowrap']) !!}
                        <div class="col-sm-8">
                            <?php $team = isset($filters['team']) ? $filters['team'] : '' ?>
                            {!! CommonHelper::createSelectBox($arrTeam, array("name" => "team", "class" => "form-control team"), $team, true) !!}
                        </div>
                    </div>
                    @endif
                    <div class="col-sm-4">
                        {!! Form::label('project_id', trans('app.project'), ['class' => 'col-sm-4 col-xs-4 control-label nowrap']) !!}
                        <div class="col-sm-8">
                            <?php $project = isset($filters['project']) ? $filters['project'] : '' ?>
                            {!! CommonHelper::createSelectBox($arrProject, array("name" => "project", "class" => "form-control project"), $project, true) !!}
                        </div>
                    </div>
                    @if ($showInfo == 0)
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            {!! Form::submit(trans('vi.ot.button.search'), ['class' => 'btn btn-primary btn-md pull-right btn-search-3']) !!}
                        </div>
                    @endif
                </div>
            </div>
            @if ($showInfo == 1)
            <div class="margin-top-10">
                {!! Form::submit(trans('vi.ot.button.search'), ['class' => 'btn btn-primary btn-md pull-right custom-button-search']) !!}
            </div>
            @endif
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script src="{{asset('bower_components/adminlte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script type="text/javascript">
    //create ajax suggest input
    jQuery(document).ready(function(){
        ajaxSuggestUser('suggest_name', 'user_id', "{{ route('ajax.listuser') }}");
    });
</script>
 <?php */ ?>