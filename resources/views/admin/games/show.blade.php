@extends('layouts.admin')

@section('content')
    <h3 class="page-title">@lang('quickadmin.games.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.games.fields.home-team')</th>
                            <td field-key='home_team'>{{ $game->home_team->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.games.fields.away-team')</th>
                            <td field-key='away_team'>{{ $game->away_team->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.games.fields.begins')</th>
                            <td field-key='begins'>{{ $game->begins }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.games.fields.result1')</th>
                            <td field-key='result1'>{{ $game->result1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.games.fields.result2')</th>
                            <td field-key='result2'>{{ $game->result2 }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.games.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
