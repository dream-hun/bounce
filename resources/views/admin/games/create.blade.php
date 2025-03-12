@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.game.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.games.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="team_one_id">{{ trans('cruds.game.fields.team_one') }}</label>
                    <select class="form-control select2 {{ $errors->has('team_one') ? 'is-invalid' : '' }}" name="team_one_id" id="team_one_id" required>
                        @foreach($team_ones as $id => $entry)
                            <option value="{{ $id }}" {{ old('team_one_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('team_one'))
                        <span class="text-danger">{{ $errors->first('team_one') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.game.fields.team_one_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="team_two_id">{{ trans('cruds.game.fields.team_two') }}</label>
                    <select class="form-control select2 {{ $errors->has('team_two') ? 'is-invalid' : '' }}" name="team_two_id" id="team_two_id" required>
                        @foreach($team_twos as $id => $entry)
                            <option value="{{ $id }}" {{ old('team_two_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('team_two'))
                        <span class="text-danger">{{ $errors->first('team_two') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.game.fields.team_two_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="avenue">{{ trans('cruds.game.fields.avenue') }}</label>
                    <input class="form-control {{ $errors->has('avenue') ? 'is-invalid' : '' }}" type="text" name="avenue" id="avenue" value="{{ old('avenue', '') }}" required>
                    @if($errors->has('avenue'))
                        <span class="text-danger">{{ $errors->first('avenue') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.game.fields.avenue_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="game_date">{{ trans('cruds.game.fields.game_date') }}</label>
                    <input class="form-control date {{ $errors->has('game_date') ? 'is-invalid' : '' }}" type="text" name="game_date" id="game_date" value="{{ old('game_date') }}" required>
                    @if($errors->has('game_date'))
                        <span class="text-danger">{{ $errors->first('game_date') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.game.fields.game_date_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="game_time">{{ trans('cruds.game.fields.game_time') }}</label>
                    <input class="form-control timepicker {{ $errors->has('game_time') ? 'is-invalid' : '' }}" type="text" name="game_time" id="game_time" value="{{ old('game_time') }}" required>
                    @if($errors->has('game_time'))
                        <span class="text-danger">{{ $errors->first('game_time') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.game.fields.game_time_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="ticket_url">{{ trans('cruds.game.fields.ticket_url') }}</label>
                    <input class="form-control {{ $errors->has('ticket_url') ? 'is-invalid' : '' }}" type="text" name="ticket_url" id="ticket_url" value="{{ old('ticket_url', '') }}" required>
                    @if($errors->has('ticket_url'))
                        <span class="text-danger">{{ $errors->first('ticket_url') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.game.fields.ticket_url_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
