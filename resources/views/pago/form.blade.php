<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_tel') }}
            {{ Form::text('numero_tel', $pago->numero_tel, ['class' => 'form-control' . ($errors->has('numero_tel') ? ' is-invalid' : ''), 'placeholder' => 'Numero Tel']) }}
            {!! $errors->first('numero_tel', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $pago->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $pago->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_pago') }}
            {{ Form::text('monto_pago', $pago->monto_pago, ['class' => 'form-control' . ($errors->has('monto_pago') ? ' is-invalid' : ''), 'placeholder' => 'Monto Pago']) }}
            {!! $errors->first('monto_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_pago') }}
            {{ Form::text('fecha_pago', $pago->fecha_pago, ['class' => 'form-control' . ($errors->has('fecha_pago') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pago']) }}
            {!! $errors->first('fecha_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plan') }}
            {{ Form::text('plan', $pago->plan, ['class' => 'form-control' . ($errors->has('plan') ? ' is-invalid' : ''), 'placeholder' => 'Plan']) }}
            {!! $errors->first('plan', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>