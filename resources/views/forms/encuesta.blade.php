<div class="card-body">
    <div class="custom-control custom-checkbox">
        {{ Form::hidden('finalizado', 0) }}
        {{ Form::checkbox('finalizado', 1, null, ['class' => 'custom-control-input', 'id' => 'finalizado']) }}
        {{ Form::label('finalizado', 'Finalizado', ['class' => 'custom-control-label']) }}
        @if ($errors->has('finalizado'))
            <span class="badge badge-danger">{{ $errors->first('finalizado') }}</span>
        @endif
    </div>
</div>