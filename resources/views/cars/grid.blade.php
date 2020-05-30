@extends('layout.app')

@section('content')    
    <div class="container">
        <h1 class="text-center">Carros<h1>                                     
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>marca</th>
                    <th>modelo</th>
                    <th>ano fabricação</th>
                    <th>ano modelo</th>
                    <th>placa</th>
                    <th>km</th>
                    <th>
                        <a href="{{ route('cars.create') }}" class="btn btn-info btn-sm" >Novo</a>                                               
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->marca }}</td>
                    <td>{{ $car->modelo }}</td>
                    <td>{{ $car->anoFabricao }}</td>
                    <td>{{ $car->anoModelo }}</td>
                    <td>{{ $car->placa }}</td>
                    <td>{{ $car->km }}</td>
                    <td>
                        <a href="{{ route('cars.edit', [$car->id]) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form method="POST" action="{{ route('cars.destroy', [$car->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
                            @csrf
                            <input type="hidden" name="_method" value="delete" >
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach               
            </tbody>
        </table>
    </div>
@endsection