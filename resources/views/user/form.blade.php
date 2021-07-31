<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre',$user->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido',$user->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo',$user->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clave') }}
            {{ Form::text('clave',$user->clave, ['class' => 'form-control' . ($errors->has('clave') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('clave', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupo') }}
            {!! $errors->first('grupo', '<div class="invalid-feedback">:message</p>') !!}
            <select name="grupo" id="grupo_id">
                <option value="grupo a"> Grupo A</option>
                <option value="grupo b"> Grupo B</option>
                <option value="grupo c"> Grupo C</option>
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('empresa') }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</p>') !!}
         
            <select name="empresa_id" id="empresa_id">
                @foreach ($lista_empresa as $empresa)
                    <option value="{{$empresa->id}}" {{$empresa->id == $user->empresa_id ? 'selected' : ''}}>{{$empresa->nombres}}</option>
                @endforeach
            </select>
            
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
