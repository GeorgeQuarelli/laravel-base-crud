@extends('layouts.app')

@section('title-page', 'lista studenti')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-3 mb-3">Lista Studenti</h1>
                    <a class="btn btn-primary" href="{{ route('students.create') }}">Inserisci Studente</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Matricola</th>
                            <th>Email</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $studente)

                            <tr>
                                <td>{{ $studente->id }}</td>
                                <td>{{ $studente->name }}</td>
                                <td>{{ $studente->lastname }}</td>
                                <td>{{ $studente->matricola }}</td>
                                <td>{{ $studente->email }}</td>
                                <td class="text-right">
                                    <a class="btn btn-info" href="{{ route('students.show', ['student' => $studente->id]) }}">Dettagli</a>
                                    <a class="btn btn-warning" href="#">Modifica</a>
                                    <a class="btn btn-danger" href="#">Elimina</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
