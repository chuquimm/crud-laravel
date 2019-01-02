@extends('admin.template.main')
@section('title')
    Agregar Donante
@endsection

@section('content')
    <h1>Registro</h1>
    <div class="row">
        {!! Form::open(['route' => 'donantes.store', 'method' => 'POST', 'class' => 'col s12', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="input-field col s6">
                    {!! Form::text('nombre', null, ['id' => 'nombre', 'type' => 'text', 'class' => 'validate', 'requiered']) !!}
                    {!! Form::label('nombre', 'Nombre') !!}
                </div>

                <div class="input-field col s6">
                    {!! Form::text('apellido', null, ['id' => 'apellido', 'type' => 'text', 'class' => 'validate', 'requiered'] ) !!}
                    {!! Form::label('apellido', 'Apellido') !!}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::password('password', ['id' => 'password', 'class' => 'validate', 'requiered']) !!}
                    {!! Form::label('password', 'Password') !!}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::email('correo', null, ['id' => 'correo', 'class' => 'validate', 'requiered']) !!}
                    {!! Form::label('correo', 'Correo') !!}
                </div>
            </div>

            <div class="row">
                    <div class="input-field col s6">
                        {!! Form::text('dni', null, ['id' => 'dni', 'type' => 'text', 'class' => 'validate', 'requiered']) !!}
                        {!! Form::label('dni', 'DNI') !!}
                    </div>

                    <div class="input-field col s6">
                        {!! Form::text('celular', null, ['id' => 'celular', 'type' => 'text', 'class' => 'validate', 'requiered'] ) !!}
                        {!! Form::label('celular', 'Celular') !!}
                    </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::date('fecha', null, ['class' => 'datepicker']) !!}
                    {!! Form::label('fecha', 'Fecha de Nacimiento') !!}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::select('genero', ['Masculino' => 'Masculino', 'Femenino' => 'Fememnino']) !!}
                    {!! Form::label('genero', 'Genero') !!}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    {!! Form::select('sangre', ['A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'], null, ['placeholder' => 'Sangre', 'id' => 'sangre'])!!}
                    {!! Form::label('sangre', 'Sangre') !!}
                </div>

                <div class="input-field col s4">
                    {!! Form::select('factor', ['+' => '+', '-' => '-'], null, ['placeholder' => 'Factor', 'id' => 'factor']) !!}
                    {!! Form::label('factor', 'Factor') !!}
                </div>

                <div class="col s4">
                    <label>
                        {{-- {!! Form::checkbox("desconoce",null, ['id' => 'desconoce']) !!}
                        <span>No conozco mi tipo de sangre</span> --}}
                        <input type="checkbox" id="checkSangre" />
                        <span>No conozco mi tipo de sangre</span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::text('lugar', null, ['id' => 'lugar', 'type' => 'text', 'class' => 'validate', 'requiered']) !!}
                    {!! Form::label('lugar', 'Ubicacion') !!}
                </div>
            </div>

            <div class="row">
                <div class="col s4 m12 center">
                    <img src="{{ Storage::url('avatar.png') }}" alt="" class="circle responsive-img" width="20%">
                </div>
                <div class="col s8 m12 center">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" name="foto">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                            </div>
                    {{-- <div class="file-field input-field">
                        <div class="btn">
                            <span>Sube tu foto</span>
                            {!! Form::file('foto') !!}
                        </div>
                    </div>  --}}
                </div>
            </div>

            <div class="row">
                {{-- <div class="col s12 center">
                    <label>
                        {!! Form::checkbox("terminos", 1 , null, ['requiered']) !!}
                        <span>Acepto terminos</span>
                    </label>
                </div> --}}
                <div class="col s12 center">
                    {!! Form::submit('Registrarse', ["class" => "btn-large waves-effect waves-light"]) !!}
                </div>
            </div>

        {!! Form::close() !!}
    </div>
@endsection

@section('script')
    <script src="{{ asset('js\create.js') }}"></script>   
@endsection
