@extends('layouts.app')

@section('title-page', 'lista studenti')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col12">
                <h1>Lista Studenti</h1>
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
                                <td>
                                    <a class="btn btn-info" href="{{ route('students.show', ['student' => $studente->id]) }}">Dettagli</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
