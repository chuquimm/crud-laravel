@extends('admin.template.main')

@section('title')
    Listar Donantes    
@endsection

@section('content')
    <div class="conteiner">
        <table class="highlight centered responsive-table">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Sangre</th>
                <th>Acción</th>
            </thead>
            <tbody>
                @foreach ($donantes as $donante)
                    <tr>
                        <td>{{$donante->id}}</td>
                        <td>{{$donante->nombre}}</td>
                        <td>{{$donante->apellido}}</td>
                        <td>{{$donante->correo}}</td>
                        <td>{{$donante->sangre}}{{$donante->factor}}</td>
                        <td>
                            <a class="btn-floating waves-effect waves-light red"><i class="material-icons">create</i></a>
                            <a class="btn-floating waves-effect waves-light red"><i class="material-icons">clear</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $donantes->render() !!}
    </div>
@endsection