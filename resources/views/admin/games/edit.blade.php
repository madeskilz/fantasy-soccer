@extends('layouts.admin')

@section('content')
    <h3 class="page-title">@lang('quickadmin.games.title')</h3>
    
    {!! Form::model($game, ['method' => 'PUT', 'route' => ['admin.games.update', $game->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('home_team_id', trans('quickadmin.games.fields.home-team').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('home_team_id', $home_teams, old('home_team_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('home_team_id'))
                        <p class="help-block">
                            {{ $errors->first('home_team_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('away_team_id', trans('quickadmin.games.fields.away-team').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('away_team_id', $away_teams, old('away_team_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('away_team_id'))
                        <p class="help-block">
                            {{ $errors->first('away_team_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('begins', trans('quickadmin.games.fields.begins').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('begins', old('begins'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('begins'))
                        <p class="help-block">
                            {{ $errors->first('begins') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('result1', trans('quickadmin.games.fields.result1').'', ['class' => 'control-label']) !!}
                    {!! Form::number('result1', old('result1'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('result1'))
                        <p class="help-block">
                            {{ $errors->first('result1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('result2', trans('quickadmin.games.fields.result2').'', ['class' => 'control-label']) !!}
                    {!! Form::number('result2', old('result2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('result2'))
                        <p class="help-block">
                            {{ $errors->first('result2') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.datetime').datetimepicker({
                format: "{{ config('app.datetime_format_moment') }}",
                locale: "{{ App::getLocale() }}",
                sideBySide: true,
            });
            
        });
    </script>
            
@stop