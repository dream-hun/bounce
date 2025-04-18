@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.event.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.event.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title"
                        id="title" value="{{ old('title', '') }}" required>
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.title_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="event_date">{{ trans('cruds.event.fields.event_date') }}</label>
                    <input class="form-control date {{ $errors->has('event_date') ? 'is-invalid' : '' }}" type="text"
                        name="event_date" id="event_date" value="{{ old('event_date') }}" required>
                    @if ($errors->has('event_date'))
                        <span class="text-danger">{{ $errors->first('event_date') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.event_date_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="event_time">{{ trans('cruds.event.fields.event_time') }}</label>
                    <input class="form-control timepicker {{ $errors->has('event_time') ? 'is-invalid' : '' }}"
                        type="text" name="event_time" id="event_time" value="{{ old('event_time') }}" required>
                    @if ($errors->has('event_time'))
                        <span class="text-danger">{{ $errors->first('event_time') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.event_time_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="location">{{ trans('cruds.event.fields.location') }}</label>
                    <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text"
                        name="location" id="location" value="{{ old('location', '') }}" required>
                    @if ($errors->has('location'))
                        <span class="text-danger">{{ $errors->first('location') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.location_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="featured_image">{{ trans('cruds.event.fields.featured_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}"
                        id="featured_image-dropzone">
                    </div>
                    @if ($errors->has('featured_image'))
                        <span class="text-danger">{{ $errors->first('featured_image') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.featured_image_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="ticket_url">{{ trans('cruds.event.fields.ticket_url') }}</label>
                    <input class="form-control {{ $errors->has('ticket_url') ? 'is-invalid' : '' }}" type="text"
                        name="ticket_url" id="ticket_url" value="{{ old('ticket_url', '') }}">
                    @if ($errors->has('ticket_url'))
                        <span class="text-danger">{{ $errors->first('ticket_url') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.ticket_url_helper') }}</span>
                </div>
                <div class="form-group">
                    <label>{{ trans('cruds.event.fields.status') }}</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status"
                        id="status">
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>
                            {{ trans('global.pleaseSelect') }}</option>
                        @foreach (App\Models\Event::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}"
                                {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.event.fields.status_helper') }}</span>
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

@section('scripts')
    <script>
        Dropzone.options.featuredImageDropzone = {
            url: '{{ route('admin.events.storeMedia') }}',
            maxFilesize: 5, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 5,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="featured_image"]').remove()
                $('form').append('<input type="hidden" name="featured_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="featured_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($event) && $event->featured_image)
                    var file = {!! json_encode($event->featured_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="featured_image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
