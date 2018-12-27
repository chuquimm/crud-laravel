@extends('admin.template.main')
@section('title')
    Agregar Donante
@endsection

@section('content')
    <h1>Registro</h1>
    <div class="row">
        {!! Form::open(['route' => 'donantes.store', 'method' => 'POST', 'class' => 'col s12']) !!}
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
                    {!! Form::select('sangre', ['A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O']) !!}
                    {!! Form::label('sangre', 'Sangre') !!}
                </div>

                <div class="input-field col s4">
                    {!! Form::select('factor', ['+' => '-', '-' => '-']) !!}
                    {!! Form::label('factor', 'Factor') !!}
                </div>

                <div class="col s4">
                    <label>
                        {{-- <input type="checkbox"> --}}
                        {!! Form::checkbox("desconoce") !!}
                        <span>No conozco mi tipo de sangre</span>
                        {{-- {!! Form::label("desconoce", "Label") !!} --}}
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::text('lugar', null, ['id' => 'lugar', 'type' => 'text', 'class' => 'validate', 'requiered']) !!}
                    {!! Form::label('lugar', 'Ubicacion') !!}
                </div>
            </div>

        {!! Form::close() !!}
    </div>
@endsection

@section('script')
    <script src="{{ asset('js\create.js') }}"></script>   
@endsection
